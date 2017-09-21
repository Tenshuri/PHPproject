<form class = "nav navbar-form navbar-left" name='monFormulaireLogin' id='monFormulaireLogin' method="POST" action="index.php?page=login">
       <?php base::disconnect($user); ?>
        <button type="submit" class = "btn btn-default">
            <?php echo BOUTON_DECONNEXION?>
        </button>
</form>