<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_61f428533e11938a7334b82dfa50b2ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_cee08e5883c217f68350802c3a4503749b38d29b"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/events.png"), "html", null, true);
        echo "\" alt=\"Events\" /></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Priority</th>
            <th>Listener</th>
        </tr>
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 33
            echo "            <tr>
                <td><code>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "priority"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 36
            echo $context["__internal_cee08e5883c217f68350802c3a4503749b38d29b"]->getdisplay_listener($this->getContext($context, "listener"));
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "    </table>

    ";
        // line 41
        if ($this->getAttribute($this->getContext($context, "collector"), "notcalledlisteners")) {
            // line 42
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Priority</th>
                <th>Listener</th>
            </tr>
            ";
            // line 50
            $context["listeners"] = $this->getAttribute($this->getContext($context, "collector"), "notcalledlisteners");
            // line 51
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getContext($context, "listeners"))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 52
                echo "                <tr>
                    <td><code>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeners"), $this->getContext($context, "listener"), array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeners"), $this->getContext($context, "listener"), array(), "array"), "priority"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 55
                echo $context["__internal_cee08e5883c217f68350802c3a4503749b38d29b"]->getdisplay_listener($this->getAttribute($this->getContext($context, "listeners"), $this->getContext($context, "listener"), array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 58
            echo "        </table>
    ";
        }
    }

    // line 62
    public function getdisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 63
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "listener"), "type") == "Closure")) {
                // line 64
                echo "        Closure
    ";
            } elseif (($this->getAttribute($this->getContext($context, "listener"), "type") == "Function")) {
                // line 66
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getContext($context, "listener"), "file"), $this->getAttribute($this->getContext($context, "listener"), "line"));
                // line 67
                echo "        ";
                if ($this->getContext($context, "link")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "link"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "function"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "function"), "html", null, true);
                }
                // line 68
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "listener"), "type") == "Method")) {
                // line 69
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getContext($context, "listener"), "file"), $this->getAttribute($this->getContext($context, "listener"), "line"));
                // line 70
                echo "        ";
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "listener"), "class"));
                echo "::";
                if ($this->getContext($context, "link")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "link"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "method"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "method"), "html", null, true);
                }
                // line 71
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 69,  185 => 68,  174 => 67,  167 => 64,  164 => 63,  134 => 54,  110 => 42,  20 => 1,  276 => 248,  262 => 236,  260 => 235,  238 => 218,  87 => 34,  62 => 25,  117 => 44,  113 => 40,  86 => 39,  82 => 37,  65 => 22,  49 => 13,  53 => 38,  222 => 115,  214 => 110,  211 => 109,  204 => 71,  195 => 6,  23 => 3,  40 => 8,  56 => 39,  224 => 49,  221 => 48,  215 => 6,  161 => 66,  156 => 116,  148 => 62,  140 => 61,  124 => 56,  112 => 53,  99 => 50,  97 => 45,  77 => 18,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 234,  251 => 80,  246 => 78,  240 => 219,  234 => 74,  228 => 73,  223 => 71,  219 => 114,  213 => 69,  207 => 112,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 57,  125 => 58,  107 => 36,  38 => 7,  144 => 61,  141 => 51,  135 => 47,  126 => 45,  109 => 42,  103 => 37,  67 => 23,  61 => 18,  47 => 15,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 108,  196 => 80,  194 => 79,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 114,  147 => 58,  132 => 58,  127 => 52,  121 => 45,  118 => 29,  114 => 42,  104 => 39,  100 => 36,  78 => 26,  75 => 24,  71 => 23,  34 => 8,  91 => 35,  84 => 33,  28 => 3,  105 => 41,  93 => 28,  76 => 16,  72 => 14,  68 => 21,  58 => 16,  27 => 3,  24 => 3,  44 => 11,  25 => 29,  19 => 1,  94 => 33,  88 => 41,  79 => 26,  59 => 21,  31 => 4,  26 => 3,  21 => 2,  70 => 24,  63 => 21,  46 => 12,  22 => 2,  163 => 59,  155 => 58,  152 => 63,  149 => 108,  145 => 46,  139 => 55,  131 => 60,  123 => 33,  120 => 50,  115 => 28,  106 => 50,  101 => 33,  96 => 35,  83 => 18,  80 => 32,  74 => 25,  66 => 22,  55 => 15,  52 => 14,  50 => 18,  43 => 7,  41 => 12,  37 => 6,  35 => 6,  32 => 5,  29 => 3,  184 => 70,  178 => 71,  171 => 66,  165 => 58,  162 => 57,  157 => 60,  153 => 62,  151 => 113,  143 => 40,  138 => 55,  136 => 63,  133 => 31,  130 => 53,  122 => 51,  119 => 42,  116 => 54,  111 => 37,  108 => 41,  102 => 47,  98 => 48,  95 => 36,  92 => 43,  89 => 30,  85 => 29,  81 => 40,  73 => 23,  64 => 11,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 9,  45 => 13,  42 => 8,  39 => 10,  36 => 9,  33 => 10,  30 => 7,);
    }
}
