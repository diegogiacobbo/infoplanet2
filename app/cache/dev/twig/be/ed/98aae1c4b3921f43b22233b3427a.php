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
        echo "Mercado de Sabores ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<!-- Jumbotron -->
\t\t<div class=\"yellow\"></div>
\t\t<div class=\"orange\"></div>
\t\t<div class=\"content_inner\">
\t\t\t<h3>Porque consumir produtos orgânicos?</h3>
\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and
\t\t\t\ttypesetting industry. Lorem Ipsum has been the industry's standard
\t\t\t\tdummy text ever since the 1500s, when an unknown printer took a
\t\t\t\tgalley of type and scrambled it to make a type specimen book.</p>
\t\t</div>\t
\t\t<div class=\"content_inner\">
\t\t\t<h3>Contato</h3>
\t\t\t<input type=\"text\" value=\"Nome\" class=\"input\"> <input
\t\t\t\ttype=\"text\" value=\"Email\" class=\"input\">
\t\t\t<select\tclass=\"subject\">
\t\t\t<option>Sugestão</option>
\t\t\t<option>Dúvida</option>
\t\t\t<option>Reclamação</option>
\t\t\t<option>Informação</option>
\t\t\t</select>
\t\t\t<textarea rows=\"3\" cols=\"\" class=\"message\">Mensagem</textarea>
\t\t\t<input type=\"button\" class=\"button\" value=\"Enviar\">
\t\t</div>
\t\t<div class=\"yellow\"></div>
\t\t<div class=\"orange\"></div>
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
        return array (  53 => 19,  222 => 115,  214 => 110,  211 => 109,  204 => 109,  195 => 6,  23 => 1,  40 => 9,  56 => 14,  224 => 49,  221 => 48,  215 => 6,  161 => 66,  156 => 116,  148 => 62,  140 => 60,  124 => 56,  112 => 53,  99 => 50,  97 => 67,  77 => 27,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 114,  213 => 69,  207 => 112,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 57,  125 => 58,  107 => 36,  38 => 6,  144 => 61,  141 => 51,  135 => 47,  126 => 45,  109 => 51,  103 => 37,  67 => 15,  61 => 13,  47 => 9,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 108,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 114,  147 => 55,  132 => 58,  127 => 46,  121 => 45,  118 => 54,  114 => 42,  104 => 51,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  34 => 7,  91 => 20,  84 => 28,  28 => 6,  105 => 70,  93 => 28,  76 => 16,  72 => 14,  68 => 12,  58 => 22,  27 => 4,  24 => 3,  44 => 8,  25 => 4,  19 => 1,  94 => 39,  88 => 48,  79 => 17,  59 => 22,  31 => 4,  26 => 6,  21 => 1,  70 => 23,  63 => 24,  46 => 12,  22 => 2,  163 => 59,  155 => 58,  152 => 63,  149 => 108,  145 => 46,  139 => 55,  131 => 60,  123 => 57,  120 => 55,  115 => 39,  106 => 50,  101 => 49,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 22,  55 => 15,  52 => 11,  50 => 12,  43 => 6,  41 => 7,  37 => 8,  35 => 5,  32 => 7,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 113,  143 => 67,  138 => 100,  136 => 63,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 54,  111 => 37,  108 => 52,  102 => 30,  98 => 48,  95 => 34,  92 => 6,  89 => 33,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 14,  57 => 20,  54 => 12,  51 => 14,  48 => 11,  45 => 7,  42 => 14,  39 => 9,  36 => 8,  33 => 4,  30 => 6,);
    }
}
