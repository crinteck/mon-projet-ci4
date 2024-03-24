<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>

<div class="ui stackabble grid" style="margin-top: 20px;">

    <div class="four wide column">
        <div class="ui segment">
            <div class="ui message">
                Dans cette page, vous pouvez modifier vos informations de profile et ajouter une image si vous le voulez.
            </div>
        </div>
    </div>
    <div class="twelve wide column">
        <div class="ui segment">
            <div class="ui dividing header">Mon profile</div>

            <?php $errors = session()->getFlashdata('errors'); ?>
            <?php $success = session()->getFlashdata('success'); ?>

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
            <?php if ($success) : ?>
                <div class="ui success message">
                    <i class="close icon"></i>
                    <div class="header">
                       Message
                    </div>
                    <ul class="list">
                        <?php foreach ($success as $succ) : ?>
                            <li><?= esc($succ) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="ui form">
                    <div class="field">
                        <label for="image">Image de profile</label>
                        <input type="file" name="image" id="image" accept="image/*">
                    </div>
                    <div class="two fields required">
                        <div class="field">
                            <label for="first_name">Prénom</label>
                            <input type="text" name="first_name" id="first_name" required value="<?= old('first_name', $user->first_name ?? '') ?>">
                        </div>
                        <div class="field">
                            <label for="last_name">Nom</label>
                            <input type="text" name="last_name" id="last_name" required value="<?= old('last_name', $user->last_name ?? '') ?>">
                        </div>
                    </div>

                    <div class="field">
                        <button type="submit" class="ui primary button">Enregistrer</button>
                    </div>
                </div>
            </form>


        </div>
    </div>

</div>


<?= $this->endSection() ?>