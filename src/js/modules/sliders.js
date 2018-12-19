import {
    tns
}
from "../libs/tiny-slider"

import {
    nodeForEach
} from "./utils.js"


let standardSliders = document.querySelectorAll("[class^='standard-slider-']");
let smallSliders = document.querySelectorAll("[class^='small-slider-']");
let tinySliders = [];

nodeForEach(standardSliders, (index, value) => {
    let custom = tns({
        "container": `.standard-slider-${index}`,
        "items": 3,
        "controlsContainer": `#customize-controls-${index}`,
        "autoplay": false,
        "speed": 1000
    })
    tinySliders.push(custom);
})

nodeForEach(smallSliders, (index, value) => {
    let customSmall = tns({
        "container": `.small-slider-${index}`,
        "items": 3,
        "fixedWidth": 250,
        "controlsContainer": `#small-customize-controls-${index}`,
        "autoplay": false,
    })
    tinySliders.push(customSmall);
})

let sliders = { tinySliders }



export {
    sliders
}