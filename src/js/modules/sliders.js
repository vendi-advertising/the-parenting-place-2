import {
    tns
}
from "../libs/tiny-slider"

let custom = tns({
        "container": "#customize",
        "items": 3,
        "controlsContainer": "#customize-controls",
        "navContainer": "#customize-thumbnails",
        "navAsThumbnails": true,
        "autoplay": true,
        "autoplayTimeout": 1000,
        "autoplayButton": "#customize-toggle",
        "speed": 400
    }),
    sliders = {
        custom
    }
console.log(tns);
export {
    sliders
}