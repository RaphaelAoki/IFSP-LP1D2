<!-- Section: Pricing v.3 -->
<section class="text-center my-5 wow" data-wow-delay="0.3s">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Diretor de RH</h2>

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
                                <th scope="col">#</th>
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
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary edit"><i class=""></i></button>
                                            
                                            </td>
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

<!-- Modal -->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>