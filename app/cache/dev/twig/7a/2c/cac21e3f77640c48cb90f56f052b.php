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

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: \"Styled Map\"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var mapOptions = {
    zoom: 11,
    center: new google.maps.LatLng(55.6468, 37.581),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);

  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
}
\t\t</script>
   \t\t</head>
   \t\t<body>
\t   \t\t<div class=\"header\">
\t       \t\t<div class=\"main\">
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\"><img alt=\"Logo da loja Mercado de Sabores\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/logo.png"), "html", null, true);
        echo "\" height=\"140\" width=\"150\"></a>\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--<div class=\"face-img\">
\t\t\t\t\t\t\t<img src=\"";
        // line 70
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
\t       \t<div class=\"main content1\">
\t\t\t\t<div class=\"banner\">
\t\t\t\t\t<div class=\"previous\">
\t\t\t\t\t\t<a href=\"#\"></a>
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
\t\t\t\t\t\t\t<img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/images/img_banner_01.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"next\">
\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"content2\">
\t\t\t\t";
        // line 108
        $this->displayBlock('content_header', $context, $blocks);
        // line 113
        echo "\t                
\t          \t";
        // line 114
        $this->displayBlock('content', $context, $blocks);
        // line 116
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

    // line 108
    public function block_content_header($context, array $blocks = array())
    {
        // line 109
        echo "\t            \t";
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 112
        echo "\t            ";
    }

    // line 109
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 110
        echo "\t           \t\t<!--<li><a href=\"{ path('_demo') }}\">Demo Home</a></li>-->
\t            \t";
    }

    // line 114
    public function block_content($context, array $blocks = array())
    {
        // line 115
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
        return array (  222 => 115,  214 => 110,  211 => 109,  204 => 109,  195 => 6,  23 => 1,  40 => 9,  56 => 14,  224 => 49,  221 => 48,  215 => 6,  161 => 66,  156 => 116,  148 => 62,  140 => 60,  124 => 56,  112 => 53,  99 => 50,  97 => 67,  77 => 34,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 114,  213 => 69,  207 => 112,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 57,  125 => 58,  107 => 36,  38 => 6,  144 => 61,  141 => 51,  135 => 47,  126 => 45,  109 => 51,  103 => 37,  67 => 15,  61 => 13,  47 => 9,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 108,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 114,  147 => 55,  132 => 58,  127 => 46,  121 => 45,  118 => 54,  114 => 42,  104 => 51,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  34 => 7,  91 => 20,  84 => 28,  28 => 6,  105 => 70,  93 => 28,  76 => 16,  72 => 14,  68 => 12,  58 => 22,  27 => 4,  24 => 3,  44 => 8,  25 => 4,  19 => 1,  94 => 39,  88 => 48,  79 => 17,  59 => 22,  31 => 4,  26 => 6,  21 => 1,  70 => 30,  63 => 24,  46 => 15,  22 => 2,  163 => 59,  155 => 58,  152 => 63,  149 => 108,  145 => 46,  139 => 55,  131 => 60,  123 => 57,  120 => 55,  115 => 39,  106 => 50,  101 => 49,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 29,  55 => 15,  52 => 15,  50 => 12,  43 => 6,  41 => 7,  37 => 8,  35 => 5,  32 => 7,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 113,  143 => 67,  138 => 100,  136 => 63,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 54,  111 => 37,  108 => 52,  102 => 30,  98 => 48,  95 => 34,  92 => 6,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 26,  57 => 11,  54 => 10,  51 => 14,  48 => 11,  45 => 8,  42 => 14,  39 => 9,  36 => 8,  33 => 4,  30 => 6,);
    }
}
