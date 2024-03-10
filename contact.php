<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NHS Contacts Page</title>
    <link rel="stylesheet" href="contact.css">    
</head>
<body>
    <div class="header">
        <a href = "media.php">
            <img src="nhslogo.jpeg" alt="NHS Logo" class="nhs-logo" >
        </a>
        <a href="#">Chat bot</a>
        <a href="whyhelpful.php">Why is this helpful?</a>
        <a href="contact.php">Contact us</a>
        <a href="myacc.php">Myaccount</a>

    </div>

    <div class="container content">
        <h2>How you can contact us: </h2>
    </div>
        <div class = "informations">
            <p>Emergency Services Call:  <span id="text999" onclick="copyText('text999')">999</span>
                <br>Non-Emergency Services Call: <span id="text111" onclick="copyText('text111')">111</span>
                <br>Email: <span id="email" onclick="copyText('email')">England.Contactus@Nhs.Net</span>
                <br>COVID-19 Vaccinations Or Testing: <span id="text119" onclick="copyText('text119')">119</span>
                <br>
                <br>Mental Well-Being
                <br>Samaritans: <span id="text116" onclick="copyText('text116')">116 123</span>
                <br>Child Line(Under 19): <span id="text0800" onclick="copyText('text0800')">0800 1111</span>
            </p>
            
        </div>
        <script>
            function copyText(elementId) {
                var text = document.getElementById(elementId).innerText;
                var tempInput = document.createElement("input");
                tempInput.value = text;
                document.body.appendChild(tempInput);
                tempInput.select();
                tempInput.setSelectionRange(0, 99999); 
                document.execCommand("copy");
                document.body.removeChild(tempInput);
                alert("copyed:" + text);
            }
        </script>


    <footer>
        <div class="container">
            <!-- Footer content -->
            <p>&copy; 2024 NHS. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>