<?php

/* Lab51ChallengeBundle:Result:index.html.twig */
class __TwigTemplate_3cef5f52cc53724ccfa0e7cfdf9c53062ef2f694852dfc0171776699b1b56725 extends Twig_Template
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
            <li class=\"current\">results</li>
        </ul>
        <h3>Results for challenge: ";
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
            echo "            options:
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
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lab51_ladder_index", array("challenge_id" => $this->getAttribute((isset($context["challenge"]) ? $context["challenge"] : $this->getContext($context, "challenge")), "id", array()))), "html", null, true);
        echo "\">show full ladder</a></p>
        <div class=\"section-container tabs\" data-section>
            <section class=\"section\">
                <div class=\"content\" data-slug=\"panel1\">
                    <table>
                        <thead>
                        <tr>
                            <th width=\"200\">result</th>
                            <th width=\"200\">date</th>
                            <th width=\"200\">options</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 32
            echo "                            <tr>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "result", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["res"], "date", array()), "date", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lab51_result_delete", array("result_id" => $this->getAttribute($context["res"], "id", array()))), "html", null, true);
            echo "\">delete</a> |
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lab51_result_edit", array("result_id" => $this->getAttribute($context["res"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                            No results found
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        </tbody>
                    </table>
                    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lab51_result_create", array("challenge_id" => $this->getAttribute((isset($context["challenge"]) ? $context["challenge"] : $this->getContext($context, "challenge")), "id", array()))), "html", null, true);
        echo "\">add new result</a>


                </div>
            </section>

        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Lab51ChallengeBundle:Result:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  120 => 42,  113 => 40,  104 => 36,  100 => 35,  96 => 34,  92 => 33,  89 => 32,  84 => 31,  68 => 18,  65 => 17,  60 => 15,  56 => 14,  53 => 13,  51 => 12,  46 => 10,  42 => 9,  36 => 6,  31 => 3,  28 => 2,);
    }
}
