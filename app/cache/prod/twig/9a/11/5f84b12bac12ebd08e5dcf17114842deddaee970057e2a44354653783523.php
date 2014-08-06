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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BashBashBundle_comment_create", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "blogid"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " >
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
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
        echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
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
        return array (  52 => 3,  184 => 96,  153 => 77,  127 => 54,  237 => 137,  232 => 126,  216 => 107,  213 => 106,  207 => 104,  202 => 89,  160 => 123,  145 => 109,  424 => 198,  421 => 197,  404 => 223,  401 => 222,  396 => 196,  386 => 189,  367 => 176,  351 => 162,  334 => 161,  331 => 160,  328 => 159,  300 => 251,  295 => 249,  280 => 237,  267 => 226,  265 => 159,  259 => 155,  255 => 153,  253 => 152,  233 => 141,  210 => 121,  178 => 92,  155 => 77,  134 => 59,  124 => 52,  83 => 24,  181 => 96,  161 => 79,  157 => 78,  152 => 76,  84 => 24,  76 => 22,  34 => 4,  58 => 5,  53 => 14,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 197,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 180,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 125,  220 => 70,  214 => 69,  177 => 137,  169 => 84,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 144,  240 => 138,  238 => 85,  235 => 142,  230 => 82,  227 => 81,  224 => 121,  221 => 120,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 140,  159 => 61,  143 => 106,  135 => 53,  131 => 58,  119 => 42,  108 => 36,  102 => 32,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  47 => 2,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 23,  75 => 22,  68 => 20,  56 => 17,  50 => 13,  35 => 5,  87 => 25,  72 => 21,  55 => 15,  201 => 92,  196 => 90,  183 => 82,  171 => 88,  166 => 128,  163 => 62,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 104,  136 => 56,  123 => 91,  121 => 88,  117 => 47,  115 => 43,  105 => 38,  101 => 34,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  43 => 8,  41 => 7,  28 => 4,  25 => 8,  21 => 2,  31 => 9,  29 => 3,  26 => 1,  24 => 4,  19 => 1,  98 => 33,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 1,  40 => 7,  32 => 4,  27 => 4,  22 => 7,  209 => 82,  203 => 78,  199 => 88,  193 => 9,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 82,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 46,  112 => 42,  109 => 79,  106 => 39,  103 => 32,  99 => 31,  95 => 32,  92 => 31,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 19,  60 => 18,  57 => 5,  54 => 10,  51 => 14,  48 => 2,  45 => 1,  42 => 8,  39 => 7,  36 => 9,  33 => 3,  30 => 7,);
    }
}
