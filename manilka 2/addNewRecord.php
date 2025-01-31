<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add new record</title>
    <link rel="stylesheet" href="./css/addNewRecord.css" />
    <!-- <link rel="stylesheet" href="navbarcssbhagya.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <script src="navbar.js" defer></script>
</head>
<body>

    <?php include 'navbarbhagya.php'; ?>
    <!-- <div  class="sideBar">
        <div class="logo">
            <img src="./Images/Suwa-Connect Logo.png" alt="Suwa-Connect Logo">
            <h2>සුව CONNECT</h2>
    
            <button class="toggle-btn" id="toggleSidebar"> 
                <i class="material-icons-round">chevron_left</i>
            </button>
        </div>
        <ul class="nav-menu">
            <li class="nav-item active">
                <a href="home.html" class="nav-link">
                    <i class="material-icons-round">home</i> <span>Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="userManagement.html" class="nav-link">
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
    </div> -->


    <div class="main-content">
        <div class="grid-container">
            <div class="general-info">
               <!-- <div class="general-info-card"> -->
                  
                    <div class="info-line">
                        <p>date:</p>
                        <p>24/10/2024</p>
                    </div> 
                    
                    <div class="info-line">
                        <p>time:</p>
                        <p>10:30</p> 
                    </div> 
                  
                    <div class="info-line">
                        <p>consulter:</p>
                        <p>Dr. Kim</p>
                    </div> 

                
                
            </div>

            <div class="initial-description">
                <p>Initial description of the record</p>
                <input type="text">
            </div>

            <div class="description">
                <p>Further-Description</p>
                <input type="text">
            </div>

            <div class="prescription">
                <p>Prescription</p>
                <input type="text">
            </div>

            <div class="reports">
                <p>Reports</p>
                <input type="file">
            </div>

            <div class="checkups">
                <p>Blood pressure levels</p>
                <div class="checkups-row">
                <div>
                    <label for="">systolic level</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">diastolic level</label>
                    <input type="text">
                </div>
                </div>
            </div>

            <div class="checkups">
                <p>cholesterol levels</p>
                <div class="checkups-row">
                <div>
                    <label for="">LDL level</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">HDL level</label>
                    <input type="text">
                </div>
                </div>
            </div>

            <div class="checkups">
                <p>blood sugar levels</p>
                <div class="checkups-row">
                <div>
                    <label for="">fasting</label>
                    <input type="text">
                </div>
              
                </div>
            </div>

            <div class="checkups">
                <div class="checkups-row">
                    <div>
                        <label for="">weight</label>
                        <input type="text">
                    </div>
                    
                </div>
            </div>



            <div class="add-record">
                <button>Add Record</button>
            </div>    

        
    </div>
    </div>

    <script src="./js/navbar.js"></script>
</body>
</html>