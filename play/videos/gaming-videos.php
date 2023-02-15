<?php

$url="https://cms.idbmobile.com/api/domains/moira.club/pages/gaming-videos";

$terminos=array();

//Initialize a cURL session using 
$curl_handle = curl_init();

//Pass URL option in the cURL session 
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_URL, $url);

//Execute cURL session & store data: 
$terminos = curl_exec($curl_handle);

//Close cURL session: 
curl_close($curl_handle);

// Decode JSON into PHP array
$array_data = json_decode($terminos);
//$array_data = $array_data->response;
//print_r($array_data);

$videos = array();
$videos = $array_data->items;

$terms_array=array();

foreach ($array_data as $key => $resultado){	
	$terms_array['id']=$array_data->id;
	$terms_array['title']=$array_data->title;
	$terms_array['body']=$array_data->body;
	$terms_array['excerpt']=$array_data->excerpt;
	$terms_array['view_type']=$array_data->view_type;
	$terms_array['meta_desc']=$array_data->meta_desc;
	$terms_array['seo_title']=$array_data->seo_title;
	$terms_array['image']=$array_data->image;
} 
	echo "<div class='intro'>";
    echo "<h1>Gaming Videos</h1>";
    echo "</div>";

echo "<section class='articles'><div class='articles-grid'>";


foreach ($videos as $key => $respuesta){
   	$videos['page_id']=$respuesta->page_id;
	$videos['id']=$respuesta->id;
	$videos['title']=$respuesta->title;
	$videos['subtitle']=$respuesta->subtitle;
	$videos['description']=$respuesta->description;
	$videos['image']=$respuesta->image;
	$videos['link']=$respuesta->link;
	$videos['customlink']=$respuesta->customlink;
	$videos['rating']=$respuesta->rating;
	$videos['date']=$respuesta->date;
	echo "<div class='articles-wrap'><a href='".$videos['link']."'>";
	echo "<img src=".$videos['image'].">";
    echo "<h3>".$videos['title']."</h3>";	 
    echo "</a></div>";
} 
echo "</div></section>";

 

?>