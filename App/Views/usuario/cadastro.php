
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Entre com seu nome e sua senha</h3>

            <?php if($Sessao::retornaMensagem()){ ?>
                <div class="alert alert-warning" role="alert"><?php echo $Sessao::retornaMensagem(); ?></div>
            <?php } ?>

            <form action="http://<?php echo APP_HOST; ?>/usuario/validacao" method="post" id="form_cadastro">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Seu nome" value="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="text" class="form-control" name="senha" placeholder="Sua senha" value="<?php echo $Sessao::retornaValorFormulario('senha'); ?>" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm">Entrar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>