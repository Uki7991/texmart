@extends('profile.dashboard')

@section('profile_content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('profile.announce.store', ['type' => 'profile']) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Описание</label>
                            <textarea name="bid" id="bid" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Оставить заказ</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
