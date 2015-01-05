<?php

/* Lab51InboxBundle:Inbox:create.html.twig */
class __TwigTemplate_2e8fbc32af85e307b18a6d9b09e8805866b4243508cbf2c363dd62afd2aa97b4 extends Twig_Template
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

        <h3>Create new message</h3>
        <div class=\"section-container tabs\" data-section>
            <section class=\"section\">
                <div class=\"content\" data-slug=\"panel1\">

                    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                    <div class=\"row collapse\">

                     ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget');
        echo "
                     <select id=\"message_user\" name=\"message[user]\">
                         ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : $this->getContext($context, "friends")));
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 18
            echo "                         <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "name", array()), "html", null, true);
            echo "</option>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                     </select>
                    </div>
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </section>
            
            <a data-dropdown=\"drop_friends\" aria-controls=\"drop_friends\" aria-expanded=\"false\">my friends list</a>
            <ul id=\"drop_friends\" class=\"f-dropdown\" data-dropdown-content aria-hidden=\"true\" tabindex=\"-1\">
            ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : $this->getContext($context, "friends")));
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 30
            echo "            <li onclick=\"selectFriend(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "id", array()), "html", null, true);
            echo ") \">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "name", array()), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </ul>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "Lab51InboxBundle:Inbox:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  92 => 30,  88 => 29,  79 => 23,  75 => 22,  71 => 20,  60 => 18,  56 => 17,  51 => 15,  44 => 11,  40 => 10,  31 => 3,  28 => 2,);
    }
}
