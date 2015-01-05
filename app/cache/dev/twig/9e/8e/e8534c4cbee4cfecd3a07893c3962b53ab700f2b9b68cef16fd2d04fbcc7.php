<?php

/* Lab51InboxBundle:Inbox:show.html.twig */
class __TwigTemplate_9e8ee8534c4cbee4cfecd3a07893c3962b53ab700f2b9b68cef16fd2d04fbcc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("foundation_base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "foundation_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"large-9 columns borders-all\">
        <ul class=\"breadcrumbs\">
            <li><a href=\"/\">home</a></li>
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("lab51_inbox_homepage");
        echo "\">inbox</a></li>
            <li class=\"current\">show message</li>
        </ul>
        <h3>from ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "date", array()), "date", array()), "m/d/Y"), "html", null, true);
        echo " </h3>
        <p>
            ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "content", array()), "html", null, true);
        echo "
        <p>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Lab51InboxBundle:Inbox:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  42 => 9,  36 => 6,  31 => 3,  28 => 2,);
    }
}
