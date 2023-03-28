<?php include '../inc/cabecalho.php' ?>
<?php include '../lib/form_data.php' ?>
<?php include '../lib/date_time.php' ?>
    </head>
    <body>
        <div class="container">
            <div class="col-md-6 mx-auto">
                <div class="card card-cascade">

                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/men.webp" alt="Card image cap">
                        <a><div class="mask rgba-white-slight"></div></a>
                    </div>

                    <div class="card-body card-body-cascade text-center">
                        <h4 class="card-title"><strong><?= $_POST['nome'].' '.$_POST['snome'] ?></strong></h4>
                        <h6 class="font-weight-bold indigo-text py-2"><?= $_POST['email'] ?></h6>
                        <h6 class="font-weight-bold indigo-text py-2"><?= $_POST['telefone'] ?></h6>
                        <p class="card-text"><?= $_POST['mensagem'] ?></p>
                    </div>

                    <div class="card-footer text-muted text-center"><?= dataBR() ?> </div>

                </div>
            </div>
        </div>
        <?php include '../inc/rodape.php' ?>
    </body>
</html>