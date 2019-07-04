<script>
    $('.favorite').click((e) => {
        e.preventDefault();
        let btn = $(e.currentTarget);
        let id = btn.data('id');
        $.ajax({
            method: "POST",
            url: '{{ route('production.favorite') }}',
            data: {
                'id': id,
                'user_id': '{{ \Illuminate\Support\Facades\Auth::user()->id }}'
            },
            success: data => {
                console.log(data);

                if (data.status === 'success') {
                    if (data.isFavorited) {
                        btn.find('.fa-star').removeClass('far').addClass('fas');
                    } else {
                        btn.find('.fa-star').removeClass('fas').addClass('far');
                    }
                }
            },
            error: () => {
                console.log('error');
            }
        })
    });
</script>