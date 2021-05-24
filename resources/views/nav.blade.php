<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2й этап</title>
</head>
<ul>
    <li><a href="{{ route('index') }}">Домой</a></li>
    @role("admin", "director")
    <li><a href="{{ route('config') }}">Загрузка xml</a></li>
    @endrole
    @role("admin", "director", "accountant")
    <li><a href="{{ route('kontragents') }}">Все контрагенты</a></li>
    <li><a href="{{ route('mykontragents') }}">Мои контрагенты</a></li>
    @endrole
    @role("admin","director")
    <li><a href="{{ route('payments') }}">Все платежи</a></li>
    @endrole
    <li><a href="{{ route('users') }}">Все пользователи</a></li>
</ul>
