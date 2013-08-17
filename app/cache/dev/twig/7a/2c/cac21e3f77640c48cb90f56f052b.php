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
   \t\t<meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">
\t\t<link href='http://fonts.googleapis.com/css?family=Handlee'
\t\t\trel='stylesheet' type='text/css'>
\t\t<link href='http://fonts.googleapis.com/css?family=Satisfy'
\t\t\trel='stylesheet' type='text/css'>
\t\t<link rel=\"stylesheet\" media=\"all\" href=\"\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/gmap.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/slide-show-home.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        
\t\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/slide-show-home.js"), "html", null, true);
        echo "\"></script>

\t\t\t\t\t
   \t\t</head>
   \t\t<body>
\t   \t\t<div class=\"header\">
\t\t\t\t<div class=\"container-narrow\">
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"logo span8\">
\t\t
\t\t\t\t\t\t\t<a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\"><img
\t\t\t\t\t\t\t\talt=\"Logo da loja Mercado de Sabores\"
\t\t\t\t\t\t\t\tsrc=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/logo.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t(function(d, s, id) {
\t\t\t\t\t\t\t\tvar js, fjs = d.getElementsByTagName(s)[0];
\t\t\t\t\t\t\t\tif (d.getElementById(id))
\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\tjs = d.createElement(s);
\t\t\t\t\t\t\t\tjs.id = id;
\t\t\t\t\t\t\t\tjs.src = \"//connect.facebook.net/en_GB/all.js#xfbml=1&appId=496543693757445\";
\t\t\t\t\t\t\t\tfjs.parentNode.insertBefore(js, fjs);
\t\t\t\t\t\t\t}(document, 'script', 'facebook-jssdk'));
\t\t\t\t\t\t</script>
\t\t\t\t\t\t<div class=\"fb-like span4 visible-desktop\"
\t\t\t\t\t\t\tdata-href=\"https://www.facebook.com/www.mercadodesabores.com.br?ref=ts&amp;fref=ts\"
\t\t\t\t\t\t\tdata-send=\"true\" data-width=\"400\" data-show-faces=\"true\"
\t\t\t\t\t\t\tdata-colorscheme=\"dark\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"banner row-fluid\">

\t\t\t<h1 class=\"span5\">Ta de brincation with me! you have a
\t\t\t\tcarecation...</h1>
\t\t\t<div class=\"slides span6 hidden-phone\">
\t\t\t\t<div id=\"slideshow\" class=\"img_banner\">
\t\t\t\t\t<div id=\"slideshowWindow\">
\t\t\t\t\t\t<div class=\"slide\">
\t\t\t\t\t\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/img_banner_01.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<!-- \t\t\t\t<img src=\" asset('bundles/mercadopagina/images/img_banner_01.png')\"> -->
\t\t\t\t\t\t\t<div class=\"slideText\">
\t\t\t\t\t\t\t\t<h2 class=\"slideTitle\">Slide 1</h2>
\t\t\t\t\t\t\t\t<p class=\"slideDes\">Lorem ipsum dolor sit amet, consectetur
\t\t\t\t\t\t\t\t\tadipisicing elit, sed do eiusmod tempor incididunt ut labore et
\t\t\t\t\t\t\t\t\tdolore magna aliqua.</p>
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t<p class=\"slideLink\"> -->
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t<a href=\"#\">click here</a> -->
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t</p> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/slide-->
\t\t\t\t\t\t<div class=\"slide\">
\t\t\t\t\t\t\t<img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/img_banner_01.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<div class=\"slideText\">
\t\t\t\t\t\t\t\t<h2 class=\"slideTitle\">Slide 2</h2>
\t\t\t\t\t\t\t\t<p class=\"slideDes\">Lorem ipsum dolor sit amet, consectetur
\t\t\t\t\t\t\t\t\tadipisicing elit, sed do eiusmod tempor incididunt ut labore et
\t\t\t\t\t\t\t\t\tdolore magna aliqua.</p>
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t<p class=\"slideLink\"> -->
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t<a href=\"#\">click here</a> -->
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t</p> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/slide-->
\t\t\t\t\t\t<div class=\"slide\">
\t\t\t\t\t\t\t<img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/img_banner_01.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<div class=\"slideText\">
\t\t\t\t\t\t\t\t<h2 class=\"slideTitle\">Slide 3</h2>
\t\t\t\t\t\t\t\t<p class=\"slideDes\">Lorem ipsum dolor sit amet, consectetur
\t\t\t\t\t\t\t\t\tadipisicing elit, sed do eiusmod tempor incididunt ut labore et
\t\t\t\t\t\t\t\t\tdolore magna aliqua.</p>
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t<p class=\"slideLink\"> -->
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t<a href=\"#\">click here</a> -->
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t</p> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/slide-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/slideshowWindow-->
\t\t\t\t</div>
\t\t\t\t<!--/slideshow-->
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-narrow\">
\t\t<!-- \t\t<hr> -->
\t\t\t\t";
        // line 112
        $this->displayBlock('content_header', $context, $blocks);
        // line 116
        echo "
\t          \t";
        // line 117
        $this->displayBlock('content', $context, $blocks);
        // line 119
        echo "\t\t</div>
