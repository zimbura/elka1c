@include("nav")
<div>
    <p>{{ $user->name }}</p>
    <p>Статус сотрудника {{ $user->status }}</p>
    <p>Email {{ $user->email }}</p>
    <p>Телефон {{ $user->phone }}</p>
    @foreach ($user->kontragents as $kontragent)
        <p>{{ $kontragent->INNs->first()->inn_kontragent }}</p>
    @endforeach
    <p>
        Роли пользователя
        @foreach ($user->roles as $role)
            {{ $role->name }}
        @endforeach
    </p>
    @role("admin") 
    <form action="{{ route('useredit', $user->id) }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="ФИО"><br>
        <input type="text" name="email" placeholder="email"><br>
        <input type="text" name="phone" placeholder="phone"><br>
        @foreach ($roles as $role)
            <label for="">{{ $role->name }}</label>
            <input type="checkbox" name="roles[]" value="{{ $role->id }}" @if ($user->hasRole($role->slug)) checked @endif>
        @endforeach
        <br>
        <button type="submit">Сохранить</button>
    </form>
    @endrole
</div>
