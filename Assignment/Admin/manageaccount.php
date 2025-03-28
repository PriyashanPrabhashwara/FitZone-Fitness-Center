<?php

include 'dbc.php';


$users = $conn->query("SELECT * FROM registration");
?>

<html>
    <head>
    <title>Manage Users</title>
    <link rel="stylesheet" href="manageaccount.css?v=<?php echo time(); ?>">
    
    </head>
<body>

         <!-- Navbar -->
         <section class="menu">
            <div class="nav">
          

            <ul>
                     <li><a class="active"href="Adminhome.php">Dashboard</a></li>
                    <li><a class="active"href="Manageaccount.php">Manage account</a></li>
                    <li><a class="active"href="Manageappoinment.php">Manage Appoinmets</a></li>
                    <li><a class="active"href="ManageQuery.php">Mange Queries</a></li>
                    <li><a class="active"href="Createstaffaccount.php">Create staff account</a></li>
            </ul>

            
          


    </section>

<div class="manage-users">
        <h1>Manage Users</h1>
        <table>
            <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Number  </th>
                <th>Password</th>
                <th>Gender</th>
                <th>Plan</th>
                <th>Action</th>

            </tr>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['FirstName']; ?></td>
                <td><?php echo $user['LastName']; ?></td>
                <td><?php echo $user['Email']; ?></td>
                <td><?php echo $user['Number']; ?></td>
                <td><?php echo $user['Password']; ?></td>
                <td><?php echo $user['Gender']; ?></td>
                <td><?php echo $user['Plan']; ?></td>
                <td>
                    <a href="edituser.php?id=<?php echo $user['id']; ?>">Edit</a> |
                    <a href="deleteuser.php?id=<?php echo $user['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>