<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="<?= base_url('public/assets/semantic-ui/dist/semantic.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/styles/output.css') ?>">
</head>

<body class="bg-gray-100 min-[100vh] flex justify-center items-center">

<div class="ui centered card">
    <div class="content">
        <a class="ui dividing header">Profil</a>
        <div class="description">
            <div class="ui list">
                <div class="item">
                    Nom: <?= session()->get('user')['last_name'] ?>
                </div>
                <div class="item">
                    Prénom: <?= session()->get('user')['first_name'] ?>
                </div>
                <div class="item">
                    Email: <?= session()->get('user')['email'] ?>
                </div>
            </div>

            <a href="<?= base_url('auth/logout')?>" class="ui red fluid button">
                Se deconnecter
            </a>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="<?= base_url('public/assets/semantic-ui/dist/semantic.min.js') ?>"></script>
</body>

</html>