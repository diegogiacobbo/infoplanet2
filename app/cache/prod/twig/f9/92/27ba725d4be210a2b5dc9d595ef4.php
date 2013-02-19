<?php

/* DoctrineBundle:Collector:db.html.twig */
class __TwigTemplate_f99227ba725d4be210a2b5dc9d595ef4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")) ? ("WebProfilerBundle:Profiler:ajax_layout.html.twig") : ("WebProfilerBundle:Profiler:layout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
        <span class=\"sf-toolbar-status";
        // line 6
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ((50 < $this->getAttribute($_collector_, "querycount"))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "querycount"), "html", null, true);
        echo "</span>
        ";
        // line 7
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (($this->getAttribute($_collector_, "querycount") > 0)) {
            // line 8
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($_collector_, "time") * 1000)), "html", null, true);
            echo " ms</span>
        ";
        }
        // line 10
        echo "        ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (($this->getAttribute($_collector_, "invalidEntityCount") > 0)) {
            // line 11
            echo "            <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\"> </span>
        ";
        }
        // line 13
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 17
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "querycount"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 21
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($_collector_, "time") * 1000)), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Invalid entities</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 25
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo ((($this->getAttribute($_collector_, "invalidEntityCount") > 0)) ? ("red") : ("green"));
        echo "\">";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "invalidEntityCount"), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        // line 32
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 36
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "querycount"), "html", null, true);
        echo "</span>
        <span>";
        // line 37
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute($_collector_, "time") * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
    }

    // line 42
    public function block_panel($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (("explain" == $_page_)) {
            // line 44
            echo "        ";
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo $this->env->getExtension('actions')->renderAction("DoctrineBundle:Profiler:explain", array("token" => $_token_, "panel" => "db", "connectionName" => $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "connection"), "method"), "query" => $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "query"), "method")), array());
            // line 50
            echo "    ";
        } else {
            // line 51
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
    }

    // line 55
    public function block_queries($context, array $blocks = array())
    {
        // line 56
        echo "    <h2>Queries</h2>

    ";
        // line 58
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "queries"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 59
            echo "        <h3>Connection <em>";
            if (isset($context["connection"])) { $_connection_ = $context["connection"]; } else { $_connection_ = null; }
            echo twig_escape_filter($this->env, $_connection_, "html", null, true);
            echo "</em></h3>
        ";
            // line 60
            if (isset($context["queries"])) { $_queries_ = $context["queries"]; } else { $_queries_ = null; }
            if (twig_test_empty($_queries_)) {
                // line 61
                echo "            <p>
                <em>No queries.</em>
            </p>
        ";
            } else {
                // line 65
                echo "            <ul class=\"alt\" id=\"queriesPlaceholder-";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
                echo "\">
                ";
                // line 66
                if (isset($context["queries"])) { $_queries_ = $context["queries"]; } else { $_queries_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_queries_);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 67
                    echo "                    <li class=\"";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
                    echo "\" data-extra-info=\"";
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($_query_, "executionMS") * 1000)), "html", null, true);
                    echo "\" data-target-id=\"";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "\">
                        <div style=\"margin-top: 4px\" id=\"queryNo-";
                    // line 68
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "-";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                    echo "\">
                            <div onclick=\"return expandQuery(this);\" title=\"Expand query\" data-target-id=\"code-";
                    // line 69
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "-";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                    echo "\" style=\"cursor: pointer;\">
                                <img alt=\"+\" src=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                    echo "\" style=\"display: inline;\" />
                                <img alt=\"-\" src=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                    echo "\" style=\"display: none;\" />
                                <span style=\"display: none\">Shrink query</span>
                                <span id=\"smallcode-";
                    // line 73
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "-";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                    echo "\">
                                    ";
                    // line 74
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    echo $this->env->getExtension('doctrine_extension')->minifyQuery($this->getAttribute($_query_, "sql"));
                    echo "
                                </span>
                            </div>
                            <code id=\"code-";
                    // line 77
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "-";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                    echo "\">
                                ";
                    // line 78
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo SqlFormatter::format($this->getAttribute($_query_, "sql"), $_i_, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"));
                    echo "
                            </code>
                            <span id=\"original-query-";
                    // line 80
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "-";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                    echo "\" style=\"display: none;\">
                                ";
                    // line 81
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    echo $this->env->getExtension('doctrine_extension')->replaceQueryParameters($this->getAttribute($_query_, "sql"), $this->getAttribute($_query_, "params"));
                    echo "
                            </span>
                            <small>
                                <strong>Parameters</strong>: ";
                    // line 84
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($_query_, "params")), "html", null, true);
                    echo " <br />
                                [<span id=\"expandParams-";
                    // line 85
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "-";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                    echo "\" onclick=\"javascript:toggleRunnableQuery(this);\" target-data-id=\"original-query-";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "-";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                    echo "\" style=\"cursor: pointer;\">Display runnable query</span>]<br/>
                                <strong>Time</strong>: ";
                    // line 86
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($_query_, "executionMS") * 1000)), "html", null, true);
                    echo " ms
                            </small>
                            ";
                    // line 88
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if ($this->getAttribute($_query_, "explainable")) {
                        // line 89
                        echo "                                [<a href=\"";
                        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
                        if (isset($context["connection"])) { $_connection_ = $context["connection"]; } else { $_connection_ = null; }
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("panel" => "db", "token" => $_token_, "page" => "explain", "connection" => $_connection_, "query" => $_i_)), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" style=\"text-decoration: none;\" title=\"Explains the query\" data-target-id=\"explain-";
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        echo twig_escape_filter($this->env, $_i_, "html", null, true);
                        echo "-";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                        echo "\" >
                                    <img alt=\"+\" src=\"";
                        // line 90
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                        echo "\" style=\"display: inline; width: 12px; height: 12px;\" />
                                    <img alt=\"-\" src=\"";
                        // line 91
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                        echo "\" style=\"display: none; width: 12px; height: 12px;\" />
                                    <span style=\"vertical-align:top\">Explain query</span>
                                </a>]
                            ";
                    } else {
                        // line 95
                        echo "                                This query cannot be explained
                            ";
                    }
                    // line 97
                    echo "                        </div>
                        ";
                    // line 98
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if ($this->getAttribute($_query_, "explainable")) {
                        // line 99
                        echo "                        <div id=\"explain-";
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        echo twig_escape_filter($this->env, $_i_, "html", null, true);
                        echo "-";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                        echo "\" class=\"loading\"></div>
                        ";
                    }
                    // line 101
                    echo "                    </li>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 103
                echo "            </ul>
        ";
            }
            // line 105
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 106
        echo "
    <h2>Database Connections</h2>

    ";
        // line 109
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "connections")) {
            // line 110
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($_collector_, "connections")));
            // line 111
            echo "    ";
        } else {
            // line 112
            echo "        <p>
            <em>No connections.</em>
        </p>
    ";
        }
        // line 116
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 119
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "managers")) {
            // line 120
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($_collector_, "managers")));
            // line 121
            echo "    ";
        } else {
            // line 122
            echo "        <p>
            <em>No entity managers.</em>
        </p>
    ";
        }
        // line 126
        echo "
    <h2>Mapping</h2>

    ";
        // line 129
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "entities"));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 130
            echo "        <h3>Manager <em>";
            if (isset($context["manager"])) { $_manager_ = $context["manager"]; } else { $_manager_ = null; }
            echo twig_escape_filter($this->env, $_manager_, "html", null, true);
            echo "</em></h3>
        ";
            // line 131
            if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
            if (twig_test_empty($_classes_)) {
                // line 132
                echo "            <p><em>No loaded entities.</em></p>
        ";
            } else {
                // line 134
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 142
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_classes_);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 143
                    echo "                    <tr>
                        <td>";
                    // line 144
                    if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                    echo twig_escape_filter($this->env, $_class_, "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 146
                    if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                    if (isset($context["manager"])) { $_manager_ = $context["manager"]; } else { $_manager_ = null; }
                    if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "mappingErrors", array(), "any", false, true), $_manager_, array(), "array", false, true), $_class_, array(), "array", true, true)) {
                        // line 147
                        echo "                                <ul>
                                    ";
                        // line 148
                        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                        if (isset($context["manager"])) { $_manager_ = $context["manager"]; } else { $_manager_ = null; }
                        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "mappingErrors"), $_manager_, array(), "array"), $_class_, array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 149
                            echo "                                        <li>";
                            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                            echo twig_escape_filter($this->env, $_error_, "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 151
                        echo "                                </ul>
                            ";
                    } else {
                        // line 153
                        echo "                                Valid
                            ";
                    }
                    // line 155
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 158
                echo "                </tbody>
            </table>
        ";
            }
            // line 161
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 162
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var imgs = link.children,
                target = link.getAttribute('data-target-id');

            Sfjs.toggle(target, imgs[0], imgs[1])
                .load(
                    target,
                    link.href,
                    null,
                    function(xhr, el) {
                        el.innerHTML = 'An error occurred while loading the details';
                        Sfjs.removeClass(el, 'loading');
                    }
                );

            return false;
        }

        function expandQuery(link) {
            var sections = link.children,
                target = link.getAttribute('data-target-id'),
                targetId = target.replace('code', ''),
                queriesParameters = document.getElementById('original-query' + targetId);

            if (queriesParameters.style.display != 'none') {
                queriesParameters.style.display = 'none';
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById('expandParams' + targetId).innerHTML = 'Display runnable query';
            }

            if (document.getElementById('small' + target).style.display != 'none') {
                document.getElementById('small' + target).style.display = 'none';
                document.getElementById(target).style.display = 'inline';

                sections[0].style.display = 'none';
                sections[1].style.display = 'inline';
                sections[2].style.display = 'inline';
            } else {
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById(target).style.display = 'none';

                sections[0].style.display = 'inline';
                sections[1].style.display = 'none';
                sections[2].style.display = 'none';
            }

            return false;
        }

        function toggleRunnableQuery(target) {
            var targetId = target.getAttribute('target-data-id').replace('original-query', ''),
                targetElement = document.getElementById(target.getAttribute('target-data-id')),
                elem;

            if (targetElement.style.display != 'block') {
                targetElement.style.display = 'block';
                target.innerHTML = 'Hide runnable query';

                document.getElementById('smallcode' + targetId).style.display = 'none';
                document.getElementById('code' + targetId).style.display = 'none';

                elem = document.getElementById('code' + targetId).parentElement.children[0];

                elem.children[0].style.display = 'inline';
                elem.children[1].style.display = 'none';
                elem.children[2].style.display = 'none';

            } else {
                targetElement.style.display = 'none';
                target.innerHTML = 'Display runnable query';

                document.getElementById('smallcode' + targetId).style.display = 'inline';
            }
        }

    //]]></script>

    <style>
        h3 {
            margin-bottom: 0px;
        }

        code {
            display: none;
        }

        code pre {
            padding: 5px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 105,  389 => 103,  374 => 101,  364 => 99,  361 => 98,  358 => 97,  354 => 95,  347 => 91,  343 => 90,  329 => 89,  326 => 88,  320 => 86,  306 => 85,  301 => 84,  294 => 81,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 70,  238 => 69,  230 => 68,  188 => 61,  185 => 60,  161 => 58,  154 => 55,  146 => 51,  143 => 50,  134 => 43,  131 => 42,  122 => 37,  76 => 17,  72 => 15,  51 => 8,  171 => 58,  163 => 55,  159 => 53,  152 => 50,  138 => 44,  123 => 42,  117 => 36,  111 => 32,  101 => 34,  98 => 33,  83 => 24,  75 => 20,  71 => 19,  64 => 16,  43 => 7,  250 => 71,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 80,  218 => 67,  215 => 78,  212 => 77,  209 => 76,  200 => 66,  194 => 65,  179 => 59,  176 => 60,  173 => 59,  166 => 55,  162 => 54,  157 => 56,  155 => 51,  151 => 48,  148 => 47,  145 => 46,  139 => 45,  128 => 43,  109 => 31,  87 => 28,  84 => 21,  114 => 34,  104 => 19,  80 => 23,  65 => 23,  63 => 13,  58 => 10,  40 => 6,  34 => 11,  24 => 4,  46 => 9,  29 => 3,  36 => 6,  32 => 4,  27 => 3,  125 => 24,  118 => 36,  110 => 20,  97 => 18,  92 => 25,  89 => 28,  85 => 14,  69 => 14,  28 => 4,  22 => 2,  57 => 9,  50 => 7,  47 => 7,  38 => 6,  25 => 3,  19 => 1,  94 => 39,  88 => 6,  79 => 26,  48 => 7,  39 => 7,  35 => 5,  31 => 6,  26 => 6,  21 => 1,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 44,  130 => 35,  124 => 32,  121 => 31,  113 => 21,  108 => 31,  105 => 19,  102 => 28,  99 => 26,  95 => 24,  91 => 16,  81 => 12,  70 => 15,  66 => 13,  62 => 11,  59 => 8,  56 => 12,  52 => 10,  49 => 9,  45 => 6,  41 => 15,  37 => 5,  33 => 4,  30 => 3,);
    }
}
