<?php

/* Lab51UserBundle:User:account.html.twig */
class __TwigTemplate_14fca0663c6901c56cfb2ccc41d337ed80bea430d23b6b0a99a8c3e321dfa9ea extends Twig_Template
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
        echo "
pass

";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "html", null, true);
        echo "

status logowania
";
        // line 7
        if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
            echo "
    ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password", array()), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "Lab51UserBundle:User:account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  32 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
