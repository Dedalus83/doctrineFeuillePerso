<?php foreach ($competences as $competence) { ?> 
      <p id='<?= $competence->getId() ?>'>Nom:</p> 
      <div class="rowCustom">
            <form method="post" class="col-1"> 
                  <input type="hidden" name="fieldEntity" value="<?= get_class($competence); ?>"/>
                  <input type="hidden" name="entityId" value="<?= $competence->getId(); ?>"/>
                        <button type="submit" class="btn btn-danger remove" name="remove" value="remove">X</button>
            </form> 
            <div class="col-11">
                  <p><span class="border border-primary custom"<?= dynamicInputAttributes("nom", $competence); ?>><?=htmlentities($competence->getNom())?></span></p>
            </div>
      </div>
      <p>Description: <span class="border border-primary" <?= dynamicInputAttributes("description", $competence); ?>><?=htmlentities($competence->getDescription())?></span></p>
      <div class="divider div-transparent div-dot"></div>
<?php } ?>

<div class="btn-group fixed-topCustom dropup navbar-toggler navbar-toggler-icon">
  <input class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Competence index">
  <div class="dropdown-menu">
      <?php foreach ($competences as $competence) { ?> 
            <a class="list-group-item fixed-left" href="#<?= $competence->getId()?>" ><?= $competence->getNom() ?></a>
      <?php } ?>
  </div>
</div>