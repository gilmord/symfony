<?php

/* GenemuFormBundle:Form:div_layout.html.twig */
class __TwigTemplate_4fb3e7bb4f45c98c5224024f88ab546e0ffe59e5dac3f29d2fda8646e7d468ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'genemu_captcha_widget' => array($this, 'block_genemu_captcha_widget'),
            'genemu_recaptcha_widget' => array($this, 'block_genemu_recaptcha_widget'),
            'genemu_jquerydate_widget' => array($this, 'block_genemu_jquerydate_widget'),
            'genemu_jqueryslider_widget' => array($this, 'block_genemu_jqueryslider_widget'),
            'genemu_jqueryautocompleter_widget' => array($this, 'block_genemu_jqueryautocompleter_widget'),
            'genemu_jquerychosen_widget' => array($this, 'block_genemu_jquerychosen_widget'),
            'genemu_jquerygeolocation_widget' => array($this, 'block_genemu_jquerygeolocation_widget'),
            'genemu_jqueryfile_widget' => array($this, 'block_genemu_jqueryfile_widget'),
            'genemu_jquerycolor_widget' => array($this, 'block_genemu_jquerycolor_widget'),
            'genemu_jqueryrating_widget' => array($this, 'block_genemu_jqueryrating_widget'),
            'genemu_jqueryimage_widget' => array($this, 'block_genemu_jqueryimage_widget'),
            'genemu_jquerytokeninput_widget' => array($this, 'block_genemu_jquerytokeninput_widget'),
            'genemu_plain_widget' => array($this, 'block_genemu_plain_widget'),
            'genemu_jqueryselect2_hidden_row' => array($this, 'block_genemu_jqueryselect2_hidden_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('genemu_captcha_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('genemu_recaptcha_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('genemu_jquerydate_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('genemu_jqueryslider_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('genemu_jqueryautocompleter_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('genemu_jquerychosen_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('genemu_jquerygeolocation_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('genemu_jqueryfile_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('genemu_jquerycolor_widget', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('genemu_jqueryrating_widget', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('genemu_jqueryimage_widget', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('genemu_jquerytokeninput_widget', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('genemu_plain_widget', $context, $blocks);
        // line 167
        echo "
";
        // line 168
        $this->displayBlock('genemu_jqueryselect2_hidden_row', $context, $blocks);
    }

    // line 1
    public function block_genemu_captcha_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : null), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo "\" />
    ";
        // line 4
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 8
    public function block_genemu_recaptcha_widget($context, array $blocks = array())
    {
        // line 9
        ob_start();
        // line 10
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_div\" style=\"display: none;\"></div>
    <noscript>
        <iframe src=\"http://www.google.com/recaptcha/api/noscript?k=";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : null), "html", null, true);
        echo "\" width=\"500\" height=\"300\" frameborder=\"0\"></iframe>
        <br />
        <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
        <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\" />
    </noscript>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 20
    public function block_genemu_jquerydate_widget($context, array $blocks = array())
    {
        // line 21
        ob_start();
        // line 22
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 23
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 25
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 26
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 27
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year"), 'widget'), "{{ month }}" =>             // line 28
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month"), 'widget'), "{{ day }}" =>             // line 29
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day"), 'widget')));
            // line 30
            echo "

            ";
            // line 32
            $context["attr"] = twig_array_merge(array("size" => 10), (isset($context["attr"]) ? $context["attr"] : null));
            // line 33
            echo "            ";
            $context["id"] = ("datepicker_" . (isset($context["id"]) ? $context["id"] : null));
            // line 34
            echo "            ";
            $context["value"] = "";
            // line 35
            echo "            ";
            $context["full_name"] = ("datepicker_" . (isset($context["full_name"]) ? $context["full_name"] : null));
            // line 36
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 42
    public function block_genemu_jqueryslider_widget($context, array $blocks = array())
    {
        // line 43
        ob_start();
        // line 44
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
    <div id=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_slider\"></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 49
    public function block_genemu_jqueryautocompleter_widget($context, array $blocks = array())
    {
        // line 50
        ob_start();
        // line 51
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

    ";
        // line 53
        $context["id"] = ("autocompleter_" . (isset($context["id"]) ? $context["id"] : null));
        // line 54
        echo "    ";
        $context["full_name"] = ("autocompleter_" . (isset($context["full_name"]) ? $context["full_name"] : null));
        // line 55
        echo "    ";
        $context["value"] = (isset($context["autocompleter_value"]) ? $context["autocompleter_value"] : null);
        // line 56
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 60
    public function block_genemu_jquerychosen_widget($context, array $blocks = array())
    {
        // line 61
        ob_start();
        // line 62
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-placeholder" => (isset($context["empty_value"]) ? $context["empty_value"] : null), "class" => "chzn-select"), (isset($context["attr"]) ? $context["attr"] : null));
        // line 66
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 70
    public function block_genemu_jquerygeolocation_widget($context, array $blocks = array())
    {
        // line 71
        ob_start();
        // line 72
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

    ";
        // line 74
        if (((isset($context["map"]) ? $context["map"] : null) === true)) {
            // line 75
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "_map\">&nbsp;</div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 80
    public function block_genemu_jqueryfile_widget($context, array $blocks = array())
    {
        // line 81
        ob_start();
        // line 82
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
    <div id=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_upload\"></div>
    <div class=\"queue\">
        <div id=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_queue\"></div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 90
    public function block_genemu_jquerycolor_widget($context, array $blocks = array())
    {
        // line 91
        ob_start();
        // line 92
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "image")) {
            // line 93
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "_color\" ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div";
            // line 94
            if ((isset($context["value"]) ? $context["value"] : null)) {
                echo " style=\"background-color: #";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo ";\"";
            }
            echo ">&nbsp;</div>
            ";
            // line 95
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 98
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 103
    public function block_genemu_jqueryrating_widget($context, array $blocks = array())
    {
        // line 104
        ob_start();
        // line 105
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 107
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 113
    public function block_genemu_jqueryimage_widget($context, array $blocks = array())
    {
        // line 114
        ob_start();
        // line 115
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_container\">
        <div class=\"left\">
            <div id=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_preview\">
                ";
        // line 118
        $context["type"] = "hidden";
        // line 119
        echo "                ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

                <a id=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_overlay\" href=\"#\">&nbsp;</a>

                ";
        // line 123
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 124
            echo "                    ";
            $context["widthMax"] = ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "width")) : (500));
            // line 125
            echo "                    ";
            $context["ratio"] = ((((isset($context["width"]) ? $context["width"] : null) > (isset($context["widthMax"]) ? $context["widthMax"] : null))) ? (((isset($context["width"]) ? $context["width"] : null) / (isset($context["widthMax"]) ? $context["widthMax"] : null))) : (1));
            // line 126
            echo "                    ";
            $context["asset"] = $this->env->getExtension('assets')->getAssetUrl(((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "file")) : ((isset($context["value"]) ? $context["value"] : null))));
            // line 127
            echo "                    ";
            $context["width"] = ((isset($context["width"]) ? $context["width"] : null) / (isset($context["ratio"]) ? $context["ratio"] : null));
            // line 128
            echo "                    ";
            $context["height"] = ((isset($context["height"]) ? $context["height"] : null) / (isset($context["ratio"]) ? $context["ratio"] : null));
            // line 129
            echo "                ";
        } else {
            // line 130
            echo "                    ";
            $context["asset"] = $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/default.png");
            // line 131
            echo "                    ";
            $context["width"] = 96;
            // line 132
            echo "                    ";
            $context["height"] = 96;
            // line 133
            echo "                ";
        }
        // line 134
        echo "
                <img id=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_img_preview\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset"]) ? $context["asset"] : null), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "\" />
            </div>
            <ul id=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options\" class=\"options\">
                ";
        // line 138
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) ? $context["filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 139
            echo "                    <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["filter"]) ? $context["filter"] : null), "html", null, true);
            echo " change\"></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "            </ul>
            <div id=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_upload\"></div>
            <div class=\"queue\">
                <div id=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_queue\"></div>
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 151
    public function block_genemu_jquerytokeninput_widget($context, array $blocks = array())
    {
        // line 152
        ob_start();
        // line 153
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

";
        // line 155
        $context["id"] = ("tokeninput_" . (isset($context["id"]) ? $context["id"] : null));
        // line 156
        $context["full_name"] = ("tokeninput_" . (isset($context["full_name"]) ? $context["full_name"] : null));
        // line 157
        $context["value"] = (isset($context["tokeninput_value"]) ? $context["tokeninput_value"] : null);
        // line 158
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 162
    public function block_genemu_plain_widget($context, array $blocks = array())
    {
        // line 163
        echo "    <div ";
        $this->displayBlock("container_attributes", $context, $blocks);
        echo ">
        <p ";
        // line 164
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null));
        echo "</p>
    </div>
";
    }

    // line 168
    public function block_genemu_jqueryselect2_hidden_row($context, array $blocks = array())
    {
        // line 169
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  519 => 168,  505 => 163,  502 => 162,  489 => 155,  234 => 56,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1058 => 490,  1056 => 489,  1039 => 472,  1033 => 468,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  971 => 420,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  921 => 399,  916 => 397,  911 => 395,  900 => 390,  894 => 387,  891 => 386,  888 => 385,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  866 => 377,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  844 => 369,  834 => 365,  827 => 357,  819 => 355,  816 => 354,  813 => 353,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  764 => 332,  746 => 323,  738 => 320,  693 => 290,  687 => 288,  662 => 279,  659 => 278,  649 => 271,  630 => 257,  621 => 251,  617 => 250,  608 => 246,  598 => 238,  592 => 237,  539 => 218,  533 => 216,  498 => 198,  483 => 190,  478 => 188,  471 => 183,  443 => 162,  438 => 160,  388 => 133,  364 => 109,  332 => 98,  316 => 97,  223 => 94,  288 => 107,  279 => 84,  652 => 376,  641 => 368,  625 => 361,  615 => 354,  575 => 233,  565 => 324,  548 => 221,  516 => 294,  500 => 291,  486 => 286,  482 => 152,  452 => 139,  434 => 256,  344 => 104,  244 => 60,  226 => 53,  215 => 49,  549 => 182,  537 => 176,  525 => 211,  508 => 165,  491 => 156,  487 => 192,  460 => 143,  449 => 138,  436 => 132,  426 => 126,  403 => 125,  400 => 124,  308 => 92,  249 => 74,  274 => 80,  236 => 109,  319 => 98,  301 => 144,  293 => 109,  289 => 90,  277 => 136,  218 => 50,  205 => 90,  972 => 275,  966 => 273,  962 => 416,  958 => 304,  952 => 483,  949 => 300,  947 => 299,  933 => 295,  928 => 293,  925 => 292,  919 => 290,  917 => 289,  914 => 288,  908 => 286,  903 => 391,  897 => 389,  895 => 281,  892 => 280,  884 => 277,  879 => 273,  876 => 272,  873 => 271,  864 => 376,  856 => 257,  851 => 255,  847 => 370,  841 => 368,  833 => 247,  829 => 245,  823 => 356,  820 => 241,  818 => 240,  815 => 239,  812 => 238,  809 => 237,  804 => 353,  801 => 237,  798 => 236,  786 => 268,  773 => 226,  770 => 334,  766 => 224,  762 => 222,  751 => 325,  733 => 318,  726 => 313,  720 => 212,  713 => 209,  709 => 208,  695 => 205,  686 => 202,  681 => 287,  678 => 286,  676 => 385,  657 => 277,  648 => 192,  639 => 188,  632 => 258,  623 => 185,  613 => 248,  610 => 181,  597 => 342,  583 => 235,  571 => 164,  561 => 180,  544 => 229,  542 => 219,  535 => 160,  522 => 169,  520 => 208,  517 => 159,  506 => 147,  503 => 200,  495 => 158,  492 => 139,  484 => 153,  481 => 189,  477 => 129,  464 => 142,  418 => 130,  392 => 108,  375 => 115,  356 => 96,  336 => 89,  325 => 94,  299 => 112,  296 => 94,  266 => 73,  248 => 116,  228 => 54,  211 => 81,  167 => 57,  148 => 64,  118 => 23,  624 => 224,  620 => 184,  612 => 220,  607 => 349,  585 => 209,  580 => 207,  574 => 165,  566 => 203,  563 => 188,  559 => 179,  551 => 222,  545 => 220,  536 => 217,  532 => 174,  529 => 299,  526 => 234,  523 => 171,  518 => 207,  514 => 168,  511 => 203,  497 => 156,  490 => 287,  485 => 124,  463 => 117,  455 => 141,  450 => 114,  447 => 122,  415 => 129,  410 => 113,  406 => 126,  391 => 163,  385 => 118,  376 => 153,  369 => 130,  359 => 114,  354 => 101,  347 => 134,  335 => 106,  333 => 88,  320 => 122,  313 => 96,  310 => 171,  302 => 168,  284 => 128,  261 => 71,  239 => 104,  198 => 42,  192 => 85,  315 => 120,  306 => 91,  303 => 90,  292 => 91,  225 => 87,  175 => 77,  150 => 49,  12 => 36,  37 => 12,  778 => 234,  772 => 248,  769 => 247,  767 => 246,  763 => 244,  760 => 243,  748 => 242,  745 => 217,  742 => 322,  736 => 319,  729 => 235,  717 => 233,  714 => 304,  711 => 303,  700 => 294,  666 => 382,  661 => 380,  653 => 218,  650 => 217,  644 => 268,  640 => 211,  633 => 209,  599 => 215,  595 => 205,  590 => 338,  587 => 203,  584 => 202,  573 => 198,  560 => 187,  555 => 317,  553 => 184,  540 => 308,  534 => 162,  531 => 215,  528 => 173,  515 => 180,  513 => 179,  510 => 164,  501 => 199,  499 => 173,  496 => 172,  493 => 157,  475 => 169,  473 => 127,  470 => 278,  468 => 160,  459 => 273,  454 => 156,  442 => 134,  433 => 135,  422 => 147,  420 => 150,  417 => 243,  411 => 144,  408 => 142,  405 => 118,  390 => 134,  380 => 107,  366 => 106,  361 => 207,  358 => 103,  343 => 132,  340 => 136,  338 => 107,  327 => 103,  291 => 91,  286 => 89,  281 => 105,  272 => 81,  206 => 57,  113 => 41,  110 => 40,  90 => 161,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 651,  1066 => 493,  1062 => 492,  1053 => 488,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 455,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 425,  969 => 274,  965 => 417,  959 => 415,  956 => 300,  948 => 296,  944 => 295,  941 => 296,  932 => 287,  930 => 405,  926 => 285,  923 => 400,  918 => 280,  910 => 278,  906 => 392,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 384,  883 => 383,  881 => 276,  878 => 263,  871 => 259,  869 => 378,  845 => 252,  842 => 255,  839 => 367,  837 => 366,  835 => 248,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 360,  803 => 232,  799 => 351,  797 => 228,  795 => 349,  793 => 348,  791 => 271,  788 => 224,  784 => 236,  781 => 235,  776 => 212,  756 => 327,  753 => 326,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 239,  737 => 198,  734 => 237,  730 => 214,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 305,  706 => 182,  703 => 226,  701 => 206,  698 => 293,  694 => 175,  692 => 399,  689 => 203,  685 => 170,  683 => 393,  680 => 168,  675 => 165,  673 => 285,  670 => 284,  665 => 160,  663 => 196,  660 => 195,  656 => 378,  654 => 193,  651 => 153,  647 => 150,  645 => 369,  642 => 190,  638 => 210,  635 => 365,  631 => 364,  629 => 186,  626 => 139,  622 => 136,  619 => 135,  616 => 183,  611 => 247,  601 => 179,  596 => 127,  594 => 212,  591 => 124,  589 => 123,  586 => 236,  581 => 201,  579 => 332,  578 => 234,  577 => 329,  576 => 199,  572 => 204,  569 => 231,  567 => 230,  564 => 225,  558 => 224,  556 => 178,  554 => 223,  552 => 101,  550 => 163,  546 => 166,  543 => 179,  541 => 96,  538 => 161,  524 => 297,  521 => 182,  507 => 202,  504 => 292,  479 => 151,  476 => 80,  472 => 78,  467 => 125,  465 => 76,  448 => 138,  445 => 163,  441 => 120,  439 => 133,  431 => 116,  429 => 154,  425 => 152,  414 => 144,  412 => 128,  399 => 139,  397 => 110,  394 => 136,  389 => 107,  383 => 105,  377 => 129,  373 => 114,  370 => 113,  357 => 113,  349 => 34,  346 => 105,  342 => 109,  339 => 191,  330 => 104,  326 => 95,  323 => 125,  317 => 121,  290 => 83,  282 => 161,  275 => 103,  270 => 157,  263 => 72,  260 => 71,  257 => 103,  250 => 66,  245 => 61,  242 => 60,  194 => 74,  188 => 36,  186 => 82,  139 => 3,  126 => 42,  114 => 409,  200 => 54,  180 => 49,  174 => 64,  165 => 56,  146 => 49,  23 => 12,  363 => 184,  353 => 95,  350 => 111,  348 => 118,  345 => 116,  329 => 130,  324 => 102,  321 => 99,  318 => 94,  311 => 93,  307 => 155,  304 => 96,  297 => 153,  287 => 77,  276 => 138,  271 => 75,  262 => 105,  256 => 96,  197 => 70,  191 => 69,  170 => 28,  222 => 81,  190 => 50,  185 => 35,  137 => 2,  96 => 37,  212 => 60,  172 => 85,  251 => 101,  231 => 55,  195 => 84,  129 => 667,  120 => 4,  104 => 346,  100 => 36,  81 => 25,  77 => 132,  65 => 79,  97 => 246,  74 => 131,  70 => 89,  52 => 11,  184 => 48,  153 => 50,  127 => 8,  237 => 86,  232 => 84,  216 => 70,  213 => 69,  207 => 91,  202 => 79,  160 => 70,  145 => 52,  424 => 132,  421 => 131,  404 => 90,  401 => 89,  396 => 138,  386 => 106,  367 => 105,  351 => 106,  334 => 26,  331 => 96,  328 => 22,  300 => 93,  295 => 85,  280 => 80,  267 => 120,  265 => 99,  259 => 149,  255 => 68,  253 => 112,  233 => 54,  210 => 84,  178 => 18,  155 => 51,  134 => 1,  124 => 655,  83 => 113,  181 => 80,  161 => 71,  157 => 23,  152 => 21,  84 => 187,  76 => 9,  34 => 16,  58 => 60,  53 => 49,  20 => 11,  480 => 162,  474 => 150,  469 => 144,  461 => 141,  457 => 153,  453 => 151,  444 => 137,  440 => 148,  437 => 118,  435 => 146,  430 => 134,  427 => 133,  423 => 151,  413 => 241,  409 => 127,  407 => 238,  402 => 138,  398 => 123,  393 => 121,  387 => 119,  384 => 109,  381 => 117,  379 => 124,  374 => 217,  368 => 116,  365 => 141,  362 => 39,  360 => 104,  355 => 107,  341 => 103,  337 => 97,  322 => 93,  314 => 88,  312 => 149,  309 => 117,  305 => 115,  298 => 101,  294 => 90,  285 => 82,  283 => 81,  278 => 160,  268 => 107,  264 => 74,  258 => 70,  252 => 3,  247 => 62,  241 => 59,  229 => 125,  220 => 51,  214 => 99,  177 => 32,  169 => 27,  140 => 47,  132 => 10,  128 => 58,  111 => 78,  107 => 3,  61 => 25,  273 => 85,  269 => 74,  254 => 147,  246 => 108,  243 => 89,  240 => 139,  238 => 56,  235 => 55,  230 => 53,  227 => 95,  224 => 103,  221 => 120,  219 => 101,  217 => 79,  208 => 45,  204 => 73,  179 => 33,  159 => 70,  143 => 59,  135 => 35,  131 => 38,  119 => 487,  108 => 48,  102 => 1,  71 => 28,  67 => 53,  63 => 70,  59 => 32,  47 => 9,  38 => 8,  94 => 245,  89 => 197,  85 => 150,  79 => 149,  75 => 102,  68 => 80,  56 => 24,  50 => 48,  35 => 7,  87 => 188,  72 => 89,  55 => 59,  201 => 43,  196 => 33,  183 => 78,  171 => 29,  166 => 100,  163 => 25,  158 => 52,  156 => 9,  151 => 61,  142 => 61,  138 => 12,  136 => 40,  123 => 54,  121 => 75,  117 => 410,  115 => 50,  105 => 2,  101 => 49,  91 => 14,  69 => 88,  66 => 25,  62 => 33,  49 => 10,  43 => 20,  41 => 18,  28 => 44,  25 => 1,  21 => 11,  31 => 14,  29 => 15,  26 => 13,  24 => 13,  19 => 11,  98 => 168,  93 => 162,  88 => 151,  78 => 103,  46 => 35,  44 => 8,  40 => 19,  32 => 10,  27 => 8,  22 => 12,  209 => 39,  203 => 44,  199 => 34,  193 => 83,  189 => 65,  187 => 87,  182 => 34,  176 => 77,  173 => 30,  168 => 26,  164 => 72,  162 => 11,  154 => 22,  149 => 20,  147 => 90,  144 => 4,  141 => 67,  133 => 46,  130 => 9,  125 => 45,  122 => 488,  116 => 26,  112 => 365,  109 => 364,  106 => 86,  103 => 46,  99 => 317,  95 => 167,  92 => 198,  86 => 43,  82 => 150,  80 => 112,  73 => 90,  64 => 52,  60 => 69,  57 => 13,  54 => 12,  51 => 21,  48 => 42,  45 => 41,  42 => 1,  39 => 13,  36 => 12,  33 => 1,  30 => 9,);
    }
}
