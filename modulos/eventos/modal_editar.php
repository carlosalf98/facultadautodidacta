<form id="frmEditarEvento" onsubmit="return actualizarEvento()">
  
  <!-- Modal -->
  <div class="modal fade" id="modal_editar_evento" tabindex="-1" aria-labelledby="modal_editar_evento" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_editar_eventoLabel">Editar evento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="text" name="id_evento" id="id_evento" hidden>
            <label for="nombre_eventou">Nombre del evento</label>
            <input type="text" class="form-control" id="nombre_eventou" name="nombre_eventou" required>
            <label for="hora_iniciou">Hora Inicio</label>
            <input type="time" class="form-control" id="hora_iniciou" name="hora_iniciou" required>
            <label for="hora_finu">Hora Fin</label>
            <input type="time" class="form-control" id="hora_finu" name="hora_finu" required>
            <label for="fechau">Fecha</label>
            <input type="date" class="form-control" id="fechau" name="fechau" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-warning">Actualizar</button>
        </div>
      </div>
    </div>
  </div>

</form>