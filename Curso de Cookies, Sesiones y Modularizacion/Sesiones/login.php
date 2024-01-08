<?php
session_start();

$users = [
    array(
        'id' => 1,
        'userName' => 'David',
        'email' => 'David@email.com',
        'password' => 1234
    ),
    array(
        'id' => 2,
        'userName' => 'Juan',
        'email' => 'Juan@email.com',
        'password' => 1234
    ),
];


$userGet = $_GET['userName'] ?? '';
$passwordGet = $_GET['password'] ?? '';

if ($userGet && $passwordGet) {
    foreach ($users as $user) {
        if ($user['userName'] == $userGet && $user['password'] == $passwordGet) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['userName'] = $user['userName'];
            $_SESSION['email'] = $user['email'];
            header('Location: index.php');
        }
    }
}
