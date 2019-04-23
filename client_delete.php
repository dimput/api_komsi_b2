<!DOCTYPE html>
<?php
  $nim = $_GET['nim'];
  $curl = curl_init();
  curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://10.33.34.121/read_one.php',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => [
      'nim' => $nim,
    ]
  ]);
  $result = curl_exec($curl);
  curl_close($curl);
  
  $result = json_decode($result);
//   print_r ($result);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form action="http://10.33.34.121/delete.php" method="POST" name="myForm">
    <div class="form-group">
        <label for="first_name">NIM :</label>
        <input type="text" class="form-control" name="nim" id="nim" placeholder="First Name" value="<?=$result->nim?>" readonly>
    </div>
    <div class="form-group">
        <label for="last_name">Name</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Last_Name" value="<?=$result->nama?>" readonly>
    </div>
    <div class="form-group">
        <label for="last_name">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Last_Name">
    </div>
    <input type="hidden" name="ip" value="heehehh">
    <?php
        for()
    ?>
    <button type="submit" value="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>