<!-- Nombre -->
  <div class="mb-3">
    <label for="name" class="form-label">Nombre Completo</label>
    <input type="text" class="form-control" name="name" value="<?= $name ?>">
  </div>
  <!-- Nombre end -->

  <!-- Email -->
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="<?= $email ?>">
  </div>
  <!-- Email end -->

  <!-- Telefono -->
  <div class="mb-3">
    <label for="phone" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="phone" value="<?= $phone ?>">
  </div>
  <!-- Telefono end -->

  <!-- Comentarios -->
  <div class="mb-3">
    <label for="comments" class="form-label">Tu consulta</label>
    <textarea class="form-control" name="comments" rows="3"><?= $comments ?></textarea>
  </div>
  <!-- Comentarios end -->

  <div class="mb-3 form-check">
    <input checked type="checkbox" class="form-check-input" name="newsletter">
    <label class="form-check-label" for="newsletter">Quiero recibir novedades sobre nuevos emprendimientos</label>
  </div>

  <div class="content_buton_send">
    <button 
      id="send" 
      class="btn btn-primary" 
      type="button" 
      onclick="submitFormContacto('form_contacto')">ENVIAR
      <div id="sending_form" class="transition">
        <div class="spinner-border text-warning" role="status">
          <span class="visually-hidden">Enviando...</span>
        </div>
      </div>
    </button>
  </div>

</form> 