<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css.css">
    <!-- Styleshhet file here!-->
    <link rel="stylesheet" href="style.css">
    <!-- Javascipt file here!-->
    <script type="text/javascript" src="script.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <title>Scores</title>
</head>
<body class="d-flex justify-content-center">
<div class="container m-5">
    <div class="d-flex container w-100 justify-content-center">
        <div>
            <h1 class="text-center">Scores</h1><br>
        </div>
        <hr>
    </div>
    <div class="d-flex container mt-5 justify-content-center">
        <table id="scores" class="table table-hover display" style="width:75%">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>High score</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
</body>
</html>
