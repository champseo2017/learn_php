<?php

$a = array('th'=>"thailand",'jp'=>"japan",'kr'=>"Korea");
   
//ใช้ลูป while เพื่อให้เลื่อนพอยน์เตอร์ไปเรื่อยๆ จนกว่าจะคืนค่า false
while(list($key,$value) = each($a)){
  
  echo "$key => $value <br/>";
   
}

// $sum = 0;
// echo "Sum of 1 -";
// for($i =1; $i <= 10; $i++){
//     $sum += $i;
//     if($sum >=30){
//         $x = $i;
//         echo $x. " = " . $sum;
//         exit;
//     }
// }







