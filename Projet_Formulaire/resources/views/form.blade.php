<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
</head>
<body>
    <h1>Formulaire de Contact</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ e($error) }}</li>
    @endforeach
    </ul>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="message">Message :</label>
        <textarea name="message" id="message" required></textarea><br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
