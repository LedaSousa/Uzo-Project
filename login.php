<?php
session_start();
include 'header.php';


if (isset($_GET['erro'])) {
    if ($_GET['erro'] == 1) {
        echo  "<script>alert('Telemóvel ou Password Incorrectos!');</script>";
    }
    if ($_GET['erro'] == 0) {
        echo  "<script>alert('Cliente registado com Sucesso!');</script>";
    }
    if ($_GET['erro'] == 2) {
        echo  "<script>alert('Cliente já se encontra registado!');</script>";
    }
    if ($_GET['erro'] == 3) {
        echo  "<script>alert('Cliente não está registado!');</script>";
    }
    if ($_GET['erro'] == 4) {
        echo  "<script>alert('Enviada nova P@ssword1');</script>";
    }
}



?>


<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        rel="stylesheet"
        id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous">

    <script type="text/javascript"
        src="assets/js/login.js"></script>
    <link rel="stylesheet"
        type="text/css"
        href="assets/css/login.css">



    <title>Login</title>

<body style="background-color: #ababab;">

    <div class="row py-5">
        <div class="col-lg-4 mx-auto">
            <div class="card rounded shadow border-0">
                <div class="card-body bg-white rounded">

                    <h3 class="text-center">Login</h3>

                    <form action="action.php"
                        method="post">
                        <label for="usrname"
                            class="text-left">Telemóvel</label>
                        <span></span>
                        <input type="text"
                            id="usrname"
                            name="usrname"
                            value=""
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            pattern=".{9}"
                            maxlength="9" />

                        <p></p>
                        <label for="psw"
                            class="text-left">Password</label>
                        <input type="password"
                            id="psw"
                            name="psw">


                        <p></p>
                        <input id="myBtn"
                            type="submit"
                            value="OK"
                            class="btn btn-success">


                    </form>

                    <p></p>
                    <div class="d-flex justify-content-between">

                        <a href="signup.php">
                            <span class="text-left">Registe-se</span>
                        </a>

                        <span>&Tab;</span>


                        <a href="signupE.php">

                            <span class="text-right">Nova password?</span>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>


</body>

<?php
include('footer.php');
?>