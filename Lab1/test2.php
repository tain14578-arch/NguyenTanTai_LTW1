
<?php
echo "<h2>CAU 2 - LAB 1</h2>";

// CAU 2.1
echo "<h3>CAU 2.1 - PHEP TOAN</h3>";

$a = 20;
$b = 6;

echo "Cong: " . ($a + $b) . "<br>";
echo "Tru: " . ($a - $b) . "<br>";
echo "Nhan: " . ($a * $b) . "<br>";
echo "Chia: " . ($a / $b) . "<br>";
echo "Chia lay du: " . ($a % $b) . "<br>";

// CAU 2.2
echo "<h3>CAU 2.2 - SO SANH</h3>";

$a = 10;
$b = "10";

var_dump($a == $b);
echo "<br>";
var_dump($a === $b);
echo "<br>";
var_dump($a != $b);
echo "<br>";
var_dump($a <> $b);
echo "<br>";
var_dump($a !== $b);

/*
== so sanh gia tri
=== so sanh gia tri va kieu du lieu
!= va <> co y nghia giong nhau
!== so sanh gia tri va kieu du lieu
*/

// CAU 2.3
echo "<h3>CAU 2.3 - TANG TRUOC VA TANG SAU</h3>";

$x = 5;
echo "Ban dau: $x <br>";

$y = ++$x;
echo "Tang truoc: $y <br>";
echo "Gia tri x: $x <br>";

$x = 5;
$y = $x++;

echo "Tang sau: $y <br>";
echo "Gia tri x: $x <br>";

/*
++$x tang truoc roi moi tra ve gia tri
$x++ tra ve gia tri truoc roi moi tang
*/

// CAU 2.4
echo "<h3>CAU 2.4 - NOI CHUOI</h3>";

$a = "Xin chao";
$b = " cac ban";

$c = $a . $b;
echo "Toan tu . : $c <br>";

$d = "Hoc PHP";
$d .= " co ban";

echo "Toan tu .= : $d <br>";

/*
. dung de noi chuoi
.= noi chuoi va gan lai bien
*/

// CAU 2.5
echo "<h3>CAU 2.5 - DEM KY TU</h3>";

$a = "Lap trinh PHP";
$b = "Xin chao Viet Nam";

echo "strlen: " . strlen($a) . "<br>";
echo "mb_strlen: " . mb_strlen($b, "UTF-8") . "<br>";

/*
strlen dem byte
mb_strlen dem ky tu Unicode
*/

// CAU 2.6
echo "<h3>CAU 2.6 - CHUYEN CHU HOA THUONG</h3>";

$a = "Xin chao PHP";

echo strtoupper($a) . "<br>";
echo strtolower($a) . "<br>";

$b = "Xin chào Việt Nam";

echo mb_strtoupper($b, "UTF-8") . "<br>";
echo mb_strtolower($b, "UTF-8") . "<br>";

/*
strtoupper va strtolower xu ly chu ASCII
mb_strtoupper va mb_strtolower ho tro Unicode
*/

// CAU 2.7
echo "<h3>CAU 2.7 - EP KIEU INT</h3>";

$a = "123 abc";
$b = "abc 123";

$x = (int)$a;
$y = (int)$b;

var_dump($x);
echo "<br>";
var_dump($y);

// CAU 2.8
echo "<h3>CAU 2.8 - KIEU DU LIEU</h3>";

$a = 100;
$b = 10.5;
$c = "Hello PHP";
$d = true;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);

?>
