<!-- Section: Pricing v.3 -->
<section class="text-center my-5 wow" data-wow-delay="0.3s">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Acesso de administrador</h2>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto mb-5 grey-text">Você possui acesso irrestrito a todas as páginas.</p>

    <!-- Grid row -->
    <div class="row mx-0">
    
    <?php
        foreach ($_SESSION['permissions'] as $key => $value) {
            if( !is_null($value['menu']) ) {
                echo '
                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12 mb-lg-0">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="mb-4">'.$value['menu'].'<sup>'.$value['menu_description'].'</sup></h5>
                                <div class="d-flex justify-content-center mb-2">
                                    <div class="card-circle d-flex justify-content-center align-items-center">
                                        <i class="fas fa-home light-blue-text"></i>
                                    </div>
                                </div>
                                <a href="'. BASE_URL . $value['route'] .'" class="btn btn-light-blue btn-rounded">Acessar</a>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
    ?>
    <!-- Grid column -->

    </div>
    <!-- Grid row -->

</section>
<!-- Section: Pricing v.3 -->