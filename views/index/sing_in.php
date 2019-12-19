<main>
    <section class="row">
        <div class="col-sm-12 col-md-6 banner-login">

        </div>
        <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center banner">
            <div class="w-75">
                <h1 class="oswald text-uppercase h3">Ingresa a <span class="text-warning  font-weight-bold">nuestra
                        comunidad</span></h1>
                <p>Ingresa para que puedas realizar preguntas y participar en la comunidad de stackUnderflow &copy;</p>
                <form action="?controller=seguridad&method=sing_in" method="post" class="w-75">
                    <label for="nickname">Nickname</label>
                    <input type="text" name="nickname" id="nickname" placeholder="joedoe09" class="form-control">
                    <div class="form-group">
                        <label for="pwd">Contraseña</label>
                        <input type="text" name="pwd" id="pwd" placeholder="****************" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="recordar" name="recordar">
                            <label class="custom-control-label" for="recordar">Recordar</label>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-warning">👉 Ingresar</button>
                </form>
            </div>
        </div>
        </div>
    </section>
</main>