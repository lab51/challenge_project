<?php

/* Lab51ChallengeBundle:Result:ladder.html.twig */
class __TwigTemplate_b672704777a10483f19dff8f5401f0eb7eee0bde31b16facab78f2b9e5aef915 extends Twig_Template
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
            <li class=\"current\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["challenge"]) ? $context["challenge"] : $this->getContext($context, "challenge")), "challengeName", array()), "html", null, true);
        echo " ladder</li>
        </ul>
        <h3>Ladder for challenge: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["challenge"]) ? $context["challenge"] : $this->getContext($context, "challenge")), "challengeName", array()), "html", null, true);
        echo "</h3>
        <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["challenge"]) ? $context["challenge"] : $this->getContext($context, "challenge")), "challengeDescription", array()), "html", null, true);
        echo "</p>
        <p>
            ";
        // line 12
        if (((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")) == 1)) {
            // line 13
            echo "                options:
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lab51_challenge_delete", array("challenge_id" => $this->getAttribute((isset($context["challenge"]) ? $context["challenge"] : $this->getContext($context, "challenge")), "id", array()))), "html", null, true);
            echo "\">delete</a> |
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lab51_challenge_edit", array("challenge_id" => $this->getAttribute((isset($context["challenge"]) ? $context["challenge"] : $this->getContext($context, "challenge")), "id", array()))), "html", null, true);
            echo "\">edit</a>
            ";
        }
        // line 17
        echo "        </p>

        <p><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lab51_result_index", array("challenge_id" => $this->getAttribute((isset($context["challenge"]) ? $context["challenge"] : $this->getContext($context, "challenge")), "id", array()))), "html", null, true);
        echo "\">show only my results</a></p>
        <div class=\"section-container tabs\" data-section>
            <section class=\"section\">
                <div class=\"content\" data-slug=\"panel1\">
                    <table>
                        <thead>
                        <tr>
                            <th width=\"200\">result</th>
                            <th width=\"200\">date</th>
                            <th width=\"200\">participant</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 33
            echo "                            <tr>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "result", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["res"], "date", array()), "date", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["res"], "user", array()), "name", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "                            No results found
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Lab51ChallengeBundle:Result:ladder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 41,  112 => 39,  104 => 36,  100 => 35,  96 => 34,  93 => 33,  88 => 32,  72 => 19,  68 => 17,  63 => 15,  59 => 14,  56 => 13,  54 => 12,  49 => 10,  45 => 9,  40 => 7,  36 => 6,  31 => 3,  28 => 2,);
    }
}
