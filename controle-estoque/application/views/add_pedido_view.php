<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h2 class="page-header">Adicionar pedido</h2>
    </div>
    <div class="col-md-12">
        <form action="<?= base_url() ?>index.php/pedidos/salvar" method="post">

            <div class="form-group">
                <label for="produto">Selecione o produto</label>
                <select id="idprod" class="form-control" name="prod_id" required>
                    <option value="0"> --- </option>
                    <?php foreach ($produtos as $prod) { ?>
                        <option value="<?= $prod->id ?>"> <?= $prod->nome; ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="cliente">Selecione o cliente</label>
                <select id="idclien" class="form-control" name="clien_id" required>
                    <option value="0"> --- </option>
                    <?php foreach ($clientes as $clien) { ?>
                        <option value="<?= $clien->id ?>"> <?= $clien->nome; ?> </option>
                    <?php } ?>
                </select>
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


