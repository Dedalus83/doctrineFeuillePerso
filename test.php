<?php
use orm\Entity\Magie;

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

$magieRepo = $entityManager->getRepository(Magie::class);
$magie = $magieRepo->findBy(array(), array('type'=>'asc'));

var_dump($magie);


