     
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="panel-body">

            <!-- cometário -->
            Editar Empreendimento: <?php echo $viewVar['empreend']->getNome(); ?> 

            </div> 
            <?php if($Sessao::retornaErro()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php foreach($Sessao::retornaErro() as $key => $mensagem){ ?>
                        <?php echo $mensagem; ?> <br>
                    <?php } ?>
                </div>
            <?php } ?>
            <form action="http://<?php echo APP_HOST; ?>/empreend/atualizar" method="post" id="form_empreend">
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $viewVar['empreend']->getId(); ?>">
                <label for="nome"></label>
                <input type="hidden"  class="form-control" name="nome" id="nome" placeholder="" value="<?php echo $viewVar['empreend']->getNome(); ?>" required>
                <label for="rua"></label>
                <input type="hidden"  class="form-control"  name="rua" id="rua" placeholder="" value="<?php echo $viewVar['empreend']->getRua(); ?>" required>
                <label for="valor"></label>
                <input type="hidden"  class="form-control" name="valor" id="valor" placeholder="" value="<?php echo $viewVar['empreend']->getValor(); ?>" >
                <label for="zona"></label>
                <input type="hidden"  class="form-control" name="zona" id="zona" placeholder="" value="<?php echo $viewVar['empreend']->getZona(); ?>" >
                <a href="http://<?php echo APP_HOST; ?>/empreend/index" class="btn btn-info btn-sm">Voltar</a>
            </form>
            <hr />
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#imovel" class="nav-link" data-toggle="tab">Imovel</a>
                </li>
                <li class="nav-item">
                    <a href="#blocos" class="nav-link" data-toggle="tab">Blocos</a>
                </li>
                <li class="nav-item">
                    <a href="#unidades" class="nav-link" data-toggle="tab">Unidades</a>
                </li>
                <li class="nav-item">
                    <a href="#financiamento" class="nav-link" data-toggle="tab">Financiamento</a>
                </li>
                <li class="nav-item">
                    <a href="#despesas" class="nav-link" data-toggle="tab">Despesas</a>
                </li>
                <li class="nav-item">
                    <a href="#custos" class="nav-link" data-toggle="tab">Custos</a>
                </li>
                <li class="nav-item">
                    <a href="#tabelas" class="nav-link" data-toggle="tab">Tabelas</a>
                </li>
                <li class="nav-item">
                    <a href="#velvendas" class="nav-link" data-toggle="tab">Vel. Comercializacao</a>
                </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="imovel">
                    <form action="http://<?php echo APP_HOST; ?>/empreend/atualizar" method="post" id="form_empreend">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $viewVar['empreend']->getId(); ?>">
                        <label for="nome"></label>
                        <input type="hidden"  class="form-control"  name="nome" id="nome" placeholder="" value="<?php echo $viewVar['empreend']->getNome(); ?>" >
                        <label for="rua"></label>
                        <input type="text"  class="form-control"  name="rua" id="rua" placeholder="" value="<?php echo $viewVar['empreend']->getRua(); ?>" >
                        <label for="valor"></label>
                        <input type="text"  class="form-control" name="valor" id="valor" placeholder="" value="<?php echo $viewVar['empreend']->getValor(); ?>" >
                        <label for="zona"></label>
                        <input type="text"  class="form-control" name="zona" id="zona" placeholder="" value="<?php echo $viewVar['empreend']->getZona(); ?>" >
                        <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                    </form>
                    </div>
                    <div class="tab-pane fade" id="blocos">
                    <form action="http://<?php echo APP_HOST; ?>/blocos/atualizar" method="post" id="form_blocos">
                        
                        <a href="http://<?php echo APP_HOST; ?>/blocos/cadastro/" 
                                class="btn btn-success btn-sm">Novo</a>

                        <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $viewVar['empreend']->getId(); ?>">
          
                        <?php
                        if(!count($viewVar['listaBlocos'])){
                        ?>
                            <div class="alert alert-info" role="alert">Nenhum bloco encontrado</div>
                        <?php
                        } else {
                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                            <tr>
                            <td class="info">Id</td>
                            <td class="info">Empreendid</td>
                            <td class="info">Nome</td>
                            <td class="info"></td>
                            </tr>
                            <?php foreach($viewVar['listaBlocos'] as $blocos) { ?>
                                <tr>
                                    <td><?php echo $blocos->getId(); ?></td>
                                    <td><?php echo $blocos->getEmpreendid(); ?></td>
                                    <td><?php echo $blocos->getNome(); ?></td>
                                    <td>
                                        <a href="http://<?php echo APP_HOST; ?>/blocos/edicao/<?php echo 
                                            $blocos->getId(); ?>" class="btn btn-info btn-sm">Editar</a>
                                        <a href="http://<?php echo APP_HOST; ?>/blocos/exclusao/<?php echo 
                                            $blocos->getId(); ?>" class="btn btn-danger btn-sm">Excluir</a>
                                        <a href="http://<?php echo APP_HOST; ?>/blocos/salvar/<?php echo 
                                            $blocos->getId(); ?>" class="btn btn-danger btn-sm">Novo</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </table>
                        </div>
                        <?php 
                        } 
                        ?>
                    </form>
                    </div>

                    <div class="tab-pane fade" id="unidades">
                        <p>Unidades ...</p>
                    </div>
                    <div class="tab-pane fade" id="financiamento">
                        <p>Financiamento ...</p>
                    </div>
                    <div class="tab-pane fade" id="despesas">
                        <p>Profile tab content ...</p>
                    </div>
                    <div class="tab-pane fade" id="custos">
                        <p>Despesas ...</p>
                    </div>
                    <div class="tab-pane fade" id="tabelas">
                        <p>Tabelas ...</p>
                    </div>
                    <div class="tab-pane fade" id="velvendas">
                        <p>Vel. Comercialização ...</p>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>