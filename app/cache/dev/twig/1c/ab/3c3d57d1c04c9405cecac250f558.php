<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_1cab3c3d57d1c04c9405cecac250f558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Well done!</h1>
    ";
        // line 6
        if ($this->getContext($context, "is_writable")) {
            // line 7
            echo "    <h2>Your distribution is configured!</h2>
    ";
        } else {
            // line 9
            echo "    <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
    ";
        }
        // line 11
        echo "    <h3>
        <span>
            ";
        // line 13
        if ($this->getContext($context, "is_writable")) {
            // line 14
            echo "                Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "yml_path"), "html", null, true);
            echo "</em>):
            ";
        } else {
            // line 16
            echo "                Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "yml_path"), "html", null, true);
            echo "</em>:
            ";
        }
        // line 18
        echo "        </span>
    </h3>

    <textarea class=\"symfony-configuration\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "parameters"), "html", null, true);
        echo "</textarea>

    ";
        // line 23
        if ($this->getContext($context, "welcome_url")) {
            // line 24
            echo "        <ul>
            <li><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getContext($context, "welcome_url"), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 59,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  330 => 140,  327 => 139,  320 => 135,  314 => 131,  306 => 128,  301 => 125,  292 => 120,  289 => 119,  287 => 118,  280 => 114,  273 => 110,  264 => 105,  254 => 101,  247 => 97,  231 => 88,  226 => 86,  209 => 73,  202 => 73,  193 => 68,  183 => 63,  177 => 59,  169 => 56,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  190 => 67,  173 => 85,  166 => 82,  150 => 75,  90 => 28,  356 => 163,  347 => 160,  343 => 159,  335 => 157,  333 => 141,  325 => 138,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 121,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 100,  245 => 96,  217 => 83,  214 => 82,  211 => 81,  206 => 78,  192 => 72,  182 => 64,  158 => 56,  69 => 18,  204 => 94,  188 => 67,  185 => 68,  174 => 58,  167 => 64,  164 => 63,  134 => 54,  110 => 39,  20 => 1,  276 => 248,  262 => 236,  260 => 235,  238 => 97,  87 => 40,  62 => 16,  117 => 44,  113 => 40,  86 => 29,  82 => 19,  65 => 22,  49 => 15,  53 => 38,  275 => 111,  272 => 142,  268 => 107,  265 => 138,  261 => 140,  258 => 103,  255 => 137,  249 => 6,  210 => 144,  208 => 142,  203 => 77,  175 => 115,  23 => 3,  40 => 8,  56 => 13,  224 => 49,  221 => 83,  215 => 79,  161 => 80,  156 => 77,  148 => 58,  140 => 42,  124 => 56,  112 => 52,  99 => 50,  97 => 23,  77 => 24,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 150,  340 => 158,  336 => 103,  321 => 101,  313 => 99,  311 => 130,  308 => 129,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 115,  277 => 86,  267 => 85,  263 => 84,  257 => 234,  251 => 80,  246 => 78,  240 => 93,  234 => 89,  228 => 87,  223 => 71,  219 => 70,  213 => 69,  207 => 76,  198 => 69,  181 => 87,  176 => 61,  170 => 60,  168 => 60,  146 => 58,  142 => 56,  128 => 45,  125 => 44,  107 => 27,  38 => 5,  144 => 73,  141 => 51,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 14,  61 => 12,  47 => 9,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 69,  194 => 79,  191 => 70,  189 => 126,  186 => 76,  180 => 72,  172 => 64,  159 => 61,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 29,  114 => 42,  104 => 35,  100 => 24,  78 => 26,  75 => 23,  71 => 21,  34 => 5,  91 => 35,  84 => 25,  28 => 3,  105 => 41,  93 => 42,  76 => 17,  72 => 22,  68 => 20,  58 => 14,  27 => 5,  24 => 3,  44 => 8,  25 => 29,  19 => 1,  94 => 33,  88 => 20,  79 => 23,  59 => 21,  31 => 5,  26 => 3,  21 => 1,  70 => 15,  63 => 16,  46 => 10,  22 => 2,  163 => 81,  155 => 58,  152 => 63,  149 => 48,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 50,  101 => 45,  96 => 35,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 13,  52 => 13,  50 => 10,  43 => 7,  41 => 6,  37 => 7,  35 => 4,  32 => 6,  29 => 3,  184 => 88,  178 => 62,  171 => 57,  165 => 54,  162 => 53,  157 => 60,  153 => 62,  151 => 47,  143 => 56,  138 => 55,  136 => 63,  133 => 31,  130 => 39,  122 => 51,  119 => 45,  116 => 31,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 21,  89 => 29,  85 => 29,  81 => 24,  73 => 16,  64 => 11,  60 => 15,  57 => 14,  54 => 17,  51 => 11,  48 => 11,  45 => 13,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
