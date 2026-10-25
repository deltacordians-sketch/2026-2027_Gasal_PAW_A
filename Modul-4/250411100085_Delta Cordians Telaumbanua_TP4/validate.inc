
<?php
function validateName(&$errors, $field_list, $field_name)
{
    $value = trim($field_list[$field_name] ?? '');
    $pattern = "/^[a-zA-Z'-]+$/";

    if ($value === '') {
        $errors[$field_name] = 'required';
    } elseif (!preg_match($pattern, $value)) {
        $errors[$field_name] = 'invalid';
    }
}

function validateEmail(&$errors, $field_list, $field_name)
{
    $value = trim($field_list[$field_name] ?? '');

    if ($value === '') {
        $errors[$field_name] = 'required';
    } elseif (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
        $errors[$field_name] = 'invalid';
    }
}

function validateRequired(&$errors, $field_list, $field_name)
{
    if (trim($field_list[$field_name] ?? '') === '') {
        $errors[$field_name] = 'required';
    }
}
?>
