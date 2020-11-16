<?php
use orm\Entity\User;

session_start();

set_time_limit( 0 );
  ini_set('auto_detect_line_endings', 1);
  ini_set('mysql.connect_timeout','7200');
  ini_set('max_execution_time', '0');

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');


$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);
$userRepo = $entityManager->getRepository(User::class);

if(isset($_SESSION) && isset($_SESSION['id'])){
  
  while(true) {
    if( connection_status() != CONNECTION_NORMAL or connection_aborted() ) {
      break;
    }

    $entityManager->clear();

    $user = $userRepo->find($_SESSION['id']);
    $allowedToModify = $user->getChecked();

    $data = $allowedToModify;
    
    echo "data: ".json_encode($data)."\n\n";
    ob_flush();
    flush();
    sleep(1);
  };
}
