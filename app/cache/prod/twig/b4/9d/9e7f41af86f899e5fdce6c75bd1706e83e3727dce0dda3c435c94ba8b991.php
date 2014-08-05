<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b49d9e7f41af86f899e5fdce6c75bd1706e83e3727dce0dda3c435c94ba8b991 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 14
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 16
        echo "        </div>

        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 19
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "\">
                    ";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        <div>
            ";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "        </div>
    </body>
</html>
";
    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 28
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 184,  353 => 177,  350 => 176,  348 => 175,  345 => 174,  329 => 166,  324 => 164,  321 => 163,  318 => 162,  311 => 158,  307 => 156,  304 => 155,  297 => 153,  287 => 146,  276 => 138,  271 => 136,  262 => 131,  256 => 195,  197 => 99,  191 => 97,  170 => 84,  222 => 115,  190 => 96,  185 => 94,  137 => 62,  96 => 30,  212 => 112,  172 => 85,  251 => 130,  231 => 126,  195 => 106,  129 => 49,  120 => 43,  104 => 36,  100 => 27,  81 => 24,  77 => 20,  65 => 17,  97 => 32,  74 => 22,  70 => 21,  52 => 14,  184 => 94,  153 => 77,  127 => 54,  237 => 137,  232 => 122,  216 => 107,  213 => 106,  207 => 104,  202 => 105,  160 => 123,  145 => 109,  424 => 198,  421 => 197,  404 => 223,  401 => 222,  396 => 196,  386 => 189,  367 => 176,  351 => 162,  334 => 161,  331 => 160,  328 => 159,  300 => 154,  295 => 249,  280 => 237,  267 => 226,  265 => 132,  259 => 155,  255 => 153,  253 => 152,  233 => 141,  210 => 108,  178 => 87,  155 => 77,  134 => 59,  124 => 52,  83 => 24,  181 => 96,  161 => 79,  157 => 78,  152 => 76,  84 => 23,  76 => 21,  34 => 4,  58 => 18,  53 => 14,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 197,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 192,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 171,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 144,  258 => 81,  252 => 80,  247 => 78,  241 => 133,  229 => 125,  220 => 114,  214 => 113,  177 => 137,  169 => 84,  140 => 55,  132 => 51,  128 => 57,  111 => 37,  107 => 37,  61 => 16,  273 => 137,  269 => 94,  254 => 131,  246 => 90,  243 => 134,  240 => 124,  238 => 85,  235 => 142,  230 => 121,  227 => 81,  224 => 121,  221 => 120,  219 => 117,  217 => 75,  208 => 105,  204 => 72,  179 => 90,  159 => 61,  143 => 106,  135 => 53,  131 => 58,  119 => 42,  108 => 36,  102 => 32,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  47 => 12,  38 => 7,  94 => 31,  89 => 30,  85 => 25,  79 => 26,  75 => 22,  68 => 19,  56 => 17,  50 => 13,  35 => 4,  87 => 25,  72 => 21,  55 => 17,  201 => 102,  196 => 90,  183 => 82,  171 => 88,  166 => 83,  163 => 62,  158 => 79,  156 => 66,  151 => 72,  142 => 59,  138 => 104,  136 => 56,  123 => 91,  121 => 88,  117 => 41,  115 => 44,  105 => 38,  101 => 34,  91 => 27,  69 => 18,  66 => 20,  62 => 19,  49 => 13,  43 => 8,  41 => 7,  28 => 3,  25 => 8,  21 => 2,  31 => 9,  29 => 8,  26 => 1,  24 => 4,  19 => 1,  98 => 33,  93 => 29,  88 => 24,  78 => 23,  46 => 14,  44 => 8,  40 => 11,  32 => 3,  27 => 4,  22 => 7,  209 => 82,  203 => 103,  199 => 88,  193 => 105,  189 => 93,  187 => 84,  182 => 93,  176 => 64,  173 => 88,  168 => 72,  164 => 84,  162 => 59,  154 => 58,  149 => 51,  147 => 69,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 46,  112 => 40,  109 => 79,  106 => 39,  103 => 28,  99 => 33,  95 => 30,  92 => 29,  86 => 25,  82 => 24,  80 => 22,  73 => 19,  64 => 18,  60 => 17,  57 => 15,  54 => 16,  51 => 12,  48 => 2,  45 => 1,  42 => 8,  39 => 7,  36 => 10,  33 => 4,  30 => 3,);
    }
}
