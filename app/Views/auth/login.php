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



    <div class="ui centered segment" style="max-width: 400px; width: 400px;">
        <div class="h1 ui header" style="text-align: center">Se connecter</div>
        <?php $errors = session()->getFlashdata('errors'); ?>


        <?php if ($errors) : ?>
            <div class="ui error message">
                <i class="close icon"></i>
                <div class="header">
                    Erreur de validation
                </div>
                <ul class="list">
                    <?php foreach ($errors as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>

                </ul>
            </div>
        <?php endif; ?>
        <form class="ui form" method="POST">
            <div class="field required">
                <label>Email</label>
                <input type="text" name="email">
            </div>
            <div class="field required">
                <label>Mot de passe</label>
                <input type="password" name="password">
            </div>
            <button type="submit" class="ui button fluid primary">Se connecter</button>
        </form>

        <p class="text-center mt-4">Vous n'avez pas encore de compte ? <a href="<?= base_url('auth/register') ?>">Inscription</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="<?= base_url('public/assets/semantic-ui/dist/semantic.min.js') ?>"></script>
</body>

</html>