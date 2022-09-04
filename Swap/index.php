<?php
$errors = null;

function swap($a, $b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
    ?>
        <script>
            // Show value display section
            $('.swapping').removeAttr('hidden');

            // Before Swaping
            $('.before_2').html(<?= $a ?>);
            $('.before_1').html(<?= $b ?>);

            // After Swaping
            $('.after_1').html(<?= $a ?>);
            $('.after_2').html(<?= $b ?>);
        </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Number Swip</title>
</head>

<body>
    <div class="container">
        <div class="card shadow-lg  mx-auto w-75 mt-1 mt-md-5">
            <div class="card-header">
                <center class="mt-2 mb-1 h1">Number Swap</center>
            </div>

            <div class="card-body mx-auto">
                <form action="" method="POST">
                    <div class="form-group mx-auto mt-1">
                        <label for="" class="form-label">Enter 1<sup>st</sup> Number</label>
                        <input type="text" class="form-input val_1" name="firstnumber" onchange="updateSwap()" required>
                        <p style="color: red;"><?= $errors; ?></p>
                    </div>
                    <div class="form-group mx-auto mb-1">
                        <label for="" class="form-label">Enter 2<sup>nd</sup> Number</label>
                        <input type="text" class="form-input" name="secondnumber" onchange="updateSwapp()" onclick="showReset()" required>
                    </div>
                    <div class="d-flex justify-content-around mb-2 mt-sm-2">
                        <button class="btn btn-primary btn-md w-50 mx-auto" type="submit" name="swap"> Swap</button>
                        <button class="btn btn-danger btn-md w-50 mx-auto resetbtn" type="reset" hidden> Reset</button>

                    </div>
                </form>
            </div>

            <div class="card-footer mt-1">
                <div class="d-block d-md-flex justify-content-around">
                    <section class="text-center">
                        <div class="h3">Before Swap</div>
                        <p>1<sup>st</sup> Value: <b class="before_1 text-primary"></b></p>
                        <p>2<sup>nd</sup> Value: <b class="before_2 text-primary"></b></p>
                    </section>
                    <section class="text-center swapping" hidden>
                        <div class="h3">After Swap</div>
                        <p>1<sup>st</sup> Value: <b class="after_1 text-danger"></b></p>
                        <p>2<sup>nd</sup> Value: <b class="after_2 text-danger"></b></p>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script>
        function showReset() {
            $('.resetbtn').removeAttr('hidden');
        }

        function updateSwap() {
            var x = $('.val_1').val();
            $('.before_1').html(x);

        }

        function updateSwapp() {
            var y = $('.val_2').val();
            $('.before_2').html(y);

        }
    </script>

    <?php
    if (isset($_POST['swap'])) {
        // var_dump($_POST);
        $val_1 = $_POST['firstnumber'];
        $val_2 = $_POST['secondnumber'];

       swap($val_1, $val_2);
    ?>

    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>