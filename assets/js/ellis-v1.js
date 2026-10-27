let prevScrollpos = window.scrollY;
let header = document.querySelector(".header");
console.log(header);
window.onscroll = function () {
  let currentScrollPos = window.scrollY;
  if (currentScrollPos <= 100) {
    header.style.transform = "translateY(0px)";
    header.classList.remove('primary');
  } else if (prevScrollpos > currentScrollPos) {
    header.style.transform = "translateY(0px)";
    header.classList.add('primary');
  } else {
    header.style.transform = "translateY(-50px)";
    header.classList.add('primary');
  }
  prevScrollpos = currentScrollPos;
};

const menuBar = document.querySelector(".menuBar");
const menuBox = document.querySelector(".webQ_menu");
const clsBox = document.querySelector(".clsMenu");
const classes = menuBox.classList;
const headerNav = document.querySelector(".nav");

menuBar.addEventListener("click", (e) => {
  e.preventDefault();
  if (
    e.target.matches(".nav-lines") ||
    e.target.matches(".nav-lines-ico") ||
    e.target.matches(".nav-lines-btn") ||
    e.target.matches(".clsMenu")
  ) {
    classes.toggle("active");
  }
});


const clearMegaMenu = () => {
  let subMenuContainer = Array.from(
    document.querySelectorAll(".ellis-mega-menu")
  );
  // console.log(subMenuContainer);
  subMenuContainer.map((index, elem) => {
    // console.log(`${index}, ${elem}`);
    index.classList.remove("active");
  });
};

const clearSubMenu = () => {
  let subMenuContainer = Array.from(
    document.querySelectorAll(".subMenuContainer")
  );
  // console.log(subMenuContainer);
  subMenuContainer.map((index, elem) => {
    console.log(`${index}, ${elem}`);
    index.classList.remove("active");
  });
};

const clearMenuTabs = (curTab) => {
  let menuTabs = Array.from(
    document.querySelectorAll(`.tabCtrl_${curTab}`)
  );
  // console.log(subMenuContainer);
  menuTabs.map((index, elem) => {
    // console.log(`${index}, ${elem}`);
    index.classList.remove("active");
  });

  let tabContents = Array.from(document.querySelectorAll(`.tab_${curTab}`));
  tabContents.map((index, elem) => {
    index.classList.remove('active');
  });
}

const setMenuTab = (tabId) => {
  if (document.getElementById(tabId)) {
    let tab = document.getElementById(tabId);
    console.log(subMenu);
    tab.classList.add("active");
  }
}

if (document.querySelector(".popUp-notification")) {
  let popUI = document.querySelector(".popUp-notification");

  setInterval((e) => {
    popUI.classList.toggle("active");
  }, 15000);

  popUI.addEventListener("click", (e) => {
    if (e.target.matches("i.clsPopUp")) {
      popUI.classList.remove("active");
    }
  });
}

if (document.querySelector(".viewModal")) {
  let modalUI = document.querySelector(".viewModal");
  if (document.querySelector(".modalBtn")) {
    let modalBtn = document.querySelector(".modalBtn");
    modalBtn.addEventListener("click", (e) => {
      e.preventDefault();
      modalUI.classList.add("active");
    });
  }
  if (document.querySelector(".modalCls")) {
    let modalClsBtn = document.querySelector(".modalCls");
    modalClsBtn.addEventListener("click", () => {
      modalUI.classList.remove("active");
    });
  }
}


function elemMultiplier(trackCls) {
  if (document.querySelector(`.${trackCls}`)) {
    const sliderTrack = document.querySelector(`.${trackCls}`);
    const slides = Array.from(sliderTrack.children);
    slides.forEach((slide) => {
      const clone = slide.cloneNode(true);
      sliderTrack.appendChild(clone);
    })
  }
}


