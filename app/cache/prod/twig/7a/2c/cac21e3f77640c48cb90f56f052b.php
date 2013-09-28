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
        <link rel=\"shortcut icon\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/favicon.ico"), "html", null, true);
        echo "\" />
   \t\t<meta charset=\"utf-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">
\t\t<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
\t\t<link rel=\"stylesheet\" media=\"all\" href=\"\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/gmap.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/slide-show-home.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        
\t\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/slide-show-home.js"), "html", null, true);
        echo "\"></script>

\t\t<script>
\t\t
\t\t\$(document).ready(function(){
\t\t\t
 \t\t\t\$(\"textarea\").text(\"Mensagem.\");
\t\t\t
\t\t\t\$('#mercado_paginabundle_contatotype_nome').focusout(function(){\t\t\t\t
\t\t\t\tif( this.value === ''){
\t\t\t\t\tthis.value = 'nome'
\t\t\t\t}\t\t\t
\t\t\t});
\t\t\t
\t\t\t\$('#mercado_paginabundle_contatotype_email').focusout(function(){\t\t\t\t
\t\t\t\tif( this.value === ''){
\t\t\t\t\tthis.value = 'e-mail'
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t\$('#mercado_paginabundle_contatotype').delegate('input', 'focus', function() {
\t\t\t    if (this.value === 'nome' || this.value === 'e-mail') {
\t\t\t        this.value = '';
\t\t\t    }
\t\t\t});
\t\t\t
\t\t\t\$('#mercado_paginabundle_contatotype_contato').focusout(function(){\t\t\t\t
\t\t\t\tif( this.value === ''){
\t\t\t\t\tthis.value = 'Mensagem.'
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t\$('#mercado_paginabundle_contatotype').delegate('textarea', 'focus', function() {
\t\t\t    if (this.value === 'Mensagem.') {
\t\t\t        this.value = '';
\t\t\t    }
\t\t\t});
\t\t\t
\t\t});
\t\t
\t\t</script>\t\t\t
   \t\t</head>
   \t\t<body>
\t   \t\t<div class=\"header\">
\t\t\t\t<div class=\"container-narrow\">
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"logo span8\">
\t\t
\t\t\t\t\t\t\t<a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\"><img
\t\t\t\t\t\t\t\talt=\"Logo da loja Mercado de Sabores\"
\t\t\t\t\t\t\t\tsrc=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/logo.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<script>(function(d, s, id) {
\t\t\t\t\t\t  var js, fjs = d.getElementsByTagName(s)[0];
\t\t\t\t\t\t  if (d.getElementById(id)) return;
\t\t\t\t\t\t  js = d.createElement(s); js.id = id;
\t\t\t\t\t\t  js.src = \"//connect.facebook.net/en_GB/all.js#xfbml=1&appId=496543693757445\";
\t\t\t\t\t\t  fjs.parentNode.insertBefore(js, fjs);
\t\t\t\t\t\t}(document, 'script', 'facebook-jssdk'));</script>
\t\t\t\t\t\t<div class=\"fb-like span4 visible-desktop\"
\t\t\t\t\t\t\tdata-href=\"http://www.facebook.com/lojamercadodesabores\" 
\t\t\t\t\t\t\tdata-width=\"400\" 
\t\t\t\t\t\t\tdata-colorscheme=\"dark\" data-action=\"recommend\" data-show-faces=\"true\" data-send=\"true\">\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"banner row-fluid\">
\t\t\t<h2 class=\"span5\">Mercado de Sabores trás para você, alimentos sadios, limpos, cultivados sem agrotóxicos e sem fertilizantes químicos.</h1>
\t\t\t<div class=\"line-border span1 hidden-phone\"><div class=\"line-border-intern\"></div></div>
\t\t\t<div class=\"slides span5 hidden-phone\">
\t\t\t\t<div id=\"slideshow\" class=\"img_banner\">
\t\t\t\t\t<div id=\"slideshowWindow\">
\t\t\t\t\t\t<div class=\"slide\">
\t\t\t\t\t\t\t<div class=\"slideText\">
\t\t\t\t\t\t\t\t<h2 class=\"slideTitle\">Mel</h2>
\t\t\t\t\t\t\t\t<p class=\"slideDes\">Para gripes e resfriados, um ótimo aliado é o mel. Experimente!</p>
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t<p class=\"slideLink\"> -->
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t<a href=\"#\">click here</a> -->
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t</p> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"imagem-banner\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/img_banner_01.png"), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/slide-->
\t\t\t\t\t\t<div class=\"slide\">
\t\t\t\t\t\t\t<div class=\"slideText\">
\t\t\t\t\t\t\t\t<h2 class=\"slideTitle\">Óleo de Côco</h2>
\t\t\t\t\t\t\t\t<p class=\"slideDes\">Este óleo, seja em cápsula ou líquido, auxilia fortemente na redução de peso.</p>
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t<p class=\"slideLink\"> -->
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t<a href=\"#\">click here</a> -->
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t</p> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"imagem-banner\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/img_banner_02.png"), "html", null, true);
        echo "\"/></div>\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/slide-->
\t\t\t\t\t\t<div class=\"slide\">
\t\t\t\t\t\t\t<div class=\"slideText\">
\t\t\t\t\t\t\t\t<h2 class=\"slideTitle\">Chá Verde</h2>
\t\t\t\t\t\t\t\t<p class=\"slideDes\">A fama deste chá é milenar. É estimulante, auxilia em questões estéticas e muito mais. Passe na nossa loja para saber mais!</p>
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t<p class=\"slideLink\"> -->
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t<a href=\"#\">click here</a> -->
\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t</p> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"imagem-banner\"><img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/img_banner_03.png"), "html", null, true);
        echo "\" /></div>
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
        // line 137
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "
\t          \t";
        // line 142
        $this->displayBlock('content', $context, $blocks);
        // line 144
        echo "
\t\t</div>
\t\t<div class=\"footer\">
\t\t\t<div class=\"container-narrow row-fluid\">
\t\t\t\t<!--<div class=\"google-maps span6\">
\t\t\t\t\t<iframe width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\"
\t\t\t\t\t\tmarginheight=\"0\" marginwidth=\"0\"
\t\t\t\t\t\tsrc=\"https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Av.+Pres.+Franklin+Roosevelt,+1241+
\t\t\t\t\t\t-+S%C3%A3o+Geraldo,+Porto+Alegre+-+RS,+Brasil&amp;aq=0&amp;oq=Avenida+Presidente+Franklin+Roosevelt,+1241+-
\t\t\t\t\t\t+&amp;sll=37.0625,-95.677068&amp;sspn=39.916234,80.859375&amp;t=p&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Pres.+Franklin+Roosevelt,
\t\t\t\t\t\t+1241+-+S%C3%A3o+Geraldo,+Porto+Alegre+-+Rio+Grande+do+Sul,+90230-002,+Rep%C3%BAblica+Federativa+do+Brasil&amp;ll=-30.012625,
\t\t\t\t\t\t-51.208434&amp;spn=0.013006,0.018239&amp;z=15&amp;output=embed\"></iframe>
\t\t\t\t\t<br />
\t\t\t\t</div>-->
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
\t\t\t\t\t\t<div class=\"ico_goo\">Endereço no googlemaps!</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!--<div class=\"dw\"><p>&copy; Company 2013</p></div>-->
\t\t\t</div>
\t\t</div>
\t</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Mercado de Sabores";
    }

    // line 137
    public function block_content_header($context, array $blocks = array())
    {
        // line 138
        echo "\t            \t";
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 140
        echo "\t            ";
    }

    // line 138
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 139
        echo "\t            \t";
    }

    // line 142
    public function block_content($context, array $blocks = array())
    {
        // line 143
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
        return array (  275 => 143,  272 => 142,  268 => 139,  265 => 138,  261 => 140,  258 => 138,  255 => 137,  249 => 6,  210 => 144,  208 => 142,  205 => 141,  203 => 137,  189 => 126,  175 => 115,  161 => 104,  127 => 73,  122 => 71,  71 => 23,  67 => 22,  61 => 19,  57 => 18,  52 => 16,  48 => 15,  43 => 13,  33 => 6,  28 => 4,  23 => 1,);
    }
}
