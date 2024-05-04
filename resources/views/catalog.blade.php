@extends('layouts.app')

@section('content')
    <a href="/"><img src="{{ asset('img/back.png') }}" alt="" class="back"></a>

    <span class="catalog">Каталог</span>
    <div class="container5">
        <a href="{{ route('product') }}">
        <div class="box4"><img src="{{ asset('img/tshirtstone_island.png') }}" alt="tshirt">
        </div>
        </a>
        <div class="box8"><img src="{{ asset('img/scarfburberry.png') }}" alt="scarf">
        </div>
        <div class="box9"><img src="{{ asset('img/sneakersfredperry.png') }}" alt="sneakers">
        </div>
         <div class="box11"><img src="{{ asset('img/pololacoste.png') }}" alt="polo">
         </div>
    </div>
@endsection
