function announces() {
    $.ajax({
        url: '/announce/ajax/',
        type: 'get',
        success: (data) => {
            console.log(data);
            $('.slider').html(data.html);

            setTimeout(function () {
                // slick carousel
                console.log('slick');
                $('.slider').slick({
                    vertical: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    touchmove: false,
                    swipeToSlide: false,
                    touchThreshold: false,
                    draggable: false,
                    verticalSwiping: false,
                });
            }, 300);
        },
        error: () => {
            console.log('error');
        }
    });


}

announces();
