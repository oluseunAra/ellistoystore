

const pageSlider = (mainContainer, itemClass, trackerCont) => {
    const container = document.querySelector(`.${mainContainer}`);
    if (!container) return;

    const baseItems = Array.from(container.querySelectorAll(`.${itemClass}`));
    if (!baseItems.length) return;

    const trackerContainer = document.querySelector(`.${trackerCont}`);
    if (!trackerContainer) return;

    // Slider state
    let currentIndex = 0;
    let slideWidth = 0;
    let slideGap = 0;
    let slidesPerPage = 1;
    let visibleCount = baseItems.length;
    let cloneCount = 0;
    let startIndex = 0;
    let maxIndex = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;
    let isPointerDown = false;
    let startX = 0;
    let animationFrameId = null;
    let isJumping = false;

    const setTrackStyles = () => {
        container.style.touchAction = 'pan-y';
        container.style.willChange = 'transform';
        container.style.transition = 'transform 260ms ease-out';
    };

    const clampIndex = (idx) => Math.max(startIndex, Math.min(idx, maxIndex));

    const getRealIndex = (idx) => {
        // Convert the internal index (including clones) to the real item index
        const offset = idx - startIndex;
        return ((offset % visibleCount) + visibleCount) % visibleCount;
    };

    const jumpToIndex = (idx) => {
        // Jump without transition (used when looping)
        const prevTransition = container.style.transition;
        container.style.transition = 'none';
        currentIndex = idx;
        applyTransform();
        // Force repaint so transition reset is applied
        container.getBoundingClientRect();
        container.style.transition = prevTransition;
    };

    const applyTransform = () => {
        currentTranslate = -(currentIndex * (slideWidth + slideGap));
        container.style.transform = `translateX(${currentTranslate}px)`;
    };

    const updateTracker = () => {
        trackerSpans.forEach((span, index) => {
            span.classList.toggle('active', index === getRealIndex(currentIndex));
        });
    };

    const handleTransitionEnd = () => {
        if (!isJumping) return;

        // If we moved into cloned area, jump back to the real slide
        if (currentIndex > maxIndex) {
            jumpToIndex(startIndex);
        } else if (currentIndex < startIndex) {
            jumpToIndex(maxIndex);
        }

        isJumping = false;
        updateTracker();
    };

    const setClones = (sourceClass, cloneClass) => {
        // Remove existing clones
        container.querySelectorAll(`.${cloneClass}`).forEach((el) => el.remove());

        // Fetch source items by the first class
        const sourceItems = Array.from(container.querySelectorAll(`.${sourceClass}`));
        if (!sourceItems.length) return;

        // Clone slides for the loop effect
        // Ensure we always clone at least 4 items for smoother looping behavior
        cloneCount = Math.max(4, Math.min(slidesPerPage, visibleCount));
        if (cloneCount === 0) return;

        // Prepend clones from the end
        for (let i = cloneCount - 1; i >= 0; i--) {
            const clone = sourceItems[i % sourceItems.length].cloneNode(true);
            clone.classList.add(cloneClass);
            container.prepend(clone);
        }

        // Append clones from the start
        for (let i = 0; i < cloneCount; i++) {
            const clone = sourceItems[i % sourceItems.length].cloneNode(true);
            clone.classList.add(cloneClass);
            container.append(clone);
        }
    };

    const updateComputedSizes = () => {

        setClones(itemClass, mainContainer);

        const containerRect = container.getBoundingClientRect();
        const firstRect = baseItems[0].getBoundingClientRect();
        slideWidth = firstRect.width;

        if (baseItems.length > 1) {
            const secondRect = baseItems[1].getBoundingClientRect();
            slideGap = Math.max(0, secondRect.left - (firstRect.left + firstRect.width));
        } else {
            slideGap = 0;
        }

        const fullSlide = slideWidth + slideGap;
        slidesPerPage = Math.max(1, Math.floor((containerRect.width + slideGap) / fullSlide));
        visibleCount = baseItems.length;

        startIndex = cloneCount;
        maxIndex = startIndex + visibleCount - 1;

        // Start on the first non-cloned slide
        currentIndex = startIndex;

        updateTracker();
        applyTransform();
    };

    const moveTo = (nextIndex) => {
        currentIndex = nextIndex;
        updateTracker();
        applyTransform();

        if (currentIndex > maxIndex) {
            isJumping = true;
        } else if (currentIndex < startIndex) {
            isJumping = true;
        }
    };

    const goToRealIndex = (index) => {
        moveTo(startIndex + index);
    };

    const handlePointerDown = (event) => {
        if (event.pointerType === 'mouse' && event.button !== 0) return;
        if (event.target.closest('.shwProfile')) return;
        if (event.target.closest('.showProfile')) return;
        isPointerDown = true;
        startX = event.clientX;
        prevTranslate = currentTranslate;
        container.setPointerCapture(event.pointerId);
        // Disable transition during drag for snappier feel
        container.style.transition = 'none';
        animationFrameId = requestAnimationFrame(() => {
            container.style.transform = `translateX(${currentTranslate}px)`;
        });
    };

    const handlePointerMove = (event) => {
        if (!isPointerDown) return;
        if (event.target.closest('.shwProfile')) return;
        if (event.target.closest('.showProfile')) return;
        const deltaX = event.clientX - startX;
        currentTranslate = prevTranslate + deltaX;
        container.style.transform = `translateX(${currentTranslate}px)`;
    };

    const handlePointerUp = () => {
        if (!isPointerDown) return;
        isPointerDown = false;
        cancelAnimationFrame(animationFrameId);

        const movedBy = currentTranslate - prevTranslate;
        const threshold = Math.max(30, slideWidth / 4);

        // Re-enable transition so slides animate into place
        setTrackStyles();

        if (movedBy < -threshold) {
            moveTo(currentIndex + 1);
        } else if (movedBy > threshold) {
            moveTo(currentIndex - 1);
        } else {
            applyTransform();
        }
    };

    // Build tracker UI
    trackerContainer.innerHTML = '';

    const prevBtn = document.createElement('i');
    prevBtn.classList.add('bi', 'bi-chevron-left', 'slideLeft', `${trackerCont}-slideLeft`);
    prevBtn.setAttribute('role', 'button');
    prevBtn.addEventListener('click', () => moveTo(currentIndex - 1));
    trackerContainer.appendChild(prevBtn);

    const trackerSpans = baseItems.map((_, index) => {
        const span = document.createElement('span');
        span.classList.add('track-ico');
        span.dataset.index = index;
        span.addEventListener('click', () => goToRealIndex(index));
        trackerContainer.appendChild(span);
        return span;
    });

    const nextBtn = document.createElement('i');
    nextBtn.classList.add('bi', 'bi-chevron-right', 'slideRight', `${trackerCont}-slideRight`);
    nextBtn.setAttribute('role', 'button');
    nextBtn.addEventListener('click', () => moveTo(currentIndex + 1));
    trackerContainer.appendChild(nextBtn);

    setTrackStyles();
    updateComputedSizes();

    window.addEventListener('resize', updateComputedSizes);
    container.addEventListener('transitionend', handleTransitionEnd);

    container.addEventListener('pointerdown', handlePointerDown);
    container.addEventListener('pointermove', handlePointerMove);
    container.addEventListener('pointerup', handlePointerUp);
    container.addEventListener('pointercancel', handlePointerUp);
    container.addEventListener('lostpointercapture', handlePointerUp);
};

// pageSlider('projectSliderContainer', 'projectSlider', 'projectTrackerCont');
