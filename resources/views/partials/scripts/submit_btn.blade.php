<script>
    $('button[type="submit"]').hover(e => {
        let btn = $(e.currentTarget)
        btn.removeClass('shadow-sm').addClass('shadow')
    }, e => {
        let btn = $(e.currentTarget)
        btn.removeClass('shadow').addClass('shadow-sm')
    })
</script>
