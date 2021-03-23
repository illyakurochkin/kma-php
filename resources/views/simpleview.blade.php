<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
    <title> No template page </title>
    <link href="{{ asset('mystyles.css') }}" rel="stylesheet">
</head>
<body bgcolor="white">
<div>
    <div class="header">
        <h1>BOOK CATALOGUE</h1>
    </div>
</div>
<div>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Author</td>
            <td>Title</td>
            <td>Year</td>
        </tr>

        @foreach ($books as $book)
            @if($book -> year > 2010)
                <tr style="font-weight: bolder">
            @else
                <tr>
                    @endif
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->year }}</td>
                </tr>
                @endforeach
    </table>
</div>
</body>
</html>

