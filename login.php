<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public forum</title>
</head>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<body style="background-color: black;">
    <header>
        <div class="logo"><img src="logo.png"></div>
        <div class="social">
            <i id="f" href="#contact" class="fa-brands fa-instagram"></i>
            <i href="#contact" class="fa-brands fa-facebook"></i>
            <i href="#contact" class="fa-brands fa-linkedin"></i>
            <i href="#contact" class="fa-brands fa-github"></i>
            </div>
        <ul>
            <li><a href="./index.html">Home</a></li>
            <li><a href="./fixtures.html">Fixtures</a></li>
            <li><a  href="./ranking.html">Rankings</a></li>
            <li><a href="./players.html">Players</a></li>
            <li><a href="./tickets.php">Tickets</a></li>
            <li><a class="active" href="#contact">Discussions</a></li>
          </ul>
    </header>
    <style>
        body {
            background-color: #000; /* Black background for the entire page */
            color: #fff; /* White text color */
            
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .sign-in-form {
            background-color: #222; /* Slightly lighter black background for the form */
            border-radius: 10px; /* Add rounded corners to the form */
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #444; /* Dark border */
        }
        
        .form-title {
            text-align: center;
        }
        
        .label {
            color: #fff; /* White text color for labels */
            display: block;
            margin-top: 10px;
        }
        
        .input {
            background-color:#808080; /* Dark gray input fields */
            color: #fff; /* White text color for input fields */
            border: 1px solid #333; /* Slightly darker border for input fields */
            padding: 5px;
            width: 100%;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        
        .submit-button {
            background-color: #e10f47; /* Darker gray background for the submit button */
            color: #fff; /* White text color for the button */
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            width: 50%;
            margin-top: 10px;
            
            border-radius: 5px; /* Add rounded corners to the button */
        }

        
        a:hover {
            color: blue;
        }
        
        input[type="submit"]:hover {
            background-color: red; /* Slightly darker gray background on hover */
        }
    </style>



<body>
    <br>
    
<center>
<div class="sign-in-form">
<h1>Create an account to Chat</h1><br>
<form action="db.php" method = "post">
        <label name="name " >Name:</label><br><br>
        <input type="text" name="name"><br><br>
        <label name="username" >Username:</label><br><br>
        <input type="text" name="username"><br><br>
        <label name="password" >Password:</label><br><br>
        <input type="password" name="password"><br><br>
        <label name="email" >Email:</label><br><br>
        <input type="email" name="email"><br><br>
        
        
        <input type="submit" value="Create account" class="submit-button"><br><br>
        <h3><a href="./public.php">Already a user? Sign in</a></h3>
    </form>
    </div>
    
</center>
    <br><br><br><br>

    
</body>
    
    <footer class="left">

        <h2 style="color: white;">CONTACT US<br><br></h2>
        <h3>Tanish Fernandes</h3><br>
        Phone : <a class="contact" href="tel:+918291803182">8291803182</a><br>
        Mail : <a class="contact" href="mailto:tanish.f@somaiya.edu">tanish.f@somaiya.edu</a><br>
        Web : www.sports.com<br>
        <br><br>
        
        
    </footer>
    <footer class="right">
        <h2 style="color: white;">SOCIAL LINKS<br><br></h2>
        <div class="social">
            <i href="#" class="fa-brands fa-instagram"></i>
            <i href="#contact" class="fa-brands fa-facebook"></i>
            <i href="#contact" class="fa-brands fa-linkedin"></i>
            <i href="https://github.com/TanishF/Cricket-ranking-website-" class="fa-brands fa-github"></i>
        </div>
    </footer>
        
</body>
</html>
