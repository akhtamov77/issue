<?php
//1
$a=13;
if($a>0){
    $a++;
    echo $a;
}else{
    echo $a.'<br>';
}
//2
$a=-4;
if($a>0){
    $a++;
    echo $a.'<br>';
}else{
    $a=$a-2;
    echo $a.'<br>';
}
//3
$a=0;
if($a>0){
    $a++;
    echo $a.'<br>';
}elseif($a<0){
    $a=$a-2;
    echo $a.'<br>';
}
else{
    $a=10;
    echo $a.'<br>';

}
//4

$a=-24;
$b=-346;
$c=-34;
if($a>0 and $b>0 and $c>0){
    echo "3 ta musbat son mavjud".'<br>';
}elseif($a>0 and $b>0 or $c>0 and $a>0 or $c>0 and $b>0){
    echo "2 ta musbat son mavjud".'<br>';
}elseif($a>0 or $b>0 or $c>0){
    echo "0 ta musbat son mavjud".'<br>';
}else{
    echo " musbat son mavjud emas".'<br>';
}

//5

$a=-24;
$b=-346;

if($a>$b){
    echo $a." son katta".'<br>';
}elseif($b>$a){
    echo $b." son katta";
}else{
    echo "ikkalasi teng";
}

//6
$a=49876;
$b=548;
if($a>$b){
    echo $a;
}else{
    echo $b;
}
