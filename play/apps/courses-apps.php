<?php

$url="https://cms.idbmobile.com/api/domains/moira.club/pages/courses-apps";

$respuesta=array();

//Initialize a cURL session using 
$curl_handle = curl_init();

//Pass URL option in the cURL session 
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_URL, $url);

//Execute cURL session & store data: 
$respuesta = curl_exec($curl_handle);

//Close cURL session: 
curl_close($curl_handle);

// Decode JSON into PHP array
$array_data = json_decode($respuesta);
//$array_data = $array_data->response;
//print_r($array_data);

echo "<div class='intro'>";
echo "<h1>Courses Apps</h1>";
echo "</div>";
print "<div class='mySelection'>";


if ($array_data->message=="Page Not Found."){
	
	print ("Hubo un error de conexión. Página no encontrada");
	
}else {

$elem_array = array();
$elem_array = $array_data->items;

$courses_apps=array();

foreach ($elem_array as $key => $respuesta){
    print $key;
	print $respuesta->title;
	
	$courses_apps['page_id']=$respuesta->page_id;
	$courses_apps['id']=$respuesta->id;
	$courses_apps['title']=$respuesta->title;
	$courses_apps['subtitle']=$respuesta->subtitle;
	$courses_apps['description']=$respuesta->description;
	$courses_apps['image']=$respuesta->image;
	$courses_apps['link']=$respuesta->link;
	$courses_apps['customlink']=$respuesta->customlink;
	$courses_apps['rating']=$respuesta->rating;
	$courses_apps['date']=$respuesta->date;

	
	print "<br/>";
} 
 
}

?>