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
      
        <hr>
        <h5 class="user-name"><span><?= user()->fullname; ?></span></h5>
        <h6 class="user-email"><span><?= user()->username; ?></span></h6>
      </div>
      
    </div>
  </div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
  <div class="card-body">
    <div class="col-md-12">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h6 class="mb-2 text-primary">Change Password</h6>
        <hr>
        <br>
      </div>
        <form>
        <div class="form-group ">
          <label for="oldPassword">Old Password</label>
          <input type="text" class="form-control" id="oldPassword" placeholder="Old Password ...">
        </div>

        <div class="form-group">
          <label for="newPassword">New Password</label>
          <input type="text" class="form-control" id="newPassword" placeholder="New Password ...">
        </div>

        <div class="form-group">
          <label for="confirmPassword">Confirm Password</label>
          <input type="text" class="form-control" id="confirmPassword" placeholder="Confirm Password ...">
        </div>
      </div>
</form>
      
    <div class="row gutters">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="text-right">
          <button type="submit" name="submit" class="btn btn-secondary">Cancel</button>
          <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<?= $this->endSection(); ?>