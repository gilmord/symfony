<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_7e86a28dd6d6e54740da45fee61c61dcfee59445975153e36adfb191d97af13b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : null));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : null), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "catalogue"));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "safe")) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 98,  306 => 95,  303 => 94,  292 => 91,  225 => 67,  175 => 45,  150 => 56,  12 => 36,  37 => 16,  778 => 251,  772 => 248,  769 => 247,  767 => 246,  763 => 244,  760 => 243,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  729 => 235,  717 => 233,  714 => 232,  711 => 231,  700 => 225,  666 => 222,  661 => 220,  653 => 218,  650 => 217,  644 => 213,  640 => 211,  633 => 209,  599 => 206,  595 => 205,  590 => 204,  587 => 203,  584 => 202,  573 => 198,  560 => 191,  555 => 189,  553 => 188,  540 => 164,  534 => 162,  531 => 161,  528 => 160,  515 => 180,  513 => 179,  510 => 178,  501 => 174,  499 => 173,  496 => 172,  493 => 171,  475 => 169,  473 => 168,  470 => 167,  468 => 160,  459 => 159,  454 => 156,  442 => 151,  433 => 149,  422 => 147,  420 => 146,  417 => 145,  411 => 143,  408 => 142,  405 => 141,  390 => 136,  380 => 130,  366 => 125,  361 => 124,  358 => 123,  343 => 115,  340 => 114,  338 => 113,  327 => 102,  291 => 99,  286 => 98,  281 => 96,  272 => 91,  206 => 57,  113 => 44,  110 => 41,  90 => 24,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 335,  1066 => 334,  1062 => 333,  1053 => 332,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 319,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 304,  969 => 303,  965 => 302,  959 => 301,  956 => 300,  948 => 296,  944 => 295,  941 => 294,  932 => 287,  930 => 286,  926 => 285,  923 => 284,  918 => 280,  910 => 278,  906 => 277,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 267,  883 => 265,  881 => 264,  878 => 263,  871 => 259,  869 => 258,  845 => 257,  842 => 255,  839 => 253,  837 => 252,  835 => 251,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 233,  803 => 232,  799 => 229,  797 => 228,  795 => 227,  793 => 226,  791 => 225,  788 => 224,  784 => 221,  781 => 216,  776 => 212,  756 => 208,  753 => 206,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 239,  737 => 198,  734 => 237,  730 => 192,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 185,  706 => 182,  703 => 226,  701 => 179,  698 => 178,  694 => 175,  692 => 174,  689 => 173,  685 => 170,  683 => 223,  680 => 168,  675 => 165,  673 => 164,  670 => 163,  665 => 160,  663 => 159,  660 => 158,  656 => 219,  654 => 154,  651 => 153,  647 => 150,  645 => 149,  642 => 148,  638 => 210,  635 => 144,  631 => 141,  629 => 140,  626 => 139,  622 => 136,  619 => 135,  616 => 207,  611 => 129,  601 => 128,  596 => 127,  594 => 126,  591 => 124,  589 => 123,  586 => 122,  581 => 201,  579 => 116,  578 => 200,  577 => 114,  576 => 199,  572 => 112,  569 => 110,  567 => 109,  564 => 193,  558 => 190,  556 => 103,  554 => 102,  552 => 101,  550 => 187,  546 => 166,  543 => 97,  541 => 96,  538 => 95,  524 => 92,  521 => 182,  507 => 88,  504 => 175,  479 => 82,  476 => 80,  472 => 78,  467 => 77,  465 => 76,  448 => 153,  445 => 152,  441 => 71,  439 => 150,  431 => 66,  429 => 148,  425 => 63,  414 => 144,  412 => 59,  399 => 139,  397 => 55,  394 => 54,  389 => 51,  383 => 49,  377 => 129,  373 => 46,  370 => 45,  357 => 37,  349 => 34,  346 => 33,  342 => 30,  339 => 28,  330 => 103,  326 => 21,  323 => 19,  317 => 107,  290 => 90,  282 => 3,  275 => 86,  270 => 84,  263 => 294,  260 => 293,  257 => 291,  250 => 274,  245 => 83,  242 => 82,  194 => 52,  188 => 194,  186 => 190,  139 => 51,  126 => 24,  114 => 50,  200 => 70,  180 => 66,  174 => 64,  165 => 61,  146 => 147,  23 => 4,  363 => 184,  353 => 177,  350 => 176,  348 => 118,  345 => 116,  329 => 166,  324 => 110,  321 => 100,  318 => 162,  311 => 158,  307 => 104,  304 => 103,  297 => 153,  287 => 89,  276 => 138,  271 => 136,  262 => 81,  256 => 79,  197 => 72,  191 => 196,  170 => 84,  222 => 66,  190 => 49,  185 => 63,  137 => 29,  96 => 44,  212 => 76,  172 => 85,  251 => 130,  231 => 69,  195 => 106,  129 => 25,  120 => 46,  104 => 40,  100 => 57,  81 => 32,  77 => 30,  65 => 25,  97 => 41,  74 => 29,  70 => 27,  52 => 11,  184 => 48,  153 => 55,  127 => 48,  237 => 71,  232 => 78,  216 => 107,  213 => 106,  207 => 216,  202 => 55,  160 => 57,  145 => 54,  424 => 198,  421 => 197,  404 => 58,  401 => 57,  396 => 138,  386 => 189,  367 => 176,  351 => 120,  334 => 26,  331 => 160,  328 => 22,  300 => 93,  295 => 100,  280 => 87,  267 => 226,  265 => 299,  259 => 87,  255 => 284,  253 => 78,  233 => 82,  210 => 108,  178 => 46,  155 => 77,  134 => 28,  124 => 47,  83 => 32,  181 => 185,  161 => 57,  157 => 56,  152 => 61,  84 => 32,  76 => 18,  34 => 15,  58 => 22,  53 => 22,  20 => 1,  480 => 162,  474 => 79,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 69,  435 => 146,  430 => 144,  427 => 64,  423 => 62,  413 => 134,  409 => 132,  407 => 131,  402 => 140,  398 => 197,  393 => 137,  387 => 122,  384 => 121,  381 => 48,  379 => 119,  374 => 128,  368 => 126,  365 => 41,  362 => 39,  360 => 38,  355 => 122,  341 => 105,  337 => 27,  322 => 101,  314 => 16,  312 => 97,  309 => 97,  305 => 95,  298 => 101,  294 => 90,  285 => 4,  283 => 97,  278 => 95,  268 => 300,  264 => 82,  258 => 81,  252 => 85,  247 => 75,  241 => 133,  229 => 125,  220 => 65,  214 => 63,  177 => 65,  169 => 62,  140 => 51,  132 => 57,  128 => 47,  111 => 90,  107 => 40,  61 => 23,  273 => 85,  269 => 94,  254 => 131,  246 => 90,  243 => 73,  240 => 72,  238 => 84,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 120,  219 => 237,  217 => 64,  208 => 105,  204 => 215,  179 => 90,  159 => 158,  143 => 106,  135 => 51,  131 => 48,  119 => 44,  108 => 45,  102 => 43,  71 => 28,  67 => 26,  63 => 25,  59 => 13,  47 => 20,  38 => 19,  94 => 40,  89 => 34,  85 => 31,  79 => 28,  75 => 29,  68 => 27,  56 => 23,  50 => 21,  35 => 19,  87 => 36,  72 => 28,  55 => 12,  201 => 213,  196 => 68,  183 => 189,  171 => 44,  166 => 167,  163 => 58,  158 => 55,  156 => 38,  151 => 52,  142 => 30,  138 => 104,  136 => 138,  123 => 91,  121 => 52,  117 => 41,  115 => 44,  105 => 44,  101 => 37,  91 => 37,  69 => 31,  66 => 26,  62 => 14,  49 => 20,  43 => 18,  41 => 20,  28 => 13,  25 => 8,  21 => 11,  31 => 14,  29 => 15,  26 => 14,  24 => 12,  19 => 2,  98 => 36,  93 => 36,  88 => 38,  78 => 19,  46 => 19,  44 => 18,  40 => 17,  32 => 16,  27 => 12,  22 => 7,  209 => 58,  203 => 103,  199 => 212,  193 => 105,  189 => 70,  187 => 64,  182 => 93,  176 => 178,  173 => 177,  168 => 43,  164 => 59,  162 => 41,  154 => 153,  149 => 148,  147 => 69,  144 => 144,  141 => 143,  133 => 49,  130 => 49,  125 => 46,  122 => 45,  116 => 45,  112 => 105,  109 => 43,  106 => 86,  103 => 38,  99 => 42,  95 => 38,  92 => 35,  86 => 33,  82 => 38,  80 => 31,  73 => 17,  64 => 3,  60 => 24,  57 => 23,  54 => 22,  51 => 21,  48 => 14,  45 => 21,  42 => 18,  39 => 17,  36 => 16,  33 => 15,  30 => 2,);
    }
}
