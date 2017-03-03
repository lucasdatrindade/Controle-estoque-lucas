<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h2 class="page-header">Atualizar Produto</h2>
    </div>
    <div class="col-md-12">
        <form action="<?= base_url() ?>index.php/produtos/salvar_atualizacao" method="post">
            <div class="form-group">
                <input type="hidden" id="id" name="id" 
                       value="<?= $produtos[0]->id; ?>">
                <label for="inputNome">Nome</label>
                <input class="form-control" type="text"
                       id="nome" name="nome"
                       value="<?= $produtos[0]->nome; ?>" required>
            </div>
            <div class="form-group">
                <label for="inputDesc">Descrição</label>
                <input class="form-control" type="text"
                       id="desc" name="desc"
                       value="<?= $produtos[0]->desc; ?>" required>
            </div>
            <div class="form-group">
                <label for="inputPreco">Preço</label>
                <input class="form-control" type="text"
                       id="preco" name="preco"
                       value="<?= $produtos[0]->preco; ?>" required>
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


