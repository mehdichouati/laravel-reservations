<!DOCTYPE html>
<html>
<head>
    <title>Artists</title>
</head>
<body>

<h1>Liste des artistes</h1>

<a href="{{ route('artists.create') }}">Ajouter un artiste</a>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Actions</th>
    </tr>

    @foreach($artists as $artist)
    <tr>
        <td>{{ $artist->id }}</td>
        <td>{{ $artist->firstname }}</td>
        <td>{{ $artist->lastname }}</td>
        <td>
            <a href="{{ route('artists.edit', $artist) }}">Modifier</a>

            <form action="{{ route('artists.destroy', $artist) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>
