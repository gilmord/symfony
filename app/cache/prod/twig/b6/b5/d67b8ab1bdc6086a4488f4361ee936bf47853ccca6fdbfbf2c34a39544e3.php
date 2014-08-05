<?php

/* BashBashBundle:Page:recent.html.twig */
class __TwigTemplate_b6b5d67b8ab1bdc6086a4488f4361ee936bf47853ccca6fdbfbf2c34a39544e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'pager' => array($this, 'block_pager'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Recent
";
    }

    // line 7
    public function block_h1($context, array $blocks = array())
    {
        // line 8
        echo "    Recent

";
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        // line 14
        echo "    <ul class=\"menu\">
        <li class=\"first leaf rss\"><a
                    href=\"/bash.rss?token=WJieXgVAbka5rreCz9pd\" title=\"\">rss</a>
        </li>
        <li class=\"leaf\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_recent", array("id" => 1));
        echo "\" class=\"active\">recent</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_best");
        echo "\">best</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_random");
        echo "\">random</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_govnokod");
        echo "\">govnokod</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_addquote");
        echo "\">add quote</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_addcode");
        echo "\">add code</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_myquotes");
        echo "\">my quotes</a></li>
        <li class=\"last leaf\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">log out</a>
        </li>
    </ul>
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        if (((isset($context["id"]) ? $context["id"] : null) > $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "last"))) {
            // line 33
            echo "    <strong>Sorry, there is no such page</strong>

";
        }
        // line 36
        echo "    ";
        if (((isset($context["id"]) ? $context["id"] : null) < 1)) {
            // line 37
            echo "        <strong>Sorry, there is no such page</strong>

    ";
        }
        // line 40
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) ? $context["quotes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 41
            echo "        <div class=\"views-row views-row-1 views-row-odd views-row-first\">

            <div class=\"views-field views-field-value\">
                <div class=\"field-content\">
                    <div id=\"rate-node-179-1-5\"
                         class=\"rate-widget-1 rate-widget clear-block rate-average rate-widg…e-9_phLrr7NVXFMouZITX0t-0JxNJMS1Jz_4IckdCuUy4 rate-processed\">
                <span id=\"rate-button-3\" class=\"rate-button rate-number-up-down-btn-up\">

                    +

                </span>

                        <div class=\"rate-number-up-down-rating neutral\">

                            0

                        </div>
                <span id=\"rate-button-4\" class=\"rate-button rate-number-up-down-btn-down\">

                    -

                </span>
                    </div>
                </div>
            </div>
            <div class=\"views-field views-field-name\">
        <span class=\"field-content\">

             <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_aquotes", array("author" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "author"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "author"), "html", null, true);
            echo "</a>
        </span>
            </div>
            <div class=\"views-field views-field-nid-1\">
                <a class=\"use-ajax bojan-link-179 bojans-count-0 ajax-processed\" title=\"People bojaned: 0\"
                   href=\"/bash/bojan/179/nojs/set\">

                    [:|||:]

                </a>
            </div>
            <div class=\"views-field views-field-comment-count\">
        <span class=\"views-label views-label-comment-count\">
             Comments:
<a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_post", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "id"))), "html", null, true);
            echo "\">
    ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["total"]) ? $context["total"] : null), $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "id"), array(), "array"), "html", null, true);
            echo "
</a>
        </span>
        <span class=\"field-content\">
            <a href=\"/bash/node/179\"></a>
        </span>
            </div>
            <div class=\"views-field views-field-created\">
        <span class=\"field-content\">
            ";
            // line 93
            if ((twig_date_format_filter($this->env, "now", "Y-m-d") == twig_date_format_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "created"), "Y-m-d"))) {
                // line 94
                echo "                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "created"), "Y-m-d H:i"), "html", null, true);
                echo "
                <div id=\"hot\"><strong>hot!</strong></div>
            ";
            } else {
                // line 97
                echo "                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "created"), "Y-m-d H:i"), "html", null, true);
                echo "
            ";
            }
            // line 99
            echo "        </span>
            </div>
            <div class=\"views-field views-field-nothing\">
        <span class=\"field-content\">
            <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_post", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "id"))), "html", null, true);
            echo "\">

                #";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "id"), "html", null, true);
            echo "

            </a>
        </span>
            </div>
            <div class=\"views-field views-field-body\">
                <div class=\"field-content\">
                    <p>

                        ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "subject"), "html", null, true);
            echo "

                    </p>
                </div>
            </div>
            <div class=\"views-field views-field-field-image\">
                <div class=\"field-content\">
                    ";
            // line 121
            if ($this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "path")) {
                // line 122
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "image/", 1 => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "path")))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "subject"), "html", null, true);
                echo " image not found\"/>
                    ";
            }
            // line 124
            echo "                </div>

            </div>

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
    ";
        // line 131
        $this->displayBlock('pager', $context, $blocks);
        // line 195
        echo "

