<?php
session_start();

if (!isset($_SESSION["my_uzo"])) {
    header("location: login.php");
}

include('header.php');

?>





<!-- Datatable script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js" type="text/javascript" charset="utf8"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

<!-- Datatable css -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/Tvnetvoz.css">

<script type="text/javascript" src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>




<body style="background-color: #ababab;">


    <div class="container">

        <div class="row py-5">
            <div class="card rounded shadow border-0 text-bg-info">
                <div class="card-body p-2 rounded text-bg-info">
                    <div class="d-flex justify-content-between">
                        <span class="text-left "> <i class="bi bi-phone"></i>
                            <?php
                            echo ($_SESSION["my_uzo"]);
                            ?>

                        </span>
                        <span><b>Saldo:</b>
                            <?php
                            echo (rand(25, 3500) / 100);
                            ?>
                            <i class="bi bi-currency-euro"></i></span>
                        <span class="text-right"><i class="bi bi-envelope"></i> Ola, User</span>
                    </div>
                </div>
            </div>

        </div>



        <div class=" row py-5">
            <div class="col-lg-12 mx-auto">
                <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                        <div class="table-responsive">

                            <table id="movimentos" style="width:100%" class="table table-striped table-bordered display responsive nowrap">


                                <thead>
                                    <th>Data</th>
                                    <th>Duração</th>
                                    <th class="text-left">Destinatario</th>
                                    <th>Chamada / Sms</th>
                                </thead>

                                <tbody>
                                    <!-- START CONTENT END -->
                                    <tr>
                                        <td><span> 13-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 12-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 12-mar-23</td>
                                        <td class="text-left"> 00:44:02 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 11-mar-23</td>
                                        <td class="text-left"> 00:06:06 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 11-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 10-mar-23</td>
                                        <td class="text-left"> 00:55:01 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>

                                    <tr>
                                        <td><span> 9-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 8-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 7-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 7-mar-23</td>
                                        <td class="text-left"> 00:16:55 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 7-mar-23</td>
                                        <td class="text-left"> 00:27:36 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 7-mar-23</td>
                                        <td class="text-left"> 00:00:37 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 7-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 7-mar-23</td>
                                        <td class="text-left"> 00:53:26 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 7-mar-23</td>
                                        <td class="text-left"> 00:07:36 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 6-mar-23</td>
                                        <td class="text-left"> 00:20:06 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 5-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 4-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 4-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 4-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 4-mar-23</td>
                                        <td class="text-left"> 00:12:21 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 4-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 4-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 3-mar-23</td>
                                        <td class="text-left"> 00:07:49 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 3-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 3-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 3-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 2-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 2-mar-23</td>
                                        <td class="text-left"> 00:05:07 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 1-mar-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 28-fev-23</td>
                                        <td class="text-left"> 00:23:39 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 27-fev-23</td>
                                        <td class="text-left"> 00:53:02 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 27-fev-23</td>
                                        <td class="text-left"> 00:18:57 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 26-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 26-fev-23</td>
                                        <td class="text-left"> 00:16:06 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 25-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 24-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 24-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 23-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 23-fev-23</td>
                                        <td class="text-left"> 00:46:50 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 23-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 22-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 21-fev-23</td>
                                        <td class="text-left"> 00:49:13 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 21-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 20-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 20-fev-23</td>
                                        <td class="text-left"> 00:22:05 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 19-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 18-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 17-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 16-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 16-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 15-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 14-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 14-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 13-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 13-fev-23</td>
                                        <td class="text-left"> 00:29:00 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 13-fev-23</td>
                                        <td class="text-left"> 00:06:17 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 13-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 12-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 11-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 11-fev-23</td>
                                        <td class="text-left"> 00:50:03 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 11-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 10-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 939 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 9-fev-23</td>
                                        <td class="text-left"> 00:48:29 </td>
                                        <td class="text-left"> 965 xxx xxx </td>
                                        <td><span>Chamada </td>
                                    </tr>
                                    <tr>
                                        <td><span> 9-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 9-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 926 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 9-fev-23</td>
                                        <td class="text-left"> 00:01:00 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Sms </td>
                                    </tr>
                                    <tr>
                                        <td><span> 8-fev-23</td>
                                        <td class="text-left"> 00:26:55 </td>
                                        <td class="text-left"> 913 xxx xxx </td>
                                        <td><span>Chamada</td>
                                    </tr>
                                </tbody>
                            </table>


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
            "dom": 'rtp',
            "ordering": false,
        });


    });
</script>
<?php
include('footer.php');
?>