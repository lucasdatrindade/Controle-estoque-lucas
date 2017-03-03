
<div class="col-sm-10 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="row placeholders">
    <h1>Clientes</h1>
        <div class="row">
            <a href="<?= base_url() ?>index.php/pedido"><button type="button" class="btn btn-primary">Adicionar Pedido</button></a>
            <a href="<?= base_url() ?>index.php/cliente"><button type="button" class="btn btn-primary">Adicionar Cliente</button></a>
            <a href="<?= base_url() ?>index.php/produto"><button type="button" class="btn btn-primary">Adicionar Produto</button></a>
        </div>
    </div>
    
        <div class="row placeholders">

            <table class=" table table-striped table-hover table-sm">

                <thead>
                    <tr class="info">
                        <th style="text-align: center">Id</th>
                        <th style="text-align: center">Cliente</th>
                        <th style="text-align: center">Email</th>
                        <th style="text-align: center">Telefone</th>
                        <th style="text-align: center">Ações</th>
                    </tr>
                </thead>

                <?php foreach ($clientes as $clien): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $clien->id; ?></td>
                            <td><?php echo $clien->nome; ?></td>
                            <td><?php echo $clien->email; ?></td>
                            <td><?php echo $clien->telefone; ?></td>
                    
                            <td><a href="<?= base_url('index.php/clientes/atualizar_cliente/' . $clien->id) ?>" class="btn btn-primary btn-group">Atualizar</a>
                                <a href="<?= base_url('index.php/clientes/apagar/' . $clien->id) ?>" class="btn btn-warning btn-group" onclick="return confirm('Deseja deletar esse cliente?');">Deletar</a>
                            </td>
                   
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
   
    </div>
