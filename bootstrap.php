<?php
# bootstrap.php

require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'vendor', 'autoload.php']);

use Doctrine\ORM\Tools\Setup;
use Doctrine\Common\Cache\ApcuCache;
use Doctrine\Common\Proxy\AbstractProxyFactory;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\Logging\DebugStack;

$entitiesPath = [
    join(DIRECTORY_SEPARATOR, [__DIR__, "orm", "Entity"])
];

$isDevMode = false;
$proxyDir = join(DIRECTORY_SEPARATOR, [__DIR__, "proxies"]);
$cache = null;
// if ($isDevMode == false) {
//     $cache = new ApcuCache();
// }

$useSimpleAnnotationReader = false;

// Connexion à la base de données
$dbParams = [
    'driver'   => 'pdo_mysql',
    'host'     => 'sql110.epizy.com',
    'charset'  => 'utf8',
    'user'     => "epiz_24953341",
    'password' => "6ZLmj05b8Vdg",
    'dbname'   => 'epiz_24953341_sheet',
];

$config = Setup::createAnnotationMetadataConfiguration(
    $entitiesPath,
    $isDevMode,
    $proxyDir,
    $cache,
    $useSimpleAnnotationReader
);

if ($isDevMode) {
    $config->setSQLLogger(new DebugStack());
}

if ($isDevMode == false) {
    $config->setAutogenerateProxyClasses(AbstractProxyFactory::AUTOGENERATE_NEVER);
}

$entityManager = EntityManager::create($dbParams, $config);

return $entityManager;