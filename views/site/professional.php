<?php

/* @var $this yii\web\View */

$this->title = 'Get Healthy';

?>

<div class=" container align-items-center justify-content-center d-flex flex-row">
    <div class="align-self-start mt-4 col-4 d-flex flex-column">
        <h4 class="mb-3"><strong>Filtrar por:</strong></h4>
        <div class="card pl-2 pr-2 w-50 border border-info ">
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
    <hr style="font-size:10px">
    <div class=" col-12 col-md-8 col-lg-8 col-xl-8">
        <div class="row pt-4">
            <div class="ml-3 mb-3 card bg-success" style="width: 18rem;">
                <img style="width: auto;height: 65%;background:cover;" src="/images/person1.jpeg" class="card-img-top" alt="/images/person1.jpeg">
                <div class="card-body">
                    <p class="card-text">Nutricionista</p>
                </div>
                <div class="mb-3 row text-center justify-space-between">
                    <i style="font-size:30px" class="col-4 fab fa-facebook"></i>
                    <i style="font-size:30px" class="col-4 fab fa-instagram"></i>
                    <i style="font-size:30px" class="col-4 fab fa-whatsapp"></i>

                </div>
            </div>
            <div class="ml-3 mb-3 card bg-primary" style="width: 18rem;">
                <img style="width: auto;height: 65%;background:cover;" src="/images/person4.jpeg" class="card-img-top" alt="/images/person1.jpeg">
                <div class="card-body ">
                    <p class="card-text">Nutricionista</p>
                </div>
                <div class="mb-3 row text-center justify-space-between">
                    <i style="font-size:30px" class="col-4 fab fa-facebook"></i>
                    <i style="font-size:30px" class="col-4 fab fa-instagram"></i>
                    <i style="font-size:30px" class="col-4 fab fa-whatsapp"></i>

                </div>
            </div>
            <div class="ml-3 mb-3 card bg-info" style="width: 18rem;">
                <img style="width: auto;height: 65%;background:cover;" src="/images/person3.jpeg" class="card-img-top" alt="/images/person1.jpeg">
                <div class="card-body">
                    <p class="card-text">Personal</p>
                    <p class="card-text">Foco em Academia</p>
                </div>
                <div class="mb-3 row text-center justify-space-between">
                    <i style="font-size:30px" class="col-4 fab fa-facebook"></i>
                    <i style="font-size:30px" class="col-4 fab fa-instagram"></i>
                    <i style="font-size:30px" class="col-4 fab fa-whatsapp"></i>

                </div>
            </div>
            <div class="ml-3 mb-3 card bg-warning" style="width: 18rem;">
                <img style="width: auto;height: 65%;background:cover;"  src="/images/person2.jpeg" class="card-img-top" alt="/images/person1.jpeg">
                <div class="card-body">
                    <p class="card-text">Personal</p>
                    <p class="card-text">Foco em Academia</p>
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