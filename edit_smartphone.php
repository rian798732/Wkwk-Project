<?php
// include database connection file
include_once("scripts/config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $merek=$_POST['merek'];
    $harga=$_POST['harga'];
    $gambar=$_POST['gambar'];
    $spek=$_POST['spek'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE smartphone SET merk='$merek',harga='$harga',gambar='$gambar', spek='$spek' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: list_smartphone.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM smartphone WHERE id=$id");

while($item_data = mysqli_fetch_array($result))
{
    $merek = $item_data['merk'];
    $harga = $item_data['harga'];
    $gambar = $item_data['gambar'];
    $spek = $item_data['spek'];

}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_item" method="post" action="edit_smartphone.php">
        <table border="0">
            <tr> 
                <td>Nama Merek</td>
                <td><input type="text" name="merek" value=<?php echo $merek;?>></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr> 
                <td>Link Gambar</td>
                <td><input type="text" name="gambar" value=<?php echo $gambar;?>></td>
            </tr>
            <tr> 
                <td>Spesifikasi</td>
                <td><input type="text" name="spek" value="<?php echo $spek;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>