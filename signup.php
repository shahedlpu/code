<?php
require_once './resource/header.php';

$link = mysqli_connect('localhost', 'root', '', 'phonebook');

//print_r($_POST);

if (!empty($_POST)) {
    $name = $_POST['name'];
    $password = $_POST['pass'];
    $conpass = $_POST['cpass'];
    if($password == $conpass) {
        $query = " INSERT INTO users(`username`, `password`) VALUES ('$name',md5('$password'))";
        $res = mysqli_query($link, $query);
        if ($res) {
            echo"Sign Up Successful";
        } else {
            echo"Registration Failed";
        }
        //header('location:index.php');
    } 
    
    else {
        echo " Confirm Password Not Match ";
    }
}
?>


<form action="" method="post">
    <table align="center">
        <tr>
            <td>Name: </td>
            <td><input type="text" name="name" placeholder="Enter Your Name"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="pass" placeholder="Enter Your Password"></td>
        </tr>
        <tr>
            <td> Confirm Password: </td>
            <td><input type="password" name="cpass" placeholder="Enter Your Password"></td>
        </tr>
        <tr>
            <td></td>        
            <td><input type="submit" value="Sign Up"></td>
        </tr>
        

    </table>
    
    <p align="center"><a href="index.php">Already Sign Up? Click Here</a>
            
        </p> 

</form>
<?php require_once './resource/footer.php' ?>
