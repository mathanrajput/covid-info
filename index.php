<?php

include "logic.php";

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7351b9d909.js" crossorigin="anonymous"></script>

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <title>Covid-19 Updat e!</title>
</head>

<body>
    <div class="container-fluid bg-ligth p-5 text-center my-3">
        <h1>Covid-19 Tracker</h1>
        <h5>Here you can see all the cases of covid-19 from all over the world.</h5>
    </div>

    <div class="container my-5">
    <div class="row text-center">
    <div class="col-4 text-warning">
    <h5>Confirmed</h5>
    <?php echo $total_confirmed?>
    </div>

    <div class="col-4 text-success">
    <h5>Recoverd</h5>
    <?php echo $total_recovered ?>
    </div>

    <div class="col-4 text-danger">
    <h5>Deceased</h5>
    <?php echo $total_deaths ?>
    </div>
    </div>
    </div>

    <div class="container bg-ligth p-3 my-3 text-center">
    <h5 class="text-info">Prevention is the Cure</h5>
    <p class="text-muted">Stay Home Stay Safe.</p>
    </div>

    <div class="container-fluid">
       <div class="table-responsive">
       <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Countries</th>
                    <th scope="col">Confirmed</th>
                    <th scope="col">Recovered</th>
                    <th scope="col">Deceased</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($data as $key => $value){
                    $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                ?>

                <tr>
                    <th><?php echo $key; ?></th>
                    <td>
                    <?php echo $value[$days_count]['confirmed']; ?>
                    <?php if($increase != 0) { ?>
                    <small class="text-danger pl-2"><i class="fas fa-arrow-up"></i> <?php echo $increase ?> </small>
                    <?php }?>
                    </td>

                    <td>
                    <?php echo $value[$days_count]['recovered']; ?>
                    </td>

                    <td>
                    <?php echo $value[$days_count]['deaths']; ?>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
       </div>
    </div>
    <footer class="footer mt-auto py-3 bg-ligth">
  <div class="container text-center">
    <span class="text-muted">Copyrigth &copy;2020 Mathan Lal.</span>
  </div>
</footer>
</body>

</html>