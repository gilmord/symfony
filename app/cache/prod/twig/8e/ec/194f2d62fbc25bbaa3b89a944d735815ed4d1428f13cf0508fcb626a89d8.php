<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig */
class __TwigTemplate_8eec194f2d62fbc25bbaa3b89a944d735815ed4d1428f13cf0508fcb626a89d8 extends Twig_Template
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
        // line 11
        if ((!$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "hasassociationadmin"))) {
            // line 12
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 13
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : null), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description")), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 16
            echo "
    <div id=\"field_container_";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" >
            ";
            // line 19
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "inline")) {
                // line 20
                echo "                ";
                if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline") == "table")) {
                    // line 21
                    echo "                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children")) > 0)) {
                        // line 22
                        echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    ";
                        // line 25
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children")), "children"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 26
                            echo "                                        ";
                            if (((isset($context["field_name"]) ? $context["field_name"] : null) == "_delete")) {
                                // line 27
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
                                echo "</th>
                                        ";
                            } else {
                                // line 29
                                echo "                                            <th ";
                                echo (($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "required", array(), "array")) ? ("class=\"required\"") : (""));
                                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars", array(), "any", false, true), "attr", array(), "array", false, true), "hidden", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "attr", array(), "array"), "hidden", array(), "array"))) {
                                    echo " style=\"display:none;\"";
                                }
                                echo ">
                                                ";
                                // line 30
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "sonata_admin", array(), "array"), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "label")), "method"), "html", null, true);
                                echo "
                                            </th>
                                        ";
                            }
                            // line 33
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 34
                        echo "                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 37
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 38
                            echo "                                    <tr>
                                        ";
                            // line 39
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : null), "children"));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 40
                                echo "                                            <td class=\"sonata-ba-td-";
                                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, (isset($context["field_name"]) ? $context["field_name"] : null), "html", null, true);
                                echo " control-group";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "errors")) > 0)) {
                                    echo " error";
                                }
                                echo "\"";
                                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars", array(), "any", false, true), "attr", array(), "array", false, true), "hidden", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "attr", array(), "array"), "hidden", array(), "array"))) {
                                    echo " style=\"display:none;\"";
                                }
                                echo ">
                                                ";
                                // line 41
                                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "formfielddescriptions", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array", true, true)) {
                                    // line 42
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'widget');
                                    echo "

                                                    ";
                                    // line 44
                                    $context["dummy"] = $this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : null), "setrendered");
                                    // line 45
                                    echo "                                                ";
                                } else {
                                    // line 46
                                    echo "                                                    ";
                                    if (((isset($context["field_name"]) ? $context["field_name"] : null) == "_delete")) {
                                        // line 47
                                        echo "                                                        ";
                                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'widget', array("label_render" => false));
                                        echo "
                                                    ";
                                    } else {
                                        // line 49
                                        echo "                                                        ";
                                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'widget');
                                        echo "
                                                    ";
                                    }
                                    // line 51
                                    echo "                                                ";
                                }
                                // line 52
                                echo "                                                ";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "errors")) > 0)) {
                                    // line 53
                                    echo "                                                    <div class=\"help-inline sonata-ba-field-error-messages\">
                                                        ";
                                    // line 54
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'errors');
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 57
                                echo "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 59
                            echo "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 61
                        echo "                            </tbody>
                        </table>
                    ";
                    }
                    // line 64
                    echo "                ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children")) > 0)) {
                    // line 65
                    echo "                    ";
                    $context["associationAdmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin");
                    // line 66
                    echo "
                    <div>
                        ";
                    // line 68
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["nested_group_field"]) {
                        // line 69
                        echo "                            <ul class=\"nav nav-tabs\">
                                ";
                        // line 70
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : null), "formgroups"));
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
                        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                            // line 71
                            echo "                                    <li class=\"";
                            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                                echo "active";
                            }
                            echo "\">
                                        <a href=\"#";
                            // line 72
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : null), "uniqid"), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "parent"), "loop"), "index"), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                            echo "\" data-toggle=\"tab\">
                                            <i class=\"icon-exclamation-sign has-errors hide\"></i>
                                            ";
                            // line 74
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : null), "trans", array(0 => (isset($context["name"]) ? $context["name"] : null), 1 => array(), 2 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "translation_domain")), "method"), "html", null, true);
                            echo "
                                        </a>
                                    </li>
                                ";
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
                        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 78
                        echo "                            </ul>

                            <div class=\"tab-content\">
                                ";
                        // line 81
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : null), "formgroups"));
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
                        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                            // line 82
                            echo "                                    <div class=\"tab-pane ";
                            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                                echo "active";
                            }
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : null), "uniqid"), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "parent"), "loop"), "index"), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                            echo "\">
                                        <fieldset>
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                            // line 85
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "fields"));
                            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                                // line 86
                                echo "                                                    ";
                                $context["nested_field"] = $this->getAttribute($this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : null), "children"), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array");
                                // line 87
                                echo "                                                    ";
                                if ($this->getAttribute($this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : null), "formfielddescriptions", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array", true, true)) {
                                    // line 88
                                    echo "                                                        ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'row', array("inline" => "natural", "edit" => "inline"));
                                    // line 91
                                    echo "
                                                        ";
                                    // line 92
                                    $context["dummy"] = $this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : null), "setrendered");
                                    // line 93
                                    echo "                                                    ";
                                } else {
                                    // line 94
                                    echo "                                                        ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'row');
                                    echo "
                                                    ";
                                }
                                // line 96
                                echo "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 97
                            echo "                                            </div>
                                        </fieldset>
                                    </div>
                                ";
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
                        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 101
                        echo "                            </div>

                            ";
                        // line 103
                        if ($this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : null), "_delete", array(), "array", true, true)) {
                            // line 104
                            echo "                                ";
                            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : null), "_delete", array(), "array"), 'row');
                            echo "
                            ";
                        }
                        // line 106
                        echo "                        ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    echo "                    </div>
                ";
                }
                // line 109
                echo "            ";
            } else {
                // line 110
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            ";
            }
            // line 112
            echo "
        </span>

        ";
            // line 115
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "inline")) {
                // line 116
                echo "
            ";
                // line 117
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : null))) {
                    // line 118
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 121
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 126
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 130
                echo "
            ";
                // line 132
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "sortable", array(), "any", true, true)) {
                    // line 133
                    echo "                <script type=\"text/javascript\">
                    jQuery('div#field_container_";
                    // line 134
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable({
                        axis: 'y',
                        opacity: 0.6,
                        items: '> tr',
                        stop: apply_position_value_";
                    // line 138
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "
                    });

                    function apply_position_value_";
                    // line 141
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "() {
                        // update the input value position
                        jQuery('div#field_container_";
                    // line 143
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "sortable"), "html", null, true);
                    echo "').each(function(index, element) {
                            // remove the sortable handler and put it back
                            jQuery('span.sonata-ba-sortable-handler', element).remove();
                            jQuery(element).append('<span class=\"sonata-ba-sortable-handler ui-icon ui-icon-grip-solid-horizontal\"></span>');
                            jQuery('input', element).hide();
                        });

                        jQuery('div#field_container_";
                    // line 150
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "sortable"), "html", null, true);
                    echo " input').each(function(index, value) {
                            jQuery(value).val(index + 1);
                        });
                    }

                    // refresh the sortable option when a new element is added
                    jQuery('#sonata-ba-field-container-";
                    // line 156
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "').bind('sonata.add_element', function() {
                        apply_position_value_";
                    // line 157
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "();
                        jQuery('div#field_container_";
                    // line 158
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable('refresh');
                    });

                    apply_position_value_";
                    // line 161
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "();

                </script>
            ";
                }
                // line 165
                echo "
            ";
                // line 167
                echo "            ";
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig")->display($context);
                // line 168
                echo "
        ";
            } else {
                // line 170
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" >
                ";
                // line 171
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : null))) {
                    // line 172
                    echo "                    <a
                        href=\"";
                    // line 173
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 174
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                    // line 176
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 179
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 182
                echo "            </span>

            ";
                // line 184
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig")->display($context);
                // line 185
                echo "
            ";
                // line 186
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
                // line 187
                echo "        ";
            }
            // line 188
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 182,  537 => 176,  525 => 172,  508 => 165,  491 => 157,  487 => 156,  460 => 143,  449 => 138,  436 => 132,  426 => 126,  403 => 117,  400 => 116,  308 => 86,  249 => 74,  274 => 135,  236 => 109,  319 => 124,  301 => 144,  293 => 113,  289 => 82,  277 => 136,  218 => 97,  205 => 90,  972 => 275,  966 => 273,  962 => 306,  958 => 304,  952 => 301,  949 => 300,  947 => 299,  933 => 295,  928 => 293,  925 => 292,  919 => 290,  917 => 289,  914 => 288,  908 => 286,  903 => 284,  897 => 282,  895 => 281,  892 => 280,  884 => 277,  879 => 273,  876 => 272,  873 => 271,  864 => 262,  856 => 257,  851 => 255,  847 => 253,  841 => 250,  833 => 247,  829 => 245,  823 => 242,  820 => 241,  818 => 240,  815 => 239,  812 => 238,  809 => 237,  804 => 266,  801 => 237,  798 => 236,  786 => 268,  773 => 226,  770 => 225,  766 => 224,  762 => 222,  751 => 218,  733 => 215,  726 => 213,  720 => 212,  713 => 209,  709 => 208,  695 => 205,  686 => 202,  681 => 201,  678 => 200,  676 => 199,  657 => 194,  648 => 192,  639 => 188,  632 => 187,  623 => 185,  613 => 182,  610 => 181,  597 => 177,  583 => 168,  571 => 164,  561 => 180,  544 => 229,  542 => 163,  535 => 160,  522 => 232,  520 => 160,  517 => 159,  506 => 147,  503 => 146,  495 => 158,  492 => 139,  484 => 133,  481 => 132,  477 => 129,  464 => 124,  418 => 112,  392 => 108,  375 => 152,  356 => 96,  336 => 89,  325 => 94,  299 => 116,  296 => 80,  266 => 73,  248 => 116,  228 => 88,  211 => 81,  167 => 57,  148 => 60,  118 => 23,  624 => 224,  620 => 184,  612 => 220,  607 => 180,  585 => 209,  580 => 207,  574 => 165,  566 => 203,  563 => 188,  559 => 179,  551 => 199,  545 => 198,  536 => 194,  532 => 174,  529 => 191,  526 => 234,  523 => 171,  518 => 170,  514 => 168,  511 => 167,  497 => 156,  490 => 154,  485 => 124,  463 => 117,  455 => 141,  450 => 114,  447 => 122,  415 => 121,  410 => 113,  406 => 111,  391 => 163,  385 => 159,  376 => 153,  369 => 130,  359 => 144,  354 => 101,  347 => 134,  335 => 133,  333 => 88,  320 => 92,  313 => 84,  310 => 83,  302 => 82,  284 => 76,  261 => 71,  239 => 97,  198 => 55,  192 => 66,  315 => 150,  306 => 95,  303 => 94,  292 => 91,  225 => 87,  175 => 74,  150 => 38,  12 => 36,  37 => 18,  778 => 234,  772 => 248,  769 => 247,  767 => 246,  763 => 244,  760 => 243,  748 => 242,  745 => 217,  742 => 240,  736 => 238,  729 => 235,  717 => 233,  714 => 232,  711 => 231,  700 => 225,  666 => 222,  661 => 220,  653 => 218,  650 => 217,  644 => 213,  640 => 211,  633 => 209,  599 => 215,  595 => 205,  590 => 204,  587 => 203,  584 => 202,  573 => 198,  560 => 187,  555 => 185,  553 => 184,  540 => 164,  534 => 162,  531 => 161,  528 => 173,  515 => 180,  513 => 179,  510 => 178,  501 => 161,  499 => 173,  496 => 172,  493 => 155,  475 => 169,  473 => 127,  470 => 121,  468 => 160,  459 => 116,  454 => 156,  442 => 134,  433 => 130,  422 => 147,  420 => 123,  417 => 145,  411 => 120,  408 => 142,  405 => 118,  390 => 136,  380 => 107,  366 => 106,  361 => 124,  358 => 103,  343 => 132,  340 => 136,  338 => 130,  327 => 154,  291 => 99,  286 => 76,  281 => 110,  272 => 81,  206 => 57,  113 => 44,  110 => 51,  90 => 77,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 335,  1066 => 334,  1062 => 333,  1053 => 332,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 319,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 304,  969 => 274,  965 => 302,  959 => 301,  956 => 300,  948 => 296,  944 => 295,  941 => 296,  932 => 287,  930 => 294,  926 => 285,  923 => 284,  918 => 280,  910 => 278,  906 => 285,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 278,  883 => 265,  881 => 276,  878 => 263,  871 => 259,  869 => 265,  845 => 252,  842 => 255,  839 => 253,  837 => 252,  835 => 248,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 233,  803 => 232,  799 => 229,  797 => 228,  795 => 227,  793 => 307,  791 => 271,  788 => 224,  784 => 236,  781 => 235,  776 => 212,  756 => 221,  753 => 206,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 239,  737 => 198,  734 => 237,  730 => 214,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 185,  706 => 182,  703 => 226,  701 => 206,  698 => 178,  694 => 175,  692 => 204,  689 => 203,  685 => 170,  683 => 223,  680 => 168,  675 => 165,  673 => 198,  670 => 197,  665 => 160,  663 => 196,  660 => 195,  656 => 219,  654 => 193,  651 => 153,  647 => 150,  645 => 191,  642 => 190,  638 => 210,  635 => 226,  631 => 141,  629 => 186,  626 => 139,  622 => 136,  619 => 135,  616 => 183,  611 => 129,  601 => 179,  596 => 127,  594 => 212,  591 => 124,  589 => 123,  586 => 122,  581 => 201,  579 => 116,  578 => 200,  577 => 166,  576 => 199,  572 => 204,  569 => 110,  567 => 228,  564 => 225,  558 => 186,  556 => 178,  554 => 102,  552 => 101,  550 => 163,  546 => 166,  543 => 179,  541 => 96,  538 => 161,  524 => 92,  521 => 182,  507 => 165,  504 => 164,  479 => 82,  476 => 80,  472 => 78,  467 => 125,  465 => 76,  448 => 153,  445 => 152,  441 => 120,  439 => 133,  431 => 116,  429 => 148,  425 => 63,  414 => 144,  412 => 126,  399 => 139,  397 => 110,  394 => 109,  389 => 107,  383 => 105,  377 => 129,  373 => 132,  370 => 45,  357 => 37,  349 => 34,  346 => 93,  342 => 91,  339 => 28,  330 => 103,  326 => 129,  323 => 125,  317 => 91,  290 => 79,  282 => 3,  275 => 86,  270 => 84,  263 => 4,  260 => 104,  257 => 103,  250 => 274,  245 => 83,  242 => 113,  194 => 51,  188 => 48,  186 => 64,  139 => 54,  126 => 42,  114 => 44,  200 => 54,  180 => 49,  174 => 59,  165 => 77,  146 => 49,  23 => 13,  363 => 184,  353 => 95,  350 => 94,  348 => 118,  345 => 116,  329 => 130,  324 => 110,  321 => 152,  318 => 84,  311 => 87,  307 => 155,  304 => 85,  297 => 153,  287 => 77,  276 => 138,  271 => 108,  262 => 105,  256 => 79,  197 => 90,  191 => 196,  170 => 79,  222 => 66,  190 => 50,  185 => 86,  137 => 46,  96 => 18,  212 => 60,  172 => 85,  251 => 101,  231 => 99,  195 => 84,  129 => 59,  120 => 56,  104 => 49,  100 => 157,  81 => 30,  77 => 31,  65 => 29,  97 => 47,  74 => 23,  70 => 33,  52 => 21,  184 => 48,  153 => 72,  127 => 54,  237 => 71,  232 => 78,  216 => 70,  213 => 69,  207 => 91,  202 => 77,  160 => 76,  145 => 35,  424 => 91,  421 => 113,  404 => 90,  401 => 89,  396 => 138,  386 => 106,  367 => 105,  351 => 135,  334 => 26,  331 => 96,  328 => 22,  300 => 93,  295 => 142,  280 => 74,  267 => 78,  265 => 130,  259 => 87,  255 => 284,  253 => 78,  233 => 71,  210 => 59,  178 => 48,  155 => 52,  134 => 45,  124 => 41,  83 => 32,  181 => 61,  161 => 54,  157 => 41,  152 => 51,  84 => 36,  76 => 35,  34 => 4,  58 => 19,  53 => 10,  20 => 11,  480 => 162,  474 => 150,  469 => 158,  461 => 123,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 118,  435 => 146,  430 => 144,  427 => 64,  423 => 114,  413 => 134,  409 => 132,  407 => 131,  402 => 140,  398 => 115,  393 => 112,  387 => 110,  384 => 109,  381 => 157,  379 => 154,  374 => 128,  368 => 126,  365 => 141,  362 => 39,  360 => 104,  355 => 122,  341 => 131,  337 => 97,  322 => 93,  314 => 88,  312 => 149,  309 => 148,  305 => 119,  298 => 101,  294 => 90,  285 => 111,  283 => 138,  278 => 95,  268 => 107,  264 => 74,  258 => 70,  252 => 3,  247 => 75,  241 => 133,  229 => 125,  220 => 65,  214 => 99,  177 => 43,  169 => 66,  140 => 47,  132 => 44,  128 => 58,  111 => 44,  107 => 52,  61 => 24,  273 => 85,  269 => 133,  254 => 102,  246 => 99,  243 => 98,  240 => 72,  238 => 84,  235 => 63,  230 => 106,  227 => 243,  224 => 103,  221 => 120,  219 => 101,  217 => 60,  208 => 57,  204 => 78,  179 => 76,  159 => 66,  143 => 59,  135 => 51,  131 => 55,  119 => 44,  108 => 21,  102 => 38,  71 => 29,  67 => 27,  63 => 27,  59 => 28,  47 => 19,  38 => 17,  94 => 35,  89 => 40,  85 => 32,  79 => 37,  75 => 39,  68 => 10,  56 => 22,  50 => 18,  35 => 16,  87 => 33,  72 => 37,  55 => 22,  201 => 56,  196 => 68,  183 => 78,  171 => 57,  166 => 167,  163 => 40,  158 => 53,  156 => 64,  151 => 61,  142 => 30,  138 => 61,  136 => 60,  123 => 57,  121 => 24,  117 => 57,  115 => 45,  105 => 39,  101 => 49,  91 => 34,  69 => 26,  66 => 29,  62 => 29,  49 => 20,  43 => 18,  41 => 18,  28 => 14,  25 => 12,  21 => 12,  31 => 3,  29 => 15,  26 => 13,  24 => 3,  19 => 11,  98 => 37,  93 => 34,  88 => 57,  78 => 40,  46 => 21,  44 => 18,  40 => 13,  32 => 16,  27 => 13,  22 => 2,  209 => 96,  203 => 93,  199 => 86,  193 => 83,  189 => 65,  187 => 87,  182 => 85,  176 => 82,  173 => 72,  168 => 70,  164 => 55,  162 => 68,  154 => 63,  149 => 60,  147 => 69,  144 => 68,  141 => 67,  133 => 46,  130 => 48,  125 => 46,  122 => 45,  116 => 45,  112 => 52,  109 => 40,  106 => 86,  103 => 50,  99 => 30,  95 => 19,  92 => 45,  86 => 43,  82 => 28,  80 => 41,  73 => 29,  64 => 26,  60 => 25,  57 => 25,  54 => 25,  51 => 24,  48 => 21,  45 => 8,  42 => 7,  39 => 17,  36 => 16,  33 => 16,  30 => 17,);
    }
}
