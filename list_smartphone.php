<?php 
// Create database connection using config file include_once("config.php"); 
include_once("scripts/config.php"); 
// hasil
$result = mysqli_query($mysqli, "SELECT * FROM smartphone ORDER BY id DESC");
?>

<html> 
    <head>         
        <title>Homepage</title> 
    </head> 
 
    <body>
        <a href="add_smartphone.php">Tambahkan smartphone</a><br/><br/> 
        <table width='80%' border=1> 
            <tr>         
                <th>Nama Merek</th> 
                <th>Harga</th> 
                <th>Link gambar</th> 
                <th>Spesifikasi</th> 
                <th>Update</th>     
            </tr>     
        
        <?php       
            while($item_data = mysqli_fetch_array($result)) {                  
                echo "<tr>";         
                echo "<td>".$item_data['merk']."</td>";
                echo "<td>".$item_data['harga']."</td>";         
                echo "<td>".$item_data['gambar']."</td>";
                echo "<td>".$item_data['spek']."</td>";             

                echo "<td><a href='edit_smartphone.php?id=$item_data[id]'>Edit</a> | <a href='delete.php?id=$item_data[id]'>Delete</a></td></tr>";
            }
        ?>     
        </table> 
    </body>
</html> 