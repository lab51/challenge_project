<?php

/* Lab51UserBundle:Invitation:index.html.twig */
class __TwigTemplate_ee52d3d224e32633cb7ca2894f90bb8ae69b4d38dbff6bc8842642bd179247a4 extends Twig_Template
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
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["karp"]) ? $context["karp"] : $this->getContext($context, "karp")));
    }

    public function getTemplateName()
    {
        return "Lab51UserBundle:Invitation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
