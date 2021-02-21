<ul class="nav side-menu">
  <?php
  if($_SESSION["PERMISOS"]=="ADMIN_MM"){
  ?>
  <li>
    <a href="administrar_empresa.php">
      <i class="fa fa-building"></i>
      Empresas
    </a>
  </li>
  <?php
  }
  ?>
  <li>
    <a href="administrar_usuarios.php">
      <i class="fa fa-users"></i>
      Usuarios
    </a>
  </li>
  <li>
    <a href="trabajador.php">
      <i class="fa fa-briefcase"></i>
      Trabajadores
    </a>
  </li>
  <li>
    <a href="evaluacion.php">
      <i class="fa fa-files-o"></i>
      Evaluaciones
    </a>
  </li>
</ul>
