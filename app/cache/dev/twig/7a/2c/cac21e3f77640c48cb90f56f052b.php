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
   \t\t</head>
   \t\t<div class=\"header\">
       \t\t<div class=\"main\">
\t\t\t\t<div class=\"media\">
\t\t\t\t\t<!--<div class=\"face-img\">
\t\t\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/face_madeira.png"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>-->
\t\t\t\t\t<div id=\"fb-root\"></div>
\t\t\t\t\t<script>(function(d, s, id) {
\t\t\t\t\t  var js, fjs = d.getElementsByTagName(s)[0];
\t\t\t\t\t  if (d.getElementById(id)) return;
\t\t\t\t\t  js = d.createElement(s); js.id = id;
\t\t\t\t\t  js.src = \"//connect.facebook.net/en_GB/all.js#xfbml=1&appId=496543693757445\";
\t\t\t\t\t  fjs.parentNode.insertBefore(js, fjs);
\t\t\t\t\t}(document, 'script', 'facebook-jssdk'));</script>
\t\t\t   \t<div class=\"fb-like\" data-href=\"https://www.facebook.com/www.mercadodesabores.com.br?ref=ts&amp;fref=ts\" data-send=\"true\" data-width=\"700\" data-show-faces=\"true\" data-colorscheme=\"dark\"></div>
\t\t   \t\t</div>
\t\t\t</div>
\t\t</div>
       \t<div class=\"main content1\">
\t\t\t<div class=\"banner\">
\t\t\t\t<div class=\"previous\">
\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"one\">
\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t<h2>Produto Destaque</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"paragraph\">
\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\t\ttypesetting industry. Lorem Ipsum has been the industry's standard
\t\t\t\t\t\t\tdummy text ever since the 1500s, when an unknown printer took a
\t\t\t\t\t\t\tgalley of type and scrambled it to make a type specimen book.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"img_banner\">
\t\t\t\t\t\t<img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/img_banner_01.png"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"next\">
\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"logo\">
\t\t\t<a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\"><img alt=\"Logo da loja Mercado de Sabores\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/logo.png"), "html", null, true);
        echo "\"></a>\t\t\t
\t\t</div>
\t\t<div class=\"content2\">
\t\t\t";
        // line 58
        $this->displayBlock('content_header', $context, $blocks);
        // line 63
        echo "                
          \t";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "        </div>
\t\t\t
\t</div>
\t<div class=\"footer\">
       \t<div class=\"main\">
       \t\t<div class=\"endereco\">
\t\t\t\t<p>Avenida Presidente Franklin Roosevelt, 1241 - Loja 04<br>
\t\t\t\tNavengantes - Porto Alegre, RS<br>
\t\t\t\tTelefone : 3028 7219</p>
\t\t\t</div>
\t\t\t<div class=\"google-maps\">
\t\t\t\t<iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Av.+Pres.+Franklin+Roosevelt,+1241+-+S%C3%A3o+Geraldo,+Porto+Alegre+-+RS,+Brasil&amp;aq=0&amp;oq=Avenida+Presidente+Franklin+Roosevelt,+1241+-+&amp;sll=37.0625,-95.677068&amp;sspn=39.916234,80.859375&amp;t=p&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Pres.+Franklin+Roosevelt,+1241+-+S%C3%A3o+Geraldo,+Porto+Alegre+-+Rio+Grande+do+Sul,+90230-002,+Rep%C3%BAblica+Federativa+do+Brasil&amp;ll=-30.012625,-51.208434&amp;spn=0.013006,0.018239&amp;z=15&amp;output=embed\"></iframe><br /><small><a href=\"https://www.google.com/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Av.+Pres.+Franklin+Roosevelt,+1241+-+S%C3%A3o+Geraldo,+Porto+Alegre+-+RS,+Brasil&amp;aq=0&amp;oq=Avenida+Presidente+Franklin+Roosevelt,+1241+-+&amp;sll=37.0625,-95.677068&amp;sspn=39.916234,80.859375&amp;t=p&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Pres.+Franklin+Roosevelt,+1241+-+S%C3%A3o+Geraldo,+Porto+Alegre+-+Rio+Grande+do+Sul,+90230-002,+Rep%C3%BAblica+Federativa+do+Brasil&amp;ll=-30.012625,-51.208434&amp;spn=0.013006,0.018239&amp;z=15\" style=\"color:#0000FF;text-align:left\">Exibir mapa ampliado</a></small>
\t\t\t</div>
\t\t\t<div class=\"dw\">
\t\t\t</div>
\t\t</div>
\t</div>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Mercado de Sabores";
    }

    // line 58
    public function block_content_header($context, array $blocks = array())
    {
        // line 59
        echo "            \t";
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 62
        echo "            ";
    }

    // line 59
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 60
        echo "           \t\t<!--<li><a href=\"{ path('_demo') }}\">Demo Home</a></li>-->
            \t";
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
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
        return array (  23 => 1,  40 => 9,  56 => 14,  224 => 49,  221 => 48,  215 => 6,  161 => 66,  156 => 64,  148 => 62,  140 => 60,  124 => 56,  112 => 53,  99 => 58,  97 => 48,  77 => 34,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 60,  142 => 56,  128 => 57,  125 => 58,  107 => 36,  38 => 6,  144 => 61,  141 => 51,  135 => 47,  126 => 45,  109 => 51,  103 => 37,  67 => 15,  61 => 13,  47 => 17,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 65,  147 => 55,  132 => 58,  127 => 6,  121 => 45,  118 => 54,  114 => 42,  104 => 64,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  34 => 7,  91 => 55,  84 => 28,  28 => 6,  105 => 24,  93 => 28,  76 => 16,  72 => 14,  68 => 12,  58 => 22,  27 => 4,  24 => 3,  44 => 8,  25 => 4,  19 => 1,  94 => 39,  88 => 48,  79 => 17,  59 => 22,  31 => 4,  26 => 6,  21 => 1,  70 => 30,  63 => 24,  46 => 15,  22 => 2,  163 => 59,  155 => 58,  152 => 63,  149 => 48,  145 => 46,  139 => 62,  131 => 60,  123 => 57,  120 => 55,  115 => 39,  106 => 66,  101 => 63,  96 => 21,  83 => 18,  80 => 47,  74 => 16,  66 => 29,  55 => 15,  52 => 15,  50 => 12,  43 => 6,  41 => 7,  37 => 8,  35 => 5,  32 => 7,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 64,  143 => 59,  138 => 51,  136 => 59,  133 => 58,  130 => 47,  122 => 43,  119 => 42,  116 => 54,  111 => 37,  108 => 52,  102 => 30,  98 => 48,  95 => 34,  92 => 6,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 26,  57 => 11,  54 => 10,  51 => 14,  48 => 11,  45 => 8,  42 => 14,  39 => 9,  36 => 8,  33 => 4,  30 => 6,);
    }
}
