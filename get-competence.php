<?php foreach ($competences as $competence) { ?> 
      <p>Nom: <span class="border border-primary"<?= dynamicInputAttributes("nom", $competence); ?>><?=htmlentities($competence->getNom())?></span></p>
      <p>Description: <span class="border border-primary" <?= dynamicInputAttributes("description", $competence); ?>><?=htmlentities($competence->getDescription())?></span></p>
<?php } ?>