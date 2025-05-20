<?php

function procesarEmailFormulario() {
    $email = $_POST['email'] ?? '';

    if ($email) {
        echo "Email '" . htmlspecialchars($email) . "' recibido con exito";
    } else {
        echo "Por favor, envia un email en el parametro 'email' via POST"
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    procesarEmailFormulario();
}

?>

<form method="post">
    <input type="email" name="email" placeholder="tu.email@ejemplo.com" required>
    <button type="submit">Enviar Email (ej. sin DB)</button>
</form>