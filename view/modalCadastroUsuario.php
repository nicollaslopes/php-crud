<div class="modal fade" id="modalCadastroUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="../controller/cadastraUsuario.php" method="POST">

          <div class="form-group">
            <div class="modal-body">
                <label for="nome">Nome</label>
                <input type="text" name="nome" required>
                <br>
                <br>
                <label for="salario">Salário</label>
                <input type="text" name="salario" pattern="[0-9]+$" placeholder="apenas números" required>
                <br>
                <br>
                <label for="dtNascimento">Data de nascimento</label>
                <input type="date" name="dtNascimento" required>
                <br>
                <br>
                <label for="cargo">Cargo</label>
                <input type="text" name="cargo" required>
            </div>
          </div>
        
        <div class="modal-footer">
            <input type="hidden" name="id_funcionario" id="id_funcionario">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
      </form>
      </div>
    </div>
  </div>

<script>
    $('#modalCadastroUsuario').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-title').text('Cadastrar funcionário')
        modal.find('#id_funcionario').val(recipient)
        let cd = $('#id_funcionario')
    });

</script>