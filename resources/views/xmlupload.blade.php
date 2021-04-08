<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1й этап</title>
</head>

<body>

</body>

</html>
{{-- Форма загрузки файла, в дальнейшем будет перемещена в нужную часть фронта --}}
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

<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="Пароль">
    <button type="submit">Войти</button>
</form>

@role("admin")
<h1>Вы админ</h1>
@foreach ($users as $user)
    <p>Имя пользователя: {{ $user->name }}</p>
    <p>
        Роли пользователя
        @foreach ($user->roles as $role)
            {{ $role->name }}
        @endforeach
    </p>

    <form action="{{ route('changerole', $user->id) }}" method="POST">
        @csrf
        @foreach ($roles as $role)
            <label for="">{{ $role->name }}</label>
            <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                @if ($user->hasRole($role->slug)) checked @endif>
        @endforeach
        <button type="submit">Сохранить</button>
    </form>
@endforeach
@endrole

@role("director")
<h1>Вы директор</h1>
@endrole

@role("user")
<h1>Вы пользователь</h1>
@endrole
