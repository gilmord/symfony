<?php

/* GenemuFormBundle:Form:stylesheet_layout.html.twig */
class __TwigTemplate_e010e0beedd6e99d8c7a4c8a4a9c3776631fbb309d29730077f4e4bb44e46de5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_stylesheet' => array($this, 'block_form_stylesheet'),
            'field_stylesheet' => array($this, 'block_field_stylesheet'),
            'button_stylesheet' => array($this, 'block_button_stylesheet'),
            'genemu_jquerycolor_stylesheet' => array($this, 'block_genemu_jquerycolor_stylesheet'),
            'genemu_jquerygeolocation_stylesheet' => array($this, 'block_genemu_jquerygeolocation_stylesheet'),
            'genemu_jqueryimage_stylesheet' => array($this, 'block_genemu_jqueryimage_stylesheet'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_stylesheet', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_stylesheet', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_stylesheet', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('genemu_jquerycolor_stylesheet', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('genemu_jquerygeolocation_stylesheet', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('genemu_jqueryimage_stylesheet', $context, $blocks);
    }

    // line 1
    public function block_form_stylesheet($context, array $blocks = array())
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'stylesheet');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_field_stylesheet($context, array $blocks = array())
    {
        echo "";
    }

    // line 11
    public function block_button_stylesheet($context, array $blocks = array())
    {
        echo "";
    }

    // line 13
    public function block_genemu_jquerycolor_stylesheet($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        if (((isset($context["widget"]) ? $context["widget"] : null) == "image")) {
            // line 16
            echo "    <style type=\"text/css\" media=\"screen\">
        #";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "_color {
            background: url(";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/select.png"), "html", null, true);
            echo ");
            width: 36px;
            height: 36px;
            position: relative;
            overflow: hidden;
        }

        #";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "_color div {
            background: url(";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/select.png"), "html", null, true);
            echo ") center center;
            position: absolute;
            left: 3px;
            top: 3px;
            width: 30px;
            height: 30px;
        }
    </style>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 38
    public function block_genemu_jquerygeolocation_stylesheet($context, array $blocks = array())
    {
        // line 39
        ob_start();
        // line 40
        echo "    <style type=\"text/css\" media=\"screen\">
        #";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_map {
            width: 300px;
            height: 300px;
        }
    </style>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 49
    public function block_genemu_jqueryimage_stylesheet($context, array $blocks = array())
    {
        // line 50
        ob_start();
        // line 51
        echo "    <style type=\"text/css\" media=\"screen\">
        #";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_container {
            overflow: hidden;
        }

        #";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_preview {
            overflow: hidden;
            position: relative;
        }

        #";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_preview object, #";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_overlay {
            position: absolute;
            top: 0;
            right: 0;
            text-decoration: none;
            display: block;
            z-index: 361;
            width: 19px;
            height: 19px;

            background: url(";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/edit.gif"), "html", null, true);
        echo ");
        }

        #";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_preview object {
            opacity: 0;
            z-index: 362;
        }

        #";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_container .left {
            float: left;
            position: relative;
        }

        #";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options {
            padding: 0px;
            margin: 0px;
            list-style-type: none;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 361;
        }

        #";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options li {
            background: transparent url(";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/icons.png"), "html", null, true);
        echo ");

            display: inline;
            float: left;
            width: 24px;
            height: 24px;
            cursor: pointer;
        }

        #";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options .rotate {
            background-position: 0 0;
        }

        #";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options .bw {
            background-position: 0 -24px;
        }

        #";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options .negative {
            background-position: -24px 0;
        }

        #";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options .sepia {
            background-position: -24px -24px;
        }

        #";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options .crop {
            background-position: -48px 0;
        }

        #";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options .blur {
            background-position: -48px -24px;
        }
        #";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options .loading {
            background: #FFF url(";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/ajax-loader.gif"), "html", null, true);
        echo ") no-repeat;
            padding: 6px 0;
            height: 11px;
        }
    </style>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:stylesheet_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  223 => 94,  288 => 107,  279 => 104,  652 => 376,  641 => 368,  625 => 361,  615 => 354,  575 => 328,  565 => 324,  548 => 313,  516 => 294,  500 => 291,  486 => 286,  482 => 285,  452 => 268,  434 => 256,  344 => 193,  244 => 140,  226 => 131,  215 => 78,  549 => 182,  537 => 176,  525 => 172,  508 => 165,  491 => 157,  487 => 156,  460 => 143,  449 => 138,  436 => 132,  426 => 126,  403 => 117,  400 => 233,  308 => 86,  249 => 74,  274 => 124,  236 => 109,  319 => 124,  301 => 144,  293 => 109,  289 => 163,  277 => 136,  218 => 97,  205 => 90,  972 => 275,  966 => 273,  962 => 306,  958 => 304,  952 => 301,  949 => 300,  947 => 299,  933 => 295,  928 => 293,  925 => 292,  919 => 290,  917 => 289,  914 => 288,  908 => 286,  903 => 284,  897 => 282,  895 => 281,  892 => 280,  884 => 277,  879 => 273,  876 => 272,  873 => 271,  864 => 262,  856 => 257,  851 => 255,  847 => 253,  841 => 250,  833 => 247,  829 => 245,  823 => 242,  820 => 241,  818 => 240,  815 => 239,  812 => 238,  809 => 237,  804 => 266,  801 => 237,  798 => 236,  786 => 268,  773 => 226,  770 => 225,  766 => 224,  762 => 222,  751 => 218,  733 => 215,  726 => 213,  720 => 212,  713 => 209,  709 => 208,  695 => 205,  686 => 202,  681 => 201,  678 => 390,  676 => 385,  657 => 194,  648 => 192,  639 => 188,  632 => 187,  623 => 185,  613 => 182,  610 => 181,  597 => 342,  583 => 334,  571 => 164,  561 => 180,  544 => 229,  542 => 163,  535 => 160,  522 => 232,  520 => 160,  517 => 159,  506 => 147,  503 => 146,  495 => 289,  492 => 139,  484 => 133,  481 => 132,  477 => 129,  464 => 275,  418 => 112,  392 => 108,  375 => 152,  356 => 96,  336 => 89,  325 => 94,  299 => 112,  296 => 167,  266 => 73,  248 => 116,  228 => 83,  211 => 81,  167 => 57,  148 => 64,  118 => 23,  624 => 224,  620 => 184,  612 => 220,  607 => 349,  585 => 209,  580 => 207,  574 => 165,  566 => 203,  563 => 188,  559 => 179,  551 => 199,  545 => 198,  536 => 306,  532 => 174,  529 => 299,  526 => 234,  523 => 171,  518 => 170,  514 => 168,  511 => 167,  497 => 156,  490 => 287,  485 => 124,  463 => 117,  455 => 141,  450 => 114,  447 => 122,  415 => 121,  410 => 113,  406 => 111,  391 => 163,  385 => 225,  376 => 153,  369 => 130,  359 => 144,  354 => 101,  347 => 134,  335 => 133,  333 => 88,  320 => 122,  313 => 84,  310 => 171,  302 => 168,  284 => 128,  261 => 71,  239 => 104,  198 => 55,  192 => 85,  315 => 120,  306 => 95,  303 => 94,  292 => 91,  225 => 87,  175 => 77,  150 => 49,  12 => 36,  37 => 12,  778 => 234,  772 => 248,  769 => 247,  767 => 246,  763 => 244,  760 => 243,  748 => 242,  745 => 217,  742 => 240,  736 => 238,  729 => 235,  717 => 233,  714 => 232,  711 => 231,  700 => 225,  666 => 382,  661 => 380,  653 => 218,  650 => 217,  644 => 213,  640 => 211,  633 => 209,  599 => 215,  595 => 205,  590 => 338,  587 => 203,  584 => 202,  573 => 198,  560 => 187,  555 => 317,  553 => 184,  540 => 308,  534 => 162,  531 => 161,  528 => 173,  515 => 180,  513 => 179,  510 => 293,  501 => 161,  499 => 173,  496 => 172,  493 => 155,  475 => 169,  473 => 127,  470 => 278,  468 => 160,  459 => 273,  454 => 156,  442 => 134,  433 => 130,  422 => 147,  420 => 123,  417 => 243,  411 => 120,  408 => 142,  405 => 118,  390 => 136,  380 => 107,  366 => 106,  361 => 207,  358 => 103,  343 => 132,  340 => 136,  338 => 130,  327 => 154,  291 => 99,  286 => 76,  281 => 105,  272 => 81,  206 => 57,  113 => 41,  110 => 40,  90 => 77,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 335,  1066 => 334,  1062 => 333,  1053 => 332,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 319,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 304,  969 => 274,  965 => 302,  959 => 301,  956 => 300,  948 => 296,  944 => 295,  941 => 296,  932 => 287,  930 => 294,  926 => 285,  923 => 284,  918 => 280,  910 => 278,  906 => 285,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 278,  883 => 265,  881 => 276,  878 => 263,  871 => 259,  869 => 265,  845 => 252,  842 => 255,  839 => 253,  837 => 252,  835 => 248,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 233,  803 => 232,  799 => 229,  797 => 228,  795 => 227,  793 => 307,  791 => 271,  788 => 224,  784 => 236,  781 => 235,  776 => 212,  756 => 221,  753 => 206,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 239,  737 => 198,  734 => 237,  730 => 214,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 185,  706 => 182,  703 => 226,  701 => 206,  698 => 178,  694 => 175,  692 => 399,  689 => 203,  685 => 170,  683 => 393,  680 => 168,  675 => 165,  673 => 198,  670 => 197,  665 => 160,  663 => 196,  660 => 195,  656 => 378,  654 => 193,  651 => 153,  647 => 150,  645 => 369,  642 => 190,  638 => 210,  635 => 365,  631 => 364,  629 => 186,  626 => 139,  622 => 136,  619 => 135,  616 => 183,  611 => 129,  601 => 179,  596 => 127,  594 => 212,  591 => 124,  589 => 123,  586 => 122,  581 => 201,  579 => 332,  578 => 200,  577 => 329,  576 => 199,  572 => 204,  569 => 325,  567 => 228,  564 => 225,  558 => 186,  556 => 178,  554 => 102,  552 => 101,  550 => 163,  546 => 166,  543 => 179,  541 => 96,  538 => 161,  524 => 297,  521 => 182,  507 => 165,  504 => 292,  479 => 82,  476 => 80,  472 => 78,  467 => 125,  465 => 76,  448 => 153,  445 => 152,  441 => 120,  439 => 133,  431 => 116,  429 => 148,  425 => 63,  414 => 144,  412 => 126,  399 => 139,  397 => 110,  394 => 109,  389 => 107,  383 => 105,  377 => 129,  373 => 132,  370 => 45,  357 => 37,  349 => 34,  346 => 93,  342 => 91,  339 => 191,  330 => 103,  326 => 129,  323 => 125,  317 => 121,  290 => 79,  282 => 161,  275 => 103,  270 => 157,  263 => 4,  260 => 116,  257 => 103,  250 => 93,  245 => 83,  242 => 113,  194 => 74,  188 => 71,  186 => 82,  139 => 41,  126 => 42,  114 => 71,  200 => 54,  180 => 49,  174 => 64,  165 => 56,  146 => 49,  23 => 12,  363 => 184,  353 => 95,  350 => 94,  348 => 118,  345 => 116,  329 => 130,  324 => 179,  321 => 152,  318 => 84,  311 => 118,  307 => 155,  304 => 85,  297 => 153,  287 => 77,  276 => 138,  271 => 108,  262 => 105,  256 => 96,  197 => 70,  191 => 69,  170 => 74,  222 => 81,  190 => 50,  185 => 68,  137 => 59,  96 => 37,  212 => 60,  172 => 85,  251 => 101,  231 => 133,  195 => 84,  129 => 57,  120 => 56,  104 => 67,  100 => 36,  81 => 25,  77 => 29,  65 => 30,  97 => 63,  74 => 34,  70 => 33,  52 => 17,  184 => 48,  153 => 50,  127 => 32,  237 => 86,  232 => 84,  216 => 70,  213 => 69,  207 => 91,  202 => 79,  160 => 70,  145 => 52,  424 => 91,  421 => 244,  404 => 90,  401 => 89,  396 => 138,  386 => 106,  367 => 105,  351 => 135,  334 => 26,  331 => 96,  328 => 22,  300 => 93,  295 => 142,  280 => 127,  267 => 120,  265 => 99,  259 => 149,  255 => 284,  253 => 112,  233 => 71,  210 => 84,  178 => 48,  155 => 51,  134 => 39,  124 => 31,  83 => 32,  181 => 80,  161 => 71,  157 => 41,  152 => 92,  84 => 32,  76 => 9,  34 => 16,  58 => 22,  53 => 10,  20 => 11,  480 => 162,  474 => 150,  469 => 158,  461 => 123,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 118,  435 => 146,  430 => 255,  427 => 64,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 110,  384 => 109,  381 => 157,  379 => 154,  374 => 217,  368 => 126,  365 => 141,  362 => 39,  360 => 104,  355 => 122,  341 => 131,  337 => 97,  322 => 93,  314 => 88,  312 => 149,  309 => 117,  305 => 115,  298 => 101,  294 => 90,  285 => 111,  283 => 138,  278 => 160,  268 => 107,  264 => 74,  258 => 70,  252 => 3,  247 => 75,  241 => 133,  229 => 125,  220 => 80,  214 => 99,  177 => 43,  169 => 74,  140 => 47,  132 => 58,  128 => 58,  111 => 78,  107 => 52,  61 => 25,  273 => 85,  269 => 100,  254 => 147,  246 => 108,  243 => 89,  240 => 139,  238 => 84,  235 => 63,  230 => 106,  227 => 95,  224 => 103,  221 => 120,  219 => 101,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 59,  135 => 35,  131 => 38,  119 => 28,  108 => 48,  102 => 18,  71 => 28,  67 => 27,  63 => 24,  59 => 3,  47 => 48,  38 => 17,  94 => 39,  89 => 40,  85 => 34,  79 => 37,  75 => 30,  68 => 31,  56 => 24,  50 => 49,  35 => 11,  87 => 65,  72 => 29,  55 => 21,  201 => 72,  196 => 68,  183 => 78,  171 => 63,  166 => 100,  163 => 40,  158 => 52,  156 => 68,  151 => 61,  142 => 61,  138 => 36,  136 => 40,  123 => 54,  121 => 75,  117 => 51,  115 => 50,  105 => 39,  101 => 49,  91 => 14,  69 => 28,  66 => 25,  62 => 24,  49 => 21,  43 => 19,  41 => 18,  28 => 44,  25 => 1,  21 => 11,  31 => 14,  29 => 15,  26 => 13,  24 => 13,  19 => 11,  98 => 17,  93 => 15,  88 => 13,  78 => 31,  46 => 35,  44 => 19,  40 => 13,  32 => 10,  27 => 8,  22 => 12,  209 => 96,  203 => 122,  199 => 86,  193 => 83,  189 => 65,  187 => 87,  182 => 80,  176 => 77,  173 => 61,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 60,  147 => 90,  144 => 62,  141 => 67,  133 => 46,  130 => 57,  125 => 45,  122 => 44,  116 => 26,  112 => 25,  109 => 69,  106 => 86,  103 => 46,  99 => 38,  95 => 16,  92 => 36,  86 => 43,  82 => 11,  80 => 41,  73 => 29,  64 => 4,  60 => 22,  57 => 2,  54 => 1,  51 => 21,  48 => 15,  45 => 38,  42 => 37,  39 => 13,  36 => 12,  33 => 11,  30 => 9,);
    }
}
