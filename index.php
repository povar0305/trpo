<?php //php 7.2.24
Class A{
public function lin($a, $b){
if($b==0){
echo "$b==0";
}
if($a==0){
echo "$a==0";
}
$x=array();
$x=-($b/$a);
echo $x;
}
}
Class B extends A{
public function dis($a, $b, $c){
$d=($b*$b-(4*$a*$c));
    echo $d;

if($d<0){
echo 'd<0';
}
if($d=0){
$x= -($b/$a);
    echo "d=0";
    echo $x;
}
$xa=(((-$b)+sqrt($d))/(2*$a));
$xb=(((-$b)-sqrt($d))/2*$a);
echo $xb;
echo $xa;
}
}

$a=new A();
$b=new B();
$b->dis(1,2,2);
?>