@extends('Dashboards.layout.Clients')
@section('Cli1')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .profile-container {
            margin: 0 auto;
            width: 300px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-align: center;
        }
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <img class="profile-image" src="image_profil.jpg" alt="Image de profil">
        <h2>Nom Prénom</h2>
        <p>Développeur Web</p>
        <p>Email: exemple@email.com</p>
        <p>Téléphone: +33 1 23 45 67 78</p>
        <p>Adresse: 123 Rue de l'exemple, 75000 Paris</p>
    </div>
</body>
</html>
@endsection
