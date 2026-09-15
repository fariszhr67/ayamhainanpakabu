<!DOCTYPE html>
<html>
<head>
<title>Pak Abu Stall</title>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class = "loginpage">
<p>Please insert your log in details</p>
<form action="login_act.php" method="post">

<div class = "container">
    <div class = box0>
        <label for="text">Username </label>
    <p>
        <input type="text" name="userName" id="userName" required="required">
    </p>
        <label for="text">Password </label>
    <p>
        <input type="password" name="password" id="password" required="required">
    </p>     
        <input type="submit" name="submit" id="submit" class="box1" required="required">
        <a href="index.html" class="box2"> Cancel</a>
    </div>
</div>
</form>

</body>
</html>