<?php

/* MercadoPaginaBundle:Default:contato.html.twig */
class __TwigTemplate_148ab32ed4545c8cbe9ac39c1a0b43a4 extends Twig_Template
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
        echo "Contato";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MercadoPaginaBundle_contato_send"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        <input type=\"submit\" />
    </form>

";
        // line 11
        if ((!(null === $this->getContext($context, "result")))) {
            // line 12
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->getContext($context, "result"), "html", null, true);
            echo "</p>
";
        }
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "MercadoPaginaBundle:Default:contato.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  23 => 1,  40 => 9,  56 => 14,  224 => 49,  221 => 48,  215 => 6,  161 => 66,  156 => 64,  148 => 62,  140 => 60,  124 => 56,  112 => 53,  99 => 58,  97 => 48,  77 => 27,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 60,  142 => 56,  128 => 57,  125 => 58,  107 => 36,  38 => 6,  144 => 61,  141 => 51,  135 => 47,  126 => 45,  109 => 51,  103 => 37,  67 => 15,  61 => 13,  47 => 17,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 65,  147 => 55,  132 => 58,  127 => 6,  121 => 45,  118 => 54,  114 => 42,  104 => 64,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  34 => 7,  91 => 55,  84 => 28,  28 => 6,  105 => 24,  93 => 28,  76 => 16,  72 => 14,  68 => 12,  58 => 22,  27 => 4,  24 => 3,  44 => 8,  25 => 4,  19 => 1,  94 => 39,  88 => 48,  79 => 17,  59 => 22,  31 => 4,  26 => 6,  21 => 1,  70 => 23,  63 => 24,  46 => 12,  22 => 2,  163 => 59,  155 => 58,  152 => 63,  149 => 48,  145 => 46,  139 => 62,  131 => 60,  123 => 57,  120 => 55,  115 => 39,  106 => 66,  101 => 63,  96 => 21,  83 => 18,  80 => 47,  74 => 16,  66 => 22,  55 => 15,  52 => 11,  50 => 12,  43 => 6,  41 => 7,  37 => 8,  35 => 5,  32 => 7,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 64,  143 => 59,  138 => 51,  136 => 59,  133 => 58,  130 => 47,  122 => 43,  119 => 42,  116 => 54,  111 => 37,  108 => 52,  102 => 30,  98 => 48,  95 => 34,  92 => 6,  89 => 33,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 14,  57 => 20,  54 => 12,  51 => 14,  48 => 11,  45 => 7,  42 => 14,  39 => 9,  36 => 8,  33 => 4,  30 => 6,);
    }
}
