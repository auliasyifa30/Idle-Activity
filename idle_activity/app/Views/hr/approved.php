<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- DataTales Example -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Activity Idle</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                      <?php $i = 1; ?>
                        <tr>
                          <th scope="row"><?= $i++; ?></th>
                          <td></td>
                          <td></td>
                          <td>
                            <a href="#" class="btn btn-primary">Export</a>
                          </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>