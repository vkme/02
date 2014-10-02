<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>while</title>
</head>

<body>
<?php
/* example 1 */

$i = 1;
while ($i <= 10) {
    echo $i++;  /* the printed value would be
                    $i before the increment
                    (post-increment) */
}


/* example 2 */
echo '<br />';
$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;
?> 
</body>
</html>