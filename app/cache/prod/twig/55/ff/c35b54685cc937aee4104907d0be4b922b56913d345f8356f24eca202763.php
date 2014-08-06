<?php

/* BashBashBundle:Quote:edit.html.twig */
class __TwigTemplate_55ffc35b54685cc937aee4104907d0be4b922b56913d345f8356f24eca202763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BashBashBundle:Page:post.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BashBashBundle:Page:post.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Edit quote
";
    }

    // line 7
    public function block_h1($context, array $blocks = array())
    {
        // line 8
        echo "
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
        echo "\">my quotes</a></li>
        <li class=\"last leaf\"><a href=\"";
        // line 24
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
        echo "    ";
        if ((((isset($context["user"]) ? $context["user"] : null) == "adminuser") || ((isset($context["user"]) ? $context["user"] : null) == $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "author")))) {
            // line 33
            echo "        <div class=\"tabs\">

            <h2 class=\"element-invisible\"></h2>
            <ul class=\"tabs primary\">
                <li >
                    <a  href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_post", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "id"))), "html", null, true);
            echo "\">

                        View


                    </a>
                </li>
                <li class=\"active\">
                    <a class=\"active\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_edit", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "id"))), "html", null, true);
            echo "\">

                        Edit
                          <span class=\"element-invisible\">

                    (active tab)

                </span>

                    </a>
                </li>
                <li>
                    <a  href=\"";
            // line 58
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


        <form action=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_edit", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
            echo "\"
              method=\"post\"
                ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo " >
            ";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
            <p>
            <div id=\"edit-actions\" class=\"form-actions form-wrapper\">

                <input id=\"edit-submit\" class=\"form-submit\" type=\"submit\" value=\"Save\" name=\"op\">


            </div>
            </p>
        </form>






    ";
        } else {
            // line 96
            echo "        You have no rights to edit this post!
    ";
        }
    }

    public function getTemplateName()
    {
        return "BashBashBundle:Quote:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 96,  161 => 79,  157 => 78,  152 => 76,  84 => 24,  76 => 22,  34 => 4,  58 => 5,  53 => 3,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 58,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 12,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 20,  56 => 17,  50 => 13,  35 => 5,  87 => 25,  72 => 21,  55 => 15,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 38,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  43 => 8,  41 => 7,  28 => 3,  25 => 8,  21 => 2,  31 => 3,  29 => 3,  26 => 6,  24 => 4,  19 => 1,  98 => 33,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  40 => 7,  32 => 4,  27 => 4,  22 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 46,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 32,  92 => 31,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 19,  60 => 18,  57 => 11,  54 => 10,  51 => 14,  48 => 2,  45 => 1,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
