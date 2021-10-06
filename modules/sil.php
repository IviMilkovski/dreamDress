<?php
if(isset($_POST['silho'])){
    $silho = $_POST['silho'];
    require "../setup/konekcija.php";

    $priprema = $conn->prepare("SELECT d.*, s.name AS sNames, de.name AS designerName, p.alt AS alt, p.src AS src FROM dresses d INNER JOIN silhouette s ON d.id_Silhouette = s.id_Silhouette INNER JOIN designers de ON d.id_designer = de.id_designer INNER JOIN picture p ON d.id_picture = p.id_picture WHERE s.name = :silho");
    $priprema->bindParam(":silho", $silho);
    $priprema->execute();

    $dresses = $priprema->fetchAll();

    $response = [
        "dresses" => $dresses
    ];

    $json = json_encode($response);
    echo $json;
    header("Content-Type: application/json");
}
?>