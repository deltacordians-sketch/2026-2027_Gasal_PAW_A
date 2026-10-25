
<?php
require 'validate.inc';

$errors = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    validateName($errors, $_POST, 'surname');
    validateEmail($errors, $_POST, 'email');
    validateRequired($errors, $_POST, 'address');
    validateRequired($errors, $_POST, 'state');
    validateRequired($errors, $_POST, 'gender');

    if (!isset($_POST['password']) ||
        trim($_POST['password']) === '') {
        $errors['password'] = 'required';
    }

    if ($errors) {
        echo '<h3>Invalid, correct the following errors:</h3>';

        foreach ($errors as $field => $error) {
            echo htmlspecialchars($field) . ': '
                . htmlspecialchars($error) . '<br>';
        }
    } else {
        echo '<h3>Form submitted successfully with no errors.</h3>';
    }
}
?>
