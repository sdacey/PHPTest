<?php
define ("PI", 3.14159);    // Example of a constant
$radius = $_GET["radius"];
$area = ($radius * $radius) * PI;
$circumference = ($radius * PI * 2);

?>
<p>
    Area: <?php echo $area; ?>
</p>
<p>
    Circumference: <?php echo $circumference; ?>
</p>


