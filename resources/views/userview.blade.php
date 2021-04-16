<div>
    <p>{{ $user->name}}</p>
    <p>Статус сотрудника {{ $user->status }}</p>
    <p>Email {{ $user->email }}</p>
    <p>Телефон {{ $user->phone }}</p>
    @foreach ($user->kontragents as $kontragent)
        <p>{{$kontragent->INNs->first()->inn_kontragent}}</p>
    @endforeach
    <p>
        Роли пользователя
        @foreach ($user->roles as $role)
            {{ $role->name }}
        @endforeach
    </p>
        
</div>