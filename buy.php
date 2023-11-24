<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
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
            <li><a  href="./rankings.html">Rankings</a></li>
            <li><a href="./players.html">Players</a></li>
            <li><a class="active" href="#contact">Tickets</a></li>
            <li><a href="./login.php">Discussions</a></li>
          </ul>
    </header>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ticket_type = $_POST["ticket_type"];
    $quantity = $_POST["quantity"];
    $name = $_POST["name"];
    // $email = $_POST["email"];

    // Ticket prices
    $ticket_prices = [
        "knockouts" => 1000,    
        "semi-finals" => 1500,  
        "finals" => 2000,      
    ];

    // Calculate total cost
    if (isset($ticket_prices[$ticket_type])) {
        $ticket_price = $ticket_prices[$ticket_type];
        $total_cost = $ticket_price * $quantity;
    } else {
        $total_cost = 0;
    }
}
?>

<style>
    body {
            background-color: #000; /* Black background for the entire page */
            color: #fff; /* White text color */
            
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    h1{
        color: red;
    }
    h2{
        color: green;
    }
    p{
        font-size: larger;
    }
    .bill {
            background-color: #111; /* Dark red background for the box */
            border: 1px solid #ff0000; /* Red border */
            border-radius: 10px; /* Rounded corners for the box */
            padding: 20px;
        }
</style>
<body>
    <center>
    <br>
    <br>
    <br>

    <?php if ($total_cost > 0) : ?>
        <h2>Thank you, <?php echo $name; ?>! Your purchase is confirmed.</h2><br><br>
        <div class="bill">
        <h1>Invoice</h1><br>
        <p>Ticket type:   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $ticket_type; ?> </p>
        <p>Quantity: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $quantity; ?></p>
        <p>Total Amount:  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Rs <?php echo  $total_cost; ?></p><br><br>
    </div>
        <!-- <p>An email confirmation has been sent to <?php echo $email; ?></p>  -->
        
        
    <?php else : ?>
        <h1>Please select atleast 1 ticket to proceed. Please go back and try again.</h1>
    <?php endif; ?>

    
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
