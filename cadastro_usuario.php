<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cadastro de Usuários</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link href="./main.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="https://bernii.github.io/gauge.js/dist/gauge.min.js"></script>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <?php require 'menu-superior.html';?>
        </div>
        <div class="ui-theme-settings">
            <div class="theme-settings__inner">
                <div class="scrollbar-container">

                </div>
            </div>
        </div>

        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class=""></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                    </button>
                    </span>
                </div>


                <div class="scrollbar-sidebar">
                    <?php require 'menu-lateral.html';?>
                </div>

            </div>

            <div class="app-main__outer">
                <div class="app-main__inner">

                    

                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Cadastro de Usuários</h5>

                                               
                                                    <form class="" action="cadastro_usuario.php" name ="cadastro_usuario" method="post" id="cadastro_usuario">
                                                        <div class="form-row">

                                                            

                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group"><label for="nome" class="">Nome completo:</label><input name="nome" id="nome" type="text" class="form-control" required></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group"><label for="email" class="">E-mail: </label><input name="email" id="email" type="email" class="form-control" required></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group"><label for="senha" class="">Senha: </label><input name="usuario_rede" id="senha" type="text" class="form-control" required></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group"><label for="cpf" class="">CPF : </label><input name="cpf" id="cpf" type="text" class="form-control cpf-mask" data-mask="000.000.000-00" placeholder="Ex.: 000.000.000-00" required></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group"><label for="data_nascimento" class="">Data de Nascimento:</label><input name="data_nascimento" id="data_nascimento" type="date" class="form-control" required></div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="position-relative form-group"><label for="celular" class="">Celular : </label><input name="celular" id="celular" type="text" class="form-control cpf-mask" data-mask="(DDD) XXXXX-XXXX" placeholder="Ex.: 000.000.000-00" required></div>
                                                            </div>
                                                           
                                                            <div class="col-md-12 mb-3">
                                                                 <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                         <label class="input-group-text" for="etapa">Função </label>
                                                                    </div>
                                                                    <select class="custom-select" id="funcao" name ="funcao">

                                                                        
                                                                        <option value="Usuário">Usuário</option>
                                                                        <option value="Admin">Admin</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                     
                                                            <input type="hidden" id="processandoEditar" name="processandoEditar" value="0">
                                                           
                                                        </div>
                                                        <?php
                                                            if (isset($_SESSION['idEdit'])) {
                                                                echo '<input type="hidden" id="processandoEditar" name="processandoEditar" value="'.$_SESSION['idEdit'].'">';
                                                                echo'<button class="confirmEditar" type="submit" >Atualizar</button> ';
                                                                $concat = "'unset-sessions.php'";
                                                                echo '<a class="cancelEditar" href="cadastro_funcionario.php" onclick="redireciona('.$concat.');">Cancelar</a>';
                                                            }else{
                                                                echo'<button class="mt-2 btn btn-primary" type="submit">Cadastrar</button>';
                                                            }
                                                            
                                                        ?>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                    

                                   


                </div>

                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Listar Usuários</h5>
                                                <br />
                                                <div class="table-responsive">
                                                    <table class="OpenDataTableEdit">
                                                        <thead>
                                                            <tr>

                                                                <th width="8%" >Editar/Deletar</th>
                                                                <th width="20%" data-colsearch="yes" >Nome</th>
                                                                <th width="20%" data-colsearch="yes" >CPF</th>
                                                                <th width="20%" data-colsearch="yes" >Email</th>
                                                                <th width="20%" data-colsearch="yes" >Função</th>
                                                                <th width="20%" data-colsearch="yes" >Celular</th>
                                                                <th width="20%" data-colsearch="yes" >Data de Nascimento</th>
                                                            </tr>
                                                        </thead>
                                                            <tbody></tbody>
                                                    </table>
                                                </div>
                                        
                                                        <center>
                                                                <input type="button" value="Imprimir" onClick="window.print()" value="Imprimir" id="btncad">
                                                                <input type="button" value="Fechar" id="btncan">
                                                        </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>


            </div>

        </div>

    </div>


    </div>


    <script type="text/javascript" src="./js/main.js"></script>



</body>

</html>