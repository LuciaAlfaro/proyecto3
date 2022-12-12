<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Guaris development</title>

    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="recursos/imagenesLogoFavicon/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="wrapper">
        <div class="row pegajoso">
            <div class="col-12">
                <nav id="navegacion" class="navbar flexgroup">
                    <div class="col-2 logocontainer">
                        <a href="#"><img id="logo" src="recursos/imagenesLogoFavicon/guarisDV.svg" alt="logo"></a>
                    </div>
                    <div class="col-8 flexgroup">
                        <a class='links' href="#sobrenosotros">Sobre nosotros</a>
                        <a class='links' href="#proyectos">Proyectos</a>
                        <a class='links' href="#filosofia">Filosofía</a>
                        <a class='links' href="#contacto">Contacto</a>
                    </div>
                    <div class="col-2 logocontainer">
                        <button id="botoninicio" class="botonimportante">Entra aquí</button>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <header class="col-12 imagenheader">
                <ul class="carrusel">
                    <li class="imagenesheader" id="header1">
                        <img src="recursos/imagenesHeader/h1.jpg" alt="header1">
                    </li>
                    <li class="imagenesheader" id="header2">
                        <img src="recursos/imagenesHeader/h2.png" alt="header2">
                    </li>
                    <li class="imagenesheader" id="header3">
                        <img src="recursos/imagenesHeader/h3.jpg" alt="header3">
                    </li>
                </ul>
            </header>
        </div>

        <div id="sobrenosotros" class="row blanco">
            <article class="col-4">
                <h2 class="titulocentrado">Quiénes somos</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper eros enim, ac elementum
                    mauris
                    vestibulum et. Praesent vulputate vestibulum dui quis tempus. Aliquam ex ligula, fringilla
                    et
                    semper
                    ut, pharetra vitae lacus. Phasellus luctus erat id turpis blandit tincidunt. Nam accumsan
                    libero
                    tellus, et sollicitudin lectus bibendum quis. In hac habitasse platea dictumst. Integer
                    pharetra
                    orci non enim vehicula, in scelerisque nisl finibus. Mauris dolor augue, egestas sit amet
                    pellentesque vel, porttitor ut nibh.</p>
                <button class="botonimportante centrado botonS">Saber más</button>
            </article>
            <article class="col-4">
                <h2 class="titulocentrado">Quién eres tú</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper eros enim, ac elementum
                    mauris
                    vestibulum et. Praesent vulputate vestibulum dui quis tempus. Aliquam ex ligula, fringilla
                    et
                    semper
                    ut, pharetra vitae lacus. Phasellus luctus erat id turpis blandit tincidunt. Nam accumsan
                    libero
                    tellus, et sollicitudin lectus bibendum quis. In hac habitasse platea dictumst. Integer
                    pharetra
                    orci non enim vehicula, in scelerisque nisl finibus. Mauris dolor augue, egestas sit amet
                    pellentesque vel, porttitor ut nibh.</p>
                <button class="botonimportante centrado botonS">Saber más</button>
            </article>
            <article class="col-4">
                <h2 class="titulocentrado">Y qué quieres de mí</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper eros enim, ac elementum
                    mauris
                    vestibulum et. Praesent vulputate vestibulum dui quis tempus. Aliquam ex ligula, fringilla
                    et
                    semper
                    ut, pharetra vitae lacus. Phasellus luctus erat id turpis blandit tincidunt. Nam accumsan
                    libero
                    tellus, et sollicitudin lectus bibendum quis. In hac habitasse platea dictumst. Integer
                    pharetra
                    orci non enim vehicula, in scelerisque nisl finibus. Mauris dolor augue, egestas sit amet
                    pellentesque vel, porttitor ut nibh.</p>
                <button class="botonimportante centrado botonS">Saber más</button>
            </article>
        </div>
        <section id="proyectos" class="row seccionimpar">
            <div class="col-6 ">
                <img class="imagenseccion centrado" src="recursos/imagenesSecciones/seccion1.jpg" alt="imagenseccion">
            </div>
            <div class="col-6">
                <h2>Sabemos sentarnos y cruzar las manos</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper eros enim, ac elementum
                    mauris
                    vestibulum et. Praesent vulputate vestibulum dui quis tempus. Aliquam ex ligula, fringilla et
                    semper
                    ut, pharetra vitae lacus. Phasellus luctus erat id turpis blandit tincidunt. Nam accumsan libero
                    tellus, et sollicitudin lectus bibendum quis. In hac habitasse platea dictumst. Integer pharetra
                    orci non enim vehicula, in scelerisque nisl finibus. Mauris dolor augue, egestas sit amet
                    pellentesque vel, porttitor ut nibh.</p>
            </div>
        </section>
        <section id="filosofia" class="row seccionimpar">
            <div class="col-6">
                <h2>¡Mira, Tenemos una tablet!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper eros enim, ac elementum
                    mauris
                    vestibulum et. Praesent vulputate vestibulum dui quis tempus. Aliquam ex ligula, fringilla et
                    semper
                    ut, pharetra vitae lacus. Phasellus luctus erat id turpis blandit tincidunt. Nam accumsan libero
                    tellus, et sollicitudin lectus bibendum quis. In hac habitasse platea dictumst. Integer pharetra
                    orci non enim vehicula, in scelerisque nisl finibus. Mauris dolor augue, egestas sit amet
                    pellentesque vel, porttitor ut nibh.</p>
            </div>
            <div class="col-6 ">
                <img class="imagenseccion centrado" src="recursos/imagenesSecciones/seccion2.jpg" alt="imagenseccion">
            </div>
        </section>
        <div class="row">
            <div id="contacto" class="col-12">
                <h1 class="titulocentrado">Conócenos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="recursos/imagenesPersonal/chico1.png" alt="Jane">
                    <div class="cardcontainer">
                        <h2>Andrés Esparza</h2>
                        <p class="title">Fundador y director general</p>
                        <p>La filosofía Guaris se centra en ayudar a las empresas a mejorar su rentabilidad y
                            resultados.</p>
                        <p>andres@empresa.com</p>
                        <p><button class="botonimportante botonS">Contactar</button></p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <img src="recursos/imagenesPersonal/chica1.png" alt="Mike">
                    <div class="cardcontainer">
                        <h2>Lucía Alfaro</h2>
                        <p class="title">Directora creativa</p>
                        <p>Innovar juntos y la pasión por el desarrollo web son nuestros valores corporativos oficiales.
                        </p>
                        <p>lucia@empresa.com</p>
                        <p><button class="botonimportante botonS">Contactar</button></p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <img src="recursos/imagenesPersonal/chico2.png" alt="John">
                    <div class="cardcontainer">
                        <h2>Eladio Hernández</h2>
                        <p class="title">Jefe de ventas</p>
                        <p>Le vendo hielo a un esquimal. Tengo que rellenar el texto para que haga un salto de línea.
                        </p>
                        <p>eladio@empresa.com</p>
                        <p><button class="botonimportante botonS">Contactar</button></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row seccionformulario">
            <div class="col-5 contactanos">
                <h1 class="centrado">Contáctanos</h1><br><br>
                <p>¿Quieres aumentar tu amplitud comercial? Cuenta con nosotros para el desarrollo de tu página web,
                    perfeccionaremos la imagen y el prestigio de tu empresa mientras ahorras tiempo y dinero.</p><br>
                <iframe class="centrado"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3160.84559366413!2d-0.9923797843511518!3d37.60579282963586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd634224e0bc8c2b%3A0xf62d78a986855460!2sCIFP%20Carlos%20III!5e0!3m2!1ses!2ses!4v1669837327101!5m2!1ses!2ses"
                    width="500" height="250" style="border:0"></iframe>
            </div>
            <div class="ml-1"></div>

            <section class="col-6 container">
                <form action="action_page.php">

                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                    <label for="email">Correo electrónico</label>
                    <input type="text" id="email" name="email" placeholder="correo@empresa.com">

                    <label for="country">Región</label>
                    <select id="country" name="country">
                        <option value="canteras">Canteras (Libre)</option>
                        <option value="lpaca">La Paca (Lorca)</option>
                        <option value="lopoyo">Lo Poyo</option>
                        <option value="lpaganes">Los Paganes</option>
                        <option value="perin">Perín</option>

                    </select>

                    <label for="consulta">Consulta</label>
                    <textarea id="consulta" name="consulta" placeholder="Escriba su consulta..."
                        style="height:200px"></textarea>


                    <button class="botonimportante botonS">Enviar</button>
                </form>
            </section>
        </div>
        <footer class="row">
            <div class="col-12 f">
                <a class="enlacesinteres" href="#mapaweb">Mapa web</a>
                <a class="enlacesinteres" href="#avisolegal">Aviso legal</a>
                <a class="enlacesinteres" href="#politicaprivacidad">Política de privacidad</a>
                <a class="enlacesinteres" href="#cookies">Política de cookies</a>
                <a class="enlacesinteres" href="#contacto">Contacto</a>
            </div>
            <div class="col-12 f">
                <p class="copyright">© GuarisDevelopment.es, 2022</p>
            </div>
            <div class="col-12 f">
                <a class="rrss" href="#facebook"><img src="recursos/imagenesRRSS/facebook.png" alt=""></a>
                <a class="rrss" href="#youtube"><img src="recursos/imagenesRRSS/youtube.png" alt=""></a>
                <a class="rrss" href="#instagram"><img src="recursos/imagenesRRSS/instagram2.png" alt=""></a>
                <a class="rrss" href="#twitter"><img src="recursos/imagenesRRSS/twitter.png" alt=""></a>
            </div>
        </footer>
    </div>
</body>
</html>
