<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Parkir {{ $zoneId }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
        }

        .zone-container {
            text-align: center;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<div class="zone-container">
    <h1>Zona Parkir {{ $zoneId }}</h1>
    <img src="{{ $imagePath }}" alt="Gambar Zona {{ $zoneId }}">
</div>
</body>
</html>
