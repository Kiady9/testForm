<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/thxpage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Thank you</title>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <img class="formimg img-thumbnails"src="assets/img/form.jpg" alt="formimage">
        </div>
            
        <div class="col-md-3">
            <?php
        echo "<h1 class='thxmsg'> <strong>".$_GET['fname']."</strong>,<br>Thank you for your answer. <br>
        We hope to see you soon.</h1> "?>
        </div>
    </div>
    </div>
</body>
</html>