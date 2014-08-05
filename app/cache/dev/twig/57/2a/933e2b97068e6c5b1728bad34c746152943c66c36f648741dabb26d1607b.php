<?php

/* BashBashBundle:Page:myquotes.html.twig */
class __TwigTemplate_572a933e2b97068e6c5b1728bad34c746152943c66c36f648741dabb26d1607b extends Twig_Template
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
        echo "    My quotes
";
    }

    // line 7
    public function block_h1($context, array $blocks = array())
    {
        // line 8
        echo "    You can manage your quotes
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
        echo "\">random</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_govnokod");
        echo "\">govnokod</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_addquote");
        echo "\">add quote</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_addcode");
        echo "\">add code</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_myquotes");
        echo "\" class=\"active\">my quotes</a></li>
        <li class=\"last leaf\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">log out</a>
        </li>
    </ul>
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "


    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) ? $context["quotes"] : $this->getContext($context, "quotes")));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 35
            echo "<div>
        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_post", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "id"))), "html", null, true);
            echo "\">

            #";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "id"), "html", null, true);
            echo "

        </a>

        ->
        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_edit", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "id"))), "html", null, true);
            echo "\">

            edit

        </a>
        |
        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_dell", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "id"))), "html", null, true);
            echo "\">

            delete

        </a>
</div>
        <div class=\"views-row views-row-1 views-row-odd views-row-first\">

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
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_aquotes", array("author" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
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

</a>
        </span>
        <span class=\"field-content\">
            <a href=\"/bash/node/179\"></a>
        </span>
            </div>
            <div class=\"views-field views-field-created\">
        <span class=\"field-content\">
            ";
            // line 105
            if ((twig_date_format_filter($this->env, "now", "Y-m-d") == twig_date_format_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "created"), "Y-m-d"))) {
                // line 106
                echo "                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "created"), "Y-m-d H:i"), "html", null, true);
                echo "
                <div id=\"hot\"><strong>hot!</strong></div>
            ";
            } else {
                // line 109
                echo "                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "created"), "Y-m-d H:i"), "html", null, true);
                echo "
            ";
            }
            // line 111
            echo "        </span>
            </div>
            <div class=\"views-field views-field-nothing\">
        <span class=\"field-content\">
            <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_post", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "id"))), "html", null, true);
            echo "\">

                #";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "id"), "html", null, true);
            echo "

            </a>
        </span>
            </div>
            <div class=\"views-field views-field-body\">
                <div class=\"field-content\">
                    <p>

                        ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "subject"), "html", null, true);
            echo "

                    </p>
                </div>
            </div>
            <div class=\"views-field views-field-field-image\">
                <div class=\"field-content\">
                    ";
            // line 133
            if ($this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "path")) {
                // line 134
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "image/", 1 => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "path")))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "subject"), "html", null, true);
                echo " image not found\"/>
                    ";
            }
            // line 136
            echo "                </div>

            </div>

        </div>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "


";
    }

    public function getTemplateName()
    {
        return "BashBashBundle:Page:myquotes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 144,  251 => 136,  243 => 134,  241 => 133,  231 => 126,  219 => 117,  214 => 115,  208 => 111,  202 => 109,  195 => 106,  193 => 105,  166 => 83,  129 => 49,  120 => 43,  112 => 38,  107 => 36,  104 => 35,  100 => 34,  95 => 31,  92 => 30,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  50 => 13,  47 => 12,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
