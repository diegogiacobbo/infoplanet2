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
\t\t\t\t\t<h4>Porque consumir produtos orgânicos?</h4>
\t\t\t\t\t<p class='texto'>Alimentos orgânicos são, entre outras coisas, livre de pesticidas
Vários pesticidas utilizados hoje em dia no Brasil estão proibidos em muitos países em razão das consequências provocadas à saúde, tais como o câncer, as alergias e a asma.</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"span6\">
\t\t\t\t\t<h4>Contato</h4>
\t\t\t\t\t<p>
\t\t\t\t\tAvenida Presidente Franklin Roosevelt, 1241 - Loja 04<br>
\t\t\t\t\tNavegantes - Porto Alegre, RS<br>
\t\t\t\t\t</p>            
\t               <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MercadoPaginaBundle_contato_send"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"contato\">
\t\t\t\t        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        \t\t\t\t<input type=\"submit\" value=\"Enviar\" class=\"submit\">
\t\t\t    \t</form>
\t\t\t    \t";
        // line 24
        if ((!(null === $this->getContext($context, "result")))) {
            // line 25
            echo "\t\t\t\t\t    <p>";
            echo twig_escape_filter($this->env, $this->getContext($context, "result"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t</div>
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
        return array (  74 => 27,  68 => 25,  66 => 24,  60 => 21,  54 => 20,  38 => 6,  35 => 5,  29 => 3,);
    }
}
