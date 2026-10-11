<?php
$students = array(
    array("Name" => "Alex", "NIM" => "220401", "Mobile" => "0812345678"),
    array("Name" => "Bianca", "NIM" => "220402", "Mobile" => "0812345687"),
    array("Name" => "Candice", "NIM" => "220403", "Mobile" => "0812345665"),
    array("Name" => "David", "NIM" => "220404", "Mobile" => "0812345611"),
    array("Name" => "Ethan", "NIM" => "220405", "Mobile" => "0812345622"),
    array("Name" => "Frank", "NIM" => "220406", "Mobile" => "0812345633"),
    array("Name" => "George", "NIM" => "220407", "Mobile" => "0812345644"),
    array("Name" => "Harry", "NIM" => "220408", "Mobile" => "0812345655")
);
?>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>NIM</th>
        <th>Mobile</th>
    </tr>
    <?php foreach($students as $row): ?>
    <tr>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['NIM']; ?></td>
        <td><?php echo $row['Mobile']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>