@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="faith">
            <span class="brand">FAITH</span>
            <img src="{{ asset('img/krest.png') }}" alt="" class="cross">
        </div>

    <div class="info">
        <span class="description">Онлайн магазин по продаже оригинальной
        и брендовой одежды по всему миру</span>
        <nav>
            <a href=""><img src="{{ asset('img/vk.png') }}" alt=""></a>
            <a href=""><img src="{{ asset('img/tg.png') }}" alt=""></a>
            <a href=""><img src="{{ asset('img/insta.png') }}" alt=""></a>
        </nav>
    </div>

            <a href="{{ route('catalog') }}" class="btn">Каталог</a>


    <span class="brands1">Бренды</span>
    </div>

    <div class="panel" style="width: 100px; height: 100px">
        @foreach($products as $product)
            <a href="{{ route('brand', $product->brand) }}">
                <img src="{{ asset('img/' . $product->brand . '.png') }}" alt="stone">
            </a>
        @endforeach
    </div>

    <span class="products1">Товары</span>

    <div class="container2">
        <div class="box">Фото</div>
        <div class="box">Фото</div>
        <div class="box">Фото</div>
        <div class="box">Фото</div>
        <div class="box">Фото</div>
        <div class="box">Фото</div>
        <div class="box">Фото</div>
        <div class="box">Фото</div>
        <div class="box">Фото</div>
        <div class="box">Фото</div>
        <div class="box">Фото</div>
        <div class="box">Фото</div>
        <div class="box">Фото</div>
        <div class="box">Фото</div>
    </div>

    <div class="box2">АКЦИЯ</div>


@endsection
