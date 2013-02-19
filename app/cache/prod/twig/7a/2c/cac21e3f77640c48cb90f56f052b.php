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
        return array (  235 => 162,  227 => 156,  223 => 159,  217 => 155,  201 => 164,  199 => 162,  195 => 160,  193 => 155,  156 => 124,  42 => 7,  137 => 39,  129 => 30,  126 => 29,  119 => 32,  77 => 36,  23 => 1,  54 => 21,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 105,  389 => 103,  374 => 101,  364 => 99,  361 => 98,  358 => 97,  354 => 95,  347 => 91,  343 => 90,  329 => 89,  326 => 88,  320 => 86,  306 => 85,  301 => 84,  294 => 81,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 70,  238 => 163,  230 => 157,  188 => 61,  185 => 60,  161 => 58,  154 => 55,  146 => 51,  143 => 50,  134 => 38,  131 => 42,  122 => 37,  76 => 19,  72 => 26,  51 => 13,  171 => 58,  163 => 55,  159 => 53,  152 => 50,  138 => 44,  123 => 42,  117 => 29,  111 => 27,  101 => 34,  98 => 46,  83 => 40,  75 => 27,  71 => 20,  64 => 16,  43 => 7,  250 => 71,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 156,  218 => 67,  215 => 78,  212 => 77,  209 => 76,  200 => 66,  194 => 65,  179 => 59,  176 => 141,  173 => 59,  166 => 55,  162 => 54,  157 => 56,  155 => 51,  151 => 48,  148 => 47,  145 => 46,  139 => 45,  128 => 43,  109 => 31,  87 => 42,  84 => 21,  114 => 28,  104 => 19,  80 => 23,  65 => 23,  63 => 13,  58 => 10,  40 => 6,  34 => 11,  24 => 4,  46 => 8,  29 => 3,  36 => 5,  32 => 4,  27 => 3,  125 => 24,  118 => 36,  110 => 20,  97 => 18,  92 => 44,  89 => 43,  85 => 14,  69 => 17,  28 => 3,  22 => 1,  57 => 9,  50 => 21,  47 => 7,  38 => 6,  25 => 3,  19 => 1,  94 => 39,  88 => 6,  79 => 26,  48 => 7,  39 => 6,  35 => 9,  31 => 8,  26 => 6,  21 => 1,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 44,  130 => 35,  124 => 32,  121 => 31,  113 => 21,  108 => 31,  105 => 5,  102 => 28,  99 => 26,  95 => 24,  91 => 16,  81 => 38,  70 => 15,  66 => 13,  62 => 23,  59 => 13,  56 => 12,  52 => 11,  49 => 10,  45 => 8,  41 => 11,  37 => 5,  33 => 6,  30 => 3,);
    }
}
