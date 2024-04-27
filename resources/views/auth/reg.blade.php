@extends('layouts.app')

@section('content')
    <span class="reg">Регистрация</span>

    <div class="login-container">
        <form class="login-form" method="POST">
            @csrf
            <div class="form-group">
                <label for="first_name">Имя:</label>
                <input type="text" id="first_name" name="first_name" class="nameform" placeholder="Введите имя" required>
            </div>
            <div class="form-group">
                <label for="last_name">Фамилия:</label>
                <input type="text" id="last_name" name="last_name" class="famform" placeholder="Введите фамилию" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="emailform" placeholder="Введите Email" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" class="passform" placeholder="Введите пароль" required>
            </div>
            <button type="submit" class="btn3">Зарегистрироваться</button>
        </form>
    </div>


@endsection
