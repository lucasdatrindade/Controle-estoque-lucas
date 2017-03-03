<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h2 class="page-header">Adicionar Cliente</h2>
    </div>
    <div class="col-md-12">
        <form action="<?= base_url() ?>index.php/clientes/salvar_cliente" method="post">
            <div class="form-group">
                <label for="inputNome">Nome</label>
                <input class="form-control" type="text"
                       id="inputNome" name="nome_c" placeholder="Nome do cliente..." required>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input class="form-control" type="text"
                       id="inputEmail" name="email" placeholder="Email..." required>
            </div>
            <div class="form-group">
                <label for="inputTelefone">Telefone</label>
                <input class="form-control" type="text"
                       id="inputTelefone" name="telefone" placeholder="Telefone..." required>
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



