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

/* /Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/layouts/_main-layout.htm */
class __TwigTemplate_a942546185b327a5c7bb77696eb9997a965309a9171b2970cacc1a327376f539 extends \Twig\Template
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
        $tags = array("if" => 27, "partial" => 64, "page" => 71, "framework" => 202);
        $filters = array("escape" => 8, "theme" => 23, "date" => 125);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial', 'page', 'framework'],
                ['escape', 'theme', 'date'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "meta_description", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">
    
    <title>";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo " | The MacKenzie Trail</title>

    <!-- Favicons-->
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" href=\"img/apple-touch-icon-57x57-precomposed.png\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"72x72\" href=\"img/apple-touch-icon-72x72-precomposed.png\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"114x114\" href=\"img/apple-touch-icon-114x114-precomposed.png\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"144x144\" href=\"img/apple-touch-icon-144x144-precomposed.png\">

    <!-- GOOGLE WEB FONT -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800\" rel=\"stylesheet\">

    <!-- BASE CSS -->
    <link href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendors.css");
        echo "\" rel=\"stylesheet\">
\t
\t";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 27), "title", [], "any", false, false, true, 27) == "News")) {
            // line 28
            echo "\t    <link href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/blog.css");
            echo "\" rel=\"stylesheet\">
\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["this"] ?? null), "page", [], "any", false, false, true, 29), "title", [], "any", false, false, true, 29) == "Single Blog")) {
            // line 30
            echo "\t    <link href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/blog.css");
            echo "\" rel=\"stylesheet\">
\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["this"] ?? null), "page", [], "any", false, false, true, 31), "title", [], "any", false, false, true, 31) == "Membership")) {
            // line 32
            echo "\t    <link href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/tables.css");
            echo "\" rel=\"stylesheet\">
\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 33
($context["this"] ?? null), "page", [], "any", false, false, true, 33), "title", [], "any", false, false, true, 33) == "Tournaments")) {
            // line 34
            echo "\t    <script src=\"https://www.eventbrite.co.uk/static/widgets/eb_widgets.js\"></script>
\t";
        }
        // line 36
        echo "
    <!-- YOUR CUSTOM CSS -->
    <link href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/custom.css");
        echo "\" rel=\"stylesheet\">
\t
\t<!-- Modernizr -->
\t<script src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/modernizr.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fbfee9e6213c265\"></script>

</head>

<body>
\t\t
\t<div id=\"page\">
\t\t
\t<header class=\"header menu_fixed\">
\t\t<div id=\"logo\">
\t\t\t<a href=\"/\">
\t\t\t\t<img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/branding/logo-white.png");
        echo "\"  height=\"36\" data-retina=\"true\" alt=\"\" class=\"logo_normal\">
\t\t\t\t<img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/branding/logo-black.png");
        echo "\"  height=\"36\" data-retina=\"true\" alt=\"\" class=\"logo_sticky\">
\t\t\t</a>
\t\t</div>
\t\t<a href=\"#menu\" class=\"btn_mobile\">
\t\t\t<div class=\"hamburger hamburger--spin\" id=\"hamburger\">
\t\t\t\t<div class=\"hamburger-box\">
\t\t\t\t\t<div class=\"hamburger-inner\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</a>
\t\t";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/navigation"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "\t</header>
\t<!-- /header -->
\t
    <!-- main -->
    <main>
\t
\t";
        // line 71
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 72
        echo "\t
\t</main>
\t<!-- /main -->

\t<footer>
\t\t<div class=\"container margin_60_35\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-5 col-md-12 p-r-5\">
\t\t\t\t\t<p><img src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/branding/logo-white.png");
        echo "\" height=\"70\" data-retina=\"true\" alt=\"\"></p>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas dui id dictum mattis. Morbi in elit rutrum, porta quam vel, feugiat nulla. Fusce fringilla in nibh ut luctus. Ut vitae justo at leo scelerisque dapibus. In consequat nec enim nec tempor. Nullam tempus diam id felis ullamcorper vestibulum. In lectus enim, porttitor.</p>
