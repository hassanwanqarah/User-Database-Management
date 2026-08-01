<?php
// Replace these values with your own database credentials
$servername = "your_server";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$age = isset($_GET['age']) ? $_GET['age'] : "";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['toggle'])){

    $id = $_GET['toggle'];

    $sql = "UPDATE User
            SET Status = IF(Status = 0, 1, 0)
            WHERE ID = '$id'";

    $conn->query($sql);
}
if(isset($_GET['name']) && isset($_GET['age'])){
$sql = "INSERT INTO User (Name, Age, Status)
VALUES ('$name', '$age', '0')";

if ($conn->query($sql) === TRUE) {
 header("Location: final.php");
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$result = $conn->query("SELECT * FROM User");
$conn->close();
?><!DOCTYPE html>
<html>
<script>
function toggleStatus(id){

    fetch("toggle.php?id=" + id)
    .then(response => response.text())
    .then(data => {
        document.getElementById("status" + id).innerHTML = data;
    });

}
</script>
<body>

<h2>HTML Forms</h2>

<form action="final.php" method="get">
  <label for="fname"> Name:</label><br>
  <input type="text" id="name" name="name" placeholder="Enter your name"><br>
  <label for="lname">Age:</label><br>
  <input type="text" id="age" name="age" placeholder="Enter your age"><br><br>
  <input type="submit" value="Submit">
</form> <table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Status</th>
        <th>Action</th>
        
    </tr>

    <?php
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row["ID"]."</td>";
        echo "<td>".$row["Name"]."</td>";
        echo "<td>".$row["Age"]."</td>";
        echo "<td id='status".$row["ID"]."'>".$row["Status"]."</td>";
        echo "<td><button onclick='toggleStatus(".$row["ID"].", this)'>Toggle</button></td>";
        echo "</tr>";
    }
    ?>

</table>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>