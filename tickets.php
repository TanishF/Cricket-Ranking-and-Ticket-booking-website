<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
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
            <li><a class="active" href="#contact">Tickets</a></li>
            <li><a href="./login.php">Discussions</a></li>
          </ul>
    </header>
    <style>
        body {
            background-color: #000; /* Black background for the entire page */
            color: #fff; /* White text color */
            
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        
        .ticket-form {
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
            background-color: #444; /* Dark gray input fields */
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
            width: 100%;
            margin-top: 10px;
            
            border-radius: 5px; /* Add rounded corners to the button */
        }
        
        input[type="submit"]:hover {
            background-color: red; /* Slightly darker gray background on hover */
        }

        .pricelist{
            background-color: #111; /* Dark red background for the box */
            border: 1px solid #ff0000; /* Red border */
            border-radius: 10px; /* Rounded corners for the box */
            

        }
    </style>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $ticket_type = $_POST['type'];
    $quantity = $_POST['quantity'];

    
   // $errors = array();
   // $namePattern = "/^[A-Za-z ]+$/";
        
        $conn = mysqli_connect('localhost','root','','test');

        if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection Failed : ". $conn->connect_error);
        } 
        
        else {

        $stmt = $conn->prepare("insert into tickets(ticket_type, quantity, name) values(?, ?, ?)");
		$stmt->bind_param("sis", $ticket_type, $quantity, $name);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
    }
}
?>


    <body>
        <br><br><br>
        <center>
        <h2 style="color: white;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">ICC WORLD CUP 2023 Tickets</h2><br>
        
        <div class="pricelist"> 
        <h3 style="color: white;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Ticket prices</h3>
    
        <ul>
            <li>Knockouts--Rs 1000/person</li><br><br>
            <li>Semi-finals--Rs 1500/person</li><br><br>
            <li>Finals--Rs 2000/person</li><br><br>
        </ul>
    </div>
        <form action="buy.php" method="post">
            
                <div class="ticket-form">
                    
                    <form action="buy.php" method="post">
                        <label for="ticket_type" class="label">Select Ticket Type:</label><br>
                        <select name="ticket_type" class="input" name="type" required>
                            <option value="knockouts" name="k">Knockouts</option>
                            <option value="semi-finals" name="sf">Semi-Finals</option>
                            <option value="finals" name="f">Finals</option>
                        </select>
                        
                        <br> <label for="quantity" class="label" >Quantity:</label><br>
                        <input type="number" name="quantity" class="input" min="1" required>
                        
                        <label for="name" class="label">Your Name:</label><br>
                        <input type="text" name="name" class="input" required><br>
                        
                        <!-- <label for="email" class="label">Your Email:</label><br>
                        <input type="email" name="email" class="input" required>--><br><br> 
                        
                        <input type="submit" value="Buy Tickets" class="submit-button">
                    </form>
                </div>
                </center>
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