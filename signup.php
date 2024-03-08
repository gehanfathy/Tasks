<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up form</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    .body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0; }
    .h2{
        align-items: center;
    }
.form-group {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.input {
    margin-bottom: 10px;
    padding: 8px;
    width: 250px;
    border: 1px solid #ccc; 
    border-radius: 5px; 
    outline: none;
}

.but {
    padding: 8px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.but:hover{
    background-color: #0056b3;
}
    </style>
</head>
<body>
    <div class="container">
        <h2 >Sign Up</h2>
        <from id='signup-form' method="post">
            <div class="form-group">
                <lable for="username"> </lable>
                <input type="text" id="username" name="username" placeholder="your name" required>
            </div>
           <div class="form-group">
                <lable for="password"> </lable>
                <input type="password" id="password" name="password" placeholder="your password" required>
            </div>
            <div class="form-group">
                <input type="submit" class="'but" value="Sign up">
</div>
</form>
</div>
</body>
</html>
<?php
require_once 'config.php';
if(isset($_POST['username']) && isset($_POST['password']) );{
$username=$_POST['username'];
$hashedpass=$_POST['password'];
$stmt=$conn->prepare("INSERT INTO user(username ,password) VALUES (:num, :pass)");
$stmt->executed(array(':num'=> $username, ':pass'=> $passwoerd));

}
?>