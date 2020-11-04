<div id="loginBanniere">
    <div class="banniere">
        <h2>Se connecter</h2>
    </div>
</div>


<!-- Afficher le formulaire de saisie du mot de passe -->
<h1 class="titleConnection">Veuillez saisir votre identifiant et le mot de passe pour vous connecter</h1>

<form action="index.php?action=login" method="POST">
    <div class="form-group">
        <label for="">Pseudo ou email</label>
        <input type="text" name="utilisateur" class="form-control" placeholder="Utilisateur" />
    </div>

    <div class="form-group">
        <label for="">mot de passe<a href="forget.php">(J'ai oublié mon mot de passe</a></label>
        <input type="password" name="password" class="form-control" placeholder="Mot de passe" />
    </div>

    <button class="btn btn-primary">Se connecter</button>

</form>