@extends('layouts.app')

@section('content')
    <div class="login-container">
        <form class="login-form" method="POST">
            @csrf
            <h2>Авторизация</h2>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="emailform" placeholder="Введите Email" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" class="passform" placeholder="Введите пароль" required>
            </div>
            <button type="submit" class="btn3">Войти</button>
        </form>
    </div>


@endsection
