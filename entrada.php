<?php 
        require 'includes/funciones.php';
        incluirTemplate('header');
;?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Consejos para construir una casa</h1>
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>
        <p class="informacion-meta">Escrito el: <span>20/12/2022</span> por: <span>Admin</span></p>
        <div class="resumen-propiedad">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora dignissimos autem voluptas facere necessitatibus recusandae tempore doloribus quis natus. Earum, nisi neque ducimus voluptatibus porro voluptatum magnam laboriosam deserunt natus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas consectetur, dicta porro quasi, laboriosam, sed praesentium molestiae rerum enim unde adipisci numquam eos corporis? Et repellat repellendus dolores fuga deleniti.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum porro provident earum nisi, facilis vero commodi maxime blanditiis sed exercitationem aspernatur itaque repudiandae vitae enim cupiditate perferendis sit, ea veniam.</p>
        </div>
    </main>

    <?php incluirTemplate('footer');?>