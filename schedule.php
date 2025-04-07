<?php
// Get form data
$name = htmlspecialchars($_POST['name']); // Security: prevent XSS
$datetime = htmlspecialchars($_POST['datetime']);
$service = htmlspecialchars($_POST['service']);

// Write to file
$file = fopen("bookings.txt", "a");
fwrite($file, "$name | $datetime | $service\n");
fclose($file);

// Output with basic HTML and CSS
?>
<!DOCTYPE html>
<html>
<head>
  <title>Booking Confirmed - Car Service Central</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background: #222;
      color: #0f0;
      font-family: 'Arial', sans-serif;
      text-align: center;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    h1 {
      font-size: 8vw; /* Scales with viewport width */
      text-shadow: 0 0 10px #0f0;
      margin: 20px 0;
    }
    p {
      font-size: 1.5rem; /* Larger, readable text */
      margin: 10px 0;
    }
    .container {
      background: #333;
      padding: 5vw;
      border: 2px solid #0f0;
      width: 90%;
      max-width: 400px;
      margin: 0 auto;
      box-sizing: border-box;
    }
    @media (min-width: 600px) {
      h1 { font-size: 48px; }
      p { font-size: 1.8rem; }
      .container { padding: 20px; }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Booked!</h1>
    <p>See you in the garage, <?php echo $name; ?>!</p>
  </div>
</body>
</html>	
