<?php

/* MercadoPaginaBundle:Default:contato.html.twig */
class __TwigTemplate_148ab32ed4545c8cbe9ac39c1a0b43a4 extends Twig_Template
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
        echo "Contato";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MercadoPaginaBundle_contato_send"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        <input type=\"submit\" />
    </form>

";
        // line 11
        if ((!(null === $this->getContext($context, "result")))) {
            // line 12
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->getContext($context, "result"), "html", null, true);
            echo "</p>
";
        }
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "MercadoPaginaBundle:Default:contato.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  54 => 12,  52 => 11,  45 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
