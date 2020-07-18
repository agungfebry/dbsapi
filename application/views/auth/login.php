<div class="container mt-3">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
      <div class="login-brand pt-2">
        <img src="<?= base_url(); ?>/assets/img/stisla-fill.svg" alt="logo" width="75" class="shadow-light rounded-circle">
      </div>

      <div class="card card-primary mt-n4">
        <div class="card-header">
          <h4 class="mx-auto">Login</h4>
        </div>

        <?= $this->session->flashdata('message'); ?>

        <div class="card-body">
          <form method="POST" action="<?= base_url(); ?>auth">
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" name="email" type="email" class="form-control" value="<?= set_value('email'); ?>">
              <?= form_error('email', '<small class="text-danger">','</small>'); ?>
            </div>

            <div class="form-group">
              <div class="d-block">
               <label for="password" class="control-label">Password</label>
             </div>
             <input id="password" name="password" type="password" class="form-control">
             <?= form_error('password', '<small class="text-danger">','</small>'); ?>
           </div>

          <div class="form-group mt-5">
            <button type="submit" class="btn btn-primary btn-lg btn-block">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
