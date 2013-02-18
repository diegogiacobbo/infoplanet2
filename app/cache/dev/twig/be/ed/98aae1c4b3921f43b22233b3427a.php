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
        echo twig_escape_filter($this->env, ("Mercado de Sabores " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<!-- Jumbotron -->
<figure class=\"jumbotron\">
    <!-- \t\t\t<h1>Marketing stuff!</h1> -->
    <p class=\"lead\">Cras justo odio, dapibus ac facilisis in, egestas
        eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris
        condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <!-- \t\t\t<a class=\"btn btn-large btn-success\" href=\"#\">Get started today</a> -->
</figure>

<hr>

<!-- Example row of columns -->
<article class=\"row-fluid\">
    <div class=\"span6\">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce
            dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
            ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
            magna mollis euismod. Donec sed odio dui.</p>
        <p>
            <a class=\"btn\" href=\"#\">View details &raquo;</a>
        </p>
    </div>
    <div class=\"span6\">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce
            dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
            ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
            magna mollis euismod. Donec sed odio dui.</p>
        <p>
            <a class=\"btn\" href=\"#\">View details &raquo;</a>
        </p>
    </div>
</article>
<hr>
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
