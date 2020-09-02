<div class="content">
    <div class="row">


        <div class="col-lg-12 col-md-12 col-xs-12">
            <style>
                 /* STRUCTURE */

                .wrapperrr {
                    display: flex;
                    align-items: center;
                    flex-direction: column;
                    justify-content: center;
                    width: 100%;
                    min-height: 100%;
                    padding: 20px;
                }

                #formContent {
                    -webkit-border-radius: 10px 10px 10px 10px;
                    border-radius: 10px 10px 10px 10px;
                    background: #fff;
                    padding: 30px;
                    width: 90%;
                    max-width: 450px;
                    position: relative;
                    padding: 0px;
                    -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
                    box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
                    text-align: center;
                }

                #formFooter {
                    background-color: #f6f6f6;
                    border-top: 1px solid #dce8f1;
                    padding: 25px;
                    text-align: center;
                    -webkit-border-radius: 0 0 10px 10px;
                    border-radius: 0 0 10px 10px;
                }



                /* TABS */

                h2.inactive {
                    color: #cccccc;
                }

                h2.active {
                    color: #0d0d0d;
                    border-bottom: 2px solid #5fbae9;
                }



                /* FORM TYPOGRAPHY*/

                input[type=button],
                input[type=submit],
                input[type=reset] {
                    background-color: #81172d;
                    border: none;
                    color: white;
                    padding: 15px 80px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    text-transform: uppercase;
                    font-size: 13px;
                    -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
                    box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
                    -webkit-border-radius: 5px 5px 5px 5px;
                    border-radius: 5px 5px 5px 5px;
                    margin: 5px 20px 40px 20px;
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    -ms-transition: all 0.3s ease-in-out;
                    -o-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }

                input[type=button]:hover,
                input[type=submit]:hover,
                input[type=reset]:hover {
                  background-color: #81172d;
                }

                input[type=button]:active,
                input[type=submit]:active,
                input[type=reset]:active {
                    -moz-transform: scale(0.95);
                    -webkit-transform: scale(0.95);
                    -o-transform: scale(0.95);
                    -ms-transform: scale(0.95);
                    transform: scale(0.95);
                }

                input[type=text] {
                    background-color: #f6f6f6;
                    border: none;
                    color: #0d0d0d;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 5px;
                    width: 85%;
                    border: 2px solid #f6f6f6;
                    -webkit-transition: all 0.5s ease-in-out;
                    -moz-transition: all 0.5s ease-in-out;
                    -ms-transition: all 0.5s ease-in-out;
                    -o-transition: all 0.5s ease-in-out;
                    transition: all 0.5s ease-in-out;
                    -webkit-border-radius: 5px 5px 5px 5px;
                    border-radius: 5px 5px 5px 5px;
                }

                input[type=text]:focus {
                    background-color: #fff;
                    border-bottom: 2px solid #81172d;
                }

                input[type=text]:placeholder {
                    color: #cccccc;
                }



                /* ANIMATIONS */

                /* Simple CSS3 Fade-in-down Animation */
                .fadeInDown {
                    -webkit-animation-name: fadeInDown;
                    animation-name: fadeInDown;
                    -webkit-animation-duration: 1s;
                    animation-duration: 1s;
                    -webkit-animation-fill-mode: both;
                    animation-fill-mode: both;
                }

                @-webkit-keyframes fadeInDown {
                    0% {
                        opacity: 0;
                        -webkit-transform: translate3d(0, -100%, 0);
                        transform: translate3d(0, -100%, 0);
                    }

                    100% {
                        opacity: 1;
                        -webkit-transform: none;
                        transform: none;
                    }
                }

                @keyframes fadeInDown {
                    0% {
                        opacity: 0;
                        -webkit-transform: translate3d(0, -100%, 0);
                        transform: translate3d(0, -100%, 0);
                    }

                    100% {
                        opacity: 1;
                        -webkit-transform: none;
                        transform: none;
                    }
                }

                /* Simple CSS3 Fade-in Animation */
                @-webkit-keyframes fadeIn {
                    from {
                        opacity: 0;
                    }

                    to {
                        opacity: 1;
                    }
                }

                @-moz-keyframes fadeIn {
                    from {
                        opacity: 0;
                    }

                    to {
                        opacity: 1;
                    }
                }

                @keyframes fadeIn {
                    from {
                        opacity: 0;
                    }

                    to {
                        opacity: 1;
                    }
                }

                .fadeIn {
                    opacity: 0;
                    -webkit-animation: fadeIn ease-in 1;
                    -moz-animation: fadeIn ease-in 1;
                    animation: fadeIn ease-in 1;

                    -webkit-animation-fill-mode: forwards;
                    -moz-animation-fill-mode: forwards;
                    animation-fill-mode: forwards;

                    -webkit-animation-duration: 1s;
                    -moz-animation-duration: 1s;
                    animation-duration: 1s;
                }

                .fadeIn.first {
                    -webkit-animation-delay: 0.4s;
                    -moz-animation-delay: 0.4s;
                    animation-delay: 0.4s;
                }

                .fadeIn.second {
                    -webkit-animation-delay: 0.6s;
                    -moz-animation-delay: 0.6s;
                    animation-delay: 0.6s;
                }

                .fadeIn.third {
                    -webkit-animation-delay: 0.8s;
                    -moz-animation-delay: 0.8s;
                    animation-delay: 0.8s;
                }

                .fadeIn.fourth {
                    -webkit-animation-delay: 1s;
                    -moz-animation-delay: 1s;
                    animation-delay: 1s;
                }
                *:focus {
                    outline: none;
                }

                #icon {
                    width: 60%;

                    display: block;
                    margin: auto;
                }
            </style>

            <div class="wrapperrr fadeInDown">
                <div id="formContent">
                    <!-- Tabs Titles -->
                    <!-- Icon -->
                    <div class="fadeIn first">
                        <img src="vistas/img/plantilla/logo_blanco_obstetras_iam_gif.gif" id="icon" alt="User Icon" />
                    </div>

                    <!-- Login Form -->
                    <form method="post">
                        <input type="text" class="fadeIn second" name="ingUsuario" placeholder="USUARIO">
                        <input type="text"  style="-webkit-text-security: disc !important;" class="fadeIn third" name="ingPassword" placeholder="CONTRASEÑA">
                        <input type="submit" class="fadeIn fourth" value="Iniciar Sesion">
                        
                        <?php
                        $login = new ControladorUsuarios();
                        $login->ctrIngresoUsuario();
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>