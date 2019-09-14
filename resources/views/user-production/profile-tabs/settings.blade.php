@extends('user-production.profile')

@section('office')
    <div class="tab-pane {{ request('sharp') ? '' : 'active' }}" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <h1>Настройки профиля</h1>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <form action="{{ route('user.edit', auth()->user()->id) }}" method="POST" id="editProfile" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="name" class="text-md-right"><i class="fas fa-user text-primary"></i> {{ __('ФИО') }}
                            </label>
                            <input id="name" type="text" class="form-control shadow-sm @error('name') is-invalid @enderror"
                                   name="name" value="{{ auth()->user()->name ?? '' }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                         </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>
                                Картинка для аватарки
                            </label>
                            <input type="file" name="avatar" id="avatar" class="form-control">
                        </div>
                        <div class="form-group">
                            <div>
                                <img src="" id="image-preview" alt="">
                            </div>
                            <input type="hidden" name="naturalWidth">
                            <input type="hidden" name="naturalHeight">
                            <input type="hidden" name="noneNaturalWidth">
                            <input type="hidden" name="noneNaturalHeight">
                            <input type="hidden" name="naturalTop">
                            <input type="hidden" name="naturalLeft">
                            <input type="hidden" name="top">
                            <input type="hidden" name="left">
                            <input type="hidden" name="width">
                            <input type="hidden" name="height">
                        </div>
                        <button type="submit" id="submit-name-data" class="btn btn-success">Сохранить изменения</button>
                    </form>
                </div>
                <div class="col-6">
                    <form action="{{ route('user.password.edit', auth()->user()->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="password" class="text-md-right"><i
                                    class="fas fa-key text-primary"></i> {{ __('Пароль') }}</label>
                            <input id="password" type="password"
                                   class="form-control shadow-sm @error('password') is-invalid @enderror"
                                   name="password"
                                   required
                                   autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="text-md-right"><i
                                    class="fas fa-key text-primary"></i> {{ __('Подтвердите пароль') }}</label>
                            <input id="password-confirm" type="password" class="form-control shadow-sm"
                                   name="password_confirmation"
                                   required autocomplete="new-password">
                        </div>
                        <button type="submit" class="btn btn-success">Изменить пароль</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cropper.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/cropper.min.js') }}"></script>
    {{--    <script src="{{ asset('js/jquery-cropper.js') }}"></script>--}}
    <script>
        let inputAvatar = $('#avatar');
        let containerAvatar = $('#image-preview');

        containerAvatar.cropper({
            aspectRatio: 1,
            zoomable: false,
            scalable: false,
            movable: false,
            rotatable: false,
            zoomOnWheel: false,
            dragMode: 'none',
            wheelZoomRatio: 0,
            viewMode: 1
        });

        let cropperAvatar = containerAvatar.data('cropper');
        inputAvatar.change(e => {
            let oFReader = new FileReader();

            oFReader.readAsDataURL(inputAvatar[0].files[0]);

            oFReader.onload = function (oFREvent) {

                // Destroy the old cropperAvatar instance
                containerAvatar.cropper('destroy');

                // Replace url
                containerAvatar.attr('src', this.result);

                // Start cropper
                containerAvatar.cropper({
                    aspectRatio: 1,
                    viewMode: 2
                });
                cropperAvatar = containerAvatar.data('cropper');
                setTimeout(rotateImage, 1000);

            };

        });

        function rotateImage() {
            cropperAvatar.rotate(0);
            // $('#dataImage').val(cropperAvatar.getImageData().rotate);
        }

        $('#crop').click(e => {
            let image = $(cropperAvatar.getCroppedCanvas()).addClass('img-fluid');
            // $('#cropped').html(image);
        });
        $('#rotate-right').click(e => {
            let btn = $(e.currentTarget);

            cropperAvatar.rotate(90);
            console.log(cropperAvatar.getCropBoxData());
            // $('#dataImage').val(cropperAvatar.getImageData().rotate);
        });
        $('#rotate-left').click(e => {
            let btn = $(e.currentTarget);

            cropperAvatar.rotate(-90);
            console.log(cropperAvatar.getImageData());
            // $('#dataImage').val(cropperAvatar.getImageData().rotate);
        });

        $('#submit-name-data').click(e => {
            e.preventDefault();
            console.log(cropperAvatar.getImageData());

            $('input[name="naturalWidth"]').val(cropperAvatar.getImageData().naturalWidth);
            $('input[name="naturalHeight"]').val(cropperAvatar.getImageData().naturalHeight);
            $('input[name="noneNaturalWidth"]').val(cropperAvatar.getImageData().width);
            $('input[name="noneNaturalHeight"]').val(cropperAvatar.getImageData().height);
            $('input[name="naturalTop"]').val(cropperAvatar.getCanvasData().top);
            $('input[name="naturalLeft"]').val(cropperAvatar.getCanvasData().left);
            $('input[name="width"]').val(cropperAvatar.getCropBoxData().width);
            $('input[name="height"]').val(cropperAvatar.getCropBoxData().height);
            $('input[name="top"]').val(cropperAvatar.getCropBoxData().top);
            $('input[name="left"]').val(cropperAvatar.getCropBoxData().left);

            $('#editProfile').submit();
        })
    </script>
@endpush
