<?php

/* GerenciadorLoginBundle:Default:info.html.twig */
class __TwigTemplate_ceca93108349e7f32c7036ae3d5a7b3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GerenciadorLoginBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GerenciadorLoginBundle::layout.html.twig";
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
        echo "
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GerenciadorLoginBundle_info_empresa_send"), "html", null, true);
        echo "\" method=\"post\">
    <textarea name=\"content\" style=\"width:100%\"></textarea>
</form>

";
        // line 11
        if ((!(null === $this->getContext($context, "result")))) {
            // line 12
            echo "<p>";
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
        return "GerenciadorLoginBundle:Default:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  50 => 12,  48 => 11,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
