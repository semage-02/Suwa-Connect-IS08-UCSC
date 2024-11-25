<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up-cont.</title>
 
    <link rel="stylesheet" href="./css/signup.css" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    
</head>
<body>

    <div class="main-container">
        <div class="grid-container">
            <div class="header">
                <h2>Sign Up!</h2>
                <h3>Let's finalise your profile!</h3>
            </div>

        <div class="items">
            <label for="">Email Address</label>
            <input type="email" placeholder="Email Address" required>  
        </div>

        <div class="items">
            <label for="">Phone Number</label>
            <input type="tel" placeholder="Phone Number" required>  
        </div>

        <div class="items">
            <label for="">Set a Password</label>
            <div class="input-container">
            <input type="password" id="password" placeholder="Password" required>
            <i class="fas fa-eye toggle-icon" id="togglePassword"></i>
            </div>
        </div>

        <div class="items">
            <label for="">Confirm Password</label>
            <div class="input-container">
            <input type="password" id="confirmPassword" placeholder="Password" required>
            <i class="fas fa-eye toggle-icon" id="toggleConfirmPassword"></i>
            </div>
        </div>

        <div class="check-box">
            <input type="checkbox" placeholder="" required>
            <label id="">I agree to the terms and conditions.</label>
        </div>

        


        <div class="button">
            <button type="submit" class="btn">Create Account</button>
        </div>

        
            
        </div>

        <div class="logo-container">
            <img src="./images/Suwa-Connect Logo.png" alt="Logo">
        </div>

        <div class="image-container">
            <img src="../images/doctor-visit.png" alt="">
        </div>

    </div>

        

<script src="./js/signin.js"></script>
    
</body>
</html>