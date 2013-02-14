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
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <style type=\"text/css\">
                body {
                    padding-top: 20px;
                    padding-bottom: 60px;
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
                }

                .navbar .nav {
                    margin: 0;
                    display: table;
                    width: 100%;
                }

                .navbar .nav li {
                    display: table-cell;
                    width: 1%;
                    float: none;
                }

                .navbar .nav li a {
                    font-weight: bold;
                    text-align: center;
                    border-left: 1px solid rgba(255, 255, 255, .75);
                    border-right: 1px solid rgba(0, 0, 0, .1);
                }

                .navbar .nav li:first-child a {
                    border-left: 0;
                    border-radius: 3px 0 0 3px;
                }

                .navbar .nav li:last-child a {
                    border-right: 0;
                    border-radius: 0 3px 3px 0;
                }
            </style>
        </head>
        <body>
            <div class=\"container\">
                <header class=\"masthead\">
                    <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Mercado de Sabores logo\" />
                    </a>
                    <div class=\"navbar\">
                        <div class=\"navbar-inner\">
                            <div class=\"container\">
                                <ul class=\"nav\">
                                    <li class=\"active\"><a href=\"#\">Home</a></li>
                                    <li><a href=\"#\">LINK2</a></li>
                                    <li><a href=\"#\">LINK3</a></li>
                                    <li><a href=\"#\">LINK4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.navbar -->
                </header>

            ";
        // line 112
        $this->displayBlock('content_header', $context, $blocks);
        // line 117
        echo "
            ";
        // line 118
        $this->displayBlock('content', $context, $blocks);
        // line 120
        echo "
            <footer class=\"footer\">
                <p>&copy; DesenhandoWeb 2013</p>
            </footer>

        </div>
    </body>
</html>
";
    }

    // line 112
    public function block_content_header($context, array $blocks = array())
    {
        // line 113
        echo "                    ";
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 116
        echo "            ";
    }

    // line 113
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 114
        echo "                <!--<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Demo Home</a></li>-->
                    ";
    }

    // line 118
    public function block_content($context, array $blocks = array())
    {
        // line 119
        echo "            ";
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
        return array (  192 => 119,  189 => 118,  182 => 114,  179 => 113,  175 => 116,  172 => 113,  169 => 112,  157 => 120,  155 => 118,  152 => 117,  150 => 112,  130 => 95,  126 => 94,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }
}
