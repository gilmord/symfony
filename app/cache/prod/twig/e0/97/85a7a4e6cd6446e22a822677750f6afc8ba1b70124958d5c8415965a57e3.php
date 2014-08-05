<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e09785a7a4e6cd6446e22a822677750f6afc8ba1b70124958d5c8415965a57e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  363 => 184,  353 => 177,  350 => 176,  348 => 175,  345 => 174,  329 => 166,  324 => 164,  321 => 163,  318 => 162,  311 => 158,  307 => 156,  304 => 155,  297 => 153,  287 => 146,  276 => 138,  271 => 136,  262 => 131,  256 => 195,  197 => 99,  191 => 97,  170 => 84,  222 => 115,  190 => 96,  185 => 94,  137 => 62,  96 => 30,  212 => 112,  172 => 85,  251 => 130,  231 => 126,  195 => 106,  129 => 49,  120 => 43,  104 => 36,  100 => 27,  81 => 24,  77 => 20,  65 => 17,  97 => 32,  74 => 22,  70 => 21,  52 => 14,  184 => 94,  153 => 77,  127 => 54,  237 => 137,  232 => 122,  216 => 107,  213 => 106,  207 => 104,  202 => 105,  160 => 123,  145 => 109,  424 => 198,  421 => 197,  404 => 223,  401 => 222,  396 => 196,  386 => 189,  367 => 176,  351 => 162,  334 => 161,  331 => 160,  328 => 159,  300 => 154,  295 => 249,  280 => 237,  267 => 226,  265 => 132,  259 => 155,  255 => 153,  253 => 152,  233 => 141,  210 => 108,  178 => 87,  155 => 77,  134 => 59,  124 => 52,  83 => 24,  181 => 96,  161 => 79,  157 => 78,  152 => 76,  84 => 23,  76 => 21,  34 => 7,  58 => 18,  53 => 14,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 197,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 192,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 171,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 144,  258 => 81,  252 => 80,  247 => 78,  241 => 133,  229 => 125,  220 => 114,  214 => 113,  177 => 137,  169 => 84,  140 => 55,  132 => 51,  128 => 57,  111 => 37,  107 => 37,  61 => 16,  273 => 137,  269 => 94,  254 => 131,  246 => 90,  243 => 134,  240 => 124,  238 => 85,  235 => 142,  230 => 121,  227 => 81,  224 => 121,  221 => 120,  219 => 117,  217 => 75,  208 => 105,  204 => 72,  179 => 90,  159 => 61,  143 => 106,  135 => 53,  131 => 58,  119 => 42,  108 => 36,  102 => 32,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  47 => 12,  38 => 8,  94 => 31,  89 => 30,  85 => 25,  79 => 26,  75 => 22,  68 => 19,  56 => 17,  50 => 10,  35 => 8,  87 => 25,  72 => 22,  55 => 14,  201 => 102,  196 => 90,  183 => 82,  171 => 88,  166 => 83,  163 => 62,  158 => 79,  156 => 66,  151 => 72,  142 => 59,  138 => 104,  136 => 56,  123 => 91,  121 => 88,  117 => 41,  115 => 44,  105 => 38,  101 => 34,  91 => 27,  69 => 18,  66 => 20,  62 => 19,  49 => 13,  43 => 12,  41 => 9,  28 => 5,  25 => 8,  21 => 2,  31 => 6,  29 => 6,  26 => 12,  24 => 7,  19 => 2,  98 => 33,  93 => 29,  88 => 24,  78 => 23,  46 => 11,  44 => 8,  40 => 11,  32 => 3,  27 => 5,  22 => 2,  209 => 82,  203 => 103,  199 => 88,  193 => 105,  189 => 93,  187 => 84,  182 => 93,  176 => 64,  173 => 88,  168 => 72,  164 => 84,  162 => 59,  154 => 58,  149 => 51,  147 => 69,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 46,  112 => 40,  109 => 79,  106 => 39,  103 => 28,  99 => 33,  95 => 30,  92 => 29,  86 => 25,  82 => 24,  80 => 22,  73 => 19,  64 => 18,  60 => 16,  57 => 15,  54 => 16,  51 => 13,  48 => 12,  45 => 1,  42 => 10,  39 => 9,  36 => 7,  33 => 7,  30 => 2,);
    }
}
