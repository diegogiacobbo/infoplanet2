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
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
\t\t<link rel=\"stylesheet\" media=\"all\" href=\"\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<!-- Adding \"maximum-scale=1\" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
   </head>
       \t<div class=\"main\">
\t\t\t<div class=\"header\">
\t\t\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\"><img alt=\"Logo da loja Mercado de Sabores\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/logo.png"), "html", null, true);
        echo "\"></a>
       \t\t\t<div class=\"media\">
       \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"banner\">
\t\t\t\t<div class=\"previous\">
\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t</div>
\t\t\t<div class=\"one\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>Produto Destaque</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"paragraph\">
\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\ttypesetting industry. Lorem Ipsum has been the industry's standard
\t\t\t\t\t\tdummy text ever since the 1500s, when an unknown printer took a
\t\t\t\t\t\tgalley of type and scrambled it to make a type specimen book.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"img_banner\">
\t\t\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/img_banner_01.png"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"next\">
\t\t\t\t<a href=\"#\"></a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"content\">
\t\t\t
\t\t\t";
        // line 43
        $this->displayBlock('content_header', $context, $blocks);
        // line 48
        echo "                
          \t";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "\t\t\t
\t</div>
\t<div class=\"footer\">
\t\t<p>Avenida Presidente Franklin Roosevelt, 1241 - Loja 04<br>
\t\tNavengantes - Porto Alegre, RS<br>
\t\tTelefone : 3028 7219</p>
\t</div>
\t<div class=\"dw\">
\t
\t</div>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Mercado de Sabores";
    }

    // line 43
    public function block_content_header($context, array $blocks = array())
    {
        // line 44
        echo "            \t";
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 47
        echo "            ";
    }

    // line 44
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 45
        echo "           \t\t<!--<li><a href=\"{ path('_demo') }}\">Demo Home</a></li>-->
            \t";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
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
        return array (  129 => 50,  126 => 49,  121 => 45,  118 => 44,  114 => 47,  111 => 44,  108 => 43,  102 => 6,  88 => 51,  86 => 49,  83 => 48,  81 => 43,  69 => 34,  45 => 15,  34 => 7,  30 => 6,  23 => 1,);
    }
}
