<?php
function get_youtube($id){
    $youtube = "http://www.youtube.com/oembed?url=https://www.youtube.com/watch?v=". $id ."&format=json";
    $curl = curl_init($youtube);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $return = curl_exec($curl);
    curl_close($curl);
    return json_decode($return, true);
 }
$id = $_GET['id']; // youtube video url
// Display Data
print_r(json_encode(get_youtube($id)));
?>