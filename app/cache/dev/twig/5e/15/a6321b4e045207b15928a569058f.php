<?php

/* GerenciadorLoginBundle:Secured:login.html.twig */
class __TwigTemplate_5e15a6321b4e045207b15928a569058f extends Twig_Template
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
        // line 31
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
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
        echo "Login";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "

    ";
        // line 10
        if ($this->getContext($context, "error")) {
            // line 11
            echo "<div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "

<!-- <div class=\"container\"> -->
<form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\" class=\"form-signin\" method=\"post\" id=\"login\">

    <h2 class=\"form-signin-heading\">Acesse sua conta</h2>

    <input type=\"text\" class=\"input-block-level\" placeholder=\"Usuário\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\"  />

    <input type=\"password\" class=\"input-block-level\" placeholder=\"Senha\" id=\"password\" name=\"_password\" />

    <button  type=\"submit\" class=\"btn btn-large btn-primary\"/> Entrar</button>
</form>
<!-- </div> -->

</div> <!-- /container -->
";
    }

    public function getTemplateName()
    {
        return "GerenciadorLoginBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  64 => 16,  59 => 13,  53 => 11,  51 => 10,  47 => 8,  44 => 7,  38 => 5,  32 => 3,  27 => 31,);
    }
}
