<?php
// Ini mirip seperti ternary operator, tapi khusus untuk memeriksa apakah data null atau tidak.

$data = [];
$isinya = $data["ada isi nya dan tidak bernilai null"]??"ada isi nya, dan isi nya tipe data null";

echo $isinya;