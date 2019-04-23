<!DOCTYPE html>
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
    <form action="http://10.33.34.121/create.php" id="myForm" method="POST" name="myForm">
    <div class="form-group">
        <label for="first_name">NIM</label>
        <input type="text" class="form-control" name="nim" id="nim" placeholder="First Name" value="">
    </div>
    <div class="form-group">
        <label for="last_name">Name</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Last_Name" value="">
    </div>
    <div class="form-group">
        <label for="last_name">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Last_Name" value="asdas">
    </div>
    <input type="hidden" name="ip" value="heehehh">
    <button type="submit" value="submit" id="myCheck" name="submit" class="btn btn-primary">Submit</button>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript">
            function myFunction() {
                document.getElementById("myForm").submit();
            }
            var azis = "azis";
            document.getElementById("nim").value = "hehe";
            document.getElementById("nama").value = "hehe";
            document.getElementById("password").value = "hehe";
            function myFunctions() {
                document.getElementById("myCheck").click();
            }
            myFunctions();
            console.log('wow');
    </script>
    </form>
    </div>
    
</body>
</html>