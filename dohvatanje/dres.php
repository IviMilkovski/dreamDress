<?php
 include "../setup/konekcija.php";
 $upit = "SELECT d.*, s.name AS sNames, de.name AS designerName, p.alt AS alt, p.src AS src
 FROM dresses d INNER JOIN silhouette s ON d.id_Silhouette = s.id_Silhouette INNER JOIN designers de ON d.id_designer = de.id_designer INNER JOIN picture p ON d.id_picture = p.id_picture;";
 $rez = $conn->query($upit);
 $data = $rez->fetchAll();
 echo json_encode($data);
?>