<?php

/* MercadoPaginaBundle:Default:index.html.twig */
class __TwigTemplate_e65dd1fce5dcdb26009e3faae12eabea extends Twig_Template
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
\t\t\t\t\t<p>
\t\t\t\t\tAvenida Presidente Franklin Roosevelt, 1241 - Loja 04<br>
\t\t\t\t\tNavegantes - Porto Alegre, RS<br>
\t\t\t\t\t</p>            
\t               <form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MercadoPaginaBundle_contato_send"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"contato\">
\t\t\t        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t        <input type=\"submit\" />
\t\t\t    </form>
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
        return array (  68 => 29,  62 => 28,  38 => 6,  35 => 5,  29 => 3,);
    }
}
