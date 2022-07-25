<?php
// function to create slug from string

function createSlug($txt){
    $txt   = preg_replace('/[^\p{L}\p{N}\s]/u', '', $txt); // clean symbol
    $txt   = strtolower(trim($txt));
    $delme = array('"', '\'', '/', '\\', '_', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', ':', ';', ',', '.', '?', '=', '+', '[', ']', "|", "“", "”", '"', "'");
    foreach ($delme as $val) {
      $txt = str_replace($val, '', trim($txt));
    }
    $txt = str_replace('  ', ' ', $txt);
    $txt = str_replace(' ', '-', $txt);
    return str_replace(' ', '', $txt);
}

// how to use?
$slug = createSlug('hallo iam programmer');
// display results
echo $slug;

?>
