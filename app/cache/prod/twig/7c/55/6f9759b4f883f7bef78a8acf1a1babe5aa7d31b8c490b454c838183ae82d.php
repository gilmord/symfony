<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_7c556f9759b4f883f7bef78a8acf1a1babe5aa7d31b8c490b454c838183ae82d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig");

        $this->blocks = array(
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig")->display($context);
    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig")->display($context);
    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig")->display($context);
    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig")->display($context);
    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (twig_test_empty($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_actions_";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"field-actions\">
            <span id=\"field_widget_";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"field-short-description\">
                ";
        // line 60
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value")), "method")) {
            // line 61
            echo "                    ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "uniqid"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "link_parameters"))), array());
            // line 67
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "placeholder"))) {
            // line 68
            echo "                    <span class=\"inner-field-short-description\">
                        ";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </span>
                ";
        }
        // line 72
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 75
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : null))) {
            // line 76
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_list_";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-info btn-sm btn-outline sonata-ba-action\"
                        title=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-list\"></i>
                        ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 85
        echo "
                ";
        // line 86
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : null))) {
            // line 87
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_add_";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                        title=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 96
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 99
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "DELETE"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : null))) {
            // line 100
            echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-danger btn-sm btn-outline sonata-ba-action\"
                        title=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 109
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </span>

        <div class=\"modal fade\" id=\"field_dialog_";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 130
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
    }

    // line 133
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        // line 134
        echo "    ";
        // line 135
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 136
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 138
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 140
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 142
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 144
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "
    ";
        }
    }

    // line 148
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        // line 149
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 150
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 152
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 154
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "mappingtype"), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 135,  236 => 109,  319 => 124,  301 => 144,  293 => 113,  289 => 140,  277 => 136,  218 => 97,  205 => 90,  972 => 275,  966 => 273,  962 => 306,  958 => 304,  952 => 301,  949 => 300,  947 => 299,  933 => 295,  928 => 293,  925 => 292,  919 => 290,  917 => 289,  914 => 288,  908 => 286,  903 => 284,  897 => 282,  895 => 281,  892 => 280,  884 => 277,  879 => 273,  876 => 272,  873 => 271,  864 => 262,  856 => 257,  851 => 255,  847 => 253,  841 => 250,  833 => 247,  829 => 245,  823 => 242,  820 => 241,  818 => 240,  815 => 239,  812 => 238,  809 => 237,  804 => 266,  801 => 237,  798 => 236,  786 => 268,  773 => 226,  770 => 225,  766 => 224,  762 => 222,  751 => 218,  733 => 215,  726 => 213,  720 => 212,  713 => 209,  709 => 208,  695 => 205,  686 => 202,  681 => 201,  678 => 200,  676 => 199,  657 => 194,  648 => 192,  639 => 188,  632 => 187,  623 => 185,  613 => 182,  610 => 181,  597 => 177,  583 => 168,  571 => 164,  561 => 180,  544 => 229,  542 => 163,  535 => 160,  522 => 232,  520 => 160,  517 => 159,  506 => 147,  503 => 146,  495 => 140,  492 => 139,  484 => 133,  481 => 132,  477 => 129,  464 => 124,  418 => 112,  392 => 108,  375 => 152,  356 => 96,  336 => 89,  325 => 86,  299 => 116,  296 => 80,  266 => 73,  248 => 116,  228 => 88,  211 => 81,  167 => 56,  148 => 60,  118 => 23,  624 => 224,  620 => 184,  612 => 220,  607 => 180,  585 => 209,  580 => 207,  574 => 165,  566 => 203,  563 => 202,  559 => 179,  551 => 199,  545 => 198,  536 => 194,  532 => 192,  529 => 191,  526 => 234,  523 => 189,  518 => 180,  514 => 158,  511 => 166,  497 => 156,  490 => 154,  485 => 124,  463 => 117,  455 => 115,  450 => 114,  447 => 122,  415 => 111,  410 => 113,  406 => 111,  391 => 163,  385 => 159,  376 => 153,  369 => 130,  359 => 144,  354 => 142,  347 => 134,  335 => 133,  333 => 88,  320 => 87,  313 => 84,  310 => 83,  302 => 82,  284 => 76,  261 => 71,  239 => 97,  198 => 55,  192 => 88,  315 => 150,  306 => 95,  303 => 94,  292 => 91,  225 => 87,  175 => 74,  150 => 38,  12 => 36,  37 => 18,  778 => 234,  772 => 248,  769 => 247,  767 => 246,  763 => 244,  760 => 243,  748 => 242,  745 => 217,  742 => 240,  736 => 238,  729 => 235,  717 => 233,  714 => 232,  711 => 231,  700 => 225,  666 => 222,  661 => 220,  653 => 218,  650 => 217,  644 => 213,  640 => 211,  633 => 209,  599 => 215,  595 => 205,  590 => 204,  587 => 203,  584 => 202,  573 => 198,  560 => 191,  555 => 200,  553 => 164,  540 => 164,  534 => 162,  531 => 161,  528 => 309,  515 => 180,  513 => 179,  510 => 178,  501 => 163,  499 => 173,  496 => 172,  493 => 155,  475 => 169,  473 => 127,  470 => 121,  468 => 160,  459 => 116,  454 => 156,  442 => 151,  433 => 149,  422 => 147,  420 => 146,  417 => 145,  411 => 143,  408 => 142,  405 => 141,  390 => 136,  380 => 130,  366 => 125,  361 => 124,  358 => 139,  343 => 132,  340 => 136,  338 => 130,  327 => 154,  291 => 99,  286 => 76,  281 => 110,  272 => 134,  206 => 57,  113 => 44,  110 => 51,  90 => 77,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 335,  1066 => 334,  1062 => 333,  1053 => 332,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 319,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 304,  969 => 274,  965 => 302,  959 => 301,  956 => 300,  948 => 296,  944 => 295,  941 => 296,  932 => 287,  930 => 294,  926 => 285,  923 => 284,  918 => 280,  910 => 278,  906 => 285,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 278,  883 => 265,  881 => 276,  878 => 263,  871 => 259,  869 => 265,  845 => 252,  842 => 255,  839 => 253,  837 => 252,  835 => 248,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 233,  803 => 232,  799 => 229,  797 => 228,  795 => 227,  793 => 307,  791 => 271,  788 => 224,  784 => 236,  781 => 235,  776 => 212,  756 => 221,  753 => 206,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 239,  737 => 198,  734 => 237,  730 => 214,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 185,  706 => 182,  703 => 226,  701 => 206,  698 => 178,  694 => 175,  692 => 204,  689 => 203,  685 => 170,  683 => 223,  680 => 168,  675 => 165,  673 => 198,  670 => 197,  665 => 160,  663 => 196,  660 => 195,  656 => 219,  654 => 193,  651 => 153,  647 => 150,  645 => 191,  642 => 190,  638 => 210,  635 => 226,  631 => 141,  629 => 186,  626 => 139,  622 => 136,  619 => 135,  616 => 183,  611 => 129,  601 => 179,  596 => 127,  594 => 212,  591 => 124,  589 => 123,  586 => 122,  581 => 201,  579 => 116,  578 => 200,  577 => 166,  576 => 199,  572 => 204,  569 => 110,  567 => 228,  564 => 225,  558 => 190,  556 => 178,  554 => 102,  552 => 101,  550 => 163,  546 => 166,  543 => 97,  541 => 96,  538 => 161,  524 => 92,  521 => 182,  507 => 165,  504 => 164,  479 => 82,  476 => 80,  472 => 78,  467 => 125,  465 => 76,  448 => 153,  445 => 152,  441 => 120,  439 => 150,  431 => 116,  429 => 148,  425 => 63,  414 => 144,  412 => 126,  399 => 139,  397 => 110,  394 => 109,  389 => 107,  383 => 105,  377 => 129,  373 => 132,  370 => 45,  357 => 37,  349 => 34,  346 => 93,  342 => 91,  339 => 28,  330 => 103,  326 => 129,  323 => 125,  317 => 107,  290 => 79,  282 => 3,  275 => 86,  270 => 84,  263 => 4,  260 => 104,  257 => 103,  250 => 274,  245 => 83,  242 => 113,  194 => 51,  188 => 48,  186 => 81,  139 => 54,  126 => 30,  114 => 44,  200 => 54,  180 => 49,  174 => 67,  165 => 77,  146 => 58,  23 => 13,  363 => 184,  353 => 95,  350 => 94,  348 => 118,  345 => 116,  329 => 130,  324 => 110,  321 => 152,  318 => 84,  311 => 158,  307 => 155,  304 => 94,  297 => 153,  287 => 77,  276 => 138,  271 => 108,  262 => 105,  256 => 79,  197 => 90,  191 => 196,  170 => 79,  222 => 66,  190 => 50,  185 => 86,  137 => 52,  96 => 18,  212 => 60,  172 => 85,  251 => 101,  231 => 99,  195 => 84,  129 => 59,  120 => 56,  104 => 49,  100 => 157,  81 => 26,  77 => 31,  65 => 29,  97 => 47,  74 => 23,  70 => 33,  52 => 19,  184 => 48,  153 => 72,  127 => 54,  237 => 71,  232 => 78,  216 => 100,  213 => 82,  207 => 91,  202 => 77,  160 => 76,  145 => 35,  424 => 91,  421 => 113,  404 => 90,  401 => 89,  396 => 138,  386 => 106,  367 => 105,  351 => 135,  334 => 26,  331 => 160,  328 => 22,  300 => 93,  295 => 142,  280 => 74,  267 => 5,  265 => 130,  259 => 87,  255 => 284,  253 => 78,  233 => 82,  210 => 59,  178 => 48,  155 => 77,  134 => 56,  124 => 25,  83 => 32,  181 => 77,  161 => 57,  157 => 41,  152 => 62,  84 => 36,  76 => 35,  34 => 4,  58 => 19,  53 => 10,  20 => 11,  480 => 162,  474 => 122,  469 => 158,  461 => 123,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 118,  435 => 146,  430 => 144,  427 => 64,  423 => 114,  413 => 134,  409 => 132,  407 => 131,  402 => 140,  398 => 88,  393 => 168,  387 => 122,  384 => 121,  381 => 157,  379 => 154,  374 => 128,  368 => 126,  365 => 141,  362 => 39,  360 => 38,  355 => 122,  341 => 131,  337 => 27,  322 => 101,  314 => 16,  312 => 149,  309 => 148,  305 => 119,  298 => 101,  294 => 90,  285 => 111,  283 => 138,  278 => 95,  268 => 107,  264 => 74,  258 => 70,  252 => 3,  247 => 75,  241 => 133,  229 => 125,  220 => 65,  214 => 99,  177 => 43,  169 => 66,  140 => 51,  132 => 59,  128 => 58,  111 => 44,  107 => 52,  61 => 24,  273 => 85,  269 => 133,  254 => 102,  246 => 99,  243 => 98,  240 => 72,  238 => 84,  235 => 63,  230 => 106,  227 => 243,  224 => 103,  221 => 120,  219 => 101,  217 => 60,  208 => 57,  204 => 78,  179 => 76,  159 => 66,  143 => 59,  135 => 51,  131 => 55,  119 => 44,  108 => 21,  102 => 19,  71 => 29,  67 => 32,  63 => 27,  59 => 28,  47 => 17,  38 => 17,  94 => 35,  89 => 40,  85 => 32,  79 => 37,  75 => 39,  68 => 10,  56 => 22,  50 => 18,  35 => 16,  87 => 14,  72 => 37,  55 => 24,  201 => 56,  196 => 52,  183 => 78,  171 => 57,  166 => 167,  163 => 40,  158 => 75,  156 => 64,  151 => 61,  142 => 30,  138 => 61,  136 => 60,  123 => 57,  121 => 24,  117 => 57,  115 => 45,  105 => 39,  101 => 49,  91 => 34,  69 => 26,  66 => 29,  62 => 29,  49 => 9,  43 => 20,  41 => 18,  28 => 14,  25 => 12,  21 => 11,  31 => 3,  29 => 15,  26 => 14,  24 => 3,  19 => 1,  98 => 47,  93 => 45,  88 => 57,  78 => 40,  46 => 21,  44 => 18,  40 => 13,  32 => 16,  27 => 13,  22 => 2,  209 => 96,  203 => 93,  199 => 86,  193 => 83,  189 => 71,  187 => 87,  182 => 85,  176 => 82,  173 => 72,  168 => 70,  164 => 55,  162 => 68,  154 => 63,  149 => 60,  147 => 69,  144 => 68,  141 => 67,  133 => 46,  130 => 48,  125 => 46,  122 => 45,  116 => 45,  112 => 52,  109 => 53,  106 => 86,  103 => 50,  99 => 30,  95 => 19,  92 => 45,  86 => 43,  82 => 28,  80 => 41,  73 => 24,  64 => 25,  60 => 15,  57 => 25,  54 => 25,  51 => 24,  48 => 21,  45 => 8,  42 => 7,  39 => 17,  36 => 16,  33 => 16,  30 => 17,);
    }
}
