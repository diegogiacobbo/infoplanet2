<?php

/* MercadoPaginaBundle::layout.html.twig */
class __TwigTemplate_7a2ccac21e3f77640c48cb90f56f052b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Mercado de Sabores</title>
        <!--<link href=\"{ asset('bundles/mercadopagina/css/bootstrap.min.css') }}\" rel=\"stylesheet\" media=\"screen\">-->
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <style type=\"text/css\">

                *{

                    text-shadow: none !important;
                    color: white !important;

                }
                body {
                    padding-top: 20px;
                    padding-bottom: 60px;
                    background: url(\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/bg.jpg"), "html", null, true);
        echo "\") repeat;
                }

                /* Custom container */
                .container {
                    margin: 0 auto;
                    max-width: 1000px;
                }

                .container>hr {
                    margin: 60px 0;
                }

                /* Main marketing message and sign up button */
                .jumbotron {
                    margin: 80px 0;
                    text-align: center;
                }

                .jumbotron h1 {
                    font-size: 100px;
                    line-height: 1;
                }

                .jumbotron .lead {
                    font-size: 24px;
                    line-height: 1.25;
                }

                .jumbotron .btn {
                    font-size: 21px;
                    padding: 14px 24px;
                }

                /* Supporting marketing content */
                .marketing {
                    margin: 60px 0;
                }

                .marketing p+h4 {
                    margin-top: 28px;
                }

                /* Customize the navbar links to be fill the entire space of the .navbar */
                .navbar .navbar-inner {
                    padding: 0;
                    background: none !important;
                    color: white !important;
                    text-shadow: none !important;
                    border: none !important;
                }
                .navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus{
                    text-decoration: underline !important;
                    background: none !important;
                    color: white !important;
                    text-shadow: none !important;
                }
                .navbar .nav {
                    margin: 0;
                    display: table;
                    width: 100%;
                }

                .navbar .nav li {
                    display: table-cell; 
                    /*width: 1%;*/
                    float: none;
                }

                .navbar .nav li a {
                    text-align: center;
                    /*border-left: 1px solid rgba(255, 255, 255, .75);
                    border-right: 1px solid rgba(0, 0, 0, .1);*/
                }

                /*
                .navbar .nav li:first-child a {
                    border-left: 0;
                    border-radius: 3px 0 0 3px;
                }

                .navbar .nav li:last-child a {
                    border-right: 0;
                    border-radius: 0 3px 3px 0;
                }*/

                article.row-fluid > .centralizador{
                    margin: 0 11% 0 11%;
                }


                footer, .footer{
                }
                
                .li_center{
                    text-align: center;
                }
                
                .li_right{
                    text-align: right;
                }
                
                .logo{
                    background: url(\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/logo.png"), "html", null, true);
        echo "\") center;
                    background-size: 100% 100%;
                    height: 190px;
                    width: 120px;
                }
            </style>
        </head>
        <body>
            <div class=\"container\">
                <header class=\"navbar\">
                    <div class=\"navbar-inner row-fluid\">
                        <div class=\"span4\">
                            <ul class=\"nav\">
                                <li><a href=\"#\">Home</a></li>
                                <li><a href=\"#\">Produtos</a></li>
                            </ul>
                        </div>    
                        <a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">
                            <div class=\"span4 visible-desktop logo\">                            
                            </div>
                        </a>
                        <div class=\"span4\">                            
                            <ul class=\"nav\">
                                <li><a href=\"#\">Curiosidades</a></li>
                                <li><a href=\"#\">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.navbar -->
                </header>

                ";
        // line 155
        $this->displayBlock('content_header', $context, $blocks);
        // line 160
        echo "
            </div>
                ";
        // line 162
        $this->displayBlock('content', $context, $blocks);
        // line 164
        echo "
            <div class=\"container\">

                <article class=\"row-fluid\">
                    <footer class=\"footer span10\">
                        <p>&copy; DesenhandoWeb 2013</p>
                    </footer>

                </article>
            </div>
        </body>
    </html>
";
    }

    // line 155
    public function block_content_header($context, array $blocks = array())
    {
        // line 156
        echo "                        ";
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 159
        echo "                ";
    }

    // line 156
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 157
        echo "                <!--<li><a href=\"{ path('_demo') }}\">Demo Home</a></li>-->
                        ";
    }

    // line 162
    public function block_content($context, array $blocks = array())
    {
        // line 163
        echo "                ";
    }

    public function getTemplateName()
    {
        return "MercadoPaginaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 163,  235 => 162,  230 => 157,  227 => 156,  223 => 159,  220 => 156,  217 => 155,  201 => 164,  199 => 162,  195 => 160,  193 => 155,  176 => 141,  156 => 124,  50 => 21,  31 => 8,  22 => 1,  38 => 6,  35 => 9,  29 => 3,);
    }
}
