<?php

/* GerenciadorLoginBundle:Secured:login.html.twig */
class __TwigTemplate_5e15a6321b4e045207b15928a569058f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mercadopagina/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <style type=\"text/css\">
                body {
                    padding-top: 40px;
                    padding-bottom: 40px;
                    background-color: #f5f5f5;
                }

                .form-signin {
                    max-width: 300px;
                    padding: 19px 29px 29px;
                    margin: 0 auto 20px;
                    background-color: #fff;
                    border: 1px solid #e5e5e5;
                    -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;
                    border-radius: 5px;
                    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                    box-shadow: 0 1px 2px rgba(0,0,0,.05);
                }
                .form-signin .form-signin-heading,
                .form-signin .checkbox {
                    margin-bottom: 10px;
                }
                .form-signin input[type=\"text\"],
                .form-signin input[type=\"password\"] {
                    font-size: 16px;
                    height: auto;
                    margin-bottom: 15px;
                    padding: 7px 9px;
                }

            </style>
        </head>
        <body>
        ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Gerenciador/LoginBundle Bundle";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 50
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 51
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 54
        echo "


            ";
        // line 57
        if ($this->getContext($context, "error")) {
            // line 58
            echo "                <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
            ";
        }
        // line 60
        echo "

                <!-- <div class=\"container\"> -->
                <form action=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\" class=\"form-signin\" method=\"post\" id=\"login\">

                    <h2 class=\"form-signin-heading\">Acesse sua conta</h2>

                    <input type=\"text\" class=\"input-block-level\" placeholder=\"Usuário\" id=\"username\" name=\"_username\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\"  />

                    <input type=\"password\" class=\"input-block-level\" placeholder=\"Senha\" id=\"password\" name=\"_password\" />

                    <button  type=\"submit\" class=\"btn btn-large btn-primary\"/> Entrar</button>
            </form>


            <!-- </div> -->
        </div>
    </body>
</html>
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
        return array (  143 => 67,  136 => 63,  131 => 60,  125 => 58,  123 => 57,  118 => 54,  109 => 51,  106 => 50,  101 => 49,  98 => 48,  92 => 6,  88 => 48,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  28 => 6,  21 => 1,);
    }
}
