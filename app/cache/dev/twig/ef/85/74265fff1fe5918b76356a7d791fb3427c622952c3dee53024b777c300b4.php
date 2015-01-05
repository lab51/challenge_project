<?php

/* Lab51UserBundle:User:register.html.twig */
class __TwigTemplate_ef8574265fff1fe5918b76356a7d791fb3427c622952c3dee53024b777c300b4 extends Twig_Template
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

        <h3>Register new profile</h3>
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
                            <label class=\"inline\"> Your Name</label>
                        </div>
                        <div class=\"large-10 columns\">
                            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"row collapse\">
                        <div class=\"large-2 columns\">
                            <label class=\"inline\"> Your Email</label>
                        </div>
                        <div class=\"large-10 columns\">
                            ";
        // line 28
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
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <label>What's up?</label>
                    <textarea rows=\"4\"></textarea>
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </section>

        </div>
    </div>


    <div class=\"large-3 columns\">
        <h5>Map</h5>

        <p>
            <a href=\"\" data-reveal-id=\"mapModal\"><img src=\"http://placehold.it/400x280\"></a><br/>
            <a href=\"\" data-reveal-id=\"mapModal\">View Map</a>
        </p>
        <p>
            123 Awesome St.<br/>
            Barsoom, MA 95155
        </p>
    </div>

";
    }

    public function getTemplateName()
    {
        return "Lab51UserBundle:User:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 42,  86 => 41,  78 => 36,  67 => 28,  55 => 19,  45 => 12,  41 => 11,  31 => 3,  28 => 2,);
    }
}
