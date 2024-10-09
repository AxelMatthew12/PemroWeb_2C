<?php


$input = filter_input(INPUT_POST, 'input', FILTER_SANITIZE_SPECIAL_CHARS);

if ($input !== null && $input !== false) {
    echo '<br>' . htmlspecialchars($input, ENT_QUOTES, 'UTF-8') . '</div>';
} else {
    echo 'Input tidak valid atau kosong.';
}

echo "<br>";
echo "===============================";
echo "<br>";


$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

if ($email !== null && $email !== false) {
    echo '<br>' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '</div>';
} else {
    echo 'Email tidak valid';
}





?>
