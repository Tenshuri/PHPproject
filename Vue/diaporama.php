
<?php
/*
Diaporama du site
Auteur ISOARD Axel
*/
?>
    <div class="slideshow-container">
    <?php foreach($diapo as $ligne){ ?>
        <div class="mySlides fade">
          <div class="numbertext"><?php echo $ligne['id']?></div>
          <img src="<?php echo PATH_IMAGES.$ligne['nomFichier']?>" style="width:100%">
          <div class="text"><?php echo $ligne['titre'];echo $ligne['description'];?></div>
        </div>
    <?php  } ?>

        

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <div style="text-align:center">
        <?php foreach($diapo as $ligne){ ?>
      <span class="dot" onclick="currentSlide(<?php echo $ligne['id']?>)"></span>
              <?php  } ?>
    </div>

        <script src="<?php echo PATH_SCRIPT;?>diapositive.js"></script>
      