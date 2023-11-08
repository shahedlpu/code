<?php 
require_once './resource/header.php';

$link = mysqli_connect('localhost', 'root', '', 'phonebook');
$query = "select * from `cbook` where uid= '1'";
$res = mysqli_query($link, $query);

?>

<table border="1" style="border-collapse: collapse" cellpadding="10" align="center" >
        <tr>
            <th>SL NO</th>
            <th>Name</th>
            <th>Phone NO</th>
            <th>Action</th>
        </tr>
        <?php
        $sl = 1;
        while ($data = mysqli_fetch_assoc($res)){
        ?>
        
         <tr align="right">
            <td ><?php echo $sl++;?></td>
            <td ><?php echo $data['c_name']?></td>
            <td ><?php echo $data['c_phone']?></td>
            <td >Edit | Delete </td>

        </tr>
        
        <?php }
        ?>
       
   </table>

<?php require_once './resource/footer.php'?>
