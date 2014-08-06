<?php

/* BashBashBundle:Quote:form.html.twig */
class __TwigTemplate_1f00e54c01471aa0f5e264765ffb2cb70cb162e8821802eebf41465dd8eacfd0 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_quote_create", array("id" => "0"));
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
        return "BashBashBundle:Quote:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 3,  48 => 2,  45 => 1,  25 => 8,  22 => 7,  20 => 1,  97 => 35,  94 => 34,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  62 => 21,  58 => 5,  52 => 16,  49 => 15,  42 => 8,  39 => 7,  34 => 4,  31 => 9,);
    }
}
