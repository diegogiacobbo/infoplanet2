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
                        <a class=\"brand\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin"), "html", null, true);
        echo "\">Administração</a>
                        <div class=\"nav-collapse collapse\">
                            <ul class=\"nav\">
                                <li class=\"active\"><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GerenciadorLoginBundle_info_empresa"), "html", null, true);
        echo "\">Sobre sua empresa</a></li>
                                <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GerenciadorLoginBundle_admin_email_automatico"), "html", null, true);
        echo "\">E-mail automático</a></li>
                                <li class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Registros no Sistema <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_city"), "html", null, true);
        echo "\">Cidades</a></li>
                                        <li><a href=\"#\">Produtos</a></li>
                                        <!--<li class=\"divider\"></li>
                                        <li class=\"nav-header\">Nav header</li>
                                        <li><a href=\"#\">Separated link</a></li>
                                        <li><a href=\"#\">One more separated link</a></li>-->
                                    </ul>
                                </li>
                                <li><a class=\"actionLogout\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_logout"), "html", null, true);
        echo "\"><button>Logout</button></a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>     
        ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap.js"), "html", null, true);
        echo "\"></script>        
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-carousel.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-typeahead.js"), "html", null, true);
        echo "\"></script>

            <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/tinymce/jscripts/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
            tinyMCE.init({
                    // General options
                    mode : \"textareas\",
                    theme : \"advanced\",
                    plugins : \"autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template\",

                    // Theme options
                    theme_advanced_buttons1 : \"save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect\",
                    theme_advanced_buttons2 : \"cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor\",
                    theme_advanced_buttons3 : \"tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen\",
                    theme_advanced_buttons4 : \"insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage\",
                    theme_advanced_toolbar_location : \"top\",
                    theme_advanced_toolbar_align : \"left\",
                    theme_advanced_statusbar_location : \"bottom\",
                    theme_advanced_resizing : true,

                    // Skin options
                    skin : \"o2k7\",
                    skin_variant : \"silver\",

                    // Example content CSS (should be your site CSS)
                    content_css : \"css/example.css\",

                    // Drop lists for link/image/media/template dialogs
                    template_external_list_url : \"js/template_list.js\",
                    external_link_list_url : \"js/link_list.js\",
                    external_image_list_url : \"js/image_list.js\",
                    media_external_list_url : \"js/media_list.js\",

                    // Replace values for the template plugin
                    template_replace_values : {
                            username : \"Some User\",
                            staffid : \"991234\"
                    }
            });
            </script>
            <script type=\"text/javascript\">
                function(){
                    \$('actionLogout').click(function(){
                        confirm(\"Você tem certeza que deseja deslogar do sistema?\");
                        
                    });
                    
                    //@todo: criar tb os actives menus, manter a cor do hover para active!!
                }
            </script>
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Área de Administração";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
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
        return array (  224 => 49,  221 => 48,  215 => 6,  161 => 66,  156 => 64,  148 => 62,  140 => 60,  124 => 56,  112 => 53,  99 => 50,  97 => 48,  77 => 34,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 57,  125 => 44,  107 => 36,  38 => 13,  144 => 61,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 15,  61 => 13,  47 => 9,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 58,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 51,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  34 => 11,  91 => 20,  84 => 28,  28 => 6,  105 => 24,  93 => 28,  76 => 16,  72 => 14,  68 => 12,  58 => 22,  27 => 4,  24 => 3,  44 => 12,  25 => 4,  19 => 1,  94 => 39,  88 => 42,  79 => 17,  59 => 22,  31 => 5,  26 => 6,  21 => 1,  70 => 30,  63 => 24,  46 => 15,  22 => 2,  163 => 59,  155 => 58,  152 => 63,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 55,  115 => 39,  106 => 36,  101 => 32,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 29,  55 => 15,  52 => 15,  50 => 10,  43 => 6,  41 => 15,  37 => 8,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 59,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 54,  111 => 37,  108 => 52,  102 => 30,  98 => 31,  95 => 34,  92 => 33,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 26,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 14,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
