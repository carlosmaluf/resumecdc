<div class="container">
    <div class="row">
    <br>
    <div class="col-md-12">
        <a href="http://<?php echo APP_HOST; ?>/empreend/cadastro" class="btn btn-success btn-sm">Adicionar</a>
        <hr>
    </div>
    <div class="col-md-12">
        <?php if($Sessao::retornaMensagem()){ ?>
            <div class="alert alert-warning" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $Sessao::retornaMensagem(); ?>
            </div>
        <?php } ?>

        <?php
            if(!count($viewVar['listaEmpreendimentos'])){
        ?>
            <div class="alert alert-info" role="alert">Nenhum empreendimento encontrado</div>
        <?php
            } else {
        ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td class="info">Nome</td>
                        <td class="info">Rua</td>
                        <td class="info">Valor</td>
                        <td class="info">Zona</td>
                        <td class="info"></td>
                    </tr>
                    <?php
                    foreach($viewVar['listaEmpreendimentos'] as $empreend) {
                    ?>
                        <tr>
                            <td><?php echo $empreend->getNome(); ?></td>
                            <td><?php echo $empreend->getRua(); ?></td>
                            <td><?php echo $empreend->getValor(); ?></td>
                            <td><?php echo $empreend->getZona(); ?></td>
                            <td>

                                <a href="http://<?php echo APP_HOST; ?>/empreend/edicao/<?php echo 
                                    $empreend->getId(); ?>" class="btn btn-info btn-sm">Editar</a>
                                <a href="http://<?php echo APP_HOST; ?>/empreend/exclusao/<?php echo 
                                    $empreend->getId(); ?>" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        <?php
            }
        ?>
    </div>
</div>
</div>