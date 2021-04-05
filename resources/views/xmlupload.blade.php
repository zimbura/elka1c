<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
{{-- Форма загрузки файла, в дальнейшем будет перемещена в нужную часть фронта --}}
<form action="{{ route('xmlupload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" id="xmlfile">
    <button type="submit">Отправить</button>
</form>
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
@if (Session::has("message"))
    <div class="alert alert-success">
        <ul>
            <li>{!! Session::get('message') !!}</li>
        </ul>
    </div>
@endif
