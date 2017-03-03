<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h2 class="page-header">Adicionar Produto</h2>
    </div>
    <div class="col-md-12">
        <form action="<?= base_url() ?>index.php/produtos/salvar_produto" method="post">

            <div class="form-group">
                <label for="inputNome">Nome</label>
                <input class="form-control" type="text"
                       id="inputNome" name="nome" placeholder="Nome do produto..." required>
            </div>
            <div class="form-group">
                <label for="inputDesc">Descrição</label>
                <input class="form-control" type="text"
                       id="inputDesc" name="desc" placeholder="Descrição..." required>
            </div>
            <div class="form-group">
                <label for="inputPreco">Preço</label>
                <input class="form-control" type="text"
                       id="inputPreco" name="preco" placeholder="Preço..." required>
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




