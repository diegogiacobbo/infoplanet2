<?php

/* WebProfilerBundle:Profiler:admin.html.twig */
class __TwigTemplate_fd6a7e43da609d33dd419380edc0a8eb extends Twig_Template
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
        echo "<div class=\"search import clearfix\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle; height: 16px\" width=\"16\" height=\"16\" alt=\"Import\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/import.png"), "html", null, true);
        echo "\" />
        Admin
    </h3>

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_import"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        ";
        // line 8
        if ((!twig_test_empty($this->getContext($context, "token")))) {
            // line 9
            echo "            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_purge", array("token" => $this->getContext($context, "token"))), "html", null, true);
            echo "\">Purge</a>
            </div>
            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_export", array("token" => $this->getContext($context, "token"))), "html", null, true);
            echo "\">Export</a>
            </div>
        ";
        }
        // line 16
        echo "        &#187;&#160;<label for=\"file\">Import</label><br />
        <input type=\"file\" name=\"file\" id=\"file\" /><br />
        <button type=\"submit\">
            <span class=\"border_l\">
                <span class=\"border_r\">
                    <span class=\"btn_bg\">UPLOAD</span>
                </span>
            </span>
        </button>
        <div class=\"clear_fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  276 => 248,  262 => 236,  260 => 235,  238 => 218,  87 => 33,  62 => 25,  117 => 44,  113 => 40,  86 => 39,  82 => 37,  65 => 22,  49 => 17,  53 => 17,  278 => 146,  275 => 145,  271 => 142,  268 => 141,  264 => 143,  261 => 141,  258 => 140,  252 => 6,  211 => 145,  208 => 144,  206 => 140,  192 => 129,  164 => 107,  23 => 3,  40 => 8,  56 => 15,  224 => 49,  221 => 48,  215 => 6,  161 => 66,  156 => 64,  148 => 62,  140 => 61,  124 => 56,  112 => 53,  99 => 50,  97 => 45,  77 => 25,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 234,  251 => 80,  246 => 78,  240 => 219,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 147,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 57,  125 => 74,  107 => 36,  38 => 6,  144 => 61,  141 => 51,  135 => 47,  126 => 45,  109 => 42,  103 => 37,  67 => 22,  61 => 18,  47 => 15,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 58,  127 => 46,  121 => 45,  118 => 29,  114 => 42,  104 => 37,  100 => 36,  78 => 26,  75 => 24,  71 => 23,  34 => 8,  91 => 34,  84 => 27,  28 => 3,  105 => 41,  93 => 28,  76 => 16,  72 => 14,  68 => 21,  58 => 17,  27 => 4,  24 => 3,  44 => 8,  25 => 29,  19 => 1,  94 => 33,  88 => 41,  79 => 26,  59 => 21,  31 => 4,  26 => 3,  21 => 2,  70 => 22,  63 => 21,  46 => 12,  22 => 2,  163 => 59,  155 => 58,  152 => 63,  149 => 48,  145 => 46,  139 => 55,  131 => 60,  123 => 33,  120 => 55,  115 => 28,  106 => 50,  101 => 49,  96 => 35,  83 => 18,  80 => 28,  74 => 25,  66 => 24,  55 => 15,  52 => 18,  50 => 18,  43 => 7,  41 => 12,  37 => 7,  35 => 5,  32 => 6,  29 => 3,  184 => 70,  178 => 118,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 40,  138 => 51,  136 => 63,  133 => 31,  130 => 30,  122 => 43,  119 => 42,  116 => 54,  111 => 37,  108 => 52,  102 => 47,  98 => 48,  95 => 34,  92 => 43,  89 => 30,  85 => 29,  81 => 40,  73 => 23,  64 => 22,  60 => 20,  57 => 20,  54 => 19,  51 => 16,  48 => 9,  45 => 13,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
