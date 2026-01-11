<h1>Détails de l'artiste</h1>

<p><strong>ID :</strong> {{ $artist->id }}</p>
<p><strong>Prénom :</strong> {{ $artist->firstname }}</p>
<p><strong>Nom :</strong> {{ $artist->lastname }}</p>

<hr>

<a href="{{ route('artists.index') }}">⬅ Retour</a> |
<a href="{{ route('artists.edit', $artist->id) }}">Modifier</a>

<form action="{{ route('artists.destroy', $artist->id) }}" method="POST" style="display:inline">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Supprimer cet artiste ?')">
        Supprimer
    </button>
</form>
