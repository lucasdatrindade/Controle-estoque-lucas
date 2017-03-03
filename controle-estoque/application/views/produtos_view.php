
<div class="col-sm-10 col-sm-offset-3 col-md-10 col-md-offset-2 main">
   
        <div class="row placeholders">
            <h1>Produtos</h1>
            <a href="<?= base_url() ?>index.php/pedido"><button type="button" class="btn btn-primary">Adicionar Pedido</button></a>
            <a href="<?= base_url() ?>index.php/cliente"><button type="button" class="btn btn-primary">Adicionar Cliente</button></a>
            <a href="<?= base_url() ?>index.php/produto"><button type="button" class="btn btn-primary">Adicionar Produto</button></a>
        </div>   
        
        
    <div class="row placeholders">
        <div class="">
     


            <table class=" table table-striped table-hover table-sm">

                <thead>
                    <tr class="info">
                        <th style="text-align: center">Id</th>                    
                        <th style="text-align: center">Nome</th>
                        <th style="text-align: center">Descrição</th>
                        <th style="text-align: center">Preço</th>
                        <th style="text-align: center">Ações</th>
                    </tr>
                </thead>

                <?php foreach ($produtos as $prod): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $prod->id; ?></td>
                            <td><?php echo $prod->nome; ?></td>
                            <td><?php echo $prod->desc; ?></td>
                            <td><?php echo $prod->preco; ?></td>
                            
                            <td><a href="<?= base_url('index.php/produtos/atualizar_produto/' . $prod->id) ?>" class="btn btn-primary btn-group">Atualizar</a>
                                <a href="<?= base_url('index.php/produtos/apagar/' . $prod->id) ?>" class="btn btn-warning btn-group" onclick="return confirm('Deseja apagar esse produto?');">Deletar</a>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
