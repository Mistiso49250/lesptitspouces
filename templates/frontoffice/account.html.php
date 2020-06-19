<?php ?>

<h1>Bonjour <?= $_SESSION['auth']->username;?></h1>

<!-- modif mot de pase -->

<form action="" method="post">
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="changer votre mot de passe">
    </div>

    <div class="form-group">
        <input type="password" name="passwordConfirm" class="form-control" placeholder="confirmation du mot de passe">
    </div>
    <button class="btn btn-primary">Changer mon mot de passe</button>
</form>