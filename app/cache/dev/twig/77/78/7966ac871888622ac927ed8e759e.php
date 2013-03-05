<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_77787966ac871888622ac927ed8e759e extends Twig_Template
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
        // line 11
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
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => $this->getContext($context, "name"))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 44,  113 => 43,  140 => 61,  86 => 39,  82 => 37,  77 => 27,  65 => 23,  69 => 27,  40 => 6,  238 => 163,  235 => 162,  230 => 157,  227 => 156,  220 => 156,  217 => 155,  199 => 162,  195 => 160,  193 => 155,  156 => 124,  49 => 13,  173 => 72,  150 => 61,  134 => 79,  129 => 77,  124 => 75,  112 => 60,  97 => 45,  23 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 159,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 141,  170 => 71,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  144 => 53,  141 => 6,  135 => 47,  126 => 76,  109 => 42,  103 => 37,  67 => 15,  61 => 22,  47 => 9,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 164,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 60,  132 => 48,  127 => 46,  121 => 45,  118 => 29,  114 => 69,  104 => 36,  100 => 56,  78 => 21,  75 => 23,  71 => 19,  34 => 11,  91 => 20,  84 => 28,  28 => 3,  105 => 41,  93 => 54,  76 => 16,  72 => 14,  68 => 21,  58 => 17,  27 => 7,  24 => 3,  44 => 8,  25 => 29,  19 => 1,  94 => 33,  88 => 41,  79 => 26,  59 => 22,  31 => 3,  26 => 11,  21 => 2,  70 => 22,  63 => 19,  46 => 8,  22 => 1,  163 => 59,  155 => 65,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 33,  120 => 73,  115 => 28,  106 => 36,  101 => 32,  96 => 21,  83 => 18,  80 => 28,  74 => 24,  66 => 15,  55 => 15,  52 => 14,  50 => 17,  43 => 11,  41 => 10,  37 => 5,  35 => 5,  32 => 4,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 63,  162 => 62,  157 => 60,  153 => 62,  151 => 53,  143 => 40,  138 => 51,  136 => 50,  133 => 31,  130 => 30,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 47,  98 => 31,  95 => 34,  92 => 43,  89 => 31,  85 => 29,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 21,  54 => 13,  51 => 22,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
