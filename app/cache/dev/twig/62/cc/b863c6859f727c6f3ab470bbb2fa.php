<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_62ccb863c6859f727c6f3ab470bbb2fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\">Key</th>
            <th scope=\"col\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute($this->getContext($context, "bag"), "keys")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "        <tr>
            <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "</th>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->dump($this->getAttribute($this->getContext($context, "bag"), "get", array(0 => $this->getContext($context, "key")), "method")), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 248,  262 => 236,  260 => 235,  238 => 218,  87 => 33,  62 => 21,  117 => 44,  113 => 40,  86 => 39,  82 => 37,  65 => 22,  49 => 10,  53 => 17,  275 => 143,  272 => 142,  268 => 139,  265 => 138,  261 => 140,  258 => 138,  255 => 137,  249 => 6,  210 => 144,  208 => 142,  203 => 137,  175 => 115,  23 => 1,  40 => 11,  56 => 14,  224 => 49,  221 => 48,  215 => 6,  161 => 104,  156 => 64,  148 => 62,  140 => 61,  124 => 56,  112 => 53,  99 => 50,  97 => 45,  77 => 25,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 234,  251 => 80,  246 => 78,  240 => 219,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 57,  125 => 58,  107 => 36,  38 => 6,  144 => 61,  141 => 51,  135 => 47,  126 => 45,  109 => 42,  103 => 37,  67 => 22,  61 => 22,  47 => 15,  225 => 96,  216 => 90,  212 => 88,  205 => 141,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 126,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 58,  127 => 73,  121 => 45,  118 => 29,  114 => 42,  104 => 37,  100 => 36,  78 => 21,  75 => 23,  71 => 23,  34 => 11,  91 => 34,  84 => 28,  28 => 6,  105 => 41,  93 => 28,  76 => 16,  72 => 14,  68 => 21,  58 => 17,  27 => 4,  24 => 2,  44 => 8,  25 => 29,  19 => 1,  94 => 33,  88 => 41,  79 => 26,  59 => 21,  31 => 3,  26 => 3,  21 => 1,  70 => 22,  63 => 19,  46 => 12,  22 => 2,  163 => 59,  155 => 58,  152 => 63,  149 => 48,  145 => 46,  139 => 55,  131 => 60,  123 => 33,  120 => 55,  115 => 28,  106 => 50,  101 => 49,  96 => 35,  83 => 18,  80 => 28,  74 => 24,  66 => 24,  55 => 15,  52 => 10,  50 => 15,  43 => 7,  41 => 10,  37 => 5,  35 => 9,  32 => 6,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 40,  138 => 51,  136 => 63,  133 => 31,  130 => 30,  122 => 71,  119 => 42,  116 => 54,  111 => 37,  108 => 52,  102 => 47,  98 => 48,  95 => 34,  92 => 43,  89 => 31,  85 => 29,  81 => 40,  73 => 23,  64 => 17,  60 => 20,  57 => 19,  54 => 20,  51 => 14,  48 => 9,  45 => 14,  42 => 11,  39 => 10,  36 => 9,  33 => 4,  30 => 5,);
    }
}
