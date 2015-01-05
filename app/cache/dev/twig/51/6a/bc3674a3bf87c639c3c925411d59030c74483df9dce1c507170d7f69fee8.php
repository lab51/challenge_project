<?php

/* Lab51ChallengeBundle:Result:create.html.twig */
class __TwigTemplate_516abc3674a3bf87c639c3c925411d59030c74483df9dce1c507170d7f69fee8 extends Twig_Template
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
            <li class=\"current\">create result</li>
        </ul>

        <h3>Add result</h3>
        <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
        <div class=\"section-container tabs\" data-section>
            <section class=\"section\">
                <div class=\"content\" data-slug=\"panel1\">

                    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                    <div class=\"row collapse\">
                        <div class=\"large-2 columns\">
                            <label class=\"inline\"> Result</label>
                        </div>
                        <div class=\"large-10 columns\">
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "result", array()), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"row collapse\">
                        <div class=\"large-2 columns\">
                            <label class=\"inline\"> Date</label>
                        </div>
                        <div class=\"large-10 columns\">
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    ";
        // line 37
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
        return "Lab51ChallengeBundle:Result:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 37,  81 => 36,  75 => 33,  63 => 24,  53 => 17,  49 => 16,  36 => 6,  31 => 3,  28 => 2,);
    }
}
