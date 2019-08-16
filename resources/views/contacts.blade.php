@extends('layouts.app')

@section('content')
    @include('partials.header', ['shadow' => 'shadow'])
    <div class="container">
        <div class="row py-4">
            <div class="col">
                <div class="container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolorum et eveniet, ex minus nemo
                        obcaecati odio odit, provident quasi sapiente sit temporibus tenetur ut velit, veniam voluptate!
                        Aut cum doloribus laboriosam natus suscipit? Fugit iure labore perspiciatis sequi tenetur!</p>
                </div>
                <div>
                    <p>Офис компании Texmart.kg находится в г. Бишкек. Texmart.kg является информационным порталом, объединяющий текстильную промышленность Кыргызстана.
                        На этом портале Вы найдете долгосрочного партнера в швейно-текстильной сфере!</p>
                </div>
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A95d8395382f6f742cb4d5dca4a8aa599cc96f478858d19aa2106e15d67bd6cd0&amp;source=constructor" width="700" height="400" frameborder="0"></iframe>
            </div>
            <div class="flex-column">
                <table>
                    <tbody>
                    <tr>
                        <td><i class="fa fa-phone-alt fa-2x"></i></td>
                        <td><p>0508900500</p></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-map-marker-alt fa-2x" aria-hidden="true"></i></td>
                        <td><p>Кыргызстан, г. Бишкек,
                                ул. Тоголока Молдо 104</p></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></td>
                        <td><p>support@texmart.kg</p></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-clock fa-2x" aria-hidden="true"></i></td>
                        <td><p>Режим работы</p></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
