<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo BASE_URL . 'admin/' ?>"><strong>Dashboard</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
            <?php
                foreach ($_SESSION['permissions'] as $key => $value) {
                    if( !is_null($value['menu']) ) {
                        echo '<li class="nav-item active">
                            <a class="nav-link" href="'. BASE_URL . $value['route'] .'">'.$value['menu'].'<sup>'.$value['menu_description'].'</sup><span class="sr-only"></span></a>
                        </li>';
                    }
                }
            ?>
            </ul>
        </div>
    </div>
</nav>