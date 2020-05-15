<?php echo Form::open(array(
    'action' =>Uri::base() . 'index/hospital/login',
    'method' => 'post'
    ));?>

    
    <div class = 'form-group'>
    <label for= 'username'>Username: </label>
    <input type = "text" name ="username" class = "form-control" placeholder = "Enter username">
    </div>
    <br>
    <div class='form-group'>
    <label for="password">Password: </label>
    <input type = "text" name ="password" class='form-control' placeholder="Enter password">
    </div>
    <button type='submit' class = 'btn btn-primary'>Login</button>
<br> 

<?php echo Form::close();?>
    
    
<!--
<form method = 'post'>
<label>User Name: </label>
<input type = "text" name ="username">
<br>
<label> Password: </label>
<input type = "text" name = "password">
<br>
<input type = "submit" value= "Log In">
</form>
-->

<?php

if($failed){
echo "Incorrect username or password";
}
else{
echo "<h1 style = 'padding: 10px; background-color: rgba(255,255,255,0.50); margin: auto; text-align: center;'>Welcome!</h1>";
}
/*
if(isset($_POST['username']) && isset($_POST['password'])){
$user = $_POST['username'];
$pass = $_POST['password'];
if($user === "ct310" && $pass === "cookiesareyummy"){
echo "<h1>Welcome user!</h1>";
$user = "user";
}
else if($user === "ct310admin" && $pass==="RoundPiesAreBest"){
echo "<h1>Welcome Admin!</h1>";
$user = "admin";
}
else{
echo "<h1>Incorrect username or password!</h1>";
}
}
else{
echo '<h1>Please enter username and password to continue.</h1>';
}
*/

?>
