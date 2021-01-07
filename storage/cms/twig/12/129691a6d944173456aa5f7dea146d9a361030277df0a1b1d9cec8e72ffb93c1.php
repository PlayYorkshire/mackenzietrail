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

/* /Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/pages/course.htm */
class __TwigTemplate_b7c72afecb8bf6606a0700733013e1b01c3129b2f54c4ed709a4953b82580329 extends \Twig\Template
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
        $tags = array("if" => 14);
        $filters = array("escape" => 1, "date" => 5, "raw" => 30);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date', 'raw'],
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
        echo "<section class=\"hero_in general\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "image", [], "any", false, false, true, 1), "path", [], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "')\">
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"fadeInUp\"><span></span>";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</h1>
\t\t\t<p class=\"fadeInUp\"><i class=\"ti-calendar\"></i> ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 5), 5, $this->source), "d M Y"), "html", null, true);
        echo "
\t\t</div>
\t</div>
</section>

<div class=\"bg_color_1\">
\t<nav class=\"secondary_nav sticky_horizontal\">
\t\t<div class=\"container\">
\t\t\t<ul class=\"clearfix\">
\t\t\t    ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "body", [], "any", false, false, true, 14)) {
            // line 15
            echo "\t\t\t\t<li><a href=\"#description\" class=\"active\">About the Course</a></li>
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "map", [], "any", false, false, true, 17)) {
            // line 18
            echo "\t\t\t\t<li><a href=\"#description\" class=\"active\">Location</a></li>
\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t<li></li>
\t\t\t</ul>
\t\t</div>
\t</nav>
\t<div class=\"container margin_60_35\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<section id=\"description\">
\t\t\t\t    ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "body", [], "any", false, false, true, 28)) {
            // line 29
            echo "    \t\t\t\t\t<h2>About the Course</h2>
    \t\t\t\t\t";
            // line 30
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "body", [], "any", false, false, true, 30), 30, $this->source);
            echo "
\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t<hr>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t<aside class=\"col-lg-4\" id=\"sidebar\">
            \t<div class=\"box_detail booking\">
            \t\t<div class=\"price\">
            \t\t\t<span class=\"mt-3\">Event Details</span>
            \t\t</div>
            \t\t<div class=\"form-group\">
            \t\t\t<p><strong>Date:</strong> ";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 41), 41, $this->source), "d M Y"), "html", null, true);
        echo "</p>
            \t\t</div>
            \t\t<div class=\"form-group\">
            \t\t\t<p><strong>Location:</strong> ";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "county", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "</p>
            \t\t</div>
            \t\t<div class=\"form-group\">
            \t\t\t<p><strong>Entry Fee:</strong> £";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo ".00</p>
            \t\t</div>
            \t\t<a href=\"/register\" class=\"btn_1 full-width purchase\">Register Now <i class=\"ti-angle-right\"></i></a>
            \t</div>
            \t<div class=\"box_detail booking\">
            \t    <div class=\"price\">
            \t\t\t<span class=\"mt-3\">Share this event</span>
            \t\t</div>
            \t    <div class=\"addthis_inline_share_toolbox\"></div>
            \t</div>
            </aside>
            
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/pages/course.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 47,  135 => 44,  129 => 41,  118 => 32,  113 => 30,  110 => 29,  108 => 28,  98 => 20,  94 => 18,  91 => 17,  87 => 15,  85 => 14,  73 => 5,  69 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero_in general\" style=\"background-image:url('{{ record.image.path() }}')\">
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"fadeInUp\"><span></span>{{ record.name }}</h1>
\t\t\t<p class=\"fadeInUp\"><i class=\"ti-calendar\"></i> {{ record.date|date('d M Y')}}
\t\t</div>
\t</div>
</section>

<div class=\"bg_color_1\">
\t<nav class=\"secondary_nav sticky_horizontal\">
\t\t<div class=\"container\">
\t\t\t<ul class=\"clearfix\">
\t\t\t    {% if record.body %}
\t\t\t\t<li><a href=\"#description\" class=\"active\">About the Course</a></li>
\t\t\t\t{% endif %}
\t\t\t\t{% if record.map %}
\t\t\t\t<li><a href=\"#description\" class=\"active\">Location</a></li>
\t\t\t\t{% endif %}
\t\t\t\t<li></li>
\t\t\t</ul>
\t\t</div>
\t</nav>
\t<div class=\"container margin_60_35\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<section id=\"description\">
\t\t\t\t    {% if record.body %}
    \t\t\t\t\t<h2>About the Course</h2>
    \t\t\t\t\t{{ record.body|raw }}
\t\t\t\t\t{% endif %}
\t\t\t\t\t<hr>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t<aside class=\"col-lg-4\" id=\"sidebar\">
            \t<div class=\"box_detail booking\">
            \t\t<div class=\"price\">
            \t\t\t<span class=\"mt-3\">Event Details</span>
            \t\t</div>
            \t\t<div class=\"form-group\">
            \t\t\t<p><strong>Date:</strong> {{ record.date|date('d M Y')}}</p>
            \t\t</div>
            \t\t<div class=\"form-group\">
            \t\t\t<p><strong>Location:</strong> {{ record.name }}, {{ record.county }}</p>
            \t\t</div>
            \t\t<div class=\"form-group\">
            \t\t\t<p><strong>Entry Fee:</strong> £{{ record.price }}.00</p>
            \t\t</div>
            \t\t<a href=\"/register\" class=\"btn_1 full-width purchase\">Register Now <i class=\"ti-angle-right\"></i></a>
            \t</div>
            \t<div class=\"box_detail booking\">
            \t    <div class=\"price\">
            \t\t\t<span class=\"mt-3\">Share this event</span>
            \t\t</div>
            \t    <div class=\"addthis_inline_share_toolbox\"></div>
            \t</div>
            </aside>
            
\t\t</div>
\t</div>
</div>", "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/pages/course.htm", "");
    }
}
