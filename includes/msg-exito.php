<!-- Msg Exito Newsletter -->
<?php if (isset($msg_exito)): ?>

  <div id="msg_exito" class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>¡Consulta recibida!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <ul style="padding: 0;">
      <li>- <?php echo $msg_exito; ?></li>
    </ul>
  </div>

<?php endif ?>
<!-- Msg. Exito Newsletter end -->