// Global Options
options = {
    //disable: false, // Disable JOS gloabaly | Values :  'true', 'false'
    debugMode: true, // Enable JOS debug mode | Values :  'true', 'false'
    passive: false, // Set the passive option for the scroll event listener | Values :  'true', 'false'

    once: false, // Disable JOS after first animation | Values :  'true', 'false'
    animation: "fade", // JOS global animation type | Values :  'fade', 'slide', 'zoom', 'flip', 'fade-right', 'fade-left', 'fade-up', 'fade-down', 'zoom-in-right', 'zoom-in-left', 'zoom-in-up', 'zoom-in-down', 'zoom-out-right', 'zoom-out-left', 'zoom-out-up', 'zoom-out-down', 'flip-right', 'flip-left', 'flip-up', 'flip-down, "my-custom-animation"
    timingFunction: "ease-in-out", // JOS global timing function | Values :  'ease', 'ease-in', 'ease-out', 'ease-in-out', 'linear', 'step-start', 'step-end', 'steps()', 'cubic-bezier()', 'my-custom-timing-function'
    threshold: 0, // Set gloabal the threshold for the element to be visible | Values :  0-1
    delay: 0.7, // Set global the delay for the animation to start | Values :  0,1,2,3,4,5
    duration: 1, // Set global the duration for the animation playback | Values :  flota : 0-1 & int : 0,1,2,3,4,5

    // rootMargin_top: "0%", // Set by which percent the element should animate out (Recommended value between 10% to -30%)
    // rootMargin_bottom: "-50%", // Set by which percent the element should animate out (Recommended value between -10% to -60%)
    // rootMargin: "0% 0% -50% 0%", // Set the root margin for the element to be visible | Values :  _% _% _% _%  (automaticaly set)
    // intersectionRatio: 0.4, // Set the intersection ratio between which the element should be visible | Values :  0-1 (automaticaly set)
    // rootMargin: jos_rootMargin_top + " 0% " + jos_rootMargin_bottom + " 0%", // Set the root margin for the element to be visible | Values :  _% _% _% _%  (automaticaly set)

    // animate_out: false, // Set whether elements should animate out while scrolling past them | Values :  'true', 'false'
    // debounce: 0, // Set global the debounce time/rate for listening to scroll events | Values :  0-1000
};

// JOS.init(options);
JOS.init(options);