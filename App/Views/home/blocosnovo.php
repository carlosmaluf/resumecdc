<div class="container">
    <div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel-body">
                Editar Bloco: <?php echo $viewVar['blocos']->getNome(); ?> 
                
            </div> 
            
            <?php if($Sessao::retornaErro()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php foreach($Sessao::retornaErro() as $key => $mensagem){ ?>
                        <?php echo $mensagem; ?> <br>
                    <?php } ?>
                </div>
            <?php } ?>

            <?php if($Sessao::retornaMensagem()){ ?>
                <div class="alert alert-warning" role="alert"><?php echo $Sessao::retornaMensagem(); ?></div>
            <?php } ?>

            <form action="http://<?php echo APP_HOST; ?>/blocos/atualizar" method="post" id="form_cadastro">
                <input type="hidden"  class="form-control"  name="id" id="id" placeholder="" value="<?php echo $viewVar['blocos']->getId(); ?>" required>
                <label for="empreendid"></label>
                <input type="text"  class="form-control"  name="empreendid" id="empreendid" placeholder="" value="<?php echo $viewVar['blocos']->getEmpreendid(); ?>" required>
                <label for="nome"></label>
                <input type="text"  class="form-control" name="nome" id="nome" placeholder="" value="<?php echo $viewVar['blocos']->getNome(); ?>">
                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
            </div>
        <div class="col-md-12">

        <a href="http://<?php echo APP_HOST; ?>/empreend/edicao/<?php echo $viewVar['blocos']->getEmpreendid(); ?>" 
             class="btn btn-success btn-sm">Voltar</a>  

        <hr>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>