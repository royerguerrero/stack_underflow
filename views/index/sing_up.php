<main>
    <section class="row">
        <div class="col-sm-12 col-md-6 banner-register">

        </div>
        <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center banner">
            <div class="w-75">
                <h1 class="oswald text-uppercase h3">Registarte a la <span class="text-warning  font-weight-bold">mejor
                        comunidad</span></h1>
                <p>Registrate para que puedas realizar preguntas y participar en la comunidad de stackUnderflow &copy;
                </p>
                <?php if(isset($_SESSION['flash-msm'])): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>😒 Upss!</strong> <?= $_SESSION['flash-msm'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php elseif(isset($_SESSION['flash-ok'])): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Cool 😎</strong> <?= $_SESSION['flash-ok'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                <form action="?controller=usuario&method=registrar" method="post" class="w-75">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" id="email"
                            placeholder="joedoe@emailfake.com" required>
                    </div>
                    <div class="form-group"></div>
                    <label for="nickname">Nickname:</label>
                    <input type="text" class="form-control" name="nickname" id="nickname" placeholder="joedoe09"
                        required>
                    <div class="form-group">
                        <label for="pwa">Ingresa tu contraseña:</label>
                        <input type="password" class="form-control" name="pwa" id="pwa"
                            placeholder="***********************" required>
                    </div>
                    <div class="form-group">
                        <label for="pwar">Repite la contraseña:</label>
                        <input type="password" class="form-control" name="pwar" id="pwar"
                            placeholder="***********************" required>
                    </div>
                    <button type="submit" class="btn btn-warning">👉 Registrarse</button>
                </form>
            </div>
        </div>
        </div>
    </section>