<?php

require './config/DB.php';



$limit = $_GET['NbrProducts'] ?? 12;
$offset = ($_GET['offset']??0*$limit);

$params = ['limit'=> intval($limit), 'offset' => $offset];

$query = 'SELECT * from photo INNER JOIN artiste ON photo.artiste_id = artiste.id';
$where = '';

$orderBy = '';

if(isset($_GET['Tri'])){
    if($_GET['Tri'] == 'asc'){
        $orderBy = ' ORDER BY prix asc';
    }else if($_GET['Tri'] == 'desc'){
        $orderBy = ' ORDER BY prix desc';
    }else if($_GET['Tri'] == 'AtoZ'){
        $orderBy = ' ORDER BY titre asc';
    }else if($_GET['Tri'] == 'ZtoA'){
        $orderBy = ' ORDER BY titre desc';
    }
}

if (isset($_GET['filters'])){

    
    $i = 1;
    $j = $i;
    foreach($_GET['filters'] as $key => $filtre){


        if($i !== $j){
            $ajout = ' AND';
        }else{
            $ajout = ' WHERE';
        }

        $params[$key] = intval($filtre);

        if($key == 'theme_id'){
            $where .= ' WHERE theme_id = :theme_id';
            $i++;

        }else if($key == 'format_id'){
            

            $query .= ' INNER JOIN photo_has_format ON photo.id = photo_has_format.photo_id'; 
        
            $where.= $ajout.' format_id = :format_id';
            $i++;


        }else if($key == 'orientation_id'){
            $query .= ' INNER JOIN photo_has_orientation ON photo.id = photo_has_orientation.photo_id';
        
            $where .=  $ajout .' orientation_id = :orientation_id';
            $i++;


        }
    }
    $query .= $where;
    $query .= $orderBy;
    $query .= ' LIMIT :limit OFFSET :offset';
    $photos = DB::query($query, $params);
    
}else{
    $query .= $orderBy;
    $query .= ' LIMIT :limit OFFSET :offset';
    $photos = DB::query($query, $params);
}

header('Content-Type: application/json');
// J'autorise n'importe qui à se connecter à l'API
header('Access-Control-Allow-Origin: *');

 //echo json_encode($query);
// echo json_encode($params);
echo json_encode($photos);