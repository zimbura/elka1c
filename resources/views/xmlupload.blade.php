
@include("nav")
{{-- Форма загрузки файла, в дальнейшем будет перемещена в нужную часть фронта --}}
@role("admin")
<H2>Загрузка данных</H2>
<form action="{{ route('xmlupload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" id="xmlfile">
    <button type="submit">Отправить</button>
</form>
@if ($errors->any())
    <h4>{{ $errors->first() }}</h4>
@endif
@if (Session::has('message'))
    <div class="alert alert-success">
        <ul>
            <li>{!! Session::get('message') !!}</li>
        </ul>
    </div>
@endif
@endrole

<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="Пароль">
    <button type="submit">Войти</button>
</form>
<div>
    Проверка
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
