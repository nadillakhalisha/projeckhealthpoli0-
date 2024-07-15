<?php
include "connect.php";

$name = isset($_POST['nama']) ? htmlentities($_POST['nama']) : "";
$username = isset($_POST['username']) ? htmlentities($_POST['username']) : "";
$level = isset($_POST['level']) ? htmlentities($_POST['level']) : "";
$password = isset($_POST['password']) ? md5(htmlentities($_POST['password'])) : "";

if (!empty($_POST['input_home_validate'])) {
    // Query untuk memasukkan data ke dalam tabel home
    $query = "INSERT INTO home (nama, username, level, password)
              VALUES ('$name', '$username', '$level', '$password')";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Jika query berhasil dieksekusi
        $message = '<script>alert("Data berhasil dimasukkan");
                    window.location="../home"</script>';
    } else {
        // Jika query gagal dieksekusi
        $message = '<script>alert("Data gagal dimasukkan")</script>';
    }
    echo $message;
}
?>