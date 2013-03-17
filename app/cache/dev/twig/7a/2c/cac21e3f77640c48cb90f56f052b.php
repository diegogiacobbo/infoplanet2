<?php

/* MercadoPaginaBundle::layout.html.twig */
class __TwigTemplate_7a2ccac21e3f77640c48cb90f56f052b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
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
                
                textarea, input{
                    color: #000!important;
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
        // line 130
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
                                <li><a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">Home</a></li>
                                <li><a href=\"#\">Produtos</a></li>
                            </ul>
                        </div>    
                        <a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">
                            <div class=\"span4 visible-desktop logo\">                            
                            </div>
                        </a>
                        <div class=\"span4\">                            
                            <ul class=\"nav\">
                                <li><a href=\"#\">Curiosidades</a></li>
                                <li><a href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MercadoPaginaBundle_contato"), "html", null, true);
        echo "\">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.navbar -->
                </header>

                ";
        // line 161
        $this->displayBlock('content_header', $context, $blocks);
        // line 166
        echo "
            </div>
                ";
        // line 168
        $this->displayBlock('content', $context, $blocks);
        // line 170
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

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Mercado de Sabores";
    }

    // line 161
    public function block_content_header($context, array $blocks = array())
    {
        // line 162
        echo "                        ";
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 165
        echo "                ";
    }

    // line 162
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 163
        echo "                <!--<li><a href=\"{ path('_demo') }}\">Demo Home</a></li>-->
                        ";
    }

    // line 168
    public function block_content($context, array $blocks = array())
    {
        // line 169
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
        return array (  260 => 169,  257 => 168,  252 => 163,  249 => 162,  245 => 165,  242 => 162,  239 => 161,  233 => 6,  217 => 170,  215 => 168,  211 => 166,  209 => 161,  199 => 154,  189 => 147,  182 => 143,  166 => 130,  39 => 9,  30 => 6,  23 => 1,  60 => 14,  54 => 21,  52 => 11,  45 => 7,  38 => 6,  35 => 8,  29 => 3,);
    }
}
