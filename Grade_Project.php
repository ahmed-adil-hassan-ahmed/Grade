<!DOCTYPE html>
<html>
<body>

<?php
$student1 = rand(0, 100);
$student2 = rand(0, 100);
$student3 = rand(0, 100);
$student4 = rand(0, 100);
$student5 = rand(0, 100);
$student6 = rand(0, 100);
$student7 = rand(0, 100);
$student8 = rand(0, 100);
$student9 = rand(0, 100);
$student10 = rand(0, 100);

// الطالب 1
if ($student1 >= 90) { $grade1 = "إمتياز"; }
if ($student1 >= 80 && $student1 < 90) { $grade1 = "جيد جدا"; }
if ($student1 >= 70 && $student1 < 80) { $grade1 = "جيد"; }
if ($student1 >= 50 && $student1 < 70) { $grade1 = "مقبول"; }
if ($student1 < 50) { $grade1 = "رسوب"; }

// الطالب 2
if ($student2 >= 90) { $grade2 = "إمتياز"; }
if ($student2 >= 80 && $student2 < 90) { $grade2 = "جيد جدا"; }
if ($student2 >= 70 && $student2 < 80) { $grade2 = "جيد"; }
if ($student2 >= 50 && $student2 < 70) { $grade2 = "مقبول"; }
if ($student2 < 50) { $grade2 = "رسوب"; }

// الطالب 3
if ($student3 >= 90) { $grade3 = "إمتياز"; }
if ($student3 >= 80 && $student3 < 90) { $grade3 = "جيد جدا"; }
if ($student3 >= 70 && $student3 < 80) { $grade3 = "جيد"; }
if ($student3 >= 50 && $student3 < 70) { $grade3 = "مقبول"; }
if ($student3 < 50) { $grade3 = "رسوب"; }

// الطالب 4
if ($student4 >= 90) { $grade4 = "إمتياز"; }
if ($student4 >= 80 && $student4 < 90) { $grade4 = "جيد جدا"; }
if ($student4 >= 70 && $student4 < 80) { $grade4 = "جيد"; }
if ($student4 >= 50 && $student4 < 70) { $grade4 = "مقبول"; }
if ($student4 < 50) { $grade4 = "رسوب"; }

// الطالب 5
if ($student5 >= 90) { $grade5 = "إمتياز"; }
if ($student5 >= 80 && $student5 < 90) { $grade5 = "جيد جدا"; }
if ($student5 >= 70 && $student5 < 80) { $grade5 = "جيد"; }
if ($student5 >= 50 && $student5 < 70) { $grade5 = "مقبول"; }
if ($student5 < 50) { $grade5 = "رسوب"; }

// الطالب 6
if ($student6 >= 90) { $grade6 = "إمتياز"; }
if ($student6 >= 80 && $student6 < 90) { $grade6 = "جيد جدا"; }
if ($student6 >= 70 && $student6 < 80) { $grade6 = "جيد"; }
if ($student6 >= 50 && $student6 < 70) { $grade6 = "مقبول"; }
if ($student6 < 50) { $grade6 = "رسوب"; }

// الطالب 7
if ($student7 >= 90) { $grade7 = "إمتياز"; }
if ($student7 >= 80 && $student7 < 90) { $grade7 = "جيد جدا"; }
if ($student7 >= 70 && $student7 < 80) { $grade7 = "جيد"; }
if ($student7 >= 50 && $student7 < 70) { $grade7 = "مقبول"; }
if ($student7 < 50) { $grade7 = "رسوب"; }

// الطالب 8
if ($student8 >= 90) { $grade8 = "إمتياز"; }
if ($student8 >= 80 && $student8 < 90) { $grade8 = "جيد جدا"; }
if ($student8 >= 70 && $student8 < 80) { $grade8 = "جيد"; }
if ($student8 >= 50 && $student8 < 70) { $grade8 = "مقبول"; }
if ($student8 < 50) { $grade8 = "رسوب"; }

// الطالب 9
if ($student9 >= 90) { $grade9 = "إمتياز"; }
if ($student9 >= 80 && $student9 < 90) { $grade9 = "جيد جدا"; }
if ($student9 >= 70 && $student9 < 80) { $grade9 = "جيد"; }
if ($student9 >= 50 && $student9 < 70) { $grade9 = "مقبول"; }
if ($student9 < 50) { $grade9 = "رسوب"; }

// الطالب 10
if ($student10 >= 90) { $grade10 = "إمتياز"; }
if ($student10 >= 80 && $student10 < 90) { $grade10 = "جيد جدا"; }
if ($student10 >= 70 && $student10 < 80) { $grade10 = "جيد"; }
if ($student10 >= 50 && $student10 < 70) { $grade10 = "مقبول"; }
if ($student10 < 50) { $grade10 = "رسوب"; }

// عرض النتائج
echo "الطالب 1: $student1% - $grade1 <br>";
echo "الطالب 2: $student2% - $grade2 <br>";
echo "الطالب 3: $student3% - $grade3 <br>";
echo "الطالب 4: $student4% - $grade4 <br>";
echo "الطالب 5: $student5% - $grade5 <br>";
echo "الطالب 6: $student6% - $grade6 <br>";
echo "الطالب 7: $student7% - $grade7 <br>";
echo "الطالب 8: $student8% - $grade8 <br>";
echo "الطالب 9: $student9% - $grade9 <br>";
echo "الطالب 10: $student10% - $grade10 <br>";
?>

</body>
</html>
