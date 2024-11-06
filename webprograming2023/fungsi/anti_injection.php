<?php

function antiinjection($koneksi, $data)
{
    $filter_Sql = mysqli_real_escape_string($koneksi, stripcslashes(strip_tags(htmlspecialchars($data,
    ENT_QUOTES))));
    return $filter_Sql;
}

?>