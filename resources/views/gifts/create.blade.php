<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un cadeau</title>
</head>
<body>
    <h1>Ajouter un cadeau</h1>

    <form action="{{ route('gifts.store') }}" method="POST">
        @csrf

        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label for="url">URL :</label>
        <input type="text" name="url" id="url" value="{{ old('url') }}">
        @error('url')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label for="details">Details :</label>
        <textarea name="details" id="details">{{ old('details') }}</textarea>
        @error('details')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label for="price">Prix :</label>
        <input type="text" name="price" id="price" value="{{ old('price') }}">
        @error('price')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">Enregistrer</button>
    </form>

    <p>
        <a href="{{ route('gifts.index') }}">Retour a la liste</a>
    </p>
</body>
</html>
