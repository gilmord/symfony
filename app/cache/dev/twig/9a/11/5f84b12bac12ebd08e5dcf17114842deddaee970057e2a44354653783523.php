<?php

/* BashBashBundle:Comment:form.html.twig */
class __TwigTemplate_9a115f84b12bac12ebd08e5dcf17114842deddaee970057e2a44354653783523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 7
        echo "
<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_comment_create", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blogid"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
    <div id=\"edit-actions\" class=\"form-actions form-wrapper\">

        <input id=\"edit-submit\" class=\"form-submit\" type=\"submit\" value=\"Save\" name=\"op\">

    </div>
    </p>
</form>";
    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        // line 2
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tinymce/jquery.tinymce.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 5
        echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "BashBashBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 5,  52 => 3,  47 => 2,  44 => 1,  31 => 9,  25 => 8,  22 => 7,  20 => 1,);
    }
}
