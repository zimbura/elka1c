@include("nav")
<table>
    <tr>
        <th>Сотрудник</th>
        <th>Телефон</th>
        <th>Email</th>
        <th>Тип</th>
        <th>Статус</th>
        <th></th>

    </tr>
    @foreach ($users as $user)
        <tr>
            <th>{{ $user->name }}</th>
            <th>{{ $user->phone }}</th>
            <th>{{ $user->email }}</th>
            <th>
                @foreach ($user->roles as $role)
                    {{ $role->name }}
                    <br>
                @endforeach
            </th>
            <th>{{ $user->status }}</th>
            <th><a href="{{route('userview', $user->id)}}">Просмотр/Редактирование</a></th>
        </tr>
    @endforeach
</table>
