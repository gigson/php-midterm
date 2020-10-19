<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book Store</title>

</head>
<body>

<div>
    <img src="{{$book->img_url}}"/>
</div>

<div>
    {{$book->title}}
</div>

<div>
    {{$book->description}}
</div>

<div>
    {{$book->author_name}}
</div>

<div>
    {{$book->genre_id}}
</div>


</body>
</html>


