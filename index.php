<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RB Cursos</title>

        <!--[if lt IE 9]>
          <script src="_cdn/html5shiv.js"></script>
        <![endif]--> 

        <!-- MEUS LINKS DE STYLES E FONTS  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700,800" rel="stylesheet">
        <link rel="stylesheet" href="css/Icons.css"/>
        <link rel="stylesheet" href="css/Boot.css"/>
        <link rel="stylesheet" href="css/Style.css"/>
        <link rel="stylesheet" href="css/materialize.css"/>
        <link rel="stylesheet" href="_cdn/shadowbox/shadowbox.css">
        <link rel="shortcut icon" href="css/Icones/favicon.png"/>

    </head>
    <body>
        <!--HEDARE-->
        <header class="main_header">
            <!--nav left-->
            <nav class="main_nav">
                <span class="btn-href waves-effect waves-light">MENU</span>
                <ul>
                    <li><a href="" title="">Home</a></li>
                    <li><a href="" title="">Fórum</a></li>
                    <li><a href="" title="">Autor</a></li>
                </ul>
            </nav>

            <!--logo center-->
            <div class="main_logo">
                <h1><a href="" title=""><img src="images/logo.png"/></a></h1>
            </div>

            <!--area de login-->
            <div class="main_login">
                <span class="btn-href-mob mob waves-effect waves-light">Entrar</span>
                <a href="" class="btn-href loga  transitions waves-effect waves-light radius">Login</a>
                <a href="" class="btn-href  transition waves-effect waves-light radius">Cadastrar</a>
            </div>
        </header>
        <!--end header-->

        <!--main contegory-->
        <section class="main_category-li container">
            <div class="content">
                <div class="category_mobile waves-effect waves-light transition">
                    <h2>Mostra Categoria</h2>
                </div>
                <ul class="main_category">
                    <li><a href="" title="Todas as Categorias" class="waves-effect waves-light"><img src="css/Icones/variados.png" title="Todas as Categorias" alt="Todas as Categorias"/><br><h2>Variados</h2></a></li>
                    <li><a href="" title="Front End" class="waves-effect waves-light"><img src="css/Icones/html.png" title="Front End" alt="Front End"/><br><h2>Front-end</h2></a></li>
                    <li><a href="" title="Back End" class="waves-effect waves-light"><img src="css/Icones/php.png" title="Back End" alt="Back End"/><br><h2>Back-end</h2></a></li>
                    <li><a href="" title="Design" class="waves-effect waves-light"><img src="css/Icones/photoshop.png" title="Design" alt="Design"/><br><h2>Design</h2></a></li>
                    <li><a href="" title="Cursos" class="waves-effect waves-light"><img src="css/Icones/curses.png" title="Cursos" alt="Cursos"/><br><h2>Cursos</h2></a></li>
                    <li><a href="" title="Podcast" class="waves-effect waves-light"><img src="css/Icones/pod.png" title="Podcast" alt="Podcast"/><br><h2>Podcast</h2></a></li>
                    <li><a href="" title="Marketing e Midias" class="waves-effect waves-light"><img src="css/Icones/mm.png" title="Marketing e Midias" alt="Marketing e Midias"/><br><h2>Marketing</h2></a></li>
                </ul>

                <!--main search-->
                <div class="main_search radius">
                    <form action="" method="post" class="search">
                        <input type="text" name="s" placeholder="Pesquisar Rapida.."/>
                        <button type="submit" name="" class="icon-search"></button>
                    </form>
                </div>
            </div>
        </section>

        <!--main container--> 
        <main class="main_conteiner">
            <div class="content">
                <!--anuncios ads center-->
                <div class="main_ads_970 wl">

                </div>

                <!--div box-->
                <section class="main_box_container">
                    <?php
                    for ($i = 1; $i < 8; $i++) {
                        ?>
                        <div class="main_box">
                            <a href="" title="">
                                <div class="content_image">
                                    <img src="images/epico.png"/>
                                </div>
                                <div class="content_p">
                                    <header>
                                        <h1>As linguages mais populares entre</h1>
                                    </header>
                                    <p>Quais as linguagens de programação, script e marcação mais populares? Quais são as mais amadas, temida e mais procuras? E principalmente, quais pagam mais?</p>

                                    <time>Postado por<span>Railan Bernardo</span> <spam>26/04/2018 13:39Hs</spam></time>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                    
                    <div class="main_pagination radius">
                        <ul class="pagination">
                            <li><a href="">Primeira</a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">Útima</a></li>
                        </ul>
                    </div>
                </section>

                
                <!--sidebar lateral-->
                <aside class="main_sidebar">
                    <!--anuncio 350-->
                    <div class="main_ads_350">

                    </div>

                    <div class="divisor">
                        <h2 class="icon-news icon-notext">
                            Mais Lidas
                        </h2>
                    </div>
                    <?php
                    for ($i = 1; $i < 7; $i++) {
                        ?>
                        <a href="" title="">
                            <div class="main_box_sidebar">
                                <div class="content_image">
                                    <img src="images/epico.png"/>
                                </div>
                                <header>
                                    <h1>As linguages</h1>
                                </header>
                            </div>
                        </a>
                        <?php
                    }
                    ?>
                    <!--main ads 620 altura-->
                    <article class="main_ads_620">

                    </article>
                </aside>
                <!--end sidebar-->
                
                <!--anuncio ads footer-->
                <div class="main_ads_970 wl">

                </div>
                <div class="clear"></div>
            </div>
        </main>

        <!--rodapé-->
        <footer class="main_rodaper">
            <div class="content">
                <div class="logo_footer">
                    <img src="images/logo_footer.png" title="RB Curso Treinamentos web" alt="RB Curso Treinamentos web"
                </div>
                <div class="midia">
                    <a href="" title="Facebook" class="icon-facebook icon-notext"></a>
                    <a href="" title="YouTube" class="icon-youtube-play icon-notext"></a>
                    <a href="" title="Google plus" class="icon-google-plus icon-notext"></a>
                </div>
                <div class="copy">
                    <p>RB Cursos direitos reservados &copy; 2018</p>
                </div>
                <div class="clear"></div>
            </div>
        </footer>

    </body>
    <script src="_cdn/jquery.js"></script>
    <script src="_cdn/materialize.js"></script>
    <script src="_cdn/Custom.js"></script>

</html>

