<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de création de compte</title>
    <link rel="stylesheet" href="<?= base_url('public/assets/semantic-ui/dist/semantic.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/styles/output.css') ?>">
</head>

<body class="bg-gray-100 min-[100vh] flex justify-center items-center">

    <div class="ui centered segment" style="max-width: 400px; width: 400px;">
        <div class="h1 ui header" style="text-align: center">
            Inscription
        </div>
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

        <form class="ui form" method="post">
            <div class="field required">
                <label>Nom</label>
                <input type="text" name="last_name" value="<?= old('last_name') ?>">
            </div>
            <div class="field required">
                <label>Prénom</label>
                <input type="text" name="first_name" value="<?= old('first_name') ?>">
            </div>
            <div class="field required">
                <label>Email</label>
                <input type="text" name="email" value="<?= old('email') ?>">
            </div>
            <div class="field required">
                <label>Mot de passe</label>
                <input type="password" name="password">
            </div>
            <div class="field required">
                <label>Confirmer le mot de passe</label>
                <input type="password" name="passwordConfirm">
            </div>
            <button type="submit" class="ui button fluid primary">
                S'inscrire
            </button>
        </form>

        <p class="text-center mt-4">Vous avez déjà un compte ? <a href="<?= base_url('auth/login') ?>">Se connecter</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="<?= base_url('public/assets/semantic-ui/dist/semantic.min.js') ?>"></script>
</body>

</html>