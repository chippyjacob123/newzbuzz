<?php

/* themes/custom/subtheme/templates/page--user--%.html.twig */
class __TwigTemplate_dc9b0fd388ea1602bc15982644b1d090a72bfec4be4db348f74656aa72c234ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'content1' => array($this, 'block_content1'),
            'content2' => array($this, 'block_content2'),
            'content3' => array($this, 'block_content3'),
            'content4' => array($this, 'block_content4'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 60, "if" => 62, "block" => 63);
        $filters = array("clean_class" => 68, "t" => 80);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
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

        // line 60
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 62
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 63
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 100
        echo "
";
        // line 102
        $this->displayBlock('main', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 223
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 63
    public function block_navbar($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        // line 65
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 67
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 68
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 71
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 72
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 73
            echo "        <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 75
        echo "      <div class=\"navbar-header\">
        ";
        // line 76
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 78
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 79
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 80
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 86
        echo "      </div>

      ";
        // line 89
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 90
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 91
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 94
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 95
            echo "        </div>
      ";
        }
        // line 97
        echo "    </header>
  ";
    }

    // line 102
    public function block_main($context, array $blocks = array())
    {
        // line 103
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 107
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 108
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 113
            echo "      ";
        }
        // line 114
        echo "
      ";
        // line 116
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 117
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 122
            echo "      ";
        }
        // line 123
        echo "
      ";
        // line 125
        echo "      ";
        // line 126
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 127
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 128
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 129
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 130
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 133
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 136
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 137
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 140
            echo "        ";
        }
        // line 141
        echo "
        ";
        // line 143
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 144
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 147
            echo "        ";
        }
        // line 148
        echo "
        ";
        // line 150
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 151
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 154
            echo "        ";
        }
        // line 155
        echo "
        ";
        // line 157
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 158
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 161
            echo "        ";
        }
        // line 162
        echo "
        ";
        // line 164
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 168
        echo "
     <div>
          
         ";
        // line 172
        echo "         ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content1", array())) {
            // line 173
            echo "            ";
            $this->displayBlock('content1', $context, $blocks);
            // line 178
            echo "         ";
        }
        // line 179
        echo "         
         ";
        // line 181
        echo "         ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content2", array())) {
            // line 182
            echo "            ";
            $this->displayBlock('content2', $context, $blocks);
            // line 187
            echo "         ";
        }
        // line 188
        echo "
         ";
        // line 190
        echo "         ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content3", array())) {
            // line 191
            echo "            ";
            $this->displayBlock('content3', $context, $blocks);
            // line 196
            echo "         ";
        }
        // line 197
        echo "
         ";
        // line 199
        echo "         ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content4", array())) {
            // line 200
            echo "            ";
            $this->displayBlock('content4', $context, $blocks);
            // line 205
            echo "         ";
        }
        // line 206
        echo "     </div>
       </section>


      ";
        // line 211
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 212
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 217
            echo "      ";
        }
        // line 218
        echo "    </div>
  </div>
