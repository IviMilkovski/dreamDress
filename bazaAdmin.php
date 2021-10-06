<?php
$title = "Admin panel";
session_start();
include 'setup/konekcija.php';
include 'views/header.php';
include 'views/nav.php';

$dresses = $conn->query("SELECT d.*, s.name AS sNames, de.name AS designerName, p.alt AS alt, p.src AS src
FROM dresses d INNER JOIN silhouette s ON d.id_Silhouette = s.id_Silhouette INNER JOIN designers de ON d.id_designer = de.id_designer INNER JOIN picture p ON d.id_picture = p.id_picture;")->fetchAll();

$users = $conn->query("SELECT u.*, r.role_name FROM user u INNER JOIN role r ON u.role_id_u = r.role_id;")->fetchAll();

$messages = $conn->query("SELECT * FROM messages;")->fetchAll();
?>
<div class="container">
<div class="baza col-12 text-center">
<h1>Dresses</h1>
<table class="table">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Name</th>
<th scope="col">Price</th>
<th scope="col">Description</th>
<th scope="col">In stock</th>
<th scope="col">Silhouette</th>
<th scope="col">Designer</th>
<th scope="col">UPDATE</th>
<th scope="col">DELETE</th>
</tr>
</thead>
<tbody>
    <?php foreach($dresses as $dress):?>
        <tr>
<td><?= $dress -> id_dress ?></td>
<td><?= $dress->name ?></td>
<td><?= $dress->price ?></td>
<td><?= $dress->description ?></td>
<td><?= $dress->in_stock ?></td>
<td><?= $dress->sNames ?></td>
<td><?= $dress->designerName?></td>
<td class="text-center"><button type="button" class="btn btn-secondary" id="<?= $dress->id_dress ?>">
   Update</button></td>
<td class="text-center"><button type="button" class="btn btn-secondary" id="<?= $dress->id_dress ?>">
   Delete</button></td>
</tbody>
</tr>
<?php endforeach; ?>
</table>
</div>
</div>
</br>
</br>
</br>
</br>

<div class="container">
<div class="baza col-12 text-center">
<h1>Users</h1>
<table class="table">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Userame</th>
<th scope="col">Email</th>
<th scope="col">Role</th>
<th scope="col">UPDATE</th>
<th scope="col">DELETE</th>
</tr>
</thead>
<tbody>
    <?php foreach($users as $user):?>
        <tr>
<td><?= $user -> user_Id ?></td>
<td><?= $user -> username ?></td>
<td><?= $user -> email ?></td>
<td><?= $user -> role_name ?></td>
<td class="text-center"><button type="button" class="btn btn-secondary" id="<?= $dress->id_dress ?>">
   Update</button></td>
<td class="text-center"><button type="button" class="btn btn-secondary" id="<?= $dress->id_dress ?>">
   Delete</button></td>
</tbody>
</tr>
<?php endforeach; ?>
</table>
</div>
</div>
</br>
</br></br>
</br>

<div class="container">
<div class="baza col-12 text-center">
<h1>Messages</h1>
<table class="table">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Email</th>
<th scope="col">Message</th>
<th scope="col">UPDATE</th>
<th scope="col">DELETE</th>
</tr>
</thead>
<tbody>
    <?php foreach($messages as $msg):?>
        <tr>
<td><?= $msg -> id_mes ?></td>
<td><?= $msg -> email ?></td>
<td><?= $msg -> message ?></td>
<td class="text-center"><button type="button" class="btn btn-secondary" id="<?= $msg->id_mes ?>">
   Update</button></td>
<td class="text-center"><button type="button" class="btn btn-secondary" id="<?= $msg->id_mes ?>">
   Delete</button></td>
</tbody>
</tr>
<?php endforeach; ?>
</table>
</div>
</div>










<?php
include "views/footer.php";
?>