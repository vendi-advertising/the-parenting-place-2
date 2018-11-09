const checkIfPastBanner = () => {
    var banner = $('#banner').offset().top + $('#banner').height();
    $(window).on('scroll', () => {
        let stop = Math.round($(window).scrollTop());
        let offset = 250;
        if(stop > (banner - offset)){
            $('.main-menu-wrapper > .navbar').addClass('past-banner')
            $('.sub-menu-wrapper > .navbar').addClass('past-banner')
        }else{
            $('.main-menu-wrapper > .navbar').removeClass('past-banner')
            $('.sub-menu-wrapper > .navbar').removeClass('past-banner')
        }
    });
}

const searchbar = () => {
    $(".sb-icon-search").click(() => {
        $(".sb-search").toggleClass("sb-search-open");
    });
}

export {
    checkIfPastBanner,
    searchbar,
}
