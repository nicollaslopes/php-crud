<div class="modal fade" id="modalExclusao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-inline" method="POST" action="../controller/deletaUsuario.php">
          <div class="modal-footer">
            <input type="hidden" name="id_funcionario" id="id_funcionario">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Excluir</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    $('#modalExclusao').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget)
        let recipient = button.data('whatever') 
        let modal = $(this)
        modal.find('.modal-title').text('Confirma a exclusão do funcionário?')
        modal.find('#id_funcionario').val(recipient)
        let cd = $('#id_funcionario')
    });
</script>
