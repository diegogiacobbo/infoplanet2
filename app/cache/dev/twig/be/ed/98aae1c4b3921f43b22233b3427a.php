<?php

/* MercadoPaginaBundle:Default:index.html.twig */
class __TwigTemplate_beed98aae1c4b3921f43b22233b3427a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MercadoPaginaBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MercadoPaginaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Mercado de Sabores ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"grand-content\">
\t\t\t<div class=\"row-fluid content\">
\t\t\t\t<div class=\"span6\">
\t\t\t\t\t<h4>Subheading</h4>
\t\t\t\t\t<p>Donec id elit non mi porta gravida at eget metus. Maecenas
\t\t\t\t\t\tfaucibus mollis interdum.</p>

\t\t\t\t\t<h4>Subheading</h4>
\t\t\t\t\t<p>Morbi leo risus, porta ac consectetur ac, vestibulum at
\t\t\t\t\t\teros. Cras mattis consectetur purus sit amet fermentum.</p>

\t\t\t\t\t<h4>Subheading</h4>
\t\t\t\t\t<p>Maecenas sed diam eget risus varius blandit sit amet non
\t\t\t\t\t\tmagna.</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"span6\">
\t\t\t\t\t<h4>Contato</h4>
\t\t\t\t\t<p>Donec id elit non mi porta gravida at eget metus. Maecenas
\t\t\t\t\t\tfaucibus mollis interdum.</p>

\t\t\t\t\t<p>Morbi leo risus, porta ac consectetur ac, vestibulum at
\t\t\t\t\t\teros. Cras mattis consectetur purus sit amet fermentum.</p>

\t\t\t\t\t<p>Maecenas sed diam eget risus varius blandit sit amet non
\t\t\t\t\t\tmagna.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "MercadoPaginaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
