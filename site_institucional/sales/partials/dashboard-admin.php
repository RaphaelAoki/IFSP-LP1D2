<!-- Section: Pricing v.3 -->
<section class="text-center my-5 wow" data-wow-delay="0.3s">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Diretor de Vendas</h2>

    <!-- Grid row -->
    <div class="row mx-0">
        <div class="col">
            <!-- Grid column -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vendas</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Vendedor</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sales = show();
                                if (isset($sales)) {
                                    foreach ($sales as $item) {
                                        echo '<tr>
                                            <td>'. $item['user'] .'</td>
                                            <td>'. $item['product'] .'</td>
                                            <td>'. $item['qtde'] .'</td>
                                            <td>'. $item['date'] .'</td>
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