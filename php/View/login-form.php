<?php
require_once(__DIR__ . "/../Model/config.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "Controller/login-user.php"?>">
<div>
        <label for="username">Username: </label>
        <input type="text" name="username" />
        </div>
    <!-- <!When you make your password make sure that you set the input type to password so that all you see are dots rather than the password itself> -->
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" />
    </div>
    <!-- <!make a submit button> -->
    <div>
        <button type="submit">Submit</button>
    </div>
</form>    
</form>