<?php

/* Lab51ChallengeBundle:Challenge:index.html.twig */
class __TwigTemplate_36f76a7c696654cdb2478dc14048605c7a8a271d06558238abc346866cc30f3e extends Twig_Template
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
            <li class=\"current\">my challenges</li>
        </ul>
        <h3>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo " challenges
        </h3>
        <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
        <div class=\"section-container tabs\" data-section>
            <section class=\"section\">
                <div class=\"content\" data-slug=\"panel1\">
                    <script>
                        function setChallenge(id) {
                            document.getElementById(\"result_challenge_id\").value = id;
                        }

                        function myFunction(id) {
                            document.getElementById(\"invitation_challenge_id\").value = id;
                        }
                        function myTest() {
                            document.getElementById(\"msgs\").innerHTML = \"invitation was sent\";
                        }
                        function inviteFriend(friend_id, challenge_id, friend_name, user_id) {
                            /*document.getElementById(\"msgs\").innerHTML = friend_id + \" \" + challenge_id;*/
                            var request = \$.ajax({
                                type: \"POST\",
                                data: {
                                    friend_id: friend_id,
                                    challenge_id: challenge_id,
                                    user_id: user_id
                                },
                                url: \"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("lab51_friend_from_list_invite");
        echo "\",
                                cache: false,
                                success: function(){
                                   /* document.location.reload(false);*/
                                    \$(\"#msgs\").html(\"invitation sent to \" + friend_name);
                                    /*document.getElementById(\"msgs\").value = \"invitation was sent\";*/
                                }
                            });
                        }
                        function addResult() {
                            var request = \$.ajax({
                                type: \"POST\",
                                data: {
                                    result: \$('#result_result').val(),
                                    challenge_id: \$('#result_challenge_id').val()
                                },
                                url: \"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("lab51_result_ajax_add");
        echo "\",
                                cache: false,
                                success: function(){
                                    \$(\"#msgs\").html(\"result added\");
                                }
                            });
                        }

                    </script>
                    <script>
                        function sendInv() {

                            var request = \$.ajax({
                                type: \"POST\",
                                data: {
                                    friends_name: \$('#invitation_friends_name').val(),
                                    email: \$('#invitation_email').val(),
                                    challenge_id: \$('#invitation_challenge_id').val()
                                },
                                url: \"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("lab51_friend_invite");
        echo "\",
                                cache: false,
                                success: function(){
                                   /* document.location.reload(false);*/
                                    \$(\"#msgs\").html(\"invitation sent to \"+\$('#invitation_friends_name').val());
                                    /*document.getElementById(\"msgs\").value = \"invitation was sent\";*/
                                }
                            });

                        /*    request.done(function() {
                                \$(\"#msgs\").html(\"jazda\");

                            });
                        */
                        }
                    </script>
                    <table>
                        <thead>
                        <tr>
                            <th width=\"200\">challenge</th>
                            <th width=\"150\">last result</th>
                            <th width=\"150\">add result</th>
                            <th width=\"150\">invite friend</th>
                            <th width=\"150\">options for challenge</th>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["challenges"]) ? $context["challenges"] : $this->getContext($context, "challenges")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
            // line 98
            echo "                        <tr>
                            <td><a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lab51_result_index", array("challenge_id" => $this->getAttribute($context["challenge"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["challenge"], "challengeName", array()), "html", null, true);
            echo "</a></td>
                            <td>123</td>
                            <td>
                            <a data-dropdown=\"drop_result\" aria-controls=\"drop_result\" aria-expanded=\"false\" onclick=\"setChallenge(";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["challenge"], "id", array()), "html", null, true);
            echo ")\">add result</a>
                           
                            </td>
                            <td><a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lab51_friend_invite", array("challenge_id" => $this->getAttribute($context["challenge"], "id", array()))), "html", null, true);
            echo "\">invite</a>
                                <a data-dropdown=\"drop_new\" aria-controls=\"drop_new\" aria-expanded=\"false\" onclick=\"myFunction(";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["challenge"], "id", array()), "html", null, true);
            echo ")\">new friend</a>

                                <a data-dropdown=\"drop";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["challenge"], "id", array()), "html", null, true);
            echo "\" aria-controls=\"drop";
            echo twig_escape_filter($this->env, $this->getAttribute($context["challenge"], "id", array()), "html", null, true);
            echo "\" aria-expanded=\"false\">from my list</a>
                            <ul id=\"drop";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["challenge"], "id", array()), "html", null, true);
            echo "\" class=\"f-dropdown\" data-dropdown-content aria-hidden=\"true\" tabindex=\"-1\">
                                ";
            // line 110
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : $this->getContext($context, "friends")));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 111
                echo "                                    <li onclick=\"inviteFriend(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "id", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["challenge"], "id", array()), "html", null, true);
                echo ", '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "name", array()), "html", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["challenge"], "user", array()), "id", array()), "html", null, true);
                echo ") \">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "name", array()), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "
                            </ul></td>
                            <td><a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lab51_challenge_delete", array("challenge_id" => $this->getAttribute($context["challenge"], "id", array()))), "html", null, true);
            echo "\">delete</a> |
                            <a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lab51_challenge_edit", array("challenge_id" => $this->getAttribute($context["challenge"], "id", array()))), "html", null, true);
            echo "\">edit</a></td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 119
            echo "                            <li>No challenges found</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                        <div id=\"drop_new\" class=\"f-dropdown\" data-dropdown-content aria-hidden=\"true\" tabindex=\"-1\">
                            ";
        // line 122
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                            <div class=\"row collapse\">
                                <div class=\"large-4 columns\">
                                    <label class=\"inline\"> Your friends email</label>
                                </div>
                                <div class=\"large-8 columns\">
                                    ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"row collapse\">
                                <div class=\"large-4 columns\">
                                    <label class=\"inline\"> ... and name</label>
                                </div>
                                <div class=\"large-8 columns\">
                                    ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "friends_name", array()), 'widget');
        echo "
                                </div>
                            </div>
                            ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "challenge_id", array()), 'widget');
        echo "
                            ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                            ";
        // line 143
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                        </div>
                                    <div id=\"drop_result\" class=\"f-dropdown\" data-dropdown-content aria-hidden=\"true\" tabindex=\"-1\">
                            ";
        // line 147
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_result"]) ? $context["form_result"] : $this->getContext($context, "form_result")), 'form_start');
        echo "
                            ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_result"]) ? $context["form_result"] : $this->getContext($context, "form_result")), 'errors');
        echo "

                            <div class=\"row collapse\">
                                <div class=\"large-4 columns\">
                                    <label class=\"inline\"> Your result</label>
                                </div>
                                <div class=\"large-8 columns\">
                                    ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_result"]) ? $context["form_result"] : $this->getContext($context, "form_result")), "result", array()), 'widget');
        echo "
                                </div>
                            </div>
                            ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_result"]) ? $context["form_result"] : $this->getContext($context, "form_result")), "challenge_id", array()), 'widget');
        echo "
                            ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_result"]) ? $context["form_result"] : $this->getContext($context, "form_result")), "save", array()), 'widget');
        echo "
                            ";
        // line 160
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_result"]) ? $context["form_result"] : $this->getContext($context, "form_result")), 'form_end');
        echo "

                        </div>
                        </tbody>
                    </table>
                    <a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("lab51_challenge_create");
        echo "\">create new challenge</a>

                    ";
        // line 167
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["friends"]) ? $context["friends"] : $this->getContext($context, "friends")));
        echo "
                </div>
            </section>

        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Lab51ChallengeBundle:Challenge:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 167,  309 => 165,  301 => 160,  297 => 159,  293 => 158,  287 => 155,  277 => 148,  273 => 147,  266 => 143,  262 => 142,  258 => 141,  252 => 138,  241 => 130,  231 => 123,  227 => 122,  224 => 121,  217 => 119,  209 => 116,  205 => 115,  201 => 113,  184 => 111,  180 => 110,  176 => 109,  170 => 108,  165 => 106,  161 => 105,  155 => 102,  147 => 99,  144 => 98,  139 => 97,  108 => 69,  86 => 50,  67 => 34,  38 => 8,  31 => 3,  28 => 2,);
    }
}
