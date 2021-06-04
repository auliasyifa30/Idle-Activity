<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container">
  <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
  <div class="card-body">
    <div class="account-settings">
      <div class="user-profile">
        <div class="user-avatar">
          <img src="<?= base_url('/img/' . user()->user_image); ?>" alt="<?= user()->username; ?>">
        </div>
      
      </div>
      
    </div>
  </div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
  <div class="card-body">
    <div class="row gutters">
      
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-group">
          <label for="fullName">Full Name</label>
          <input type="text" class="form-control" id="fullName" placeholder="<?= user()->fullname; ?>" readonly>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-group">
          <label for="eMail">Email</label>
          <input type="email" class="form-control" id="eMail" placeholder="<?= user()->email; ?>" readonly>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" placeholder="<?= user()->username; ?>" readonly>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-group">
          <label for="password">Role</label>
          <input type="password" class="form-control" placeholder="<?= $user->name;?>" readonly>
        </div>
      </div>
    </div>

    <div class="row gutters">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="text-right">
          <a href="<?= base_url('admin/userList'); ?>">&laquo; back to user list</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<?= $this->endSection(); ?>