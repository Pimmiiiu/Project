<?php
$cal = "-20-30+50*2/2" ; // 3+50*4+100/2-20*2
echo $cal; 
echo "<br>";
// *
$pos = substr_count($cal,"*");
for($i=1;$i<=$pos;$i++)
{
    preg_match('/[0.0-9.9]*\*[0.0-9.9]*/',$cal,$cal1);
    $l = strpos($cal,"*");
    //echo $l ; // 14 
    //echo $cal1[0];
    $lenght = strlen($cal1[0]);
    $cal2 = preg_split('/\*/',$cal1[0]);
    //echo $lenght;
    //print_r($cal2);
    $num1 = $cal2[0];
    $lenght2 = strlen($num1);
    //echo $lenght2;
    $len = $l-$lenght2;
    $num2 = $cal2[1];
    $sum = $num1*$num2;
    //echo $sum;
    $cal = substr_replace($cal,$sum,$len,$lenght);
    //echo "<br>";
}
echo $cal; 
echo "<br>";
// /
$pos = substr_count($cal,"/");
for($i=1;$i<=$pos;$i++)
{
    preg_match('/[0.0-9.9]*\/[0.0-9.9]*/',$cal,$cal1);
    $l = strpos($cal,"/");
    //echo $l ;
    //echo $cal1[0];
    $lenght = strlen($cal1[0]);
    $cal2 = preg_split('/\//',$cal1[0]);
    //echo $lenght;
    //print_r($cal2);
    $num1 = $cal2[0];
    $lenght2 = strlen($num1);
    //echo $lenght2;
    $len = $l-$lenght2;
    $num2 = $cal2[1];
    $sum = $num1/$num2;
    //echo $sum;
    $cal = substr_replace($cal,$sum,$len,$lenght);
    //echo "<br>";
}
echo $cal; 
echo "<br>";

// +
$pos = substr_count($cal,"+");
for($i=1;$i<=$pos;$i++)
{
    // if(preg_match('/[0.0-9.9]*\-[0.0-9.9]*\+[0.0-9.9]*/',$cal,$cal1))
    // {
    //     $l = strpos($cal,"+");
    //     //echo $l ;
    //     //echo "<br> cal1 =" .$cal1[0] . "<br>";
    //     $lenght = strlen($cal1[0]);
    //     $cal2 = preg_split('/\+/',$cal1[0]);
    //     //echo $lenght;
    //     print_r($cal2);
    //     $cal3 = preg_split('/\-/',$cal2[0]);
    //     $num3 = $cal3[0];
    //     $num1 = $cal2[0];
    //     //echo $cal2[0];
    //     $lenght2 = strlen($num1);
    //     //echo $lenght2;
    //     $len = $l-$lenght2;
    //     $num2 = $cal2[1];
    //     //$sum = $num1+$num2;
    //     $sum = $num3-($num1+$num2);
    //     echo "<br> sum = " . $num3. $num1 . $num2 ."<br>";
    //     echo $sum . "<br>";
    //     $cal = substr_replace($cal,$sum,0,$lenght);
    //     echo $cal; 
    // }
    if(preg_match('/^\-[0.0-9.9]*\+[0.0-9.9]*/',$cal,$cal1))
    {
        $l = strpos($cal,"+");
        //echo $l ;
        //echo $cal1[0];
        $lenght = strlen($cal1[0]);
        $cal2 = preg_split('/\+/',$cal1[0]);
        //echo $lenght;
        //print_r($cal2);
        $num1 = $cal2[0];
        echo $cal2[0];
        $lenght2 = strlen($num1);
        //echo $lenght2;
        $len = $l-$lenght2;
        $num2 = $cal2[1];
        $sum = $num1+$num2; //แก้
        echo $sum;
        $cal = substr_replace($cal,$sum,$len,$lenght);
        //echo "<br>"; 
    }
    else if (preg_match('/[0.0-9.9]*\+[0.0-9.9]*/',$cal,$cal1))
    {
        $l = strpos($cal,"+");
        //echo $l ;
        //echo $cal1[0];
        $lenght = strlen($cal1[0]);
        $cal2 = preg_split('/\+/',$cal1[0]);
        //echo $lenght;
        //print_r($cal2);
        $num1 = $cal2[0];
        //echo $cal2[0];
        $lenght2 = strlen($num1);
        //echo $lenght2;
        $len = $l-$lenght2;
        $num2 = $cal2[1];
        $sum = $num1+$num2;
        //echo $sum;
        $cal = substr_replace($cal,$sum,$len,$lenght);
        //echo "<br>"; 
    }
}
echo $cal; 
echo "<br>";

// -
$pos = substr_count($cal,"-");
//echo $pos ;
for($i=1;$i<=$pos;$i++)
{
    if (preg_match('/\-[0.0-9.9]*\-[0.0-9.9]*/',$cal,$cal1))
         {
                $l = strpos($cal,"-");
                //echo $l ;
                //echo $cal1[0];
                $lenght = strlen($cal1[0]);
                $cal2 = preg_split('/\-/',$cal1[0]);
                //echo $lenght;
                //print_r($cal1);
                //print_r($cal2);
                $num1 = $cal2[1];
                //echo $num1 . "<br>";
                $lenght2 = strlen($num1);
                //echo $lenght2;
                $len = $l-$lenght2;
                //echo $l.$lenght2.$len. "<br>";
                $num2 = $cal2[2];
                //echo $num2. "<br>";
                $sum = -($num1+$num2);
                //echo $sum. "<br>";
                $cal = substr_replace($cal,$sum,0,$lenght);
                //echo "<br>";  
                       
            
    }
    else if (preg_match('/[0.0-9.9]*\-[0.0-9.9]*/',$cal,$cal1))
    {
        $l = strpos($cal,"-");
        //echo $l ;
        //echo $cal1[0];
        $lenght = strlen($cal1[0]);
        $cal2 = preg_split('/\-/',$cal1[0]);
        //echo $lenght;
        //print_r($cal2);
        $num1 = $cal2[0];
        $lenght2 = strlen($num1);
        //echo $lenght2;
        $len = $l-$lenght2;
        $num2 = $cal2[1];
        $sum = $num1-$num2;
        //echo $sum;
        $cal = substr_replace($cal,$sum,$len,$lenght);
        //echo "<br>";  
    }
    
}
echo $cal; 
echo "<br>";