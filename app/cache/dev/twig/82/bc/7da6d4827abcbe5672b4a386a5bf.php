<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_82bc7da6d4827abcbe5672b4a386a5bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 71,  188 => 69,  185 => 68,  174 => 67,  167 => 64,  164 => 63,  134 => 54,  110 => 42,  20 => 1,  276 => 248,  262 => 236,  260 => 235,  238 => 218,  87 => 34,  62 => 25,  117 => 44,  113 => 40,  86 => 39,  82 => 37,  65 => 22,  49 => 13,  53 => 38,  243 => 117,  239 => 114,  236 => 113,  232 => 115,  229 => 113,  226 => 112,  220 => 5,  182 => 119,  177 => 116,  175 => 112,  23 => 3,  40 => 8,  56 => 39,  224 => 49,  221 => 48,  215 => 6,  161 => 66,  156 => 64,  148 => 62,  140 => 61,  124 => 56,  112 => 53,  99 => 50,  97 => 45,  77 => 18,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 234,  251 => 80,  246 => 118,  240 => 219,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 57,  125 => 58,  107 => 36,  38 => 7,  144 => 61,  141 => 51,  135 => 47,  126 => 45,  109 => 42,  103 => 37,  67 => 23,  61 => 18,  47 => 11,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 70,  189 => 77,  186 => 76,  180 => 117,  172 => 67,  159 => 61,  154 => 59,  147 => 58,  132 => 58,  127 => 52,  121 => 45,  118 => 29,  114 => 42,  104 => 39,  100 => 36,  78 => 26,  75 => 24,  71 => 23,  34 => 5,  91 => 35,  84 => 33,  28 => 3,  105 => 41,  93 => 28,  76 => 16,  72 => 14,  68 => 21,  58 => 16,  27 => 3,  24 => 3,  44 => 10,  25 => 29,  19 => 1,  94 => 33,  88 => 41,  79 => 26,  59 => 21,  31 => 4,  26 => 3,  21 => 2,  70 => 24,  63 => 21,  46 => 12,  22 => 2,  163 => 59,  155 => 58,  152 => 92,  149 => 48,  145 => 46,  139 => 55,  131 => 60,  123 => 33,  120 => 50,  115 => 28,  106 => 50,  101 => 33,  96 => 35,  83 => 35,  80 => 32,  74 => 25,  66 => 22,  55 => 15,  52 => 14,  50 => 18,  43 => 7,  41 => 12,  37 => 6,  35 => 6,  32 => 5,  29 => 3,  184 => 70,  178 => 71,  171 => 66,  165 => 58,  162 => 57,  157 => 60,  153 => 62,  151 => 53,  143 => 40,  138 => 55,  136 => 79,  133 => 31,  130 => 53,  122 => 51,  119 => 65,  116 => 54,  111 => 37,  108 => 41,  102 => 47,  98 => 48,  95 => 36,  92 => 43,  89 => 30,  85 => 29,  81 => 40,  73 => 23,  64 => 11,  60 => 20,  57 => 16,  54 => 19,  51 => 13,  48 => 9,  45 => 13,  42 => 8,  39 => 10,  36 => 9,  33 => 10,  30 => 7,);
    }
}
