<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_cf19527e06b0d020764b7557371b8766b92e1ebece0e2538e74ffebdbcb6d1b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig");

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"glyphicon glyphicon-ok\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"glyphicon glyphicon-remove\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ((isset($context["name"]) ? $context["name"] : null)) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => (isset($context["name"]) ? $context["name"] : null)), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view_group"]) ? $context["view_group"] : null), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show"), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array"), (isset($context["object"]) ? $context["object"] : null));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 17,  778 => 251,  772 => 248,  769 => 247,  767 => 246,  763 => 244,  760 => 243,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  729 => 235,  717 => 233,  714 => 232,  711 => 231,  700 => 225,  666 => 222,  661 => 220,  653 => 218,  650 => 217,  644 => 213,  640 => 211,  633 => 209,  599 => 206,  595 => 205,  590 => 204,  587 => 203,  584 => 202,  573 => 198,  560 => 191,  555 => 189,  553 => 188,  540 => 164,  534 => 162,  531 => 161,  528 => 160,  515 => 180,  513 => 179,  510 => 178,  501 => 174,  499 => 173,  496 => 172,  493 => 171,  475 => 169,  473 => 168,  470 => 167,  468 => 160,  459 => 159,  454 => 156,  442 => 151,  433 => 149,  422 => 147,  420 => 146,  417 => 145,  411 => 143,  408 => 142,  405 => 141,  390 => 136,  380 => 130,  366 => 125,  361 => 124,  358 => 123,  343 => 115,  340 => 114,  338 => 113,  327 => 111,  291 => 99,  286 => 98,  281 => 96,  272 => 91,  206 => 74,  113 => 43,  110 => 42,  90 => 34,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 335,  1066 => 334,  1062 => 333,  1053 => 332,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 319,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 304,  969 => 303,  965 => 302,  959 => 301,  956 => 300,  948 => 296,  944 => 295,  941 => 294,  932 => 287,  930 => 286,  926 => 285,  923 => 284,  918 => 280,  910 => 278,  906 => 277,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 267,  883 => 265,  881 => 264,  878 => 263,  871 => 259,  869 => 258,  845 => 257,  842 => 255,  839 => 253,  837 => 252,  835 => 251,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 233,  803 => 232,  799 => 229,  797 => 228,  795 => 227,  793 => 226,  791 => 225,  788 => 224,  784 => 221,  781 => 216,  776 => 212,  756 => 208,  753 => 206,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 239,  737 => 198,  734 => 237,  730 => 192,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 185,  706 => 182,  703 => 226,  701 => 179,  698 => 178,  694 => 175,  692 => 174,  689 => 173,  685 => 170,  683 => 223,  680 => 168,  675 => 165,  673 => 164,  670 => 163,  665 => 160,  663 => 159,  660 => 158,  656 => 219,  654 => 154,  651 => 153,  647 => 150,  645 => 149,  642 => 148,  638 => 210,  635 => 144,  631 => 141,  629 => 140,  626 => 139,  622 => 136,  619 => 135,  616 => 207,  611 => 129,  601 => 128,  596 => 127,  594 => 126,  591 => 124,  589 => 123,  586 => 122,  581 => 201,  579 => 116,  578 => 200,  577 => 114,  576 => 199,  572 => 112,  569 => 110,  567 => 109,  564 => 193,  558 => 190,  556 => 103,  554 => 102,  552 => 101,  550 => 187,  546 => 166,  543 => 97,  541 => 96,  538 => 95,  524 => 92,  521 => 182,  507 => 88,  504 => 175,  479 => 82,  476 => 80,  472 => 78,  467 => 77,  465 => 76,  448 => 153,  445 => 152,  441 => 71,  439 => 150,  431 => 66,  429 => 148,  425 => 63,  414 => 144,  412 => 59,  399 => 139,  397 => 55,  394 => 54,  389 => 51,  383 => 49,  377 => 129,  373 => 46,  370 => 45,  357 => 37,  349 => 34,  346 => 33,  342 => 30,  339 => 28,  330 => 112,  326 => 21,  323 => 19,  317 => 107,  290 => 7,  282 => 3,  275 => 330,  270 => 316,  263 => 294,  260 => 293,  257 => 291,  250 => 274,  245 => 83,  242 => 82,  194 => 197,  188 => 194,  186 => 190,  139 => 139,  126 => 55,  114 => 50,  200 => 70,  180 => 66,  174 => 64,  165 => 61,  146 => 147,  23 => 4,  363 => 184,  353 => 177,  350 => 176,  348 => 118,  345 => 116,  329 => 166,  324 => 110,  321 => 109,  318 => 162,  311 => 158,  307 => 104,  304 => 103,  297 => 153,  287 => 5,  276 => 138,  271 => 136,  262 => 88,  256 => 86,  197 => 72,  191 => 196,  170 => 84,  222 => 238,  190 => 66,  185 => 63,  137 => 62,  96 => 44,  212 => 76,  172 => 85,  251 => 130,  231 => 126,  195 => 106,  129 => 56,  120 => 43,  104 => 18,  100 => 42,  81 => 31,  77 => 35,  65 => 25,  97 => 32,  74 => 26,  70 => 27,  52 => 19,  184 => 68,  153 => 55,  127 => 48,  237 => 79,  232 => 78,  216 => 107,  213 => 106,  207 => 216,  202 => 105,  160 => 123,  145 => 109,  424 => 198,  421 => 197,  404 => 58,  401 => 57,  396 => 138,  386 => 189,  367 => 176,  351 => 120,  334 => 26,  331 => 160,  328 => 22,  300 => 102,  295 => 100,  280 => 237,  267 => 226,  265 => 299,  259 => 87,  255 => 284,  253 => 152,  233 => 82,  210 => 108,  178 => 184,  155 => 77,  134 => 133,  124 => 47,  83 => 37,  181 => 185,  161 => 57,  157 => 57,  152 => 76,  84 => 32,  76 => 35,  34 => 7,  58 => 22,  53 => 20,  20 => 1,  480 => 162,  474 => 79,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 69,  435 => 146,  430 => 144,  427 => 64,  423 => 62,  413 => 134,  409 => 132,  407 => 131,  402 => 140,  398 => 197,  393 => 137,  387 => 122,  384 => 121,  381 => 48,  379 => 119,  374 => 128,  368 => 126,  365 => 41,  362 => 39,  360 => 38,  355 => 122,  341 => 105,  337 => 27,  322 => 101,  314 => 16,  312 => 98,  309 => 97,  305 => 95,  298 => 101,  294 => 90,  285 => 4,  283 => 97,  278 => 95,  268 => 300,  264 => 144,  258 => 81,  252 => 85,  247 => 84,  241 => 133,  229 => 125,  220 => 114,  214 => 231,  177 => 65,  169 => 62,  140 => 52,  132 => 57,  128 => 57,  111 => 90,  107 => 48,  61 => 23,  273 => 317,  269 => 94,  254 => 131,  246 => 90,  243 => 134,  240 => 263,  238 => 84,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 120,  219 => 237,  217 => 77,  208 => 105,  204 => 215,  179 => 90,  159 => 158,  143 => 106,  135 => 51,  131 => 132,  119 => 45,  108 => 36,  102 => 39,  71 => 15,  67 => 20,  63 => 31,  59 => 18,  47 => 18,  38 => 20,  94 => 16,  89 => 42,  85 => 31,  79 => 28,  75 => 29,  68 => 26,  56 => 27,  50 => 19,  35 => 19,  87 => 33,  72 => 22,  55 => 20,  201 => 213,  196 => 68,  183 => 189,  171 => 173,  166 => 167,  163 => 62,  158 => 55,  156 => 54,  151 => 52,  142 => 59,  138 => 104,  136 => 138,  123 => 91,  121 => 52,  117 => 41,  115 => 44,  105 => 38,  101 => 46,  91 => 44,  69 => 33,  66 => 32,  62 => 19,  49 => 23,  43 => 12,  41 => 19,  28 => 5,  25 => 8,  21 => 2,  31 => 6,  29 => 6,  26 => 12,  24 => 11,  19 => 2,  98 => 33,  93 => 36,  88 => 24,  78 => 36,  46 => 11,  44 => 17,  40 => 11,  32 => 14,  27 => 12,  22 => 7,  209 => 75,  203 => 103,  199 => 212,  193 => 105,  189 => 70,  187 => 64,  182 => 93,  176 => 178,  173 => 177,  168 => 62,  164 => 59,  162 => 60,  154 => 153,  149 => 148,  147 => 69,  144 => 144,  141 => 143,  133 => 50,  130 => 49,  125 => 46,  122 => 46,  116 => 44,  112 => 40,  109 => 19,  106 => 86,  103 => 43,  99 => 45,  95 => 41,  92 => 43,  86 => 36,  82 => 38,  80 => 36,  73 => 34,  64 => 3,  60 => 16,  57 => 15,  54 => 16,  51 => 25,  48 => 24,  45 => 21,  42 => 20,  39 => 15,  36 => 14,  33 => 13,  30 => 15,);
    }
}
