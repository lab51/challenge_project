<?php

/* Lab51UserBundle:Invitation:confirm.html.twig */
class __TwigTemplate_3cda1e38f1bf4609d32085f567d1b73fcaf62c275590d059d8333182a7a5932e extends Twig_Template
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

        <h3>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " - confirm your participation in challenge</h3>
        <p>
        To participate in challenge, you have to open an account. It is free and it takes less than a 30 seconds.
        Then, after loggin in, you will see this challenge on your list.
        
        Remember, you should register with email ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo ", because this address was invited to challenge.
\t\t</p>
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
                            <label class=\"inline\"> Your Name</label>
                        </div>
                        <div class=\"large-10 columns\">
                            ";
        // line 23
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
        // line 32
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
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    ";
        // line 44
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
        return "Lab51UserBundle:Invitation:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 44,  94 => 43,  88 => 40,  77 => 32,  65 => 23,  55 => 16,  51 => 15,  43 => 10,  35 => 5,  31 => 3,  28 => 2,);
    }
}
