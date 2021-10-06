<?php
 include "../setup/konekcija.php";
 $upit = "SELECT * FROM designers";
 $rez = $conn->query($upit);
 $data = $rez->fetchAll();
 echo json_encode($data);
?>