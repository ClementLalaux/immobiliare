<?php

require __DIR__.'/../config/DB.php';

DB::postQuery('SET FOREIGN_KEY_CHECKS = 0');
DB::postQuery('TRUNCATE TABLE format');
DB::postQuery('SET FOREIGN_KEY_CHECKS = 1');

$formats = [['classique','30','classic'],['grand','60','large'],['géant','120','giant'],['collector','300','collector']];

foreach($formats as $format){
    $query = DB::postQuery('INSERT into format (format, pourcentage, cover) VALUES (:format, :pourcentage, :cover) ', [':format' => $format[0] , ':pourcentage' => $format[1], ':cover' => $format[2]]);
}

?>