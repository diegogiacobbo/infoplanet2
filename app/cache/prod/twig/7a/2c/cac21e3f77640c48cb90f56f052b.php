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
    \t<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
\t\t<link rel=\"stylesheet\" media=\"all\" href=\"\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<!-- Adding \"maximum-scale=1\" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
\t\t<script>
\t\tfunction initialize() {

  // Create an array of styles.
  var styles = [
    {
      stylers: [
        { hue: \"#00ffe6\" },
        { saturation: -20 }
      ]
    },{
      featureType: \"road\",
      elementType: \"geometry\",
      stylers: [
        { lightness: 100 },
        { visibility: \"simplified\" }
      ]
    },{
      featureType: \"road\",
      elementType: \"labels\",
      stylers: [
        { visibility: \"off\" }
      ]
    }
  ];
  var styledMap = new google.maps.StyledMapType(styles,
    {name: \"Styled Map\"});
  var mapOptions = {
    zoom: 11,
    center: new google.maps.LatLng(55.6468, 37.581),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
}
\t\t</script>
\t
   \t\t</head>
   \t\t<body>
\t   \t\t<div class=\"header\">
\t       \t\t<div class=\"cap\">
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\"><img alt=\"Logo da loja Mercado de Sabores\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/logo.png"), "html", null, true);
        echo "\"></a>\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"face-img\">
\t\t\t\t\t\t\t<img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/face_madeira.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t<div id=\"fb-root\"></div>
\t\t\t\t\t\t<script>(function(d, s, id) {
\t\t\t\t\t\t  var js, fjs = d.getElementsByTagName(s)[0];
\t\t\t\t\t\t  if (d.getElementById(id)) return;
\t\t\t\t\t\t  js = d.createElement(s); js.id = id;
\t\t\t\t\t\t  js.src = \"//connect.facebook.net/en_GB/all.js#xfbml=1&appId=496543693757445\";
\t\t\t\t\t\t  fjs.parentNode.insertBefore(js, fjs);
\t\t\t\t\t\t}(document, 'script', 'facebook-jssdk'));</script>
\t\t\t\t   \t<div class=\"fb-like\" data-href=\"https://www.facebook.com/www.mercadodesabores.com.br?ref=ts&amp;fref=ts\" data-send=\"true\" data-width=\"700\" data-show-faces=\"true\" data-colorscheme=\"dark\"></div>
\t\t\t   \t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"main\">
\t\t\t
\t\t\t<div class=\"banner\">
\t\t\t\t\t<div class=\"previous\"><a href=\"#\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"one\">
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Produto Destaque</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"paragraph\">
\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and
\t\t\t\t\t\t\t\ttypesetting industry. Lorem Ipsum has been the industry's standard
\t\t\t\t\t\t\t\tdummy text ever since the 1500s, when an unknown printer took a
\t\t\t\t\t\t\t\tgalley of type and scrambled it to make a type specimen book.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"img_banner\">
\t\t\t\t\t\t\t<img src=\" asset('bundles/mercadopagina/images/img_banner_01.png')\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"next\">
\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"content2\">
\t\t\t\t";
        // line 101
        $this->displayBlock('content_header', $context, $blocks);
        // line 106
        echo "\t                
\t          \t";
        // line 107
        $this->displayBlock('content', $context, $blocks);
        // line 109
        echo "\t        </div>
\t\t\t\t
\t\t</div>
\t\t<div class=\"footer\">
\t       \t<div class=\"main\">
\t\t\t\t<div class=\"google-maps\">
\t\t\t\t\t<iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" 
\t\t\t\t\tsrc=\"https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Av.+Pres.+Franklin+Roosevelt,+1241+
\t\t\t\t\t-+S%C3%A3o+Geraldo,+Porto+Alegre+-+RS,+Brasil&amp;aq=0&amp;oq=Avenida+Presidente+Franklin+Roosevelt,+1241+-
\t\t\t\t\t+&amp;sll=37.0625,-95.677068&amp;sspn=39.916234,80.859375&amp;t=p&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Pres.+Franklin+Roosevelt,
\t\t\t\t\t+1241+-+S%C3%A3o+Geraldo,+Porto+Alegre+-+Rio+Grande+do+Sul,+90230-002,+Rep%C3%BAblica+Federativa+do+Brasil&amp;ll=-30.012625,
\t\t\t\t\t-51.208434&amp;spn=0.013006,0.018239&amp;z=15&amp;output=embed\"></iframe><br />
\t\t\t\t</div>
\t       \t\t<div class=\"endereco\">
\t\t\t\t\t<p>Avenida Presidente Franklin Roosevelt, 1241 - Loja 04<br>
\t\t\t\t\tNavengantes - Porto Alegre, RS<br>
\t\t\t\t\t<h2>51 3028 7219</h2></p>
\t\t\t\t\t
\t\t\t\t\t<a href=\"https://www.google.com/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=
\t\t\t\t\t\t\tAv.+Pres.+Franklin+Roosevelt,+1241+-+S%C3%A3o+Geraldo,+Porto+Alegre+-+RS,+Brasil&amp;aq=0&amp;oq=Avenida+
\t\t\t\t\t\t\tPresidente+Franklin+Roosevelt,+1241+-+&amp;sll=37.0625,-95.677068&amp;sspn=39.916234,80.859375&amp;t=p&amp;ie=UTF8&amp;
\t\t\t\t\t\t\thq=&amp;hnear=Av.+Pres.+Franklin+Roosevelt,+1241+-+S%C3%A3o+Geraldo,+Porto+Alegre+-+Rio+Grande+do+Sul,+90230-002,+
\t\t\t\t\t\t\tRep%C3%BAblica+Federativa+do+Brasil&amp;ll=-30.012625,-51.208434&amp;spn=0.013006,0.018239&amp;z=15\" 
\t\t\t\t\t\t\tstyle=\"color:#0000FF;text-align:left\" target=\"_blank\">
\t\t\t\t\t\t<div class=\"ico_goo\">
\t\t\t\t\t\t\tAbra no google!\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"dw\">
\t\t\t\t</div>
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

    // line 101
    public function block_content_header($context, array $blocks = array())
    {
        // line 102
        echo "\t            \t";
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 105
        echo "\t            ";
    }

    // line 102
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 103
        echo "\t           \t\t<!--<li><a href=\"{ path('_demo') }}\">Demo Home</a></li>-->
\t            \t";
    }

    // line 107
    public function block_content($context, array $blocks = array())
    {
        // line 108
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
        return array (  212 => 108,  209 => 107,  204 => 103,  201 => 102,  197 => 105,  194 => 102,  191 => 101,  185 => 6,  146 => 109,  144 => 107,  141 => 106,  139 => 101,  98 => 63,  90 => 60,  34 => 7,  30 => 6,  23 => 1,);
    }
}
