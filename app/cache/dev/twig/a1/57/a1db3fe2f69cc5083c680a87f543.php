<?php

/* GerenciadorLoginBundle::layout.html.twig */
class __TwigTemplate_a157a1db3fe2f69cc5083c680a87f543 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Symfony logo\" />
                </a>
                <form id=\"symfony-search\" method=\"GET\" action=\"http://symfony.com/search\">
                    <label for=\"symfony-search-field\"><span>Search on Symfony Website</span></label>
                    <input name=\"q\" id=\"symfony-search-field\" type=\"search\" placeholder=\"Search on Symfony website\" class=\"medium_txt\" />
                    <input type=\"submit\" class=\"symfony-button-grey\" value=\"OK\" />
                </form>
            </div>

            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "
            ";
        // line 27
        $this->displayBlock('content_header', $context, $blocks);
        // line 36
        echo "
            <div class=\"symfony-content\">
                ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "            </div>

            ";
        // line 42
        if (array_key_exists("code", $context)) {
            // line 43
            echo "                <h2>Code behind this page</h2>
                <div class=\"symfony-content\">";
            // line 44
            echo $this->getContext($context, "code");
            echo "</div>
            ";
        }
        // line 46
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Gerenciador/LoginBundle Bundle";
    }

    // line 27
    public function block_content_header($context, array $blocks = array())
    {
        // line 28
        echo "                <ul id=\"menu\">
                    ";
        // line 29
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 32
        echo "                </ul>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 29
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 30
        echo "                        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Demo Home</a></li>
                    ";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "                ";
    }

    public function getTemplateName()
    {
        return "GerenciadorLoginBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 39,  136 => 38,  129 => 30,  126 => 29,  119 => 32,  117 => 29,  114 => 28,  111 => 27,  105 => 5,  98 => 46,  93 => 44,  90 => 43,  88 => 42,  84 => 40,  82 => 38,  78 => 36,  76 => 27,  64 => 23,  61 => 22,  45 => 12,  41 => 11,  33 => 6,  29 => 5,  23 => 1,  73 => 26,  67 => 19,  63 => 17,  57 => 21,  55 => 14,  47 => 8,  44 => 7,  38 => 5,  32 => 3,  27 => 34,);
    }
}
