<?php

/* BashBashBundle:Page:post.html.twig */
class __TwigTemplate_49eb6a63f206ac73f0c7773732cbc16b3401519320aa47fbdd9892d6f9cad9c6 extends Twig_Template
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
            'comment' => array($this, 'block_comment'),
            'editkeys' => array($this, 'block_editkeys'),
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
        echo "    Qoute
";
    }

    // line 7
    public function block_h1($context, array $blocks = array())
    {
        // line 8
        echo "

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
        echo "\">recent</a></li>
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

    // line 32
    public function block_content($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        if ((((isset($context["you_are"]) ? $context["you_are"] : null) == "adminuser") || ((isset($context["you_are"]) ? $context["you_are"] : null) == $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "author")))) {
            // line 34
            echo "
            <div class=\"tabs\">

                <h2 class=\"element-invisible\"></h2>
                <ul class=\"tabs primary\">
                    <li class=\"active\">
                        <a class=\"active\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_post", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "id"))), "html", null, true);
            echo "\">

                            View

                <span class=\"element-invisible\">

                    (active tab)

                </span>
                        </a>
                    </li>
                    <li>
                        <a  href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_edit", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "id"))), "html", null, true);
            echo "\">

                            Edit

                        </a>
                    </li>
                    <li>
                        <a  href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_dell", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "id"))), "html", null, true);
            echo "\">

                            Delete

                        </a>
                    </li>
                    <li>
                        <a href=\"/bash/node/179/rating\">

                            Voting results

                        </a>
                    </li>
                </ul>

            </div>

    ";
        }
        // line 77
        echo "

    <div id=\"node-179\" class=\"node node-quote clearfix\">

    <div class=\"submitted\">


        Submitted by

        <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_user", array("user" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "author"))), "html", null, true);
        echo "\">

            ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "author"), "html", null, true);
        echo "

        </a>

        on  ";
        // line 92
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "created"), "Y-m-d H:i"), "html", null, true);
        echo "


    </div>
    <div class=\"content\">
        <div id=\"rate-node-179-1-3\"
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
        <div class=\"field field-name-body field-type-text-with-summary field-label-hidden\">
            <div class=\"field-items\">
                <div class=\"field-item even\">
                    <p>

                        ";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "subject"), "html", null, true);
        echo "

                    <div class=\"views-field views-field-field-image\">
                        <div class=\"field-content\">

                        </div>

                    </div>

                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class=\"field field-name-field-image field-type-image field-label-hidden\">

        <div class=\"field-items\">
            <div class=\"field-item even\">
                ";
        // line 141
        if ($this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "path")) {
            // line 142
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "image/", 1 => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "path")))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "subject"), "html", null, true);
            echo " image not found\"/>
                ";
        }
        // line 144
        echo "            </div>
        </div>

    </div>


<div id=\"comments\" class=\"comment-wrapper\">

    ";
        // line 152
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 153
            echo "        <h2 class=\"title\">Comments</h2>
    ";
        }
        // line 155
        echo "



";
        // line 159
        $this->displayBlock('comment', $context, $blocks);
        // line 226
        echo "




    <h2 class=\"title comment-form\">

        Add new comment

    </h2>

    ";
        // line 237
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BashBashBundle:Comment:new", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "id"))));
        echo "

    <form id=\"comment-form\" class=\"comment-form\" accept-charset=\"UTF-8\" method=\"post\"
          action=\"/bash/comment/reply/179\">
        <div>
            <div id=\"edit-author--2\" class=\"form-item form-type-item\">
                <label for=\"edit-author--2\">

                    Your name

                </label>
                <a class=\"username\" title=\"View user profile.\"
                   href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_user", array("user" => (isset($context["you_are"]) ? $context["you_are"] : null))), "html", null, true);
        echo "\">

                    ";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["you_are"]) ? $context["you_are"] : null), "html", null, true);
        echo "

                </a>
            </div>
            <div id=\"edit-comment-body\"
                 class=\"field-type-text-long field-name-comment-body field-widget-text-textarea form-wrapper\">
                <div id=\"comment-body-add-more-wrapper\">
                    <div class=\"text-format-wrapper\">
                        <div class=\"form-item form-type-textarea form-item-comment-body-und-0-value\"></div>
                        <fieldset id=\"edit-comment-body-und-0-format\"
                                  class=\"filter-wrapper form-wrapper\"></fieldset>
                    </div>
                </div>
            </div>

            <div id=\"edit-actions\" class=\"form-actions form-wrapper\">

            </div>
        </div>
    </form>
    </div>


