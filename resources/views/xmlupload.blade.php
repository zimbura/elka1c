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