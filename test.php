<?php
use orm\Entity\Magie;
use orm\Entity\CharacterMagie;
use orm\Entity\ClassMetadata;
use orm\Entity\Doctrine_Core;

$em = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

$id = 60;

$m = $em->getRepository(Magie::class)->findOneBy(['id' => $id]);

$cm = $em->getRepository(CharacterMagie::class)->findOneBy(['id' => $id]);

// var_dump($m);
// var_dump($cm);

Doctrine::getTable('characterMagie')->findOneByName('nom');
