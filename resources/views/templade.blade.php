<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Política</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="/">Home</a>
            <a class="blog-nav-item" href="/contato">Contato</a>
        </nav>
    </div>
</div>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">Blog Política</h1>
        <p class="lead blog-description">Notícias da Política Nacional e Internacional</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="blog-post">
               @yield('content')

            </div><!-- /.blog-post -->



            <nav>
                <ul class="pager">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Sobre</h4>
                <p>Crítico <em>Político</em> nas horas vagas.  Luta por um país democrático e livre.</p>
            </div>
            <div class="sidebar-module">
                <h4>Arquivos</h4>
                <ol class="list-unstyled">
                    <li><a href="#">Março 2016</a></li>
                    <li><a href="#">Fevereiro 2016</a></li>
                    <li><a href="#">Janeiro 2016</a></li>
                    <li><a href="#">Dezembro 2015</a></li>
                    <li><a href="#">Novembro 2015</a></li>
                    <li><a href="#">Outubro 2015</a></li>
                    <li><a href="#">Setembro 2015</a></li>
                    <li><a href="#">Agosto 2015</a></li>
                    <li><a href="#">Julho 2015</a></li>
                    <li><a href="#">Junho 2015</a></li>
                    <li><a href="#">Maio 2015</a></li>
                    <li><a href="#">Abril 2015</a></li>
                </ol>
            </div>
            <div class="sidebar-module">
                <h4>Acompanhe nos Canais</h4>
                <ol class="list-unstyled">
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
    <p>Todos os direitos reservados.</p>
    <p>
        <a href="#">topo</a>
    </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
