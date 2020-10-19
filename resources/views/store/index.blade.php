<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book Store</title>

</head>
<body>

<h1>Books</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Author</th>
        <th>Genre</th>
    </tr>
    @foreach($books as $book)
        <tr>
            <td><a href="{{ route('show', ["id"=>$book->id]) }}">{{$book->title}}</a></td>
            <td>{{$book->description}}</td>
            <td>{{$book->author_name}}</td>
            <td>{{$book->genre_id}}</td>
        </tr>
    @endforeach


</table>

</body>
</html>


