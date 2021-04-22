@include("nav")
{{ $kontragent->name_kontragent }}
<div>
    ИНН:{{ $kontragent->inn_kontragent}}
</div>
<div>
    email
    {{ $kontragent->email_kontragent }}
</div>
<div>
    Имена контрагента <br>
    <strong>{{ $kontragent->name_kontragent }}</strong><br>
    @foreach ($kontragent->names as $name)
        {{$name->name_kontragent}}<br>
    @endforeach
</div>
<br>
<div>
    Контактное лицо
    {{ $kontragent->KontaktUserKontragent }}
</div>
<div>
    Контактное лицо на объекте
    {{ $kontragent->KontaktUserKontragent2 }}
</div>
<div>
    Контактный телефон
    {{ $kontragent->TelKontragent2 }}
</div>
<div>
    С ндс
    {{ $kontragent->NdsKontragent ? "Да" : "Нет" }}
</div>
<div>
    Заметка
    {{ $kontragent->NoteKontragent }}
</div>
<div>
    Вид контрагента
    {{ $kontragent->forma_kontragent }}
</div>
<div>
    Вид налогооблажения
    {{ $kontragent->nalog_kontragent }}
</div>
<div>Сотрудник
    <p>
        {{ $kontragent->user->name ?? null }}
    </p>
</div>
<div>Счета
    @foreach ($kontragent->schets as $schet)
        <p>{{ $schet->raschshet_kontragent }} </p>
    @endforeach
</div>
<div>
    Мой контрагент: {{ $kontragent->MyKontragent ? 'Да' : 'Нет' }}
</div>
<br>
@role("admin", "director")
<form action="{{ route('kontragentedit', $kontragent->id) }}" method="post">
    @csrf
    <input type="text" placeholder="Название контрагента" name="name"><br>
    <input type="number" placeholder="ИНН контрагента" name="inn"><br>
    <input type="email" placeholder="email контагента" name="email"><br>
    <p>Сотрудник</p>
    <select name="user" id="">
        <option @if (($kontragent->user->id ?? null) == null) selected="selected" @endif value="">Нет сотрудника</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}" @if (($kontragent->user->id ?? null) == $user->id) selected="selected" @endif>{{ $user->name }}</option>
        @endforeach
    </select>
    <div>
        <input type="text" name="contactname" placeholder="Контактное лицо"><br>
    </div>
    <div>
        <input type="text" name="contactnameobj" placeholder="Контактное лицо на объекте"><br>
    </div>
    <div>
        <input type="number" name="phone" placeholder="Телефон"><br>
    </div>
    @role("admin")
    <div>
        <input type="text" name="type" placeholder="Тип контрагента"><br>
    </div>
    @endrole
    <br>
    <div>
        <input type="text" name="tax" placeholder="Тип налогооблажения"><br>
    </div>
    <div>
        С ндс
        <input @if ($kontragent->NdsKontragent ?? null) checked @endif
            type="checkbox" name="nds"><br><br>

    </div>
    <div>
        <label for="">Мой контрагент</label>
        <input @if ($kontragent->MyKontragent ?? null) checked @endif
            type="checkbox" name="mykontragent" id="">
    </div>
    <textarea name="note" id="" cols="30" rows="10">{{ $kontragent->NoteKontragent ?? NULL}}</textarea><br>
    <button type="submit">Сохранить</button>
</form>
@endrole
