<?php
$w = $_GET["width"];
$h = $_GET["height"];
$area = $w * $h;
$perimeter = ($w + $h) * 2;

?>
<p>
    Area: <?php echo $area; ?>
</p>
<p>
    Perimeter: <?php echo $perimeter; ?>
</p>

