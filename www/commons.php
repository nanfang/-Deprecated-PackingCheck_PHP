<?php
function redirect($url, $statusCode = 303){
   header('Location: ' . $url, true, $statusCode);
   die();
}

function is_blank($question){
    return (!isset($question) || trim($question)==='');
}
?>
