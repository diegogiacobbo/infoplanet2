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
        return array (  246 => 118,  243 => 117,  239 => 114,  236 => 113,  232 => 115,  229 => 113,  226 => 112,  220 => 5,  182 => 119,  180 => 117,  177 => 116,  175 => 112,  152 => 92,  136 => 79,  119 => 65,  88 => 37,  83 => 35,  70 => 25,  66 => 24,  60 => 21,  56 => 20,  51 => 18,  47 => 17,  42 => 15,  29 => 5,  23 => 1,);
    }
}
