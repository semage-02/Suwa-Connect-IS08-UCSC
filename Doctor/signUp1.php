<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
 
    <link rel="stylesheet" href="./css/signup.css" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
</head>
<body>

    <div class="main-container">
        <div class="content">
        
            <div class="head">
                <h2>Welcome to Suwa-Connect</h2>
                <h3>Let's get you all set-up!</h3>
            </div>

        <form id="signup-form">
        <div class="form-container">
        <div class="items">
            <label for="">Initals</label>
            <input type="text" placeholder="Initials" required>   
        </div>
        
        <div class="items">
            <label for="">First name</label>
            <input type="text" placeholder="First Name" required>   
        </div>

        
        <div class="items">
            <label for="">Last name </label>
            <input type="text" placeholder="Last Name" required>  
        </div>

        <div class="items">
            <label for="">NIC Number</label>
            <input type="text" placeholder="NIC Number" required>  
        </div>

        <div class="items">
            <label for="">SLMC Registration Number</label>
            <input type="text" placeholder="SLMC Number" required>  
        </div>

        <div class="items">
            <label for="">Speciality</label>
            <input type="text" placeholder="Speciality" required>  
        </div>

        <div class="items">
            <label for="">Years of Experience</label>
            <input type="number" placeholder="Years of Experience" required>  
        </div>

        

        <div class="items">
            <label for="">Upload a copy of your medical license</label>
            <input id="upload-file" type="file" placeholder="" required>   
        </div>

        <div class="button">
            <button type= "submit" id="btn" class="btn">Continue</button>
        </div>

        </form>

        <div class="signup-link">
                    Already have an account? <a href="signin.html">Sign In</a>
                </div>
        
        <div class="logo-container">
            <img src="./images/Suwa-Connect Logo.png" alt="Logo">
        </div>
        </div>
    </div>

        


    
</body>
</html>