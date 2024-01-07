<?php
include("koneksi.php");
$tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
$toilet_id = mysqli_real_escape_string($conn, $_POST['toilet_id']);
$kloset = mysqli_real_escape_string($conn, $_POST['kloset']);
$wastafel = mysqli_real_escape_string($conn, $_POST['wastafel']);
$lantai = mysqli_real_escape_string($conn, $_POST['lantai']);
$dinding = mysqli_real_escape_string($conn, $_POST['dinding']);
$kaca = mysqli_real_escape_string($conn, $_POST['kaca']);
$bau = mysqli_real_escape_string($conn, $_POST['bau']);
$sabun = mysqli_real_escape_string($conn, $_POST['sabun']);
$users_id = mysqli_real_escape_string($conn, $_POST['users_id']);

$sql = $conn->prepare("INSERT INTO checklist (tanggal, toilet_id, kloset, wastafel, lantai, dinding, kaca, bau, sabun, users_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$sql->bind_param("ssssssssss", $tanggal, $toilet_id, $kloset, $wastafel, $lantai, $dinding, $kaca, $bau, $sabun, $users_id);
$sql->execute();

$result = mysqli_query($conn, $sql);

if ($result) {
    header('location: index.php');
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
