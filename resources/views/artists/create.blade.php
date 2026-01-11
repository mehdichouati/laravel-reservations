<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un artiste</title>
</head>
<body>

<h1>Ajouter un artiste</h1>

<form action="{{ route('artists.store') }}" method="POST">
    @csrf

    <label>Prénom:</label><br>
    <input type="text" name="firstname"><br><br>

    <label>Nom:</label><br>
    <input type="text" name="lastname"><br><br>

    <button type="submit">Enregistrer</button>
</form>

<br>
<a href="{{ route('artists.index') }}">Retour</a>

</body>
</html>
