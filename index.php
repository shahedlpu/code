<?php 
require_once './resource/header.php';

$link = mysqli_connect('localhost', 'root', '', 'phonebook');

//print_r($_POST);

if (!empty($_POST)) {
    $name = $_POST['name'];
    $password = $_POST['pass'];

        $query = "SELECT * FROM users WHERE username= '$name'";
        $res = mysqli_query($link, $query);
        $data = mysqli_fetch_assoc($res);
        if ($data['password']== md5($password)) {
            header('location:view.php');
        } else {
            echo"Registration Failed";
        }
        //header('location:index.php');
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
        <td></td>        
        <td><input type="submit" value="Login"></td>
    </tr>
    

</table>
</form>

<?php require_once './resource/footer.php' ?>