<?php
$tahun = date("Y");
$kabisat =($tahun%4==0) ? "kabisat" : "buka kabisat";
echo "tahun <b>$tahun</b> $kabisat";
?>