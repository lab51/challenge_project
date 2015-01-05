<?php

/* foundation_base.html.twig */
class __TwigTemplate_20e08aea040b691d5f8ce2f43e1ee20e27292f91d607ee6bc32eafe56b9e0b6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if IE 9]><html class=\"lt-ie10\" lang=\"en\" > <![endif]-->
<html class=\"no-js\" lang=\"en\" data-useragent=\"Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)\">
<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <title>howtough.com</title>
    <meta name=\"description\" content=\"Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more.\"/>
    <meta name=\"author\" content=\"ZURB, inc. ZURB network also includes zurb.com\"/>
    <meta name=\"copyright\" content=\"ZURB, inc. Copyright (c) 2015\"/>
    <link rel=\"stylesheet\" href=\"/css/foundation.css\"/>
    <link rel=\"stylesheet\" href=\"/css/foundation-icons.css\"/>
    <link rel=\"stylesheet\" href=\"/css/custom.css\"/>
    <script src=\"js_fund/modernizr.js\"></script>
    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>

</head>
<body>
    <nav class=\"top-bar\" data-topbar>
    <div class=\"top-custom\">
        <div class=\"logo\">howtough.com</div>
        <div class=\"log-status\">
            ";
        // line 23
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "id"), "method") > 0)) {
            // line 24
            echo "
        <div class=\"icon-bar five-up\">
            <a class=\"item icon-top\"> <i class=\"step fi-checkbox size-12 white\"></i>  </a>
            <a class=\"item icon-top\" href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("lab51_inbox_homepage");
            echo "\"> <i class=\"step fi-mail size-12 white\"></i>  </a>
            <a class=\"item icon-top\"> <i class=\"step fi-power size-12 white\"></i>  </a>
        </div>";
        }
        // line 30
        echo "        </div>
    </div>
    </nav>
    <div class=\"row main-content\">

    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "
        <div class=\"large-3 columns side\">
            <i class=\"step fi-torsos-male-female size-18\"></i> <span class=\"label\">my friends</span>
            <br/>
            <ul>
            ";
        // line 41
        if ((isset($context["current_session"]) ? $context["current_session"] : $this->getContext($context, "current_session"))) {
            // line 42
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["current_session"]) ? $context["current_session"] : $this->getContext($context, "current_session")), "getFriends", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 43
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "name", array()), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </ul>
            <i class=\"step fi-bookmark size-18\"></i> <span class=\"label\">my challenges</span><br/>
            <ul>
            ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["current_session"]) ? $context["current_session"] : $this->getContext($context, "current_session")), "getChallenges", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
                // line 49
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lab51_ladder_index", array("challenge_id" => $this->getAttribute($context["challenge"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["challenge"], "challengeName", array()), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            ";
        }
        // line 52
        echo "            </ul>

            <div id=\"msgs\"></div>


        </div>


</div>

<footer class=\"foot\">
    <div class=\"large-12 columns white-background\">
        <hr/>
        <div class=\"foot\">
            <div class=\"large-6 columns\">
                <p>&copy; Copyright howtough.com 2015.</p>
            </div>
            <div class=\"large-6 columns\">
                <ul class=\"inline-list right\">
                    <li><a href=\"#\">Link 1</a></li>
                    <li><a href=\"#\">Link 2</a></li>
                    <li><a href=\"#\">Link 3</a></li>
                    <li><a href=\"#\">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<div class=\"reveal-modal\" id=\"mapModal\">
    <h4>Where We Are</h4>
    <p><img src=\"http://placehold.it/800x600\"/></p>

    <a href=\"#\" class=\"close-reveal-modal\">&times;</a>
</div>

<script>
    document.write('<script src=js/vendor/' +
    ('__proto__' in {} ? 'zepto' : 'jquery') +
    '.js><\\/script>')
</script>

    <script src=\"/js_fund/jquery.min.js\"></script>
<script src=\"/js_fund/foundation.min.js\"></script>
    <script src=\"/js_fund/foundation.dropdown.js\"></script>
<script>

        \$(document).foundation();
</script>
<script>
    \$(document).foundation();

    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);
</script>
<script type=\"text/javascript\">
    /* <![CDATA[ */
    (function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName(\"a\"),t=document.createElement(\"textarea\");for(i=0;l.length-i;i++){try{a=l[i].getAttribute(\"href\");if(a&&a.indexOf(\"/cdn-cgi/l/email-protection\") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf(\"/cdn-cgi/l/email-protection\");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,\"&lt;\").replace(/>/g,\"&gt;\");l[i].setAttribute(\"href\",\"mailto:\"+t.value);}}catch(e){}}}catch(e){}})();
    /* ]]> */
</script>
</body>
</html>";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "foundation_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 35,  112 => 52,  109 => 51,  98 => 49,  94 => 48,  89 => 45,  80 => 43,  75 => 42,  73 => 41,  66 => 36,  64 => 35,  57 => 30,  51 => 27,  46 => 24,  44 => 23,  20 => 1,);
    }
}
