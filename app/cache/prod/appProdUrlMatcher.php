<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/genemu_')) {
            // genemu_upload
            if ($pathinfo === '/genemu_upload') {
                return array (  '_controller' => 'Genemu\\Bundle\\FormBundle\\Controller\\UploadController::uploadAction',  '_route' => 'genemu_upload',);
            }

            // genemu_form_image
            if ($pathinfo === '/genemu_change_image') {
                return array (  '_controller' => 'Genemu\\Bundle\\FormBundle\\Controller\\ImageController::changeAction',  '_route' => 'genemu_form_image',);
            }

        }

        // bash_nodes_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bash_nodes_homepage')), array (  '_controller' => 'BashNodesBundle:Default:index',));
        }

        // BashBashBundle_recent
        if (0 === strpos($pathinfo, '/recent') && preg_match('#^/recent/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BashBashBundle_recent;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'BashBashBundle_recent')), array (  '_controller' => 'Bash\\BashBundle\\Controller\\PageController::recentAction',));
        }
        not_BashBashBundle_recent:

        // BashBashBundle_best
        if ($pathinfo === '/best') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BashBashBundle_best;
            }

            return array (  '_controller' => 'Bash\\BashBundle\\Controller\\PageController::bestAction',  '_route' => 'BashBashBundle_best',);
        }
        not_BashBashBundle_best:

        if (0 === strpos($pathinfo, '/r')) {
            // BashBashBundle_rss
            if ($pathinfo === '/rss') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_BashBashBundle_rss;
                }

                return array (  '_controller' => 'Bash\\BashBundle\\Controller\\PageController::rssAction',  '_route' => 'BashBashBundle_rss',);
            }
            not_BashBashBundle_rss:

            // BashBashBundle_random
            if ($pathinfo === '/random') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_BashBashBundle_random;
                }

                return array (  '_controller' => 'Bash\\BashBundle\\Controller\\PageController::randomAction',  '_route' => 'BashBashBundle_random',);
            }
            not_BashBashBundle_random:

        }

        // BashBashBundle_govnokod
        if ($pathinfo === '/govnokod') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BashBashBundle_govnokod;
            }

            return array (  '_controller' => 'Bash\\BashBundle\\Controller\\PageController::govnokodAction',  '_route' => 'BashBashBundle_govnokod',);
        }
        not_BashBashBundle_govnokod:

        if (0 === strpos($pathinfo, '/add_')) {
            // BashBashBundle_addquote
            if ($pathinfo === '/add_quote') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_BashBashBundle_addquote;
                }

                return array (  '_controller' => 'Bash\\BashBundle\\Controller\\PageController::addquoteAction',  '_route' => 'BashBashBundle_addquote',);
            }
            not_BashBashBundle_addquote:

            // BashBashBundle_addcode
            if ($pathinfo === '/add_code') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_BashBashBundle_addcode;
                }

                return array (  '_controller' => 'Bash\\BashBundle\\Controller\\PageController::addcodeAction',  '_route' => 'BashBashBundle_addcode',);
            }
            not_BashBashBundle_addcode:

        }

        // BashBashBundle_myquotes
        if ($pathinfo === '/myquotes') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BashBashBundle_myquotes;
            }

            return array (  '_controller' => 'Bash\\BashBundle\\Controller\\PageController::myquotesAction',  '_route' => 'BashBashBundle_myquotes',);
        }
        not_BashBashBundle_myquotes:

        // BashBashBundle_post
        if (0 === strpos($pathinfo, '/node') && preg_match('#^/node/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_BashBashBundle_post;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'BashBashBundle_post')), array (  '_controller' => 'Bash\\BashBundle\\Controller\\PageController::postAction',));
        }
        not_BashBashBundle_post:

        // BashBashBundle_comment_create
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_BashBashBundle_comment_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'BashBashBundle_comment_create')), array (  '_controller' => 'Bash\\BashBundle\\Controller\\CommentController::createAction',));
        }
        not_BashBashBundle_comment_create:

        if (0 === strpos($pathinfo, '/quote')) {
            // BashBashBundle_quote_create
            if (preg_match('#^/quote/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_BashBashBundle_quote_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BashBashBundle_quote_create')), array (  '_controller' => 'Bash\\BashBundle\\Controller\\QuoteController::createAction',));
            }
            not_BashBashBundle_quote_create:

            // BashBashBundle_aquotes
            if (0 === strpos($pathinfo, '/quotes') && preg_match('#^/quotes/(?P<author>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_BashBashBundle_aquotes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BashBashBundle_aquotes')), array (  '_controller' => 'Bash\\BashBundle\\Controller\\QuoteController::aquotesAction',));
            }
            not_BashBashBundle_aquotes:

        }

        // BashBashBundle_user
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_BashBashBundle_user;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'BashBashBundle_user')), array (  '_controller' => 'Bash\\BashBundle\\Controller\\PageController::userAction',));
        }
        not_BashBashBundle_user:

        // BashBashBundle_edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'BashBashBundle_edit')), array (  '_controller' => 'Bash\\BashBundle\\Controller\\PageController::editAction',));
        }

        // BashBashBundle_dell
        if (0 === strpos($pathinfo, '/dell') && preg_match('#^/dell/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'BashBashBundle_dell')), array (  '_controller' => 'Bash\\BashBundle\\Controller\\PageController::dellAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/bash')) {
                if (0 === strpos($pathinfo, '/admin/bash/bash/user')) {
                    // admin_bash_bash_user_list
                    if ($pathinfo === '/admin/bash/bash/user/list') {
                        return array (  '_controller' => 'Bash\\BashBundle\\Controller\\UserAdminController::listAction',  '_sonata_admin' => 'blogger.symblog.admin.user',  '_sonata_name' => 'admin_bash_bash_user_list',  '_route' => 'admin_bash_bash_user_list',);
                    }

                    // admin_bash_bash_user_create
                    if ($pathinfo === '/admin/bash/bash/user/create') {
                        return array (  '_controller' => 'Bash\\BashBundle\\Controller\\UserAdminController::createAction',  '_sonata_admin' => 'blogger.symblog.admin.user',  '_sonata_name' => 'admin_bash_bash_user_create',  '_route' => 'admin_bash_bash_user_create',);
                    }

                    // admin_bash_bash_user_batch
                    if ($pathinfo === '/admin/bash/bash/user/batch') {
                        return array (  '_controller' => 'Bash\\BashBundle\\Controller\\UserAdminController::batchAction',  '_sonata_admin' => 'blogger.symblog.admin.user',  '_sonata_name' => 'admin_bash_bash_user_batch',  '_route' => 'admin_bash_bash_user_batch',);
                    }

                    // admin_bash_bash_user_edit
                    if (preg_match('#^/admin/bash/bash/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bash_bash_user_edit')), array (  '_controller' => 'Bash\\BashBundle\\Controller\\UserAdminController::editAction',  '_sonata_admin' => 'blogger.symblog.admin.user',  '_sonata_name' => 'admin_bash_bash_user_edit',));
                    }

                    // admin_bash_bash_user_delete
                    if (preg_match('#^/admin/bash/bash/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bash_bash_user_delete')), array (  '_controller' => 'Bash\\BashBundle\\Controller\\UserAdminController::deleteAction',  '_sonata_admin' => 'blogger.symblog.admin.user',  '_sonata_name' => 'admin_bash_bash_user_delete',));
                    }

                    // admin_bash_bash_user_show
                    if (preg_match('#^/admin/bash/bash/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bash_bash_user_show')), array (  '_controller' => 'Bash\\BashBundle\\Controller\\UserAdminController::showAction',  '_sonata_admin' => 'blogger.symblog.admin.user',  '_sonata_name' => 'admin_bash_bash_user_show',));
                    }

                    // admin_bash_bash_user_export
                    if ($pathinfo === '/admin/bash/bash/user/export') {
                        return array (  '_controller' => 'Bash\\BashBundle\\Controller\\UserAdminController::exportAction',  '_sonata_admin' => 'blogger.symblog.admin.user',  '_sonata_name' => 'admin_bash_bash_user_export',  '_route' => 'admin_bash_bash_user_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/bash/nodes')) {
                    if (0 === strpos($pathinfo, '/admin/bash/nodes/quote')) {
                        // admin_bash_nodes_quote_list
                        if ($pathinfo === '/admin/bash/nodes/quote/list') {
                            return array (  '_controller' => 'Bash\\NodesBundle\\Controller\\QuoteAdminController::listAction',  '_sonata_admin' => 'blogger.symblog.admin.blog',  '_sonata_name' => 'admin_bash_nodes_quote_list',  '_route' => 'admin_bash_nodes_quote_list',);
                        }

                        // admin_bash_nodes_quote_create
                        if ($pathinfo === '/admin/bash/nodes/quote/create') {
                            return array (  '_controller' => 'Bash\\NodesBundle\\Controller\\QuoteAdminController::createAction',  '_sonata_admin' => 'blogger.symblog.admin.blog',  '_sonata_name' => 'admin_bash_nodes_quote_create',  '_route' => 'admin_bash_nodes_quote_create',);
                        }

                        // admin_bash_nodes_quote_batch
                        if ($pathinfo === '/admin/bash/nodes/quote/batch') {
                            return array (  '_controller' => 'Bash\\NodesBundle\\Controller\\QuoteAdminController::batchAction',  '_sonata_admin' => 'blogger.symblog.admin.blog',  '_sonata_name' => 'admin_bash_nodes_quote_batch',  '_route' => 'admin_bash_nodes_quote_batch',);
                        }

                        // admin_bash_nodes_quote_edit
                        if (preg_match('#^/admin/bash/nodes/quote/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bash_nodes_quote_edit')), array (  '_controller' => 'Bash\\NodesBundle\\Controller\\QuoteAdminController::editAction',  '_sonata_admin' => 'blogger.symblog.admin.blog',  '_sonata_name' => 'admin_bash_nodes_quote_edit',));
                        }

                        // admin_bash_nodes_quote_delete
                        if (preg_match('#^/admin/bash/nodes/quote/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bash_nodes_quote_delete')), array (  '_controller' => 'Bash\\NodesBundle\\Controller\\QuoteAdminController::deleteAction',  '_sonata_admin' => 'blogger.symblog.admin.blog',  '_sonata_name' => 'admin_bash_nodes_quote_delete',));
                        }

                        // admin_bash_nodes_quote_show
                        if (preg_match('#^/admin/bash/nodes/quote/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bash_nodes_quote_show')), array (  '_controller' => 'Bash\\NodesBundle\\Controller\\QuoteAdminController::showAction',  '_sonata_admin' => 'blogger.symblog.admin.blog',  '_sonata_name' => 'admin_bash_nodes_quote_show',));
                        }

                        // admin_bash_nodes_quote_export
                        if ($pathinfo === '/admin/bash/nodes/quote/export') {
                            return array (  '_controller' => 'Bash\\NodesBundle\\Controller\\QuoteAdminController::exportAction',  '_sonata_admin' => 'blogger.symblog.admin.blog',  '_sonata_name' => 'admin_bash_nodes_quote_export',  '_route' => 'admin_bash_nodes_quote_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/bash/nodes/comment')) {
                        // admin_bash_nodes_comment_list
                        if ($pathinfo === '/admin/bash/nodes/comment/list') {
                            return array (  '_controller' => 'Bash\\NodesBundle\\Controller\\CommentAdminController::listAction',  '_sonata_admin' => 'blogger.symblog.admin.comment',  '_sonata_name' => 'admin_bash_nodes_comment_list',  '_route' => 'admin_bash_nodes_comment_list',);
                        }

                        // admin_bash_nodes_comment_create
                        if ($pathinfo === '/admin/bash/nodes/comment/create') {
                            return array (  '_controller' => 'Bash\\NodesBundle\\Controller\\CommentAdminController::createAction',  '_sonata_admin' => 'blogger.symblog.admin.comment',  '_sonata_name' => 'admin_bash_nodes_comment_create',  '_route' => 'admin_bash_nodes_comment_create',);
                        }

                        // admin_bash_nodes_comment_batch
                        if ($pathinfo === '/admin/bash/nodes/comment/batch') {
                            return array (  '_controller' => 'Bash\\NodesBundle\\Controller\\CommentAdminController::batchAction',  '_sonata_admin' => 'blogger.symblog.admin.comment',  '_sonata_name' => 'admin_bash_nodes_comment_batch',  '_route' => 'admin_bash_nodes_comment_batch',);
                        }

                        // admin_bash_nodes_comment_edit
                        if (preg_match('#^/admin/bash/nodes/comment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bash_nodes_comment_edit')), array (  '_controller' => 'Bash\\NodesBundle\\Controller\\CommentAdminController::editAction',  '_sonata_admin' => 'blogger.symblog.admin.comment',  '_sonata_name' => 'admin_bash_nodes_comment_edit',));
                        }

                        // admin_bash_nodes_comment_delete
                        if (preg_match('#^/admin/bash/nodes/comment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bash_nodes_comment_delete')), array (  '_controller' => 'Bash\\NodesBundle\\Controller\\CommentAdminController::deleteAction',  '_sonata_admin' => 'blogger.symblog.admin.comment',  '_sonata_name' => 'admin_bash_nodes_comment_delete',));
                        }

                        // admin_bash_nodes_comment_show
                        if (preg_match('#^/admin/bash/nodes/comment/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bash_nodes_comment_show')), array (  '_controller' => 'Bash\\NodesBundle\\Controller\\CommentAdminController::showAction',  '_sonata_admin' => 'blogger.symblog.admin.comment',  '_sonata_name' => 'admin_bash_nodes_comment_show',));
                        }

                        // admin_bash_nodes_comment_export
                        if ($pathinfo === '/admin/bash/nodes/comment/export') {
                            return array (  '_controller' => 'Bash\\NodesBundle\\Controller\\CommentAdminController::exportAction',  '_sonata_admin' => 'blogger.symblog.admin.comment',  '_sonata_name' => 'admin_bash_nodes_comment_export',  '_route' => 'admin_bash_nodes_comment_export',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