";
    }

    // line 159
    public function block_comment($context, array $blocks = array())
    {
        // line 160
        echo "
    ";
        // line 161
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comment"]) ? $context["comment"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 162
            echo "
    <div class=\"comment clearfix\">

    <div class=\"submitted\">
        <a class=\"permalink\" rel=\"bookmark\" href=\"/bash/comment/87#comment-87\">

            Permalink

        </a>

        Submitted by

        <a class=\"username\" title=\"View user profile.\" href=\"/bash/user/98\">

            ";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "user"), "html", null, true);
            echo "

        </a>

        on ";
            // line 180
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "created"), "Y-m-d H:i"), "html", null, true);
            echo "

    </div>
    <div class=\"content\">
        <div class=\"field field-name-comment-body field-type-text-long field-label-hidden\">
            <div class=\"field-items\">
                <div class=\"field-item even\">
                    <p>

                        ";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "comment"), "html", null, true);
            echo "

                    </p>
                </div>
            </div>
        </div>
    </div>
    ";
            // line 196
            if (((isset($context["you_are"]) ? $context["you_are"] : null) == "adminuser")) {
                // line 197
                echo "    ";
                $this->displayBlock('editkeys', $context, $blocks);
                // line 222
                echo "        ";
            }
            // line 223
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 197
    public function block_editkeys($context, array $blocks = array())
    {
        // line 198
        echo "        <ul class=\"links inline\">
            <li class=\"comment-delete first\">
                <a href=\"/bash/comment/87/delete\">

                    delete

                </a>
            </li>
            <li class=\"comment-edit\">
                <a href=\"/bash/comment/87/edit\">

                    edit

                </a>
            </li>
            <li class=\"comment-reply last\">
                <a href=\"/bash/comment/reply/167/87\">

                    reply

                </a>
            </li>
        </ul>
    ";
    }

    public function getTemplateName()
    {
        return "BashBashBundle:Page:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 198,  421 => 197,  404 => 223,  401 => 222,  396 => 196,  386 => 189,  367 => 176,  351 => 162,  334 => 161,  331 => 160,  328 => 159,  300 => 251,  295 => 249,  280 => 237,  267 => 226,  265 => 159,  259 => 155,  255 => 153,  253 => 152,  233 => 141,  210 => 121,  178 => 92,  155 => 77,  134 => 59,  124 => 52,  83 => 24,  181 => 96,  161 => 79,  157 => 78,  152 => 76,  84 => 24,  76 => 22,  34 => 4,  58 => 5,  53 => 14,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 197,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 180,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 144,  240 => 86,  238 => 85,  235 => 142,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 58,  119 => 42,  108 => 36,  102 => 32,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  47 => 12,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 23,  75 => 22,  68 => 20,  56 => 17,  50 => 13,  35 => 5,  87 => 25,  72 => 21,  55 => 15,  201 => 92,  196 => 90,  183 => 82,  171 => 88,  166 => 86,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 38,  101 => 34,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  43 => 8,  41 => 7,  28 => 3,  25 => 8,  21 => 2,  31 => 3,  29 => 3,  26 => 6,  24 => 4,  19 => 1,  98 => 33,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 8,  40 => 7,  32 => 4,  27 => 4,  22 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 46,  112 => 42,  109 => 40,  106 => 33,  103 => 32,  99 => 31,  95 => 32,  92 => 31,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 19,  60 => 18,  57 => 11,  54 => 10,  51 => 14,  48 => 2,  45 => 1,  42 => 8,  39 => 7,  36 => 4,  33 => 3,  30 => 7,);
    }
}
