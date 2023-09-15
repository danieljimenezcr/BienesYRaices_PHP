<?php 
        require 'includes/funciones.php';
        incluirTemplate('header');
;?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy"src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>   
            </div>
            
            <div class="texto-nosotros">
                <blockquote>25 Años de Experiencia</blockquote>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero totam, officia nemo nam magnam esse, aut dolor necessitatibus sint laboriosam, ea delectus natus enim at non quasi velit dolores officiis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sint atque quae mollitia facilis. Animi, aliquid? Iure id labore illum eos rerum, nisi dolor, tempore similique necessitatibus ratione quaerat consequatur.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, aliquam tempora! Ullam harum nesciunt a recusandae ipsa, quod error rerum quasi, cum dolores libero modi, deleniti sunt quis! Asperiores, at.</p>
            </div>

        </div>
    </main>

    <section class="contenedor seccion">
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
    </section>

    <?php incluirTemplate('footer');?>