<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_769aeb8faf438554e06a967b16c63684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $_exception_)));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  29 => 3,  36 => 6,  32 => 4,  27 => 3,  125 => 24,  118 => 22,  110 => 20,  97 => 18,  92 => 17,  89 => 16,  85 => 14,  69 => 9,  28 => 4,  22 => 2,  57 => 9,  50 => 7,  47 => 7,  38 => 5,  25 => 5,  19 => 1,  94 => 39,  88 => 6,  79 => 39,  48 => 14,  39 => 7,  35 => 7,  31 => 6,  26 => 4,  21 => 1,  203 => 70,  197 => 66,  189 => 62,  183 => 58,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 36,  130 => 35,  124 => 32,  121 => 31,  113 => 21,  108 => 29,  105 => 19,  102 => 27,  99 => 26,  95 => 24,  91 => 22,  81 => 12,  70 => 15,  66 => 13,  62 => 12,  59 => 8,  56 => 10,  52 => 9,  49 => 8,  45 => 6,  41 => 6,  37 => 4,  33 => 9,  30 => 3,);
    }
}