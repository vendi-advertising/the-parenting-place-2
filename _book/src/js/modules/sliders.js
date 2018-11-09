import {
    tns
}
from "../libs/tiny-slider"

import {
    nodeForEach
} from "./utils.js"


let standardSliders = document.querySelectorAll("[class^='standard-slider-']"),
    tinySliders = [];

nodeForEach(standardSliders, (index, value) => {
    let custom = tns({
        "container": `.standard-slider-${index}`,
        "items": 3,
        "controlsContainer": `#customize-controls-${index}`,
        "navContainer": `#customize-thumbnails-${index}`,
        "navAsThumbnails": true,
        "autoplay": false,
        "autoplayTimeout": 1000,
        "autoplayButton": `#customize-toggle-${index}`,
        "speed": 1000
    })
    tinySliders.push(custom);
})


let sliders = { tinySliders }


export {
    sliders
}