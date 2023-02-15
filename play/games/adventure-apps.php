<?php

$url="https://cms.idbmobile.com/api/domains/moira.club/pages/adventure-apps";

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



$elem_array = array();
$elem_array = $array_data->items;

$courses_apps=array();

echo "<div class='intro'>";
echo "<h1>Adventure Games</h1>";
echo "</div>";


print "<div class='mySelection'>";
print "<div class='selection-wrap'><div class='selection-container'>";
 
foreach ($elem_array as $key => $respuesta){
  	
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
    print "<div class='app-selection'><a href='".$courses_apps['link']."'><img src='".$courses_apps['image']."'>";
	print "<div class='app-description'><h3><b>".$courses_apps['title']."</b><br/>".$courses_apps['description']."</h3>";
	
	if ($courses_apps['rating']==5){
     	print "<div class='stars five'>";	
	}else if ($courses_apps['rating']==4){
		print "<div class='stars four'>";
	}else if ($courses_apps['rating']==3){
		print "<div class='stars three'>";
	}; //css no tiene codificado 2 y 1 estrellas
	
	print '<div> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span>
                              <span>&#9733;</span></div><button class="btn-selection"><span>Play</span> <i class="go"></i></button>
                          </div>
                        </div>
                      </a></div>'; 
} 
 
 
			  
?>