\t\t\t\t\t<div class=\"follow_us\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Follow us</li>
\t\t\t\t\t\t\t<li><a href=\"#0\"><i class=\"ti-facebook\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#0\"><i class=\"ti-twitter-alt\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#0\"><i class=\"ti-google\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#0\"><i class=\"ti-instagram\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 ml-lg-auto\">
\t\t\t\t\t<h5>Useful links</h5>
\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"/about-us\">About</a></li>
\t\t\t\t\t\t<li><a href=\"/tour\">The Tour</a></li>
\t\t\t\t\t\t<li><a href=\"/blog\">News</a></li>
\t\t\t\t\t\t<li><a href=\"/contact\">FAQs</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<h5>Contact with Us</h5>
\t\t\t\t\t<ul class=\"contacts\">
\t\t\t\t\t\t<li><a href=\"tel://61280932400\"><i class=\"ti-mobile\"></i> 0800 1 70 70 77</a></li>
\t\t\t\t\t\t<li><a href=\"mailto:info@themackenzietour.co.uk\"><i class=\"ti-email\"></i> info@themackenzietour.co.uk</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"newsletter\">
\t\t\t\t\t<h6>Newsletter</h6>
\t\t\t\t\t<div id=\"message-newsletter\"></div>
\t\t\t\t\t<form method=\"post\" action=\"assets/newsletter.php\" name=\"newsletter_form\" id=\"newsletter_form\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"email\" name=\"email_newsletter\" id=\"email_newsletter\" class=\"form-control\" placeholder=\"Your email\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Submit\" id=\"submit-newsletter\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--/row-->
\t\t\t<hr>
\t\t\t<div class=\"row\">
\t\t\t    <div class=\"col-lg-6\">
\t\t\t\t\t<ul id=\"additional_links text-left\">
\t\t\t\t\t\t<li><span>© ";
        // line 125
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " MacKenzie Trail</span></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<ul id=\"additional_links\">
\t\t\t\t\t\t<li><a href=\"#\">Terms and conditions</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Privacy</a></li>
\t\t\t\t\t\t<li><a href=\"/contact\">Contact us</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!--/footer-->
\t</div>
\t<!-- page -->
\t
\t<div id=\"toTop\"></div><!-- Back to top button -->
\t
\t<!-- COMMON SCRIPTS -->
    <script src=\"";
        // line 145
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-2.2.4.min.js");
        echo "\"></script>
    <script src=\"";
        // line 146
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/common_scripts.js");
        echo "\"></script>
    <script src=\"";
        // line 147
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
\t<script src=\"";
        // line 148
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/validate.js");
        echo "\"></script>
\t<script src=\"https://cdn.jsdelivr.net/bxslider/4.1.1/jquery.bxslider.min.js\"></script>
\t";
        // line 150
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 150), "title", [], "any", false, false, true, 150) == "Home")) {
            // line 151
            echo "\t<script src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.flexslider.js");
            echo "\"></script>
\t<script>
\t\t\$(window).load(function() {
\t\t\t'use strict';
\t\t\t\$('#carousel_slider').flexslider({
\t\t\t\tanimation: \"slide\",
\t\t\t\tcontrolNav: false,
\t\t\t\tanimationLoop: false,
\t\t\t\tslideshow: false,
\t\t\t\titemWidth: 280,
\t\t\t\titemMargin: 25,
\t\t\t\tasNavFor: '#slider'
\t\t\t});
\t\t\t\$('#slider').flexslider({
\t\t\t\tanimation: \"fade\",
\t\t\t\tcontrolNav: false,
\t\t\t\tanimationLoop: false,
\t\t\t\tslideshow: false,
\t\t\t\tsync: \"#carousel_slider\",
\t\t\t\tstart: function(slider) {
\t\t\t\t\t\$('body').removeClass('loading');
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>\t
\t";
        }
        // line 177
        echo "\t
\t";
        // line 178
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 178), "title", [], "any", false, false, true, 178) == "Experiences")) {
            // line 179
            echo "    \t<script src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/isotope.min.js");
            echo "\"></script>
    \t<script>
    \t\$(window).load(function(){
    \t  var \$container = \$('.isotope-wrapper');
    \t  \$container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry', transitionDuration: '0.8s' });
    \t});
    \t\$('.filters_listing').on( 'click', 'input', 'change', function(){
    \t  var selector = \$(this).attr('data-filter');
    \t  \$('.isotope-wrapper').isotope({ filter: selector });
    \t});
    \t</script>
    ";
        }
        // line 191
        echo "    
    ";
        // line 192
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 192), "title", [], "any", false, false, true, 192) == "Get in touch")) {
            // line 193
            echo "        <script src=\"https://maps.googleapis.com/maps/api/js\"></script>
        <script src=\"";
            // line 194
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mapmarker.jquery.js");
            echo "\"></script>
\t    <script src=\"";
            // line 195
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mapmarker_func.jquery.js");
            echo "\"></script>
\t";
        }
        // line 197
        echo "\t
\t";
        // line 198
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 198), "title", [], "any", false, false, true, 198) == "Membership")) {
            // line 199
            echo "        <script src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/tables_func.js");
            echo "\"></script>
\t";
        }
        // line 201
        echo "\t
