<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_3d616732080c9495519209c10fa63df0b710a1ba0c1c98fba7949f943430af7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 52
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 53
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();
                }
            });

            return;
        }

        jQuery('#";
        // line 60
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 61
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('change');

        field_dialog_";
        // line 63
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal('hide');
    }

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 67
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "  =  function() {

        Admin.log('[";
        // line 69
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        Admin.add_filters(field_dialog_";
        // line 71
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 75
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
        jQuery('form', field_dialog_";
        // line 76
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 81
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 90
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 92
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 93
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();
                }
            });
        });
    }

    // handle the list link
    var field_dialog_form_list_";
        // line 100
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        initialize_popup_";
        // line 102
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 107
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 111
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 119
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 122
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);

                field_dialog_title_";
        // line 124
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(\"";
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "translationdomain"));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 126
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                field_dialog_form_list_handle_action_";
        // line 128
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 131
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 133
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 139
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {
        initialize_popup_";
        // line 140
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 147
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html('');

        Admin.log('[";
        // line 149
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 157
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 160
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                field_dialog_title_";
        // line 161
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(\"";
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "translationdomain"));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 163
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 167
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
                jQuery('form', field_dialog_";
        // line 168
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 171
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 173
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 179
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 191
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 193
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 207
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 217
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 225
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 230
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal('hide');

                    ";
        // line 232
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list")) {
            // line 233
            echo "                        ";
            // line 237
            echo "                        jQuery('#";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').val(data.objectId);
                        jQuery('#";
            // line 238
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').change();

                    ";
        } else {
            // line 241
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 243
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 244
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => (isset($context["id"]) ? $context["id"] : null), "subclass" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "code")));
            // line 250
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 255
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 256
            echo (isset($context["id"]) ? $context["id"] : null);
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 263
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 268
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 273
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 275
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 278
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 285
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "         = false;
    var field_dialog_content_";
        // line 286
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = false;
    var field_dialog_title_";
        // line 287
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "   = false;

    function initialize_popup_";
        // line 289
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 291
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ") {
            field_dialog_";
        // line 292
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "         = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");
            field_dialog_content_";
        // line 293
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");
            field_dialog_title_";
        // line 294
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 297
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

            Admin.log('[";
        // line 299
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 306
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 308
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 313
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 317
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 324
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 325
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
    }

    ";
        // line 328
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list")) {
            // line 329
            echo "        ";
            // line 332
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 334
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 338
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 342
            echo (isset($context["id"]) ? $context["id"] : null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 349
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 354
            echo (isset($context["id"]) ? $context["id"] : null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 361
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 364
            echo (isset($context["id"]) ? $context["id"] : null);
            echo " option').get(0)) {
                jQuery('#";
            // line 365
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 368
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').val('');
            jQuery('#";
            // line 369
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').trigger('change');

            return false;
        }
        ";
            // line 376
            echo "
        // update the label
        jQuery('#";
            // line 378
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 380
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "] update the label');

            jQuery('#field_widget_";
            // line 382
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 385
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "uniqid"), "code" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "code"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "link_parameters")));
            // line 390
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 393
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 399
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 376,  641 => 368,  625 => 361,  615 => 354,  575 => 328,  565 => 324,  548 => 313,  516 => 294,  500 => 291,  486 => 286,  482 => 285,  452 => 268,  434 => 256,  344 => 193,  244 => 140,  226 => 131,  215 => 126,  549 => 182,  537 => 176,  525 => 172,  508 => 165,  491 => 157,  487 => 156,  460 => 143,  449 => 138,  436 => 132,  426 => 126,  403 => 117,  400 => 233,  308 => 86,  249 => 74,  274 => 135,  236 => 109,  319 => 124,  301 => 144,  293 => 113,  289 => 163,  277 => 136,  218 => 97,  205 => 90,  972 => 275,  966 => 273,  962 => 306,  958 => 304,  952 => 301,  949 => 300,  947 => 299,  933 => 295,  928 => 293,  925 => 292,  919 => 290,  917 => 289,  914 => 288,  908 => 286,  903 => 284,  897 => 282,  895 => 281,  892 => 280,  884 => 277,  879 => 273,  876 => 272,  873 => 271,  864 => 262,  856 => 257,  851 => 255,  847 => 253,  841 => 250,  833 => 247,  829 => 245,  823 => 242,  820 => 241,  818 => 240,  815 => 239,  812 => 238,  809 => 237,  804 => 266,  801 => 237,  798 => 236,  786 => 268,  773 => 226,  770 => 225,  766 => 224,  762 => 222,  751 => 218,  733 => 215,  726 => 213,  720 => 212,  713 => 209,  709 => 208,  695 => 205,  686 => 202,  681 => 201,  678 => 390,  676 => 385,  657 => 194,  648 => 192,  639 => 188,  632 => 187,  623 => 185,  613 => 182,  610 => 181,  597 => 342,  583 => 334,  571 => 164,  561 => 180,  544 => 229,  542 => 163,  535 => 160,  522 => 232,  520 => 160,  517 => 159,  506 => 147,  503 => 146,  495 => 289,  492 => 139,  484 => 133,  481 => 132,  477 => 129,  464 => 275,  418 => 112,  392 => 108,  375 => 152,  356 => 96,  336 => 89,  325 => 94,  299 => 116,  296 => 167,  266 => 73,  248 => 116,  228 => 88,  211 => 81,  167 => 57,  148 => 64,  118 => 23,  624 => 224,  620 => 184,  612 => 220,  607 => 349,  585 => 209,  580 => 207,  574 => 165,  566 => 203,  563 => 188,  559 => 179,  551 => 199,  545 => 198,  536 => 306,  532 => 174,  529 => 299,  526 => 234,  523 => 171,  518 => 170,  514 => 168,  511 => 167,  497 => 156,  490 => 287,  485 => 124,  463 => 117,  455 => 141,  450 => 114,  447 => 122,  415 => 121,  410 => 113,  406 => 111,  391 => 163,  385 => 225,  376 => 153,  369 => 130,  359 => 144,  354 => 101,  347 => 134,  335 => 133,  333 => 88,  320 => 92,  313 => 84,  310 => 171,  302 => 168,  284 => 76,  261 => 71,  239 => 97,  198 => 55,  192 => 86,  315 => 173,  306 => 95,  303 => 94,  292 => 91,  225 => 87,  175 => 77,  150 => 38,  12 => 36,  37 => 18,  778 => 234,  772 => 248,  769 => 247,  767 => 246,  763 => 244,  760 => 243,  748 => 242,  745 => 217,  742 => 240,  736 => 238,  729 => 235,  717 => 233,  714 => 232,  711 => 231,  700 => 225,  666 => 382,  661 => 380,  653 => 218,  650 => 217,  644 => 213,  640 => 211,  633 => 209,  599 => 215,  595 => 205,  590 => 338,  587 => 203,  584 => 202,  573 => 198,  560 => 187,  555 => 317,  553 => 184,  540 => 308,  534 => 162,  531 => 161,  528 => 173,  515 => 180,  513 => 179,  510 => 293,  501 => 161,  499 => 173,  496 => 172,  493 => 155,  475 => 169,  473 => 127,  470 => 278,  468 => 160,  459 => 273,  454 => 156,  442 => 134,  433 => 130,  422 => 147,  420 => 123,  417 => 243,  411 => 120,  408 => 142,  405 => 118,  390 => 136,  380 => 107,  366 => 106,  361 => 207,  358 => 103,  343 => 132,  340 => 136,  338 => 130,  327 => 154,  291 => 99,  286 => 76,  281 => 110,  272 => 81,  206 => 57,  113 => 44,  110 => 48,  90 => 77,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 335,  1066 => 334,  1062 => 333,  1053 => 332,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 319,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 304,  969 => 274,  965 => 302,  959 => 301,  956 => 300,  948 => 296,  944 => 295,  941 => 296,  932 => 287,  930 => 294,  926 => 285,  923 => 284,  918 => 280,  910 => 278,  906 => 285,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 278,  883 => 265,  881 => 276,  878 => 263,  871 => 259,  869 => 265,  845 => 252,  842 => 255,  839 => 253,  837 => 252,  835 => 248,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 233,  803 => 232,  799 => 229,  797 => 228,  795 => 227,  793 => 307,  791 => 271,  788 => 224,  784 => 236,  781 => 235,  776 => 212,  756 => 221,  753 => 206,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 239,  737 => 198,  734 => 237,  730 => 214,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 185,  706 => 182,  703 => 226,  701 => 206,  698 => 178,  694 => 175,  692 => 399,  689 => 203,  685 => 170,  683 => 393,  680 => 168,  675 => 165,  673 => 198,  670 => 197,  665 => 160,  663 => 196,  660 => 195,  656 => 378,  654 => 193,  651 => 153,  647 => 150,  645 => 369,  642 => 190,  638 => 210,  635 => 365,  631 => 364,  629 => 186,  626 => 139,  622 => 136,  619 => 135,  616 => 183,  611 => 129,  601 => 179,  596 => 127,  594 => 212,  591 => 124,  589 => 123,  586 => 122,  581 => 201,  579 => 332,  578 => 200,  577 => 329,  576 => 199,  572 => 204,  569 => 325,  567 => 228,  564 => 225,  558 => 186,  556 => 178,  554 => 102,  552 => 101,  550 => 163,  546 => 166,  543 => 179,  541 => 96,  538 => 161,  524 => 297,  521 => 182,  507 => 165,  504 => 292,  479 => 82,  476 => 80,  472 => 78,  467 => 125,  465 => 76,  448 => 153,  445 => 152,  441 => 120,  439 => 133,  431 => 116,  429 => 148,  425 => 63,  414 => 144,  412 => 126,  399 => 139,  397 => 110,  394 => 109,  389 => 107,  383 => 105,  377 => 129,  373 => 132,  370 => 45,  357 => 37,  349 => 34,  346 => 93,  342 => 91,  339 => 191,  330 => 103,  326 => 129,  323 => 125,  317 => 91,  290 => 79,  282 => 161,  275 => 86,  270 => 157,  263 => 4,  260 => 104,  257 => 103,  250 => 274,  245 => 83,  242 => 113,  194 => 51,  188 => 84,  186 => 111,  139 => 54,  126 => 42,  114 => 71,  200 => 54,  180 => 49,  174 => 59,  165 => 77,  146 => 49,  23 => 18,  363 => 184,  353 => 95,  350 => 94,  348 => 118,  345 => 116,  329 => 130,  324 => 179,  321 => 152,  318 => 84,  311 => 87,  307 => 155,  304 => 85,  297 => 153,  287 => 77,  276 => 138,  271 => 108,  262 => 105,  256 => 79,  197 => 119,  191 => 196,  170 => 79,  222 => 66,  190 => 50,  185 => 86,  137 => 59,  96 => 18,  212 => 60,  172 => 85,  251 => 101,  231 => 133,  195 => 84,  129 => 59,  120 => 56,  104 => 67,  100 => 157,  81 => 30,  77 => 58,  65 => 30,  97 => 63,  74 => 52,  70 => 33,  52 => 21,  184 => 48,  153 => 72,  127 => 76,  237 => 71,  232 => 78,  216 => 70,  213 => 69,  207 => 91,  202 => 77,  160 => 76,  145 => 35,  424 => 91,  421 => 244,  404 => 90,  401 => 89,  396 => 138,  386 => 106,  367 => 105,  351 => 135,  334 => 26,  331 => 96,  328 => 22,  300 => 93,  295 => 142,  280 => 74,  267 => 78,  265 => 130,  259 => 149,  255 => 284,  253 => 78,  233 => 71,  210 => 59,  178 => 48,  155 => 52,  134 => 45,  124 => 41,  83 => 32,  181 => 80,  161 => 71,  157 => 41,  152 => 92,  84 => 39,  76 => 35,  34 => 26,  58 => 19,  53 => 10,  20 => 11,  480 => 162,  474 => 150,  469 => 158,  461 => 123,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 118,  435 => 146,  430 => 255,  427 => 64,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 110,  384 => 109,  381 => 157,  379 => 154,  374 => 217,  368 => 126,  365 => 141,  362 => 39,  360 => 104,  355 => 122,  341 => 131,  337 => 97,  322 => 93,  314 => 88,  312 => 149,  309 => 148,  305 => 119,  298 => 101,  294 => 90,  285 => 111,  283 => 138,  278 => 160,  268 => 107,  264 => 74,  258 => 70,  252 => 3,  247 => 75,  241 => 133,  229 => 125,  220 => 128,  214 => 99,  177 => 43,  169 => 74,  140 => 47,  132 => 58,  128 => 58,  111 => 78,  107 => 52,  61 => 24,  273 => 85,  269 => 133,  254 => 147,  246 => 99,  243 => 98,  240 => 139,  238 => 84,  235 => 63,  230 => 106,  227 => 243,  224 => 103,  221 => 120,  219 => 101,  217 => 60,  208 => 124,  204 => 78,  179 => 107,  159 => 70,  143 => 59,  135 => 81,  131 => 55,  119 => 44,  108 => 21,  102 => 74,  71 => 29,  67 => 27,  63 => 27,  59 => 49,  47 => 19,  38 => 32,  94 => 69,  89 => 40,  85 => 32,  79 => 37,  75 => 39,  68 => 31,  56 => 40,  50 => 20,  35 => 16,  87 => 65,  72 => 37,  55 => 22,  201 => 56,  196 => 68,  183 => 78,  171 => 102,  166 => 100,  163 => 40,  158 => 53,  156 => 93,  151 => 61,  142 => 61,  138 => 61,  136 => 60,  123 => 57,  121 => 75,  117 => 57,  115 => 50,  105 => 47,  101 => 49,  91 => 34,  69 => 50,  66 => 29,  62 => 29,  49 => 20,  43 => 33,  41 => 18,  28 => 14,  25 => 12,  21 => 12,  31 => 22,  29 => 21,  26 => 20,  24 => 13,  19 => 11,  98 => 44,  93 => 34,  88 => 60,  78 => 53,  46 => 35,  44 => 18,  40 => 18,  32 => 16,  27 => 13,  22 => 12,  209 => 96,  203 => 122,  199 => 86,  193 => 83,  189 => 65,  187 => 87,  182 => 85,  176 => 82,  173 => 72,  168 => 70,  164 => 72,  162 => 68,  154 => 67,  149 => 60,  147 => 90,  144 => 68,  141 => 67,  133 => 46,  130 => 57,  125 => 46,  122 => 45,  116 => 45,  112 => 52,  109 => 69,  106 => 86,  103 => 46,  99 => 30,  95 => 43,  92 => 61,  86 => 43,  82 => 28,  80 => 41,  73 => 57,  64 => 51,  60 => 25,  57 => 22,  54 => 25,  51 => 38,  48 => 40,  45 => 19,  42 => 7,  39 => 17,  36 => 16,  33 => 16,  30 => 15,);
    }
}
