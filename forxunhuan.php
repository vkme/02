<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>forxunhuan</title>
</head>

<body>
<?php
/* example 1 */

for ($i = 1; $i <= 10; $i++) {
    echo "$i<br />";
}

/* example 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo "$i <br />";
}

/* example 3 */

$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    echo "$i <br />";
    $i++;
}

/* example 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
?> 
<br />
<?php
/*
 * 此数组将在遍历的过程中改变其中某些单元的值
 */
$people = Array(
        Array('name' => 'Kalle', 'salt' => 856412), 
        Array('name' => 'Pierre', 'salt' => 215863)
        );

for($i = 0; $i < sizeof($people); ++$i)
{
    $people[$i]['salt'] = rand(000000, 999999);
}
?> 
</body>
</html>