<?= $this->extend('plantillas/plantilla_admin') ?>
<?= $this->section('content') ?>
<center>
<div class="login-box">
  <div class="login-logo">
    <?= $this->include("login/contrasena_svg");?>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicia Sesión</p>

      <?= form_open("validar"); ?>
        <div class="input-group mb-3">
          <?= form_input('email','',['class'=>'form-control','placeholder'=>'Correo Electrónico']); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <?= form_password('password','',['class'=>'form-control','placeholder'=>'Contraseña']); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
          <?= form_submit('','Ingresar',['class'=>'btn btn-primary btn-block']); ?>
          </div>
          <!-- /.col -->
        </div>
      <?= form_close(); ?>
      <div class="row">
        <p class="mb-1">
          <a href="<?= route_to('App\Controllers\ForgotPassController::index') ?>">Olvide mi contraseña</a>
        </p><hr/>
        <p class="mb-0">
          <a href="<?= route_to('App\Controllers\RegisterController::index') ?>" class="text-center">Registrar nuevo usuario</a>
        </p>
      </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</center>
<?= $this->endSection() ?>