<?php

/* Lab51InboxBundle:Inbox:index.html.twig */
class __TwigTemplate_7cfc668a160168aa74a966537b38d53c045f44305bdf26008f78b5ee306b3ec7 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("lab51_challenge_homepage");
        echo "\">my challenges</a></li>
            <li class=\"current\">add challenge</li>
        </ul>
        <h3>Inbox</h3>
        <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
        <div class=\"section-container tabs\" data-section>
            <section class=\"section\">
                <div class=\"content\" data-slug=\"panel1\">
<ul>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 16
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lab51_inbox_show_message", array("message_id" => $this->getAttribute($context["msg"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["msg"], "content", array()), 0, 90), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lab51_inbox_delete_message", array("message_id" => $this->getAttribute($context["msg"], "id", array()))), "html", null, true);
            echo "\">delete</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "   
</ul>
                </div>
            </section>

        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Lab51InboxBundle:Inbox:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  52 => 16,  48 => 15,  36 => 6,  31 => 3,  28 => 2,);
    }
}
