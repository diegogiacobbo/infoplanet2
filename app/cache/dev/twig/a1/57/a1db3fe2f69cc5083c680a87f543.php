<?php

/* GerenciadorLoginBundle::layout.html.twig */
class __TwigTemplate_a157a1db3fe2f69cc5083c680a87f543 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        <style type=\"text/css\">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"#\">Administração</a>
                    <div class=\"nav-collapse collapse\">
                        <ul class=\"nav\">
                            <li class=\"active\"><a href=\"#\">Home</a></li>
                            <li><a href=\"#about\">Sobre</a></li>
                            <li><a href=\"#contact\">Contato</a></li>
                            <li class=\"dropdown\">
                                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Registros no Sistema <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_cidade"), "html", null, true);
        echo "\">Cidades</a></li>
                                    <li><a href=\"#\">Another action</a></li>
                                    <li><a href=\"#\">Something else here</a></li>
                                    <li class=\"divider\"></li>
                                    <li class=\"nav-header\">Nav header</li>
                                    <li><a href=\"#\">Separated link</a></li>
                                    <li><a href=\"#\">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class=\"navbar-form pull-right\">
                            <input class=\"span2\" type=\"text\" placeholder=\"Email\">
                            <input class=\"span2\" type=\"password\" placeholder=\"Password\">
                            <button type=\"submit\" class=\"btn\">Sign in</button>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>     
        ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://code.jquery.com/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
        <!--<script src=\"{ { asset('bundles/mercadopagina/js/jquery.js') }}\"></script>-->
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap.js"), "html", null, true);
        echo "\"></script>        
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
        <!--<script src=\"{ { asset('bundles/mercadopagina/js/bootstrap-transition.js') }}\"></script>
        <script src=\"{ { asset('bundles/mercadopagina/js/bootstrap-alert.js') }}\"></script>
        <script src=\"{ { asset('bundles/mercadopagina/js/bootstrap-modal.js') }}\"></script>
        <script src=\"{ { asset('bundles/mercadopagina/js/bootstrap-dropdown.js') }}\"></script>
        <script src=\"{ { asset('bundles/mercadopagina/js/bootstrap-scrollspy.js') }}\"></script>
        <script src=\"{ { asset('bundles/mercadopagina/js/bootstrap-tab.js') }}\"></script>
        <script src=\"{ { asset('bundles/mercadopagina/js/bootstrap-tooltip.js') }}\"></script>
        <script src=\"{ { asset('bundles/mercadopagina/js/bootstrap-popover.js') }}\"></script>
        <script src=\"{ { asset('bundles/mercadopagina/js/bootstrap-button.js') }}\"></script>
        <script src=\"{ { asset('bundles/mercadopagina/js/bootstrap-collapse.js') }}\"></script>
        <script src=\"{ { asset('bundles/mercadopagina/js/bootstrap-carousel.js') }}\"></script>
        <script src=\"{ { asset('bundles/mercadopagina/js/bootstrap-typeahead.js') }}\"></script> -->
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('.dropdown-toggle').focusout(function(){
                    \$('.dropdown').removeClass('open');
                });
                \$('.dropdown-toggle').click(function(){
                    if(\$('.dropdown').hasClass('open'))
                        \$('.dropdown').removeClass(\"open\");
                    else
                        \$('.dropdown').addClass(\"open\");
                });
                
            });
        </script>
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Gerenciador/LoginBundle Bundle";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "        ";
    }

    public function getTemplateName()
    {
        return "GerenciadorLoginBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 55,  142 => 54,  136 => 6,  103 => 59,  99 => 58,  93 => 56,  91 => 54,  69 => 35,  46 => 15,  42 => 14,  38 => 13,  28 => 6,  21 => 1,);
    }
}
