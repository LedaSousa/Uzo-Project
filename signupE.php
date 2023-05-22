<?php
include 'header.php';


echo '<head>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    ';

?>
<script type="text/javascript"
    src="assets/js/signupE.js"></script>
<link rel="stylesheet"
    type="text/css"
    href="assets/css/signupE.css">

<title>Nova Password</title>





<body style="background-color: #ababab;">

    <div class="row py-5">
        <div class="col-lg-4 mx-auto">
            <div class="card rounded shadow border-0">
                <div class="card-body p-5 bg-white rounded">




                    <h3 class="text-center">Nova Password</h3>

                    <form action="actionE.php"
                        method="post">
                        <label for="usrname"
                            class="text-left">Telemóvel</label>
                        <input type="text"
                            id="usrname"
                            name="usrname"
                            value=""
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            pattern=".{9}"
                            maxlength="9" />

                        <p></p>
                        <input id="myBtn2"
                            type="submit"
                            value="OK"
                            class="btn btn-secondary">

                    </form>

                    <p></p>
                    <div class="d-flex justify-content-between">
                        <a href="login.php">
                            <span class="text-left">Login</span>
                        </a>
                        <span>&Tab;</span>
                    </div>


                </div>
            </div>
        </div>
    </div>


</body>
<?php
include('footer.php');
?>