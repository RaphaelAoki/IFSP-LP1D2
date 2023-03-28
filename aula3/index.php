    <?php 
        include '../inc/cabecalho.php'; 
        include '../component/navbar.php';
    ?>

    </head>
    <body>
        <div class="container-fluid">

            <?= navbar_text('Seja bem-vid@ ao nosso site!') ?>

            <div class="col-md-6 col-sm-9 mx-auto">
                <form method="POST" class="text-center border border-light p-5" action="display.php">

                    <p class="h4 mb-4">Cadastre-se!</p>

                    <div class="form-row mb-4">
                        <div class="col">
                            <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
                        </div>
                        <div class="col">
                            <input type="text" id="snome" name="snome" class="form-control" placeholder="Sobrenome">
                        </div>
                    </div>

                    <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">

                    <div class="form-group purple-border">
                        <label for="mensagem">Deixe aqui a sua mensagem!</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
                    </div>

                    <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                        Telefone com DDD
                    </small>


                    <button class="btn btn-info my-4 btn-block" type="submit">Enviar</button>
                </form>
            </div>
        </div>

        <?php include '../inc/rodape.php' ?>
    </body>
</html>