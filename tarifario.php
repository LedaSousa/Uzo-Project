<?php
include('header.php');
?>

<head>
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="	https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<style>
.demo {
    padding: 30px 0
}

.pricingTable {
    text-align: center
}

body {
    padding: 0;
    margin: 0
}

.demo {
    background: #B2B2B2
}

h4 {
    color: #444
}

.pricingTable {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
    transition: all .3s ease 0s
}

.pricingTable:hover {
    box-shadow: 0 0 5px rgba(0, 0, 0, .8) inset, 0 0 10px rgba(0, 0, 0, .8)
}

.pricingTable svg {
    display: block;
    margin-left: -1px
}

.pricingTable .pricing-content {
    padding: 50px 0 30px;
    position: relative
}

.pricingTable .title {
    font-size: 2em;
    /* font-size: 35px; */
    font-weight: 600;
    color: #ae003d;
    text-transform: uppercase;
    margin: 0 0 10px
}

.pricingTable .pricing-content ul {
    padding: 0;
    margin: 0 0 30px;
    list-style: none
}

.pricingTable .pricing-content ul li {
    font-size: 18px;
    color: rgba(0, 0, 0, .3);
    line-height: 40px;
    text-transform: capitalize
}

.pricingTable .pricingTable-signup {
    display: inline-block;
    padding: 8px 50px;
    background: #ae003d;
    border-radius: 20px;
    font-size: 1.5em;
    /* font-size: 20px; */

    font-weight: 600;
    color: #fff;
    text-transform: uppercase;
    position: relative;
    transition: all .3s ease 0s
}

.pricingTable:hover .pricingTable-signup {
    box-shadow: 0 0 10px #ae003d
}

.pricingTable .pricingTable-signup:hover {
    color: #ae003d;
    background: #fff;
    box-shadow: 0 0 10px #ae003d, 0 0 10px #000 inset
}

.pricingTable.blue .title {
    color: #005c99
}

.pricingTable.blue .pricingTable-signup {
    background: #005c99
}

.pricingTable.blue:hover .pricingTable-signup {
    box-shadow: 0 0 10px #005c99
}

.pricingTable.blue .pricingTable-signup:hover {
    color: #005c99;
    background: #fff;
    box-shadow: 0 0 10px #005c99, 0 0 10px #000 inset
}

.pricingTable.red .title {
    color: #db2c29
}

.pricingTable.red .pricingTable-signup {
    background: #db2c29
}

.pricingTable.red:hover .pricingTable-signup {
    box-shadow: 0 0 10px #db2c29
}

.pricingTable.red .pricingTable-signup:hover {
    color: #db2c29;
    background: #fff;
    box-shadow: 0 0 10px #db2c29, 0 0 10px #000 inset
}

/* 0099ff */
.pricingTable.cyan .title {
    color: #0099ff
}

.pricingTable.cyan .pricingTable-signup {
    background: #0099ff
}

.pricingTable.cyan:hover .pricingTable-signup {
    box-shadow: 0 0 10px #0099ff
}

.pricingTable.cyan .pricingTable-signup:hover {
    color: #0099ff;
    background: #fff;
    box-shadow: 0 0 10px #0099ff, 0 0 10px #000 inset
}



@media only screen and (max-width:990px) {
    .pricingTable {
        margin-bottom: 30px
    }
}
</style>

