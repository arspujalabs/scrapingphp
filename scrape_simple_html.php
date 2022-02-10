<?php
// function to get spesific section of html code
function crop_data($awal, $akhir, $from){
	$satu = explode($awal, $from);
	$dua  = (count($satu)>1) ? explode($akhir, $satu[1])[0] : '';
	return $dua;
}

// how to use?
// we assume we already have the html code from the curl result for example
$html = "<html><head><title>Hello Bro!</title></head><body><div class='container'><div class='title'>this is the title</div><div class='content'>this is the content</div></div></body></html>";
// process get content section by div spesific class "content"
$obj  = crop_data("<div class='content'>", "</div>", $html);
// display results 
echo $obj;
// this is the content

?>
