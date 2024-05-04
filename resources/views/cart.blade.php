@extends('layouts.app')

@section('content')
    <span class="cart">Корзина</span>
    <div class="container10">
    <div class="box10">Фото</div>
      <div class="description2">
        <span class="nameproduct">Наименование товара</span>
          <span class="cost">Цена</span>
      </div>
    </div>
    <hr>

    <div class="description3">
        <span>Количество</span>
        <span>Общая стоймость товара</span>
        <span>Доставка</span>
        <span>Итог</span>
    </div>

    <button class="btn6">Перейти к оформлению</button>
@endsection
