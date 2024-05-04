@extends('layouts.app')

@section('content')
    <a href="/"><img src="{{ asset('img/back.png') }}" alt="" class="back"></a>

    <div class="container7">
        <div class="box5"></div>
        <div class="description1">
        <span class="nameproduct">Наимнование товара</span>
        <span class="brandproduct">Бренд</span>
        <span class="cost">Цена</span>
        </div>
    </div>

    <div class="container8">
        <div class="box6">Фото</div>
        <div class="box7">Фото</div>
        <a href="{{ route('cart') }}" class="btn4">Добавить в корзину</a>
    </div>
@endsection
