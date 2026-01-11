<!DOCTYPE html>
<html>
<head>
    <title>Modifier artiste</title>
</head>
<body>

<h1>Modifier artiste</h1>

<form action="{{ route('artists.update', $artist) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Prénom:</label><br>
    <input type="text" name="firstname" value="{{ $artist->firstname }}"><br><br>

    <label>Nom:</label><br>
    <input type="text" name="lastname" value="{{ $artist->lastname }}"><br><br>

    <button type="submit">Modifier</button>
</form>

<br>
<a href="{{ route('artists.index') }}">Retour</a>

</body>
</html>
