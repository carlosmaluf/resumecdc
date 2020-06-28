<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Entre com o nome e a rua do novo empreendimento</h3>

            <?php if($Sessao::retornaMensagem()){ ?>
                <div class="alert alert-warning" role="alert"><?php echo $Sessao::retornaMensagem(); ?></div>
            <?php } ?>

            <form action="http://<?php echo APP_HOST; ?>/empreend/salvar" method="post" id="form_empreendnovo">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Nome" value="<?php echo $Sessao::
                    retornaValorFormulario('nome'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="rua">Rua</label>
                    <input type="text" class="form-control" name="rua" placeholder="Rua" value="<?php echo $Sessao::
                    retornaValorFormulario('rua'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control" name="valor" placeholder="Valor" value="<?php echo $Sessao::
                    retornaValorFormulario('valor'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="zona">Zona</label>
                    <textarea class="form-control" name="zona" placeholder="Zona" required><?php echo $Sessao::
                    retornaValorFormulario('zona'); ?></textarea> 
                </div>
                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>