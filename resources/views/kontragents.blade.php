@include("nav")
<table>
    <tr>
        <th>ID</th>
        <th>Счет</th>
        <th>ИНН</th>
        <th>Контрагент</th>
        <th>Название min</th>
        <th>ID Сотрудника</th>
        <th>ФИО Сотрудника</th>
        <th>Моя</th>
        <th> </th>
    </tr>
    @foreach ($kontragents as $kontragent)
        <tr>
            <th>{{ $kontragent->id }}</th>
            <th></th>
            <th>{{ $kontragent->inn_kontragent }}</th>
            <th>{{ $kontragent->name_kontragent }}</th>
            <th>{{ $kontragent->name_kontragent }}</th>
            <th></th>
            <th></th>
            <th>{{ $kontragent->MyKontragent ? "Мой" : "" }}</th>
            <th><a href="{{route('kontragentview', $kontragent->id)}}">Просмотр/Редактирование</a></th>
        </tr>
    @endforeach
</table>
{{$kontragents->links()}}
