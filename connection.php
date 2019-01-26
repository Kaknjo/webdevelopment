<?php
session_start();
$userName='';
$email='';
$errors=array();
$db=mysqli_connect("localhost","root", "","register"); // povezivanej sa bazom podataka 
// Provjera nakon sto je kliknuto dugme da li su svi inputi popunjeni 
if(isset($_POST['submit'])){
    // Kodiranje unosa
    $username=mysqli_real_escape_string($db, $_POST['username']);
    $email=mysqli_real_escape_string($db, $_POST['email']);
    $password1=mysqli_real_escape_string($db, $_POST['password1']);
    $password2=mysqli_real_escape_string($db, $_POST['password2']);
// Ukoliko je polje prazno dodajmo poruku u niz errors
if(empty($username)){
    array_push($errors, 'Username is required');

}if(empty($email)){
    array_push($errors, 'Email is required');

}if(empty($password1)){
    array_push($errors, 'Password is required');

}
if($password1!=$password2){
    array_push($errors, 'Password not match');

}

// Provjera da li u bazi ima isto ime ili isti email 

$user_check="SELECT * FROM user WHERE username='$username' OR email='$email' ;" ;
$result=mysqli_query($db, $user_check);
$user=mysqli_fetch_assoc($result);

if($user){
    if($user['username']===$username){
        array_push($errors, 'Username already exist'); 
    }
    if($email['email']===$email){
        echo 'Email already exist';
    }
}
if(count($errors) == 0){
    $password=md5($password1);
    $sql="INSERT INTO user(username, email, password)
             VALUES('$username', '$email', '$password1');";
    mysqli_query($db, $sql);
    $_SESSION['username']=$username;
    header('location: home.php');
}
}


// Login sistem 

if(isset($_POST['login'])){
    // Kodiranje unosa
    $username=mysqli_real_escape_string($db, $_POST['username']);
    $password1= $_POST['password'];
   
// Ukoliko je polje prazno dodajmo poruku u niz errors
if(empty($username)){
    array_push($errors, 'Username is required');

}if(empty($password1)){
    array_push($errors, 'Password is required');

}
if (count($errors) == 0) {
    // ne radi kada se ovako unosi 
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password1'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      header('location: home.php');
    }else {
        array_push($errors, "Wrong username/password combination");
    }
}
}
?> 