";
    }

    // line 131
    public function block_pager($context, array $blocks = array())
    {
        // line 132
        echo "        <div class=\"item-list\">

            <ul class=\"pager\">

                ";
        // line 136
        if (((isset($context["id"]) ? $context["id"] : null) != 1)) {
            // line 137
            echo "                    <li class=\"pager-first first\">
                        <a href=\"";
            // line 138
            echo $this->env->getExtension('routing')->getPath("BashBashBundle_recent", array("id" => 1));
            echo "\">

                            « first

                        </a>
                    </li>

                    <li class=\"pager-previous\">
                        <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_recent", array("id" => ((isset($context["id"]) ? $context["id"] : null) - 1))), "html", null, true);
            echo "\">

                            ‹ previous

                        </a>
                    </li>
                ";
        }
        // line 153
        echo "
                ";
        // line 154
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "arr"));
        foreach ($context['_seq'] as $context["_key"] => $context["pages"]) {
            // line 155
            echo "                    ";
            if (((isset($context["pages"]) ? $context["pages"] : null) == (isset($context["id"]) ? $context["id"] : null))) {
                // line 156
                echo "
                        <li class=\"current\">
                              ";
                // line 158
                echo twig_escape_filter($this->env, (isset($context["pages"]) ? $context["pages"] : null), "html", null, true);
                echo "
                        </li>

                    ";
            }
            // line 162
            echo "                    ";
            if (((isset($context["pages"]) ? $context["pages"] : null) != (isset($context["id"]) ? $context["id"] : null))) {
                // line 163
                echo "                        <li class=\"pager-item\">
                            <a href=\"";
                // line 164
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_recent", array("id" => (isset($context["pages"]) ? $context["pages"] : null))), "html", null, true);
                echo "\">

                                ";
                // line 166
                echo twig_escape_filter($this->env, (isset($context["pages"]) ? $context["pages"] : null), "html", null, true);
                echo "

                            </a>
                        </li>
                    ";
            }
            // line 171
            echo "

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "
                ";
        // line 175
        if (((isset($context["id"]) ? $context["id"] : null) != $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "last"))) {
            // line 176
            echo "                    <li class=\"pager-next\">
                        <a href=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_recent", array("id" => ((isset($context["id"]) ? $context["id"] : null) + 1))), "html", null, true);
            echo "\">

                            next ›

                        </a>
                    </li>
                    <li class=\"pager-last last\">
                        <a href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_recent", array("id" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "last"))), "html", null, true);
            echo "\">

                            last »

                        </a>
                    </li>

                ";
        }
        // line 192
        echo "            </ul>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "BashBashBundle:Page:recent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 184,  353 => 177,  350 => 176,  348 => 175,  345 => 174,  329 => 166,  324 => 164,  321 => 163,  318 => 162,  311 => 158,  307 => 156,  304 => 155,  297 => 153,  287 => 146,  276 => 138,  271 => 136,  262 => 131,  256 => 195,  197 => 99,  191 => 97,  170 => 84,  222 => 115,  190 => 96,  185 => 94,  137 => 62,  96 => 30,  212 => 112,  172 => 85,  251 => 130,  231 => 126,  195 => 106,  129 => 49,  120 => 43,  104 => 36,  100 => 31,  81 => 21,  77 => 20,  65 => 17,  97 => 32,  74 => 22,  70 => 21,  52 => 14,  184 => 94,  153 => 77,  127 => 54,  237 => 137,  232 => 122,  216 => 107,  213 => 106,  207 => 104,  202 => 105,  160 => 123,  145 => 109,  424 => 198,  421 => 197,  404 => 223,  401 => 222,  396 => 196,  386 => 189,  367 => 176,  351 => 162,  334 => 161,  331 => 160,  328 => 159,  300 => 154,  295 => 249,  280 => 237,  267 => 226,  265 => 132,  259 => 155,  255 => 153,  253 => 152,  233 => 141,  210 => 108,  178 => 87,  155 => 77,  134 => 59,  124 => 52,  83 => 24,  181 => 96,  161 => 79,  157 => 78,  152 => 76,  84 => 23,  76 => 21,  34 => 4,  58 => 18,  53 => 14,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 197,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 192,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 171,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 144,  258 => 81,  252 => 80,  247 => 78,  241 => 133,  229 => 125,  220 => 114,  214 => 113,  177 => 137,  169 => 84,  140 => 55,  132 => 51,  128 => 57,  111 => 37,  107 => 37,  61 => 16,  273 => 137,  269 => 94,  254 => 131,  246 => 90,  243 => 134,  240 => 124,  238 => 85,  235 => 142,  230 => 121,  227 => 81,  224 => 121,  221 => 120,  219 => 117,  217 => 75,  208 => 105,  204 => 72,  179 => 90,  159 => 61,  143 => 106,  135 => 53,  131 => 58,  119 => 42,  108 => 36,  102 => 32,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  47 => 12,  38 => 7,  94 => 31,  89 => 30,  85 => 25,  79 => 26,  75 => 22,  68 => 19,  56 => 17,  50 => 13,  35 => 4,  87 => 25,  72 => 20,  55 => 17,  201 => 102,  196 => 90,  183 => 82,  171 => 88,  166 => 83,  163 => 62,  158 => 79,  156 => 66,  151 => 72,  142 => 59,  138 => 104,  136 => 56,  123 => 91,  121 => 88,  117 => 41,  115 => 44,  105 => 38,  101 => 34,  91 => 27,  69 => 18,  66 => 20,  62 => 19,  49 => 13,  43 => 8,  41 => 7,  28 => 4,  25 => 8,  21 => 2,  31 => 3,  29 => 3,  26 => 1,  24 => 4,  19 => 1,  98 => 33,  93 => 28,  88 => 24,  78 => 23,  46 => 11,  44 => 8,  40 => 7,  32 => 3,  27 => 4,  22 => 7,  209 => 82,  203 => 103,  199 => 88,  193 => 105,  189 => 93,  187 => 84,  182 => 93,  176 => 64,  173 => 88,  168 => 72,  164 => 84,  162 => 59,  154 => 58,  149 => 51,  147 => 69,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 46,  112 => 40,  109 => 79,  106 => 39,  103 => 33,  99 => 33,  95 => 30,  92 => 29,  86 => 25,  82 => 24,  80 => 22,  73 => 19,  64 => 18,  60 => 17,  57 => 15,  54 => 13,  51 => 12,  48 => 2,  45 => 1,  42 => 8,  39 => 7,  36 => 6,  33 => 4,  30 => 3,);
    }
}
