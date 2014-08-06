<?php

/* ::basecomment.html.twig */
class __TwigTemplate_f11b5fd78dec6d8dcb3dd9bf156710e8ad90ceb3438efd57bd105df1cc5a83e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML+RDFa 1.0//EN\"
        \"http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"uk\" version=\"XHTML+RDFa 1.0\" dir=\"ltr\">

<head profile=\"http://www.w3.org/1999/xhtml/vocab\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <script type=\"text/javascript\">window.NREUM || (NREUM = {}), __nr_require = function (t, n, e) {
            function r(e) {
                if (!n[e]) {
                    var o = n[e] = {exports: {}};
                    t[e][0].call(o.exports, function (n) {
                        var o = t[e][1][n];
                        return r(o ? o : n)
                    }, o, o.exports)
                }
                return n[e].exports
            }

            if (\"function\" == typeof __nr_require)return __nr_require;
            for (var o = 0; o < e.length; o++)r(e[o]);
            return r
        }({D5DuLP: [function (t, n) {
            function e(t, n) {
                var e = r[t];
                return e ? e.apply(this, n) : (o[t] || (o[t] = []), void o[t].push(n))
            }

            var r = {}, o = {};
            n.exports = e, e.queues = o, e.handlers = r
        }, {}], handle: [function (t, n) {
            n.exports = t(\"D5DuLP\")
        }, {}], G9z0Bl: [function (t, n) {
            function e() {
                var t = l.info = NREUM.info;
                if (t && t.agent && t.licenseKey && t.applicationID && p && p.body) {
                    l.proto = \"https\" === f.split(\":\")[0] || t.sslForHttp ? \"https://\" : \"http://\", i(\"mark\", [\"onload\", a()]);
                    var n = p.createElement(\"script\");
                    n.src = l.proto + t.agent, p.body.appendChild(n)
                }
            }

            function r() {
                \"complete\" === p.readyState && o()
            }

            function o() {
                i(\"mark\", [\"domContent\", a()])
            }

            function a() {
                return(new Date).getTime()
            }

            var i = t(\"handle\"), u = window, p = u.document, s = \"addEventListener\", c = \"attachEvent\", f = (\"\" + location).split(\"?\")[0], l = n.exports = {offset: a(), origin: f, features: []};
            p[s] ? (p[s](\"DOMContentLoaded\", o, !1), u[s](\"load\", e, !1)) : (p[c](\"onreadystatechange\", r), u[c](\"onload\", e)), i(\"mark\", [\"firstbyte\", a()])
        }, {handle: \"D5DuLP\"}], loader: [function (t, n) {
            n.exports = t(\"G9z0Bl\")
        }, {}]}, {}, [\"G9z0Bl\"]);</script>
    <link rel=\"shortcut icon\" href=\"http://bash.drupalcompany.com/sites/default/files/favicon.ico\"
          type=\"image/vnd.microsoft.icon\"/>
    <meta name=\"Generator\" content=\"Drupal 7 (http://drupal.org)\"/>
    <title>";
        // line 62
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <style type=\"text/css\" media=\"all\">@import url(\"http://bash.drupalcompany.com/modules/comment/comment.css?n42cif\");
        @import url(\"http://bash.drupalcompany.com/modules/field/theme/field.css?n42cif\");
        @import url(\"http://bash.drupalcompany.com/modules/node/node.css?n42cif\");
        @import url(\"http://bash.drupalcompany.com/modules/user/user.css?n42cif\");
        @import url(\"http://bash.drupalcompany.com/sites/all/modules/views/css/views.css?n42cif\");</style>
    <style type=\"text/css\"
           media=\"all\">@import url(\"http://bash.drupalcompany.com/sites/all/modules/colorbox/styles/default/colorbox_default_style.css?n42cif\");
        @import url(\"http://bash.drupalcompany.com/sites/all/modules/ctools/css/ctools.css?n42cif\");
        @import url(\"http://bash.drupalcompany.com/sites/all/modules/rate/rate.css?n42cif\");
        @import url(\"http://bash.drupalcompany.com/sites/all/modules/rate/templates/number-up-down/number-up-down.css?n42cif\");</style>


    <style type=\"text/css\" media=\"all\">
        @import url(\"http://bash.drupalcompany.com/modules/system/system.base.css?n42cif\");
        @import url(\"http://bash.drupalcompany.com/modules/system/system.menus.css?n42cif\");
        @import url(\"http://bash.drupalcompany.com/modules/system/system.messages.css?n42cif\");
        @import url(\"http://bash.drupalcompany.com/modules/system/system.theme.css?n42cif\");</style>

    <style type=\"text/css\" media=\"all\">
        @import url(\"http://bash.drupalcompany.com/sites/all/themes/bash/styles/framework/reset.css?n42cif\");
        @import url(\"http://bash.drupalcompany.com/sites/all/themes/bash/styles/framework/960.css?n42cif\");
    </style>


    <script type=\"text/javascript\" src=\"http://bash.drupalcompany.com/misc/jquery.js?v=1.4.4\"></script>
    <script type=\"text/javascript\" src=\"http://bash.drupalcompany.com/misc/jquery.once.js?v=1.2\"></script>
    <script type=\"text/javascript\" src=\"http://bash.drupalcompany.com/misc/drupal.js?n42cif\"></script>
    <script type=\"text/javascript\" src=\"http://bash.drupalcompany.com/misc/ajax.js?v=7.21\"></script>
    <script type=\"text/javascript\"
            src=\"http://bash.drupalcompany.com/sites/all/libraries/colorbox/colorbox/jquery.colorbox-min.js?n42cif\"></script>
    <script type=\"text/javascript\"
            src=\"http://bash.drupalcompany.com/sites/all/modules/colorbox/js/colorbox.js?n42cif\"></script>
    <script type=\"text/javascript\"
            src=\"http://bash.drupalcompany.com/sites/all/modules/colorbox/styles/default/colorbox_default_style.js?n42cif\"></script>
    <script type=\"text/javascript\">
        <!--//-->
        <![CDATA[//><!--
        var _gaq = _gaq || [];
        _gaq.push(['b._setAccount', 'UA-1222507-50']);
        _gaq.push(['b._setDomainName', 'auto']);
        _gaq.push(['b._setAllowLinker', true]);
        _gaq.push(['b._trackPageview']);
        _gaq.push(['b._trackPageLoadTime']);
        if (typeof microtime_ga !== \"undefined\") {
            _gaq.push(['b._trackEvent', 'Response time (ms)', 'url_ga', 'bash.drupalcompany.com', microtime_ga]);
        }
        if (typeof memory_get_peak_usage_ga !== \"undefined\") {
            _gaq.push(['b._trackEvent', 'Peak memory usage (KB)', 'memory_ga', 'bash.drupalcompany.com', memory_get_peak_usage_ga]);
        }
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
        //--><!
        ]]>
    </script>
    <script type=\"text/javascript\" src=\"http://bash.drupalcompany.com/misc/progress.js?v=7.21\"></script>
    <script type=\"text/javascript\" src=\"http://bash.drupalcompany.com/sites/all/themes/bash/js/bash.js?n42cif\"></script>
    <script type=\"text/javascript\">
        <!--//-->
        <![CDATA[//><!--
        jQuery.extend(Drupal.settings, {\"basePath\": \"\\/\", \"pathPrefix\": \"\", \"ajaxPageState\": {\"theme\": \"bash\", \"theme_token\": \"fkGr4wUPn6xRdjRU5a_6EY944iTNYwsf_dJyIKXufFQ\", \"js\": {\"sites\\/all\\/modules\\/rate\\/rate.js\": 1, \"misc\\/jquery.js\": 1, \"misc\\/jquery.once.js\": 1, \"misc\\/drupal.js\": 1, \"misc\\/ajax.js\": 1, \"sites\\/all\\/libraries\\/colorbox\\/colorbox\\/jquery.colorbox-min.js\": 1, \"sites\\/all\\/modules\\/colorbox\\/js\\/colorbox.js\": 1, \"sites\\/all\\/modules\\/colorbox\\/styles\\/default\\/colorbox_default_style.js\": 1, \"0\": 1, \"misc\\/progress.js\": 1, \"sites\\/all\\/themes\\/bash\\/js\\/bash.js\": 1}, \"css\": {\"modules\\/system\\/system.base.css\": 1, \"modules\\/system\\/system.menus.css\": 1, \"modules\\/system\\/system.messages.css\": 1, \"modules\\/system\\/system.theme.css\": 1, \"modules\\/comment\\/comment.css\": 1, \"modules\\/field\\/theme\\/field.css\": 1, \"modules\\/node\\/node.css\": 1, \"modules\\/user\\/user.css\": 1, \"sites\\/all\\/modules\\/views\\/css\\/views.css\": 1, \"sites\\/all\\/modules\\/colorbox\\/styles\\/default\\/colorbox_default_style.css\": 1, \"sites\\/all\\/modules\\/ctools\\/css\\/ctools.css\": 1, \"sites\\/all\\/modules\\/rate\\/rate.css\": 1, \"sites\\/all\\/modules\\/rate\\/templates\\/number-up-down\\/number-up-down.css\": 1, \"sites\\/all\\/themes\\/bash\\/styles\\/framework\\/reset.css\": 1, \"sites\\/all\\/themes\\/bash\\/styles\\/framework\\/960.css\": 1, \"sites\\/all\\/themes\\/bash\\/styles\\/styles.css\": 1}}, \"colorbox\": {\"opacity\": \"0.85\", \"current\": \"{current} of {total}\", \"previous\": \"\\u00ab Prev\", \"next\": \"Next \\u00bb\", \"close\": \"Close\", \"maxWidth\": \"100%\", \"maxHeight\": \"100%\", \"fixed\": true, \"__drupal_alter_by_ref\": [\"default\"]}, \"rate\": {\"basePath\": \"\\/rate\\/vote\\/js\", \"destination\": \"quotes\"}});
        //--><!
        ]]>
    </script>
</head>


<body class=\"html not-front logged-in no-sidebars page-node page-node- page-node-167 node-type-quote show-grid\">
<div id=\"skip-link\">
    <a href=\"#main-content\" class=\"element-invisible element-focusable\">Skip to main content</a>
</div>
<div id=\"site-header\" class=\"clearfix\">
    <div class=\"container-16\">
        <div id=\"branding\" class=\"grid-4 clearfix\">
            <span id=\"logo\" class=\"grid-1 alpha\"><a href=\"/bash/\" rel=\"home\" title=\"Home\"><img
                            src=\"http://localhost/bash/sites/default/files/logo_bash_0.png\" alt=\"Home\"
                            title=\"Home\"/></a></span>
        </div>
        <div id=\"header-region\" class=\"grid-12 region clearfix\">
            <div class=\"region region-header\">
                <div id=\"block-system-main-menu\" class=\"block block-system contextual-links-region block-menu\">

                    <div class=\"contextual-links-wrapper\">
                        <ul class=\"contextual-links\">
                            <li class=\"menu-list first\"><a
                                        href=\"/bash/admin/structure/menu/manage/main-menu/list?destination=node/167\">List
                                    links</a></li>
                            <li class=\"menu-edit\"><a
                                        href=\"/bash/admin/structure/menu/manage/main-menu/edit?destination=node/167\">Edit
                                    menu</a></li>
                            <li class=\"block-configure last\"><a
                                        href=\"/bash/admin/structure/block/manage/system/main-menu/configure?destination=node/167\">Configure
                                    block</a></li>
                        </ul>
                    </div>
                    <div class=\"content\">
                        ";
        // line 165
        $this->displayBlock('menu', $context, $blocks);
        // line 168
        echo "                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div id=\"page\" class=\"container-16 clearfix\">
    <div id=\"site-subheader\" class=\"prefix-1 suffix-1 clearfix\">
    </div>


    <div id=\"main\" class=\"column\">

        <div class=\"tabs\"><h2 class=\"element-invisible\">Primary tabs</h2>
            <ul class=\"tabs primary\">
                <li class=\"active\"><a href=\"/bash/node/167\" class=\"active\">View<span class=\"element-invisible\">(active tab)</span></a>
                </li>
                <li><a href=\"/bash/node/167/edit\">Edit</a></li>
                <li><a href=\"/bash/node/167/revisions\">Revisions</a></li>
                <li><a href=\"/bash/node/167/rating\">Voting results</a></li>
            </ul>
        </div>

        <div id=\"main-content\" class=\"region clearfix\">
            <div class=\"region region-content\">
                <div id=\"block-system-main\" class=\"block block-system\">


                    <div class=\"content\">
                        <div id=\"node-167\" class=\"node node-quote clearfix\">


                            <div class=\"submitted\">
                                Submitted by <a href=\"/bash/user/19\" title=\"View user profile.\"
                                                class=\"username\">bohart</a> on Thu, 03/06/2014 - 16:59
                            </div>

                            <div class=\"content\">
                                <div class=\"rate-widget-1 rate-widget clear-block rate-average rate-widget-number_up_down rate--89pc3PPeHxJx4JhNX94jyst9NITupunZlB70bvqrY4\"
                                     id=\"rate-node-167-1-1\">
                                    <a class=\"rate-button rate-number-up-down-btn-up\" id=\"rate-button-3\" rel=\"nofollow\"
                                       href=\"/bash/node/167?rate=ubhCpd1vPQ6brMvdsSdzqacR0qGDu8PDCHuXJUOgWU4\" title=\"+\">+</a>

                                    <div class=\"rate-number-up-down-rating positive\">19</div>

                                    <a class=\"rate-button rate-number-up-down-btn-down rate-voted\" id=\"rate-button-4\"
                                       rel=\"nofollow\"
                                       href=\"/bash/node/167?rate=ZETjCSlKgFsUM0r7ptZ6BmxJrOBBDQjknLwtKfoZ-8w\" title=\"-\">-</a>

                                    <div class=\"rate-info\">You voted '-1'.</div>
                                </div>
                                <div class=\"field field-name-body field-type-text-with-summary field-label-hidden\">
                                    <div class=\"field-items\">
                                        <div class=\"field-item even\"><p>Активний девелопмент сайту міністерства
                                                юстиції.</p>

                                            <p>Взято 1% логів за тиждень, решта не пройде цензуру баша)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"field field-name-field-image field-type-image field-label-hidden\">
                                    <div class=\"field-items\">
                                        <div class=\"field-item even\"><a
                                                    href=\"http://localhost/bash/system/files/minjust.png\" title=\"\"
                                                    class=\"colorbox\" rel=\"gallery-167\"><img
                                                        src=\"http://localhost/bash/system/files/styles/medium/private/minjust.png?itok=lzrMJN5C\"
                                                        width=\"220\" height=\"112\" alt=\"\" title=\"\"/></a></div>
                                    </div>
                                </div>
                            </div>

                            <ul class=\"links inline\">
                                <li class=\"comment-add first last active\"><a href=\"/bash/node/167#comment-form\"
                                                                             title=\"Share your thoughts and opinions related to this posting.\"
                                                                             class=\"active\">Add new comment</a></li>
                            </ul>
                            <div id=\"comments\" class=\"comment-wrapper\">
                                <h2 class=\"title\">Comments</h2>

                                <a id=\"comment-87\"></a>

                                <div class=\"comment clearfix\">

                                    <div class=\"submitted\">
                                        <a href=\"/bash/comment/87#comment-87\" class=\"permalink\"
                                           rel=\"bookmark\">Permalink</a> Submitted by <a href=\"/bash/user/98\"
                                                                                        title=\"View user profile.\"
                                                                                        class=\"username\">v.bondarchuk</a>
                                        on Fri, 03/07/2014 - 15:21
                                    </div>

                                    <div class=\"content\">
                                        <div class=\"field field-name-comment-body field-type-text-long field-label-hidden\">
                                            <div class=\"field-items\">
                                                <div class=\"field-item even\"><p>прсто муля уйобок, без матів до нього не
                                                        доходить же ш)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class=\"links inline\">
                                        <li class=\"comment-delete first\"><a href=\"/bash/comment/87/delete\">delete</a>
                                        </li>
                                        <li class=\"comment-edit\"><a href=\"/bash/comment/87/edit\">edit</a></li>
                                        <li class=\"comment-reply last\"><a href=\"/bash/comment/reply/167/87\">reply</a>
                                        </li>
                                    </ul>
                                </div>
                                <a id=\"comment-88\"></a>

                                <div class=\"comment clearfix\">

                                    <div class=\"submitted\">
                                        <a href=\"/bash/comment/88#comment-88\" class=\"permalink\"
                                           rel=\"bookmark\">Permalink</a> Submitted by <a href=\"/bash/user/17\"
                                                                                        title=\"View user profile.\"
                                                                                        class=\"username\">mula</a> on
                                        Sat, 03/08/2014 - 16:45
                                    </div>

                                    <div class=\"content\">
                                        <div class=\"field field-name-comment-body field-type-text-long field-label-hidden\">
                                            <div class=\"field-items\">
                                                <div class=\"field-item even\"><p>рижий хуй</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class=\"links inline\">
                                        <li class=\"comment-delete first\"><a href=\"/bash/comment/88/delete\">delete</a>
                                        </li>
                                        <li class=\"comment-edit\"><a href=\"/bash/comment/88/edit\">edit</a></li>
                                        <li class=\"comment-reply last\"><a href=\"/bash/comment/reply/167/88\">reply</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class=\"indented\"><a id=\"comment-89\"></a>

                                    <div class=\"comment clearfix\">

                                        <div class=\"submitted\">
                                            <a href=\"/bash/comment/89#comment-89\" class=\"permalink\" rel=\"bookmark\">Permalink</a>
                                            Submitted by <a href=\"/bash/user/98\" title=\"View user profile.\"
                                                            class=\"username\">v.bondarchuk</a> on Mon, 03/10/2014 - 11:26
                                        </div>

                                        <div class=\"content\">
                                            <div class=\"field field-name-comment-body field-type-text-long field-label-hidden\">
                                                <div class=\"field-items\">
                                                    <div class=\"field-item even\"><p>скрути писка</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class=\"links inline\">
                                            <li class=\"comment-delete first\"><a
                                                        href=\"/bash/comment/89/delete\">delete</a></li>
                                            <li class=\"comment-edit\"><a href=\"/bash/comment/89/edit\">edit</a></li>
                                            <li class=\"comment-reply last\"><a
                                                        href=\"/bash/comment/reply/167/89\">reply</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h2 class=\"title comment-form\">Add new comment</h2>

                                <form class=\"comment-form\" action=\"/bash/comment/reply/167\" method=\"post\"
                                      id=\"comment-form\" accept-charset=\"UTF-8\">
                                    <div>
                                        <div id=\"edit-author--2\" class=\"form-item form-type-item\">
                                            <label for=\"edit-author--2\">Your name </label>
                                            <a href=\"/bash/user/1\" title=\"View user profile.\" class=\"username\">bash</a>
                                        </div>
                                        <div class=\"field-type-text-long field-name-comment-body field-widget-text-textarea form-wrapper\"
                                             id=\"edit-comment-body\">
                                            <div id=\"comment-body-add-more-wrapper\">
                                                <div class=\"text-format-wrapper\">
                                                    <div class=\"form-item form-type-textarea form-item-comment-body-und-0-value\">
                                                        <label for=\"edit-comment-body-und-0-value\">Comment <span
                                                                    class=\"form-required\"
                                                                    title=\"This field is required.\">*</span></label>

                                                        <div class=\"form-textarea-wrapper\"><textarea
                                                                    class=\"text-full form-textarea required\"
                                                                    id=\"edit-comment-body-und-0-value\"
                                                                    name=\"comment_body[und][0][value]\" cols=\"60\"
                                                                    rows=\"5\"></textarea></div>
                                                    </div>
                                                    <fieldset class=\"filter-wrapper form-wrapper\"
                                                              id=\"edit-comment-body-und-0-format\">
                                                        <div class=\"fieldset-wrapper\">
                                                            <div class=\"filter-help form-wrapper\"
                                                                 id=\"edit-comment-body-und-0-format-help\"></div>
                                                            <div class=\"form-item form-type-select form-item-comment-body-und-0-format\">
                                                                <label for=\"edit-comment-body-und-0-format--2\">Text
                                                                    format </label>
                                                                <select class=\"filter-list wysiwyg form-select\"
                                                                        id=\"edit-comment-body-und-0-format--2\"
                                                                        name=\"comment_body[und][0][format]\">
                                                                    <option value=\"filtered_html\" selected=\"selected\">
                                                                        Filtered HTML
                                                                    </option>
                                                                    <option value=\"full_html\">Full HTML</option>
                                                                    <option value=\"plain_text\">Plain text</option>
                                                                </select>
                                                            </div>
                                                            <div class=\"filter-guidelines form-wrapper\"
                                                                 id=\"edit-comment-body-und-0-format-guidelines\">
                                                                <div class=\"filter-guidelines-item filter-guidelines-filtered_html\">
                                                                    <h3>Filtered HTML</h3></div>
                                                                <div class=\"filter-guidelines-item filter-guidelines-full_html\">
                                                                    <h3>Full HTML</h3></div>
                                                                <div class=\"filter-guidelines-item filter-guidelines-plain_text\">
                                                                    <h3>Plain text</h3></div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <input type=\"hidden\" name=\"form_build_id\"
                                               value=\"form-zO33IW9svafPoSS8uji8KglY5uJFev4_BpkBhOUdyKU\"/>
                                        <input type=\"hidden\" name=\"form_token\"
                                               value=\"0lGWbLlWWa2y33xKmbKcvciH8wRolSXBaSNacowYMq0\"/>
                                        <input type=\"hidden\" name=\"form_id\" value=\"comment_node_quote_form\"/>

                                        <div class=\"form-actions form-wrapper\" id=\"edit-actions\"><input type=\"submit\"
                                                                                                        id=\"edit-submit\"
                                                                                                        name=\"op\"
                                                                                                        value=\"Save\"
                                                                                                        class=\"form-submit\"/>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div id=\"footer\" class=\"prefix-1 suffix-1\">
    </div>

</div>
<script type=\"text/javascript\" src=\"http://localhost/bash/sites/all/modules/rate/rate.js?n9fb5c\"></script>
<script type=\"text/javascript\" src=\"http://localhost/bash/sites/all/modules/wysiwyg/wysiwyg.js?n9fb5c\"></script>
</body>
</html>
";
    }

    // line 62
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 165
    public function block_menu($context, array $blocks = array())
    {
        // line 166
        echo "                            menu
                        ";
    }

    public function getTemplateName()
    {
        return "::basecomment.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 166,  519 => 168,  505 => 163,  502 => 162,  489 => 155,  234 => 56,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1058 => 490,  1056 => 489,  1039 => 472,  1033 => 468,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  971 => 420,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  921 => 399,  916 => 397,  911 => 395,  900 => 390,  894 => 387,  891 => 386,  888 => 385,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  866 => 377,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  844 => 369,  834 => 365,  827 => 357,  819 => 355,  816 => 354,  813 => 353,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  764 => 332,  746 => 323,  738 => 320,  693 => 290,  687 => 288,  662 => 279,  659 => 278,  649 => 271,  630 => 257,  621 => 251,  617 => 250,  608 => 246,  598 => 238,  592 => 237,  539 => 218,  533 => 216,  498 => 198,  483 => 190,  478 => 188,  471 => 183,  443 => 162,  438 => 160,  388 => 133,  364 => 109,  332 => 98,  316 => 97,  223 => 94,  288 => 107,  279 => 84,  652 => 376,  641 => 368,  625 => 361,  615 => 354,  575 => 233,  565 => 324,  548 => 221,  516 => 294,  500 => 291,  486 => 286,  482 => 152,  452 => 139,  434 => 256,  344 => 104,  244 => 60,  226 => 53,  215 => 49,  549 => 182,  537 => 176,  525 => 211,  508 => 165,  491 => 156,  487 => 192,  460 => 143,  449 => 138,  436 => 132,  426 => 126,  403 => 125,  400 => 124,  308 => 92,  249 => 74,  274 => 80,  236 => 109,  319 => 98,  301 => 144,  293 => 109,  289 => 90,  277 => 136,  218 => 50,  205 => 90,  972 => 275,  966 => 273,  962 => 416,  958 => 304,  952 => 483,  949 => 300,  947 => 299,  933 => 295,  928 => 293,  925 => 292,  919 => 290,  917 => 289,  914 => 288,  908 => 286,  903 => 391,  897 => 389,  895 => 281,  892 => 280,  884 => 277,  879 => 273,  876 => 272,  873 => 271,  864 => 376,  856 => 257,  851 => 255,  847 => 370,  841 => 368,  833 => 247,  829 => 245,  823 => 356,  820 => 241,  818 => 240,  815 => 239,  812 => 238,  809 => 237,  804 => 353,  801 => 237,  798 => 236,  786 => 268,  773 => 226,  770 => 334,  766 => 224,  762 => 222,  751 => 325,  733 => 318,  726 => 313,  720 => 212,  713 => 209,  709 => 208,  695 => 205,  686 => 202,  681 => 287,  678 => 286,  676 => 385,  657 => 277,  648 => 192,  639 => 188,  632 => 258,  623 => 185,  613 => 248,  610 => 181,  597 => 342,  583 => 235,  571 => 164,  561 => 180,  544 => 229,  542 => 219,  535 => 160,  522 => 169,  520 => 208,  517 => 159,  506 => 147,  503 => 200,  495 => 158,  492 => 139,  484 => 153,  481 => 189,  477 => 129,  464 => 142,  418 => 130,  392 => 108,  375 => 115,  356 => 96,  336 => 89,  325 => 94,  299 => 112,  296 => 94,  266 => 73,  248 => 116,  228 => 54,  211 => 81,  167 => 57,  148 => 64,  118 => 23,  624 => 224,  620 => 184,  612 => 220,  607 => 349,  585 => 209,  580 => 207,  574 => 165,  566 => 203,  563 => 188,  559 => 179,  551 => 222,  545 => 220,  536 => 217,  532 => 174,  529 => 299,  526 => 234,  523 => 171,  518 => 207,  514 => 168,  511 => 203,  497 => 156,  490 => 287,  485 => 124,  463 => 117,  455 => 141,  450 => 114,  447 => 122,  415 => 129,  410 => 113,  406 => 126,  391 => 163,  385 => 118,  376 => 153,  369 => 130,  359 => 114,  354 => 101,  347 => 134,  335 => 106,  333 => 88,  320 => 122,  313 => 96,  310 => 171,  302 => 168,  284 => 128,  261 => 71,  239 => 104,  198 => 42,  192 => 168,  315 => 120,  306 => 91,  303 => 90,  292 => 91,  225 => 87,  175 => 77,  150 => 49,  12 => 36,  37 => 8,  778 => 234,  772 => 248,  769 => 247,  767 => 246,  763 => 244,  760 => 243,  748 => 242,  745 => 217,  742 => 322,  736 => 319,  729 => 235,  717 => 233,  714 => 304,  711 => 303,  700 => 294,  666 => 382,  661 => 380,  653 => 218,  650 => 217,  644 => 268,  640 => 211,  633 => 209,  599 => 215,  595 => 205,  590 => 338,  587 => 203,  584 => 202,  573 => 198,  560 => 187,  555 => 317,  553 => 184,  540 => 308,  534 => 162,  531 => 215,  528 => 173,  515 => 180,  513 => 179,  510 => 164,  501 => 199,  499 => 173,  496 => 172,  493 => 157,  475 => 169,  473 => 127,  470 => 278,  468 => 160,  459 => 165,  454 => 156,  442 => 134,  433 => 135,  422 => 147,  420 => 150,  417 => 243,  411 => 144,  408 => 142,  405 => 118,  390 => 134,  380 => 107,  366 => 106,  361 => 207,  358 => 103,  343 => 132,  340 => 136,  338 => 107,  327 => 103,  291 => 91,  286 => 89,  281 => 105,  272 => 81,  206 => 57,  113 => 41,  110 => 40,  90 => 161,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 651,  1066 => 493,  1062 => 492,  1053 => 488,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 455,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 425,  969 => 274,  965 => 417,  959 => 415,  956 => 300,  948 => 296,  944 => 295,  941 => 296,  932 => 287,  930 => 405,  926 => 285,  923 => 400,  918 => 280,  910 => 278,  906 => 392,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 384,  883 => 383,  881 => 276,  878 => 263,  871 => 259,  869 => 378,  845 => 252,  842 => 255,  839 => 367,  837 => 366,  835 => 248,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 360,  803 => 232,  799 => 351,  797 => 228,  795 => 349,  793 => 348,  791 => 271,  788 => 224,  784 => 236,  781 => 235,  776 => 212,  756 => 327,  753 => 326,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 239,  737 => 198,  734 => 237,  730 => 214,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 305,  706 => 182,  703 => 226,  701 => 206,  698 => 293,  694 => 175,  692 => 399,  689 => 203,  685 => 170,  683 => 393,  680 => 168,  675 => 165,  673 => 285,  670 => 284,  665 => 160,  663 => 196,  660 => 195,  656 => 378,  654 => 193,  651 => 153,  647 => 150,  645 => 369,  642 => 190,  638 => 210,  635 => 365,  631 => 364,  629 => 186,  626 => 139,  622 => 136,  619 => 135,  616 => 183,  611 => 247,  601 => 179,  596 => 127,  594 => 212,  591 => 124,  589 => 123,  586 => 236,  581 => 201,  579 => 332,  578 => 234,  577 => 329,  576 => 199,  572 => 204,  569 => 231,  567 => 230,  564 => 225,  558 => 224,  556 => 178,  554 => 223,  552 => 101,  550 => 163,  546 => 166,  543 => 179,  541 => 96,  538 => 161,  524 => 297,  521 => 182,  507 => 202,  504 => 292,  479 => 151,  476 => 80,  472 => 78,  467 => 125,  465 => 76,  448 => 138,  445 => 163,  441 => 120,  439 => 133,  431 => 116,  429 => 154,  425 => 152,  414 => 144,  412 => 128,  399 => 139,  397 => 110,  394 => 136,  389 => 107,  383 => 105,  377 => 129,  373 => 114,  370 => 113,  357 => 113,  349 => 34,  346 => 105,  342 => 109,  339 => 191,  330 => 104,  326 => 95,  323 => 125,  317 => 121,  290 => 83,  282 => 161,  275 => 103,  270 => 157,  263 => 72,  260 => 71,  257 => 103,  250 => 66,  245 => 61,  242 => 60,  194 => 74,  188 => 36,  186 => 82,  139 => 3,  126 => 42,  114 => 409,  200 => 54,  180 => 49,  174 => 64,  165 => 56,  146 => 49,  23 => 12,  363 => 184,  353 => 95,  350 => 111,  348 => 118,  345 => 116,  329 => 130,  324 => 102,  321 => 99,  318 => 94,  311 => 93,  307 => 155,  304 => 96,  297 => 153,  287 => 77,  276 => 138,  271 => 75,  262 => 105,  256 => 96,  197 => 70,  191 => 69,  170 => 28,  222 => 81,  190 => 165,  185 => 35,  137 => 2,  96 => 37,  212 => 60,  172 => 85,  251 => 101,  231 => 55,  195 => 84,  129 => 667,  120 => 4,  104 => 346,  100 => 36,  81 => 25,  77 => 132,  65 => 79,  97 => 246,  74 => 131,  70 => 89,  52 => 11,  184 => 48,  153 => 50,  127 => 8,  237 => 86,  232 => 84,  216 => 70,  213 => 69,  207 => 91,  202 => 79,  160 => 70,  145 => 52,  424 => 132,  421 => 131,  404 => 90,  401 => 89,  396 => 138,  386 => 106,  367 => 105,  351 => 106,  334 => 26,  331 => 96,  328 => 22,  300 => 93,  295 => 85,  280 => 80,  267 => 120,  265 => 99,  259 => 149,  255 => 68,  253 => 112,  233 => 54,  210 => 84,  178 => 18,  155 => 51,  134 => 1,  124 => 655,  83 => 113,  181 => 80,  161 => 71,  157 => 23,  152 => 21,  84 => 62,  76 => 9,  34 => 16,  58 => 60,  53 => 49,  20 => 11,  480 => 162,  474 => 150,  469 => 144,  461 => 141,  457 => 153,  453 => 62,  444 => 137,  440 => 148,  437 => 118,  435 => 146,  430 => 134,  427 => 133,  423 => 151,  413 => 241,  409 => 127,  407 => 238,  402 => 138,  398 => 123,  393 => 121,  387 => 119,  384 => 109,  381 => 117,  379 => 124,  374 => 217,  368 => 116,  365 => 141,  362 => 39,  360 => 104,  355 => 107,  341 => 103,  337 => 97,  322 => 93,  314 => 88,  312 => 149,  309 => 117,  305 => 115,  298 => 101,  294 => 90,  285 => 82,  283 => 81,  278 => 160,  268 => 107,  264 => 74,  258 => 70,  252 => 3,  247 => 62,  241 => 59,  229 => 125,  220 => 51,  214 => 99,  177 => 32,  169 => 27,  140 => 47,  132 => 10,  128 => 58,  111 => 78,  107 => 3,  61 => 25,  273 => 85,  269 => 74,  254 => 147,  246 => 108,  243 => 89,  240 => 139,  238 => 56,  235 => 55,  230 => 53,  227 => 95,  224 => 103,  221 => 120,  219 => 101,  217 => 79,  208 => 45,  204 => 73,  179 => 33,  159 => 70,  143 => 59,  135 => 35,  131 => 38,  119 => 487,  108 => 48,  102 => 1,  71 => 28,  67 => 53,  63 => 70,  59 => 32,  47 => 9,  38 => 8,  94 => 245,  89 => 197,  85 => 150,  79 => 149,  75 => 102,  68 => 80,  56 => 24,  50 => 48,  35 => 7,  87 => 188,  72 => 89,  55 => 14,  201 => 43,  196 => 33,  183 => 78,  171 => 29,  166 => 100,  163 => 25,  158 => 52,  156 => 9,  151 => 61,  142 => 61,  138 => 12,  136 => 40,  123 => 54,  121 => 75,  117 => 410,  115 => 50,  105 => 2,  101 => 49,  91 => 14,  69 => 88,  66 => 25,  62 => 33,  49 => 10,  43 => 20,  41 => 18,  28 => 44,  25 => 4,  21 => 1,  31 => 14,  29 => 15,  26 => 13,  24 => 13,  19 => 1,  98 => 168,  93 => 162,  88 => 151,  78 => 103,  46 => 10,  44 => 8,  40 => 19,  32 => 6,  27 => 5,  22 => 12,  209 => 39,  203 => 44,  199 => 34,  193 => 83,  189 => 65,  187 => 87,  182 => 34,  176 => 77,  173 => 30,  168 => 26,  164 => 72,  162 => 11,  154 => 22,  149 => 20,  147 => 90,  144 => 4,  141 => 67,  133 => 46,  130 => 9,  125 => 45,  122 => 488,  116 => 26,  112 => 365,  109 => 364,  106 => 86,  103 => 46,  99 => 317,  95 => 167,  92 => 198,  86 => 43,  82 => 150,  80 => 112,  73 => 90,  64 => 52,  60 => 69,  57 => 13,  54 => 12,  51 => 12,  48 => 42,  45 => 41,  42 => 9,  39 => 13,  36 => 12,  33 => 1,  30 => 9,);
    }
}
