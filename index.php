<?php
  $curl = curl_init();
  curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://10.33.34.121/read.php',
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
    <tr id=<?=$i->nim?>>
        <th scope="row"><?=$i->nim?></th>
          <td><?=$i->nama?></td>
          <td><?=$i->ip?></td>
          <form action="delete.php">
            <td><a href="client_delete.php?nim=<?=$i->nim?>" class="btn btn-danger">HAPUS</a></td>
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