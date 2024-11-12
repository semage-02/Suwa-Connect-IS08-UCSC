<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/userManagement.css">
    <link rel="stylesheet" href="./css/dashboard.css">


    <title>Suwa-Connect</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo">
            <img src="./Images/Suwa-Connect Logo.png" alt="Suwa-Connect Logo">
            <h2>සුව CONNECT</h2>

            <button class="toggle-btn" id="toggleSidebar"> 
                <i class="material-icons-round">chevron_left</i>
            </button>
        </div>
        <ul class="nav-menu">
            <li class="nav-item ">
                <a href="home.html" class="nav-link">
                    <i class="material-icons-round">home</i> <span>Home</span>
                </a>
            </li>
            <li class="nav-item active">
                <a href="userManagement.php" class="nav-link">
                    <i class="material-icons-round">group</i> <span>User Management</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="appointments.html" class="nav-link">
                    <i class="material-icons-round">medical_services</i> <span>Appointments</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="revenue.html" class="nav-link">
                    <i class="material-icons-round">paid</i> <span>Revenue</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="reports.html" class="nav-link">
                    <i class="material-icons-round">trending_up</i> <span>Reports</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="notifications.html" class="nav-link">
                    <i class="material-icons-round">notifications</i> <span>Notifications</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="settings.html" class="nav-link">
                    <i class="material-icons-round">settings</i> <span>Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="support.html" class="nav-link">
                    <i class="material-icons-round">contact_support</i> <span>Support</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <button class="btn-user">Login as User</button>
        </div>
    </div>

    <div class="main-content">
        <!-- Header Section -->
        <div>
            <header class="header-section">
                <h1>User Management</h1>
                <p>Manage all registered users across the platform including patients, doctors, laboratories, and pharmacies.</p>
            </header>
        </div>
        
        <br>
        
          <!-- Search and Filters -->
          <div class="search-filter-section">
            <input type="text" class="search-bar" placeholder="Search by name, email, or user type...">
            
            <div class="filter-options">
                <select class="filter-dropdown">
                    <option value="all">All Users</option>
                    <option value="patient">Patient</option>
                    <option value="doctor">Doctor</option>
                    <option value="lab">Laboratory</option>
                    <option value="pharmacy">Pharmacy</option>
                    <option value="admin">Admin</option>
                </select>

            </div>
            </div>
            <div>
                <button id = "addNewUserBtn" class="add-user-btn">Add New User</button>
                
                <!-- Modal Form for Adding New User -->                
                <div id="addUserModal" class="modal">
                    <div class="modal-content">
                        
                        <div class="form-container">
                            <span class="close-btn"> <i class="material-icons-round">cancel</i></span>
                            <h2>Add User</h2>
                            
                            <form action="userManagement.php" method="POST">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" placeholder="Name" required>

                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="Email"required><br>

                                <label for="user_type">User Type</label>
                                    <select id="user_type" name="user_type" placeholder="Select User Type" required>
                                        <option value="Patient">Patient</option>
                                        <option value="Doctor">Doctor</option>
                                        <option value="Laboratory">Laboratory</option>
                                        <option value="Pharmacy">Pharmacy</option>
                                        <option value="Admin">Admin</option>
                                    </select><br>

                                <button type="submit" class="add-user-btn" name="create">Add User</button>

                                <div id="notification" style="display:none; background-color: white; color: #333; padding: 10px; text-align: center;">
                                    User has been successfully added!
                                </div>

                            </form>
                        </div>                        
                        </div>
                
                </div>
                
                    <button class="export-options">Export as Excel</button>
                    <button class="export-options">Export as CSV</button>
                    <button class="export-options">Export as PDF</button>
                
            </div>
            

        <?php
        // Total Users Query
        $totalUsersQuery = "SELECT COUNT(*) AS total_users FROM users";
        $stmt = $conn->prepare($totalUsersQuery);
        $stmt->execute();
        $totalUsers = $stmt->get_result()->fetch_assoc()['total_users'];

        // Active Users Query
        $activeUsersQuery = "SELECT COUNT(*) AS active_users FROM users WHERE status = 'Active'";
        $stmt = $conn->prepare($activeUsersQuery);
        $stmt->execute();
        $activeUsers = $stmt->get_result()->fetch_assoc()['active_users'];

        // Deactivated Users Query
        $deactivatedUsersQuery = "SELECT COUNT(*) AS deactivated_users FROM users WHERE status = 'Deactivated'";
        $stmt = $conn->prepare($deactivatedUsersQuery);
        $stmt->execute();
        $deactivatedUsers = $stmt->get_result()->fetch_assoc()['deactivated_users'];

        // Banned Users Query
        $bannedUsersQuery = "SELECT COUNT(*) AS banned_users FROM users WHERE status = 'Banned'";
        $stmt = $conn->prepare($bannedUsersQuery);
        $stmt->execute();
        $bannedUsers = $stmt->get_result()->fetch_assoc()['banned_users'];

        // New Users (Last 7 Days)
        $newUsersQuery = "SELECT COUNT(*) AS new_users FROM users WHERE signup_date >= DATE_SUB(NOW(), INTERVAL 7 DAY)";
        $stmt = $conn->prepare($newUsersQuery);
        $stmt->execute();
        $newUsers = $stmt->get_result()->fetch_assoc()['new_users'];
        ?>


        <!-- User Summary Cards -->
        <section class="summary-cards">
            <div class="card">
                <h3>Total Users</h3>
                <p><?php echo $totalUsers; ?> </p>
            </div>
            <div class="card">
                <h3>Active Users</h3>
                <p><?php echo $activeUsers; ?> </p>
            </div>
            <div class="card">
                <h3>New Users (Last 7 Days) </h3>
                <p><?php echo $newUsers; ?> </p>
            </div>
            <div class="card">
                <h3>Banned Users</h3>
                <p><?php echo $bannedUsers; ?> </p>
            </div>
            <div class="card">
                <h3>Deactivated Users</h3>
                <p><?php echo $deactivatedUsers; ?> </p>
            </div>

            <div class="card">
                <h3>User Summary</h3>
                <canvas id="userSummaryChart" width="200" height="200"></canvas>

                <!-- Legend container -->
                <div id="chartLegend"></div>

                <script>
                    // Passing PHP variables to JavaScript
                    var activeUsers = <?php echo $activeUsers; ?>;
                    var bannedUsers = <?php echo $bannedUsers; ?>;
                    var deactivatedUsers = <?php echo $deactivatedUsers; ?>;
                </script>
            </div>
        </section>

        <!-- User Table/List View -->
        <table class="user-table">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Email Address</th>
                    <th>User Type</th>
                    <th>Status</th>
                    <th>Sign-Up Date</th>
                    <th>Last Login</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch Users from the Database
                $query = "SELECT * FROM users";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                $stmt->execute();
                $result = $stmt->get_result();
                while ($user = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$user['name']}</td>
                        <td>{$user['email']}</td>
                        <td>{$user['user_type']}</td>
                        <td>{$user['status']}</td>                        
                        <td>{$user['signup_date']}</td>
                        <td>{$user['last_login']}</td>
                        <td>
                            <form action='userManagement.php' method='POST'>
                                                           
                        <button type ='submit' class='view-btn'>View Profile</button>
                        <button type ='submit' class='edit-btn'>Edit</button>
                        <button type ='submit' class='deactivate-btn'>Deactivate</button>
                        <button type ='submit' class='ban-btn'>Ban</button>
                       
                               
                            </form>
                        </td>
                    </tr>";
                }
                ?>
            
            </tbody>
        </table>

   
        
    <?php
    
    // Create Operation
        if (isset($_POST['create'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $user_type = $_POST['user_type'];

            // Prepare the insert query
            $insertQuery = "INSERT INTO users (name, email, user_type, status, signup_date) VALUES (?, ?, ?, 'Active', NOW())";
            $stmt = $conn->prepare($insertQuery);

            // Bind and execute the statement
            if ($stmt->execute([$name, $email, $user_type])) {
                // Redirect after successful creation
                header("Location: userManagement.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        }


    // Update Operation (Edit)
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        // Fetch user details from DB for editing
        $selectQuery = "SELECT * FROM users WHERE id = ?";
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
        $user = $stmt->fetch();

        if ($user) {
            echo "<form action='userManagement.php' method='POST'>
                <input type='hidden' name='id' value='{$user['id']}'>
                <input type='text' name='name' value='{$user['name']}' required>
                <input type='email' name='email' value='{$user['email']}' required>
                <select name='user_type' required>
                    <option value='patient' " . ($user['user_type'] == 'patient' ? 'selected' : '') . ">Patient</option>
                    <option value='doctor' " . ($user['user_type'] == 'doctor' ? 'selected' : '') . ">Doctor</option>
                    <option value='lab' " . ($user['user_type'] == 'lab' ? 'selected' : '') . ">Lab</option>
                    <option value='pharmacy' " . ($user['user_type'] == 'pharmacy' ? 'selected' : '') . ">Pharmacy</option>
                    <option value='admin' " . ($user['user_type'] == 'admin' ? 'selected' : '') . ">Admin</option>
                </select>
                <button type='submit' name='update'>Update</button>
            </form>";
        } else {
            echo "<p>User not found.</p>";
        }
    }

    // Update User Details in DB
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $user_type = $_POST['user_type'];

        $updateQuery = "UPDATE users SET name = ?, email = ?, user_type = ? WHERE id = ?";
        $stmt = $conn->prepare($updateQuery);
        $stmt->execute([$name, $email, $user_type, $id]);

        header("Location: userManagement.php");
    }

    // Delete Operation
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $deleteQuery = "DELETE FROM users WHERE id = ?";
        $stmt = $conn->prepare($deleteQuery);
        $stmt->execute([$id]);

        header("Location: userManagement.php");
    }
    ?>

        <!-- Bulk Actions Section -->
        <div class="bulk-actions">
            <button>Select All</button>
            <button>Deactivate Selected</button>
            <button>Ban Selected</button>
            <button>Send Notification</button>
        </div>

        <!-- Notifications Section -->
        <section class="notifications-section">
            <h3>Notifications</h3>
            <div class="notification-item">
                <p>Dr. Maya's account was reactivated on Sep 10, 2024.</p>
            </div>
            <div class="report-item">
                <p>5 reports submitted in the last 7 days.</p>
            </div>
        </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Suwa Connect. All rights reserved.</p>
        <a href="#"></a>
    </footer> 

    </div>
    

    <script src="./js/navbar.js"></script>
    <script src="./js/userManagement.js"></script>

    </body>
</html> 
  