<? 

$operator = "*";
$num1= 5;
$num2= 7;

switch ($operator) {
  case "+":
    echo $num1 + $num2;
    break;
  case "-":
    echo $num1 - $num2;
    break;
  case "*":
    echo $num1 * $num2;
    break;
  case "/":
    echo $num1 / $num2;
    break;
  default:
    echo "operation error";
}


?>