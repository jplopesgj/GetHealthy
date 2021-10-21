<?php

/* @var $this yii\web\View */

$this->title = 'Get Healthy';

?>

<div class=" container align-items-center justify-content-center d-flex flex-row">
    <div class="  align-self-start mt-4 col-4 d-flex flex-column">
        <div class="d-none d-sm-block">
            <h4 class="mb-3"><strong>Filtrar por:</strong></h4>
            <div class="card pl-2 pr-2 w-50 border border-info w-auto ">
                <p> Tipo do profissional: </p>
                <div class="form-check form-check-inline">
                    <input onclick="sociaLink()" class="form-check-input" type="checkbox" id="formfacebook" value="option1">
                    <label class="form-check-label" for="formfacebook">Nutricionista</label>
                </div>
                <div class="form-check form-check-inline">
                    <input onclick="sociaLink()" class="form-check-input" type="checkbox" id="formfacebook" value="option1">
                    <label class="form-check-label" for="formfacebook">Personal</label>
                </div>
                <hr>

                <p>Redes Socias</p>
                <div class="form-check form-check-inline">
                    <input onclick="sociaLink()" class="form-check-input" type="checkbox" id="formfacebook" value="option1">
                    <label class="form-check-label" for="formfacebook">Facebook</label>
                </div>

                <div class="form-check form-check-inline">
                    <input onclick="sociaLink()" class="form-check-input" type="checkbox" id="formfacebook" value="option1">
                    <label class="form-check-label" for="formfacebook">Instagram</label>
                </div>

                <div class="form-check form-check-inline">
                    <input onclick="sociaLink()" class="form-check-input" type="checkbox" id="formfacebook" value="option1">
                    <label class="form-check-label" for="formfacebook">Whatsapp</label>
                </div>
                <hr>
                <p>Focado em:</p>
                <div class="form-check form-check-inline">
                    <input onclick="sociaLink()" class="form-check-input" type="checkbox" id="formfacebook" value="option1">
                    <label class="form-check-label" for="formfacebook">Academia</label>
                </div>
                <div class="form-check form-check-inline">
                    <input onclick="sociaLink()" class="form-check-input" type="checkbox" id="formfacebook" value="option1">
                    <label class="form-check-label" for="formfacebook">Esportes</label>
                </div>
            </div>
        </div>
    </div>
    <hr style="font-size:10px">
    <div class=" col-12 col-md-8 col-lg-8 col-xl-8">
        <div class="row pt-4">
            <div class="ml-3 mb-3 card bg-warning" style="width: 18rem; height:25rem">
                <div style="background-size:cover;height:60%;background-image:url('/images/person1.jpeg')"></div>
                <div class="card-body">
                    <p class="card-text">Personal</p>
                    <p class="card-text">Foca em academia</p>
                </div>
                <div class="mb-3 row text-center justify-space-between">
                    <i style="font-size:30px" class="col-4 fab fa-facebook"></i>
                    <i style="font-size:30px" class="col-4 fab fa-instagram"></i>
                    <i style="font-size:30px" class="col-4 fab fa-whatsapp"></i>

                </div>
            </div>
            <div class="ml-3 mb-3 card bg-success" style="width: 18rem; height:25rem">
                <div style="background-size:cover;height:60%;background-image:url('/images/person2.jpeg')"></div>
                <div class="card-body">
                    <p class="card-text">Nutricionista</p>
                </div>
                <div class="mb-3 row text-center justify-space-between">
                    <i style="font-size:30px" class="col-4 fab fa-facebook"></i>
                    <i style="font-size:30px" class="col-4 fab fa-instagram"></i>
                    <i style="font-size:30px" class="col-4 fab fa-whatsapp"></i>

                </div>
            </div>
          
        </div>
    </div>
</div>