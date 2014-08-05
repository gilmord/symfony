<?php

/* BashBashBundle:Page:random.html.twig */
class __TwigTemplate_907c253448a8492dc98e50314f49f12e9d33511a5c914f90d4d7d30f325f19c5 extends Twig_Template
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
        echo "    Randon
";
    }

    // line 7
    public function block_h1($context, array $blocks = array())
    {
        // line 8
        echo "    Random
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "    <ul class=\"menu\">
        <li class=\"first leaf rss\"><a
                    href=\"/bash.rss?token=WJieXgVAbka5rreCz9pd\" title=\"\">rss</a>
        </li>
        <li class=\"leaf\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_recent", array("id" => 1));
        echo "\">recent</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_best");
        echo "\">best</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_random");
        echo "\" class=\"active\" >random</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_govnokod");
        echo "\">govnokod</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_addquote");
        echo "\" >add quote</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_addcode");
        echo "\">add code</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_myquotes");
        echo "\">my quotes</a></li>
        <li class=\"last leaf\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">log out</a>
        </li>
    </ul>
";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) ? $context["quotes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 31
            echo "        <div class=\"views-row views-row-1 views-row-odd views-row-first\">

            <div class=\"views-field views-field-value\">
                <div class=\"field-content\">
                    <div id=\"rate-node-179-1-5\" class=\"rate-widget-1 rate-widget clear-block rate-average rate-widg…e-9_phLrr7NVXFMouZITX0t-0JxNJMS1Jz_4IckdCuUy4 rate-processed\">
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
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_aquotes", array("author" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "author"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "author"), "html", null, true);
            echo "</a>
        </span>
            </div>
            <div class=\"views-field views-field-nid-1\">
                <a class=\"use-ajax bojan-link-179 bojans-count-0 ajax-processed\" title=\"People bojaned: 0\" href=\"/bash/bojan/179/nojs/set\">

                    [:|||:]

                </a>
            </div>
            <div class=\"views-field views-field-comment-count\">
        <span class=\"views-label views-label-comment-count\">

            Comments:
            <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_post", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "id"))), "html", null, true);
            echo "\">
                ";
            // line 72
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
            // line 82
            if ((twig_date_format_filter($this->env, "now", "Y-m-d") == twig_date_format_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "created"), "Y-m-d"))) {
                // line 83
                echo "                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "created"), "Y-m-d H:i"), "html", null, true);
                echo " <div id=\"hot\" ><strong>hot!</strong></div>
            ";
            } else {
                // line 85
                echo "                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "created"), "Y-m-d H:i"), "html", null, true);
                echo "
            ";
            }
            // line 87
            echo "        </span>
            </div>
            <div class=\"views-field views-field-nothing\">
        <span class=\"field-content\">
            <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_post", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "id"))), "html", null, true);
            echo "\">

                #";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "id"), "html", null, true);
            echo "

            </a>
        </span>
            </div>
            <div class=\"views-field views-field-body\">
                <div class=\"field-content\">
                    <p>

                        ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "subject"), "html", null, true);
            echo "

                    </p>
                </div>
            </div>
            <div class=\"views-field views-field-field-image\">
                <div class=\"field-content\">";
            // line 108
            if ($this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "path")) {
                // line 109
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "image/", 1 => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "path")))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "subject"), "html", null, true);
                echo " image not found\"/>
                    ";
            }
            // line 110
            echo "</div>
            </div>

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BashBashBundle:Page:random.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 109,  172 => 85,  251 => 136,  231 => 126,  195 => 106,  129 => 49,  120 => 43,  104 => 35,  100 => 31,  81 => 21,  77 => 20,  65 => 21,  97 => 35,  74 => 24,  70 => 23,  52 => 16,  184 => 91,  153 => 77,  127 => 54,  237 => 137,  232 => 126,  216 => 107,  213 => 106,  207 => 104,  202 => 109,  160 => 123,  145 => 109,  424 => 198,  421 => 197,  404 => 223,  401 => 222,  396 => 196,  386 => 189,  367 => 176,  351 => 162,  334 => 161,  331 => 160,  328 => 159,  300 => 251,  295 => 249,  280 => 237,  267 => 226,  265 => 159,  259 => 155,  255 => 153,  253 => 152,  233 => 141,  210 => 108,  178 => 87,  155 => 77,  134 => 59,  124 => 52,  83 => 24,  181 => 96,  161 => 79,  157 => 78,  152 => 76,  84 => 24,  76 => 22,  34 => 4,  58 => 20,  53 => 14,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 197,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 180,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 144,  258 => 81,  252 => 80,  247 => 78,  241 => 133,  229 => 125,  220 => 110,  214 => 115,  177 => 137,  169 => 84,  140 => 55,  132 => 51,  128 => 57,  111 => 37,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 134,  240 => 138,  238 => 85,  235 => 142,  230 => 82,  227 => 81,  224 => 121,  221 => 120,  219 => 117,  217 => 75,  208 => 111,  204 => 72,  179 => 140,  159 => 61,  143 => 106,  135 => 53,  131 => 58,  119 => 42,  108 => 36,  102 => 32,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  47 => 12,  38 => 7,  94 => 34,  89 => 30,  85 => 25,  79 => 26,  75 => 22,  68 => 20,  56 => 17,  50 => 13,  35 => 5,  87 => 25,  72 => 21,  55 => 17,  201 => 102,  196 => 90,  183 => 82,  171 => 88,  166 => 83,  163 => 62,  158 => 79,  156 => 66,  151 => 72,  142 => 59,  138 => 104,  136 => 56,  123 => 91,  121 => 88,  117 => 47,  115 => 43,  105 => 38,  101 => 34,  91 => 27,  69 => 22,  66 => 22,  62 => 21,  49 => 13,  43 => 8,  41 => 8,  28 => 4,  25 => 8,  21 => 2,  31 => 3,  29 => 3,  26 => 1,  24 => 4,  19 => 1,  98 => 33,  93 => 28,  88 => 6,  78 => 25,  46 => 12,  44 => 1,  40 => 7,  32 => 4,  27 => 4,  22 => 7,  209 => 82,  203 => 78,  199 => 88,  193 => 105,  189 => 93,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 82,  162 => 59,  154 => 58,  149 => 51,  147 => 71,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 46,  112 => 38,  109 => 79,  106 => 39,  103 => 32,  99 => 31,  95 => 30,  92 => 29,  86 => 27,  82 => 26,  80 => 23,  73 => 19,  64 => 19,  60 => 18,  57 => 15,  54 => 10,  51 => 14,  48 => 2,  45 => 1,  42 => 8,  39 => 7,  36 => 6,  33 => 4,  30 => 3,);
    }
}
