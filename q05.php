<?php 
	/*Asagidaki kodlar-ın outputu necə olacaq və nə üçün?*/


// 1-ci
$x = 5;
echo $x;    
echo "<br />";
echo $x+++$x++;   //5 sonraki $x=6 olmus olur. 5+6=11 sonda $x=7 olur
echo "<br />";
echo $x;  //$x=7 
echo "<br />";
echo $x---$x--;  // 7- 6=1 ekrana 1 cixir. ve sonda $x deyeri 5 olur
echo "<br />";
echo $x; // $x=5



//2-ci
var_dump(0123 == 123);  	// birinci sekkizlik say sisteminde hesablayir ve deyerleri ferqli olduguna gore false olur.
var_dump('0123' == 123);   // type baxmir deyerine baxir ve true olmus olur
var_dump('0123' === 123);  // burda type da baxdigina gore false olur. string number


//3-cü
$x = true and false;
var_dump($x); // and operatoruna gore birinciye baxir ve true olmus olur


//4-cü $x-in dəyəri nə olacaq?
$x = 3 + "15%" + "$25";  // 3+15+0=18  //eger qarisiq ifade reqemle baslayirsa reqem hissesi goturulur string hissesi ignor olunur. eksi olarsa sifra beraber olur. 



 ?>