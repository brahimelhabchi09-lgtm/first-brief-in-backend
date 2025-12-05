<?php

$errors = [];
$success = "";
$old = [
    'name' => '',
    'email' => '',
    'message' => ''
];


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $postedToken = $_POST["csrf_token"] ?? '';
    

        $name = trim($_POST["name"] ?? '');
        $email = trim($_POST["email"] ?? '');
        $message = trim($_POST["message"] ?? '');

        $old['name'] = htmlspecialchars($name, ENT_QUOTES);
        $old['email'] = htmlspecialchars($email, ENT_QUOTES);
        $old['message'] = htmlspecialchars($message, ENT_QUOTES);

        if ($name === "") {
            $errors['name'] = "Le nom est obligatoire.";
        }

        if ($email === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Email invalide.";
        }

        if ($message === "") {
            $errors['message'] = "Le message est obligatoire.";
        }

        if (empty($errors)) {
            $success = "Votre message a bien été envoyé (simulation).";

            $old = ['name' => '', 'email' => '', 'message' => ''];

        }
}
