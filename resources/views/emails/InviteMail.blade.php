<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, {initial-scale=1.0}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uitnodiging voor Tevredenheidsonderzoek</title>
</head>
<body>
    <div style="text-align: center; margin-top: 20px">
        <h2>Je bent uitgenodigd voor het tevredenheidsonderzoek:</h2>
        <h2>{{ $details['title'] }}</h2>
        <h3>Klik op deze knop:</h3>
        <br>
        <a style="color: white; background-color: #F7B733; padding: 20px; text-decoration: none; border-radius: 15px" class="link" href="https://ipmedt4.tychovanveen.nl/codeinvoeren/{{ $details['body'] }}">Tevredenheidsonderzoek</a>
        <br>
        <br>
        <h3>Of gebruik code: </h3>
        <h2>{{ $details['body'] }}  </h2>
        <h2>op</h2>
        <a href="https://ipmedt4.tychovanveen.nl/codeinvoeren">www.ipmedt4-tevredenheidsonderzoek.nl</a>
    </div>
</body>
</html>
