<? 
/*=============== DAY 1 ==============*/
// $operator = "*";
// $num1= 5;
// $num2= 7;

// switch ($operator) {
//   case "+":
//     echo $num1 + $num2;
//     break;
//   case "-":
//     echo $num1 - $num2;
//     break;
//   case "*":
//     echo $num1 * $num2;
//     break;
//   case "/":
//     echo $num1 / $num2;
//     break;
//   default:
//     echo "operation error";
// }


//********** */ day one task********

// $unit = 90;

// if($unit <= 50){
//   echo $unit*3.5;
// }else if($unit<=150 && $unit>50){
//   echo $unit*4;
// }else if($unit >150){
//   echo $unit*6.5;
// }else{
//   echo "Sorry Your Electricity Bill is Very Huge";
// }


// for ($i=0;$i<112;$i++){
//   if($i%2 != 0){
//     echo "<div style='width:100px;height:100px;background-color:#000;display:inline-block;'>.</div>";
//   }else{
//     echo "<div style='width:100px;height:100px;background-color:#fff;display:inline-block;border:1px solid #000'>.</div>";
//   }
// }



$student = ['name' => 'Amr' , 'Level' => 3 , 'GPA' => 3.4];
foreach($student as $key=>$out){
  echo $key . "  " . $out;
  echo "<br>";
}

?>