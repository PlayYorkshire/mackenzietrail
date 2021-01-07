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

/* /Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/pages/auth/my-account.htm */
class __TwigTemplate_0d6a493de9a25d400059e5b3db1eea0653f7b30cad2199e735ed07f6a4401814 extends \Twig\Template
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
        $tags = array("if" => 5);
        $filters = array("escape" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
  <div class=\"wrapper\">
    <div class=\"container\">
      <h1 class=\"fadeInUp\"><span></span>
        ";
        // line 5
        if (($context["user"] ?? null)) {
            // line 6
            echo "        Welcome ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 8
        echo "      </h1>
      <p class=\"fadeInUp\">Your Account</p>
    </div>
  </div>
</section>
<div class=\"container margin_60_35\">
  <div class=\"main_title_2\">
    <span><em></em></span>
    <h2>Get Started</h2>
  </div>
  <div class=\"row\">
    <div class=\"col-lg-4 col-md-6\">
      <a class=\"box_topic\" href=\"/account/profile\">
        <span><i class=\"pe-7s-wallet\"></i></span>
        <h3>Account Details</h3>
        <p>View and update your personal details</p>
      </a>
    </div>
    <div class=\"col-lg-4 col-md-6\">
      <a class=\"box_topic\" href=\"/account/tournaments\">
        <i class=\"pe-7s-users\"></i>
        <h3>Tournaments</h3>
        <p>View and enter into availble tournaments </p>
      </a>
    </div>
    <div class=\"col-lg-4 col-md-6\">
      <a class=\"box_topic\" href=\"/faqs\">
        <i class=\"pe-7s-help2\"></i>
        <h3>FAQS</h3>
        <p>Need help? View our FAQs</p>
      </a>
    </div>
  </div>
  <!--/row-->
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/pages/auth/my-account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 8,  70 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero_in contacts\" style=\"background-image:url('https://pbs.twimg.com/media/EjQ6eEiXkAIjv9I.jpg')\">
  <div class=\"wrapper\">
    <div class=\"container\">
      <h1 class=\"fadeInUp\"><span></span>
        {% if user %}
        Welcome {{ user.name }}
        {% endif %}
      </h1>
      <p class=\"fadeInUp\">Your Account</p>
    </div>
  </div>
</section>
<div class=\"container margin_60_35\">
  <div class=\"main_title_2\">
    <span><em></em></span>
    <h2>Get Started</h2>
  </div>
  <div class=\"row\">
    <div class=\"col-lg-4 col-md-6\">
      <a class=\"box_topic\" href=\"/account/profile\">
        <span><i class=\"pe-7s-wallet\"></i></span>
        <h3>Account Details</h3>
        <p>View and update your personal details</p>
      </a>
    </div>
    <div class=\"col-lg-4 col-md-6\">
      <a class=\"box_topic\" href=\"/account/tournaments\">
        <i class=\"pe-7s-users\"></i>
        <h3>Tournaments</h3>
        <p>View and enter into availble tournaments </p>
      </a>
    </div>
    <div class=\"col-lg-4 col-md-6\">
      <a class=\"box_topic\" href=\"/faqs\">
        <i class=\"pe-7s-help2\"></i>
        <h3>FAQS</h3>
        <p>Need help? View our FAQs</p>
      </a>
    </div>
  </div>
  <!--/row-->
</div>", "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/pages/auth/my-account.htm", "");
    }
}
