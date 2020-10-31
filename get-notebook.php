<br>

<h1>Carnet de Voyage</h1>
<div class="form-group">
  <textarea class="form-control rounded-0" id="noteBook" rows="10" readonly>
  <?php foreach ($notes as $note) { ?> 
        <?= $note->getNote() ?>
        <?php } ?>
  </textarea>
</div>


<?php require('create-notebook.php'); ?>