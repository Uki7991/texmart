<script>
    $('.production-card').hover(e => {
        let card = $(e.currentTarget)
        card.removeClass('shadow-sm').addClass('shadow')
    }, e => {
        let card = $(e.currentTarget)
        card.removeClass('shadow').addClass('shadow-sm')
    })
</script>
