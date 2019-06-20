<script>
    $('input[type="checkbox"],input[type="radio"]').change(e => {
        let input = $(e.currentTarget)
        let span = $('input[type="checkbox"],input[type="radio"]').siblings('span')
        span.each((index, item) => {
            $(item).removeClass('text-underline font-weight-bold')
        })

        input.siblings('span').addClass('text-underline font-weight-bold')
    })
</script>
