<?php

/* GerenciadorLoginBundle:Default:login.html.twig */
class __TwigTemplate_8e9a86d2cc3868453721e580577b2c8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GerenciadorLoginBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
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
        echo "Mercado de Sabores - Gerenciador";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "Mercado de Sabores";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"container\">

    <form class=\"form-signin\">
        <h2 class=\"form-signin-heading\">Acesse sua conta</h2>
        <input type=\"text\" class=\"input-block-level\" placeholder=\"Usuário\">
        <input type=\"password\" class=\"input-block-level\" placeholder=\"Senha\">
        <button class=\"btn btn-large btn-primary\" type=\"submit\">Entrar</button>
    </form>

</div> <!-- /container -->
";
    }

    public function getTemplateName()
    {
        return "GerenciadorLoginBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
