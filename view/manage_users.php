<?php
// Include necessary files and controllers
include("../controllers/customer_controller.php");
include("sidebar.php"); // Assuming you have a sidebar for admin navigation

// Fetch all users
$users = show_all_users_ctr();

$roles = get_all_roles_ctr();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="../css/product_page.css"> <!-- Add your CSS file for styling -->
</head>
<body>
<div class="content">
    <h1>Manage Users</h1>
    <table id="userTable">
        <thead>
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($users)) {
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>" . $user['customer_id'] . "</td>";
                echo "<td>" . htmlspecialchars($user['customer_name']) . "</td>";
                echo "<td>" . htmlspecialchars($user['role']) . "</td>";
                echo "<td>
                        <form method='post' action='../actions/manage_user_action.php' style='display:inline-block;'>
                            <input type='hidden' name='customer_id' value='" . $user['customer_id'] . "'>
                            <select name='new_role_id'>";
                foreach ($roles as $role) {
                    echo "<option value='" . $role['role_id'] . "'" .
                        ($role['role_name'] === $user['role'] ? " selected" : "") .
                        ">" . htmlspecialchars($role['role']) . "</option>";
                }
                echo "    </select>
                            <button type='submit' name='action' value='edit'>Update Role</button>
                        </form>
                        <form method='post' action='../actions/manage_user_action.php' style='display:inline-block;'>
                            <input type='hidden' name='customer_id' value='" . $user['customer_id'] . "'>
                            <button type='submit' name='action' value='delete' onclick='return confirm(\"Are you sure you want to remove this user?\")'>Remove</button>
                        </form>
                    </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No users available</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
