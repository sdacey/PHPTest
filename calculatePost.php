<?php
$w = $_POST["width"];
$h = $_POST["height"];
$area = $w * $h;
$perimeter = ($w + $h) * 2;

?>
<p>
    Area: <?php echo $area; ?>
</p>
<p>
    Perimeter: <?php echo $perimeter; ?>
</p>

