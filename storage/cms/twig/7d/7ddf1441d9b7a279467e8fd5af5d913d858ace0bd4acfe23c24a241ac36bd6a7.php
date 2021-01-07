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

/* /Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/pages/auth/tournaments.htm */
class __TwigTemplate_efa37476b0deca24550156e5037dc8ea447791d58a4bebee2ade04e30f557f0f extends \Twig\Template
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
        $tags = array("for" => 18);
        $filters = array("escape" => 20, "date" => 24);
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
        echo "<section class=\"hero_in contacts\" style=\"background-image:url('https://pbs.twimg.com/media/EjQ6eEiXkAIjv9I.jpg')\">
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"fadeInUp\"><span></span>
\t\t\t    Upcoming Tournaments
\t\t\t</h1>
\t\t\t<p class=\"fadeInUp\">Enter into an upcoming tournament</p>
\t\t</div>
\t</div>
</section>

<div class=\"container margin_60_35\">
\t\t\t<div class=\"main_title_2\">
\t\t\t\t<span><em></em></span>
\t\t\t\t<h2>Choose Your Event</h2>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<a href=\"/account/tournaments/";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\" class=\"box_topic\">
\t\t\t\t\t\t<span><i class=\"pe-7s-flag\"></i></span>
\t\t\t\t\t\t<h3>";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<p>";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "county", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p><strong>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, true, 24), 24, $this->source), "d M Y"), "html", null, true);
            echo "</strong></p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t</div>
\t\t\t<!--/row-->
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/pages/auth/tournaments.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 28,  101 => 24,  97 => 23,  93 => 22,  88 => 20,  85 => 19,  81 => 18,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero_in contacts\" style=\"background-image:url('https://pbs.twimg.com/media/EjQ6eEiXkAIjv9I.jpg')\">
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"fadeInUp\"><span></span>
\t\t\t    Upcoming Tournaments
\t\t\t</h1>
\t\t\t<p class=\"fadeInUp\">Enter into an upcoming tournament</p>
\t\t</div>
\t</div>
</section>

<div class=\"container margin_60_35\">
\t\t\t<div class=\"main_title_2\">
\t\t\t\t<span><em></em></span>
\t\t\t\t<h2>Choose Your Event</h2>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t    {% for item in records %}
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<a href=\"/account/tournaments/{{ item.slug }}\" class=\"box_topic\">
\t\t\t\t\t\t<span><i class=\"pe-7s-flag\"></i></span>
\t\t\t\t\t\t<h3>{{ item.name }}</h3>
\t\t\t\t\t\t<p>{{ item.county }}</p>
\t\t\t\t\t\t<p><strong>{{ item.date|date('d M Y') }}</strong></p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<!--/row-->
\t\t</div>", "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/pages/auth/tournaments.htm", "");
    }
}
