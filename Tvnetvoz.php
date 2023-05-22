<?php
include('header.php');
?>




<!-- Datatable script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"
    type="text/javascript"
    charset="utf8"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

<!-- Datatable css -->
<link rel="stylesheet"
    type="text/css"
    href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">

<link rel="stylesheet"
    type="text/css"
    href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">


<link rel="stylesheet"
    type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">

<link rel="stylesheet"
    type="text/css"
    href="assets/css/Tvnetvoz.css">

<script type="text/javascript"
    src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"
    src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript"
    src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script type="text/javascript"
    src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>


<body style="background-color: #ababab;">


    <div class="container">

<h1 class="display-4 text-center text-black" style="padding:1%;">TV Net Voz</h1>

        <div class="row py-5">
            <div class="col-lg-12 mx-auto">
                <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                        <div class="table-responsive">


                            <table id="example"
                                style="width:100%"
                                class="table table-striped table-bordered display responsive nowrap">


                                <thead>

                                    <tr>
                                        <th style="text-align: center">Box</th>
                                        <th style="text-align: center">Televisão</th>
                                        <th style="text-align: center">Internet Fixa</th>
                                        <th style="text-align: center">Cartão SIM</th>
                                        <th style="text-align: center">Dados Moveis</th>
                                        <th style="text-align: center">Internet Movel</th>
                                        <th style="text-align: center">Preço</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    <?php


                                    include 'config.php';
                                    $ligacao = new PDO("mysql:dbname=$base_dados;host=$host", $user, $password);


                                    $sql = "SELECT * FROM Tvnet";
                                    $motor = $ligacao->prepare($sql);
                                    $motor->execute();
                                    $ligacao = null;


                                    foreach ($motor as $post) {
                                        //dados do post
                                        $id = $post['Id'];
                                        $box = $post['Box'];
                                        $televisao = $post['Televisao'];
                                        $internetFixa = $post['InternetFixa'];
                                        $cartao = $post['Cartao'];
                                        $dadosMoveis = $post['DadosMoveis'];
                                        $internetMovel = $post['InternetMovel'];
                                        $img = $post['Img'];
                                        $preco = $post['Preco'];

                                        echo ('<tr>');
                                        echo ('<td>' . $box . '</td>');
                                        echo ('<td>' . $televisao . '</td>');
                                        echo ('<td>' . $internetFixa . ' Mbps</td>');
                                        echo ('<td>' . $cartao . '</td>');
                                        echo ('<td>' . $dadosMoveis . '</td>');
                                        echo ('<td>' . $internetMovel . '</td>');
                                        echo ('<td>' . $preco . '€</td>');
                                        // echo ('<td style="display:none;">' . $id . '€</td>');


                                        echo ('</tr>');
                                    }
                                    ?>



                                </tbody>

                            </table>


                        </div>

                    </div>

                    <button id="button"
                        type="button"
                        class="btn btn-warning btn-lg btn-block">Registo</button>


                </div>


            </div>


        </div>

    </div>


</body>

<script>
$(document).ready(function() {

    $('#example').dataTable({
        "dom": 'rtp',
        "sorting": [
            [6, 'asc']
        ],

    });



    var table = $('#example').DataTable();


    $('#example tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
        var iddd = table.row(this).data();

    });

    $('#button').click(function() {
        var data = table.rows('.selected').data();
        window.open("alterarfatura.php?par=" + data[0], "_self"); // , "_self"




    });
});
</script>


<?php
include('footer.php');
?>