function duplicateSlides(sliderId) {
  if (document.querySelector(`#${sliderId} .slide-track`)) {
    const sliderTrack = document.querySelector(`#${sliderId} .slide-track`);
    const slides = Array.from(sliderTrack.children);
    slides.forEach((slide) => {
      const clone = slide.cloneNode(true);
      sliderTrack.appendChild(clone);
    })
  }
}

duplicateSlides("slider1");
duplicateSlides("slider2");
duplicateSlides("slider3");



function numberCounter(targetElement) {
  if (targetElement) {
    //initialise counter
    let counterNumber = 0;
    //get final number
    let finalNumber = targetElement.getAttribute("data-final-count") * 1;
    if (typeof finalNumber === 'number') {
      const updateCounter =
        setInterval(() => {
          counterNumber++;
          let textUpdate = `${counterNumber}K`
          targetElement.textContent = textUpdate;
          if (counterNumber >= finalNumber) { clearInterval(updateCounter) }
        }, 100)
    }
  }
}


function animateElem(targetElement) {
  if (targetElement) {
    //get animation class
    console.log("target triggered")
    let animationCls = targetElement.getAttribute("data-animate");
    targetElement.classList.add(animationCls, 'scrolled')
  }
}


function endElemAnimation(targetElement) {
  //get animation class
  let animationCls = targetElement.getAttribute("data-animate");
  if (targetElement.classList.contains(animationCls))
    targetElement.classList.remove(animationCls, 'scrolled')
}

const options = {
  root: null,
  rootMargin: '0px',
  threshold: 0.1
};

const handleIntersection = (entries, observer) => {
  entries.forEach(entry => {
    let targetElement = entry.target;
    // console.log(targetElement);
    if (entry.isIntersecting) {
      // console.log('entry intersection')
      animateElem(targetElement);
      observer.unobserve(entry.target); // Stop observing after first visibility
    } else {
      //cancel animation
      // console.log(targetElement);
      endElemAnimation(targetElement)
    }
  });
};

const observer = new IntersectionObserver(handleIntersection, options);

if (document.querySelector('.webQ_ani')) {
  let pageUIElems = document.querySelectorAll('.webQ_ani');
  //get all page elements with animation class
  const uiElems = Array.from(pageUIElems);
  for (let key in uiElems) {
    // console.log(pageUIElems[key]);
    observer.observe(pageUIElems[key]);
  }
}

if (document.querySelector('.swirlCard')) {
  let swirlCards = document.querySelectorAll('.swirlCard');
  //get all page elements with animation class
  const uiElems = Array.from(swirlCards);
  for (let key in uiElems) {
    // console.log(swirlCards[key]);
    observer.observe(swirlCards[key]);
  }
}


$(function () {
  //caches a jQuery object containing the header element
  const scrollBtn = document.querySelector(".scrollTopCont");
  let whatsAppTimeout;

  const hidewhatsAppConnect = () => {
    const whatsAppEl = document.getElementById('whatsAppConnect');
    if (!whatsAppEl) return;

    whatsAppEl.classList.remove('active');

    if (whatsAppTimeout) {
      clearTimeout(whatsAppTimeout);
    }

    whatsAppTimeout = setTimeout(() => {
      whatsAppEl.classList.add('active');
    }, 5000);
  };

  $(window).scroll(function () {
    let scroll = $(window).scrollTop();

    hidewhatsAppConnect();

    if (scroll >= 1020) {
      scrollBtn.classList.add("active");
      if (document.getElementById('whatsAppConnect')) {
        document.getElementById('whatsAppConnect').classList.add('reset');
      }
    } else {
      scrollBtn.classList.remove("active");
      if (document.getElementById('whatsAppConnect')) {
        document.getElementById('whatsAppConnect').classList.remove('reset');
      }
    }
  });
});

function scrollToTop() {
  document.documentElement.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}
//target scroll btn
const scrollBtn = document.querySelector(".scrollTopBtn");
scrollBtn.addEventListener("click", scrollToTop);

elemMultiplier('top-slider');


