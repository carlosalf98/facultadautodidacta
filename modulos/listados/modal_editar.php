<?php
  $selecte = $Invitados->selectEventosEditar($_SESSION['id_usuario']);
?>

<form id="frmEditarInvitado" onsubmit="return actualizarInvitado()">
  
  <!-- Modal -->
  <div class="modal fade" id="modal_editar_invitado" tabindex="-1" aria-labelledby="modal_editar_invitado" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_editar_invitadoLabel">Editar Invitado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="text" name="id_invitado" id="id_invitado" hidden>
          <?php echo $selecte; ?>
          <label for="nombre_invitadou">Nombre del invitado</label>
          <input type="text" name="nombre_invitadou" id="nombre_invitadou" class="form-control" required>
          <label for="emailu">Email</label>
          <input type="email" name="emailu" id="emailu" class="form-control" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Actualizar</button>
        </div>
      </div>
    </div>
  </div>

</form>