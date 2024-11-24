<?php 
//setcookie(name,value,expire,path,domain,secure,httponly)
setcookie("fruit","apple",time()+(86400));
setcookie("color","red",time()+(86400));

// print_r($_COOKIE);
if(isset($_COOKIE["fruit"])){
    echo "current cookie is ".$_COOKIE['fruit'];
}
else{
    echo "no fruit set";
}

echo "<br/>";
if(isset($_COOKIE['color'])){
    echo "current color is ".$_COOKIE['color'];
}
else{
    echo "no color set";
}
 ?>