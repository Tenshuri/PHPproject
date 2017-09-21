<form class = "nav navbar-form navbar-left" name='monFormulaireLogin' id='monFormulaireLogin' method="POST" action="index.php?page=login">
    <?php
  require_once(PATH_MODEL.'secureKey.php');
  $secureKey = new secureKey;
    $secureKey -> outputKey()?>
    <input type="hidden" class="form-control" name = "url" value="<?php echo $page;?>">
        <div class="form-group <?php echo (isset($_GET['message'])&& $_GET['message'] == "identifiant_invalide" ? "has-error has-feedback" : "");?>">
            <input type="text" class="form-control" name="identifiant" placeholder="<?php echo LABEL_IDENTIFIANT;?>">
        </div>
        <div class="form-group <?php echo (isset($_GET['message'])&& $_GET['message'] =="password_invalide" ? "has-error has-feedback":"")?>">
            <input type="password" class="form-control" name="password" placeholder="<?php echo LABEL_PASSWORD;?>">
        </div>
        <button type="submit" class = "btn btn-default">
            <?php echo BOUTON_CONNEXION?>
        </button>
</form