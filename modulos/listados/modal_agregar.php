<?php 
  $select = $Invitados->selectEventos($_SESSION['id_usuario']);
?>

<form id="frmAgregarInvitado" onsubmit="return agregarInvitado()">
  
  <!-- Modal -->
  <div class="modal fade" id="modal_agregar_invitado" tabindex="-1" aria-labelledby="modal_agregar_invitado" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_agregar_invitadoLabel">Agregar invitado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php echo $select; ?>
          <label for="nombre_invitado">Nombre del invitado</label>
          <input type="text" name="nombre_invitado" id="nombre_invitado" class="form-control" required>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-purple">Guardar</button>
        </div>
      </div>
    </div>
  </div>

</form>