<!DOCTYPE html>
<html>

<style>
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active,
.accordion:hover {
    background-color: #ccc;
}

.panel {
    padding: 0 18px;
    display: none;
    border: 1px solid black;
    overflow: hidden;

}
</style>

<title>Resumo</title>





<?php
include 'header.php';
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
<html lang="en">


<body style="background-color: lightgrey">

    <div class="container py-5">
        <h2 class="text-center text-secondary mb-0"
            style="font-family: Open Sans;">Resumo</h2>

        <?php

        if (isset($_GET['par'])) {
            $par = $_GET['par'];
            $param = "A box é ";
            $pieces = explode(",", $par);
            foreach ($pieces as $key => $value) {
                if ($value and $key < 6) {
                    $param .= $value . ' ';
                }
                if ($key == 6) {
                    substr_replace($param, "", -1);
                    $param .= ' com o preço mensal de ' . $value . '.';
                }
            }
        }

        if (isset($_GET['gb'])) {
            $gb = $_GET['gb'];
            $min = $_GET['min'];
            $preco = $_GET['preco'];
            $param = "O seu tarifario contem " . $gb . ' Gb trafego incluído e com ' . $min . ' min/sms incluido com um preço mensal de ' . $preco . '€';
        }

        // telemoveis DIOGO
        if (isset($_GET['tel'])) {
            $gb = $_GET['tel'];
            $preco = $_GET['preco'];
            $param = "Adquiriu o telemóvel <strong>" . $gb . '</strong> pelo preço de ' . $preco . '€';
        }

        // telemoveis DIOGO
        if (isset($_GET['ace'])) {
            $gb = $_GET['ace'];
            $preco = $_GET['preco'];
            $param = "Adquiriu o acessorio <strong>" . $gb . '</strong> pelo preço de ' . $preco . '€';
        }


        echo ('<button class="accordion">' . $param . '</button>')
        ?>



        <div class="panel">
            <pre style="background-color: white">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed vitae libero earum aperiam? Quod
                        tenetur saepe enim! At neque mollitia hic impedit, unde atque, sed, delectus debitis quisquam
                        aut cumque.
                        Animi nulla possimus totam soluta labore veritatis fugiat nobis ex accusantium facilis error
                        blanditiis recusandae similique voluptates, quas numquam maiores ducimus aliquam placeat, iste
                        ad autem neque. Vel, soluta quasi?
                        Doloribus voluptatibus eaque tenetur animi. Quaerat totam sapiente vero dignissimos id non
                        provident obcaecati voluptate dolores quam maxime tempora ex atque, praesentium repudiandae,
                        soluta fugit aperiam, labore quos ab distinctio.
                        Dolorum autem perferendis iste hic libero necessitatibus pariatur corporis consequatur ad.
                        Rerum, deserunt? Facere dignissimos id aliquam exercitationem neque non. Minus dignissimos quia
                        debitis itaque inventore in officiis qui numquam.
                        Eaque libero magni aspernatur dicta delectus! Nulla aliquam facilis esse voluptatibus in tenetur
                        saepe hic at ut adipisci modi quas est libero asperiores, veniam voluptas nam obcaecati aperiam
                        sed sunt?</pre>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>Dados de adesão</h3>

                <!-- columns -->
                <div class="form-group">
                    <div class="form-row align-items-center">
                        <div class="col-md-6 mb-3">
                            <!-- Input type text -->
                            <input type="text"
                                class="form-control"
                                name="input_id_0"
                                id="input_id_0"
                                placeholder="Nome completo">
                        </div>

                        <div class="col-md-3 mb-3">
                            <!-- Input type text -->
                            <input type="text"
                                class="form-control"
                                name="input_id_1"
                                id="input_id_1"
                                placeholder="Telemóvel">
                        </div>

                        <div class="col-md-3 mb-3">
                            <!-- Input type text -->
                            <input type="email"
                                class="form-control"
                                name="input_id_2"
                                id="input_id_2"
                                placeholder="Email">
                        </div>

                    </div>
                </div>

                <!-- Input type text -->
                <div class="form-group">
                    <input type="text"
                        class="form-control"
                        name="input_id_3"
                        id="input_id_3"
                        placeholder="Morada">
                </div>
                <!-- Input type text -->
                <div class="form-group">
                    <input type="text"
                        class="form-control"
                        name="input_id_4"
                        id="input_id_4"
                        placeholder="Morada 2">
                </div>

                <!-- columns -->
                <div class="form-group">
                    <div class="form-row align-items-center">
                        <div class="col-md-6 mb-3">
                            <!-- Input type text -->
                            <input type="text"
                                class="form-control"
                                name="input_id_5"
                                id="input_id_5"
                                placeholder="Codigo Postal">
                        </div>

                        <div class="col-md-3 mb-3">
                            <!-- Input type text -->
                            <input type="text"
                                class="form-control"
                                name="input_id_6"
                                id="input_id_6"
                                placeholder="Concelho">
                        </div>

                        <div class="col-md-3 mb-3">
                            <!-- Input type text -->
                            <input type="text"
                                class="form-control"
                                name="input_id_7"
                                id="input_id_7"
                                placeholder="Distrito">
                        </div>
                    </div>
                </div>


                <h3>Documentação</h3>


                <!-- columns -->
                <div class="form-group">
                    <div class="form-row align-items-center">
                        <div class="col-md-6 mb-3">
                            <!-- Input type text -->
                            <input type="text"
                                class="form-control"
                                name="input_id_6"
                                id="input_id_6"
                                placeholder="Contribuinte">
                        </div>

                        <div class="col-md-6 mb-3">
                            <!-- Input type text -->
                            <input type="text"
                                class="form-control"
                                name="input_id_7"
                                id="input_id_7"
                                placeholder="Identificação">
                        </div>
                    </div>
                </div>

                <h3>Dados de faturação</h3>

                <h5>Fatura eletrónica</h5>
                <!-- columns -->
                <div class="form-group">
                    <div class="form-row align-items-center">
                        <div class="col-md-6 mb-3">
                            <!-- Input type text -->
                            <input type="text"
                                class="form-control"
                                name="input_id_6"
                                id="input_id_6"
                                placeholder="Email">
                        </div>

                        <div class="col-md-6 mb-3">
                            <!-- Input type text -->
                            <input type="text"
                                class="form-control"
                                name="input_id_7"
                                id="input_id_7"
                                placeholder="Telemóvel para notificações">
                        </div>
                    </div>
                </div>

                <h3>Método de pagamento</h3>

                <h5>Débito direto</h5>
                <!-- columns -->
                <div class="form-group">
                    <div class="form-row align-items-center">
                        <div class="col-md-6 mb-3">
                            <!-- Input type text -->
                            <input type="text"
                                class="form-control"
                                name="input_id_6"
                                id="input_id_6"
                                value="PT50"
                                placeholder="PT50">
                        </div>

                        <div class="col-md-6 mb-3">
                            <!-- Input type text -->
                            <input type="text"
                                class="form-control"
                                name="input_id_7"
                                id="input_id_7"
                                placeholder="Nome do titular da conta bancária (opcional)">
                        </div>
                    </div>
                    Preenche no campo acima o IBAN da tua conta bancária sem espaços.
                </div>

                <br><br><br>




                <!-- Input type checkbox -->
                <div class="form-group mb-2 mr-2">
                    <div class="custom-control custom-switch custom-control-inline">
                        <input class="custom-control-input"
                            type="checkbox"
                            name="ic_id_4"
                            id="ic_id_4"
                            value="1">
                        <label class="custom-control-label mr-2"
                            for="ic_id_4">Li e aceito os <a
                                href="https://www.uzo.pt/Documentos/condicoes-utilizacao/condicoes-utilizacao-site.pdf">termos
                                e condições de utilização do site</a> e as <a
                                href="https://www.uzo.pt/Documentos/condicoes-utilizacao/condicoes-da-oferta.pdf">
                                condições da oferta</a>.</label>
                    </div>
                </div>

                <br>
                <p>Autorizo o tratamento dos meus dados para efeito de comunicações de marketing da MEO.</p>


                <!-- Input type raio -->
                <div class="form-group mb-2 mr-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input"
                            type="radio"
                            name="radio_name8"
                            id="ir_id8"
                            value="1"
                            checked>
                        <label class="custom-control-label mr-2"
                            for="ir_id8">Autorizo</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input"
                            type="radio"
                            name="radio_name8"
                            id="ir_id9"
                            value="2">
                        <label class="custom-control-label mr-2"
                            for="ir_id9">Não Autorizo</label>
                    </div>
                </div>
                <p>Inclui o tratamento de dados pessoais, de tráfego, de localização geográfica, perfil e/ou
                    consumo. Os contactos são maioritariamente realizados por SMS ou correio eletrónico, mas
                    também
                    poderão ser realizados por outros meios.</p>
                <br><br><br>


                <!-- Input type raio -->
                <div class="form-group mb-2 mr-2">
                    <p>Autorizo a partilha dos meus dados a empresas do Grupo Altice Portugal
                        (a) para efeito de comunicações de marketing.</p>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input"
                            type="radio"
                            name="radio_name9"
                            id="ir_id10"
                            value="1"
                            checked>
                        <label class="custom-control-label mr-2"
                            for="ir_id10">Autorizo</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input"
                            type="radio"
                            name="radio_name9"
                            id="ir_id11"
                            value="2">
                        <label class="custom-control-label mr-2"
                            for="ir_id11">Não Autorizo</label>
                    </div>
                    <br>
                    <p>
                        Inclui a transmissão de dados pessoais, de tráfego, de localização geográfica,
                        perfil e/ou consumo. Se escolher Autorizo, poderá ser contactado por outras empresas
                        do Grupo Altice Portugal
                        para apresentação de conteúdos ou de produtos e serviços do seu interesse. Os
                        contactos são maioritariamente realizados por SMS ou correio eletrónico, mas também
                        poderão ser realizados
                        por outros meios.
                        (a) constituído pela PT Portugal SGPS, S.A. e pelas empresas direta ou indiretamente
                        detidas por esta.
                    </p>
                </div>


                <br><br>

                <button type="submit"
                    class="btn btn-primary btn-lg btn-block"
                    name="submit"
                    id="submit">Aderir</button>

                <br><br>


            </div>
        </div>
    </div>
</body>

</html>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>
<!-- 
<?php
include 'footer.php';
?> -->