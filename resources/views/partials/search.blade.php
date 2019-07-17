<div class="input-group mr-auto">
    <input type="text" id="search-input-select2" autocomplete="off" class="form-control rounded-pill rounded-right-0 border-right-0 bg-transparent text-{{ $color ?? 'dark' }} width-300" aria-label="Найти..." aria-describedby="basic-addon2">
    <div id="search-result" class="position-absolute bg-white rounded border border-dark d-none" style="left: 0px; top: 35px; z-index: 9;"></div>
    <a href="{{ route('search') }}" class="input-group-append text-dark">
        <span class="input-group-text rounded-pill rounded-left-0 bg-transparent border-left-0" id="basic-addon2"><i class="fas fa-search text-{{ $color ?? 'dark' }}"></i></span>
    </a>
</div>

@push('scripts')
    <script>
        let result = $('#search-result');
        $('#search-input-select2').on('keyup', function () {
            let value = $(this).val();
            if (value != '') {
                let searchBtn = $('#search-btn');
                searchBtn.prop('href', '');
                searchBtn.prop('href', '/search?search=' + value);
                $.ajax({
                    url: '{!! route('search') !!}',
                    data: {'search': value},
                    success: (data) => {
                        result.removeClass('d-none');
                        result.html(data);
                    },
                    error: () => {
                        console.log('error');
                    }
                });
            } else {
                result.empty();
                result.addClass('d-none');
            }
        })
    </script>
@endpush
