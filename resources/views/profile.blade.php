@extends('layouts.app')

@section('content')
    <span class="personalaccount">Личный кабинет</span>
    <div class="container9">
        <span class="information">Данные</span>

            <h1 class="name">{{ $user_data->first_name }}</h1>
            <h2 class="fam">{{ $user_data->last_name }}</h2>
            <h3 class="email">{{ $user_data->email }}</h3>
        <form action="{{route('logout')}}">
            <button type="submit" class="btn5">Выйти</button>
        </form>

    </div>


@endsection
