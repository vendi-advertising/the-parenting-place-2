import "./sliders"
import {
    checkIfPastBanner,
    searchbar
} from "./nav";

const init = () => {
    checkIfPastBanner();
    searchbar();
}

init();