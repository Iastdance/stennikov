@auth
<header>
    <a href="{{ route('home') }}" class="logotip">
        <img src="{{ asset('img/logo.png') }}" alt="logo">
        <span class="title">FAITH</span>
    </a>



    <a href="{{ route('profile') }}">
        <img src="{{ asset('img/chel.png') }}" alt="" class="icon">
    </a>
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
    </header>
@endif
