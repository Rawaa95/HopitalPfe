<!DOCTYPE html>
<html>
<head>
    <title>Email du verification compte</title>
</head>
<body>

<p>Bienvenue </p>
<p>Détails sur votre compte Madame/Monsieur :{{ $details['username'] }}</p>

<p>E-mail : {{ $details['email'] }}</p>
<p>La décision de l'administrateur à propos votre demande de création de compte est : {{ $details['verifie'] }}</p>

<p>En cas de besoin, vous pouvez nous contacter.</p>

<p>Merci d'être avec nous.</p>

</body>
</html>
