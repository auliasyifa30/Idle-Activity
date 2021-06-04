<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container">
  <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
<div class="row gutters">

<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
  <div class="card-body">
    <div class="col-md-12">
        <form>
        <div class="form-group ">
          <label for="oldPassword">Date</label>
          <input type="date" class="form-control" id="oldPassword">
        </div>

        <div class="form-group">
          <label for="newPassword">Description</label>
          <textarea id="description" class="form-control" name="description" placeholder="Enter Your Activity ..."></textarea>
          
        </div>

        <div class="form-group">
          <label for="confirmPassword">Attached File  : </label>
          <input type="file" id="myfile" name="myfile"><br><br>
        </div>
      </div>
</form>
      
    <div class="row gutters">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="text-right">
          <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<?= $this->endSection(); ?>