<?php

/* Lab51ChallengeBundle:Challenge:edit.html.twig */
class __TwigTemplate_2db17141d4e8f21948e84fa1901a8680710380bcda6ce3e97911ac32d40df415 extends Twig_Template
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
            <li class=\"current\"><a href=\"#\">edit challenge</a></li>
        </ul>
        <h3>Edit challenge</h3>
        <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
        <div class=\"section-container tabs\" data-section>
            <section class=\"section\">
                <div class=\"content\" data-slug=\"panel1\">

                    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                    <div class=\"row collapse\">
                        <div class=\"large-2 columns\">
                            <label class=\"inline\"> Challenge name</label>
                        </div>
                        <div class=\"large-10 columns\">
                            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "challenge_name", array()), 'widget');
        echo "
                        </div>
                    </div>

                    <div class=\"row collapse\">
                        <div class=\"large-2 columns\">
                            <label class=\"inline\"> Challenge description</label>
                        </div>
                        <div class=\"large-10 columns\">
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "challenge_description", array()), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    ";
        // line 36
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
        return "Lab51ChallengeBundle:Challenge:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 36,  80 => 35,  74 => 32,  62 => 23,  52 => 16,  48 => 15,  36 => 6,  31 => 3,  28 => 2,);
    }
}
