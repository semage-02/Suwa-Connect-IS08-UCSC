<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Patient</title>
    <link rel="stylesheet" href="./css/searchPatient.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
 
</head>
<body>

    <?php include 'navbarbhagya.php'; ?>



        <div class="main-content">
            <div class="searchbarAndProfile">
                <div class="searchbar">
                    <input type="search" placeholder="Search patient..." aria-label="Search" />
                    <button type="submit"><img src="./images/magnifying-glass.png" alt="icon"></button>
                </div>
                <div class="profile">
                    <img src="./images/profile.png" alt="profile icon">
                    <span>Dr. Manilka Anupama</span>
                </div>
            </div>
            <div class="patientList">
                <div class="patient">
                    <div class="patient-image">
                        <img src="./images/profile.png" alt="patient icon">
                    </div>
                    <div id="patient-details">
                        <div class="patient-id">
                            <span id="patientId">#D1453</span>
                        </div>
                        <div class="patient-name">
                            <span id="name">manilka anupama</span>
                        </div>
                        <div class="patient-age">
                            <span id="age">45</span><span> years</span>
                        </div>
                        <div class="request-access-btn">
                            <button>Request access</button>
                        </div>
                        <div class="visit-profile-btn">
                            <button >visit profile</button>
                        </div>
                            
                        </div>
                        
                    </div>
                </div>
            

        </div>
  
                
         <script src="./js/navbar.js"></script>       
</body>
</html>