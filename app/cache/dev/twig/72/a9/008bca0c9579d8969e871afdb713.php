<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_72a9008bca0c9579d8969e871afdb713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array("token" => ""), array());
        // line 38
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (($this->getContext($context, "about") == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  56 => 39,  276 => 248,  262 => 236,  260 => 235,  87 => 33,  62 => 25,  53 => 38,  117 => 44,  113 => 40,  140 => 61,  86 => 39,  82 => 37,  77 => 18,  65 => 22,  69 => 27,  40 => 8,  238 => 218,  235 => 162,  230 => 157,  227 => 156,  220 => 156,  217 => 155,  199 => 162,  195 => 160,  193 => 155,  156 => 124,  49 => 17,  173 => 72,  150 => 61,  134 => 79,  129 => 77,  124 => 75,  112 => 60,  97 => 45,  23 => 3,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 234,  251 => 80,  246 => 78,  240 => 219,  234 => 74,  228 => 73,  223 => 159,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 141,  170 => 71,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  144 => 53,  141 => 6,  135 => 47,  126 => 76,  109 => 42,  103 => 37,  67 => 12,  61 => 18,  47 => 15,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 164,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 60,  132 => 48,  127 => 46,  121 => 45,  118 => 29,  114 => 69,  104 => 37,  100 => 36,  78 => 26,  75 => 24,  71 => 23,  34 => 8,  91 => 28,  84 => 23,  28 => 3,  105 => 41,  93 => 54,  76 => 16,  72 => 14,  68 => 21,  58 => 17,  27 => 4,  24 => 3,  44 => 11,  25 => 29,  19 => 1,  94 => 33,  88 => 41,  79 => 26,  59 => 21,  31 => 4,  26 => 3,  21 => 2,  70 => 13,  63 => 21,  46 => 34,  22 => 2,  163 => 59,  155 => 65,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 33,  120 => 73,  115 => 28,  106 => 36,  101 => 33,  96 => 35,  83 => 18,  80 => 28,  74 => 25,  66 => 15,  55 => 15,  52 => 18,  50 => 18,  43 => 7,  41 => 12,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 63,  162 => 62,  157 => 60,  153 => 62,  151 => 53,  143 => 40,  138 => 51,  136 => 50,  133 => 31,  130 => 30,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 47,  98 => 31,  95 => 30,  92 => 43,  89 => 30,  85 => 29,  81 => 40,  73 => 23,  64 => 11,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 9,  45 => 13,  42 => 8,  39 => 10,  36 => 9,  33 => 10,  30 => 7,);
    }
}
