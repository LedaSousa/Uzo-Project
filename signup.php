<?php
include 'header.php';
?>


<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        rel="stylesheet"
        id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous">

    <link rel="stylesheet"
        type="text/css"
        href="assets/css/signup.css">


    <title>Registo</title>




<body style="background-color: #ababab;">



    <div class="row py-5">

        <div class="col-lg-4 mx-auto">
            <div class="card rounded shadow border-0">
                <div class="card-body p-5 bg-white rounded">




                    <h3 class="text-center">Registo</h3>

                    <form action="actionR.php"
                        method="post">
                        <label for="usrname"
                            class="text-left">Telemóvel</label>
                        <input type="text"
                            id="usrname"
                            name="usrname"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            pattern=".{9}"
                            maxlength="9"
                            required />

                        <label for="email"
                            class="text-left">Email</label>
                        <input type="email"
                            id="email"
                            name="email"
                            required />


                        <label for="psw"
                            class="text-left">Password</label>

                        <input type="password"
                            id="psw"
                            name="psw"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            required>
                        <span class="text-white">FKLD9WTUXjgKrFQH8UWywSar</span>




                        <input id="myBtn"
                            type="submit"
                            value="N OK"
                            class="btn btn-secondary"
                            disabled>


                    </form>
                    <p></p>

                    <div class="d-flex justify-content-between">
                        <a href="login.php">
                            <span class="text-left">Login</span>
                        </a>
                    </div>




                    <div id="message">
                        <h3>Autenticação:</h3>
                        <p id="letter"
                            class="invalid">Letra <b>minúscula</b></p>
                        <p id="capital"
                            class="invalid">Letra <b>maiúscula</b></p>
                        <p id="number"
                            class="invalid"><b>Número</b></p>
                        <p id="length"
                            class="invalid">+ <b>8 carateres</b></p>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"
        src="assets/js/signup.js"></script>
</body>

<?php
include('footer.php');
?>