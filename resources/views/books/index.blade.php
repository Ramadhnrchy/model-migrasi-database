<!DOCTYPE html>
<html lang="en">
<head>
    <title>Books</title>
</head>
<body>
    <h2>Data Buku</h2>
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Published Date</th>
        </tr>
        @foreach($data as $b)
        <tr>
            <td>{{ $b['id'] }}</td>
            <td>{{ $b['book_name'] }}</td>
            <td>{{ $b['author'] }}</td>
            <td>{{ $b['published_at'] }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>