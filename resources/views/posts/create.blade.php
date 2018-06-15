<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<form method="POST" action="/post">
            {{  csrf_field() }}
    <div class="container">
    <div class="form-group">

        <label for="exampleInputEmail1">Заголовок</label>
        <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Заголовок">
    </div>
    <div class="form-group">
    <textarea name="body" class="form-control" rows="3" placeholder="Текст" ></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
    </div>

@if(count($errors))
<div class="form-group">
    <div class="alter alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
        </ul>
    </div>
</div>
    @endif
</form>
</body>
</html>