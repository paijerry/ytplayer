<?php
$data = file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=' . $_GET['id'] . '&key=AIzaSyAhh-a3RZy69VZPdVgLpwES-ho0cmJAk_c&maxResults=50');
if (!$data){
    throw new Exception("Data retrieval failed.");
    return;
}
print_r($data);
?>