//handle navigation mega menu
const navHeader = document.querySelector(".header");
if (navHeader) {
  navHeader.addEventListener("mouseover", (e) => {
    // clearMegaMenu();
    if (e.target.getAttribute("data-submenu")) {
      // console.log(`${e.target} has the data-submenu attribute of ${e.target.getAttribute("data-submenu")}`);

      if (document.querySelector(`.${e.target.getAttribute("data-submenu")}`)) {
        clearMegaMenu();
        let subMenu = document.querySelector(`.${e.target.getAttribute("data-submenu")}`);
        console.log(subMenu);
        subMenu.classList.add("active");
        subMenu.addEventListener("mouseleave", (e) => {
          subMenu.classList.remove("active");
        });

      }
    }
  });

  navHeader.addEventListener("mouseleave", (e) => {
    clearMegaMenu();
  });

  navHeader.addEventListener("click", (e) => {
    if (e.target.classList.contains('tabCtrl_menu')) {
      e.preventDefault();
      //get the current tab
      let curTab = e.target.getAttribute("data-parent");
      console.log(curTab);
      clearMenuTabs(curTab);
      e.target.classList.add('active');
      // let tabContents = Array.from(document.querySelectorAll('.tabContent'));
      // tabContents.map((index, elem) => {
      //   index.classList.remove('active');
      // });
      if (document.getElementById(`${e.target.getAttribute("href")}`)) {
        let tab = document.getElementById(`${e.target.getAttribute("href")}`);
        // console.log(tab);
        tab.classList.add("active");
      }
    }
  });
}


const imgAnimation = (containerClass, duration) => {
  //set default animation type
  let animation = 'fade-in';
  if (document.querySelector(`.${containerClass}`)) {
    let containerElem = document.querySelector(`.${containerClass}`);
    if (containerElem.getAttribute("data-animation")) {
      animation = containerElem.getAttribute("data-animation");
    }

    //get all the img elements in the container
    let elemArray = containerElem.querySelectorAll('img');

    console.log(elemArray);

    const showElem = (index) => {
      console.log(index);
      if (index > 0 && index < elemArray.length) {
        elemArray[index - 1].classList.remove(`${animation}`, 'active')
      } else {
        elemArray[elemArray.length - 1].classList.remove(`${animation}`, 'active')
      }
      elemArray[index].classList.add(`${animation}`, 'active');
      // console.log(elemArray[index]);
    }

    //initialize counter
    let counter = 1;
    //show the first element in array on load
    elemArray[0].classList.add(`${animation}`, 'active');

    //check for others and alternate display of list items
    setInterval(() => {
      console.log(counter);
      showElem(counter);
      //reset counter
      if (counter == (elemArray.length - 1)) {
        counter = 0;
      } else {
        counter++;
      }
    }, duration)

  }
}

imgAnimation('img-grp-container', 5000);

const closeGroupItems = async (grpClass) => {
  try {

    //check if elements with group class exist
    if (document.querySelectorAll(`.${grpClass}`)) {
      let grpItems = document.querySelectorAll(`.${grpClass}`);
      grpItems.forEach((elem, key) => {
        elem.classList.remove('active');
      })
    }
  } catch (error) {
    console.error(error)
  }
}

const activateGroupItem = (e) => {
  console.log(e.target.classList);
  e.target.classList.add('active');
}

const activateItem = (id) => {
  document.getElementById(id).classList.add('active');
}

const closeDropDown = () => {
  let subMenuContainer = Array.from(
    document.querySelectorAll(".nf_mobile_dropdown")
  );
  // console.log(subMenuContainer);
  subMenuContainer.map((index, elem) => {
    // console.log(`${index}, ${elem}`);
    index.classList.remove("active");
  });
};

const openDropDown = (elemId) => {
  document.getElementById(elemId).classList.add('active');
}

