<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

    <div class="jumbotron jumbotron-fluid">
		  <div class="container">
		    <h6 class="display-4"><h1>Welcome to System Monitoring Idle Activity</h1></h6>
		    <br>
		    <hr>
		    <p class="btn btn-primary">Your role : HR MANAGER
		  </div>
	</div>
</div>
<?= $this->endSection(); ?>