<?php

function get_correct_path($a, $b)
{
    $result = '';
    $lena = strlen($a);
    $lenb = strlen($b);
    for($i=0; $i<$lena; $i++) {
	for($j=0; $j<$lenb; $j++) {
            if(substr($a, $i, $j+1) == substr($b, 0, $j+1)) {
	        if($i+$j+1 == $lena) {
   	            $result = substr($a, $i, $j+1);
	        }
            }
            else continue;
	}
    }
    return $result;
}

$overlap = get_correct_path(__DIR__,$_SERVER['REQUEST_URI']);
$URL = str_replace($overlap,"",$_SERVER['REQUEST_URI']);

function get_url($link_url) {
	 global $overlap;
	 return $overlap . '/' . $link_url;
}

$bloglisthumanreadable = array("graphene","quantum-teleportation","genome-editing","gravitational-waves","lepton-universality");

if($URL=='/') {
    include 'home.php';
}
elseif($URL=='/about' || $URL=='/about/') {
    include 'about.php';
}
elseif($URL=='/contact' || $URL=='/contact/' || $URL=='/contact?sent') {
    include 'contact.php';
}   
elseif($URL=='/sendemail') {
    include 'sendemail.php';
}
elseif(substr( $URL, 0, 5 ) == "/view") {
    if(in_array(substr(strrchr($URL, "/"), 1),$bloglisthumanreadable)) {
        $blogName = str_replace("-","",substr(strrchr($URL, "/"), 1));
        include 'blog.php';	
    }
    elseif(in_array(substr(strrchr(substr(trim($URL), 0, -1), "/"), 1),$bloglisthumanreadable) && substr($URL, -1)=="/") {
        $blogName = str_replace("-","",substr(strrchr(substr(trim($URL), 0, -1), "/"), 1));
	include 'blog.php';	
    }
    else {
    	include '404.php';
    }
}
else {
    include '404.php';
}

?>
