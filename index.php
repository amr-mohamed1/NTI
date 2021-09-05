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

$unit = 90;

if($unit <= 50){
  echo $unit*3.5;
}else if($unit<=150 && $unit>50){
  echo $unit*4;
}else if($unit >150){
  echo $unit*6.5;
}else{
  echo "Sorry Your Electricity Bill is Very Huge";
}

?>