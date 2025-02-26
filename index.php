<?php echo "Hello World";
echo "<br /> Its nice to learn php <br/>";
//This is a comment
/* multi line comment*/
// To declare a variable type $followed_by_variable_name
$name = "John Doe";
$age = 30;
$age++;
$salary = 1000;
echo "Hello {$name} <br/>"; // To print varible and string
echo "You are {$age} years old<br/>"; // another example
echo "Your salary is \${$salary} <br/>"; // to print dollar sign use '\'
$item = "Pizza";
$price = "4.99";
$quantity = 3;
$total = null;
echo "You ordered {$quantity} {$item}(s) for \${$price} each. <br/>"; // to print multi variables and string
$total = $quantity * $price;
echo "The total cost is \${$total} <br/>";
