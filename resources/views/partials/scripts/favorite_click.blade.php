<script>
    $('.favorite').click((e) => {
        e.preventDefault();
        let btn = $(e.currentTarget);
        let id = btn.data('id');

        $.ajax({
            method: "POST",
            url: '{{ route('production.favorite') }}',
            data: {
                'id': id
            },
            success: data => {
                console.log(data);
            },
            error: () => {
                console.log('error');
            }
        })
    });
</script>
