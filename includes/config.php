<?php
$myHost	= "localhost";
$myUser	= "root";
$myPass	= "";
$myDbs	= "apotek";
$koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}
?>