<body>



    <div class="demo">
        <div class="container">
            <h1 class="display-4 text-center text-black">Tarifário</h1>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">


                        <svg x="0"
                            y="0"
                            viewBox="0 0 360 220">
                            <g>
                                <path fill="#ae003d"
                                    d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                        L0.732,193.75z"></path>
                            </g>

                            <text transform="matrix(1 0 0 1 109.7256 116.2686)"
                                fill="#fff"
                                font-size="78.4489">€0</text>
                            <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)"
                                fill="#fff"
                                font-size="29.0829">.09</text>
                            <text transform="matrix(1 0 0 1 233.9629 115.5303)"
                                fill="#fff"
                                font-size="15.4128">/min/sms</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Carregamento</h3>
                            <ul class="pricing-content">
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                            </ul>
                            <a href="myuzo.php"
                                class="pricingTable-signup">Alterar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable blue">
                        <svg x="0"
                            y="0"
                            viewBox="0 0 360 220">
                            <g>
                                <path fill="#005c99"
                                    d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                        L0.732,193.75z"></path>
                            </g>


                            <text transform="matrix(1 0 0 1 109.7256 116.2686)"
                                fill="#fff"
                                font-size="78.4489">€3</text>
                            <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)"
                                fill="#fff"
                                font-size="29.0829">.49</text>
                            <text transform="matrix(1 0 0 1 233.9629 115.5303)"
                                fill="#fff"
                                font-size="15.4128">/Semana</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Carregamento</h3>
                            <ul class="pricing-content">
                                <li><b>6GB</b> Trafego Incluído</li>
                                <li><b>250</b> min/sms incluidos</li>
                                <li>&nbsp;</li>
                            </ul>
                            <a href="myuzo.php"
                                class="pricingTable-signup">Alterar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable red">


                        <svg x="0"
                            y="0"
                            viewBox="0 0 360 220">
                            <g>
                                <path fill="#db2c29"
                                    d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                    c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                    s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                    L0.732,193.75z"></path>
                            </g>

                            <text transform="matrix(1 0 0 1 109.7256 116.2686)"
                                fill="#fff"
                                font-size="78.4489">€7</text>
                            <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)"
                                fill="#fff"
                                font-size="29.0829">.50</text>
                            <text transform="matrix(1 0 0 1 233.9629 115.5303)"
                                fill="#fff"
                                font-size="15.4128">/Mês</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Carregamento</h3>
                            <ul class="pricing-content">
                                <li><b>50MB</b> Trafego Incluído</li>
                                <li>minutos e sms gratis</li>
                                <li>&nbsp;</li>
                            </ul>
                            <a href="myuzo.php"
                                class="pricingTable-signup">Alterar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- fatura -->

    <div class="demo">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable cyan">
                        <svg x="0"
                            y="0"
                            viewBox="0 0 360 220">
                            <g>

                                <path fill="#0099ff"
                                    d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                        L0.732,193.75z"></path>



                            </g>
                            <text transform="matrix(1 0 0 1 109.7256 116.2686)"
                                fill="#fff"
                                font-size="78.4489">€7</text>
                            <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)"
                                fill="#fff"
                                font-size="29.0829">.50</text>
                            <text transform="matrix(1 0 0 1 233.9629 115.5303)"
                                fill="#fff"
                                font-size="15.4128">/Mês</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Fatura</h3>
                            <ul class="pricing-content">
                                <li><b>1GB</b> Trafego Incluído</li>
                                <li><b>1000</b> min/sms incluidos</li>
                                <li>&nbsp;</li>
                            </ul>
                            <a href="alterarfatura.php?gb=1&min=1000&preco=7.50"
                                class="pricingTable-signup">Aderir</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable">
                        <svg x="0"
                            y="0"
                            viewBox="0 0 360 220">
                            <g>
                                <path fill="#ae003d"
                                    d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                        L0.732,193.75z"></path>
                            </g>
                            <text transform="matrix(1 0 0 1 69.7256 116.2686)"
                                fill="#fff"
                                font-size="78.4489">€10</text>
                            <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)"
                                fill="#fff"
                                font-size="29.0829">.00</text>
                            <text transform="matrix(1 0 0 1 233.9629 115.5303)"
                                fill="#fff"
                                font-size="15.4128">/Mês</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Fatura</h3>
                            <ul class="pricing-content">
                                <li><b>3GB</b> Trafego Incluído</li>
                                <li><b>1000</b> min/sms incluidos</li>
                                <li>&nbsp;</li>
                            </ul>
                            <a href="alterarfatura.php?gb=3&min=1000&preco=10.00"
                                class="pricingTable-signup">Aderir</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable blue">
                        <svg x="0"
                            y="0"
                            viewBox="0 0 360 220">
                            <g>
                                <path fill="#005c99"
                                    d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                        L0.732,193.75z"></path>
                            </g>
                            <text transform="matrix(1 0 0 1 69.7256 116.2686)"
                                fill="#fff"
                                font-size="78.4489">€12</text>
                            <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)"
                                fill="#fff"
                                font-size="29.0829">.00</text>
                            <text transform="matrix(1 0 0 1 233.9629 115.5303)"
                                fill="#fff"
                                font-size="15.4128">/Mês</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Fatura</h3>
                            <ul class="pricing-content">
                                <li><b>6GB</b> Trafego Incluído</li>
                                <li><b>1000</b> min/sms incluidos</li>
                                <li>&nbsp;</li>
                            </ul>
                            <a href="alterarfatura.php?gb=6&min=1000&preco=12.00"
                                class="pricingTable-signup">Aderir</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable red">
                        <svg x="0"
                            y="0"
                            viewBox="0 0 360 220">
                            <g>
                                <path fill="#db2c29"
                                    d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                    c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                    s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                    L0.732,193.75z"></path>
                            </g>
                            <text transform="matrix(1 0 0 1 69.7256 116.2686)"
                                fill="#fff"
                                font-size="78.4489">€17</text>
                            <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)"
                                fill="#fff"
                                font-size="29.0829">.50</text>
                            <text transform="matrix(1 0 0 1 233.9629 115.5303)"
                                fill="#fff"
                                font-size="15.4128">/Mês</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Fatura</h3>
                            <ul class="pricing-content">
                                <li><b>15GB</b> Trafego Incluído</li>
                                <li><b>1000</b> min/sms incluidos</li>
                                <li>&nbsp;</li>
                            </ul>
                            <a href="alterarfatura.php?gb=15&min=1000&preco=10.00"
                                class="pricingTable-signup">Aderir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

<script>

</script>



<?php
include('footer.php');
?>