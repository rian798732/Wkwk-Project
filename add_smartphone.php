<html>
<head>
    <title>Add Smartphone</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add_smartphone.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Merek</td>
                <td><input type="text" name="merek"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>Spesifikasi</td>
                <td><input type="text" name="spek"></td>
            </tr>
            <tr> 
                <td>Link gambar</td>
                <td><input type="text" name="gambar"></td>
            </tr>
            <tr> 
                <td>Spesifikasi</td>
                <td><input type="text" name="spesifikasi"></td>
            </tr>
            <tr>
                <td>Link Tokopedia</td>
                <td><input type="text" name="link_tokped"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
 
<?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $merek = $_POST['merek'];
        $harga = $_POST['harga'];
        $spek = $_POST['spek'];
        $gambar = $_POST['gambar'];
        $linktokped = $_POST['link_tokped'];

        // include database connection file
        include_once("scripts/config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO smartphone(merk,harga,spek,gambar, link_tokped) VALUES('$merek','$harga','$spek','$gambar', '$linktokped')");

        // Show message when user added
        echo "User added successfully. <a href='list_smartphone.php'>View Users</a>";
    }
?>
</body>
</html>