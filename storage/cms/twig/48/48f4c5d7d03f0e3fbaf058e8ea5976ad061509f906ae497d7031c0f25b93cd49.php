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

/* /Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/partials/home/hero.htm */
class __TwigTemplate_b9136dda90bda3ff935b63d87327671d5d9e74313661cf1ab483e7e18e8f24c9 extends \Twig\Template
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
        $tags = array("for" => 4);
        $filters = array("escape" => 6, "date" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'date'],
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
        echo "<section class=\"slider\">
\t\t\t<div id=\"slider\" class=\"flexslider\">
\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 6), "path", [], "method", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t    <h2 class=\"upcoming__title\">Upcoming Events</h2>
\t\t\t\t\t\t\t<h3>";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t<p><strong>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, true, 11), 11, $this->source), "D m Y"), "html", null, true);
            echo "</strong></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <a href=\"tour-detail.html\" class=\"btn_1\">View Event</a> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t</ul>
\t\t\t\t<div id=\"icon_drag_mobile\"></div>
\t\t\t</div>
\t\t\t<div id=\"carousel_slider_wp\">
\t\t\t\t<div id=\"carousel_slider\" class=\"flexslider\">
\t\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 25), "path", [], "method", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<h3>";
            // line 27
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, true, 27), 27, $this->source), "d F y"), "html", null, true);
            echo "</span></h3>
\t\t\t\t\t\t\t\t<small>";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "county", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>";
    }

    public function getTemplateName()
    {
        return "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/partials/home/hero.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  123 => 28,  117 => 27,  112 => 25,  109 => 24,  105 => 23,  97 => 17,  85 => 11,  80 => 9,  74 => 6,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"slider\">
\t\t\t<div id=\"slider\" class=\"flexslider\">
\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t{% for item in records %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"{{ item.image.path() }}\" alt=\"\">
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t    <h2 class=\"upcoming__title\">Upcoming Events</h2>
\t\t\t\t\t\t\t<h3>{{ item.name }}</h3>
\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t<p><strong>{{ item.date|date('D m Y')}}</strong></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <a href=\"tour-detail.html\" class=\"btn_1\">View Event</a> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t\t<div id=\"icon_drag_mobile\"></div>
\t\t\t</div>
\t\t\t<div id=\"carousel_slider_wp\">
\t\t\t\t<div id=\"carousel_slider\" class=\"flexslider\">
\t\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t    {% for item in records %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img src=\"{{ item.image.path() }}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<h3>{{ item.name }}<span>{{ item.date|date('d F y') }}</span></h3>
\t\t\t\t\t\t\t\t<small>{{ item.county }}</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>", "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/partials/home/hero.htm", "");
    }
}
