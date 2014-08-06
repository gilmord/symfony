<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_a2f10482bb229146e050b2a8be791e59d2c809ce037dccd180e98791d7c03e4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

    ";
        // line 4
        $context["url"] = (((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")))) ? ("edit") : ("create"));
        // line 5
        echo "
    ";
        // line 6
        if ((!$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : null)), "method"))) {
            // line 7
            echo "        <div>
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 11
            echo "        <form
              ";
            // line 12
            if (($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 13
            echo "              role=\"form\"
              action=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : null), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo "
              method=\"POST\"
              ";
            // line 16
            if ((!$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "html5_validate"), "method"))) {
                echo "novalidate=\"novalidate\"";
            }
            // line 17
            echo "              >
            ";
            // line 18
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "errors")) > 0)) {
                // line 19
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 20
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "
                </div>
            ";
            }
            // line 23
            echo "
            ";
            // line 24
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 27
            echo "
            ";
            // line 28
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 56
            echo "
            ";
            // line 57
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 60
            echo "
            ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

            ";
            // line 63
            $this->displayBlock('formactions', $context, $blocks);
            // line 105
            echo "        </form>
    ";
        }
        // line 107
        echo "
    ";
        // line 108
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

";
    }

    // line 24
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 25
        echo "                <div class=\"row\">
            ";
    }

    // line 28
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        // line 29
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
            // line 30
            echo "                    <div class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class"), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo "\">
                        <div class=\"box box-success\">
                            <div class=\"box-header\">
                                <h4 class=\"box-title\">
                                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => (isset($context["name"]) ? $context["name"] : null), 1 => array(), 2 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "translation_domain")), "method"), "html", null, true);
            echo "
                                </h4>
                            </div>
                            ";
            // line 38
            echo "                                <div class=\"box-body\">
                                    <div class=\"sonata-ba-collapsed-fields\">
                                        ";
            // line 40
            if (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "description") != false)) {
                // line 41
                echo "                                            <p>";
                echo $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "description");
                echo "</p>
                                        ";
            }
            // line 43
            echo "
                                        ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 45
                echo "                                            ";
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array", true, true)) {
                    // line 46
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array"), 'row');
                    echo "
                                            ";
                }
                // line 48
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                                    </div>
                                </div>
                            ";
            // line 52
            echo "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            ";
    }

    // line 57
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 58
        echo "                </div>
            ";
    }

    // line 63
    public function block_formactions($context, array $blocks = array())
    {
        // line 64
        echo "                <div class=\"well well-small form-actions\">
                    ";
        // line 65
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isxmlhttprequest")) {
            // line 66
            echo "                        ";
            if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")))) {
                // line 67
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 69
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 71
            echo "                    ";
        } else {
            // line 72
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "supportsPreviewMode")) {
                // line 73
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\"></i>
                                ";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 78
            echo "                        ";
            if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")))) {
                // line 79
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 81
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 82
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 84
                echo "
                            ";
                // line 85
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                    // line 86
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 89
                echo "
                            ";
                // line 90
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                    // line 91
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 93
                echo "                        ";
            } else {
                // line 94
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT"), "method"))) {
                    // line 95
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 97
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 98
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 100
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 102
            echo "                    ";
        }
        // line 103
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  315 => 98,  306 => 95,  303 => 94,  292 => 91,  225 => 67,  175 => 45,  150 => 34,  12 => 36,  37 => 17,  778 => 251,  772 => 248,  769 => 247,  767 => 246,  763 => 244,  760 => 243,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  729 => 235,  717 => 233,  714 => 232,  711 => 231,  700 => 225,  666 => 222,  661 => 220,  653 => 218,  650 => 217,  644 => 213,  640 => 211,  633 => 209,  599 => 206,  595 => 205,  590 => 204,  587 => 203,  584 => 202,  573 => 198,  560 => 191,  555 => 189,  553 => 188,  540 => 164,  534 => 162,  531 => 161,  528 => 160,  515 => 180,  513 => 179,  510 => 178,  501 => 174,  499 => 173,  496 => 172,  493 => 171,  475 => 169,  473 => 168,  470 => 167,  468 => 160,  459 => 159,  454 => 156,  442 => 151,  433 => 149,  422 => 147,  420 => 146,  417 => 145,  411 => 143,  408 => 142,  405 => 141,  390 => 136,  380 => 130,  366 => 125,  361 => 124,  358 => 123,  343 => 115,  340 => 114,  338 => 113,  327 => 102,  291 => 99,  286 => 98,  281 => 96,  272 => 91,  206 => 57,  113 => 39,  110 => 63,  90 => 24,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 335,  1066 => 334,  1062 => 333,  1053 => 332,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 319,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 304,  969 => 303,  965 => 302,  959 => 301,  956 => 300,  948 => 296,  944 => 295,  941 => 294,  932 => 287,  930 => 286,  926 => 285,  923 => 284,  918 => 280,  910 => 278,  906 => 277,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 267,  883 => 265,  881 => 264,  878 => 263,  871 => 259,  869 => 258,  845 => 257,  842 => 255,  839 => 253,  837 => 252,  835 => 251,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 233,  803 => 232,  799 => 229,  797 => 228,  795 => 227,  793 => 226,  791 => 225,  788 => 224,  784 => 221,  781 => 216,  776 => 212,  756 => 208,  753 => 206,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 239,  737 => 198,  734 => 237,  730 => 192,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 185,  706 => 182,  703 => 226,  701 => 179,  698 => 178,  694 => 175,  692 => 174,  689 => 173,  685 => 170,  683 => 223,  680 => 168,  675 => 165,  673 => 164,  670 => 163,  665 => 160,  663 => 159,  660 => 158,  656 => 219,  654 => 154,  651 => 153,  647 => 150,  645 => 149,  642 => 148,  638 => 210,  635 => 144,  631 => 141,  629 => 140,  626 => 139,  622 => 136,  619 => 135,  616 => 207,  611 => 129,  601 => 128,  596 => 127,  594 => 126,  591 => 124,  589 => 123,  586 => 122,  581 => 201,  579 => 116,  578 => 200,  577 => 114,  576 => 199,  572 => 112,  569 => 110,  567 => 109,  564 => 193,  558 => 190,  556 => 103,  554 => 102,  552 => 101,  550 => 187,  546 => 166,  543 => 97,  541 => 96,  538 => 95,  524 => 92,  521 => 182,  507 => 88,  504 => 175,  479 => 82,  476 => 80,  472 => 78,  467 => 77,  465 => 76,  448 => 153,  445 => 152,  441 => 71,  439 => 150,  431 => 66,  429 => 148,  425 => 63,  414 => 144,  412 => 59,  399 => 139,  397 => 55,  394 => 54,  389 => 51,  383 => 49,  377 => 129,  373 => 46,  370 => 45,  357 => 37,  349 => 34,  346 => 33,  342 => 30,  339 => 28,  330 => 103,  326 => 21,  323 => 19,  317 => 107,  290 => 90,  282 => 3,  275 => 86,  270 => 84,  263 => 294,  260 => 293,  257 => 291,  250 => 274,  245 => 83,  242 => 82,  194 => 52,  188 => 194,  186 => 190,  139 => 139,  126 => 24,  114 => 50,  200 => 70,  180 => 66,  174 => 64,  165 => 61,  146 => 147,  23 => 4,  363 => 184,  353 => 177,  350 => 176,  348 => 118,  345 => 116,  329 => 166,  324 => 110,  321 => 100,  318 => 162,  311 => 158,  307 => 104,  304 => 103,  297 => 153,  287 => 89,  276 => 138,  271 => 136,  262 => 81,  256 => 79,  197 => 72,  191 => 196,  170 => 84,  222 => 66,  190 => 49,  185 => 63,  137 => 29,  96 => 44,  212 => 76,  172 => 85,  251 => 130,  231 => 69,  195 => 106,  129 => 25,  120 => 43,  104 => 34,  100 => 57,  81 => 20,  77 => 35,  65 => 25,  97 => 56,  74 => 26,  70 => 27,  52 => 11,  184 => 48,  153 => 55,  127 => 48,  237 => 71,  232 => 78,  216 => 107,  213 => 106,  207 => 216,  202 => 55,  160 => 40,  145 => 109,  424 => 198,  421 => 197,  404 => 58,  401 => 57,  396 => 138,  386 => 189,  367 => 176,  351 => 120,  334 => 26,  331 => 160,  328 => 22,  300 => 93,  295 => 100,  280 => 87,  267 => 226,  265 => 299,  259 => 87,  255 => 284,  253 => 78,  233 => 82,  210 => 108,  178 => 46,  155 => 77,  134 => 28,  124 => 47,  83 => 37,  181 => 185,  161 => 57,  157 => 57,  152 => 76,  84 => 32,  76 => 18,  34 => 7,  58 => 22,  53 => 20,  20 => 1,  480 => 162,  474 => 79,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 69,  435 => 146,  430 => 144,  427 => 64,  423 => 62,  413 => 134,  409 => 132,  407 => 131,  402 => 140,  398 => 197,  393 => 137,  387 => 122,  384 => 121,  381 => 48,  379 => 119,  374 => 128,  368 => 126,  365 => 41,  362 => 39,  360 => 38,  355 => 122,  341 => 105,  337 => 27,  322 => 101,  314 => 16,  312 => 97,  309 => 97,  305 => 95,  298 => 101,  294 => 90,  285 => 4,  283 => 97,  278 => 95,  268 => 300,  264 => 82,  258 => 81,  252 => 85,  247 => 75,  241 => 133,  229 => 125,  220 => 65,  214 => 63,  177 => 65,  169 => 62,  140 => 52,  132 => 57,  128 => 57,  111 => 90,  107 => 48,  61 => 23,  273 => 85,  269 => 94,  254 => 131,  246 => 90,  243 => 73,  240 => 72,  238 => 84,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 120,  219 => 237,  217 => 64,  208 => 105,  204 => 215,  179 => 90,  159 => 158,  143 => 106,  135 => 51,  131 => 132,  119 => 108,  108 => 36,  102 => 60,  71 => 23,  67 => 20,  63 => 31,  59 => 13,  47 => 18,  38 => 5,  94 => 30,  89 => 42,  85 => 31,  79 => 28,  75 => 29,  68 => 22,  56 => 27,  50 => 19,  35 => 19,  87 => 23,  72 => 22,  55 => 12,  201 => 213,  196 => 68,  183 => 189,  171 => 44,  166 => 167,  163 => 62,  158 => 55,  156 => 38,  151 => 52,  142 => 30,  138 => 104,  136 => 138,  123 => 91,  121 => 52,  117 => 41,  115 => 44,  105 => 61,  101 => 46,  91 => 44,  69 => 16,  66 => 32,  62 => 14,  49 => 23,  43 => 7,  41 => 6,  28 => 5,  25 => 8,  21 => 2,  31 => 6,  29 => 6,  26 => 12,  24 => 1,  19 => 2,  98 => 31,  93 => 36,  88 => 24,  78 => 19,  46 => 8,  44 => 17,  40 => 11,  32 => 14,  27 => 12,  22 => 7,  209 => 58,  203 => 103,  199 => 212,  193 => 105,  189 => 70,  187 => 64,  182 => 93,  176 => 178,  173 => 177,  168 => 43,  164 => 59,  162 => 41,  154 => 153,  149 => 148,  147 => 69,  144 => 144,  141 => 143,  133 => 50,  130 => 49,  125 => 46,  122 => 46,  116 => 107,  112 => 105,  109 => 19,  106 => 86,  103 => 43,  99 => 45,  95 => 28,  92 => 27,  86 => 28,  82 => 38,  80 => 36,  73 => 17,  64 => 3,  60 => 18,  57 => 15,  54 => 16,  51 => 15,  48 => 14,  45 => 21,  42 => 20,  39 => 15,  36 => 4,  33 => 13,  30 => 2,);
    }
}
