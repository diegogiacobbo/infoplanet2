<?php

/* MercadoPaginaBundle:Cidade:show.html.twig */
class __TwigTemplate_bf7f9d3d1f4034b6dcd0ea61b7ef0353 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GerenciadorLoginBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GerenciadorLoginBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Cidade";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Cidade</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nome"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Estado</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "estado"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_cidade"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>

";
    }

    public function getTemplateName()
    {
        return "MercadoPaginaBundle:Cidade:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  275 => 143,  272 => 142,  268 => 139,  265 => 138,  261 => 140,  258 => 138,  255 => 137,  249 => 6,  210 => 144,  208 => 142,  203 => 137,  175 => 115,  23 => 1,  40 => 9,  56 => 14,  224 => 49,  221 => 48,  215 => 6,  161 => 104,  156 => 64,  148 => 62,  140 => 60,  124 => 56,  112 => 53,  99 => 50,  97 => 48,  77 => 34,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 57,  125 => 58,  107 => 36,  38 => 6,  144 => 61,  141 => 51,  135 => 47,  126 => 45,  109 => 51,  103 => 37,  67 => 22,  61 => 19,  47 => 9,  225 => 96,  216 => 90,  212 => 88,  205 => 141,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 126,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 58,  127 => 73,  121 => 45,  118 => 54,  114 => 42,  104 => 51,  100 => 34,  78 => 21,  75 => 23,  71 => 23,  34 => 11,  91 => 20,  84 => 28,  28 => 4,  105 => 24,  93 => 28,  76 => 16,  72 => 14,  68 => 12,  58 => 22,  27 => 4,  24 => 3,  44 => 8,  25 => 4,  19 => 1,  94 => 39,  88 => 48,  79 => 17,  59 => 22,  31 => 4,  26 => 6,  21 => 1,  70 => 27,  63 => 24,  46 => 12,  22 => 2,  163 => 59,  155 => 58,  152 => 63,  149 => 48,  145 => 46,  139 => 55,  131 => 60,  123 => 57,  120 => 55,  115 => 39,  106 => 50,  101 => 49,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 29,  55 => 15,  52 => 16,  50 => 12,  43 => 13,  41 => 7,  37 => 8,  35 => 5,  32 => 7,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 67,  138 => 51,  136 => 63,  133 => 43,  130 => 47,  122 => 71,  119 => 42,  116 => 54,  111 => 37,  108 => 52,  102 => 30,  98 => 48,  95 => 34,  92 => 6,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 20,  57 => 18,  54 => 10,  51 => 14,  48 => 15,  45 => 8,  42 => 14,  39 => 9,  36 => 8,  33 => 6,  30 => 7,);
    }
}
