<?php

/* Lab51UserBundle:User:login.html.twig */
class __TwigTemplate_249f92c84c4244e67b3ce316c1e68f60d45a08a71bc8e27079adca612f0247f8 extends Twig_Template
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

    <h3>Login to your accout</h3>
    <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
    <div class=\"section-container tabs\" data-section>
        <section class=\"section\">
            <div class=\"content\" data-slug=\"panel1\">

                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                    <div class=\"row collapse\">
                        <div class=\"large-2 columns\">
                            <label class=\"inline\"> Your Email</label>
                        </div>
                        <div class=\"large-10 columns\">
                            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"row collapse\">
                        <div class=\"large-2 columns\">
                            <label class=\"inline\"> Your password</label>
                        </div>
                        <div class=\"large-10 columns\">
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <label>What's up?</label>
                    <textarea rows=\"4\"></textarea>
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </section>

    </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "Lab51UserBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 33,  74 => 32,  66 => 27,  55 => 19,  45 => 12,  41 => 11,  31 => 3,  28 => 2,);
    }
}
