<!-- Section: Pricing v.3 -->
<section class="text-center my-5 wow" data-wow-delay="0.3s">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Agente de RH</h2>

    <!-- Grid row -->
    <div class="row mx-0">
        <div class="col">
            <!-- Grid column -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lista de colaboradores</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Perfil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $users = show($pdo);
                                if (isset($users)) {
                                    foreach ($users as $item) {
                                        echo '<tr>
                                            <td>'. $item['name'] .'</td>
                                            <td>'. $item['email'] .'</td>
                                            <td>'. $item['profile'] .'</td>
                                        </tr>';
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Grid row -->

</section>
<!-- Section: Pricing v.3 -->