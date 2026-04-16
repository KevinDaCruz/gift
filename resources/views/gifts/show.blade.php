<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadeau</title>
</head>
<body>
    <h1>Detail du cadeau</h1>

    <p><strong>Nom :</strong> {{ $gift->name }}</p>
    <p><strong>Prix :</strong> {{ number_format($gift->price, 2, '.', ' ') }} EUR</p>

    @if ($gift->url)
        <p>
            <strong>URL :</strong>
            <a href="{{ $gift->url }}" target="_blank">{{ $gift->url }}</a>
        </p>
    @endif

    @if ($gift->details)
        <p><strong>Details :</strong> {{ $gift->details }}</p>
    @endif

    <p>
        <a href="{{ route('gifts.edit', $gift->id) }}">Modifier</a>
        |
        <a href="{{ route('gifts.index') }}">Retour a la liste</a>
    </p>
</body>
</html>
