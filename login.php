<!DOCTYPE html>
<html>
<head>
    <Title>Admin login</Title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    
</head>
<body>
<div class="fullname">
    <div id="inner_fullname">
        <div id="header"><h2>CSTC Library</h2></div>
        <div id="body">
            <br><br><br><br><br>
            <form action="" method="post">
                <table align="center">
                    <tr>
                        <td width="100px" height="60px"><b>Enter Username</b></td>
                        <td width="100px" height="60px"><input type="text" name="un" placeholder="Enter Username"
                                                               style="width:150px; height:30px; border-radius:20px">
                        </td>
                    </tr>
                    <tr>
                        <td width="200px" height="60px"><b>Enter Password</b></td>
                        <td width="200px" height="60px"><input type="text" name="ps" placeholder="Enter Password"
                                                               style="width:150px; height:30px; border-radius:20px">
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="sub" value="Login"
                                   style="width: 70px; height:30px; border-radius:5px;"></td>
                        <td><button  type="button" onclick="openPopup()" style="width: 70px; height:30px; border-radius:5px;">Register</button></td>
                    </tr>
                </table>
            </form>
            <div class="popup-form" id="popupForm">
                <h2>Register</h2>
                <!-- Your registration form fields here -->
                <form action="" method="post">
                    <label for="username">Username:</label><br>
                    <input type="text" id="username" name="username"><br>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password"><br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="overlay" id="overlay" onclick="closePopup()"></div> <!-- Overlay to close popup -->
        </div>
    </div>
</div>
<script>
    function openPopup() {
        document.getElementById("popupForm").style.display = "block"; // Display the popup form
        document.getElementById("overlay").style.display = "block"; // Display the overlay
    }

    function closePopup() {
        document.getElementById("popupForm").style.display = "none"; // Hide the popup form
        document.getElementById("overlay").style.display = "none"; // Hide the overlay
    }
</script>
</body>
<br><br>
<div id="footer"><h4 align="center"> Copyright </h4></div>
</html>
