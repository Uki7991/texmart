@extends('layouts.app')
@section('content')
    <section class="bg-about">
        <div class="container">
            <div class="row">
                <div class="h1 text-white" style="padding-top: 250px;">
                    ЧТО ТАКОЕ TEXMART.KG?
                </div>
                <div class="about-us-block-right">
                    <div class="about-us-block-image-container-right">
                        <img src="{{asset('img/about_1.png')}}" class="about-us-image" alt="">
                    </div>
                    <p>Мы первая интернет платформа производителей
                    текстильной и швейной продукции Кыргызской Республики.
                    Ведение бизнеса в формате В2В.</p>
                </div>
                <p>Мы знаем Ваши потребности и можем удовлетворить их, знаем как помочь
                    Вам в решении Ваших каждодневных проблем - поиска производителей
                    и заказчиков швейной и текстильной продукций и изделий.</p>
            </div>
        </div>
    </section>
@endsection
