<?php

/* BashBashBundle:Page:best.html.twig */
class __TwigTemplate_caec18f386cd99e5b318587f25e03a205b5c88a490c8df4473b8db81d2e80a72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
            'menu' => array($this, 'block_menu'),
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
        echo "    Best
";
    }

    // line 7
    public function block_h1($context, array $blocks = array())
    {
        // line 8
        echo "    Best
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "    <ul class=\"menu\">
        <li class=\"first leaf rss\"><a
                    href=\"#\" title=\"\">rss</a>
        </li>
        <li class=\"leaf\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_recent", array("id" => 1));
        echo "\">recent</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_best");
        echo "\"
                            class=\"active\">best</a></li>
        <li class=\"leaf\"><a
                    href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_random");
        echo "\">random</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_govnokod");
        echo "\">govnokod</a>
        </li>
        <li class=\"leaf\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_addquote");
        echo "\">add
                quote</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_addcode");
        echo "\">add
                code</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_myquotes");
        echo "\">my
                quotes</a></li>
        <li class=\"last leaf\"><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">log out</a></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "BashBashBundle:Page:best.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  84 => 28,  79 => 26,  74 => 24,  69 => 22,  65 => 21,  59 => 18,  55 => 17,  49 => 13,  46 => 12,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
