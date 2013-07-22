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
        echo "<!-- Jumbotron -->
\t<div class=\"yellow\"></div>
\t\t<div class=\"orange\"></div>
\t\t<div class=\"content_inner\">
\t\t\t<h3>Porque consumir produtos orgânicos?</h3>
\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and
\t\t\t\ttypesetting industry. Lorem Ipsum has been the industry's standard
\t\t\t\tdummy text ever since the 1500s, when an unknown printer took a
\t\t\t\tgalley of type and scrambled it to make a type specimen book.</p>
\t\t</div>
\t\t<div class=\"content_inner\">
\t\t\t<h3>Contato</h3>
\t\t\t<input type=\"text\" value=\"Nome\" class=\"input\"> <input
\t\t\t\ttype=\"text\" value=\"Email\" class=\"input\">
\t\t\t<select\tclass=\"subject\">
\t\t\t<option>Sugestão</option>
\t\t\t<option>Dúvida</option>
\t\t\t<option>Reclamação</option>
\t\t\t<option>Informação</option>
\t\t\t</select>
\t\t\t<textarea rows=\"3\" cols=\"\" class=\"message\">Mensagem</textarea>
\t\t\t<input type=\"button\" class=\"button\" value=\"Enviar\">
\t\t</div>
\t\t<div class=\"yellow\"></div>
\t\t<div class=\"orange\"></div>
\t</div>
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
