<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

</head>
<body>

<div>
    <h1>Add Genre</h1>
    <form action="{{ route('storeGenre') }}" method="post">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="name"><br>

        <input type="submit" value="Submit">
    </form>
</div>

<div>
    <h1>Genres</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>delete</th>
        </tr>
        @foreach($genres as $genre)
            <tr>
                <td>{{$genre->name}}</td>
                <td>

                    <form action="{{ route('deleteGenre') }}" method="post">
                        @csrf
                        <input type="text" id="id" name="id" value="{{$genre->id}}" hidden><br>
                        <input type="submit" value="delete">
                    </form>

                </td>
            </tr>
        @endforeach

    </table>
</div>

</body>
</html>


