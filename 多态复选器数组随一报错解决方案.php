<?php

//多态复选器，随一报错解决方案




//随一报错解决方案



error_reporting(E_ALL^E_NOTICE^E_WARNING);     //php关闭错误报告



//


/*


//多态复选器，随一报错解决方案


//随一报错解决方案


*/

//多态随一，随二，随三，随四




//数组随一报错解决方案






echo "数组，随一报错解决方案";


echo "<br>";


echo "<br>";


$aa4=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12","13"=>"13","14"=>"14","15"=>"15","16"=>"16","17"=>"17","18"=>"18","19"=>"19","20"=>"20","21"=>"21","22"=>"22","23"=>"23","24"=>"24","25"=>"25","26"=>"26","27"=>"27","28"=>"28","29"=>"29","30"=>"30","31"=>"31","32"=>"32","33"=>"33","34"=>"34","35"=>"35");


$nx4=mt_rand(1,4);

//$nx4随机位数


//随一报错解决方案


//比nx4大小


   
$bn4=array_rand($aa4,$nx4);
   

$nx5=array_rand($aa4,4);


$nx3=array_rand($aa4,3);
   


$nx2=array_rand($aa4,2);
   
   
$nx1=array_rand($aa4,1);
   
   

//判断  $nx4 是否大于1

//如果大于1执行第一条

//如果不大于1执行第二条




if ($nx4>1)
{
   
   

$join2=join("+", $bn4);


echo $join2;    //输出结果集

  


}
else

{
    
    
print_r($bn4);

print_r("+");
    
print_r($nx5);

}




echo "<br>";



?>




