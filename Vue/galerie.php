<?php/*
formulaire pour modifier diapo
Auteur = ISOARD Axel

*/
?>
<div class="container">
    <div class="table-responsive">    


<form action="index.php?page=upload" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Ajouter Image" name="submit">
</form>
            
        <table class="table">
            <thead>
                <tr>
                    <th>Miniature</th>
                    <th>id</th>
                    <th>Ordre</th>
                    <th>Nom Fichier</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($diapo as $ligne){ ?>
                         <form method="post" action="index.php?page=modifier">
                <tr>
                    <td style="width:10%">
                        <img src="<?php echo PATH_IMAGES.$ligne['nomFichier']?>" alt="<?php echo LOGO; ?>" style=width:99%>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="id" class="form-control" id="id" name='id' value="<?php echo $ligne['id']?>">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="ordre" class="form-control" id="ordre" name='ordre' value="<?php echo $ligne['id']?>">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="nomFichier" class="form-control" id="nomFichier" name='nomFichier' value="<?php echo $ligne['nomFichier']?>">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="titre" class="form-control" id="titre" name='titre' value="<?php echo $ligne['titre']?>">
                        </div>
                    </td>
                    <td>
                        <textarea name="description" rows="2" cols = "8" id="description" ><?php echo $ligne['description'];?></textarea>
                    </td>
                    <td>

                         <button type="submit" class="btn btn-default" name="modifier">Modifier</button>

                    </td>
                    <td>
                         <button type="submit" class="btn btn-default" name="supprimer">Supprimer</button>
                    </td>
                </tr>
                             </form>
                <?php  } ?>

            </tbody>
        </table>
    </div>