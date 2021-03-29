
<?php
$headerNumber = 1;
while ($headerNumber <= 6) {
echo "<h$headerNumber>Today is " . date("Y/m/d") . "</h$headerNumber>";
$headerNumber = $headerNumber + 1;
}

$numberOfDivs = random_int(10, 100);
while($numberOfDivs > 0) {
$randomInt = random_int(0, 100);
echo "<div>$randomInt</div>";
$numberOfDivs = $numberOfDivs - 1;
}