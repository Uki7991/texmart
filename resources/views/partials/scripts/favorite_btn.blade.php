<script>
    $('.favorite').hover((e) => {
        let btn = $(e.currentTarget);
        btn.removeClass('shadow-sm').addClass('shadow').find('.fa-star').removeClass('far').addClass('fas')
    }, (e) => {
        let btn = $(e.currentTarget);
        btn.removeClass('shadow').addClass('shadow-sm').find('.fa-star').removeClass('fas').addClass('far')
    })
</script>
