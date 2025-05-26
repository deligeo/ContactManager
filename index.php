<?php
    session_start();
    require("database.php");
    $queryContacts = 'SELECT * FROM contacts';
    $statement1 = $db->prepare($queryContacts);
    $statement1->execute();
    $contacts = $statement1->fetchAll();

    $statement1->closeCursor();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Manager - Home</title>
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body>
    <?php include("header.php"); ?>
    <main>
        <h2>Contact List</h2>
        <table>
            <tr>
                <th>First name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Status</th>
                <th>Birth Date</th>
            </tr>

            <?php foreach ($contacts as $contact):?>
                <tr>
                    <td><?php echo $contact['firstName'];?></td>
                    <td><?php echo $contact['lastName'];?></td>
                    <td><?php echo $contact['emailAddress'];?></td>
                    <td><?php echo $contact['phoneNumber'];?></td>
                    <td><?php echo $contact['status'];?></td>
                    <td><?php echo $contact['dob'];?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        
        <p><a href="add_contact_form.php">Add Contact</a></p>

    </main>
    <?php include ("footer.php"); ?>
</body>
</html>