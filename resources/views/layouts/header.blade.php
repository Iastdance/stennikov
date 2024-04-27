@auth
<header>
    <a href="{{ route('home') }}" class="logotip">
        <img src="{{ asset('img/logo.png') }}" alt="logo">
        <span class="title">FAITH</span>
    </a>



    <img src="{{ asset('img/chel.png') }}" alt="" class="icon">
</header>
    @else
    <header>
        <a href="{{ route('home') }}" class="logotip">
            <img src="{{ asset('img/logo.png') }}" alt="logo">
            <span class="title">FAITH</span>
        </a>

        <div class="container6">
            <div class="logreg">
        <a href="{{ route('login') }}">Войти</a>
        <a href="{{ route('reg') }}">Зарегистрироваться</a>
            </div>
        </div>
        {{--    <img src="{{ asset('img/chel.png') }}" alt="" class="icon">--}}
    </header>
@endif
