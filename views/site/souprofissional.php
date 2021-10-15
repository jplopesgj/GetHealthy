<?php

/* @var $this yii\web\View */

$this->title = 'Sou Profissional';
?>

<script>
    function sociaLink() {
        var facebook = document.getElementById('formfacebook');
        var facebookinput = document.getElementById('urlfacebook');
        var instagram = document.getElementById('forminstagram');
        var instagraminput = document.getElementById('urlinstagram');
        var twitter = document.getElementById('formtwitter');
        var twitterinput = document.getElementById('urltwitter');
        var whatsapp = document.getElementById('formwhatsappno');
        var whatsappinput = document.getElementById('formwhatapp');

        if (facebook.checked == true) {
            facebookinput.classList.remove("d-none");
        } else {
            facebookinput.classList.add("d-none");
        }

        if (instagram.checked == true) {
            console.log('oi')
            instagraminput.classList.remove("d-none");
        } else {
            instagraminput.classList.add("d-none");
        }

        if (twitter.checked == true) {
            console.log('oi')
            twitterinput.classList.remove("d-none");
        } else {
            twitterinput.classList.add("d-none");
        }

        if (whatsapp.checked == true) {
            whatsappinput.classList.remove("d-none");
        } else {
            whatsappinput.classList.add("d-none");
        }
    }
</script>
<div class="h-100 d-flex align-items-center justify-content-center" style="padding-top: 60px;">
    <div class="col-4 d-none d-sm-block ">
        <div class="col-12">
            <img style="width:300px; height:300px" src="/web/images/Uso-de-caso.png" alt="perfil">
        </div>
        <div class="row">

        </div>
    </div>


    <div class=" col-12 col-md-8 col-lg-8 col-xl-8">
        <form id="professionalform">
            <div class="row">
                <div class="col-6">
                    <label for="professionalname">Primeiro Nome</label>
                    <input required id="professionalfirstname" type="text" class="form-control" placeholder="Primeiro Nome">
                </div>
                <div class="col-6">
                    <label for="professionalname">Sobrenome</label>
                    <input required id="professionallastname" type="text" class="form-control" placeholder="Sobrenome">
                </div>
            </div>
            <div class="mt-2 form-group">
                <label for="professionalemail">Email</label>
                <input required type="email" class="form-control" id="professionalemail" placeholder="Email">
            </div>

            <div class="mt-2 form-group">
                <label for="professionalnumber">Telefone</label>
                <input required type="text" class="form-control" id="professionalnumber" placeholder="Número">
            </div>

            <p>Este número é Whatsapp?</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="formwhatsappyes" value="option1">
                <label class="form-check-label" for="formwhatsappyes">Sim</label>

            </div>

            <div class="form-check form-check-inline">
                <input onclick="sociaLink()" class="form-check-input" type="checkbox" id="formwhatsappno" value="option1">
                <label class="form-check-label" for="formwhatsappno">Não</label>
            </div>

            <div id="formwhatapp" class="d-none mt-2 form-group">
                <label for="professionalnumber">Whatsapp</label>
                <input type="text" class="form-control" id="professionalnumber" placeholder="Número">
            </div>

            <div class="mt-3 form-group">
                <label  for="professionalArea">Qual sua área?</label>
                <select required placeholder="Selecione"  class="form-control" id="professionalArea">
                    <option selected disabled="disabled">Selecione</option>
                    <option value="1">Nutricionista</option>
                    <option value="2">Personal</option>

                </select>
            </div>

            <div class="form-group">
                <label for="professionalImage">Foto de perfil</label>
                <input type="file" class="form-control-file" id="professionalImage">
            </div>

            <p>Qual rede social você possui?</p>

            <div class="form-check form-check-inline">
                <input onclick="sociaLink()" class="form-check-input" type="checkbox" id="formfacebook" value="option1">
                <label class="form-check-label" for="formfacebook">Facebook</label>
            </div>



            <div class="form-check form-check-inline">
                <input onclick="sociaLink()" class="form-check-input" type="checkbox" id="forminstagram" value="option2">
                <label class="form-check-label" for="forminstagram">Instagram</label>
            </div>

            <div class="form-check form-check-inline">
                <input onclick="sociaLink()" class="form-check-input" type="checkbox" id="formtwitter" value="option3">
                <label class="form-check-label" for="formtwitter">Twitter</label>
            </div>

            <div id="urlfacebook" class="d-none mt-2 form-group">
                <label for="professionalfacebookurl">Facebook Perfil</label>
                <input type="text" class="form-control" id="professionalfacebookurl" placeholder="Link do Perfil">
            </div>

            <div id="urlinstagram" class="d-none mt-2 form-group">
                <label for="professionalinstagramurl">Instagram Perfil</label>
                <input type="text" class="form-control" id="professionalinstagramurl" placeholder="Link do Perfil">
            </div>

            <div id="urltwitter" class="d-none mt-2 form-group">
                <label for="professionaltwitterurl">Twitter Perfil</label>
                <input type="text" class="form-control" id="professionaltwitterurl" placeholder="Link do Perfil">
            </div>

            <div class="mt-2 form-group">
                <label for="professionamyself">Fale um pouco sobre você</label>
                <textarea required class="form-control" id="professionamyself" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

    </form>

</div>