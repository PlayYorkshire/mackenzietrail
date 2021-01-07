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

/* /Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/partials/home/posts.htm */
class __TwigTemplate_b14296ee504fa2d8e3243ea8e18330d361d64aa38043a967a5030361bd03abbd extends \Twig\Template
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
        $tags = array("for" => 8);
        $filters = array("escape" => 10, "date" => 13, "raw" => 19);
        $functions = array("str_limit" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'date', 'raw'],
                ['str_limit']
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
        echo "<div class=\"bg_color_1\">
    <div class=\"container margin_80_55\">
        <div class=\"main_title_2\">
            <span><em></em></span>
            <h3>Latest News</h3>
        </div>
        <div class=\"row\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "            <div class=\"col-lg-6\">
                <a class=\"box_news\" href=\"/post/";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\">
                    <figure>
                        <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, true, 12), "path", [], "method", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" />
                        <figcaption><strong>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "created_at", [], "any", false, false, true, 13), 13, $this->source), "d"), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, true, 13), 13, $this->source), "M"), "html", null, true);
            echo "</figcaption>
                    </figure>
                    <ul>
                        <li>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, true, 16), 16, $this->source), "d M Y"), "html", null, true);
            echo "</li>
                    </ul>
                    <h4>";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</h4>
                    <p class=\"d-none\">";
            // line 19
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "body", [], "any", false, false, true, 19), 19, $this->source), 80]);
            echo "</p>
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
        <p class=\"btn_home_align\"><a href=\"/blog\" class=\"btn_1 rounded\">View all news</a></p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/partials/home/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 23,  106 => 19,  102 => 18,  97 => 16,  89 => 13,  83 => 12,  78 => 10,  75 => 9,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg_color_1\">
    <div class=\"container margin_80_55\">
        <div class=\"main_title_2\">
            <span><em></em></span>
            <h3>Latest News</h3>
        </div>
        <div class=\"row\">
            {% for post in records %}
            <div class=\"col-lg-6\">
                <a class=\"box_news\" href=\"/post/{{ post.id }}\">
                    <figure>
                        <img src=\"{{ post.image.path() }}\" alt=\"{{ post.title }}\" />
                        <figcaption><strong>{{ blog.created_at|date('d')}}</strong>{{ post.created_at|date('M')}}</figcaption>
                    </figure>
                    <ul>
                        <li>{{ post.created_at|date('d M Y')}}</li>
                    </ul>
                    <h4>{{ post.title }}</h4>
                    <p class=\"d-none\">{{ str_limit(post.body|raw , 80) }}</p>
                </a>
            </div>
            {% endfor %}
        </div>
        <p class=\"btn_home_align\"><a href=\"/blog\" class=\"btn_1 rounded\">View all news</a></p>
    </div>
</div>", "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/partials/home/posts.htm", "");
    }
}
