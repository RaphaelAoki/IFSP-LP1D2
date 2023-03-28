<?php include '../inc/cabecalho.php' ?>

    <style>

        html,
        body,
        header,
        .jarallax {
          height: 700px;
        }

        @media (max-width: 740px) {
          html,
          body,
          header,
          .jarallax {
            height: 100vh;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {
          html,
          body,
          header,
          .jarallax {
            height: 100vh;
          }
        }

        @media (min-width: 560px) and (max-width: 650px) {
          header .jarallax h1 {
            margin-bottom: 1.5rem !important;
          }
          header .jarallax h5 {
            margin-bottom: 1.5rem !important;
          }
        }

        .top-nav-collapse {
            background-color: #3f51b5!important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent!important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5!important;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5!important;
            }
        }
        h5 {
            letter-spacing: 3px;
        }
    </style>
</head>
<body>

    <header>
        <?php include '../inc/navbar.php' ?>
        <?php include '../inc/intro-about.php' ?>
    </header>

    <main>
        <div class="container">
            <?php include '../inc/teamv3.php' ?>
            <?php include '../inc/features.php' ?>
            <?php include '../inc/gallery.php' ?>
            <?php include '../inc/contact.php' ?>
        </div>
    </main>

    <?php include '../inc/footer.php' ?>
    <?php include '../inc/rodape.php' ?>
    <script>
        $(document).ready(() => {
          new WOW().init();
        });

        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
        });
    </script>
</body>
</html>