";
    }

    // line 108
    public function block_header($context, array $blocks = array())
    {
        // line 109
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 110
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 117
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 118
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 119
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 137
    public function block_highlighted($context, array $blocks = array())
    {
        // line 138
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 144
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 145
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 151
    public function block_action_links($context, array $blocks = array())
    {
        // line 152
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 158
    public function block_help($context, array $blocks = array())
    {
        // line 159
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 164
    public function block_content($context, array $blocks = array())
    {
        // line 165
        echo "          <a id=\"main-content\"></a>
          ";
        // line 166
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 173
    public function block_content1($context, array $blocks = array())
    {
        // line 174
        echo "\t\t<div class=\"col-sm-3\" role=\"complementary\">
            \t   ";
        // line 175
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content1", array()), "html", null, true));
        echo "
                </div>
            ";
    }

    // line 182
    public function block_content2($context, array $blocks = array())
    {
        // line 183
        echo "\t\t<div class=\"col-sm-3\" role=\"complementary\">
            \t   ";
        // line 184
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content2", array()), "html", null, true));
        echo "
                </div>
            ";
    }

    // line 191
    public function block_content3($context, array $blocks = array())
    {
        // line 192
        echo "\t\t<div class=\"col-sm-3\" role=\"complementary\">
            \t   ";
        // line 193
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content3", array()), "html", null, true));
        echo "
                </div>
            ";
    }

    // line 200
    public function block_content4($context, array $blocks = array())
    {
        // line 201
        echo "\t\t<div class=\"col-sm-3\" role=\"complementary\">
            \t   ";
        // line 202
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content4", array()), "html", null, true));
        echo "
                </div>
            ";
    }

    // line 212
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 213
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 214
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 223
    public function block_footer($context, array $blocks = array())
    {
        // line 224
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 225
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/subtheme/templates/page--user--%.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 225,  470 => 224,  467 => 223,  460 => 214,  457 => 213,  454 => 212,  447 => 202,  444 => 201,  441 => 200,  434 => 193,  431 => 192,  428 => 191,  421 => 184,  418 => 183,  415 => 182,  408 => 175,  405 => 174,  402 => 173,  396 => 166,  393 => 165,  390 => 164,  383 => 159,  380 => 158,  373 => 152,  370 => 151,  363 => 145,  360 => 144,  353 => 138,  350 => 137,  343 => 119,  340 => 118,  337 => 117,  330 => 110,  327 => 109,  324 => 108,  318 => 218,  315 => 217,  312 => 212,  309 => 211,  303 => 206,  300 => 205,  297 => 200,  294 => 199,  291 => 197,  288 => 196,  285 => 191,  282 => 190,  279 => 188,  276 => 187,  273 => 182,  270 => 181,  267 => 179,  264 => 178,  261 => 173,  258 => 172,  253 => 168,  250 => 164,  247 => 162,  244 => 161,  241 => 158,  238 => 157,  235 => 155,  232 => 154,  229 => 151,  226 => 150,  223 => 148,  220 => 147,  217 => 144,  214 => 143,  211 => 141,  208 => 140,  205 => 137,  202 => 136,  196 => 133,  194 => 130,  193 => 129,  192 => 128,  191 => 127,  190 => 126,  188 => 125,  185 => 123,  182 => 122,  179 => 117,  176 => 116,  173 => 114,  170 => 113,  167 => 108,  164 => 107,  157 => 103,  154 => 102,  149 => 97,  145 => 95,  142 => 94,  136 => 91,  133 => 90,  130 => 89,  126 => 86,  117 => 80,  114 => 79,  111 => 78,  107 => 76,  104 => 75,  98 => 73,  96 => 72,  91 => 71,  89 => 68,  88 => 67,  87 => 65,  85 => 64,  82 => 63,  76 => 223,  74 => 222,  71 => 221,  69 => 102,  66 => 100,  62 => 63,  60 => 62,  58 => 60,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Navigation:
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.bottom-content: The bottom content of the current page
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
      <div class=\"navbar-header\">
        {{ page.navigation }}
        {# .btn-navbar is used as the toggle for collapsed navbar content #}
        {% if page.navigation_collapsible %}
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        {% endif %}
      </div>

      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          {{ page.navigation_collapsible }}
        </div>
      {% endif %}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
    </header>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Breadcrumbs #}
        {% if breadcrumb %}
          {% block breadcrumb %}
            {{ breadcrumb }}
          {% endblock %}
        {% endif %}

        {# Action Links #}
        {% if action_links %}
          {% block action_links %}
            <ul class=\"action-links\">{{ action_links }}</ul>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}

     <div>
          
         {# Content1 #}
         {% if page.content1 %}
            {% block content1 %}
\t\t<div class=\"col-sm-3\" role=\"complementary\">
            \t   {{ page.content1}}
                </div>
            {% endblock %}
         {% endif %}
         
         {# Content2 #}
         {% if page.content2  %}
            {% block content2 %}
\t\t<div class=\"col-sm-3\" role=\"complementary\">
            \t   {{ page.content2}}
                </div>
            {% endblock %}
         {% endif %}

         {# Content3 #}
         {% if page.content3  %}
            {% block content3 %}
\t\t<div class=\"col-sm-3\" role=\"complementary\">
            \t   {{ page.content3}}
                </div>
            {% endblock %}
         {% endif %}

         {# Content4 #}
         {% if page.content4  %}
            {% block content4 %}
\t\t<div class=\"col-sm-3\" role=\"complementary\">
            \t   {{ page.content4}}
                </div>
            {% endblock %}
         {% endif %}
     </div>
       </section>


      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer {{ container }}\" role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endblock %}
{% endif %}
";
    }
}