if (document.querySelector('.mobile_Menu')) {
  const mobileMenu = document.querySelector('.mobile_Menu');
  mobileMenu.addEventListener('click', (e) => {
    if (e.target.matches('.drop-menu')) {
      e.preventDefault();
      let dropDownId = e.target.getAttribute('data-id');
      openDropDown(dropDownId);
    }

    if (e.target.matches('.closeDropDown')) {
      e.preventDefault();
      closeDropDown();
    }
  })
}

if (document.querySelector('.pageSlider')) {

  pageSlider('topSellerSliderContainer', 'topSellerSlider', 'topSellerTrackerCont');
  pageSlider('newTrendingSliderContainer', 'newTrendingSlider', 'newTrendingTrackerCont');
  pageSlider('dealsSliderContainer', 'dealsSlider', 'dealsTrackerCont');
  pageSlider('shopByAgeSliderContainer', 'shopByAgeSlider', 'shopByAgeTrackerCont');
}

if (document.querySelector('.shwProfile')) {
  let profileIcons = document.querySelectorAll('i.shwProfile');
  let profileBtns = document.querySelectorAll('span.showProfile');
  // console.log(profileBtns);
  profileBtns.forEach((elem, key) => {
    console.log(elem);
    elem.addEventListener('click', (e) => {
      e.stopPropagation();
      console.log('child-clicked');
      if (e.target.matches('i.shwProfile') || e.target.matches('span.showProfile')) {

        //get the data-fetch attribute value
        let loc = e.target.getAttribute("data-fetch");
        console.log(loc);
        loadUp(loc + '.php')
      }
    })
  })
  profileIcons.forEach((elem, key) => {
    elem.addEventListener('click', (e) => {
      e.stopPropagation()
      console.log('icon-clicked');
      if (e.target.matches('i.shwProfile') || e.target.matches('span.showProfile')) {

        //get the data-fetch attribute value
        let loc = e.target.getAttribute("data-fetch");
        console.log(loc);
        loadUp(loc + '.php')
      }
    })
  })
}

document.addEventListener('click', (e) => {

  if (e.target.matches('i.clsPreview')) {
    let modalContainer = document.querySelector('.profileModal');
    modalContainer.classList.remove('active');
    modalContainer.innerHTML = "";
  }

  if (e.target.matches('.individualCtrl')) {
    let elem = e.target;
    //close or deactivate all related items
    closeGroupItems('individualCtrl');
    closeGroupItems('individualTab');
    let elemId = elem.getAttribute('data-attribute');
    activateItem(elemId);
    activateGroupItem(e);
  }

  if (e.target.matches('.grpCtrl')) {
    let elem = e.target;
    //close or deactivate all related items
    closeGroupItems('grpCtrl');
    closeGroupItems('grpTab');
    let elemId = elem.getAttribute('data-attribute');
    activateItem(elemId);
    activateGroupItem(e);
  }
  if (e.target.matches('.cart-btn') || e.target.matches('.cart-ico')) {
    e.preventDefault();
    const cartBox = document.querySelector('.ellis-cart');
    cartBox.classList.toggle('active');
  }
  if (!e.target.closest('.webQ_menu') && !e.target.closest('.menuBar') && !e.target.closest('.ellis-cart') && !e.target.closest('.cart-ico') && !e.target.closest('.cart-btn') || e.target.matches('.clsMenu')) {
    const cartBox = document.querySelector('.ellis-cart');
    if (cartBox.classList.contains('active'))
      cartBox.classList.remove('active');
    const menu = document.querySelector('.webQ_menu');
    if (menu.classList.contains('active'))
      menu.classList.remove('active');
  }
})

const loadUp = async (url) => {
  try {
    console.log(url);
    const response = await fetch(url); // Wait for the fetch to complete

    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }

    const data = await response.text(); // Wait for the JSON parsing to complete

    let modalContainer = document.querySelector('.profileModal');
    modalContainer.innerHTML = data;
    modalContainer.classList.add('active');

    // console.log(data);
  } catch (error) {
    console.error('Fetch error:', error.message);
  }
}