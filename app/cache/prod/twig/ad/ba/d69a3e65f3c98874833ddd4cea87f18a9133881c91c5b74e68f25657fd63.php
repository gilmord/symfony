<?php

/* BashBashBundle:Page:addcode.html.twig */
class __TwigTemplate_adbad69a3e65f3c98874833ddd4cea87f18a9133881c91c5b74e68f25657fd63 extends Twig_Template
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
        echo "    Add code
";
    }

    // line 7
    public function block_h1($context, array $blocks = array())
    {
        // line 8
        echo "    Add code
";
    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        // line 12
        echo "    <ul class=\"menu\">
        <li class=\"first leaf rss\"><a href=\"/bash.rss?token=WJieXgVAbka5rreCz9pd\" title=\"\">rss</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_recent");
        echo "\">recent</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_best");
        echo "\">best</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_random");
        echo "\">random</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_govnokod");
        echo "\">govnokod</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_addquote");
        echo "\">add quote</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_addcode");
        echo "\" class=\"active\">add code</a></li>
        <li class=\"leaf\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_myquotes");
        echo "\">my quotes</a></li>
        <li class=\"last leaf\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">log out</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "BashBashBundle:Page:addcode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  77 => 20,  65 => 17,  97 => 35,  74 => 24,  70 => 23,  52 => 16,  184 => 96,  153 => 77,  127 => 54,  237 => 137,  232 => 126,  216 => 107,  213 => 106,  207 => 104,  202 => 89,  160 => 123,  145 => 109,  424 => 198,  421 => 197,  404 => 223,  401 => 222,  396 => 196,  386 => 189,  367 => 176,  351 => 162,  334 => 161,  331 => 160,  328 => 159,  300 => 251,  295 => 249,  280 => 237,  267 => 226,  265 => 159,  259 => 155,  255 => 153,  253 => 152,  233 => 141,  210 => 121,  178 => 92,  155 => 77,  134 => 59,  124 => 52,  83 => 24,  181 => 96,  161 => 79,  157 => 78,  152 => 76,  84 => 24,  76 => 22,  34 => 4,  58 => 20,  53 => 14,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 197,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 180,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 125,  220 => 70,  214 => 69,  177 => 137,  169 => 84,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 144,  240 => 138,  238 => 85,  235 => 142,  230 => 82,  227 => 81,  224 => 121,  221 => 120,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 140,  159 => 61,  143 => 106,  135 => 53,  131 => 58,  119 => 42,  108 => 36,  102 => 32,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  47 => 2,  38 => 7,  94 => 34,  89 => 20,  85 => 25,  79 => 23,  75 => 22,  68 => 20,  56 => 17,  50 => 13,  35 => 5,  87 => 25,  72 => 21,  55 => 15,  201 => 92,  196 => 90,  183 => 82,  171 => 88,  166 => 128,  163 => 62,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 104,  136 => 56,  123 => 91,  121 => 88,  117 => 47,  115 => 43,  105 => 38,  101 => 34,  91 => 27,  69 => 18,  66 => 22,  62 => 21,  49 => 12,  43 => 8,  41 => 8,  28 => 4,  25 => 8,  21 => 2,  31 => 3,  29 => 3,  26 => 1,  24 => 4,  19 => 1,  98 => 33,  93 => 28,  88 => 6,  78 => 25,  46 => 11,  44 => 1,  40 => 7,  32 => 4,  27 => 4,  22 => 7,  209 => 82,  203 => 78,  199 => 88,  193 => 9,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 82,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 46,  112 => 42,  109 => 79,  106 => 39,  103 => 32,  99 => 31,  95 => 32,  92 => 31,  86 => 27,  82 => 26,  80 => 23,  73 => 19,  64 => 19,  60 => 18,  57 => 15,  54 => 10,  51 => 14,  48 => 2,  45 => 1,  42 => 8,  39 => 7,  36 => 6,  33 => 4,  30 => 3,);
    }
}
