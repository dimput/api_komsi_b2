<?php
  $curl = curl_init();
  curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost/database/server.php',
    CURLOPT_POST => 1
    // CURLOPT_POSTFIELDS => [
    //   'key' => '1234',
    // ]
  ]);
  $result = curl_exec($curl);
  curl_close($curl);
  
  $result = json_decode($result);
  // print_r ($result);

?>


<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($result as $i) :?>
    <tr id=<?=$i->id?>>
        <th scope="row"><?=$i->id?></th>
          <td><?=$i->email?></td>
          <td><?=$i->password?></td>
          <form action="delete.php">
          <input type="hidden" name="id" value=<?=$i->id?>>
            <td><input type="submit" value="HAPUS" class="btn btn-danger"></td>
          </form>
      </tr>
    <?php endforeach?>
  </tbody>
  <script>
    var hapus = (id) => {
      document.getElementById(id).innerHTML = "";
      console.log("hapus jing "+id);
    }
  </script>

</table>
</html>