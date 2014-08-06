<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_f281abb1446824e024fc773fcd2fbae412487c23152b2f8ab97083ea6d6f0753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        echo "<!DOCTYPE html>
<html ";
        // line 23
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 25
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "
        <title>
        ";
        // line 57
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 77
        echo "        </title>
    </head>
    <body ";
        // line 79
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 80
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 157
        echo "
        ";
        // line 158
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 313
        echo "    </body>
</html>
";
    }

    // line 23
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 25
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 26
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 31
        echo "
            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 33
            echo "                <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["stylesheet"]) ? $context["stylesheet"] : null)), "html", null, true);
            echo "\"  />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 41
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 42
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 44
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>

            ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 51
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["javascript"]) ? $context["javascript"] : null)), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
        ";
    }

    // line 57
    public function block_sonata_head_title($context, array $blocks = array())
    {
        // line 58
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 60
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : null)))) {
            // line 61
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : null);
            echo "
            ";
        } else {
            // line 63
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 64
                echo "                    -
                    ";
                // line 65
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 66
                    echo "                        ";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first"))) {
                        // line 67
                        echo "                            ";
                        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 2)) {
                            // line 68
                            echo "                                &gt;
                            ";
                        }
                        // line 70
                        echo "
                            ";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 73
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                ";
            }
            // line 75
            echo "            ";
        }
        // line 76
        echo "        ";
    }

    // line 79
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 80
    public function block_sonata_header($context, array $blocks = array())
    {
        // line 81
        echo "            <header class=\"header\">
                ";
        // line 82
        $this->displayBlock('logo', $context, $blocks);
        // line 94
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 155
        echo "            </header>
        ";
    }

    // line 82
    public function block_logo($context, array $blocks = array())
    {
        // line 83
        echo "                    ";
        ob_start();
        // line 84
        echo "                    <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">
                        ";
        // line 85
        if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "title_mode"), "method")))) {
            // line 86
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "titlelogo")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title"), "html", null, true);
            echo "\">
                        ";
        }
        // line 88
        echo "                        ";
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "title_mode"), "method")))) {
            // line 89
            echo "                            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title"), "html", null, true);
            echo "</span>
                        ";
        }
        // line 91
        echo "                    </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 93
        echo "                ";
    }

    // line 94
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 95
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 96
            echo "                        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                            <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </a>

                            <div class=\"navbar-left\">
                                ";
            // line 105
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 130
            echo "                            </div>

                            ";
            // line 132
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 152
            echo "                        </nav>
                    ";
        }
        // line 154
        echo "                ";
    }

    // line 105
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 106
        echo "                                    ";
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) || array_key_exists("action", $context))) {
            // line 107
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 108
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) {
                // line 109
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 110
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 111
                        echo "                                                        ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                            // line 112
                            echo "                                                            <li>
                                                                ";
                            // line 113
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "uri")))) {
                                // line 114
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "uri"), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label");
                                echo "</a>
                                                                ";
                            } else {
                                // line 116
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 118
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 120
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 122
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "                                                ";
                }
                // line 124
                echo "                                            ";
            } else {
                // line 125
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null);
                echo "
                                            ";
            }
            // line 127
            echo "                                        </ol>
                                    ";
        }
        // line 129
        echo "                                ";
    }

    // line 132
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 133
        echo "                                <div class=\"navbar-right\">
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            ";
        // line 139
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "add_block"), "method"));
        $template->display($context);
        // line 140
        echo "                                        </li>
                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 146
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "user_block"), "method"));
        $template->display($context);
        // line 147
        echo "                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            ";
    }

    // line 158
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 159
        echo "            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                ";
        // line 160
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 232
        echo "
                <aside class=\"right-side\">
                    ";
        // line 234
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 309
        echo "                </aside>

            </div>
        ";
    }

    // line 160
    public function block_sonata_left_side($context, array $blocks = array())
    {
        // line 161
        echo "                    <aside class=\"left-side sidebar-offcanvas\">
                        <section class=\"sidebar\">
                            ";
        // line 163
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 229
        echo "                        </section>
                    </aside>
                ";
    }

    // line 163
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 164
        echo "                                ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 178
        echo "
                                ";
        // line 179
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 180
        echo "                                ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 225
        echo "                                ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 228
        echo "                            ";
    }

    // line 164
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 165
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 166
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                            <div class=\"input-group custom-search-form\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn btn-flat\" type=\"submit\">
                                                            <i class=\"fa fa-search\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </form>
                                    ";
        }
        // line 177
        echo "                                ";
    }

    // line 179
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 180
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 181
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 182
            echo "                                        <ul class=\"sidebar-menu\">
                                            ";
            // line 183
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 184
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 185
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : null))) {
                        // line 186
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : null));
                        // line 187
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 188
                echo "
                                                ";
                // line 190
                echo "                                                ";
                $context["item_count"] = 0;
                // line 191
                echo "                                                ";
                if ((isset($context["display"]) ? $context["display"] : null)) {
                    // line 192
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : null) == 0)) {
                            // line 193
                            echo "                                                        ";
                            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 194
                                echo "                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : null) + 1);
                                // line 195
                                echo "                                                        ";
                            }
                            // line 196
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 197
                    echo "                                                ";
                }
                // line 198
                echo "
                                                ";
                // line 199
                if (((isset($context["display"]) ? $context["display"] : null) && ((isset($context["item_count"]) ? $context["item_count"] : null) > 0))) {
                    // line 200
                    echo "                                                    ";
                    $context["active"] = false;
                    // line 201
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 202
                        echo "                                                        ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code")))) {
                            // line 203
                            echo "                                                            ";
                            $context["active"] = true;
                            // line 204
                            echo "                                                        ";
                        }
                        // line 205
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 206
                    echo "                                                    <li class=\"treeview";
                    if ((isset($context["active"]) ? $context["active"] : null)) {
                        echo " active";
                    }
                    echo "\">
                                                        <a href=\"#\">
                                                            ";
                    // line 208
                    if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon"))) : (""))) {
                        echo $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon");
                    }
                    // line 209
                    echo "                                                            <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label_catalogue")), "html", null, true);
                    echo "</span>
                                                            <i class=\"fa pull-right fa-angle-left\"></i>
                                                        </a>
                                                        <ul class=\"treeview-menu";
                    // line 212
                    if ((isset($context["active"]) ? $context["active"] : null)) {
                        echo " active";
                    }
                    echo "\">
                                                            ";
                    // line 213
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 214
                        echo "                                                                ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 215
                            echo "                                                                    <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code"))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                                ";
                        }
                        // line 217
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 218
                    echo "                                                        </ul>
                                                    </li>
                                                ";
                }
                // line 221
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "                                        </ul>
                                    ";
        }
        // line 224
        echo "                                ";
    }

    // line 225
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        // line 226
        echo "                                    <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a></p>
                                ";
    }

    // line 234
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 235
        echo "                        <section class=\"content-header\">
                            ";
        // line 236
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 268
        echo "                        </section>

                        <section class=\"content\">
                            ";
        // line 271
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 307
        echo "                        </section>
                    ";
    }

    // line 236
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 237
        echo "                                ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 266
        echo "
                            ";
    }

    // line 237
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 238
        echo "                                    ";
        if (((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : null))) || (!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : null))))) {
            // line 239
            echo "                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            ";
            // line 240
            if ((!twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : null)))) {
                // line 241
                echo "                                                <div class=\"navbar-header\">
                                                    <span class=\"navbar-brand\">";
                // line 242
                echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : null);
                echo "</span>
                                                </div>
                                            ";
            }
            // line 245
            echo "                                            <div class=\"container-fluid\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 247
            if ((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : null)))) {
                // line 248
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : null);
                echo "
                                                    ";
            }
            // line 250
            echo "                                                </div>

                                                ";
            // line 252
            if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : null)))) {
                // line 253
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 255
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 257
                echo (isset($context["_actions"]) ? $context["_actions"] : null);
                echo "
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                ";
            }
            // line 262
            echo "                                            </div>
                                        </nav>
                                    ";
        }
        // line 265
        echo "                                ";
    }

    // line 271
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 272
        echo "
                                ";
        // line 273
        $this->displayBlock('notice', $context, $blocks);
        // line 276
        echo "
                                ";
        // line 277
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : null)))) {
            // line 278
            echo "                                    <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : null);
            echo "</div>
                                ";
        }
        // line 280
        echo "
                                ";
        // line 281
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : null)))) {
            // line 282
            echo "                                    <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : null);
            echo "</div>
                                ";
        }
        // line 284
        echo "
                                ";
        // line 285
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : null)))) {
            // line 286
            echo "                                    <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : null);
            echo "</div>
                                ";
        }
        // line 288
        echo "
                                ";
        // line 289
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : null)))) {
            // line 290
            echo "                                    <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : null);
            echo "</div>
                                ";
        }
        // line 292
        echo "
                                ";
        // line 293
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : null))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : null))))) {
            // line 294
            echo "                                    <div class=\"row\">
                                        <div class=\"sonata-ba-list ";
            // line 295
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : null))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                            ";
            // line 296
            echo (isset($context["_list_table"]) ? $context["_list_table"] : null);
            echo "
                                        </div>

                                        ";
            // line 299
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : null))) {
                // line 300
                echo "                                            <div class=\"sonata-ba-filter col-md-2\">
                                                ";
                // line 301
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : null);
                echo "
                                            </div>
                                        ";
            }
            // line 304
            echo "                                    </div>
                                ";
        }
        // line 306
        echo "                            ";
    }

    // line 273
    public function block_notice($context, array $blocks = array())
    {
        // line 274
        echo "                                    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 275
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  972 => 275,  966 => 273,  962 => 306,  958 => 304,  952 => 301,  949 => 300,  947 => 299,  933 => 295,  928 => 293,  925 => 292,  919 => 290,  917 => 289,  914 => 288,  908 => 286,  903 => 284,  897 => 282,  895 => 281,  892 => 280,  884 => 277,  879 => 273,  876 => 272,  873 => 271,  864 => 262,  856 => 257,  851 => 255,  847 => 253,  841 => 250,  833 => 247,  829 => 245,  823 => 242,  820 => 241,  818 => 240,  815 => 239,  812 => 238,  809 => 237,  804 => 266,  801 => 237,  798 => 236,  786 => 268,  773 => 226,  770 => 225,  766 => 224,  762 => 222,  751 => 218,  733 => 215,  726 => 213,  720 => 212,  713 => 209,  709 => 208,  695 => 205,  686 => 202,  681 => 201,  678 => 200,  676 => 199,  657 => 194,  648 => 192,  639 => 188,  632 => 187,  623 => 185,  613 => 182,  610 => 181,  597 => 177,  583 => 168,  571 => 164,  561 => 180,  544 => 229,  542 => 163,  535 => 160,  522 => 232,  520 => 160,  517 => 159,  506 => 147,  503 => 146,  495 => 140,  492 => 139,  484 => 133,  481 => 132,  477 => 129,  464 => 124,  418 => 112,  392 => 108,  375 => 152,  356 => 96,  336 => 89,  325 => 86,  299 => 81,  296 => 80,  266 => 73,  248 => 66,  228 => 64,  211 => 58,  167 => 56,  148 => 49,  118 => 23,  624 => 224,  620 => 184,  612 => 220,  607 => 180,  585 => 209,  580 => 207,  574 => 165,  566 => 203,  563 => 202,  559 => 179,  551 => 199,  545 => 198,  536 => 194,  532 => 192,  529 => 191,  526 => 234,  523 => 189,  518 => 180,  514 => 158,  511 => 166,  497 => 156,  490 => 154,  485 => 124,  463 => 117,  455 => 115,  450 => 114,  447 => 122,  415 => 111,  410 => 113,  406 => 111,  391 => 163,  385 => 159,  376 => 153,  369 => 130,  359 => 144,  354 => 142,  347 => 140,  335 => 133,  333 => 88,  320 => 87,  313 => 84,  310 => 83,  302 => 82,  284 => 76,  261 => 71,  239 => 64,  198 => 55,  192 => 53,  315 => 83,  306 => 95,  303 => 94,  292 => 91,  225 => 63,  175 => 74,  150 => 38,  12 => 36,  37 => 17,  778 => 234,  772 => 248,  769 => 247,  767 => 246,  763 => 244,  760 => 243,  748 => 242,  745 => 217,  742 => 240,  736 => 238,  729 => 235,  717 => 233,  714 => 232,  711 => 231,  700 => 225,  666 => 222,  661 => 220,  653 => 218,  650 => 217,  644 => 213,  640 => 211,  633 => 209,  599 => 215,  595 => 205,  590 => 204,  587 => 203,  584 => 202,  573 => 198,  560 => 191,  555 => 200,  553 => 164,  540 => 164,  534 => 162,  531 => 161,  528 => 309,  515 => 180,  513 => 179,  510 => 178,  501 => 163,  499 => 173,  496 => 172,  493 => 155,  475 => 169,  473 => 127,  470 => 121,  468 => 160,  459 => 116,  454 => 156,  442 => 151,  433 => 149,  422 => 147,  420 => 146,  417 => 145,  411 => 143,  408 => 142,  405 => 141,  390 => 136,  380 => 130,  366 => 125,  361 => 124,  358 => 123,  343 => 115,  340 => 136,  338 => 113,  327 => 102,  291 => 99,  286 => 76,  281 => 75,  272 => 91,  206 => 57,  113 => 40,  110 => 42,  90 => 77,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 335,  1066 => 334,  1062 => 333,  1053 => 332,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 319,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 304,  969 => 274,  965 => 302,  959 => 301,  956 => 300,  948 => 296,  944 => 295,  941 => 296,  932 => 287,  930 => 294,  926 => 285,  923 => 284,  918 => 280,  910 => 278,  906 => 285,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 278,  883 => 265,  881 => 276,  878 => 263,  871 => 259,  869 => 265,  845 => 252,  842 => 255,  839 => 253,  837 => 252,  835 => 248,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 233,  803 => 232,  799 => 229,  797 => 228,  795 => 227,  793 => 307,  791 => 271,  788 => 224,  784 => 236,  781 => 235,  776 => 212,  756 => 221,  753 => 206,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 239,  737 => 198,  734 => 237,  730 => 214,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 185,  706 => 182,  703 => 226,  701 => 206,  698 => 178,  694 => 175,  692 => 204,  689 => 203,  685 => 170,  683 => 223,  680 => 168,  675 => 165,  673 => 198,  670 => 197,  665 => 160,  663 => 196,  660 => 195,  656 => 219,  654 => 193,  651 => 153,  647 => 150,  645 => 191,  642 => 190,  638 => 210,  635 => 226,  631 => 141,  629 => 186,  626 => 139,  622 => 136,  619 => 135,  616 => 183,  611 => 129,  601 => 179,  596 => 127,  594 => 212,  591 => 124,  589 => 123,  586 => 122,  581 => 201,  579 => 116,  578 => 200,  577 => 166,  576 => 199,  572 => 204,  569 => 110,  567 => 228,  564 => 225,  558 => 190,  556 => 178,  554 => 102,  552 => 101,  550 => 163,  546 => 166,  543 => 97,  541 => 96,  538 => 161,  524 => 92,  521 => 182,  507 => 165,  504 => 164,  479 => 82,  476 => 80,  472 => 78,  467 => 125,  465 => 76,  448 => 153,  445 => 152,  441 => 120,  439 => 150,  431 => 116,  429 => 148,  425 => 63,  414 => 144,  412 => 126,  399 => 139,  397 => 110,  394 => 109,  389 => 107,  383 => 105,  377 => 129,  373 => 132,  370 => 45,  357 => 37,  349 => 34,  346 => 93,  342 => 91,  339 => 28,  330 => 103,  326 => 129,  323 => 85,  317 => 107,  290 => 79,  282 => 3,  275 => 86,  270 => 84,  263 => 294,  260 => 293,  257 => 291,  250 => 274,  245 => 83,  242 => 82,  194 => 51,  188 => 48,  186 => 47,  139 => 59,  126 => 30,  114 => 44,  200 => 54,  180 => 49,  174 => 42,  165 => 42,  146 => 34,  23 => 13,  363 => 184,  353 => 95,  350 => 94,  348 => 118,  345 => 116,  329 => 130,  324 => 110,  321 => 100,  318 => 84,  311 => 158,  307 => 155,  304 => 94,  297 => 153,  287 => 77,  276 => 138,  271 => 136,  262 => 81,  256 => 79,  197 => 72,  191 => 196,  170 => 84,  222 => 66,  190 => 50,  185 => 61,  137 => 29,  96 => 18,  212 => 60,  172 => 85,  251 => 67,  231 => 65,  195 => 54,  129 => 31,  120 => 26,  104 => 43,  100 => 157,  81 => 26,  77 => 30,  65 => 29,  97 => 39,  74 => 29,  70 => 29,  52 => 16,  184 => 48,  153 => 39,  127 => 52,  237 => 71,  232 => 78,  216 => 107,  213 => 106,  207 => 58,  202 => 55,  160 => 38,  145 => 35,  424 => 91,  421 => 113,  404 => 90,  401 => 89,  396 => 138,  386 => 106,  367 => 105,  351 => 141,  334 => 26,  331 => 160,  328 => 22,  300 => 93,  295 => 100,  280 => 74,  267 => 226,  265 => 299,  259 => 87,  255 => 284,  253 => 78,  233 => 82,  210 => 59,  178 => 48,  155 => 77,  134 => 55,  124 => 25,  83 => 32,  181 => 185,  161 => 57,  157 => 41,  152 => 62,  84 => 55,  76 => 35,  34 => 18,  58 => 19,  53 => 24,  20 => 1,  480 => 162,  474 => 122,  469 => 158,  461 => 123,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 118,  435 => 146,  430 => 144,  427 => 64,  423 => 114,  413 => 134,  409 => 132,  407 => 131,  402 => 140,  398 => 88,  393 => 168,  387 => 122,  384 => 121,  381 => 157,  379 => 154,  374 => 128,  368 => 126,  365 => 41,  362 => 39,  360 => 38,  355 => 122,  341 => 105,  337 => 27,  322 => 101,  314 => 16,  312 => 82,  309 => 97,  305 => 95,  298 => 101,  294 => 90,  285 => 4,  283 => 75,  278 => 95,  268 => 300,  264 => 74,  258 => 70,  252 => 68,  247 => 75,  241 => 133,  229 => 125,  220 => 65,  214 => 63,  177 => 43,  169 => 44,  140 => 51,  132 => 32,  128 => 47,  111 => 23,  107 => 37,  61 => 27,  273 => 85,  269 => 94,  254 => 68,  246 => 67,  243 => 66,  240 => 72,  238 => 84,  235 => 63,  230 => 62,  227 => 243,  224 => 61,  221 => 120,  219 => 61,  217 => 60,  208 => 57,  204 => 57,  179 => 44,  159 => 158,  143 => 33,  135 => 51,  131 => 181,  119 => 44,  108 => 21,  102 => 19,  71 => 29,  67 => 23,  63 => 27,  59 => 23,  47 => 22,  38 => 18,  94 => 79,  89 => 17,  85 => 32,  79 => 37,  75 => 33,  68 => 10,  56 => 18,  50 => 15,  35 => 22,  87 => 14,  72 => 25,  55 => 25,  201 => 56,  196 => 52,  183 => 46,  171 => 57,  166 => 167,  163 => 40,  158 => 55,  156 => 64,  151 => 52,  142 => 30,  138 => 49,  136 => 33,  123 => 52,  121 => 24,  117 => 25,  115 => 45,  105 => 313,  101 => 37,  91 => 38,  69 => 32,  66 => 23,  62 => 21,  49 => 28,  43 => 18,  41 => 18,  28 => 14,  25 => 12,  21 => 11,  31 => 17,  29 => 16,  26 => 13,  24 => 13,  19 => 11,  98 => 80,  93 => 39,  88 => 57,  78 => 34,  46 => 13,  44 => 12,  40 => 24,  32 => 21,  27 => 16,  22 => 11,  209 => 58,  203 => 53,  199 => 212,  193 => 51,  189 => 63,  187 => 64,  182 => 93,  176 => 58,  173 => 43,  168 => 69,  164 => 55,  162 => 68,  154 => 36,  149 => 62,  147 => 52,  144 => 51,  141 => 58,  133 => 46,  130 => 57,  125 => 46,  122 => 45,  116 => 44,  112 => 105,  109 => 46,  106 => 86,  103 => 158,  99 => 30,  95 => 19,  92 => 38,  86 => 36,  82 => 38,  80 => 13,  73 => 24,  64 => 22,  60 => 20,  57 => 14,  54 => 17,  51 => 9,  48 => 14,  45 => 18,  42 => 11,  39 => 19,  36 => 17,  33 => 16,  30 => 17,);
    }
}