\t";
        // line 202
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 203
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/layouts/_main-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 203,  370 => 202,  367 => 201,  361 => 199,  359 => 198,  356 => 197,  351 => 195,  347 => 194,  344 => 193,  342 => 192,  339 => 191,  323 => 179,  321 => 178,  318 => 177,  288 => 151,  286 => 150,  281 => 148,  277 => 147,  273 => 146,  269 => 145,  246 => 125,  198 => 80,  188 => 72,  186 => 71,  178 => 65,  174 => 64,  161 => 54,  157 => 53,  142 => 41,  136 => 38,  132 => 36,  128 => 34,  126 => 33,  121 => 32,  119 => 31,  114 => 30,  112 => 29,  107 => 28,  105 => 27,  100 => 25,  96 => 24,  92 => 23,  76 => 10,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    
    <title>{{ this.page.title }} | The MacKenzie Trail</title>

    <!-- Favicons-->
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" href=\"img/apple-touch-icon-57x57-precomposed.png\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"72x72\" href=\"img/apple-touch-icon-72x72-precomposed.png\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"114x114\" href=\"img/apple-touch-icon-114x114-precomposed.png\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"144x144\" href=\"img/apple-touch-icon-144x144-precomposed.png\">

    <!-- GOOGLE WEB FONT -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800\" rel=\"stylesheet\">

    <!-- BASE CSS -->
    <link href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\">
\t<link href=\"{{ 'assets/css/vendors.css'|theme }}\" rel=\"stylesheet\">
\t
\t{% if this.page.title == 'News' %}
\t    <link href=\"{{ 'assets/css/blog.css'|theme }}\" rel=\"stylesheet\">
\t{% elseif this.page.title == 'Single Blog' %}
\t    <link href=\"{{ 'assets/css/blog.css'|theme }}\" rel=\"stylesheet\">
\t{% elseif this.page.title == 'Membership' %}
\t    <link href=\"{{ 'assets/css/tables.css'|theme }}\" rel=\"stylesheet\">
\t{% elseif this.page.title == 'Tournaments' %}
\t    <script src=\"https://www.eventbrite.co.uk/static/widgets/eb_widgets.js\"></script>
\t{% endif %}

    <!-- YOUR CUSTOM CSS -->
    <link href=\"{{ 'assets/css/custom.css'|theme }}\" rel=\"stylesheet\">
\t
\t<!-- Modernizr -->
\t<script src=\"{{ 'assets/js/modernizr.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fbfee9e6213c265\"></script>

</head>

<body>
\t\t
\t<div id=\"page\">
\t\t
\t<header class=\"header menu_fixed\">
\t\t<div id=\"logo\">
\t\t\t<a href=\"/\">
\t\t\t\t<img src=\"{{ 'assets/images/branding/logo-white.png'|theme }}\"  height=\"36\" data-retina=\"true\" alt=\"\" class=\"logo_normal\">
\t\t\t\t<img src=\"{{ 'assets/images/branding/logo-black.png'|theme }}\"  height=\"36\" data-retina=\"true\" alt=\"\" class=\"logo_sticky\">
\t\t\t</a>
\t\t</div>
\t\t<a href=\"#menu\" class=\"btn_mobile\">
\t\t\t<div class=\"hamburger hamburger--spin\" id=\"hamburger\">
\t\t\t\t<div class=\"hamburger-box\">
\t\t\t\t\t<div class=\"hamburger-inner\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</a>
\t\t{% partial 'global/navigation' %}
\t</header>
\t<!-- /header -->
\t
    <!-- main -->
    <main>
\t
\t{% page %}
\t
\t</main>
\t<!-- /main -->

