<html>
<head>
<title>Home Page - BMTEST</title>
</head>
<body>

<?php

$hello = "Dev Environment";

echo '<b>' . $hello  . '</b>';

echo '<br />';

//testing new 8 feature

function days_in_month(string $month): int
{
    return match(strtolower(substr($month, 0, 3))) {
        'apr', 'jun', 'sep',  'nov'  => 30,       
        'jan', 'mar', 'may', 'jul', 'aug',  'oct', 'dec'  => 31,
        'feb' => is_leap($year) ? 29 : 28,
        default => throw new InvalidArgumentException("Bogus month"),
    };
}

echo 'Days in month are ' . days_in_month('dec') . '.';

?>

<a href="demo.php">Go to demo</a>

</body>
</html>