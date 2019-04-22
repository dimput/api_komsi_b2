<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="container">
<form action="http://localhost:8001/clientPush.php" method="POST">
    <div class="form-group col 16">
        <label for="First Name">First Name</label>
        <input type="text" name="first_name" class="form-control col" placeholder="Enter your First Name">
    </div>
    <div class="form-group col 16">
        <label for="Last Name">Last Name</label>
        <input type="text" name="last_name" class="form-control" placeholder="Enter your Last Name">
    </div>
    <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
    <?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
$servername = "localhost";
$username = "root";
$password = "";
$db = 'proya';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Delete user row from table based on given id

$id = $_POST['first_name'];
$email = $_POST['last_name'];
$password = "hehehehehhehe";

// Insert user data into table
$sql = "INSERT INTO pengguna(id,email,password) VALUES('$id','$email','$password')";
$result = $conn->query($sql);

    // Show message when user added
    echo "User added successfully. <a href='index.php'>View Users</a>";
}
?>
</form>
</div>