\t<footer>
\t\t<div class=\"container margin_60_35\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-5 col-md-12 p-r-5\">
\t\t\t\t\t<p><img src=\"{{ 'assets/images/branding/logo-white.png'|theme }}\" height=\"70\" data-retina=\"true\" alt=\"\"></p>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas dui id dictum mattis. Morbi in elit rutrum, porta quam vel, feugiat nulla. Fusce fringilla in nibh ut luctus. Ut vitae justo at leo scelerisque dapibus. In consequat nec enim nec tempor. Nullam tempus diam id felis ullamcorper vestibulum. In lectus enim, porttitor.</p>
\t\t\t\t\t<div class=\"follow_us\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Follow us</li>
\t\t\t\t\t\t\t<li><a href=\"#0\"><i class=\"ti-facebook\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#0\"><i class=\"ti-twitter-alt\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#0\"><i class=\"ti-google\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#0\"><i class=\"ti-instagram\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 ml-lg-auto\">
\t\t\t\t\t<h5>Useful links</h5>
\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"/about-us\">About</a></li>
\t\t\t\t\t\t<li><a href=\"/tour\">The Tour</a></li>
\t\t\t\t\t\t<li><a href=\"/blog\">News</a></li>
\t\t\t\t\t\t<li><a href=\"/contact\">FAQs</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<h5>Contact with Us</h5>
\t\t\t\t\t<ul class=\"contacts\">
\t\t\t\t\t\t<li><a href=\"tel://61280932400\"><i class=\"ti-mobile\"></i> 0800 1 70 70 77</a></li>
\t\t\t\t\t\t<li><a href=\"mailto:info@themackenzietour.co.uk\"><i class=\"ti-email\"></i> info@themackenzietour.co.uk</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"newsletter\">
\t\t\t\t\t<h6>Newsletter</h6>
\t\t\t\t\t<div id=\"message-newsletter\"></div>
\t\t\t\t\t<form method=\"post\" action=\"assets/newsletter.php\" name=\"newsletter_form\" id=\"newsletter_form\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"email\" name=\"email_newsletter\" id=\"email_newsletter\" class=\"form-control\" placeholder=\"Your email\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Submit\" id=\"submit-newsletter\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--/row-->
\t\t\t<hr>
\t\t\t<div class=\"row\">
\t\t\t    <div class=\"col-lg-6\">
\t\t\t\t\t<ul id=\"additional_links text-left\">
\t\t\t\t\t\t<li><span>© {{ \"now\"|date(\"Y\") }} MacKenzie Trail</span></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<ul id=\"additional_links\">
\t\t\t\t\t\t<li><a href=\"#\">Terms and conditions</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Privacy</a></li>
\t\t\t\t\t\t<li><a href=\"/contact\">Contact us</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!--/footer-->
\t</div>
\t<!-- page -->
\t
\t<div id=\"toTop\"></div><!-- Back to top button -->
\t
\t<!-- COMMON SCRIPTS -->
    <script src=\"{{ 'assets/js/jquery-2.2.4.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/common_scripts.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/js/validate.js'|theme }}\"></script>
\t<script src=\"https://cdn.jsdelivr.net/bxslider/4.1.1/jquery.bxslider.min.js\"></script>
\t{% if this.page.title == 'Home' %}
\t<script src=\"{{ 'assets/js/jquery.flexslider.js'|theme }}\"></script>
\t<script>
\t\t\$(window).load(function() {
\t\t\t'use strict';
\t\t\t\$('#carousel_slider').flexslider({
\t\t\t\tanimation: \"slide\",
\t\t\t\tcontrolNav: false,
\t\t\t\tanimationLoop: false,
\t\t\t\tslideshow: false,
\t\t\t\titemWidth: 280,
\t\t\t\titemMargin: 25,
\t\t\t\tasNavFor: '#slider'
\t\t\t});
\t\t\t\$('#slider').flexslider({
\t\t\t\tanimation: \"fade\",
\t\t\t\tcontrolNav: false,
\t\t\t\tanimationLoop: false,
\t\t\t\tslideshow: false,
\t\t\t\tsync: \"#carousel_slider\",
\t\t\t\tstart: function(slider) {
\t\t\t\t\t\$('body').removeClass('loading');
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>\t
\t{% endif %}
\t
\t{% if this.page.title == 'Experiences' %}
    \t<script src=\"{{ 'assets/js/isotope.min.js'|theme }}\"></script>
    \t<script>
    \t\$(window).load(function(){
    \t  var \$container = \$('.isotope-wrapper');
    \t  \$container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry', transitionDuration: '0.8s' });
    \t});
    \t\$('.filters_listing').on( 'click', 'input', 'change', function(){
    \t  var selector = \$(this).attr('data-filter');
    \t  \$('.isotope-wrapper').isotope({ filter: selector });
    \t});
    \t</script>
    {% endif %}
    
    {% if this.page.title == 'Get in touch' %}
        <script src=\"https://maps.googleapis.com/maps/api/js\"></script>
        <script src=\"{{ 'assets/js/mapmarker.jquery.js'|theme }}\"></script>
\t    <script src=\"{{ 'assets/js/mapmarker_func.jquery.js'|theme }}\"></script>
\t{% endif %}
\t
\t{% if this.page.title == 'Membership' %}
        <script src=\"{{ 'assets/js/tables_func.js'|theme }}\"></script>
\t{% endif %}
\t
\t{% framework %}

</body>
</html>", "/Users/jakefeeley/Documents/GitHub/mackenzietrail/themes/sghsportingevents/layouts/_main-layout.htm", "");
    }
}
