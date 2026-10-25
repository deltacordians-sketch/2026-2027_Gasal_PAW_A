
<?php
$surname = $_POST['surname'] ?? '';
$email = $_POST['email'] ?? '';
$address = $_POST['address'] ?? '';
$state = $_POST['state'] ?? '';
$gender = $_POST['gender'] ?? '';
$vegetarian = isset($_POST['vegetarian']);
?>

<fieldset>
    <legend>Person Details</legend>

    <p>
        <label>Surname:</label><br>
        <input type="text" name="surname"
            value="<?= htmlspecialchars($surname) ?>">
    </p>

    <p>
        <label>Email address:</label><br>
        <input type="text" name="email"
            value="<?= htmlspecialchars($email) ?>">
    </p>

    <p>
        <label>Password:</label><br>
        <input type="password" name="password">
    </p>

    <p>
        <label>Street Address:</label><br>
        <textarea name="address"><?= htmlspecialchars($address) ?></textarea>
    </p>

    <p>
        <label>State:</label><br>
        <select name="state">
            <option value="">Choose your state</option>
            <?php
            $states = [
                'Australian Capital Territory',
                'Queensland',
                'Victoria',
                'New South Wales',
                'Tasmania',
                'South Australia',
                'Western Australia',
                'Northern Territory'
            ];

            foreach ($states as $item) {
                $selected = ($state === $item) ? 'selected' : '';
                echo '<option value="' . htmlspecialchars($item)
                    . '" ' . $selected . '>'
                    . htmlspecialchars($item) . '</option>';
            }
            ?>
        </select>
    </p>

    <input type="hidden" name="country" value="Australia">

    <p>
        Gender:<br>
        <input type="radio" name="gender" value="Male"
            <?= $gender === 'Male' ? 'checked' : '' ?>> Male

        <input type="radio" name="gender" value="Female"
            <?= $gender === 'Female' ? 'checked' : '' ?>> Female
    </p>

    <p>
        <input type="checkbox" name="vegetarian" value="Yes"
            <?= $vegetarian ? 'checked' : '' ?>>
        Vegetarian?
    </p>

    <input type="submit" name="submit" value="Submit">
    <input type="reset" value="Reset">
</fieldset>
