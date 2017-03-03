
<div class="col-sm-10 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <div class="row placeholders">
            <h1>Pedidos</h1>
            <a href="<?= base_url() ?>index.php/pedido"><button type="button" class="btn btn-primary">Adicionar Pedido</button></a>
            <a href="<?= base_url() ?>index.php/cliente"><button type="button" class="btn btn-primary">Adicionar Cliente</button></a>
            <a href="<?= base_url() ?>index.php/produto"><button type="button" class="btn btn-primary">Adicionar Produto</button></a>
        </div>

    <div class="row placeholders">

        <table class=" table table-striped table-hover table-sm">

            <thead>
                <tr class="info">
                    <th style="text-align: center">Id</th>
                    <th style="text-align: center">Cliente</th>
                    <th style="text-align: center">Produto</th>
                    <th style="text-align: center">Ações</th>
                </tr>
            </thead>

            <?php foreach ($pedidos as $ped): ?>
                <tbody>
                    <tr>
                        <td><?php echo $ped->id; ?></td>
                        <td><?php echo $ped->nome_c; ?></td>
                        <td><?php echo $ped->nome_p; ?></td>
                        <td><a href="<?= base_url('index.php/pedidos/atualizar/' . $ped->id) ?>" class="btn btn-primary btn-group">Atualizar</a>
                            <a href="<?= base_url('index.php/pedidos/apagar/' . $ped->id) ?>" class="btn btn-warning btn-group" onclick="return confirm('Deseja deletar esse pedido?');">Deletar</a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>
