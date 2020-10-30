<?php

namespace orm\Service\SingletonEntityManager;

class SingletonEntityManager {
    private function __construct() {
        $entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../bootstrap.php']);
    }

    private static $entityManager;
    public static function Get(){
        if(SingletonEntityManager::$entityManager == NULL){
            SingletonEntityManager::$entityManager = new SingletonEntityManager();
        }
        return SingletonEntityManager::$entityManager;
    }
}

$singleEntityManager = SingletonEntityManager::Get();