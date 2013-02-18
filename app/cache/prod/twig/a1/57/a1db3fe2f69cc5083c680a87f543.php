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
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">
                    <!--<img src=\"{ asset('bundles/acmedemo/images/logo.gif') }}\" alt=\"Symfony logo\" /> -->
                </a>
                <form id=\"symfony-search\" method=\"GET\" action=\"http://symfony.com/search\">
                    <label for=\"symfony-search-field\"><span>Search on Symfony Website</span></label>
                    <input name=\"q\" id=\"symfony-search-field\" type=\"search\" placeholder=\"Search on Symfony website\" class=\"medium_txt\" />
                    <input type=\"submit\" class=\"symfony-button-grey\" value=\"OK\" />
                </form>
            </div>

            ";
        // line 21
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 23
            if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
            echo twig_escape_filter($this->env, $_flashMessage_, "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "
            ";
        // line 27
        $this->displayBlock('content_header', $context, $blocks);
        // line 36
        echo "
            <div class=\"symfony-content\">
                ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "            </div>

            ";
        // line 42
        if (array_key_exists("code", $context)) {
            // line 43
            echo "                <h2>Code behind this page</h2>
                <div class=\"symfony-content\">";
            // line 44
            if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
            echo $_code_;
            echo "</div>
            ";
        }
        // line 46
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Gerenciador/LoginBundle Bundle";
    }

    // line 27
    public function block_content_header($context, array $blocks = array())
    {
        // line 28
        echo "                <ul id=\"menu\">
                    ";
        // line 29
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 32
        echo "                </ul>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 29
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 30
        echo "                        <!--<li><a href=\"{ path('_admin') }}\">Admin Home</a></li>-->
                    ";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "                ";
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
        return array (  137 => 39,  129 => 30,  126 => 29,  119 => 32,  77 => 36,  23 => 1,  54 => 21,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 105,  389 => 103,  374 => 101,  364 => 99,  361 => 98,  358 => 97,  354 => 95,  347 => 91,  343 => 90,  329 => 89,  326 => 88,  320 => 86,  306 => 85,  301 => 84,  294 => 81,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 70,  238 => 69,  230 => 68,  188 => 61,  185 => 60,  161 => 58,  154 => 55,  146 => 51,  143 => 50,  134 => 38,  131 => 42,  122 => 37,  76 => 19,  72 => 26,  51 => 13,  171 => 58,  163 => 55,  159 => 53,  152 => 50,  138 => 44,  123 => 42,  117 => 29,  111 => 27,  101 => 34,  98 => 46,  83 => 40,  75 => 27,  71 => 19,  64 => 16,  43 => 7,  250 => 71,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 80,  218 => 67,  215 => 78,  212 => 77,  209 => 76,  200 => 66,  194 => 65,  179 => 59,  176 => 60,  173 => 59,  166 => 55,  162 => 54,  157 => 56,  155 => 51,  151 => 48,  148 => 47,  145 => 46,  139 => 45,  128 => 43,  109 => 31,  87 => 42,  84 => 21,  114 => 28,  104 => 19,  80 => 23,  65 => 23,  63 => 13,  58 => 10,  40 => 6,  34 => 11,  24 => 4,  46 => 12,  29 => 5,  36 => 6,  32 => 4,  27 => 3,  125 => 24,  118 => 36,  110 => 20,  97 => 18,  92 => 44,  89 => 43,  85 => 14,  69 => 17,  28 => 4,  22 => 2,  57 => 9,  50 => 7,  47 => 7,  38 => 6,  25 => 3,  19 => 1,  94 => 39,  88 => 6,  79 => 26,  48 => 7,  39 => 7,  35 => 5,  31 => 7,  26 => 6,  21 => 1,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 44,  130 => 35,  124 => 32,  121 => 31,  113 => 21,  108 => 31,  105 => 5,  102 => 28,  99 => 26,  95 => 24,  91 => 16,  81 => 38,  70 => 15,  66 => 13,  62 => 23,  59 => 22,  56 => 12,  52 => 10,  49 => 9,  45 => 6,  41 => 11,  37 => 5,  33 => 6,  30 => 3,);
    }
}
