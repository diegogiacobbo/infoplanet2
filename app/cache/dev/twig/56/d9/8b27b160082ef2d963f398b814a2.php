<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_56d98b27b160082ef2d963f398b814a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo " secured for Admins only!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 44,  113 => 43,  86 => 39,  82 => 37,  65 => 23,  49 => 13,  53 => 19,  260 => 169,  252 => 163,  249 => 162,  245 => 165,  242 => 162,  239 => 161,  233 => 6,  217 => 170,  211 => 166,  209 => 161,  199 => 154,  182 => 143,  166 => 130,  23 => 1,  40 => 6,  56 => 14,  224 => 49,  221 => 48,  215 => 168,  161 => 66,  156 => 64,  148 => 62,  140 => 61,  124 => 56,  112 => 53,  99 => 50,  97 => 45,  77 => 27,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 168,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 57,  125 => 58,  107 => 36,  38 => 6,  144 => 61,  141 => 51,  135 => 47,  126 => 45,  109 => 42,  103 => 37,  67 => 15,  61 => 22,  47 => 9,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 147,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 58,  127 => 46,  121 => 45,  118 => 29,  114 => 42,  104 => 51,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  34 => 11,  91 => 20,  84 => 28,  28 => 3,  105 => 41,  93 => 28,  76 => 16,  72 => 14,  68 => 21,  58 => 17,  27 => 4,  24 => 3,  44 => 8,  25 => 4,  19 => 1,  94 => 33,  88 => 41,  79 => 26,  59 => 22,  31 => 3,  26 => 9,  21 => 1,  70 => 22,  63 => 19,  46 => 12,  22 => 2,  163 => 59,  155 => 58,  152 => 63,  149 => 48,  145 => 46,  139 => 55,  131 => 60,  123 => 33,  120 => 55,  115 => 28,  106 => 50,  101 => 49,  96 => 21,  83 => 18,  80 => 28,  74 => 24,  66 => 22,  55 => 15,  52 => 11,  50 => 12,  43 => 6,  41 => 7,  37 => 5,  35 => 5,  32 => 7,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 40,  138 => 51,  136 => 63,  133 => 31,  130 => 30,  122 => 43,  119 => 42,  116 => 54,  111 => 37,  108 => 52,  102 => 47,  98 => 48,  95 => 34,  92 => 43,  89 => 31,  85 => 29,  81 => 40,  73 => 19,  64 => 17,  60 => 14,  57 => 20,  54 => 12,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 6,  30 => 3,);
    }
}