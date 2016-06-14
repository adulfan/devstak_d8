<?php

/* themes/custom/blankslate/templates/page.html.twig */
class __TwigTemplate_07e39372b022e656f828e494fa852ba9088b78bea1979788391efd3003e58b1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 65);
        $filters = array("t" => 66);
        $functions = array("dump" => 63);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('dump')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 62
        echo "<div class=\"layout-container\">
    ";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(twig_var_dump($this->env, $context, (isset($context["title"]) ? $context["title"] : null))));
        echo "
  <header role=\"banner\">
    ";
        // line 65
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 66
            echo "      <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 67
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\"/>
      </a>
    ";
        }
        // line 70
        echo "
    ";
        // line 71
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 72
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 75
            echo "        ";
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 76
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 77
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
          </strong>
        ";
            } else {
                // line 80
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 81
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
          </h1>
        ";
            }
            // line 84
            echo "
        ";
            // line 85
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 86
                echo "          <div class=\"site-slogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
        ";
            }
            // line 88
            echo "      </div>";
            // line 89
            echo "    ";
        }
        // line 90
        echo "
    ";
        // line 91
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
  </header>

  ";
        // line 94
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
  ";
        // line 95
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
        echo "

  ";
        // line 97
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "

  ";
        // line 99
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "

  ";
        // line 101
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 105
        echo "
    <div class=\"layout-content\">

      ";
        // line 108
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
      ";
        // line 109
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 110
            echo "        <h1>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
      ";
        }
        // line 112
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

      ";
        // line 114
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
        echo "

      ";
        // line 116
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 117
            echo "        <nav class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</nav>
      ";
        }
        // line 119
        echo "
      ";
        // line 120
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
    </div>";
        // line 122
        echo "
    ";
        // line 123
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 124
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 125
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 128
        echo "
    ";
        // line 129
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 130
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 131
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 134
        echo "
  </main>

  ";
        // line 137
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 138
            echo "    <footer role=\"contentinfo\">
      ";
            // line 139
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 142
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/blankslate/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 142,  237 => 139,  234 => 138,  232 => 137,  227 => 134,  221 => 131,  218 => 130,  216 => 129,  213 => 128,  207 => 125,  204 => 124,  202 => 123,  199 => 122,  195 => 120,  192 => 119,  186 => 117,  184 => 116,  179 => 114,  173 => 112,  167 => 110,  165 => 109,  161 => 108,  156 => 105,  150 => 101,  145 => 99,  140 => 97,  135 => 95,  131 => 94,  125 => 91,  122 => 90,  119 => 89,  117 => 88,  111 => 86,  109 => 85,  106 => 84,  96 => 81,  93 => 80,  83 => 77,  80 => 76,  77 => 75,  73 => 72,  71 => 71,  68 => 70,  60 => 67,  53 => 66,  51 => 65,  46 => 63,  43 => 62,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div class="layout-container">*/
/*     {{ dump(title) }}*/
/*   <header role="banner">*/
/*     {% if logo %}*/
/*       <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">*/
/*         <img src="{{ logo }}" alt="{{ 'Home'|t }}"/>*/
/*       </a>*/
/*     {% endif %}*/
/* */
/*     {% if site_name or site_slogan %}*/
/*       <div class="name-and-slogan">*/
/* */
/*         {# Use h1 when the content title is empty #}*/
/*         {% if title %}*/
/*           <strong class="site-name">*/
/*             <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*           </strong>*/
/*         {% else %}*/
/*           <h1 class="site-name">*/
/*             <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*           </h1>*/
/*         {% endif %}*/
/* */
/*         {% if site_slogan %}*/
/*           <div class="site-slogan">{{ site_slogan }}</div>*/
/*         {% endif %}*/
/*       </div>{# ./name-and-slogan #}*/
/*     {% endif %}*/
/* */
/*     {{ page.header }}*/
/*   </header>*/
/* */
/*   {{ page.primary_menu }}*/
/*   {{ page.secondary_menu }}*/
/* */
/*   {{ page.breadcrumb }}*/
/* */
/*   {{ page.highlighted }}*/
/* */
/*   {{ page.help }}*/
/* */
/*   <main role="main">*/
/*     <a id="main-content" tabindex="-1"></a>{# link is in html.html.twig #}*/
/* */
/*     <div class="layout-content">*/
/* */
/*       {{ title_prefix }}*/
/*       {% if title %}*/
/*         <h1>{{ title }}</h1>*/
/*       {% endif %}*/
/*       {{ title_suffix }}*/
/* */
/*       {{ tabs }}*/
/* */
/*       {% if action_links %}*/
/*         <nav class="action-links">{{ action_links }}</nav>*/
/*       {% endif %}*/
/* */
/*       {{ page.content }}*/
/*     </div>{# /.layout-content #}*/
/* */
/*     {% if page.sidebar_first %}*/
/*       <aside class="layout-sidebar-first" role="complementary">*/
/*         {{ page.sidebar_first }}*/
/*       </aside>*/
/*     {% endif %}*/
/* */
/*     {% if page.sidebar_second %}*/
/*       <aside class="layout-sidebar-second" role="complementary">*/
/*         {{ page.sidebar_second }}*/
/*       </aside>*/
/*     {% endif %}*/
/* */
/*   </main>*/
/* */
/*   {% if page.footer %}*/
/*     <footer role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/* </div>{# /.layout-container #}*/
/* */
