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
// Do I want to include initial or trailing /'s
$number_of_levels = substr_count(substr(trim($URL), 1),'/',0);

$bloglist = array("graphene","quantumteleportation","genomeediting","gravitationalwaves","leptonuniversality");

if($URL=='/') {
    include 'home.php';
}
elseif($URL=='/about' || $URL=='/about/') {
    include 'about.php';
}
elseif($URL=='/contact' || $URL=='/contact/') {
    include 'contact.php';
}   
elseif(substr( $URL, 0, 5 ) == "/view") {
    if(in_array(substr(strrchr($URL, "/"), 1),$bloglist)) {
        $blogName = substr(strrchr($URL, "/"), 1);
        include 'blog.php';	
    }
    elseif(in_array(substr(strrchr(substr(trim($URL), 0, -1), "/"), 1),$bloglist)) {
        $blogName = substr(strrchr(substr(trim($URL), 0, -1), "/"), 1);
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
