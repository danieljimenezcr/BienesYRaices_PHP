    <?php 
        $inicio = true;
        include 'includes/templates/header.php'
    ;?>
    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, non atque ratione consectetur magnam delectus quis voluptas exercitationem.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, non atque ratione consectetur magnam delectus quis voluptas exercitationem.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, non atque ratione consectetur magnam delectus quis voluptas exercitationem.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casa y Departamentos en Venta</h2>
            <div class="contenedor-anuncios">
                    <div class="anuncio">
                        <picture>
                            <source srcset="build/img/anuncio1.webp" type="image/webp">
                            <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                            <img loading=lazy src="build/img/anuncio1.jpg" alt="anuncio">
                        </picture>
                        <div class="contenido-anuncio">
                            <h3>Casa de Lujo en el Lago</h3>
                            <p>Casa en el lago con excelente vista, acabados de lugo a un excelente precio</p>
                            <p class="precio">$3,000,000</p>

                            <ul class="iconos-caracteristicas">
                                <li>
                                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                                    <p>3</p>
                                </li>
                                 <li>
                                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                                    <p>3</p>
                                </li>
                                 <li>
                                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                                    <p>4</p>
                                </li>
                            </ul>

                            <a href="anuncios.php" class="boton-amarillo-block">
                                Ver Propiedad
                            </a>  
                        </div> <!--.contenido-anuncio-->
                    </div> <!--.anuncio-->
                    <div class="anuncio">
                        <picture>
                            <source srcset="build/img/anuncio2.webp" type="image/webp">
                            <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                            <img loading=lazy src="build/img/anuncio2.jpg" alt="anuncio">
                        </picture>
                        <div class="contenido-anuncio">
                            <h3>Casa moderna de lujo</h3>
                            <p>Casa con diseño moderno, asi como con tecnología inteligente y amueblada</p>
                            <p class="precio">$2,000,000</p>

                            <ul class="iconos-caracteristicas">
                                <li>
                                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                                    <p>3</p>
                                </li>
                                 <li>
                                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                                    <p>3</p>
                                </li>
                                 <li>
                                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                                    <p>4</p>
                                </li>
                            </ul>

                            <a href="anuncios.php" class="boton-amarillo-block">
                                Ver Propiedad
                            </a>  
                        </div> <!--.contenido-anuncio-->
                    </div> <!--.anuncio-->
                    <div class="anuncio">
                        <picture>
                            <source srcset="build/img/anuncio3.webp" type="image/webp">
                            <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                            <img loading=lazy src="build/img/anuncio3.jpg" alt="anuncio">
                        </picture>
                        <div class="contenido-anuncio">
                            <h3>Casa con piscina</h3>
                            <p>Casa con piscina y acabados de lujo en la ciudad, excelente oportunidad</p>
                            <p class="precio">$3,000,000</p>

                            <ul class="iconos-caracteristicas">
                                <li>
                                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                                    <p>3</p>
                                </li>
                                <li>
                                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                                    <p>3</p>
                                </li>
                                <li>
                                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                                    <p>4</p>
                                </li>
                            </ul>

                            <a href="anuncios.php" class="boton-amarillo-block">
                                Ver Propiedad
                            </a>  
                        </div> <!--.contenido-anuncio-->
                    </div> <!--.anuncio-->
            </div> <!--.contenedor-anuncios-->

            <div class="alinear-derecha">
                <a href="anuncios.php" class="boton-verde">Ver Todas</a>
                
            </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta"></p>>Escrito el: <span>20/12/2022</span> por: <span>Admin</span></p>

                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrandio dinero</p>
                    </a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoración de tu hogar</h4>
                        <p class="informacion-meta"></p>>Escrito el: <span>20/12/2022</span> por: <span>Admin</span></p>

                        <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena la atención y la casa que me ofrecieron cumple con mis expectativas.
                </blockquote>
                <p>- Daniel Jiménez</p>
            </div>
        </section>
    </div>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos Reservados 2022 &copy;</p>
    </footer>
    <script src="/build/js/bundle.min.js"></script>
</body>
</html>