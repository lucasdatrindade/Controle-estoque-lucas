<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h2 class="page-header">Atualizar Pedido</h2>
    </div>
    <div class="col-md-12">
        <form action="<?= base_url() ?>index.php/pedidos/salvar_atualizacao" method="post">
            <div class="form-group">
                <input type="hidden" id="idpedido" name="id" 
                       value="<?= $pedidos[0]->id; ?>">
            </div>
            <div class="form-group">
                <label for="produto">Selecionar Produto</label>
                <select id="id_p" class="form-control" name="id_p" required>
                    <option value="0"> --- </option>
                    <?php
                    foreach ($produtos as $prod) {
                        if ($pedidos[0]->id_p == $prod->id) {
                            ?>                        
                            <option value="<?= $prod->id ?>" selected> <?= $prod->nome; ?> </option>
                        <?php } else { ?>
                            <option value="<?= $prod->id ?>"> <?= $prod->nome; ?> </option>
                        <?php  } ?>
                    <?php  } ?>        
                </select>
            </div>
            <div class="form-group">
                <label for="produto">Selecionar Cliente</label>
                <select id="id_c" class="form-control" name="id_c" required>
                    <option value="0"> --- </option>
                    <?php
                    foreach ($clientes as $clien) {
                        if ($pedidos[0]->id_c == $clien->id) {
                            ?>                        
                            <option value="<?= $clien->id ?>" selected> <?= $clien->nome; ?> </option>
                        <?php } else { ?>
                            <option value="<?= $clien->id ?>"> <?= $clien->nome; ?> </option>
                        <?php  } ?>
                    <?php  } ?>        
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


