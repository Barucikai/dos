<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Fin de Bootstrap css -->

    <!-- CSS y SASS para interface -->
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS y SASS para interface -->

    <title>Responsive Design</title>
</head>

<body>
    <section class="banner">
        <div class="box content">
            <header>
                <img class="logo" src="img/logo1.png" alt="">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Portafolio</a></li>
                    <li><a href="#">Creatividad</a></li>
                    <li><a href="#">creacion</a></li>
                </ul>
            </header>
            <div class="contentBox">
                <h2>Responsive Design</h2>
                <p>Pronto podrás ver nuestros servicios</p>
                <a href="#" class="btn">Más Informacion</a>

            </div>

            <ul class="sci">
                <h3>Redes</h3>
                <li><a href="#"><img class="imge" src="img/icon/github.svg"></a></li>
                <li><a href="#"><img class="imge" src="img/icon/dribbble.svg"></a></li>
                <li><a href="#"><img class="imge" src="img/icon/twitter.svg"></a></li>
                <li><a href="#"><img class="imge" src="img/icon/whatsapp.svg"></a></li>
                <li><a href="#"><img class="imge" src="img/icon/gmail.svg"></a></li>
            </ul>

            <button class="switch" id="switch">
                <span><img class="imgls" src="img/icon/sol.svg" alt=""></span>
                <span><img class="imgls" src="img/icon/luna.svg" alt=""></span>
            </button>
        </div>
        <div class="box images">
            <div class="imgBx">
                <img class="imge" src="img/num_1.jpg" alt="">
            </div>
            <div class="imgBx">
                <img class="imge" src="img/num_2.jpg" alt="">
            </div>
            <div class="imgBx">
                <img class="imge" src="img/num_3.png" alt="">
            </div>
        </div>

        </div>
        </div>

    </section>

    <!----------------------------------------color blanco y negro JS-------------------------------------------------->
    <script>
        const btnSwitch = document.querySelector('#switch');
        btnSwitch.addEventListener('click', () => {
            document.body.classList.toggle('dark');
            btnSwitch.classList.toggle('active');
        });
    </script>
    <!----------------------------------------color blanco y negro FIN-------------------------------------------------->
    <footer class="footer">
        <div class="inner-footer">
            mas informacion
        </div>
    </footer>
</body>

</html>