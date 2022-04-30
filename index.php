<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js.js"></script>
    <title>watch</title>
</head>

<body>

    <div class="container p-5 ">

        <div class="row border border-black ">
            <div class="col border border-black bg-light pt-5">
              <?php 
                include('watch.php')
              ?>
            </div>
            <div class="col  border border-black">
                <div class="row  border border-black bg-primary py-5">
                    <p class="text-center">sano1</p>
                </div>
                <div class="row  border border-black bg-success py-5">
                    <p class="text-center">sano2</p>
                </div>
            </div>

        </div>

    </div>



</body>

</html>