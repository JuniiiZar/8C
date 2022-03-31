<?= $this->extend('plantillas/plantilla_admin') ?>
<?= $this->section('content') ?>
<center>
<div class="login-box">
  <div class="login-logo">
  <?= $this->include("register/contrasena_svg");?>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Registro Nuevo Usuario</p>

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Correo Electrónico">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form><hr>
      <div class="row">
        <p class="mb-1 text-left">
          <a href="<?= route_to('App\Controllers\LoginController::index') ?>">Inicio</a><hr>
        </p>
      </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</center>
<?= $this->endSection() ?>