<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/partials/global/navigation.htm */
class __TwigTemplate_3b1835206b55e0cc7b8ae8abe7d7f1de6310c88bd63241e25823ef1164784a49 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("partial" => 13, "if" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'if'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav id=\"menu\" class=\"main-menu\">
\t<ul>
\t    <li><span><a href=\"/\">Home</a></span></li>
\t\t<li><span><a href=\"/about-us\">The Tour</a></span>
    \t\t<ul>
    \t\t    <li><a href=\"/about-us\">About</a></li>
    \t        <li><a href=\"/about-alister-mackenzie\">Alister MacKenzie</a></li>
    \t        <li><a href=\"/news/\">News</a></li>
    \t\t</ul>
\t\t</li>
\t\t<li><span><a href=\"#\">Courses</a></span>
    \t\t<ul>
    \t\t    ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/courses-nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "    \t\t</ul>
\t\t</li>
\t\t<li><span><a href=\"/faqs\">FAQs</a></span>
\t\t<li><span><a href=\"/contact\">Get in touch</a></span></li>
\t\t";
        // line 18
        if (($context["user"] ?? null)) {
            // line 19
            echo "           <li><span><a href=\"#\">My Account</a></span>
    \t\t<ul>
    \t\t    <li><a href=\"/account\">View Account</a></li>
    \t        <li class=\"account\"><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
    \t\t</ul>
\t\t    </li>
        ";
        } else {
            // line 26
            echo "            <li><span><a href=\"/login\">Sign In</a></span></li>
        ";
        }
        // line 28
        echo "\t</ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/partials/global/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  97 => 26,  88 => 19,  86 => 18,  80 => 14,  76 => 13,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"menu\" class=\"main-menu\">
\t<ul>
\t    <li><span><a href=\"/\">Home</a></span></li>
\t\t<li><span><a href=\"/about-us\">The Tour</a></span>
    \t\t<ul>
    \t\t    <li><a href=\"/about-us\">About</a></li>
    \t        <li><a href=\"/about-alister-mackenzie\">Alister MacKenzie</a></li>
    \t        <li><a href=\"/news/\">News</a></li>
    \t\t</ul>
\t\t</li>
\t\t<li><span><a href=\"#\">Courses</a></span>
    \t\t<ul>
    \t\t    {% partial 'global/courses-nav' %}
    \t\t</ul>
\t\t</li>
\t\t<li><span><a href=\"/faqs\">FAQs</a></span>
\t\t<li><span><a href=\"/contact\">Get in touch</a></span></li>
\t\t{% if user %}
           <li><span><a href=\"#\">My Account</a></span>
    \t\t<ul>
    \t\t    <li><a href=\"/account\">View Account</a></li>
    \t        <li class=\"account\"><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
    \t\t</ul>
\t\t    </li>
        {% else %}
            <li><span><a href=\"/login\">Sign In</a></span></li>
        {% endif %}
\t</ul>
</nav>", "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/partials/global/navigation.htm", "");
    }
}
