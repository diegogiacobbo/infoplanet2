<?php

/* MercadoPaginaBundle:Default:index.html.twig */
class __TwigTemplate_beed98aae1c4b3921f43b22233b3427a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MercadoPaginaBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MercadoPaginaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, ("Mercado de Sabores " . $_name_), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<!-- Jumbotron -->

<div class=\"container\">
<figure class=\"jumbotron\">
    <!-- \t\t\t<h1>Marketing stuff!</h1> -->
    <p class=\"lead\">Cras justo odio, dapibus ac facilisis in, egestas
        eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris
        condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <!-- \t\t\t<a class=\"btn btn-large btn-success\" href=\"#\">Get started today</a> -->
</figure>
<hr>
</div>
<!-- Example row of columns -->
<article class=\"row-fluid\">
    <div class=\"centralizador\">
        <div class=\"span6\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce
                dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
                magna mollis euismod. Donec sed odio dui.</p>
            <p>
                <a class=\"btn\" href=\"#\">View details &raquo;</a>
            </p>
        </div>
        <div class=\"span6\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce
                dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
                magna mollis euismod. Donec sed odio dui.</p>
            <p>
                <a class=\"btn\" href=\"#\">View details &raquo;</a>
            </p>
        </div>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "MercadoPaginaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 162,  227 => 156,  223 => 159,  217 => 155,  201 => 164,  199 => 162,  195 => 160,  193 => 155,  156 => 124,  42 => 7,  137 => 39,  129 => 30,  126 => 29,  119 => 32,  77 => 36,  23 => 1,  54 => 21,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 105,  389 => 103,  374 => 101,  364 => 99,  361 => 98,  358 => 97,  354 => 95,  347 => 91,  343 => 90,  329 => 89,  326 => 88,  320 => 86,  306 => 85,  301 => 84,  294 => 81,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 70,  238 => 163,  230 => 157,  188 => 61,  185 => 60,  161 => 58,  154 => 55,  146 => 51,  143 => 50,  134 => 38,  131 => 42,  122 => 37,  76 => 19,  72 => 26,  51 => 13,  171 => 58,  163 => 55,  159 => 53,  152 => 50,  138 => 44,  123 => 42,  117 => 29,  111 => 27,  101 => 34,  98 => 46,  83 => 40,  75 => 27,  71 => 20,  64 => 16,  43 => 7,  250 => 71,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 156,  218 => 67,  215 => 78,  212 => 77,  209 => 76,  200 => 66,  194 => 65,  179 => 59,  176 => 141,  173 => 59,  166 => 55,  162 => 54,  157 => 56,  155 => 51,  151 => 48,  148 => 47,  145 => 46,  139 => 45,  128 => 43,  109 => 31,  87 => 42,  84 => 21,  114 => 28,  104 => 19,  80 => 23,  65 => 23,  63 => 13,  58 => 10,  40 => 6,  34 => 11,  24 => 4,  46 => 8,  29 => 3,  36 => 5,  32 => 4,  27 => 3,  125 => 24,  118 => 36,  110 => 20,  97 => 18,  92 => 44,  89 => 43,  85 => 14,  69 => 17,  28 => 3,  22 => 1,  57 => 9,  50 => 21,  47 => 7,  38 => 6,  25 => 3,  19 => 1,  94 => 39,  88 => 6,  79 => 26,  48 => 7,  39 => 6,  35 => 9,  31 => 8,  26 => 6,  21 => 1,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 44,  130 => 35,  124 => 32,  121 => 31,  113 => 21,  108 => 31,  105 => 5,  102 => 28,  99 => 26,  95 => 24,  91 => 16,  81 => 38,  70 => 15,  66 => 13,  62 => 23,  59 => 13,  56 => 12,  52 => 11,  49 => 10,  45 => 8,  41 => 11,  37 => 5,  33 => 6,  30 => 3,);
    }
}
