<?php

/* ::base.html.twig */
class __TwigTemplate_89b876fbb9095e51641d3064b40ab308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link type=\"text/javascript\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Mercado de Sabores";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  73 => 13,  68 => 6,  53 => 14,  187 => 119,  184 => 118,  172 => 116,  169 => 113,  149 => 117,  42 => 7,  137 => 39,  129 => 30,  126 => 94,  119 => 32,  77 => 36,  23 => 1,  54 => 21,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 105,  389 => 103,  374 => 101,  364 => 99,  361 => 98,  358 => 97,  354 => 95,  347 => 91,  343 => 90,  329 => 89,  326 => 88,  320 => 86,  306 => 85,  301 => 84,  294 => 81,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 70,  238 => 69,  230 => 68,  188 => 61,  185 => 60,  161 => 58,  154 => 120,  146 => 51,  143 => 50,  134 => 38,  131 => 42,  122 => 37,  76 => 19,  72 => 26,  51 => 13,  171 => 58,  163 => 55,  159 => 53,  152 => 118,  138 => 44,  123 => 42,  117 => 29,  111 => 27,  101 => 34,  98 => 46,  83 => 40,  75 => 27,  71 => 20,  64 => 16,  43 => 7,  250 => 71,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 80,  218 => 67,  215 => 78,  212 => 77,  209 => 76,  200 => 66,  194 => 65,  179 => 114,  176 => 113,  173 => 59,  166 => 112,  162 => 54,  157 => 56,  155 => 51,  151 => 48,  148 => 47,  145 => 46,  139 => 45,  128 => 43,  109 => 31,  87 => 42,  84 => 21,  114 => 28,  104 => 19,  80 => 23,  65 => 23,  63 => 13,  58 => 10,  40 => 6,  34 => 8,  24 => 4,  46 => 8,  29 => 5,  36 => 5,  32 => 4,  27 => 3,  125 => 24,  118 => 36,  110 => 20,  97 => 18,  92 => 44,  89 => 43,  85 => 14,  69 => 17,  28 => 3,  22 => 1,  57 => 9,  50 => 7,  47 => 7,  38 => 9,  25 => 3,  19 => 1,  94 => 39,  88 => 6,  79 => 26,  48 => 7,  39 => 6,  35 => 7,  31 => 4,  26 => 6,  21 => 1,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 112,  144 => 42,  136 => 37,  133 => 44,  130 => 35,  124 => 32,  121 => 31,  113 => 21,  108 => 31,  105 => 5,  102 => 28,  99 => 26,  95 => 24,  91 => 16,  81 => 38,  70 => 15,  66 => 13,  62 => 5,  59 => 13,  56 => 15,  52 => 11,  49 => 10,  45 => 10,  41 => 9,  37 => 5,  33 => 6,  30 => 7,);
    }
}
