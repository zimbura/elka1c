@include("nav")
{{ $kontragent->name_kontragent }}
<div>
    ИНН:{{ $kontragent->INNs->first()->inn_kontragent }}
</div>
<div>
    Cчет
</div>
<div>
    {{ $kontragent->name_kontragent }}
</div>
<div>Сотрудник
    <p>
        {{$kontragent->user->name ?? NULL}}
    </p>
</div>

@role("admin")
<form action="{{route("kontragentedit", $kontragent->id)}}" method="post">
    @csrf
    <input type="text" placeholder="Название контрагента" name="name"><br>
    <input type="number" placeholder="ИНН контрагента" name="inn"><br>
    <br>
    <h3>Сотрудник</h3>
    <select name="user" id="">
        <option @if(($kontragent->user->id ?? NULL) == NULL) selected="selected" @endif value="">Нет сотрудника</option>
        @foreach ($users as $user)
            <option  value="{{ $user->id }}" @if(($kontragent->user->id ?? NULL) == $user->id) selected="selected" @endif>{{ $user->name }}</option>
        @endforeach
    </select>
    <button type="submit">Сохранить</button>
</form>
@endrole
