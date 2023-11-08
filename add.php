<?php require_once 
'./resource/header.php';

$link = mysqli_connect('localhost', 'root', '', 'phonebook');

//print_r($_POST);

if (!empty($_POST)) {
    $a_name = $_POST['name'];
    $phoneno = $_POST['number'];
    $uid = 1;
    if(!empty($a_name)){
        $query = " INSERT INTO cbook(`c_name`, `c_phone`,`uid`) VALUES ('$a_name','$phoneno','$uid')";
        $res = mysqli_query($link, $query);
        if ($res) {
            echo"Save Successful";
        } else {
            echo"Save Failed";
        }
    }
 else {
        echo "Please Check The Filed";
    }
        //header('location:index.php');
    } 
    
   

?>
<form action="" method="post">
    <table align="center">
        <tr>
            <td>Name: </td>
            <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <td>Phone Number: </td>
            <td><input type="text" name="number" ></td>
        </tr>
        
        <tr>
            <td></td>        
            <td><input type="submit" value="Save"></td>
        </tr>
        

    </table>
    
    

</form>


<?php require_once './resource/footer.php' ?>
