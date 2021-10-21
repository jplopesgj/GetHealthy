<?php

/* @var $this yii\web\View */

$this->title = 'Get Healthy';

?>
<script>
    function redirect() {
        window.location.href = 'http://dev.gethealthy/site/whouare'
    }
</script>
<div style="column-gap:5%;" class="flex-column flex-sm-column bg-light d-flex flex-md-row align-items-center justify-content-center text-center h-100">
    <div class="d-flex flex-column">
        <h1 class="display-2">Get Healthy</h1>

        <strong>
            <h5 class="mb-4">O início da sua saúde.</h5>
        </strong>
    </div>

    <div class="d-flex justify-content-center text-center">
        <div class="rounded shadow-sm card" style="width: auto;">
            <div class="pt-0 mb-0 card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input placeholder="Email ou Usuário" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


                        <label for="exampleInputPassword1"></label>
                        <input placeholder="Senha" type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button onclick="redirect()" type="button" class="w-100 mb-3 btn btn-primary">Entrar</button>
                    <a href="#"> Esqueceu a senha?</a>

                    <hr>
                </form>

                <button type="button" class="text-white btn btn-lg bg-success pb-2" data-toggle="modal" data-target="#RegisterModal">
                    Registrar
                </button>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="RegisterModal" tabindex="-1" aria-labelledby="#RegisterModalHome" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="RegisterModalHome">Cadastre-se</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div style="column-gap:3%;" class="d-flex space pl-0 justify-content-between col-12 form-group">
                            <input placeholder="Nome" type="text" class="col-6 form-control" id="InputNameRegister">
                            <input placeholder="Sobrenome" type="text" class="col-6 form-control" id="InputLastNameRegister">
                        </div>
                        <div class="form-group">
                            <input placeholder="Email ou Telefone" type="email" class="form-control" id="InputEmailorPhoneRegister" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <input placeholder="Senha" type="password" class="form-control" id="Password">
                        </div>
                    </div>
                    <div class="justify-content-center modal-footer">
                        <button onclick="redirect()" type="button" class="text-white btn bg-success">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

