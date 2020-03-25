<?php
//sanatisation
function trim_value(&$value)
{
    $value = trim($value);
}
array_filter($_POST, 'trim_value'); 
$postfilter = 
    array(
            'newtache' => array('filter' => FILTER_SANITIZE_STRING, 'flags' => !FILTER_FLAG_STRIP_LOW),    // removes tags. formatting code is encoded -- add nl2br() when displaying
        );
$revised_post_array = filter_var_array($_POST, $postfilter);
if ($revised_post_array['newtache']==''){
        header ('location: ../../index.php');
}
else{
$nom=trim($revised_post_array['newtache']);
while (($pos = strpos($nom, "  ")) ==TRUE) {
        $nom=str_replace ( "  " , " ", $nom);
}}
?>