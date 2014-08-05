<?php

/* GenemuFormBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_b6b7afd5d7965c8e2ccb31fd6bf7bc4865ecf9033f00fb94a60813c327cd3ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_javascript' => array($this, 'block_form_javascript'),
            'field_javascript' => array($this, 'block_field_javascript'),
            'button_javascript' => array($this, 'block_button_javascript'),
            'genemu_captcha_javascript' => array($this, 'block_genemu_captcha_javascript'),
            'genemu_recaptcha_javascript' => array($this, 'block_genemu_recaptcha_javascript'),
            'genemu_tinymce_javascript' => array($this, 'block_genemu_tinymce_javascript'),
            'genemu_jquerydate_javascript' => array($this, 'block_genemu_jquerydate_javascript'),
            'genemu_jquerydate_javascript_prototype' => array($this, 'block_genemu_jquerydate_javascript_prototype'),
            'genemu_jqueryslider_javascript' => array($this, 'block_genemu_jqueryslider_javascript'),
            'genemu_jquerycolor_javascript' => array($this, 'block_genemu_jquerycolor_javascript'),
            'genemu_jqueryrating_javascript' => array($this, 'block_genemu_jqueryrating_javascript'),
            'genemu_jquerytokeninput_javascript' => array($this, 'block_genemu_jquerytokeninput_javascript'),
            'genemu_jqueryautocompleter_javascript' => array($this, 'block_genemu_jqueryautocompleter_javascript'),
            'genemu_jqueryautocomplete_javascript' => array($this, 'block_genemu_jqueryautocomplete_javascript'),
            'genemu_jquerychosen_javascript' => array($this, 'block_genemu_jquerychosen_javascript'),
            'genemu_jquerychosen_javascript_prototype' => array($this, 'block_genemu_jquerychosen_javascript_prototype'),
            'genemu_jquerygeolocation_javascript' => array($this, 'block_genemu_jquerygeolocation_javascript'),
            'genemu_jqueryfile_javascript' => array($this, 'block_genemu_jqueryfile_javascript'),
            'genemu_jqueryfile_javascript_prototype' => array($this, 'block_genemu_jqueryfile_javascript_prototype'),
            'genemu_jqueryimage_javascript' => array($this, 'block_genemu_jqueryimage_javascript'),
            'genemu_jqueryimage_javascript_prototype' => array($this, 'block_genemu_jqueryimage_javascript_prototype'),
            'genemu_jqueryselect2_javascript' => array($this, 'block_genemu_jqueryselect2_javascript'),
            'genemu_jqueryselect2_javascript_prototype' => array($this, 'block_genemu_jqueryselect2_javascript_prototype'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_javascript', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('genemu_captcha_javascript', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('genemu_recaptcha_javascript', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('genemu_tinymce_javascript', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('genemu_jquerydate_javascript', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('genemu_jqueryslider_javascript', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('genemu_jquerycolor_javascript', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('genemu_jqueryrating_javascript', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('genemu_jquerytokeninput_javascript', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('genemu_jqueryautocompleter_javascript', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('genemu_jqueryautocomplete_javascript', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('genemu_jquerychosen_javascript', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('genemu_jquerygeolocation_javascript', $context, $blocks);
        // line 409
        echo "
";
        // line 410
        $this->displayBlock('genemu_jqueryfile_javascript', $context, $blocks);
        // line 487
        echo "
";
        // line 488
        $this->displayBlock('genemu_jqueryimage_javascript', $context, $blocks);
        // line 655
        echo "
";
        // line 656
        $this->displayBlock('genemu_jqueryselect2_javascript', $context, $blocks);
        // line 667
        echo "
";
    }

    // line 1
    public function block_form_javascript($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["child"]) ? $context["child"] : null));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_field_javascript($context, array $blocks = array())
    {
        echo "";
    }

    // line 11
    public function block_button_javascript($context, array $blocks = array())
    {
        echo "";
    }

    // line 13
    public function block_genemu_captcha_javascript($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    <!--[if lte IE 7]>
    <script type=\"text/javascript\">
        \$(function () {
            var pathBase64 = \"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("genemu_base64");
        echo "\";

            \$(document.images).each(function(){
                var src = \$(this).attr(\"src\");
                if (/^data:.*;base64/i.test(src)) {
                    src = src.slice(5);
                    \$(this).attr(\"src\",pathBase64+\"?\"+src);
                }
            });
        });
    </script>
    <![endif]-->
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 33
    public function block_genemu_recaptcha_javascript($context, array $blocks = array())
    {
        // line 34
        ob_start();
        // line 35
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        function genemu_recaptcha_load()
        {
            Recaptcha.create('";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : null), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_div', ";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");
        }

        if (window.addEventListener) {
            window.addEventListener('load', genemu_recaptcha_load, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', genemu_recaptcha_load);
        } else {
            window.onload = genemu_recaptcha_load;
        }
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_genemu_tinymce_javascript($context, array $blocks = array())
    {
        // line 54
        ob_start();
        // line 55
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 56
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("script_url" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url"))));
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("mode" => "exact", "elements" => (isset($context["id"]) ? $context["id"] : null)));
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$configs = ";
        // line 68
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ";";
        // line 70
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 71
            echo "
            var \$textarea = jQuery('#";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "');
            if(\$textarea.is('[required]')) {
                \$configs.oninit = function(editor) {
                    editor.onChange.add(function(ed, l) { ed.save(); });
                };
            }
            \$textarea.tinymce(\$configs);
        ";
        } else {
            // line 80
            echo "
            tinyMCE.init(\$configs);
        ";
        }
        // line 84
        echo "});
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 89
    public function block_genemu_jquerydate_javascript($context, array $blocks = array())
    {
        // line 90
        ob_start();
        // line 91
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 94
        if (((isset($context["widget"]) ? $context["widget"] : null) != "single_text")) {
            echo "datepicker_";
        }
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
        
        ";
        // line 96
        $this->displayBlock('genemu_jquerydate_javascript_prototype', $context, $blocks);
        // line 127
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 96
    public function block_genemu_jquerydate_javascript_prototype($context, array $blocks = array())
    {
        // line 97
        echo "
        ";
        // line 98
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "buttonImage", array(), "any", true, true)) {
            // line 99
            echo "            ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("buttonImage" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "buttonImage"))));
            // line 102
            echo "        ";
        }
        // line 103
        echo "
        ";
        // line 104
        if (((isset($context["culture"]) ? $context["culture"] : null) == "en")) {
            // line 105
            echo "            ";
            $context["culture"] = "en-GB";
            // line 106
            echo "        ";
        }
        // line 107
        echo "
            var \$configs = \$.extend({
                minDate: new Date(";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["min_year"]) ? $context["min_year"] : null), "html", null, true);
        echo ", 0, 1),
                maxDate: new Date(";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["max_year"]) ? $context["max_year"] : null), "html", null, true);
        echo ", 11, 31)
            }, \$.datepicker.regional['";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["culture"]) ? $context["culture"] : null), "html", null, true);
        echo "'] ,";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");

        ";
        // line 113
        if (((isset($context["widget"]) ? $context["widget"] : null) != "single_text")) {
            // line 114
            echo "            var \$year = \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year"), "vars"), "id"), "html", null, true);
            echo "');
            var \$month = \$('#";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month"), "vars"), "id"), "html", null, true);
            echo "');
            var \$day = \$('#";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day"), "vars"), "id"), "html", null, true);
            echo "');

            \$configs.onSelect = function(date) {
                \$year.val(parseInt(date.substring(0, 4), 10));
                \$month.val(parseInt(date.substring(5, 7), 10));
                \$day.val(parseInt(date.substring(8), 10));
            }
        ";
        }
        // line 124
        echo "
            \$field.datepicker(\$configs);
        ";
    }

    // line 132
    public function block_genemu_jqueryslider_javascript($context, array $blocks = array())
    {
        // line 133
        ob_start();
        // line 134
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$configs = \$.extend(";
        // line 137
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ", {
                value: ";
        // line 138
        echo twig_escape_filter($this->env, (((isset($context["value"]) ? $context["value"] : null)) ? ((isset($context["value"]) ? $context["value"] : null)) : (0)), "html", null, true);
        echo ",
                slide: function(event, ui) {
                    \$field.val(ui.value);
                }
            });

            \$('#";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_slider').slider(\$configs);
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 150
    public function block_genemu_jquerycolor_javascript($context, array $blocks = array())
    {
        // line 151
        ob_start();
        // line 152
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$configs = \$.extend({
                color: '#' + \$field.val(),
                onBeforeShow: function() {
                    \$(this).ColorPickerSetColor(\$field.val());
                }
            }, ";
        // line 160
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");

        ";
        // line 162
        if (((isset($context["widget"]) ? $context["widget"] : null) == "image")) {
            // line 163
            echo "            \$picker = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "_color');

            \$picker.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex);

                    \$('div', \$picker).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        } else {
            // line 175
            echo "            \$field.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        }
        // line 183
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 188
    public function block_genemu_jqueryrating_javascript($context, array $blocks = array())
    {
        // line 189
        ob_start();
        // line 190
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('[name=\"";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"]').rating(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 198
    public function block_genemu_jquerytokeninput_javascript($context, array $blocks = array())
    {
        // line 199
        ob_start();
        // line 200
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$tokeninput = \$('#tokeninput_";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');

            var update_hidden_sourceinput = function(item) {
                var \$val = \$tokeninput.tokenInput('get');
            ";
        // line 207
        if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : null))) {
            // line 208
            echo "                for (first in \$val) break;
                \$val = \$val[first];
            ";
        }
        // line 211
        echo "
                \$field.val(JSON.stringify(\$val));
            };

            ";
        // line 215
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            // line 216
            echo "                ";
            if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : null))) {
                // line 217
                echo "                    ";
                $context["prePopulate"] = (("[" . (isset($context["value"]) ? $context["value"] : null)) . "]");
                // line 218
                echo "                ";
            } else {
                // line 219
                echo "                    ";
                $context["prePopulate"] = (isset($context["value"]) ? $context["value"] : null);
                // line 220
                echo "                ";
            }
            // line 221
            echo "            ";
        }
        // line 222
        echo "
            var \$configs = \$.extend(";
        // line 223
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ", {
                prePopulate: ";
        // line 224
        echo (isset($context["prePopulate"]) ? $context["prePopulate"] : null);
        echo ",
                onAdd: update_hidden_sourceinput,
                onDelete: update_hidden_sourceinput
            });

            \$tokeninput.tokenInput(
            ";
        // line 230
        if ((isset($context["route_name"]) ? $context["route_name"] : null)) {
            // line 231
            echo "                '";
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : null));
            echo "'
            ";
        } else {
            // line 233
            echo "                ";
            $context["sourceChoices"] = array();
            // line 234
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 235
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : null), array(0 => array("value" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "value"), "label" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label"))));
                // line 236
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : null));
            echo "
            ";
        }
        // line 238
        echo ",
                \$configs
            );
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 246
    public function block_genemu_jqueryautocompleter_javascript($context, array $blocks = array())
    {
        // line 247
        ob_start();
        // line 248
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$autocompleter = \$('#autocompleter_";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$configs = {
                focus: function(event, ui) {
                    return false;
                },
                select: function(event, ui) {
                ";
        // line 257
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 258
            echo "                    terms = this.value.split(/,\\s*/);
                    terms.pop();
                    terms.push(ui.item.label);
                    terms.push('');
                    this.value = terms.join(', ');

                    terms = \$field.val();
                    terms = !terms?[]:JSON.parse(terms);
                    terms.push(ui.item);
                ";
        } else {
            // line 268
            echo "                    this.value = ui.item.label;
                    terms = ui.item;
                ";
        }
        // line 271
        echo "                    \$field.val(JSON.stringify(terms));

                    return false;
                }
            };

            ";
        // line 277
        if ((isset($context["route_name"]) ? $context["route_name"] : null)) {
            // line 278
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 279
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : null));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 284
            echo "                ";
            $context["sourceChoices"] = array();
            // line 285
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 286
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : null), array(0 => array("value" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "value"), "label" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label"))));
                // line 287
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : null));
            echo ";
            ";
        }
        // line 290
        echo "
                \$autocompleter.autocomplete(\$configs);

            ";
        // line 293
        if ((isset($context["free_values"]) ? $context["free_values"] : null)) {
            // line 294
            echo "                \$autocompleter.keyup(function(){
                    var val ={}
                    var fieldval = \$(this).val();
                    val['value'] = fieldval;
                    val['label'] = fieldval;

                    \$field.val(JSON.stringify(val));
                });
            ";
        }
        // line 303
        echo "
            ";
        // line 304
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 305
            echo "                var \$source = \$autocompleter.data('autocomplete').source;

                \$autocompleter.autocomplete('option', 'source', function(request, response) {
                    request.term = request.term.split(/,\\s*/).pop();

                    \$source(request, response);
                });
            ";
        }
        // line 313
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 318
    public function block_genemu_jqueryautocomplete_javascript($context, array $blocks = array())
    {
        // line 319
        ob_start();
        // line 320
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$autocompleter = \$('#";
        // line 322
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$configs = ";
        // line 323
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ";

            ";
        // line 325
        if ((isset($context["route_name"]) ? $context["route_name"] : null)) {
            // line 326
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 327
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : null));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 332
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["suggestions"]) ? $context["suggestions"] : null));
            echo ";
            ";
        }
        // line 334
        echo "
            \$autocompleter.autocomplete(\$configs);
            
            ";
        // line 337
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "minLength", array(), "any", true, true) && (0 == $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "minLength")))) {
            // line 338
            echo "                \$autocompleter.focus(function() {
                    \$(this).autocomplete(\"search\", \"\");
                });
            ";
        }
        // line 342
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 347
    public function block_genemu_jquerychosen_javascript($context, array $blocks = array())
    {
        // line 348
        ob_start();
        // line 349
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');

            ";
        // line 353
        $this->displayBlock('genemu_jquerychosen_javascript_prototype', $context, $blocks);
        // line 360
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 353
    public function block_genemu_jquerychosen_javascript_prototype($context, array $blocks = array())
    {
        // line 354
        echo "                \$field.chosen({
                    no_results_text: \"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["no_results_text"]) ? $context["no_results_text"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "\",
                    allow_single_deselect: ";
        // line 356
        echo (((isset($context["allow_single_deselect"]) ? $context["allow_single_deselect"] : null)) ? ("true") : ("false"));
        echo ",
                    disable_search_threshold: ";
        // line 357
        echo twig_escape_filter($this->env, (isset($context["disable_search_threshold"]) ? $context["disable_search_threshold"] : null), "html", null, true);
        echo "
                });
            ";
    }

    // line 365
    public function block_genemu_jquerygeolocation_javascript($context, array $blocks = array())
    {
        // line 366
        ob_start();
        // line 367
        echo "    ";
        // line 368
        echo "    ";
        if (((isset($context["map"]) ? $context["map"] : null) === true)) {
            // line 369
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("map" => (("#" . (isset($context["id"]) ? $context["id"] : null)) . "_map")));
            // line 370
            echo "    ";
        }
        // line 371
        echo "
    ";
        // line 372
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latitude", array(), "any", true, true)) {
            // line 373
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("lat" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latitude"), "vars"), "id"))));
            // line 374
            echo "    ";
        }
        // line 375
        echo "
    ";
        // line 376
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longitude", array(), "any", true, true)) {
            // line 377
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("lng" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longitude"), "vars"), "id"))));
            // line 378
            echo "    ";
        }
        // line 379
        echo "
    ";
        // line 380
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locality", array(), "any", true, true)) {
            // line 381
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("locality" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locality"), "vars"), "id"))));
            // line 382
            echo "    ";
        }
        // line 383
        echo "
    ";
        // line 384
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array(), "any", true, true)) {
            // line 385
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("country" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country"), "vars"), "id"))));
            // line 386
            echo "    ";
        }
        // line 387
        echo "
    ";
        // line 389
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["elements"]) ? $context["elements"] : null)) > 0)) {
            // line 390
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("elements" => (isset($context["elements"]) ? $context["elements"] : null)));
            // line 391
            echo "    ";
        }
        // line 392
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 395
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), "vars"), "id"), "html", null, true);
        echo "');

            \$field.addresspicker(";
        // line 397
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");

            ";
        // line 399
        if (((isset($context["map"]) ? $context["map"] : null) === true)) {
            // line 400
            echo "                var gmarker = \$field.addresspicker('marker');
                gmarker.setVisible(true);

                \$field.addresspicker('updatePosition');
            ";
        }
        // line 405
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 410
    public function block_genemu_jqueryfile_javascript($context, array $blocks = array())
    {
        // line 411
        ob_start();
        // line 412
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field = \$('#";
        // line 414
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_upload');
        ";
        // line 415
        $this->displayBlock('genemu_jqueryfile_javascript_prototype', $context, $blocks);
        // line 483
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 415
    public function block_genemu_jqueryfile_javascript_prototype($context, array $blocks = array())
    {
        // line 416
        echo "        var \$form = \$field.closest('form');
        var \$queue = \$('#";
        // line 417
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_queue');
        var \$nbQueue = 0;

        var \$configs = \$.extend(";
        // line 420
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("swf" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "swf")), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "cancelImg")), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script")), "queueID" => ((isset($context["id"]) ? $context["id"] : null) . "_queue"))));
        // line 425
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    ";
        // line 430
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 431
            echo "                        var value = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').val();
                        if (value != '') {
                            value += \",\";
                        }
                        value += data.file;
                    ";
        } else {
            // line 437
            echo "                        var value = data.file;
                    ";
        }
        // line 439
        echo "
                    \$('#";
        // line 440
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').val(value);
                    \$nbQueue--;
                } else {
                    alert('Error');
                }
            },
            onSelect: function(file) {
                \$nbQueue++;
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

    ";
        // line 454
        if (((!$this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "auto", array(), "any", true, true)) || ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "auto") === false))) {
            // line 455
            echo "        \$configs.onAllComplete = function(event, data) {
            \$form.submit();
        };

        \$form.submit(function(event) {
            if (0 === \$nbQueue) {
                return \$joinFiles();
            } else {
                \$field.uploadifyUpload();
                event.preventDefault();
            }
        });
    ";
        } else {
            // line 468
            echo "        \$form.submit(function(event) {
            return \$joinFiles();
        });
    ";
        }
        // line 472
        echo "
        var \$joinFiles = function() {
            if (\$files = \$field.data('files')) {
                \$field.val(\$files.join(','));
            }

            return true;
        }

        \$field.uploadify(\$configs);
        ";
    }

    // line 488
    public function block_genemu_jqueryimage_javascript($context, array $blocks = array())
    {
        // line 489
        ob_start();
        // line 490
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field   = \$('#";
        // line 492
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_upload');
        ";
        // line 493
        $this->displayBlock('genemu_jqueryimage_javascript_prototype', $context, $blocks);
        // line 651
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 493
    public function block_genemu_jqueryimage_javascript_prototype($context, array $blocks = array())
    {
        // line 494
        echo "        var \$form    = \$field.closest('form');
        var \$preview = \$('#";
        // line 495
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_img_preview');
        var \$options = \$('#";
        // line 496
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options');
        // Base path for apps not on DocumentRoot
        var \$basePath = '";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "folder")), "html", null, true);
        echo "';
        \$basePath = \$basePath.substr(0, \$basePath.length - '";
        // line 499
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "folder"), "html", null, true);
        echo "'.length);

        var \$coords = {};
        var \$crop = null;
        var \$ratio = 1;

        var \$configs = \$.extend(";
        // line 505
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("swf" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "swf")), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "cancelImg")), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script")), "queueID" => ((isset($context["id"]) ? $context["id"] : null) . "_queue"))));
        // line 510
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    \$('#";
        // line 515
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').val(data.file);

                    // add if and only if path is relative
                    if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                        data.thumbnail.file = \$basePath + data.thumbnail.file;
                    }

                    createCrop({
                        image:      data.image,
                        thumbnail:  data.thumbnail
                    });
                } else {
                    alert('Error');
                }
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

        var createCrop = function (data) {
            if (\$crop) {
                \$crop.destroy();
            }

            // add if and only if path is relative
            if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                data.thumbnail.file = \$basePath + data.thumbnail.file;
            }
            var \$img = new Image();

            console.log(data);
            \$(\$img).load(function() {
                ";
        // line 548
        $context["widthMax"] = (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "thumbnail", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "thumbnail"), "width")) : (500));
        // line 549
        echo "
                \$ratio = data.image.width > ";
        // line 550
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : null), "html", null, true);
        echo " ? data.image.width / ";
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : null), "html", null, true);
        echo " : 1;
                \$('.crop', \$options).hide();

                \$preview
                    .width(Math.round(data.image.width / \$ratio))
                    .height(Math.round(data.image.height / \$ratio))
                    .attr('src', this.src);

                if (!\$crop) {
                    \$options.fadeIn();
                }

                \$preview.Jcrop({
                    onSelect: checkCoords,
                    onChange: checkCoords
                }, function() {
                    \$crop = this;
                });
            }).attr('src', data.thumbnail.file);
        }

        var checkCoords = function(coords) {

            if (coords.w > 0 && coords.h > 0) {
                \$('.crop', \$options).fadeIn();

                \$coords = {
                    x: coords.x * \$ratio,
                    y: coords.y * \$ratio,
                    w: coords.w * \$ratio,
                    h: coords.h * \$ratio
                };
            } else {
                \$('.crop', \$options).fadeOut();
            }
        }

        \$('.change', \$options).click(function() {
            var \$this = \$(this);
            var \$regex = new RegExp('^\\\\b(.*?) (.*)\\\\b', 'g');
            var \$filter = \$this.attr('class').replace(\$regex, '\$1');

            var \$data = {
                filter: \$filter,
                image: \$('#";
        // line 594
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').val(),
                opacity: 0.5
            };

            if ('crop' === \$filter && !\$.isEmptyObject(\$coords)) {
                \$data = \$.extend(\$data, \$coords);
            }

            if (
                \$.inArray(\$filter, ";
        // line 603
        echo twig_jsonencode_filter((isset($context["filters"]) ? $context["filters"] : null));
        echo ") !== -1 ||
                ( 'crop' === \$filter && !\$.isEmptyObject(\$coords) )
            ) {
                \$this.addClass('loading');

                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 610
        echo $this->env->getExtension('routing')->getPath("genemu_form_image");
        echo "',
                    data: \$data,
                    dataType: 'json',
                    success: function(data) {
                        if (data.result == '1') {
                            \$('#";
        // line 615
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').val(data.file);

                            createCrop({
                                image: data.image,
                                thumbnail: \$.isEmptyObject(data.thumbnail) ? \$.extend(data.image, {
                                    file: data.file
                                }) : data.thumbnail
                            });
                        } else {
                            alert('Error');
                        }

                        \$this.removeClass('loading');
                    }
                });
            }
        });

    ";
        // line 633
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 634
            echo "        createCrop({
            thumbnail: {
                file: '";
            // line 636
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "file")) : ((isset($context["value"]) ? $context["value"] : null))), "html", null, true);
            echo "',
                width: ";
            // line 637
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "width")) : ((isset($context["width"]) ? $context["width"] : null))), "html", null, true);
            echo ",
                height: ";
            // line 638
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "height")) : ((isset($context["height"]) ? $context["height"] : null))), "html", null, true);
            echo ",
            },
            image: {
                width: ";
            // line 641
            echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
            echo ",
                height: ";
            // line 642
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
            echo "
            }
        });
    ";
        } else {
            // line 646
            echo "        \$options.hide();
    ";
        }
        // line 648
        echo "
        \$field.uploadify(\$configs);
        ";
    }

    // line 656
    public function block_genemu_jqueryselect2_javascript($context, array $blocks = array())
    {
        // line 657
        echo "    <script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$field = \$('#";
        // line 659
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');

        ";
        // line 661
        $this->displayBlock('genemu_jqueryselect2_javascript_prototype', $context, $blocks);
        // line 664
        echo "    });
    </script>
";
    }

    // line 661
    public function block_genemu_jqueryselect2_javascript_prototype($context, array $blocks = array())
    {
        // line 662
        echo "            \$field.select2(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");
        ";
    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:jquery_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1058 => 490,  1056 => 489,  1039 => 472,  1033 => 468,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  971 => 420,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  921 => 399,  916 => 397,  911 => 395,  900 => 390,  894 => 387,  891 => 386,  888 => 385,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  866 => 377,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  844 => 369,  834 => 365,  827 => 357,  819 => 355,  816 => 354,  813 => 353,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  764 => 332,  746 => 323,  738 => 320,  693 => 290,  687 => 288,  662 => 279,  659 => 278,  649 => 271,  630 => 257,  621 => 251,  617 => 250,  608 => 246,  598 => 238,  592 => 237,  539 => 218,  533 => 216,  498 => 198,  483 => 190,  478 => 188,  471 => 183,  443 => 162,  438 => 160,  388 => 133,  364 => 115,  332 => 105,  316 => 97,  223 => 94,  288 => 107,  279 => 84,  652 => 376,  641 => 368,  625 => 361,  615 => 354,  575 => 233,  565 => 324,  548 => 221,  516 => 294,  500 => 291,  486 => 286,  482 => 285,  452 => 268,  434 => 256,  344 => 193,  244 => 60,  226 => 131,  215 => 78,  549 => 182,  537 => 176,  525 => 211,  508 => 165,  491 => 157,  487 => 192,  460 => 143,  449 => 138,  436 => 132,  426 => 126,  403 => 117,  400 => 233,  308 => 86,  249 => 74,  274 => 80,  236 => 109,  319 => 98,  301 => 144,  293 => 109,  289 => 90,  277 => 136,  218 => 97,  205 => 90,  972 => 275,  966 => 273,  962 => 416,  958 => 304,  952 => 483,  949 => 300,  947 => 299,  933 => 295,  928 => 293,  925 => 292,  919 => 290,  917 => 289,  914 => 288,  908 => 286,  903 => 391,  897 => 389,  895 => 281,  892 => 280,  884 => 277,  879 => 273,  876 => 272,  873 => 271,  864 => 376,  856 => 257,  851 => 255,  847 => 370,  841 => 368,  833 => 247,  829 => 245,  823 => 356,  820 => 241,  818 => 240,  815 => 239,  812 => 238,  809 => 237,  804 => 353,  801 => 237,  798 => 236,  786 => 268,  773 => 226,  770 => 334,  766 => 224,  762 => 222,  751 => 325,  733 => 318,  726 => 313,  720 => 212,  713 => 209,  709 => 208,  695 => 205,  686 => 202,  681 => 287,  678 => 286,  676 => 385,  657 => 277,  648 => 192,  639 => 188,  632 => 258,  623 => 185,  613 => 248,  610 => 181,  597 => 342,  583 => 235,  571 => 164,  561 => 180,  544 => 229,  542 => 219,  535 => 160,  522 => 232,  520 => 208,  517 => 159,  506 => 147,  503 => 200,  495 => 289,  492 => 139,  484 => 133,  481 => 189,  477 => 129,  464 => 275,  418 => 112,  392 => 108,  375 => 152,  356 => 96,  336 => 89,  325 => 94,  299 => 112,  296 => 94,  266 => 73,  248 => 116,  228 => 83,  211 => 81,  167 => 57,  148 => 64,  118 => 23,  624 => 224,  620 => 184,  612 => 220,  607 => 349,  585 => 209,  580 => 207,  574 => 165,  566 => 203,  563 => 188,  559 => 179,  551 => 222,  545 => 220,  536 => 217,  532 => 174,  529 => 299,  526 => 234,  523 => 171,  518 => 207,  514 => 168,  511 => 203,  497 => 156,  490 => 287,  485 => 124,  463 => 117,  455 => 141,  450 => 114,  447 => 122,  415 => 121,  410 => 113,  406 => 111,  391 => 163,  385 => 132,  376 => 153,  369 => 130,  359 => 114,  354 => 101,  347 => 134,  335 => 106,  333 => 88,  320 => 122,  313 => 96,  310 => 171,  302 => 168,  284 => 128,  261 => 71,  239 => 104,  198 => 55,  192 => 85,  315 => 120,  306 => 127,  303 => 94,  292 => 91,  225 => 87,  175 => 77,  150 => 49,  12 => 36,  37 => 12,  778 => 234,  772 => 248,  769 => 247,  767 => 246,  763 => 244,  760 => 243,  748 => 242,  745 => 217,  742 => 322,  736 => 319,  729 => 235,  717 => 233,  714 => 304,  711 => 303,  700 => 294,  666 => 382,  661 => 380,  653 => 218,  650 => 217,  644 => 268,  640 => 211,  633 => 209,  599 => 215,  595 => 205,  590 => 338,  587 => 203,  584 => 202,  573 => 198,  560 => 187,  555 => 317,  553 => 184,  540 => 308,  534 => 162,  531 => 215,  528 => 173,  515 => 180,  513 => 179,  510 => 293,  501 => 199,  499 => 173,  496 => 172,  493 => 155,  475 => 169,  473 => 127,  470 => 278,  468 => 160,  459 => 273,  454 => 156,  442 => 134,  433 => 130,  422 => 147,  420 => 150,  417 => 243,  411 => 144,  408 => 142,  405 => 118,  390 => 134,  380 => 107,  366 => 106,  361 => 207,  358 => 103,  343 => 132,  340 => 136,  338 => 107,  327 => 103,  291 => 91,  286 => 89,  281 => 105,  272 => 81,  206 => 57,  113 => 41,  110 => 40,  90 => 77,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 651,  1066 => 493,  1062 => 492,  1053 => 488,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 455,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 425,  969 => 274,  965 => 417,  959 => 415,  956 => 300,  948 => 296,  944 => 295,  941 => 296,  932 => 287,  930 => 405,  926 => 285,  923 => 400,  918 => 280,  910 => 278,  906 => 392,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 384,  883 => 383,  881 => 276,  878 => 263,  871 => 259,  869 => 378,  845 => 252,  842 => 255,  839 => 367,  837 => 366,  835 => 248,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 360,  803 => 232,  799 => 351,  797 => 228,  795 => 349,  793 => 348,  791 => 271,  788 => 224,  784 => 236,  781 => 235,  776 => 212,  756 => 327,  753 => 326,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 239,  737 => 198,  734 => 237,  730 => 214,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 305,  706 => 182,  703 => 226,  701 => 206,  698 => 293,  694 => 175,  692 => 399,  689 => 203,  685 => 170,  683 => 393,  680 => 168,  675 => 165,  673 => 285,  670 => 284,  665 => 160,  663 => 196,  660 => 195,  656 => 378,  654 => 193,  651 => 153,  647 => 150,  645 => 369,  642 => 190,  638 => 210,  635 => 365,  631 => 364,  629 => 186,  626 => 139,  622 => 136,  619 => 135,  616 => 183,  611 => 247,  601 => 179,  596 => 127,  594 => 212,  591 => 124,  589 => 123,  586 => 236,  581 => 201,  579 => 332,  578 => 234,  577 => 329,  576 => 199,  572 => 204,  569 => 231,  567 => 230,  564 => 225,  558 => 224,  556 => 178,  554 => 223,  552 => 101,  550 => 163,  546 => 166,  543 => 179,  541 => 96,  538 => 161,  524 => 297,  521 => 182,  507 => 202,  504 => 292,  479 => 82,  476 => 80,  472 => 78,  467 => 125,  465 => 76,  448 => 153,  445 => 163,  441 => 120,  439 => 133,  431 => 116,  429 => 154,  425 => 152,  414 => 144,  412 => 126,  399 => 139,  397 => 110,  394 => 136,  389 => 107,  383 => 105,  377 => 129,  373 => 132,  370 => 45,  357 => 113,  349 => 34,  346 => 110,  342 => 109,  339 => 191,  330 => 104,  326 => 129,  323 => 125,  317 => 121,  290 => 79,  282 => 161,  275 => 103,  270 => 157,  263 => 72,  260 => 71,  257 => 103,  250 => 65,  245 => 83,  242 => 113,  194 => 74,  188 => 71,  186 => 82,  139 => 3,  126 => 42,  114 => 409,  200 => 54,  180 => 49,  174 => 64,  165 => 56,  146 => 49,  23 => 12,  363 => 184,  353 => 95,  350 => 111,  348 => 118,  345 => 116,  329 => 130,  324 => 102,  321 => 99,  318 => 84,  311 => 118,  307 => 155,  304 => 96,  297 => 153,  287 => 77,  276 => 138,  271 => 108,  262 => 105,  256 => 96,  197 => 70,  191 => 69,  170 => 74,  222 => 81,  190 => 50,  185 => 68,  137 => 2,  96 => 37,  212 => 60,  172 => 85,  251 => 101,  231 => 133,  195 => 84,  129 => 667,  120 => 56,  104 => 346,  100 => 36,  81 => 25,  77 => 132,  65 => 30,  97 => 246,  74 => 131,  70 => 33,  52 => 11,  184 => 48,  153 => 50,  127 => 656,  237 => 86,  232 => 84,  216 => 70,  213 => 69,  207 => 91,  202 => 79,  160 => 70,  145 => 52,  424 => 91,  421 => 244,  404 => 90,  401 => 89,  396 => 138,  386 => 106,  367 => 105,  351 => 135,  334 => 26,  331 => 96,  328 => 22,  300 => 93,  295 => 142,  280 => 127,  267 => 120,  265 => 99,  259 => 149,  255 => 68,  253 => 112,  233 => 54,  210 => 84,  178 => 18,  155 => 51,  134 => 1,  124 => 655,  83 => 32,  181 => 80,  161 => 71,  157 => 41,  152 => 92,  84 => 187,  76 => 9,  34 => 16,  58 => 22,  53 => 10,  20 => 11,  480 => 162,  474 => 150,  469 => 158,  461 => 175,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 118,  435 => 146,  430 => 255,  427 => 64,  423 => 151,  413 => 241,  409 => 132,  407 => 238,  402 => 138,  398 => 137,  393 => 230,  387 => 110,  384 => 109,  381 => 157,  379 => 124,  374 => 217,  368 => 116,  365 => 141,  362 => 39,  360 => 104,  355 => 122,  341 => 131,  337 => 97,  322 => 93,  314 => 88,  312 => 149,  309 => 117,  305 => 115,  298 => 101,  294 => 90,  285 => 111,  283 => 138,  278 => 160,  268 => 107,  264 => 74,  258 => 70,  252 => 3,  247 => 64,  241 => 59,  229 => 125,  220 => 80,  214 => 99,  177 => 43,  169 => 74,  140 => 47,  132 => 58,  128 => 58,  111 => 78,  107 => 347,  61 => 25,  273 => 85,  269 => 100,  254 => 147,  246 => 108,  243 => 89,  240 => 139,  238 => 56,  235 => 55,  230 => 53,  227 => 95,  224 => 103,  221 => 120,  219 => 101,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 59,  135 => 35,  131 => 38,  119 => 487,  108 => 48,  102 => 318,  71 => 28,  67 => 53,  63 => 24,  59 => 32,  47 => 9,  38 => 17,  94 => 245,  89 => 197,  85 => 34,  79 => 149,  75 => 30,  68 => 31,  56 => 24,  50 => 49,  35 => 11,  87 => 188,  72 => 89,  55 => 21,  201 => 35,  196 => 33,  183 => 78,  171 => 14,  166 => 100,  163 => 40,  158 => 52,  156 => 9,  151 => 61,  142 => 61,  138 => 36,  136 => 40,  123 => 54,  121 => 75,  117 => 410,  115 => 50,  105 => 39,  101 => 49,  91 => 14,  69 => 88,  66 => 25,  62 => 33,  49 => 10,  43 => 19,  41 => 18,  28 => 44,  25 => 1,  21 => 11,  31 => 14,  29 => 15,  26 => 13,  24 => 13,  19 => 11,  98 => 17,  93 => 15,  88 => 13,  78 => 31,  46 => 35,  44 => 8,  40 => 13,  32 => 10,  27 => 8,  22 => 12,  209 => 39,  203 => 122,  199 => 34,  193 => 83,  189 => 65,  187 => 87,  182 => 80,  176 => 77,  173 => 15,  168 => 13,  164 => 72,  162 => 11,  154 => 67,  149 => 60,  147 => 90,  144 => 4,  141 => 67,  133 => 46,  130 => 57,  125 => 45,  122 => 488,  116 => 26,  112 => 365,  109 => 364,  106 => 86,  103 => 46,  99 => 317,  95 => 16,  92 => 198,  86 => 43,  82 => 150,  80 => 41,  73 => 29,  64 => 52,  60 => 22,  57 => 13,  54 => 12,  51 => 21,  48 => 15,  45 => 38,  42 => 1,  39 => 13,  36 => 12,  33 => 11,  30 => 9,);
    }
}
