<?php

include 'dbc.php';

$users = $conn->query("SELECT * FROM query");
?>

<html>
    <head>
    <title>Manage Appoinment</title>
    <link rel="stylesheet" href="manageaccount.css?v=<?php echo time(); ?>">
   
    </head>
<body>

         <!-- Navbar -->
         <section class="menu">
            <div class="nav">
            <div class="logo"><h1>Fit<b>zone</b></h1></div>

            <ul>
                     <li><a class="active"href="Adminhome.php">Dashboard</a></li>
                    <li><a class="active"href="Manageaccount.php">Manage account</a></li>
                    <li><a class="active"href="Manageappoinment.php">Manage Appoinmets</a></li>
                    <li><a class="active"href="ManageQuery.php">Mange Queries</a></li>
                    <li><a class="active"href="Createstaffaccount.php">Create staff account</a></li>
            </ul>

            
            


    </section>

<div class="manage-users">
        <h1>Manage Query</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Query</th>
                <th>Action</th>
            </tr>
            <?php foreach ($users as $user): ?>
            <tr>

                <td><?php echo $user['Name']; ?></td>
                <td><?php echo $user['Email']; ?></td>
                <td><?php echo $user['Query']; ?></td>
                <td>
                    <a href="deletequery.php?id=<?php echo $user['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>