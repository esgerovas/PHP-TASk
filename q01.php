<?php 
	
//   Neticesi aşağıdakılar olan funksiya yazın

function ekranayaz($arg1=null,$arg2=null,$arg3=null){
	if($arg1==null){
		$str = " ";
	}
	else if($arg2==null){
		$str = "arg1:$arg1";
	}
	else{
		$str = "arg1: $arg1, arg2: $arg2, arg3: $arg3";
	}
	echo $str;


}
ekranayaz();
echo "<br>";
ekranayaz("Salam");
echo "<br>";
ekranayaz("Salam", "heci", "necesen?");
	/*
		ekranaYaz(); 								-->Boş
		ekranaYaz('salam'); 						-->arg1: salam
		ekranaYaz('salam', 'heci', 'necesen');		-->arg1: salam,arg2: heci,arg3: necesen


	*/



?>