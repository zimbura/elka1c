@include("nav")
<div>
    <p>{{ $user->name }}</p>
    <p>Статус сотрудника {{ $user->status }}</p>
    <p>Email {{ $user->email }}</p>
    <p>Телефон {{ $user->phone }}</p>
    <p>Телефон2 {{ $user->phone2 }}</p>
    <p>Процент {{ $user->percent }}</p>
    <p>Ставка {{ $user->wage }}</p>
    <p>Оклад {{ $user->salary }}</p>
    <p>Дата принятия на работу {{ $user->hiredate }}</p>
    @if ($user->status == 'Уволен')
        <p>Дата увольнения{{ $user->dismissdate }}</p>
    @endif
    @foreach ($user->kontragents as $kontragent)
        <p>{{ $kontragent->INNs->first()->inn_kontragent }}</p>
    @endforeach
    <p>
        Роли пользователя
        @foreach ($user->roles as $role)
            {{ $role->name }}
        @endforeach
    </p>
    <p>Наша компания:{{ $user->my_kontragent()->first()->name_kontragent ?? 'Нет компании' }}</p>
    <form action="{{ route('useredit', $user->id) }}" method="POST">
        @csrf
        @role("user")
        <p>Пароль</p>
        <input type="text" name="password">
        <button type="submit">Сохранить</button>
        @endrole
    </form>
    @role("admin", "director")
    <form action="{{ route('useredit', $user->id) }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="ФИО"><br>
        <input type="text" name="email" placeholder="email"><br>
        <input type="text" name="phone" placeholder="phone"><br>
        <input type="text" name="phone2" placeholder="phone2"><br>
        <input type="number" name="salary" placeholder="Оклад"><br>
        <input type="number" name="wage" placeholder="Ставка"><br>
        <input type="number" name="percent" placeholder="Процент"><br>
        @foreach ($roles as $role)
            <label for="">{{ $role->name }}</label>
            <input type="checkbox" name="roles[]" value="{{ $role->id }}" @if ($user->hasRole($role->slug)) checked @endif>
        @endforeach
        <br>
        <p>Статус</p>
        <select name="status" id="">
            <option @if ($user->status == 'Работает') selected @endif>
                Работает
            </option>
            <option @if ($user->status == 'Уволен') selected @endif>
                Уволен
            </option>
        </select>
        <br>
        <p>Дата увольнения</p>
        <input type="date" name="dismissdate" id="">
        <p>Привязка к нашей компании</p>
        <select name="mycompany" id="">
            @foreach ($mycompanies as $company)
                <option @if ($user->my_kontragent == $company->id) selected="selected" @endif value="{{ $company->id }}">
                    {{ $company->name_kontragent }} </option>
            @endforeach
        </select>
        @role("admin", "director")
        <p>Пароль</p>
        <input type="text" name="password">
        @endrole
        <button type="submit">Сохранить</button>
    </form>
    @endrole
</div>
