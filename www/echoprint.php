<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "<h1>PHP Echo/Print</h1>";
echo "<p>Sub-topic 1: <em><u>Display Text</u></em></p>";
echo "<h2>Let's have fun while studying PHP!</h2>";
echo "Hello-Hello ;)<br>";
echo "Despite ", "commas,", " the", " whole", " sentence", " is", " written", " jointly.";

echo "<hr>";
echo "<p>Sub-topic 2: <em><u>Display Variables</u></em></p><br>";
$academy = "Akademia 108";
$period = 15+15;
$a=5;


echo "" .$academy. " is the programming school in Poland.<br>";
echo "To become a junior programmer you will need to spend only " . $period . " days at those courses.<br>";
echo "The tuition fee is " . $a . " thousand zlotys.<br>";
?>

<?php
print "<hr>";
print "<p>Sub-topic 3: <em><u>Print Statement</u></em></p>";

print "<h3>PHP Print works, and you see that</h3><br>";
print "Hello, everyone!<br>How are you?!";
print "<br>I am learning PHP-related topics";
print "<br>";
$text = "Programming is a cool thing";
$a=6;
$b=6;
$note="activity field";

print "If you work hard, you will need much less than ";
print $a+$b;
print " months to become a programmer.<br>";
print "What about you? Would you like to work in such " . $note . "?";
?>




</body>
</html>