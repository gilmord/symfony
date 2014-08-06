<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_62854d2a5cc19aebf53cc67ee8864447559efbf2826378c2062c4a76221d30cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  624 => 224,  620 => 223,  612 => 220,  607 => 218,  585 => 209,  580 => 207,  574 => 205,  566 => 203,  563 => 202,  559 => 201,  551 => 199,  545 => 198,  536 => 194,  532 => 192,  529 => 191,  526 => 190,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  497 => 156,  490 => 154,  485 => 124,  463 => 117,  455 => 115,  450 => 114,  447 => 113,  415 => 127,  410 => 113,  406 => 111,  391 => 163,  385 => 159,  376 => 153,  369 => 148,  359 => 144,  354 => 142,  347 => 140,  335 => 133,  333 => 132,  320 => 87,  313 => 84,  310 => 83,  302 => 79,  284 => 76,  261 => 73,  239 => 64,  198 => 55,  192 => 53,  315 => 98,  306 => 95,  303 => 94,  292 => 91,  225 => 67,  175 => 47,  150 => 56,  12 => 36,  37 => 23,  778 => 251,  772 => 248,  769 => 247,  767 => 246,  763 => 244,  760 => 243,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  729 => 235,  717 => 233,  714 => 232,  711 => 231,  700 => 225,  666 => 222,  661 => 220,  653 => 218,  650 => 217,  644 => 213,  640 => 211,  633 => 209,  599 => 215,  595 => 205,  590 => 204,  587 => 203,  584 => 202,  573 => 198,  560 => 191,  555 => 200,  553 => 188,  540 => 164,  534 => 162,  531 => 161,  528 => 160,  515 => 180,  513 => 179,  510 => 178,  501 => 163,  499 => 173,  496 => 172,  493 => 155,  475 => 169,  473 => 168,  470 => 121,  468 => 160,  459 => 116,  454 => 156,  442 => 151,  433 => 149,  422 => 147,  420 => 146,  417 => 145,  411 => 143,  408 => 142,  405 => 141,  390 => 136,  380 => 130,  366 => 125,  361 => 124,  358 => 123,  343 => 115,  340 => 136,  338 => 113,  327 => 102,  291 => 99,  286 => 98,  281 => 75,  272 => 91,  206 => 57,  113 => 46,  110 => 45,  90 => 38,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 335,  1066 => 334,  1062 => 333,  1053 => 332,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 319,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 304,  969 => 303,  965 => 302,  959 => 301,  956 => 300,  948 => 296,  944 => 295,  941 => 294,  932 => 287,  930 => 286,  926 => 285,  923 => 284,  918 => 280,  910 => 278,  906 => 277,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 267,  883 => 265,  881 => 264,  878 => 263,  871 => 259,  869 => 258,  845 => 257,  842 => 255,  839 => 253,  837 => 252,  835 => 251,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 233,  803 => 232,  799 => 229,  797 => 228,  795 => 227,  793 => 226,  791 => 225,  788 => 224,  784 => 221,  781 => 216,  776 => 212,  756 => 208,  753 => 206,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 239,  737 => 198,  734 => 237,  730 => 192,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 185,  706 => 182,  703 => 226,  701 => 179,  698 => 178,  694 => 175,  692 => 174,  689 => 173,  685 => 170,  683 => 223,  680 => 168,  675 => 165,  673 => 164,  670 => 163,  665 => 160,  663 => 159,  660 => 158,  656 => 219,  654 => 154,  651 => 153,  647 => 150,  645 => 149,  642 => 148,  638 => 210,  635 => 226,  631 => 141,  629 => 140,  626 => 139,  622 => 136,  619 => 135,  616 => 207,  611 => 129,  601 => 216,  596 => 127,  594 => 212,  591 => 124,  589 => 123,  586 => 122,  581 => 201,  579 => 116,  578 => 200,  577 => 206,  576 => 199,  572 => 204,  569 => 110,  567 => 109,  564 => 193,  558 => 190,  556 => 103,  554 => 102,  552 => 101,  550 => 187,  546 => 166,  543 => 97,  541 => 96,  538 => 95,  524 => 92,  521 => 182,  507 => 165,  504 => 164,  479 => 82,  476 => 80,  472 => 78,  467 => 77,  465 => 76,  448 => 153,  445 => 152,  441 => 71,  439 => 150,  431 => 66,  429 => 148,  425 => 63,  414 => 144,  412 => 126,  399 => 139,  397 => 55,  394 => 54,  389 => 51,  383 => 49,  377 => 129,  373 => 46,  370 => 45,  357 => 37,  349 => 34,  346 => 33,  342 => 30,  339 => 28,  330 => 103,  326 => 129,  323 => 88,  317 => 107,  290 => 90,  282 => 3,  275 => 86,  270 => 84,  263 => 294,  260 => 293,  257 => 291,  250 => 274,  245 => 83,  242 => 82,  194 => 52,  188 => 194,  186 => 51,  139 => 51,  126 => 48,  114 => 44,  200 => 70,  180 => 49,  174 => 64,  165 => 61,  146 => 147,  23 => 4,  363 => 184,  353 => 177,  350 => 176,  348 => 118,  345 => 116,  329 => 130,  324 => 110,  321 => 100,  318 => 86,  311 => 158,  307 => 82,  304 => 103,  297 => 153,  287 => 77,  276 => 138,  271 => 136,  262 => 81,  256 => 79,  197 => 72,  191 => 196,  170 => 84,  222 => 66,  190 => 49,  185 => 63,  137 => 29,  96 => 40,  212 => 60,  172 => 85,  251 => 130,  231 => 69,  195 => 54,  129 => 49,  120 => 46,  104 => 43,  100 => 43,  81 => 33,  77 => 32,  65 => 29,  97 => 41,  74 => 29,  70 => 29,  52 => 22,  184 => 48,  153 => 55,  127 => 48,  237 => 71,  232 => 78,  216 => 107,  213 => 106,  207 => 58,  202 => 55,  160 => 39,  145 => 54,  424 => 91,  421 => 90,  404 => 90,  401 => 89,  396 => 138,  386 => 189,  367 => 176,  351 => 141,  334 => 26,  331 => 160,  328 => 22,  300 => 93,  295 => 100,  280 => 87,  267 => 226,  265 => 299,  259 => 87,  255 => 284,  253 => 78,  233 => 82,  210 => 59,  178 => 48,  155 => 77,  134 => 182,  124 => 47,  83 => 37,  181 => 185,  161 => 57,  157 => 56,  152 => 36,  84 => 34,  76 => 33,  34 => 15,  58 => 25,  53 => 24,  20 => 1,  480 => 162,  474 => 122,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 69,  435 => 146,  430 => 144,  427 => 64,  423 => 62,  413 => 134,  409 => 132,  407 => 131,  402 => 140,  398 => 88,  393 => 168,  387 => 122,  384 => 121,  381 => 157,  379 => 154,  374 => 128,  368 => 126,  365 => 41,  362 => 39,  360 => 38,  355 => 122,  341 => 105,  337 => 27,  322 => 101,  314 => 16,  312 => 97,  309 => 97,  305 => 95,  298 => 101,  294 => 90,  285 => 4,  283 => 97,  278 => 95,  268 => 300,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 133,  229 => 125,  220 => 65,  214 => 63,  177 => 65,  169 => 44,  140 => 51,  132 => 42,  128 => 47,  111 => 46,  107 => 44,  61 => 27,  273 => 85,  269 => 94,  254 => 131,  246 => 67,  243 => 66,  240 => 72,  238 => 84,  235 => 63,  230 => 62,  227 => 243,  224 => 61,  221 => 120,  219 => 237,  217 => 64,  208 => 105,  204 => 57,  179 => 90,  159 => 158,  143 => 106,  135 => 51,  131 => 181,  119 => 44,  108 => 42,  102 => 37,  71 => 31,  67 => 30,  63 => 17,  59 => 27,  47 => 19,  38 => 19,  94 => 40,  89 => 39,  85 => 36,  79 => 34,  75 => 21,  68 => 30,  56 => 25,  50 => 21,  35 => 16,  87 => 38,  72 => 30,  55 => 23,  201 => 56,  196 => 68,  183 => 50,  171 => 44,  166 => 167,  163 => 40,  158 => 55,  156 => 38,  151 => 52,  142 => 30,  138 => 104,  136 => 138,  123 => 47,  121 => 51,  117 => 45,  115 => 47,  105 => 45,  101 => 42,  91 => 37,  69 => 19,  66 => 28,  62 => 28,  49 => 21,  43 => 26,  41 => 25,  28 => 14,  25 => 8,  21 => 11,  31 => 15,  29 => 15,  26 => 14,  24 => 13,  19 => 11,  98 => 41,  93 => 39,  88 => 37,  78 => 35,  46 => 20,  44 => 18,  40 => 17,  32 => 15,  27 => 14,  22 => 12,  209 => 58,  203 => 103,  199 => 212,  193 => 105,  189 => 52,  187 => 64,  182 => 93,  176 => 178,  173 => 46,  168 => 43,  164 => 59,  162 => 41,  154 => 153,  149 => 35,  147 => 69,  144 => 26,  141 => 143,  133 => 49,  130 => 49,  125 => 46,  122 => 45,  116 => 45,  112 => 105,  109 => 43,  106 => 86,  103 => 43,  99 => 41,  95 => 41,  92 => 38,  86 => 35,  82 => 35,  80 => 25,  73 => 33,  64 => 27,  60 => 16,  57 => 15,  54 => 23,  51 => 14,  48 => 22,  45 => 21,  42 => 19,  39 => 20,  36 => 16,  33 => 16,  30 => 15,);
    }
}
