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
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "last"))) {
            // line 33
            echo "    <strong>Sorry, there is no such page</strong>

";
        }
        // line 36
        echo "    ";
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) < 1)) {
            // line 37
            echo "        <strong>Sorry, there is no such page</strong>

    ";
        }
        // line 40
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) ? $context["quotes"] : $this->getContext($context, "quotes")));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_aquotes", array("author" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "author"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "author"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_post", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "id"))), "html", null, true);
            echo "\">
    ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "id"), array(), "array"), "html", null, true);
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
            if ((twig_date_format_filter($this->env, "now", "Y-m-d") == twig_date_format_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "created"), "Y-m-d"))) {
                // line 94
                echo "                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "created"), "Y-m-d H:i"), "html", null, true);
                echo "
                <div id=\"hot\"><strong>hot!</strong></div>
            ";
            } else {
                // line 97
                echo "                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "created"), "Y-m-d H:i"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_post", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "id"))), "html", null, true);
            echo "\">

                #";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "id"), "html", null, true);
            echo "

            </a>
        </span>
            </div>
            <div class=\"views-field views-field-body\">
                <div class=\"field-content\">
                    <p>

                        ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "subject"), "html", null, true);
            echo "

                    </p>
                </div>
            </div>
            <div class=\"views-field views-field-field-image\">
                <div class=\"field-content\">
                    ";
            // line 121
            if ($this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "path")) {
                // line 122
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "image/", 1 => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "path")))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "subject"), "html", null, true);
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
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) != 1)) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_recent", array("id" => ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) - 1))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "arr"));
        foreach ($context['_seq'] as $context["_key"] => $context["pages"]) {
            // line 155
            echo "                    ";
            if (((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 156
                echo "
                        <li class=\"current\">
                              ";
                // line 158
                echo twig_escape_filter($this->env, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")), "html", null, true);
                echo "
                        </li>

                    ";
            }
            // line 162
            echo "                    ";
            if (((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) != (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 163
                echo "                        <li class=\"pager-item\">
                            <a href=\"";
                // line 164
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_recent", array("id" => (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))), "html", null, true);
                echo "\">

                                ";
                // line 166
                echo twig_escape_filter($this->env, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")), "html", null, true);
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
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) != $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "last"))) {
            // line 176
            echo "                    <li class=\"pager-next\">
                        <a href=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_recent", array("id" => ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) + 1))), "html", null, true);
            echo "\">

                            next ›

                        </a>
                    </li>
                    <li class=\"pager-last last\">
                        <a href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_recent", array("id" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "last"))), "html", null, true);
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
        return array (  374 => 192,  363 => 184,  353 => 177,  350 => 176,  348 => 175,  345 => 174,  337 => 171,  329 => 166,  324 => 164,  321 => 163,  318 => 162,  311 => 158,  307 => 156,  304 => 155,  300 => 154,  297 => 153,  287 => 146,  276 => 138,  273 => 137,  271 => 136,  265 => 132,  262 => 131,  256 => 195,  254 => 131,  251 => 130,  240 => 124,  232 => 122,  230 => 121,  220 => 114,  208 => 105,  203 => 103,  197 => 99,  191 => 97,  184 => 94,  182 => 93,  170 => 84,  166 => 83,  147 => 69,  117 => 41,  112 => 40,  107 => 37,  104 => 36,  99 => 33,  97 => 32,  94 => 31,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  52 => 14,  49 => 13,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
