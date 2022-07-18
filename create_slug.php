<?php
// create slug from string

function createSlug($txt){
    $txt   = strtolower(trim($txt));
    $delme = array('"', '\'', '/', '\\', '_', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', ':', ';', ',', '.', '?', '=', '+', '[', ']', "“", "”", '"', "'");
    foreach ($delme as $val) {
      $txt = str_replace($val, '', trim($txt));
    }
    $txt = str_replace('  ', ' ', $txt);
    $txt = str_replace(' ', '-', $txt);
    return str_replace(' ', '', $txt);
}

?>
