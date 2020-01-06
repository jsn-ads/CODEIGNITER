<section style="min-height: calc(100vh - 83px);" class="light-bg">
    <div class="container">

        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 text-center">
                <div class="section-title">
                    <h2>Area Restrita</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-5 col-lg-2 text-center">
                <div class="form-group">
                    <a class="btn btn-link" href=""><i class="fa fa-user"></i></a>
                    <a class="btn btn-link" href="LoginController/logoff"><i class="fa fa-sign-out"></i></a>
                </div>
            </div>
        </div>

        <div class="container">

            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_cursos" role="tab" data-toggle="tab">Cursos</a></li>
                <li><a href="#tab_equipe" role="tab" data-toggle="tab">Equipe</a></li>
                <li><a href="#tab_usuario" role="tab" data-toggle="tab">Usuarios</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab_cursos" class="tab-pane active">
                    <div class="container-fluid">
                        <h2 class="text-center"><strong>Gerenciar Cursos</strong></h2>
                        <a id="btn_add_curso" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp; Adicionar</i></a>
                        <table id="tb_cursos" class="table table-striped table-bordered">
                            <thead>
                                <tr class="tableheader">
                                    <th>Nome</th>
                                    <th>Imagem</th>
                                    <th>Duração</th>
                                    <th>Descrição</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="tab_equipe" class="tab-pane">
                    <h2 class="text-center"><strong>Gerenciar Equipe</strong></h2>
                    <a id="btn_add_membro" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp; Adicionar</i></a>
                    <table id="tb_equipe" class="table table-striped table-bordered">
                        <thead>
                            <tr class="tableheader">
                                <th>Nome</th>
                                <th>Foto</th>
                                <th>Descrição</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div id="tab_usuario" class="tab-pane">
                    <h2 class="text-center"><strong>Gerenciar Usuários</strong></h2>
                    <a id="btn_add_usuario" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp; Adicionar</i></a>
                    <table id="tb_usuario" class="table table-striped table-bordered">
                        <thead>
                            <tr class="tableheader">
                                <th>Login</th>
                                <th>Nome</th>
                                <th>E-Mail</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        
    </div>
    <!-- /.container -->
</section>

<div id="modal_curso" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4 class="modal-title">Cursos</h4>
            </div>

            <div class="modal-body">
                <form class="form-curso">
                    <input name="curso_id" hidden>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input type="text" id="curso_nome" name="curso_nome" class="form-control" maxlegth="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Imagem</label>
                        <div class="col-lg-10">

                            <img id="curso_img_path" src="" style="max-height: 400px;max-width: 400px">

                            <label class="btn btn-block btn-info">
                                <i class="fa fa-upload"></i>&nbsp;&nbsp; Importar Imagem
                                <input type="file" id="btn_upload_curso_img" accept="image/*" style="display:none;">
                            </label>

                            <input id="curso_img" name="curso_img">

                            <span class="help-block"></span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Duração</label>
                        <div class="col-lg-10">
                            <input type="number" id="curso_duracao" name="curso_duracao" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Descrição</label>
                        <div class="col-lg-10">
                            <textarea name="curso_descricao" id="curso_descricao" class="form-control" maxlegth="100"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_salvar_curso" class="btn btn-primary">
                            <i class="fa fa-save">&nbsp;&nbsp;Salvar</i>
                        </button>
                        <span class="help-block"></span>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div id="modal_membro" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4 class="modal-title">Membro</h4>
            </div>

            <div class="modal-body">
                <form class="form-membro">
                    <input name="membro_id" hidden>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input type="text" id="membro_nome" name="membro_nome" class="form-control" maxlegth="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Imagem</label>
                        <div class="col-lg-10">
                           
                            <img id="membro_img_path" src="" style="max-height: 400px;max-width: 400px">

                            <label class="btn btn-block btn-info">
                                <i class="fa fa-upload"></i>&nbsp;&nbsp; Importar Imagem
                                <input type="file" id="btn_upload_membro_img" accept="image/*" style="display:none;">
                            </label>

                            <input id="membro_img" name="membro_img">

                            <span class="help-block"></span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Descrição</label>
                        <div class="col-lg-10">
                            <textarea name="membro_descricao" id="membro_descricao" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_salvar_membro" class="btn btn-primary">
                            <i class="fa fa-save">&nbsp;&nbsp;Salvar</i>
                        </button>
                        <span class="help-block"></span>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div id="modal_usuario" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4 class="modal-title">Usuário</h4>
            </div>

            <div class="modal-body">
                <form class="form-usuario">
                    <input name="usuario_id" hidden>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Login</label>
                        <div class="col-lg-10">
                            <input type="text" id="usuario_login" name="usuario_login" class="form-control" maxlegth="30">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input type="text" id="usuario_nome" name="usuario_nome" class="form-control" maxlegth="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">E-Mail</label>
                        <div class="col-lg-10">
                            <input type="e-mail" id="usuario_email" name="usuario_email" class="form-control" maxlegth="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Confirme E-Mail</label>
                        <div class="col-lg-10">
                            <input type="e-mail" id="usuario_email_confirma" name="usuario_email_confirma" class="form-control" maxlegth="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Senha</label>
                        <div class="col-lg-10">
                            <input type="password" id="usuario_senha" name="usuario_senha" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Confirme Senha</label>
                        <div class="col-lg-10">
                            <input type="password" id="usuario_senha_confirma" name="usuario_senha_confirma" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    

                    <div class="form-group text-center">
                        <button type="submit" id="btn_salvar_usuario" class="btn btn-primary">
                            <i class="fa fa-save">&nbsp;&nbsp;Salvar</i>
                        </button>
                        <span class="help-block"></span>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>