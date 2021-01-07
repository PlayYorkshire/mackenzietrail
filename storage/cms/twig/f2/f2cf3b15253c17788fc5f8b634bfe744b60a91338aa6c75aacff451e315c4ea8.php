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

/* /Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/partials/global/cta-1.htm */
class __TwigTemplate_43baee5e65bc6c3a92c5e7768e7246505893f0ddd1815050b8c28b36da062c98 extends \Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"call_section\">
    <div class=\"container clearfix\">
        <div class=\"col-lg-5 col-md-6 float-right wow\" data-wow-offset=\"250\">
            <div class=\"block-reveal\">
                <div class=\"block-vertical\"></div>
                <div class=\"box_1\">
                    <h3>Register Now</h3>
                    <p>Sign up to enter the play in the 5 qualifying events oveer the next few months.</p>
                    <a href=\"/register\" class=\"btn_1 rounded\">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/partials/global/cta-1.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"call_section\">
    <div class=\"container clearfix\">
        <div class=\"col-lg-5 col-md-6 float-right wow\" data-wow-offset=\"250\">
            <div class=\"block-reveal\">
                <div class=\"block-vertical\"></div>
                <div class=\"box_1\">
                    <h3>Register Now</h3>
                    <p>Sign up to enter the play in the 5 qualifying events oveer the next few months.</p>
                    <a href=\"/register\" class=\"btn_1 rounded\">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</div>", "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/partials/global/cta-1.htm", "");
    }
}
