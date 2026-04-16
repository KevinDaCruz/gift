<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des cadeaux</title>
</head>
<body>
    <h1>Liste des cadeaux</h1>

    <p>
        <a href="{{ route('gifts.create') }}">Ajouter un cadeau</a>
    </p>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if ($gifts->isEmpty())
        <p>Aucun cadeau pour le moment.</p>
    @else
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gifts as $gift)
                    <tr>
                        <td>{{ $gift->name }}</td>
                        <td>{{ number_format($gift->price, 2, '.', ' ') }} EUR</td>
                        <td>
                            <a href="{{ route('gifts.show', $gift->id) }}">voir</a>
                            |
                            <a href="{{ route('gifts.edit', $gift->id) }}">modifier</a>
                            |
                            <form action="{{ route('gifts.destroy', $gift->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
