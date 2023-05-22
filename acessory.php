<?php

if (!isset($_SESSION)) {
    session_start();
} else {
    session_destroy();
    session_start();
}
$_SESSION['myuzo'] = "on";
include('header.php');
include('config.php');

$connect = new PDO("mysql:dbname=$database;host=$host", $user, $password);

//get items from database
$sql = "SELECT * FROM acessoriosLoja LIMIT 100"; /*gets acessories info from db*/
$motor = $connect->prepare($sql);
$motor->execute();
$connect = null;

?>



<head>

    <!-- Datatable script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js" type="text/javascript" charset="utf8"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- Datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">


    <script type="text/javascript" src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>

    <!-- Google Fonts Roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" type="text/css" href="assets/css/acessory.css">

    


</head>

<body style="background-color: #ababab;">


    <div class="container">

        <div class="row py-3">
<div class="col-lg-12 mx-auto">
<div class="card rounded shadow border-0">
<div class="card-body bg-white rounded">
<h1 style="text-align:center; padding:10px; font-family: 'Roboto', sans-serif;font-weight: lighter; font-size:56px ;">Acessórios</h1>
<div class="table-responsive">

                            <!-- select range and button -->
                            <table id="movimentos" style="width:100%" class="table table-bordered">


                                <thead>
                                    <th></th>

                                </thead>



                                <tbody>
                                    <!-- START CONTENT END -->
                                    <?php foreach ($motor as $items) {
                                        $name_access = $items['Produto'];
                                        $price_access = $items['Preco'];
                                        $img_access = $items['image'];
                                        echo '<tr>
                                            <td>
                                                <img class="img" src="assets/images/a/' . $img_access . '.jpg"" alt="' . $name_access . '"><br><br>
                                                <div class="produto">
                                                <h4 class="nome">' . $name_access . '</h4>
                                                <p>Preço: '.$price_access .'€</p>
                                                <p>Descrição: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices nibh a risus rutrum, eu cursus mauris porta.</p>
                                                </div>
                                                <form action="alterarfatura.php" method="POST" class="btn-comprar">
                                                <input type="submit" value="Comprar">
                                                </form> 
                                            </td>

                                        </tr>';
                                    } ?>





                                </tbody>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>



<script>
    $(document).ready(function() {




        $('#movimentos').dataTable({
            "dom": 'frtpc',
            "ordering": false,
        });
    });
</script>