<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cookies"><p>We use cookies to make service simpler.<a href="#">Find out more about cookies</a></p></div>
    <div class="bgup"><p class="up"><img src="#" alt=""><br><b>Petitions</b><br>Under Sidrah's rule</p></div>

    <div class="Overlay">
        <div class="sign-in" id="sign-in">
            <form id="sign" action="testform.php" method="get">
                <h1><b>Sign Petition</b></h1><br>
                <p class="Withdraw">Withdraw support for Israel and support Palestine<br>in Israel-Palestine conflict</p>
                <hr style="color: blueviolet;"><br>
                <p><label for="name">Name</label>
                <input type="text" class="sign-inb" name="name" id="name"></p>
                <p><label for="email">Email</label>
                    <input type="email" class="sign-inb" name="email" id="email" placeholder="abcxyz@gmail.com">
                </p><br>
                <label for="loc">Location</label>
                <select id="loc" name="loc">
                    <option value="Afganistan">Afganistan</option>
                    <option value="India">India</option>
                    <option value="United States">Unites States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Japan">Japan</option>
                    <option value="South Korea">South Korea</option>
                    <option value="China">China</option>
                    <option value="Pakistan">Pakistan</option>
        <option value="france">France</option>
        <option value="Italy">Italy</option>

                    <!-- other options -->
                </select><br><br>
                <p id="otpSection" style="display:none;">
                    <label for="otp">OTP:</label>
                    <input type="text" class="sign-inb" name="otp" id="otp" placeholder="Enter your OTP">
                </p>
                <hr><br>
                <div class="below">
                    <p>or<br></p>
                    <p>By clicking continue, you agree to Qadr's <a href="#">User Agreement</a>, <a href="#">Privacy Policy</a>, and <a href="#">Cookie Policy</a>.</p>
                    <br><button type="submit" class="or">Continue</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById("sign").addEventListener("submit", function(event) {
            event.preventDefault();  // Prevent form submission to handle with JavaScript
            const email = document.getElementById("email").value;
            const name = document.getElementById("name").value;
            if (!name.trim()) {
                alert("Please enter your name");
                return;
            }
            if (!email.trim()) {
                alert("Please enter your email address");
                return;
            }
            if (validateEmail(email)) {
                if (!document.getElementById("otp").value) {  // Check if OTP is already entered
                    // Display OTP input field if not already displayed
                    document.getElementById("otpSection").style.display = "block";
                    alert("A simulated OTP has been sent to your email. Enter it below.");
                } else {
                    // Submit form if OTP is entered
                    event.target.submit();
                }
            } else {
                alert("Email is not valid");
            }
        });

        function validateEmail(email) {
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }
    </script>
</body>
</html>