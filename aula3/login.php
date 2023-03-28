<?php 
    include '../inc/cabecalho.php'; 
    include '../component/navbar.php';
?>

    </head>
    <body>
        <div class="container-fluid">

        <?= navbar_text('Insira seus dados abaixo para acessar o sistema.') ?>

            <div class="col-md-4 col-sm-7 mx-auto">
                <form method="POST" class="text-center border border-light p-5" action="home.php">
                    <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">
                    <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
                    <button class="btn btn-info my-4 btn-block" type="submit">Enviar</button>
                </form>
            </div>
        </div>

        <?php include '../inc/rodape.php' ?>
    </body>
</html>