<?php include 'includes/templates/header.php';?>


    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta en la ciudad</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
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
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora dignissimos autem voluptas facere necessitatibus recusandae tempore doloribus quis natus. Earum, nisi neque ducimus voluptatibus porro voluptatum magnam laboriosam deserunt natus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas consectetur, dicta porro quasi, laboriosam, sed praesentium molestiae rerum enim unde adipisci numquam eos corporis? Et repellat repellendus dolores fuga deleniti.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum porro provident earum nisi, facilis vero commodi maxime blanditiis sed exercitationem aspernatur itaque repudiandae vitae enim cupiditate perferendis sit, ea veniam.</p>
        </div>
    </main>

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