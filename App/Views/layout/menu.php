<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://<?php echo APP_HOST; ?>">ResumeCDC</a>
        </div>

        <?php 
        if($Sessao::retornaValorFormulario('nome')){ ?>
            <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            <li <?php if($viewVar['nameController'] == "HomeController") { ?> <?php } ?>>
                <a href="http://<?php echo APP_HOST; ?>/empreend/index" >Empreendimentos</a>
            </li>

            <li <?php if($viewVar['nameController'] == "HomeController") { ?> <?php } ?>>
                <a href="http://<?php echo APP_HOST; ?>/home/inicial" >Ajuda</a>
            </li>

            <li <?php if($viewVar['nameController'] == "HomeController") { ?> <?php } ?>>
                <a href="http://<?php echo APP_HOST; ?>/home/sair" >Sair</a>
            </li>

            </ul><?php
        }else{
            if($Sessao::retornaValorFormulario('id')){ ?>
                <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li <?php if($viewVar['nameController'] == "HomeController") { ?> <?php } ?>>
                        <a href="http://<?php echo APP_HOST; ?>/empreend/index" >Empreendimentos</a>
                    </li>
                    <li <?php if($viewVar['nameController'] == "HomeController") { ?> <?php } ?>>
                        <a href="http://<?php echo APP_HOST; ?>/home/index" >Ajuda</a>
                    </li>
                    
                </ul><?php
            }else{ ?>
                <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li <?php if($viewVar['nameController'] == "UsuarioController") { ?> class="active" echo teste<?php } ?>>  
                        <a href="http://<?php echo APP_HOST; ?>/usuario/cadastro" >Login</a>
                    </li>
                </ul>
            </div><?php
            }
        }?>
    </div>
</nav>

