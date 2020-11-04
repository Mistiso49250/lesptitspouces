<?php ?>

<div id="RegisterBanniere">
    <div class="banniere">
        <h2>S'inscrire</h2>
    </div>
</div>

 <!-- Verification existance compte  -->
<?php if(!empty($errors)): ?>
<div class="alert alert-danger">
    <p>Vous n'avez pas remplis le formulaire correctemet</p>
    <ul>
        <?php foreach($errors as $error): ?>
        <li><?=$errors;?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<!-- Formulaire d'inscription -->
<form action="" method="POST">
    <div class="form-group">
        <label for="">Nom</label>
        <input type="text" name="username" class="form-control" />
    </div>

    <div class="form-group">
        <label for="">Prenom</label>
        <input type="text" name="name" class="form-control" />
    </div>

    <div class="form-group">
        <label for="">Société</label>
        <input type="text" name="société" class="form-control" />
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" />
    </div>

    <div class="form-group">
        <label for="">Adresse Postale</label>
        <input type="text" name="adress" class="form-control" />
    </div>

    <div class="form-group">
        <label for="">Informations complémentaires (Numéro d'appartement, Code de la porte, Etage ...)</label>
        <input type="text" name="adress supp" class="form-control" />
    </div>

    <div class="form-group">
        <label for="">Code Postal</label>
        <input type="text" name="postal" class="form-control" />
    </div>

    <div class="form-group">
        <label for="">Ville</label>
        <input type="text" name="ville" class="form-control" />
    </div>

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="france">France</option>
      <option value="angleterre">Angleterre</option>
      <option value="usa">USA</option>
    </select>

    
    <div class="form-group">
        <label for="">Téléphone</label>
        <input type="tel" name="tel" pattern="^9[0-9]{7}" minlength="8" maxlength="10" class="form-control" />
    </div>

    <div class="form-group">
        <label for="">Mot de passe</label>
        <input type="password" name="password" class="form-control" />
    </div>

    <div class="form-group">
        <label for="">Confirmez votre mot de passe</label>
        <input type="password" name="passwordConfirm" class="form-control" />
    </div>

    <button type="submit" class="btn btn-primary">M'inscrire</button>

</form>
