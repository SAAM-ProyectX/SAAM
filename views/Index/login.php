<?php require 'views/head.php';?>
    <div class="logo">
        <img src="<?php echo URL; ?>public/img/logo.png" alt="" />
    </div>
    <div class="content">
        <form  class="form-vertical login-form" id="signInForm" action="<?php echo URL;?>Usuario/signIn" method="POST">
            <h3 class="form-title">Ingresar</h3>
            <div class="alert alert-error hide">
                <button class="close" data-dismiss="alert"></button>
                <span>Ingresar un usuario y/o contraseña válidos.</span>
            </div>
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-user"></i>
                        <input class="m-wrap placeholder-no-fix" type="text" placeholder="Usuario" name="alias" id="alias"/>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-lock"></i>
                        <input class="m-wrap placeholder-no-fix" type="password" placeholder="Contraseña" name="contrasena" id="contrasena"/>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <label class="checkbox">
                    <input type="checkbox" name="remember" value="1"/> Recordarme
                </label>
                <button type="submit" class="btn purple pull-right" id="signInBtn" name="signInBtn">
                    Ingresar <i class="m-icon-swapright m-icon-white"></i>
                </button>
            </div>
            <div class="forget-password">
                <h5 id="forget-password">¿Olvidaste tu contraseña?</h5>
            </div>
        </form>


        <form class="form-vertical forget-form" id="passRecover">
            <h3 class="">¿Olvidaste tu contraseña?</h3>
            <p>Ingresa tu correo electrónico para recuperar su contraseña</p>
            <div class="control-group">
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-envelope"></i>
                        <input class="m-wrap placeholder-no-fix" type="text" placeholder="Correo" name="email" />
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn">
                    <i class="m-icon-swapleft"></i> Regresar
                </button>
                <button type="submit" class="btn purple pull-right">
                    Recuperar <i class="m-icon-swapright m-icon-white"></i>
                </button>
            </div>
        </form>
    </div>
<?php require('views/foot.php'); ?>