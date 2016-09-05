<?php 
//sort() funksiyasindan istifade ederek tam ededlerden ibaret array-in elementlerini sort eden Class yazin.//

class Sort
{
   public $arr;
    public function __construct($arr)
    {	$this->arr=$arr;
        sort($this->arr);
    }
    public function yaz(){
    	foreach ($this->arr as $key => $value) {
    		echo $value."<br>";
    	}
    }
}
$arr= array(2,4, 6,1,8,10,7);
$sort = new Sort($arr);
$sort->yaz();

 ?>