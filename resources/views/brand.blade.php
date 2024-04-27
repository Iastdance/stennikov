@extends('layouts.app')

@section('content')
    <a href="/"><img src="{{ asset('img/back.png') }}" alt="" class="back"></a>

    <a href="{{ route('catalog') }}" class="btn1">Каталог</a>

    <span class="productbrand">Товары от бренда</span>
    <div class="container3">
    <div class="box3">Фото</div>
    <div class="box3">Фото</div>
    <div class="box3">Фото</div>
    </div>
@endsection
