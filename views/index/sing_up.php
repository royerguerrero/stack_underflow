<main>
    <section class="row">
        <div class="col-sm-12 col-md-6 banner-register">

        </div>
        <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center banner">
            <div class="w-75">
                <h1 class="oswald text-uppercase h3">Registarte a la <span class="text-warning  font-weight-bold">mejor
                        comunidad</span></h1>
                <p>Registrate para que puedas realizar preguntas y participar en la comunidad de stackUnderflow &copy;</p>
                <form action="?controller=usuario&method=registrar" method="post" class="w-75">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="joedoe@emailfake.com">
                    </div>
                    <div class="form-group"></div>
                    <label for="nickname">Nickname:</label>
                    <input type="text" class="form-control" name="nickname" id="nickname" placeholder="joedoe09">
                    <div class="form-group">
                        <label for="pwa">Ingresa tu contraseña:</label>
                        <input type="password" class="form-control" name="pwa" id="pwa" placeholder="***********************">
                    </div>
                    <div class="form-group">
                        <label for="pwar">Repite la contraseña:</label>
                        <input type="password" class="form-control" name="pwar" id="pwar" placeholder="***********************">
                    </div>
                    <button type="submit" class="btn btn-warning">Registrarse</button>
                </form>
            </div>
        </div>
        </div>
    </section>