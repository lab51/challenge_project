<?php

/* Lab51UserBundle:User:index.html.twig */
class __TwigTemplate_cbcf67496bdb144c83ee72764d5aba860c27e143e4e0906215a025e3e489a6fb extends Twig_Template
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

        <h3>
            Hello ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "!
        </h3>
        <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
        <div class=\"section-container tabs\" data-section>
            <section class=\"section\">
                <div class=\"content\" data-slug=\"panel1\">
                    ";
        // line 12
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["current_session"]) ? $context["current_session"] : $this->getContext($context, "current_session")));
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute((isset($context["current_session"]) ? $context["current_session"] : $this->getContext($context, "current_session")), "getFriends", array(), "method"));
        echo "
                    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["current_session"]) ? $context["current_session"] : $this->getContext($context, "current_session")), "getFriends", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["firend"]) {
            // line 15
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["firend"], "name", array()), "html", null, true);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['firend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </div>
            </section>

        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "Lab51UserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  36 => 6,  31 => 3,  28 => 2,);
    }
}