\t\t<div class=\"footer\">
\t\t\t<div class=\"container-narrow row-fluid\">
\t\t\t\t<div class=\"google-maps span6\">
\t\t\t\t\t<iframe width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\"
\t\t\t\t\t\tmarginheight=\"0\" marginwidth=\"0\"
\t\t\t\t\t\tsrc=\"https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Av.+Pres.+Franklin+Roosevelt,+1241+
\t\t\t\t\t\t-+S%C3%A3o+Geraldo,+Porto+Alegre+-+RS,+Brasil&amp;aq=0&amp;oq=Avenida+Presidente+Franklin+Roosevelt,+1241+-
\t\t\t\t\t\t+&amp;sll=37.0625,-95.677068&amp;sspn=39.916234,80.859375&amp;t=p&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Pres.+Franklin+Roosevelt,
\t\t\t\t\t\t+1241+-+S%C3%A3o+Geraldo,+Porto+Alegre+-+Rio+Grande+do+Sul,+90230-002,+Rep%C3%BAblica+Federativa+do+Brasil&amp;ll=-30.012625,
\t\t\t\t\t\t-51.208434&amp;spn=0.013006,0.018239&amp;z=15&amp;output=embed\"></iframe>
\t\t\t\t\t<br />
\t\t\t\t</div>
\t\t\t\t<div class=\"endereco span6\">
\t\t\t\t\t<p>
\t\t\t\t\t\tAvenida Presidente Franklin Roosevelt, 1241 - Loja 04<br>
\t\t\t\t\t\tNavegantes - Porto Alegre, RS<br>
\t\t\t\t\t<h2>51 3028 7219</h2>
\t\t\t\t\t</p>
\t
\t\t\t\t\t<a class=\"visible-desktop\"
\t\t\t\t\t\thref=\"https://www.google.com/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=
\t\t\t\t\t\t\t\tAv.+Pres.+Franklin+Roosevelt,+1241+-+S%C3%A3o+Geraldo,+Porto+Alegre+-+RS,+Brasil&amp;aq=0&amp;oq=Avenida+
\t\t\t\t\t\t\t\tPresidente+Franklin+Roosevelt,+1241+-+&amp;sll=37.0625,-95.677068&amp;sspn=39.916234,80.859375&amp;t=p&amp;ie=UTF8&amp;
\t\t\t\t\t\t\t\thq=&amp;hnear=Av.+Pres.+Franklin+Roosevelt,+1241+-+S%C3%A3o+Geraldo,+Porto+Alegre+-+Rio+Grande+do+Sul,+90230-002,+
\t\t\t\t\t\t\t\tRep%C3%BAblica+Federativa+do+Brasil&amp;ll=-30.012625,-51.208434&amp;spn=0.013006,0.018239&amp;z=15\"
\t\t\t\t\t\tstyle=\"color: #0000FF; text-align: left\" target=\"_blank\">
\t\t\t\t\t\t<div class=\"ico_goo\">Abra no google!</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!-- \t\t\t<div class=\"dw\"><p>&copy; Company 2013</p></div>\t\t\t\t\t -->
\t\t\t</div>
\t\t</div>
\t</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Mercado de Sabores";
    }

    // line 112
    public function block_content_header($context, array $blocks = array())
    {
        // line 113
        echo "\t            \t";
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 115
        echo "\t            ";
    }

    // line 113
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 114
        echo "\t            \t";
    }

    // line 117
    public function block_content($context, array $blocks = array())
    {
        // line 118
        echo "\t            ";
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
        return array (  243 => 117,  239 => 114,  236 => 113,  232 => 115,  229 => 113,  226 => 112,  220 => 5,  182 => 119,  177 => 116,  175 => 112,  23 => 1,  40 => 9,  56 => 20,  224 => 49,  221 => 48,  215 => 6,  161 => 66,  156 => 64,  148 => 62,  140 => 60,  124 => 56,  112 => 53,  99 => 50,  97 => 48,  77 => 34,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 118,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 57,  125 => 58,  107 => 36,  38 => 6,  144 => 61,  141 => 51,  135 => 47,  126 => 45,  109 => 51,  103 => 37,  67 => 15,  61 => 13,  47 => 17,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 117,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 58,  127 => 46,  121 => 45,  118 => 54,  114 => 42,  104 => 51,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  34 => 11,  91 => 20,  84 => 28,  28 => 6,  105 => 24,  93 => 28,  76 => 16,  72 => 14,  68 => 12,  58 => 22,  27 => 4,  24 => 3,  44 => 8,  25 => 4,  19 => 1,  94 => 39,  88 => 37,  79 => 17,  59 => 22,  31 => 4,  26 => 6,  21 => 1,  70 => 25,  63 => 24,  46 => 15,  22 => 2,  163 => 59,  155 => 58,  152 => 92,  149 => 48,  145 => 46,  139 => 55,  131 => 60,  123 => 57,  120 => 55,  115 => 39,  106 => 50,  101 => 49,  96 => 21,  83 => 35,  80 => 24,  74 => 16,  66 => 24,  55 => 15,  52 => 15,  50 => 12,  43 => 6,  41 => 7,  37 => 8,  35 => 5,  32 => 7,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 67,  138 => 51,  136 => 79,  133 => 43,  130 => 47,  122 => 43,  119 => 65,  116 => 54,  111 => 37,  108 => 52,  102 => 30,  98 => 48,  95 => 34,  92 => 6,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 21,  57 => 11,  54 => 10,  51 => 18,  48 => 11,  45 => 8,  42 => 15,  39 => 9,  36 => 8,  33 => 4,  30 => 7,);
    }
}
