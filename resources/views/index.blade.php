@include("nav")
<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="Пароль">
    <button type="submit">Войти</button>
</form>
@if ($errors->any())
    <h4>{{ $errors->first() }}</h4>
@endif
<div>
    Данные для входа
    <h2>Админ</h2>
    <div>
        Логин: admin@admin.ru
        Пароль: admin
    </div>
    <h2>Пользователь</h2>
    <div>
        Логин: user@user.ru
        Пароль: user
    </div>
    <h2>Директор</h2>
    <div>
        Логин: director@director.ru
        Пароль: director
    </div>
</div>
@role("admin")
<h1>Вы админ</h1>
@endrole

@role("director")
<h1>Вы директор</h1>
@endrole

@role("user")
<h1>Вы пользователь</h1>
@endrole
