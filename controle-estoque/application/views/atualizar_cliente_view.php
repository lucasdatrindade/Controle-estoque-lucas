<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h2 class="page-header">Atualizar Cliente</h2>
    </div>
    <div class="col-md-12">
        <form action="<?= base_url() ?>index.php/clientes/salvar_atualizacao" method="post">
            <div class="form-group">
                <input type="hidden" id="id" name="id" 
                       value="<?= $clientes[0]->id; ?>">
                <label for="inputNome">Nome</label>
                <input class="form-control" type="text"
                       id="nome" name="nome"
                       value="<?= $clientes[0]->nome; ?>" required>
            </div>
            <div class="form-group">
                <label for="inputNome">Email</label>
                <input class="form-control" type="text"
                       id="email" name="email"
                       value="<?= $clientes[0]->email; ?>" required>
            </div>
            <div class="form-group">
                <label for="inputNome">Telefone</label>
                <input class="form-control" type="text"
                       id="telefone" name="telefone"
                       value="<?= $clientes[0]->telefone; ?>" required>
            </div>
            <div class="form-group">
                <input class="btn btn-success"
                       type="submit" value="Salvar">
                <input class="btn btn-default"
                       type="reset" value="Cancelar">
            </div>
        </form>
    </div>
</div>


