const checkIfPastBanner = () => {
    var banner = $('#banner').offset().top + $('#banner').height();
    $(window).on('scroll', function () {
        let stop = Math.round($(window).scrollTop());
        if(stop > banner){
            console.log("here")
            $('.nav-menu-wrapper > .navbar').addClass('past-banner')
        }else{
            $('.nav-menu-wrapper > .navbar').removeClass('past-banner')
        }
    });
}

export {
    checkIfPastBanner
}
