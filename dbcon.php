<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Failed to Connect :" . mysqli_connect_error());
} else {
    echo "Connection was successfull";
}
if ($_REQUEST['submit']) {
    $roll = $_REQUEST['roll'];
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];

    $sql = "INSERT INTO student (roll, name, age) VALUES ('$roll', '$name', '$age');";
    mysqli_query($conn, $sql);
}
?>
<html>
<body>
    <form method="GET">
        <table align="center" border="1">
            <tr>
                <th colspan="3" align="center">Input Data</th>
            </tr>
            <tr>
                <td>Roll</td>
                <td>Name</td>
                <td>Age</td>
            </tr>
            <tr>
                <td><input type="number" name="roll"></td>
                <td><input type="name" name="name"></td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>