<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>HTML FORM</h1>
    <div class="container">
        <form action="connect.php" method="post">
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" autocomplete="off" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" autocomplete="off" required>
            </div>
            <div class="gendercontainer">
                <label>Gender</label>
                <input class="gender1" type="radio" id="male" name="gender" value="m" required>
                <label for="male">Male</label>
                <input class="gender1" type="radio" id="female" name="gender" value="f">
                <label for="female">Female</label>
                <input class="gender1" type="radio" id="other" name="gender" value="o">
                <label for="other">Others</label>
            </div>
            <div>
                <label for="mobile">Mobile</label>
                <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile" autocomplete="off" pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" autocomplete="off" minlength="8" required>
            </div>

            <div class="btn">
                <button type="submit">Submit data</button>
            </div>
        </form>
    </div>
</body>
</html>
