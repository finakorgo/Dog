<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="language" content="portuguese">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="owner" content="José Aparecido Finamor, Henrique Dias, Gilberto Garcia Ramos">
    <meta name="reply-to" content="finakorgo@gmail.com, chdias92@gmail.com,gilberto.ramos.lhp@hotmail.com">
    <meta name="copyright" content="© Vet =^.^= Dog - julho 2018">
    <meta name="robots" content="all">
    <meta name="googlebot" content="index, follow">
    <meta name="audience" content="all">
    <meta name="abstract" content="Vet Clinic">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <title>Clínica Vet =^.^= Dog</title>
    <!--link Externo-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">

    <!--link Interno-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/validation.js"></script>
    <script type="text/javascript">
        var zero = 0;
        $(document).ready(function() {
            $(window).on('scroll', function() {
                $('.logo').toggleClass('hide', $(window).scrollTop() > zero);
                zero = $(window).scrollTop();
            })
        })

    </script>
    <script type="text/javascript">
        dayName = new Array("domingo", "segunda-feira", "terça-feira", "quarta-feira", "quinta-feira", "sexta-feira", "sábado");
        monName = new Array("janeiro", "fevereiro", "março", "abril", "maio", "junho","julho", "agosto", "outubro", "novembro", "dezembro");
        now = new Date;

    </script>


</head>

<body>

    <div class="row">
        <div class="col s12 logo">
            <!--Logo-->

            <div class="col s3 offset-s1 img-logo z-depth-5 circle hoverable">
                <img src="icon/logo.png">
            </div>
            <div class="col s3 text-logo ">
                <h5 class=" flow-text light">Pet Shop Vet &nbsp; =^.^= &nbsp; Dog</h5>
                <p class="light">Cuidando de seu pet com amor.</p>
            </div>
            <!--Menu-->

            <div class="col s4 menu">
                <ul class="block-menu">
                    <li>
                        <a href="index.php" class="three-d">Home
                                 <span aria-hidden="true" class="three-d-box">
                                     <span class="front">Home</span>
                                     <span class="back">Home</span>
                                 </span>
                        </a>
                    </li>

                    <li>
                        <a href="servicos.php" class="three-d">Serviços
                                 <span aria-hidden="true" class="three-d-box">
                                     <span class="front">Serviços</span>
                                     <span class="back">Serviços</span>
                                 </span>
                        </a>
                    </li>

                    <li>
                        <a href="q-somos.php" class="three-d">Quem somos
                                 <span aria-hidden="true" class="three-d-box">
                                     <span class="front">Quem somos</span>
                                     <span class="back">Quem somos</span>
                                 </span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col s12 dt-hj">
                <script language=javascript type="text/javascript">
                    document.write("<p> Hoje é " + dayName[now.getDay()] + ", " + now.getDate() + " de " + monName[now.getMonth()] + " de " + now.getFullYear() + ". </p>")

                </script>

            </div>


        </div>


    </div>
