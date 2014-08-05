<?php

/* ::base.html.twig */
class __TwigTemplate_480855508ec62a24397b1fe10bf5ed37f4bb71ab3982500e15ee7c8fc73fe0aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'h1' => array($this, 'block_h1'),
            'precontent' => array($this, 'block_precontent'),
            'content' => array($this, 'block_content'),
            'comments' => array($this, 'block_comments'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML+RDFa 1.0//EN\"
        \"http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"uk\" version=\"XHTML+RDFa 1.0\" dir=\"ltr\">

<head profile=\"http://www.w3.org/1999/xhtml/vocab\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /><script type=\"text/javascript\">window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o?o:n)},o,o.exports)}return n[e].exports}if(\"function\"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({D5DuLP:[function(t,n){function e(t,n){var e=r[t];return e?e.apply(this,n):(o[t]||(o[t]=[]),void o[t].push(n))}var r={},o={};n.exports=e,e.queues=o,e.handlers=r},{}],handle:[function(t,n){n.exports=t(\"D5DuLP\")},{}],G9z0Bl:[function(t,n){function e(){var t=l.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&p&&p.body){l.proto=\"https\"===f.split(\":\")[0]||t.sslForHttp?\"https://\":\"http://\",i(\"mark\",[\"onload\",a()]);var n=p.createElement(\"script\");n.src=l.proto+t.agent,p.body.appendChild(n)}}function r(){\"complete\"===p.readyState&&o()}function o(){i(\"mark\",[\"domContent\",a()])}function a(){return(new Date).getTime()}var i=t(\"handle\"),u=window,p=u.document,s=\"addEventListener\",c=\"attachEvent\",f=(\"\"+location).split(\"?\")[0],l=n.exports={offset:a(),origin:f,features:[]};p[s]?(p[s](\"DOMContentLoaded\",o,!1),u[s](\"load\",e,!1)):(p[c](\"onreadystatechange\",r),u[c](\"onload\",e)),i(\"mark\",[\"firstbyte\",a()])},{handle:\"D5DuLP\"}],loader:[function(t,n){n.exports=t(\"G9z0Bl\")},{}]},{},[\"G9z0Bl\"]);</script>
    <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/vnd.microsoft.icon\" />
    <meta name=\"Generator\" content=\"Drupal 7 (http://drupal.org)\" />
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>






    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/framework/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/framework/960.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/system.theme.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/system.messages.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/system.menus.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/system.base.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/rate.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/number-up-down.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

</head>
<body class=\"html front logged-in no-sidebars page-quotes show-grid\" >
<div id=\"skip-link\">
    <a href=\"#main-content\" class=\"element-invisible element-focusable\">Skip to main content</a>
</div>
<div id=\"site-header\" class=\"clearfix\">
    <div class=\"container-16\">
        <div id=\"branding\" class=\"grid-4 clearfix\">
            <span id=\"logo\" class=\"grid-1 alpha\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("BashBashBundle_recent", array("id" => 1));
        echo "\" rel=\"home\" title=\"Home\" class=\"active\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("logo_bash_0.png"), "html", null, true);
        echo "\" alt=\"Home\" title=\"Home\" /></a></span>
        </div>
        <div id=\"header-region\" class=\"grid-12 region clearfix\">
            <div class=\"region region-header\">
                <div id=\"block-system-main-menu\" class=\"block block-system block-menu\">


                    <div class=\"content\">
                        <h1 id=\"page-title\" class=\"title\">
                        ";
        // line 42
        $this->displayBlock('menu', $context, $blocks);
        // line 45
        echo "                            </h1>
            </div>
        </div>

    </div>
</div>
<div id=\"page\" class=\"container-16 clearfix\">
<div id=\"site-subheader\" class=\"prefix-1 suffix-1 clearfix\">
</div>


<div id=\"main\" class=\"column\">

<h1 class=\"title\" id=\"page-title\">";
        // line 58
        $this->displayBlock('h1', $context, $blocks);
        echo "</h1>

    ";
        // line 60
        $this->displayBlock('precontent', $context, $blocks);
        // line 63
        echo "

<div id=\"main-content\" class=\"region clearfix\">
<div class=\"region region-content\">
<div id=\"block-system-main\" class=\"block block-system\">



<div class=\"content\">
<div class=\"view view-quotes view-id-quotes view-display-id-page view-dom-id-e1e19f9d8380cf926a97b26d4af209d1\">

";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "

";
        // line 79
        $this->displayBlock('comments', $context, $blocks);
        // line 82
        echo "


</div>
</div>
</div>

</div>

    ";
        // line 91
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 94
        echo "

<div id=\"footer\" class=\"prefix-1 suffix-1\">

</div>

</div>
<script type=\"text/javascript\" src=\"http://bash.drupalcompany.com/sites/all/modules/rate/rate.js?n42cif\"></script>
<script type=\"text/javascript\">window.NREUM||(NREUM={});NREUM.info={\"beacon\":\"beacon-1.newrelic.com\",\"licenseKey\":\"1152f9a367\",\"applicationID\":\"3007556\",\"transactionName\":\"NlJXbBNRWUtVBUALWw8YdFsVWVhWGxBdB0MSaEVZBlU=\",\"queueTime\":0,\"applicationTime\":321,\"ttGuid\":\"\",\"agentToken\":\"\",\"userAttributes\":\"\",\"errorBeacon\":\"bam.nr-data.net\",\"agent\":\"js-agent.newrelic.com\\/nr-411.min.js\"}</script></body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 42
    public function block_menu($context, array $blocks = array())
    {
        // line 43
        echo "                                menu
                        ";
    }

    // line 58
    public function block_h1($context, array $blocks = array())
    {
        echo " ";
    }

    // line 60
    public function block_precontent($context, array $blocks = array())
    {
        // line 61
        echo "
    ";
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
        // line 75
        echo "
";
    }

    // line 79
    public function block_comments($context, array $blocks = array())
    {
        // line 80
        echo "
";
    }

    // line 91
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 92
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 92,  220 => 91,  215 => 80,  212 => 79,  207 => 75,  204 => 74,  199 => 61,  196 => 60,  190 => 58,  185 => 43,  182 => 42,  176 => 9,  162 => 94,  160 => 91,  149 => 82,  147 => 79,  143 => 77,  141 => 74,  128 => 63,  126 => 60,  121 => 58,  106 => 45,  104 => 42,  90 => 33,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  39 => 9,  34 => 7,  26 => 1,);
    }
}
