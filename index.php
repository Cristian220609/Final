<?php
session_start(); 
?>

<html>
    <head>
        <title>Principal</title>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
        <link href="css/style6.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="css/shop.css" type="text/css" />
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href="css/estilos.css" rel='stylesheet' type='text/css' />
        <link href="css/fontawesome-all.css" rel="stylesheet" />
        <link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet" />
        <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    </head>
    <body>
        <div class="contenedor">
            <img src="imagenes/logo.png" width="80;" height="80;" alt="Imagen">
            <h1 class="logoChevere" >Fashion</h1> 
            <img src="imagenes/logoUsuario.png" width="80;" height="80;" id="informacionUsuario" alt="Imagen de Usuario" onclick="mostrarSaludo()"> 
        </div>

        <script>
        var userEmail = "<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>";
        var nombreUsuario = "<?php echo isset($_SESSION['nombreUsuario']) ? $_SESSION['nombreUsuario'] : ''; ?>";
        var nombreReal = "<?php echo isset($_SESSION['nombre_real']) ? $_SESSION['nombre_real'] : ''; ?>";

        function mostrarSaludo() {
            alert("Hola, " + nombreReal + " (" + nombreUsuario + "). Tu correo es: " + userEmail);
        } 
        </script>

        <div class="banner-top container-fluid centrarReferencias">
            <a href="index.php" class="referencia">Inicio</a>
            <a href="Nosotros.html" class="referencia">Nosotros</a>
            <a href="Servicios.html" class="referencia">Servicios</a>
            <a href="Productos.html" class="referencia">Productos</a>
            <a href="Contactenos.html" class="referencia">Contactanos</a>
            <a href="Registro.html">
                <button style="font-size: 25px;">Registrarse</button>
            </a>
            <a href="Login.html">
                <button style="font-size: 25px;">Login</button>
            </a>
            <a href="crud.html">
                <button style="font-size: 25px;">Admin</button>
            </a>
            <h1 class="titulo-con-linea"></h1>
        </div>  
        <section>
            <h2>Introduccion:</h2>
            <p class="texto-ajustable">Descubre la &uacute;ltima moda y tendencias en ropa y accesorios para toda la familia. En nuestra tienda, encontrar&aacute;s una amplia selecci&oacute;n de prendas de vestir de alta calidad, dise&ntilde;adas para realzar tu estilo personal y mantenerte a la moda.</p>         
            <p class="texto-ajustable">Explora nuestra colecci&oacute;n de ropa para hombres, mujeres y ni&ntilde;os, as&iacute; como una variedad de accesorios que complementar&aacute;n tu look. Nos enorgullece ofrecer productos de calidad que te har&aacute;n lucir y sentirte genial en cualquier ocasi&oacute;n.</p>        
            <p class="texto-ajustable">Visita nuestras diferentes secciones y encuentra todo lo que necesitas para renovar tu guardarropa. Esperamos que disfrutes de tu experiencia de compra en nuestro sitio web.</p>
        </section>          
        <br>  
        <div style="text-align: center;margin-bottom: 90px;">
            <span class="fecha" id="fecha"></span>
        </div>
        <div class="ocean-container">
            <h1 class="animate__animated animate__bounceInDown diseño logoChevere">CATALOGO VERANO</h1>
            <img class="verano" src="imagenes/verano.png" width="80;" height="80;" alt="Imagen">
            <p class="TextoVerano texto-ajustable">&#33;Descubre el cat&aacute;logo de verano m&aacute;s emocionante de la temporada! Sum&eacute;rgete en un mundo de color y estilo con nuestra nueva colecci&oacute;n de moda veraniega. &#33;Prep&aacute;rate para lucir radiante y refrescante en cada aventura estival con nuestra selecci&oacute;n de ropa y accesorios de verano&#33;</p>
            <div class="ocean">
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
        </div>
        <script src="codigo.js"></script>
        
        <!-- Footer --> 
        <footer class="py-lg-5 py-3">
            <div class="container-fluid px-lg-5 px-3">
                <div class="row footer-top-w3layouts">
                    <div class="col-lg-3 footer-grid-w3ls">
                        <div class="footer-title">
                            <h3>NOSOTROS:</h3>
                        </div>
                        <div class="footer-text">
                            <p>Somos una empresa dedicada a [tu industria o sector]. Nuestra pasi&oacute;n es [tu pasi&oacute;n o enfoque principal]. Desde nuestro inicio, nos hemos comprometido a [tu compromiso o enfoque]</p>
                            <ul class="footer-social text-left mt-lg-4 mt-3">
                                <li class="mx-2">
                                    <a href="#">
                                        <span style="font-size: 6em !important;" class="fab fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li class="mx-2">
                                    <a href="#">
                                        <span style="font-size: 6em !important;" class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li class="mx-2">
                                    <a href="#">
                                        <span style="font-size: 6em !important;" class="fab fa-google-plus-g"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 footer-grid-w3ls">
                        <div class="footer-title">
                            <h3>ENCUENTRANOS: </h3>
                        </div>
                        <div class="contact-info">
                                 <h4 style="font-size: 2em;">Localidad :</h4>
                            <p>0926k 4th block building, king Avenue, New York City.</p>
                            <div class="phone">
                                <h4 style="font-size: 2em;">Contacto :</h4>
                                <p>Phone : +121 098 8907 9987</p>
                                <p>Email : info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 footer-grid-w3ls">
                        <div class="footer-title">					
                            <h3>LINKS: </h3>
                        </div>                   
                        <ul class="links">
                            <li>
                                <a href="index.php">-INICIO</a>
                            </li><br>
                            <li>
                                <a href="Nosotros.html">-NOSOTROS</a>
                            </li><br>
                            <li>
                                <a href="Servicios.html">-SERVICIOS</a>
                            </li><br>
                            <li>
                                <a href="Productos.html">-PRODUCTOS</a>
                            </li><br>
                            <li>
                                <a href="Contactenos.html">-CONTACTANOS</a>
                            </li><br>
                        </ul>
                    </div>
                    <div class="col-lg-3 footer-grid-w3ls">
                        <div class="footer-title">
                            <h3>REGISTRATE: </h3>
                        </div>
                        <div class="footer-text">
                            <p>Reg&iacute;strate para recibir notificaciones de ofertas diarias:</p>
                            <div class="email-form">
                                <form method="post">
                                    <label for="correo">Correo Electr&oacute;nico:</label>
                                    <input type="email" id="correo" name="correo" required>
                                    <input type="submit" value="Enviar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>  

    <script type='text/javascript' data-cfasync='false'>
        window.purechatApi = {
            l: [],
            t: [],
            on: function () {
                this.l.push(arguments);
            }
        };
        (function () {
            var done = false;
            var script = document.createElement('script');
            script.async = true;
            script.type = 'text/javascript';
            script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';
            document.getElementsByTagName('head').item(0).appendChild(script);
            script.onreadystatechange = script.onload = function (e) {
                if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
                    var w = new PCWidget({
                        c: '82ccf71e-a090-4a02-914b-77af7e93aa93',
                        f: true
                    });
                    done = true;
                }
            };
        })();
    </script>
</html>