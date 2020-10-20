<?php
use orm\Entity\Magie;
use orm\Entity\CharacterMagie;

$em = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

$tableName = $em->getClassMetadata(CharacterMagie::class)->getTableName();

var_dump($tableName);


