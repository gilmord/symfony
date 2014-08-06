<?php

/* BashBashBundle:Quote:dell.html.twig */
class __TwigTemplate_7528fa0ddb636e3c40f76f2729626fbb78992e442ba254fb1340a89558df5419 extends Twig_Template
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
        echo "    Delete quote
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
        if ((((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == "adminuser") || ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "author")))) {
            // line 33
            echo "
             <div class=\"tabs\">

                <h2 class=\"element-invisible\"></h2>
                <ul class=\"tabs primary\">
                    <li>
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_post", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "id"))), "html", null, true);
            echo "\">

                            View


                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_edit", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "id"))), "html", null, true);
            echo "\">

                            Edit

                        </a>
                    </li>
                    <li class=\"active\">
                        <a class=\"active\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_dell", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "id"))), "html", null, true);
            echo "\">

                            Delete
                             <span class=\"element-invisible\">

                    (active tab)

                </span>

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
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_dell", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
            echo "\"
              method=\"post\"
                ";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " >
            <div id=\"edit-actions\" class=\"form-actions form-wrapper\">

                This action cannot be undone. <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_post", array("id" => $this->getAttribute((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "id"))), "html", null, true);
            echo "\">cancel</a>
                <div id=\"edit-actions\" class=\"form-actions form-wrapper\">
                    ";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
                </div>



            </div>

        </form>



    ";
        } else {
            // line 96
            echo "        You have no rights to delete this post!
    ";
        }
    }

    public function getTemplateName()
    {
        return "BashBashBundle:Quote:dell.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 96,  169 => 84,  164 => 82,  158 => 79,  153 => 77,  127 => 54,  117 => 47,  106 => 39,  98 => 33,  95 => 32,  92 => 31,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  50 => 13,  47 => 12,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
