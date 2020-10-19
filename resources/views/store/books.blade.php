<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

</head>
<body>
<div>
    <h1>Add Book</h1>
    <form action="{{ route('bookStore') }}" method="post">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="title"><br>

        <label for="description">description:</label><br>
        <input type="text" id="description" name="description" value="description"><br>

        <label for="author">author:</label><br>
        <input type="text" id="author" name="author" value="author"><br>

        <label for="genre">genre:</label><br>
        <select name="genre" id="genre">
            @foreach($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->name}}</option>
            @endforeach
        </select><br>

        <label for="img">img:</label><br>
        <input type="text" id="img" name="img" value="img"><br>

        <input type="submit" value="Submit">
    </form>
</div>

<div>
    <h1>Books</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Img</th>
            <th>delete</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->author_name}}</td>
                <td>{{$book->genre_id}}</td>
                <td><img src="{{$book->img_url}}"></td>
                <td>

                    <form action="{{ route('bookDelete') }}" method="post">
                        @csrf
                        <input type="text" id="id" name="id" value="{{$book->id}}" hidden><br>
                        <input type="submit" value="delete">
                    </form>

                </td>
            </tr>
        @endforeach

    </table>
</div>
</body>
</html>


