@include("nav")
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

<div>
    <h2>Статусы проектов</h2>
    @foreach ($projectStatuses as $status)
        <form action="{{ route('editstatus', $status->id) }}" method="post">
            @csrf
            <input type="text" name="name" value="{{ $status->NameStatusProekt }}" placeholder="Название статуса">
            <input type="number" value="{{ $status->NumberStatus }}" name="status_num" id="">
            @php
                $roles = str_split($status->AccessStatus);
            @endphp
            <label for="">Директор</label>
            <input @if (in_array('1', $roles)) checked @endif
                type="checkbox" name="roles[]" value="1">
            <label for="">Менеджер</label>
            <input @if (in_array('2', $roles)) checked @endif
                type="checkbox" name="roles[]" value="2">
            <label for="">Сотрудник</label>
            <input @if (in_array('3', $roles)) checked @endif
                type="checkbox" name="roles[]" value="3">
            <button type="submit">Сохранить</button>
        </form>
    @endforeach
    <form action="{{ route('addstatus') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Название статуса">
        <input type="number" name="status_num" id="">
        <label for="">Директор</label>
        <input type="checkbox" name="roles[]" value="1">
        <label for="">Менеджер</label>
        <input type="checkbox" name="roles[]" value="2">
        <label for="">Сотрудник</label>
        <input type="checkbox" name="roles[]" value="3">
        <button type="submit">Сохранить</button>
    </form>
</div>

<div>
    <h2>Категории проектов</h2>
    @foreach ($categories as $category)
        <form action="{{ route('editcategory', $category->id) }}" method="post">
            @csrf
            <input type="text" value="{{ $category->NameCategory }}" name="name" placeholder="Название категории">
            <button type="submit">Сохранить</button>
        </form>
    @endforeach
    <form action="{{ route('addcategory') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Название категории">
        <button type="submit">Сохранить</button>
    </form>
</div>
