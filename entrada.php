<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./build/css/app.css">
    <title>Bienes Raices</title>
</head>
<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="./src/img/logo.svg" alt="Logo de Bienes y raices">
                </a>
                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="icono menu responsive">
                </div>
                
                <div class="derecha">
                    <img src="build/img/dark-mode.svg" alt="icono dark mode" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div>
            </div>

            <h1>Venta de Casas y Departamentos</h1>
        </div>
    </header>

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

    <?php include 'includes/templates/footer.php';?>