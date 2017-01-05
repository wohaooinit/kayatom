<?php

/* acp_forums.html */
class __TwigTemplate_a53030ac5c2a10410cd74c7ddb92575cfcd4d1422b0d14cc1b4806a8076e6403 extends Twig_Template
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
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_forums.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (isset($context["S_EDIT_FORUM"])) { $_S_EDIT_FORUM_ = $context["S_EDIT_FORUM"]; } else { $_S_EDIT_FORUM_ = null; }
        if (isset($context["S_DELETE_FORUM"])) { $_S_DELETE_FORUM_ = $context["S_DELETE_FORUM"]; } else { $_S_DELETE_FORUM_ = null; }
        if (isset($context["S_CONTINUE_SYNC"])) { $_S_CONTINUE_SYNC_ = $context["S_CONTINUE_SYNC"]; } else { $_S_CONTINUE_SYNC_ = null; }
        if ($_S_EDIT_FORUM_) {
            // line 6
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\t/**
\t\t* Handle displaying/hiding several options based on the forum type
\t\t*/
\t\tfunction display_options(value)
\t\t{
\t\t\t";
            // line 14
            if (isset($context["S_ADD_ACTION"])) { $_S_ADD_ACTION_ = $context["S_ADD_ACTION"]; } else { $_S_ADD_ACTION_ = null; }
            if (isset($context["S_FORUM_ORIG_POST"])) { $_S_FORUM_ORIG_POST_ = $context["S_FORUM_ORIG_POST"]; } else { $_S_FORUM_ORIG_POST_ = null; }
            if (( !$_S_ADD_ACTION_ && $_S_FORUM_ORIG_POST_)) {
                // line 15
                echo "\t\t\t\tif (value == ";
                if (isset($context["FORUM_POST"])) { $_FORUM_POST_ = $context["FORUM_POST"]; } else { $_FORUM_POST_ = null; }
                echo $_FORUM_POST_;
                echo ")
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('type_actions', -1);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('type_actions', 1);
\t\t\t\t}
\t\t\t";
            }
            // line 24
            echo "
\t\t\t";
            // line 25
            if (isset($context["S_ADD_ACTION"])) { $_S_ADD_ACTION_ = $context["S_ADD_ACTION"]; } else { $_S_ADD_ACTION_ = null; }
            if (isset($context["S_FORUM_ORIG_CAT"])) { $_S_FORUM_ORIG_CAT_ = $context["S_FORUM_ORIG_CAT"]; } else { $_S_FORUM_ORIG_CAT_ = null; }
            if (isset($context["S_HAS_SUBFORUMS"])) { $_S_HAS_SUBFORUMS_ = $context["S_HAS_SUBFORUMS"]; } else { $_S_HAS_SUBFORUMS_ = null; }
            if ((( !$_S_ADD_ACTION_ && $_S_FORUM_ORIG_CAT_) && $_S_HAS_SUBFORUMS_)) {
                // line 26
                echo "\t\t\t\tif (value == ";
                if (isset($context["FORUM_LINK"])) { $_FORUM_LINK_ = $context["FORUM_LINK"]; } else { $_FORUM_LINK_ = null; }
                echo $_FORUM_LINK_;
                echo ")
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('cat_to_link_actions', 1);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('cat_to_link_actions', -1);
\t\t\t\t}
\t\t\t";
            }
            // line 35
            echo "
\t\t\tif (value == ";
            // line 36
            if (isset($context["FORUM_POST"])) { $_FORUM_POST_ = $context["FORUM_POST"]; } else { $_FORUM_POST_ = null; }
            echo $_FORUM_POST_;
            echo ")
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('forum_post_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_link_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_rules_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_cat_options', -1);
\t\t\t}
\t\t\telse if (value == ";
            // line 43
            if (isset($context["FORUM_LINK"])) { $_FORUM_LINK_ = $context["FORUM_LINK"]; } else { $_FORUM_LINK_ = null; }
            echo $_FORUM_LINK_;
            echo ")
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('forum_post_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_link_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_rules_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_cat_options', -1);
\t\t\t}
\t\t\telse if (value == ";
            // line 50
            if (isset($context["FORUM_CAT"])) { $_FORUM_CAT_ = $context["FORUM_CAT"]; } else { $_FORUM_CAT_ = null; }
            echo $_FORUM_CAT_;
            echo ")
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('forum_post_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_link_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_rules_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_cat_options', 1);
\t\t\t}
\t\t}

\t\t/**
\t\t* Init the wanted display functionality if javascript is enabled.
\t\t* If javascript is not available, the user is still able to properly administer.
\t\t*/
\t\tonload = function()
\t\t{
\t\t\t";
            // line 65
            if (isset($context["S_ADD_ACTION"])) { $_S_ADD_ACTION_ = $context["S_ADD_ACTION"]; } else { $_S_ADD_ACTION_ = null; }
            if (isset($context["S_FORUM_ORIG_POST"])) { $_S_FORUM_ORIG_POST_ = $context["S_FORUM_ORIG_POST"]; } else { $_S_FORUM_ORIG_POST_ = null; }
            if (( !$_S_ADD_ACTION_ && $_S_FORUM_ORIG_POST_)) {
                // line 66
                echo "\t\t\t\t";
                if (isset($context["S_FORUM_POST"])) { $_S_FORUM_POST_ = $context["S_FORUM_POST"]; } else { $_S_FORUM_POST_ = null; }
                if ($_S_FORUM_POST_) {
                    // line 67
                    echo "\t\t\t\t\tphpbb.toggleDisplay('type_actions', -1);
\t\t\t\t";
                }
                // line 69
                echo "\t\t\t";
            }
            // line 70
            echo "
\t\t\t";
            // line 71
            if (isset($context["S_ADD_ACTION"])) { $_S_ADD_ACTION_ = $context["S_ADD_ACTION"]; } else { $_S_ADD_ACTION_ = null; }
            if (isset($context["S_FORUM_ORIG_CAT"])) { $_S_FORUM_ORIG_CAT_ = $context["S_FORUM_ORIG_CAT"]; } else { $_S_FORUM_ORIG_CAT_ = null; }
            if (isset($context["S_HAS_SUBFORUMS"])) { $_S_HAS_SUBFORUMS_ = $context["S_HAS_SUBFORUMS"]; } else { $_S_HAS_SUBFORUMS_ = null; }
            if ((( !$_S_ADD_ACTION_ && $_S_FORUM_ORIG_CAT_) && $_S_HAS_SUBFORUMS_)) {
                // line 72
                echo "\t\t\t\t";
                if (isset($context["S_FORUM_CAT"])) { $_S_FORUM_CAT_ = $context["S_FORUM_CAT"]; } else { $_S_FORUM_CAT_ = null; }
                if ($_S_FORUM_CAT_) {
                    // line 73
                    echo "\t\t\t\t\tphpbb.toggleDisplay('cat_to_link_actions', -1);
\t\t\t\t";
                }
                // line 75
                echo "\t\t\t";
            }
            // line 76
            echo "
\t\t\t";
            // line 77
            if (isset($context["S_FORUM_POST"])) { $_S_FORUM_POST_ = $context["S_FORUM_POST"]; } else { $_S_FORUM_POST_ = null; }
            if ( !$_S_FORUM_POST_) {
                // line 78
                echo "\t\t\t\tphpbb.toggleDisplay('forum_post_options', -1);
\t\t\t";
            }
            // line 80
            echo "
\t\t\t";
            // line 81
            if (isset($context["S_FORUM_CAT"])) { $_S_FORUM_CAT_ = $context["S_FORUM_CAT"]; } else { $_S_FORUM_CAT_ = null; }
            if ( !$_S_FORUM_CAT_) {
                // line 82
                echo "\t\t\t\tphpbb.toggleDisplay('forum_cat_options', -1);
\t\t\t";
            }
            // line 84
            echo "
\t\t\t";
            // line 85
            if (isset($context["S_FORUM_LINK"])) { $_S_FORUM_LINK_ = $context["S_FORUM_LINK"]; } else { $_S_FORUM_LINK_ = null; }
            if ( !$_S_FORUM_LINK_) {
                // line 86
                echo "\t\t\t\tphpbb.toggleDisplay('forum_link_options', -1);
\t\t\t";
            }
            // line 88
            echo "
\t\t\t";
            // line 89
            if (isset($context["S_FORUM_LINK"])) { $_S_FORUM_LINK_ = $context["S_FORUM_LINK"]; } else { $_S_FORUM_LINK_ = null; }
            if ($_S_FORUM_LINK_) {
                // line 90
                echo "\t\t\tphpbb.toggleDisplay('forum_rules_options', -1);
\t\t\t";
            }
            // line 92
            echo "\t\t}

\t// ]]>
\t</script>

\t<a href=\"";
            // line 97
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            echo $_U_BACK_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 99
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo " ";
            if (isset($context["FORUM_NAME"])) { $_FORUM_NAME_ = $context["FORUM_NAME"]; } else { $_FORUM_NAME_ = null; }
            if ($_FORUM_NAME_) {
                echo ":: ";
                if (isset($context["FORUM_NAME"])) { $_FORUM_NAME_ = $context["FORUM_NAME"]; } else { $_FORUM_NAME_ = null; }
                echo $_FORUM_NAME_;
            }
            echo "</h1>

\t<p>";
            // line 101
            echo $this->env->getExtension('phpbb')->lang("FORUM_EDIT_EXPLAIN");
            echo "</p>

\t";
            // line 103
            if (isset($context["S_ERROR"])) { $_S_ERROR_ = $context["S_ERROR"]; } else { $_S_ERROR_ = null; }
            if ($_S_ERROR_) {
                // line 104
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 105
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 106
                if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
                echo $_ERROR_MSG_;
                echo "</p>
\t\t</div>
\t";
            }
            // line 109
            echo "
\t<form id=\"forumedit\" method=\"post\" action=\"";
            // line 110
            if (isset($context["U_EDIT_ACTION"])) { $_U_EDIT_ACTION_ = $context["U_EDIT_ACTION"]; } else { $_U_EDIT_ACTION_ = null; }
            echo $_U_EDIT_ACTION_;
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 113
            echo $this->env->getExtension('phpbb')->lang("FORUM_SETTINGS");
            echo "</legend>
\t";
            // line 114
            if (isset($context["acp_forums_main_settings_prepend"])) { $_acp_forums_main_settings_prepend_ = $context["acp_forums_main_settings_prepend"]; } else { $_acp_forums_main_settings_prepend_ = null; }
            // line 115
            echo "\t<dl>
\t\t<dt><label for=\"forum_type\">";
            // line 116
            echo $this->env->getExtension('phpbb')->lang("FORUM_TYPE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"forum_type\" name=\"forum_type\" onchange=\"display_options(this.options[this.selectedIndex].value);\">";
            // line 117
            if (isset($context["S_FORUM_TYPE_OPTIONS"])) { $_S_FORUM_TYPE_OPTIONS_ = $context["S_FORUM_TYPE_OPTIONS"]; } else { $_S_FORUM_TYPE_OPTIONS_ = null; }
            echo $_S_FORUM_TYPE_OPTIONS_;
            echo "</select></dd>
\t</dl>
\t";
            // line 119
            if (isset($context["S_ADD_ACTION"])) { $_S_ADD_ACTION_ = $context["S_ADD_ACTION"]; } else { $_S_ADD_ACTION_ = null; }
            if (isset($context["S_FORUM_ORIG_POST"])) { $_S_FORUM_ORIG_POST_ = $context["S_FORUM_ORIG_POST"]; } else { $_S_FORUM_ORIG_POST_ = null; }
            if (( !$_S_ADD_ACTION_ && $_S_FORUM_ORIG_POST_)) {
                // line 120
                echo "\t<div id=\"type_actions\">
\t\t<dl>
\t\t\t<dt><label for=\"type_action\">";
                // line 122
                echo $this->env->getExtension('phpbb')->lang("DECIDE_MOVE_DELETE_CONTENT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"type_action\" value=\"delete\"";
                // line 123
                if (isset($context["S_MOVE_FORUM_OPTIONS"])) { $_S_MOVE_FORUM_OPTIONS_ = $context["S_MOVE_FORUM_OPTIONS"]; } else { $_S_MOVE_FORUM_OPTIONS_ = null; }
                if ( !$_S_MOVE_FORUM_OPTIONS_) {
                    echo " checked=\"checked\" id=\"type_action\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("DELETE_ALL_POSTS");
                echo "</label></dd>
\t\t\t";
                // line 124
                if (isset($context["S_MOVE_FORUM_OPTIONS"])) { $_S_MOVE_FORUM_OPTIONS_ = $context["S_MOVE_FORUM_OPTIONS"]; } else { $_S_MOVE_FORUM_OPTIONS_ = null; }
                if ($_S_MOVE_FORUM_OPTIONS_) {
                    echo "<dd><label><input type=\"radio\" class=\"radio\" name=\"type_action\" id=\"type_action\" value=\"move\" checked=\"checked\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("MOVE_POSTS_TO");
                    echo "</label> <select name=\"to_forum_id\">";
                    if (isset($context["S_MOVE_FORUM_OPTIONS"])) { $_S_MOVE_FORUM_OPTIONS_ = $context["S_MOVE_FORUM_OPTIONS"]; } else { $_S_MOVE_FORUM_OPTIONS_ = null; }
                    echo $_S_MOVE_FORUM_OPTIONS_;
                    echo "</select></dd>";
                }
                // line 125
                echo "\t\t</dl>
\t</div>
\t";
            }
            // line 128
            echo "\t";
            if (isset($context["S_ADD_ACTION"])) { $_S_ADD_ACTION_ = $context["S_ADD_ACTION"]; } else { $_S_ADD_ACTION_ = null; }
            if (isset($context["S_FORUM_ORIG_CAT"])) { $_S_FORUM_ORIG_CAT_ = $context["S_FORUM_ORIG_CAT"]; } else { $_S_FORUM_ORIG_CAT_ = null; }
            if (isset($context["S_HAS_SUBFORUMS"])) { $_S_HAS_SUBFORUMS_ = $context["S_HAS_SUBFORUMS"]; } else { $_S_HAS_SUBFORUMS_ = null; }
            if ((( !$_S_ADD_ACTION_ && $_S_FORUM_ORIG_CAT_) && $_S_HAS_SUBFORUMS_)) {
                // line 129
                echo "\t<div id=\"cat_to_link_actions\">
\t\t<dl>
\t\t\t<dt><label for=\"action_subforums\">";
                // line 131
                echo $this->env->getExtension('phpbb')->lang("DECIDE_MOVE_DELETE_SUBFORUMS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t";
                // line 132
                if (isset($context["S_FORUMS_LIST"])) { $_S_FORUMS_LIST_ = $context["S_FORUMS_LIST"]; } else { $_S_FORUMS_LIST_ = null; }
                if ($_S_FORUMS_LIST_) {
                    // line 133
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"action_subforums\" name=\"action_subforums\" value=\"move\" checked=\"checked\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("MOVE_SUBFORUMS_TO");
                    echo "</label> <select name=\"subforums_to_id\">";
                    if (isset($context["S_FORUMS_LIST"])) { $_S_FORUMS_LIST_ = $context["S_FORUMS_LIST"]; } else { $_S_FORUMS_LIST_ = null; }
                    echo $_S_FORUMS_LIST_;
                    echo "</select></dd>
\t\t\t";
                } else {
                    // line 135
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"action_subforums\" name=\"action_subforums\" value=\"delete\" checked=\"checked\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_SUBFORUMS");
                    echo "</label></dd>
\t\t\t";
                }
                // line 137
                echo "\t\t</dl>
\t</div>
\t";
            }
            // line 140
            echo "\t<dl>
\t\t<dt><label for=\"parent\">";
            // line 141
            echo $this->env->getExtension('phpbb')->lang("FORUM_PARENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"parent\" name=\"forum_parent_id\"><option value=\"0\"";
            // line 142
            if (isset($context["S_FORUM_PARENT_ID"])) { $_S_FORUM_PARENT_ID_ = $context["S_FORUM_PARENT_ID"]; } else { $_S_FORUM_PARENT_ID_ = null; }
            if ( !$_S_FORUM_PARENT_ID_) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("NO_PARENT");
            echo "</option>";
            if (isset($context["S_PARENT_OPTIONS"])) { $_S_PARENT_OPTIONS_ = $context["S_PARENT_OPTIONS"]; } else { $_S_PARENT_OPTIONS_ = null; }
            echo $_S_PARENT_OPTIONS_;
            echo "</select></dd>
\t</dl>
\t";
            // line 144
            if (isset($context["S_CAN_COPY_PERMISSIONS"])) { $_S_CAN_COPY_PERMISSIONS_ = $context["S_CAN_COPY_PERMISSIONS"]; } else { $_S_CAN_COPY_PERMISSIONS_ = null; }
            if ($_S_CAN_COPY_PERMISSIONS_) {
                // line 145
                echo "\t\t<dl>
\t\t\t<dt><label for=\"forum_perm_from\">";
                // line 146
                echo $this->env->getExtension('phpbb')->lang("COPY_PERMISSIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("COPY_PERMISSIONS_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><select id=\"forum_perm_from\" name=\"forum_perm_from\"><option value=\"0\">";
                // line 147
                echo $this->env->getExtension('phpbb')->lang("NO_PERMISSIONS");
                echo "</option>";
                if (isset($context["S_FORUM_OPTIONS"])) { $_S_FORUM_OPTIONS_ = $context["S_FORUM_OPTIONS"]; } else { $_S_FORUM_OPTIONS_ = null; }
                echo $_S_FORUM_OPTIONS_;
                echo "</select></dd>
\t\t</dl>
\t";
            }
            // line 150
            echo "\t<dl>
\t\t<dt><label for=\"forum_name\">";
            // line 151
            echo $this->env->getExtension('phpbb')->lang("FORUM_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_name\" name=\"forum_name\" value=\"";
            // line 152
            if (isset($context["FORUM_NAME"])) { $_FORUM_NAME_ = $context["FORUM_NAME"]; } else { $_FORUM_NAME_ = null; }
            echo $_FORUM_NAME_;
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_desc\">";
            // line 155
            echo $this->env->getExtension('phpbb')->lang("FORUM_DESC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_DESC_EXPLAIN");
            echo "</span></dt>
\t\t<dd><textarea id=\"forum_desc\" name=\"forum_desc\" rows=\"5\" cols=\"45\" data-bbcode=\"true\">";
            // line 156
            if (isset($context["FORUM_DESC"])) { $_FORUM_DESC_ = $context["FORUM_DESC"]; } else { $_FORUM_DESC_ = null; }
            echo $_FORUM_DESC_;
            echo "</textarea></dd>
\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_bbcode\"";
            // line 157
            if (isset($context["S_DESC_BBCODE_CHECKED"])) { $_S_DESC_BBCODE_CHECKED_ = $context["S_DESC_BBCODE_CHECKED"]; } else { $_S_DESC_BBCODE_CHECKED_ = null; }
            if ($_S_DESC_BBCODE_CHECKED_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_BBCODE");
            echo "</label>
\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_smilies\"";
            // line 158
            if (isset($context["S_DESC_SMILIES_CHECKED"])) { $_S_DESC_SMILIES_CHECKED_ = $context["S_DESC_SMILIES_CHECKED"]; } else { $_S_DESC_SMILIES_CHECKED_ = null; }
            if ($_S_DESC_SMILIES_CHECKED_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_SMILIES");
            echo "</label>
\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_urls\"";
            // line 159
            if (isset($context["S_DESC_URLS_CHECKED"])) { $_S_DESC_URLS_CHECKED_ = $context["S_DESC_URLS_CHECKED"]; } else { $_S_DESC_URLS_CHECKED_ = null; }
            if ($_S_DESC_URLS_CHECKED_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_URLS");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_image\">";
            // line 162
            echo $this->env->getExtension('phpbb')->lang("FORUM_IMAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_IMAGE_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_image\" name=\"forum_image\" value=\"";
            // line 163
            if (isset($context["FORUM_IMAGE"])) { $_FORUM_IMAGE_ = $context["FORUM_IMAGE"]; } else { $_FORUM_IMAGE_ = null; }
            echo $_FORUM_IMAGE_;
            echo "\" maxlength=\"255\" /></dd>
\t\t";
            // line 164
            if (isset($context["FORUM_IMAGE_SRC"])) { $_FORUM_IMAGE_SRC_ = $context["FORUM_IMAGE_SRC"]; } else { $_FORUM_IMAGE_SRC_ = null; }
            if ($_FORUM_IMAGE_SRC_) {
                // line 165
                echo "\t\t\t<dd><img src=\"";
                if (isset($context["FORUM_IMAGE_SRC"])) { $_FORUM_IMAGE_SRC_ = $context["FORUM_IMAGE_SRC"]; } else { $_FORUM_IMAGE_SRC_ = null; }
                echo $_FORUM_IMAGE_SRC_;
                echo "\" alt=\"";
                echo $this->env->getExtension('phpbb')->lang("FORUM_IMAGE");
                echo "\" /></dd>
\t\t";
            }
            // line 167
            echo "\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_password\">";
            // line 169
            echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input type=\"password\" id=\"forum_password\" name=\"forum_password\" value=\"";
            // line 170
            if (isset($context["S_FORUM_PASSWORD_SET"])) { $_S_FORUM_PASSWORD_SET_ = $context["S_FORUM_PASSWORD_SET"]; } else { $_S_FORUM_PASSWORD_SET_ = null; }
            if ($_S_FORUM_PASSWORD_SET_) {
                echo "&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;";
            }
            echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_password_confirm\">";
            // line 173
            echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_CONFIRM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_CONFIRM_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input type=\"password\" id=\"forum_password_confirm\" name=\"forum_password_confirm\" value=\"";
            // line 174
            if (isset($context["S_FORUM_PASSWORD_SET"])) { $_S_FORUM_PASSWORD_SET_ = $context["S_FORUM_PASSWORD_SET"]; } else { $_S_FORUM_PASSWORD_SET_ = null; }
            if ($_S_FORUM_PASSWORD_SET_) {
                echo "&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;";
            }
            echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t";
            // line 176
            if (isset($context["S_FORUM_PASSWORD_SET"])) { $_S_FORUM_PASSWORD_SET_ = $context["S_FORUM_PASSWORD_SET"]; } else { $_S_FORUM_PASSWORD_SET_ = null; }
            if ($_S_FORUM_PASSWORD_SET_) {
                // line 177
                echo "\t<dl>
\t\t<dt><label for=\"forum_password_unset\">";
                // line 178
                echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_UNSET");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_UNSET_EXPLAIN");
                echo "</span></dt>
\t\t<dd><input id=\"forum_password_unset\" name=\"forum_password_unset\" type=\"checkbox\" /></dd>
\t</dl>
\t";
            }
            // line 182
            echo "\t<dl>
\t\t<dt><label for=\"forum_style\">";
            // line 183
            echo $this->env->getExtension('phpbb')->lang("FORUM_STYLE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"forum_style\" name=\"forum_style\"><option value=\"0\">";
            // line 184
            echo $this->env->getExtension('phpbb')->lang("DEFAULT_STYLE");
            echo "</option>";
            if (isset($context["S_STYLES_OPTIONS"])) { $_S_STYLES_OPTIONS_ = $context["S_STYLES_OPTIONS"]; } else { $_S_STYLES_OPTIONS_ = null; }
            echo $_S_STYLES_OPTIONS_;
            echo "</select></dd>
\t</dl>
\t";
            // line 186
            if (isset($context["acp_forums_main_settings_append"])) { $_acp_forums_main_settings_append_ = $context["acp_forums_main_settings_append"]; } else { $_acp_forums_main_settings_append_ = null; }
            // line 187
            echo "\t</fieldset>

\t<div id=\"forum_cat_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 191
            echo $this->env->getExtension('phpbb')->lang("GENERAL_FORUM_SETTINGS");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"display_active\">";
            // line 193
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_ACTIVE_TOPICS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_ACTIVE_TOPICS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_active\" value=\"1\"";
            // line 194
            if (isset($context["S_ENABLE_ACTIVE_TOPICS"])) { $_S_ENABLE_ACTIVE_TOPICS_ = $context["S_ENABLE_ACTIVE_TOPICS"]; } else { $_S_ENABLE_ACTIVE_TOPICS_ = null; }
            if ($_S_ENABLE_ACTIVE_TOPICS_) {
                echo " id=\"display_active\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_active\" value=\"0\"";
            // line 195
            if (isset($context["S_ENABLE_ACTIVE_TOPICS"])) { $_S_ENABLE_ACTIVE_TOPICS_ = $context["S_ENABLE_ACTIVE_TOPICS"]; } else { $_S_ENABLE_ACTIVE_TOPICS_ = null; }
            if ( !$_S_ENABLE_ACTIVE_TOPICS_) {
                echo " id=\"display_active\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t</fieldset>
\t</div>

\t<div id=\"forum_post_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 202
            echo $this->env->getExtension('phpbb')->lang("GENERAL_FORUM_SETTINGS");
            echo "</legend>
\t\t";
            // line 203
            if (isset($context["acp_forums_normal_settings_prepend"])) { $_acp_forums_normal_settings_prepend_ = $context["acp_forums_normal_settings_prepend"]; } else { $_acp_forums_normal_settings_prepend_ = null; }
            // line 204
            echo "\t\t<dl>
\t\t\t<dt><label for=\"forum_status\">";
            // line 205
            echo $this->env->getExtension('phpbb')->lang("FORUM_STATUS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select id=\"forum_status\" name=\"forum_status\">";
            // line 206
            if (isset($context["S_STATUS_OPTIONS"])) { $_S_STATUS_OPTIONS_ = $context["S_STATUS_OPTIONS"]; } else { $_S_STATUS_OPTIONS_ = null; }
            echo $_S_STATUS_OPTIONS_;
            echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"display_subforum_list\">";
            // line 209
            echo $this->env->getExtension('phpbb')->lang("LIST_SUBFORUMS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("LIST_SUBFORUMS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_subforum_list\" value=\"1\"";
            // line 210
            if (isset($context["S_DISPLAY_SUBFORUM_LIST"])) { $_S_DISPLAY_SUBFORUM_LIST_ = $context["S_DISPLAY_SUBFORUM_LIST"]; } else { $_S_DISPLAY_SUBFORUM_LIST_ = null; }
            if ($_S_DISPLAY_SUBFORUM_LIST_) {
                echo " id=\"display_subforum_list\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_subforum_list\" value=\"0\"";
            // line 211
            if (isset($context["S_DISPLAY_SUBFORUM_LIST"])) { $_S_DISPLAY_SUBFORUM_LIST_ = $context["S_DISPLAY_SUBFORUM_LIST"]; } else { $_S_DISPLAY_SUBFORUM_LIST_ = null; }
            if ( !$_S_DISPLAY_SUBFORUM_LIST_) {
                echo " id=\"display_subforum_list\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"display_on_index\">";
            // line 214
            echo $this->env->getExtension('phpbb')->lang("LIST_INDEX");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("LIST_INDEX_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_on_index\" value=\"1\"";
            // line 215
            if (isset($context["S_DISPLAY_ON_INDEX"])) { $_S_DISPLAY_ON_INDEX_ = $context["S_DISPLAY_ON_INDEX"]; } else { $_S_DISPLAY_ON_INDEX_ = null; }
            if ($_S_DISPLAY_ON_INDEX_) {
                echo " id=\"display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_on_index\" value=\"0\"";
            // line 216
            if (isset($context["S_DISPLAY_ON_INDEX"])) { $_S_DISPLAY_ON_INDEX_ = $context["S_DISPLAY_ON_INDEX"]; } else { $_S_DISPLAY_ON_INDEX_ = null; }
            if ( !$_S_DISPLAY_ON_INDEX_) {
                echo " id=\"display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_post_review\">";
            // line 219
            echo $this->env->getExtension('phpbb')->lang("ENABLE_POST_REVIEW");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ENABLE_POST_REVIEW_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_post_review\" value=\"1\"";
            // line 220
            if (isset($context["S_ENABLE_POST_REVIEW"])) { $_S_ENABLE_POST_REVIEW_ = $context["S_ENABLE_POST_REVIEW"]; } else { $_S_ENABLE_POST_REVIEW_ = null; }
            if ($_S_ENABLE_POST_REVIEW_) {
                echo " id=\"enable_post_review\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_post_review\" value=\"0\"";
            // line 221
            if (isset($context["S_ENABLE_POST_REVIEW"])) { $_S_ENABLE_POST_REVIEW_ = $context["S_ENABLE_POST_REVIEW"]; } else { $_S_ENABLE_POST_REVIEW_ = null; }
            if ( !$_S_ENABLE_POST_REVIEW_) {
                echo " id=\"enable_post_review\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_quick_reply\">";
            // line 224
            echo $this->env->getExtension('phpbb')->lang("ENABLE_QUICK_REPLY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ENABLE_QUICK_REPLY_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_quick_reply\" value=\"1\"";
            // line 225
            if (isset($context["S_ENABLE_QUICK_REPLY"])) { $_S_ENABLE_QUICK_REPLY_ = $context["S_ENABLE_QUICK_REPLY"]; } else { $_S_ENABLE_QUICK_REPLY_ = null; }
            if ($_S_ENABLE_QUICK_REPLY_) {
                echo " id=\"enable_quick_reply\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_quick_reply\" value=\"0\"";
            // line 226
            if (isset($context["S_ENABLE_QUICK_REPLY"])) { $_S_ENABLE_QUICK_REPLY_ = $context["S_ENABLE_QUICK_REPLY"]; } else { $_S_ENABLE_QUICK_REPLY_ = null; }
            if ( !$_S_ENABLE_QUICK_REPLY_) {
                echo " id=\"enable_quick_reply\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_indexing\">";
            // line 229
            echo $this->env->getExtension('phpbb')->lang("ENABLE_INDEXING");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ENABLE_INDEXING_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_indexing\" value=\"1\"";
            // line 230
            if (isset($context["S_ENABLE_INDEXING"])) { $_S_ENABLE_INDEXING_ = $context["S_ENABLE_INDEXING"]; } else { $_S_ENABLE_INDEXING_ = null; }
            if ($_S_ENABLE_INDEXING_) {
                echo " id=\"enable_indexing\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_indexing\" value=\"0\"";
            // line 231
            if (isset($context["S_ENABLE_INDEXING"])) { $_S_ENABLE_INDEXING_ = $context["S_ENABLE_INDEXING"]; } else { $_S_ENABLE_INDEXING_ = null; }
            if ( !$_S_ENABLE_INDEXING_) {
                echo " id=\"enable_indexing\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_icons\">";
            // line 234
            echo $this->env->getExtension('phpbb')->lang("ENABLE_TOPIC_ICONS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_icons\" value=\"1\"";
            // line 235
            if (isset($context["S_TOPIC_ICONS"])) { $_S_TOPIC_ICONS_ = $context["S_TOPIC_ICONS"]; } else { $_S_TOPIC_ICONS_ = null; }
            if ($_S_TOPIC_ICONS_) {
                echo " id=\"enable_icons\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_icons\" value=\"0\"";
            // line 236
            if (isset($context["S_TOPIC_ICONS"])) { $_S_TOPIC_ICONS_ = $context["S_TOPIC_ICONS"]; } else { $_S_TOPIC_ICONS_ = null; }
            if ( !$_S_TOPIC_ICONS_) {
                echo " id=\"enable_icons\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"display_recent\">";
            // line 239
            echo $this->env->getExtension('phpbb')->lang("ENABLE_RECENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ENABLE_RECENT_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_recent\" value=\"1\"";
            // line 240
            if (isset($context["S_DISPLAY_ACTIVE_TOPICS"])) { $_S_DISPLAY_ACTIVE_TOPICS_ = $context["S_DISPLAY_ACTIVE_TOPICS"]; } else { $_S_DISPLAY_ACTIVE_TOPICS_ = null; }
            if ($_S_DISPLAY_ACTIVE_TOPICS_) {
                echo " id=\"display_recent\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_recent\" value=\"0\"";
            // line 241
            if (isset($context["S_DISPLAY_ACTIVE_TOPICS"])) { $_S_DISPLAY_ACTIVE_TOPICS_ = $context["S_DISPLAY_ACTIVE_TOPICS"]; } else { $_S_DISPLAY_ACTIVE_TOPICS_ = null; }
            if ( !$_S_DISPLAY_ACTIVE_TOPICS_) {
                echo " id=\"display_recent\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"topics_per_page\">";
            // line 244
            echo $this->env->getExtension('phpbb')->lang("FORUM_TOPICS_PAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_TOPICS_PAGE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"topics_per_page\" name=\"topics_per_page\" value=\"";
            // line 245
            if (isset($context["TOPICS_PER_PAGE"])) { $_TOPICS_PER_PAGE_ = $context["TOPICS_PER_PAGE"]; } else { $_TOPICS_PER_PAGE_ = null; }
            echo $_TOPICS_PER_PAGE_;
            echo "\" min=\"0\" max=\"9999\" /></dd>
\t\t</dl>
\t\t";
            // line 247
            if (isset($context["acp_forums_normal_settings_append"])) { $_acp_forums_normal_settings_append_ = $context["acp_forums_normal_settings_append"]; } else { $_acp_forums_normal_settings_append_ = null; }
            // line 248
            echo "\t\t</fieldset>

\t\t<fieldset>
\t\t\t<legend>";
            // line 251
            echo $this->env->getExtension('phpbb')->lang("FORUM_PRUNE_SETTINGS");
            echo "</legend>
\t\t";
            // line 252
            if (isset($context["acp_forums_prune_settings_prepend"])) { $_acp_forums_prune_settings_prepend_ = $context["acp_forums_prune_settings_prepend"]; } else { $_acp_forums_prune_settings_prepend_ = null; }
            // line 253
            echo "\t\t<dl>
\t\t\t<dt><label for=\"enable_prune\">";
            // line 254
            echo $this->env->getExtension('phpbb')->lang("FORUM_AUTO_PRUNE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_AUTO_PRUNE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_prune\" value=\"1\"";
            // line 255
            if (isset($context["S_PRUNE_ENABLE"])) { $_S_PRUNE_ENABLE_ = $context["S_PRUNE_ENABLE"]; } else { $_S_PRUNE_ENABLE_ = null; }
            if ($_S_PRUNE_ENABLE_) {
                echo " id=\"enable_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_prune\" value=\"0\"";
            // line 256
            if (isset($context["S_PRUNE_ENABLE"])) { $_S_PRUNE_ENABLE_ = $context["S_PRUNE_ENABLE"]; } else { $_S_PRUNE_ENABLE_ = null; }
            if ( !$_S_PRUNE_ENABLE_) {
                echo " id=\"enable_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_freq\">";
            // line 259
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_FREQ");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_FREQ_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_freq\" name=\"prune_freq\" value=\"";
            // line 260
            if (isset($context["PRUNE_FREQ"])) { $_PRUNE_FREQ_ = $context["PRUNE_FREQ"]; } else { $_PRUNE_FREQ_ = null; }
            echo $_PRUNE_FREQ_;
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_days\">";
            // line 263
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_DAYS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_DAYS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_days\" name=\"prune_days\" value=\"";
            // line 264
            if (isset($context["PRUNE_DAYS"])) { $_PRUNE_DAYS_ = $context["PRUNE_DAYS"]; } else { $_PRUNE_DAYS_ = null; }
            echo $_PRUNE_DAYS_;
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_viewed\">";
            // line 267
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_VIEWED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_VIEWED_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_viewed\" name=\"prune_viewed\" value=\"";
            // line 268
            if (isset($context["PRUNE_VIEWED"])) { $_PRUNE_VIEWED_ = $context["PRUNE_VIEWED"]; } else { $_PRUNE_VIEWED_ = null; }
            echo $_PRUNE_VIEWED_;
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_old_polls\">";
            // line 271
            echo $this->env->getExtension('phpbb')->lang("PRUNE_OLD_POLLS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("PRUNE_OLD_POLLS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_old_polls\" value=\"1\"";
            // line 272
            if (isset($context["S_PRUNE_OLD_POLLS"])) { $_S_PRUNE_OLD_POLLS_ = $context["S_PRUNE_OLD_POLLS"]; } else { $_S_PRUNE_OLD_POLLS_ = null; }
            if ($_S_PRUNE_OLD_POLLS_) {
                echo " id=\"prune_old_polls\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"prune_old_polls\" value=\"0\"";
            // line 273
            if (isset($context["S_PRUNE_OLD_POLLS"])) { $_S_PRUNE_OLD_POLLS_ = $context["S_PRUNE_OLD_POLLS"]; } else { $_S_PRUNE_OLD_POLLS_ = null; }
            if ( !$_S_PRUNE_OLD_POLLS_) {
                echo " id=\"prune_old_polls\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_announce\">";
            // line 276
            echo $this->env->getExtension('phpbb')->lang("PRUNE_ANNOUNCEMENTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_announce\" value=\"1\"";
            // line 277
            if (isset($context["S_PRUNE_ANNOUNCE"])) { $_S_PRUNE_ANNOUNCE_ = $context["S_PRUNE_ANNOUNCE"]; } else { $_S_PRUNE_ANNOUNCE_ = null; }
            if ($_S_PRUNE_ANNOUNCE_) {
                echo " id=\"prune_announce\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"prune_announce\" value=\"0\"";
            // line 278
            if (isset($context["S_PRUNE_ANNOUNCE"])) { $_S_PRUNE_ANNOUNCE_ = $context["S_PRUNE_ANNOUNCE"]; } else { $_S_PRUNE_ANNOUNCE_ = null; }
            if ( !$_S_PRUNE_ANNOUNCE_) {
                echo " id=\"prune_announce\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_sticky\">";
            // line 281
            echo $this->env->getExtension('phpbb')->lang("PRUNE_STICKY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_sticky\" value=\"1\"";
            // line 282
            if (isset($context["S_PRUNE_STICKY"])) { $_S_PRUNE_STICKY_ = $context["S_PRUNE_STICKY"]; } else { $_S_PRUNE_STICKY_ = null; }
            if ($_S_PRUNE_STICKY_) {
                echo " id=\"prune_sticky\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"prune_sticky\" value=\"0\"";
            // line 283
            if (isset($context["S_PRUNE_STICKY"])) { $_S_PRUNE_STICKY_ = $context["S_PRUNE_STICKY"]; } else { $_S_PRUNE_STICKY_ = null; }
            if ( !$_S_PRUNE_STICKY_) {
                echo " id=\"prune_sticky\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_shadow_prune\">";
            // line 286
            echo $this->env->getExtension('phpbb')->lang("FORUM_PRUNE_SHADOW");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_PRUNE_SHADOW_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_shadow_prune\" value=\"1\"";
            // line 287
            if (isset($context["S_PRUNE_SHADOW_ENABLE"])) { $_S_PRUNE_SHADOW_ENABLE_ = $context["S_PRUNE_SHADOW_ENABLE"]; } else { $_S_PRUNE_SHADOW_ENABLE_ = null; }
            if ($_S_PRUNE_SHADOW_ENABLE_) {
                echo " id=\"enable_shadow_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_shadow_prune\" value=\"0\"";
            // line 288
            if (isset($context["S_PRUNE_SHADOW_ENABLE"])) { $_S_PRUNE_SHADOW_ENABLE_ = $context["S_PRUNE_SHADOW_ENABLE"]; } else { $_S_PRUNE_SHADOW_ENABLE_ = null; }
            if ( !$_S_PRUNE_SHADOW_ENABLE_) {
                echo " id=\"enable_shadow_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_shadow_freq\">";
            // line 291
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_SHADOW_FREQ");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_SHADOW_FREQ_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_shadow_freq\" name=\"prune_shadow_freq\" value=\"";
            // line 292
            if (isset($context["PRUNE_SHADOW_FREQ"])) { $_PRUNE_SHADOW_FREQ_ = $context["PRUNE_SHADOW_FREQ"]; } else { $_PRUNE_SHADOW_FREQ_ = null; }
            echo $_PRUNE_SHADOW_FREQ_;
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_shadow_days\">";
            // line 295
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_SHADOW_DAYS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_SHADOW_DAYS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_shadow_days\" name=\"prune_shadow_days\" value=\"";
            // line 296
            if (isset($context["PRUNE_SHADOW_DAYS"])) { $_PRUNE_SHADOW_DAYS_ = $context["PRUNE_SHADOW_DAYS"]; } else { $_PRUNE_SHADOW_DAYS_ = null; }
            echo $_PRUNE_SHADOW_DAYS_;
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t";
            // line 298
            if (isset($context["acp_forums_prune_settings_append"])) { $_acp_forums_prune_settings_append_ = $context["acp_forums_prune_settings_append"]; } else { $_acp_forums_prune_settings_append_ = null; }
            // line 299
            echo "\t\t</fieldset>
\t</div>

\t<div id=\"forum_link_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 304
            echo $this->env->getExtension('phpbb')->lang("GENERAL_FORUM_SETTINGS");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"link_display_on_index\">";
            // line 306
            echo $this->env->getExtension('phpbb')->lang("LIST_INDEX");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("LIST_INDEX_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"link_display_on_index\" value=\"1\"";
            // line 307
            if (isset($context["S_DISPLAY_ON_INDEX"])) { $_S_DISPLAY_ON_INDEX_ = $context["S_DISPLAY_ON_INDEX"]; } else { $_S_DISPLAY_ON_INDEX_ = null; }
            if ($_S_DISPLAY_ON_INDEX_) {
                echo " id=\"link_display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"link_display_on_index\" value=\"0\"";
            // line 308
            if (isset($context["S_DISPLAY_ON_INDEX"])) { $_S_DISPLAY_ON_INDEX_ = $context["S_DISPLAY_ON_INDEX"]; } else { $_S_DISPLAY_ON_INDEX_ = null; }
            if ( !$_S_DISPLAY_ON_INDEX_) {
                echo " id=\"link_display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"forum_link\">";
            // line 311
            echo $this->env->getExtension('phpbb')->lang("FORUM_LINK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_LINK_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_link\" name=\"forum_link\" value=\"";
            // line 312
            if (isset($context["FORUM_DATA_LINK"])) { $_FORUM_DATA_LINK_ = $context["FORUM_DATA_LINK"]; } else { $_FORUM_DATA_LINK_ = null; }
            echo $_FORUM_DATA_LINK_;
            echo "\" maxlength=\"255\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"forum_link_track\">";
            // line 315
            echo $this->env->getExtension('phpbb')->lang("FORUM_LINK_TRACK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_LINK_TRACK_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"forum_link_track\" value=\"1\"";
            // line 316
            if (isset($context["S_FORUM_LINK_TRACK"])) { $_S_FORUM_LINK_TRACK_ = $context["S_FORUM_LINK_TRACK"]; } else { $_S_FORUM_LINK_TRACK_ = null; }
            if ($_S_FORUM_LINK_TRACK_) {
                echo " id=\"forum_link_track\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"forum_link_track\" value=\"0\"";
            // line 317
            if (isset($context["S_FORUM_LINK_TRACK"])) { $_S_FORUM_LINK_TRACK_ = $context["S_FORUM_LINK_TRACK"]; } else { $_S_FORUM_LINK_TRACK_ = null; }
            if ( !$_S_FORUM_LINK_TRACK_) {
                echo " id=\"forum_link_track\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t</fieldset>
\t</div>

\t<div id=\"forum_rules_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 324
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
            echo "</legend>
\t\t";
            // line 325
            if (isset($context["acp_forums_rules_settings_prepend"])) { $_acp_forums_rules_settings_prepend_ = $context["acp_forums_rules_settings_prepend"]; } else { $_acp_forums_rules_settings_prepend_ = null; }
            // line 326
            echo "\t\t<dl>
\t\t\t<dt><label for=\"forum_rules_link\">";
            // line 327
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES_LINK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES_LINK_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_rules_link\" name=\"forum_rules_link\" value=\"";
            // line 328
            if (isset($context["FORUM_RULES_LINK"])) { $_FORUM_RULES_LINK_ = $context["FORUM_RULES_LINK"]; } else { $_FORUM_RULES_LINK_ = null; }
            echo $_FORUM_RULES_LINK_;
            echo "\" maxlength=\"255\" /></dd>
\t\t</dl>
\t";
            // line 330
            if (isset($context["FORUM_RULES_PREVIEW"])) { $_FORUM_RULES_PREVIEW_ = $context["FORUM_RULES_PREVIEW"]; } else { $_FORUM_RULES_PREVIEW_ = null; }
            if ($_FORUM_RULES_PREVIEW_) {
                // line 331
                echo "\t\t<dl>
\t\t\t<dt><label>";
                // line 332
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES_PREVIEW");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd>";
                // line 333
                if (isset($context["FORUM_RULES_PREVIEW"])) { $_FORUM_RULES_PREVIEW_ = $context["FORUM_RULES_PREVIEW"]; } else { $_FORUM_RULES_PREVIEW_ = null; }
                echo $_FORUM_RULES_PREVIEW_;
                echo "</dd>
\t\t</dl>
\t";
            }
            // line 336
            echo "\t\t<dl>
\t\t\t<dt><label for=\"forum_rules\">";
            // line 337
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><textarea id=\"forum_rules\" name=\"forum_rules\" rows=\"4\" cols=\"70\" data-bbcode=\"true\">";
            // line 338
            if (isset($context["FORUM_RULES_PLAIN"])) { $_FORUM_RULES_PLAIN_ = $context["FORUM_RULES_PLAIN"]; } else { $_FORUM_RULES_PLAIN_ = null; }
            echo $_FORUM_RULES_PLAIN_;
            echo "</textarea></dd>
\t\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"rules_parse_bbcode\"";
            // line 339
            if (isset($context["S_BBCODE_CHECKED"])) { $_S_BBCODE_CHECKED_ = $context["S_BBCODE_CHECKED"]; } else { $_S_BBCODE_CHECKED_ = null; }
            if ($_S_BBCODE_CHECKED_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_BBCODE");
            echo "</label>
\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"rules_parse_smilies\"";
            // line 340
            if (isset($context["S_SMILIES_CHECKED"])) { $_S_SMILIES_CHECKED_ = $context["S_SMILIES_CHECKED"]; } else { $_S_SMILIES_CHECKED_ = null; }
            if ($_S_SMILIES_CHECKED_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_SMILIES");
            echo "</label>
\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"rules_parse_urls\"";
            // line 341
            if (isset($context["S_URLS_CHECKED"])) { $_S_URLS_CHECKED_ = $context["S_URLS_CHECKED"]; } else { $_S_URLS_CHECKED_ = null; }
            if ($_S_URLS_CHECKED_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_URLS");
            echo "</label></dd>
\t\t</dl>
\t\t";
            // line 343
            if (isset($context["acp_forums_rules_settings_append"])) { $_acp_forums_rules_settings_append_ = $context["acp_forums_rules_settings_append"]; } else { $_acp_forums_rules_settings_append_ = null; }
            // line 344
            echo "\t\t</fieldset>
\t</div>
\t
\t";
            // line 347
            if (isset($context["acp_forums_custom_settings"])) { $_acp_forums_custom_settings_ = $context["acp_forums_custom_settings"]; } else { $_acp_forums_custom_settings_ = null; }
            // line 348
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 350
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"update\" value=\"";
            // line 351
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 352
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 353
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } elseif ($_S_DELETE_FORUM_) {
            // line 358
            echo "
\t<a href=\"";
            // line 359
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            echo $_U_BACK_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 361
            echo $this->env->getExtension('phpbb')->lang("FORUM_DELETE");
            echo "</h1>

\t<p>";
            // line 363
            echo $this->env->getExtension('phpbb')->lang("FORUM_DELETE_EXPLAIN");
            echo "</p>

\t";
            // line 365
            if (isset($context["S_ERROR"])) { $_S_ERROR_ = $context["S_ERROR"]; } else { $_S_ERROR_ = null; }
            if ($_S_ERROR_) {
                // line 366
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 367
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 368
                if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
                echo $_ERROR_MSG_;
                echo "</p>
\t\t</div>
\t";
            }
            // line 371
            echo "
\t<form id=\"acp_forum\" method=\"post\" action=\"";
            // line 372
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 375
            echo $this->env->getExtension('phpbb')->lang("FORUM_DELETE");
            echo "</legend>
\t<dl>
\t\t<dt><label>";
            // line 377
            echo $this->env->getExtension('phpbb')->lang("FORUM_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><strong>";
            // line 378
            if (isset($context["FORUM_NAME"])) { $_FORUM_NAME_ = $context["FORUM_NAME"]; } else { $_FORUM_NAME_ = null; }
            echo $_FORUM_NAME_;
            echo "</strong></dd>
\t</dl>
\t";
            // line 380
            if (isset($context["S_FORUM_POST"])) { $_S_FORUM_POST_ = $context["S_FORUM_POST"]; } else { $_S_FORUM_POST_ = null; }
            if ($_S_FORUM_POST_) {
                // line 381
                echo "\t\t<dl>
\t\t\t<dt><label for=\"delete_action\">";
                // line 382
                echo $this->env->getExtension('phpbb')->lang("ACTION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"delete_action\" name=\"action_posts\" value=\"delete\" checked=\"checked\" /> ";
                // line 383
                echo $this->env->getExtension('phpbb')->lang("DELETE_ALL_POSTS");
                echo "</label></dd>
\t\t\t";
                // line 384
                if (isset($context["S_MOVE_FORUM_OPTIONS"])) { $_S_MOVE_FORUM_OPTIONS_ = $context["S_MOVE_FORUM_OPTIONS"]; } else { $_S_MOVE_FORUM_OPTIONS_ = null; }
                if ($_S_MOVE_FORUM_OPTIONS_) {
                    // line 385
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"action_posts\" value=\"move\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("MOVE_POSTS_TO");
                    echo "</label> <select name=\"posts_to_id\">";
                    if (isset($context["S_MOVE_FORUM_OPTIONS"])) { $_S_MOVE_FORUM_OPTIONS_ = $context["S_MOVE_FORUM_OPTIONS"]; } else { $_S_MOVE_FORUM_OPTIONS_ = null; }
                    echo $_S_MOVE_FORUM_OPTIONS_;
                    echo "</select></dd>
\t\t\t";
                }
                // line 387
                echo "\t\t</dl>
\t";
            }
            // line 389
            echo "\t";
            if (isset($context["S_HAS_SUBFORUMS"])) { $_S_HAS_SUBFORUMS_ = $context["S_HAS_SUBFORUMS"]; } else { $_S_HAS_SUBFORUMS_ = null; }
            if ($_S_HAS_SUBFORUMS_) {
                // line 390
                echo "\t\t<dl>
\t\t\t<dt><label for=\"sub_delete_action\">";
                // line 391
                echo $this->env->getExtension('phpbb')->lang("ACTION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"sub_delete_action\" name=\"action_subforums\" value=\"delete\" checked=\"checked\" /> ";
                // line 392
                echo $this->env->getExtension('phpbb')->lang("DELETE_SUBFORUMS");
                echo "</label></dd>
\t\t\t";
                // line 393
                if (isset($context["S_FORUMS_LIST"])) { $_S_FORUMS_LIST_ = $context["S_FORUMS_LIST"]; } else { $_S_FORUMS_LIST_ = null; }
                if ($_S_FORUMS_LIST_) {
                    // line 394
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"action_subforums\" value=\"move\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("MOVE_SUBFORUMS_TO");
                    echo "</label> <select name=\"subforums_to_id\">";
                    if (isset($context["S_FORUMS_LIST"])) { $_S_FORUMS_LIST_ = $context["S_FORUMS_LIST"]; } else { $_S_FORUMS_LIST_ = null; }
                    echo $_S_FORUMS_LIST_;
                    echo "</select></dd>
\t\t\t";
                }
                // line 396
                echo "\t\t</dl>
\t";
            }
            // line 398
            echo "
\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
            // line 400
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 402
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } elseif ($_S_CONTINUE_SYNC_) {
            // line 407
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\tvar close_waitscreen = 0;
\t\t// no scrollbars...
\t\tpopup('";
            // line 412
            if (isset($context["UA_PROGRESS_BAR"])) { $_UA_PROGRESS_BAR_ = $context["UA_PROGRESS_BAR"]; } else { $_UA_PROGRESS_BAR_ = null; }
            echo $_UA_PROGRESS_BAR_;
            echo "', 400, 240, '_sync');
\t// ]]>
\t</script>

\t<h1>";
            // line 416
            echo $this->env->getExtension('phpbb')->lang("FORUM_ADMIN");
            echo "</h1>

\t<p>";
            // line 418
            echo $this->env->getExtension('phpbb')->lang("FORUM_ADMIN_EXPLAIN");
            echo "</p>

\t<p>";
            // line 420
            echo $this->env->getExtension('phpbb')->lang("PROGRESS_EXPLAIN");
            echo "</p>

";
        } else {
            // line 423
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\t/**
\t\t* Popup search progress bar
\t\t*/
\t\tfunction popup_progress_bar()
\t\t{
\t\t\tvar close_waitscreen = 0;
\t\t\t// no scrollbars...
\t\t\tpopup('";
            // line 433
            if (isset($context["UA_PROGRESS_BAR"])) { $_UA_PROGRESS_BAR_ = $context["UA_PROGRESS_BAR"]; } else { $_UA_PROGRESS_BAR_ = null; }
            echo $_UA_PROGRESS_BAR_;
            echo "', 400, 240, '_sync');
\t\t}
\t// ]]>
\t</script>

\t<h1>";
            // line 438
            echo $this->env->getExtension('phpbb')->lang("FORUM_ADMIN");
            echo "</h1>

\t<p>";
            // line 440
            echo $this->env->getExtension('phpbb')->lang("FORUM_ADMIN_EXPLAIN");
            echo "</p>

\t";
            // line 442
            if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
            if ($_ERROR_MSG_) {
                // line 443
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 444
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 445
                if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
                echo $_ERROR_MSG_;
                echo "</p>
\t\t</div>
\t";
            }
            // line 448
            echo "
\t";
            // line 449
            if (isset($context["S_RESYNCED"])) { $_S_RESYNCED_ = $context["S_RESYNCED"]; } else { $_S_RESYNCED_ = null; }
            if ($_S_RESYNCED_) {
                // line 450
                echo "\t\t<script type=\"text/javascript\">
\t\t// <![CDATA[
\t\t\tvar close_waitscreen = 1;
\t\t// ]]>
\t\t</script>

\t\t<div class=\"successbox\">
\t\t\t<h3>";
                // line 457
                echo $this->env->getExtension('phpbb')->lang("NOTIFY");
                echo "</h3>
\t\t\t<p>";
                // line 458
                echo $this->env->getExtension('phpbb')->lang("FORUM_RESYNCED");
                echo "</p>
\t\t</div>
\t";
            }
            // line 461
            echo "
\t<p><strong>";
            // line 462
            if (isset($context["NAVIGATION"])) { $_NAVIGATION_ = $context["NAVIGATION"]; } else { $_NAVIGATION_ = null; }
            echo $_NAVIGATION_;
            if (isset($context["S_NO_FORUMS"])) { $_S_NO_FORUMS_ = $context["S_NO_FORUMS"]; } else { $_S_NO_FORUMS_ = null; }
            if ($_S_NO_FORUMS_) {
                echo " [<a href=\"";
                if (isset($context["U_EDIT"])) { $_U_EDIT_ = $context["U_EDIT"]; } else { $_U_EDIT_ = null; }
                echo $_U_EDIT_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("EDIT");
                echo "</a> | <a href=\"";
                if (isset($context["U_DELETE"])) { $_U_DELETE_ = $context["U_DELETE"]; } else { $_U_DELETE_ = null; }
                echo $_U_DELETE_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "</a>";
                if (isset($context["S_LINK"])) { $_S_LINK_ = $context["S_LINK"]; } else { $_S_LINK_ = null; }
                if ( !$_S_LINK_) {
                    echo " | <a href=\"";
                    if (isset($context["U_SYNC"])) { $_U_SYNC_ = $context["U_SYNC"]; } else { $_U_SYNC_ = null; }
                    echo $_U_SYNC_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("RESYNC");
                    echo "</a>";
                }
                echo "]";
            }
            echo "</strong></p>

\t";
            // line 464
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "forums", array()))) {
                // line 465
                echo "\t\t<table class=\"table1 forums\">
\t\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t\t<tbody>
\t\t";
                // line 468
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "forums", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["forums"]) {
                    // line 469
                    echo "\t\t\t<tr>
\t\t\t\t<td class=\"folder\">";
                    // line 470
                    if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                    echo $this->getAttribute($_forums_, "FOLDER_IMAGE", array());
                    echo "</td>
\t\t\t\t<td class=\"forum-desc\">
\t\t\t\t\t";
                    // line 472
                    if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                    if ($this->getAttribute($_forums_, "FORUM_IMAGE", array())) {
                        echo "<div style=\"float: ";
                        if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
                        echo $_S_CONTENT_FLOW_BEGIN_;
                        echo "; margin-right: 5px;\">";
                        if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                        echo $this->getAttribute($_forums_, "FORUM_IMAGE", array());
                        echo "</div>";
                    }
                    // line 473
                    echo "\t\t\t\t\t<strong>";
                    if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                    if ($this->getAttribute($_forums_, "S_FORUM_LINK", array())) {
                        if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                        echo $this->getAttribute($_forums_, "FORUM_NAME", array());
                    } else {
                        echo "<a href=\"";
                        if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                        echo $this->getAttribute($_forums_, "U_FORUM", array());
                        echo "\">";
                        if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                        echo $this->getAttribute($_forums_, "FORUM_NAME", array());
                        echo "</a>";
                    }
                    echo "</strong>
\t\t\t\t\t";
                    // line 474
                    if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                    if ($this->getAttribute($_forums_, "FORUM_DESCRIPTION", array())) {
                        echo "<br /><span>";
                        if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                        echo $this->getAttribute($_forums_, "FORUM_DESCRIPTION", array());
                        echo "</span>";
                    }
                    // line 475
                    echo "\t\t\t\t\t";
                    if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                    if ($this->getAttribute($_forums_, "S_FORUM_POST", array())) {
                        echo "<br /><br /><span>";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                        echo $this->getAttribute($_forums_, "FORUM_TOPICS", array());
                        echo "</strong> / ";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                        echo $this->getAttribute($_forums_, "FORUM_POSTS", array());
                        echo "</strong></span>";
                    }
                    // line 476
                    echo "\t\t\t\t</td>
\t\t\t\t<td class=\"actions\">
\t\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                    // line 478
                    if (isset($context["ICON_MOVE_UP_DISABLED"])) { $_ICON_MOVE_UP_DISABLED_ = $context["ICON_MOVE_UP_DISABLED"]; } else { $_ICON_MOVE_UP_DISABLED_ = null; }
                    echo $_ICON_MOVE_UP_DISABLED_;
                    echo "</span>
\t\t\t\t\t<span class=\"up\"><a href=\"";
                    // line 479
                    if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                    echo $this->getAttribute($_forums_, "U_MOVE_UP", array());
                    echo "\" data-ajax=\"row_up\">";
                    if (isset($context["ICON_MOVE_UP"])) { $_ICON_MOVE_UP_ = $context["ICON_MOVE_UP"]; } else { $_ICON_MOVE_UP_ = null; }
                    echo $_ICON_MOVE_UP_;
                    echo "</a></span>
\t\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                    // line 480
                    if (isset($context["ICON_MOVE_DOWN_DISABLED"])) { $_ICON_MOVE_DOWN_DISABLED_ = $context["ICON_MOVE_DOWN_DISABLED"]; } else { $_ICON_MOVE_DOWN_DISABLED_ = null; }
                    echo $_ICON_MOVE_DOWN_DISABLED_;
                    echo "</span>
\t\t\t\t\t<span class=\"down\"><a href=\"";
                    // line 481
                    if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                    echo $this->getAttribute($_forums_, "U_MOVE_DOWN", array());
                    echo "\" data-ajax=\"row_down\">";
                    if (isset($context["ICON_MOVE_DOWN"])) { $_ICON_MOVE_DOWN_ = $context["ICON_MOVE_DOWN"]; } else { $_ICON_MOVE_DOWN_ = null; }
                    echo $_ICON_MOVE_DOWN_;
                    echo "</a></span>
\t\t\t\t\t<a href=\"";
                    // line 482
                    if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                    echo $this->getAttribute($_forums_, "U_EDIT", array());
                    echo "\">";
                    if (isset($context["ICON_EDIT"])) { $_ICON_EDIT_ = $context["ICON_EDIT"]; } else { $_ICON_EDIT_ = null; }
                    echo $_ICON_EDIT_;
                    echo "</a>
\t\t\t\t\t";
                    // line 483
                    if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                    if ( !$this->getAttribute($_forums_, "S_FORUM_LINK", array())) {
                        // line 484
                        echo "\t\t\t\t\t\t<a href=\"";
                        if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                        echo $this->getAttribute($_forums_, "U_SYNC", array());
                        echo "\" onclick=\"popup_progress_bar();\">";
                        if (isset($context["ICON_SYNC"])) { $_ICON_SYNC_ = $context["ICON_SYNC"]; } else { $_ICON_SYNC_ = null; }
                        echo $_ICON_SYNC_;
                        echo "</a>
\t\t\t\t\t";
                    } else {
                        // line 486
                        echo "\t\t\t\t\t\t";
                        if (isset($context["ICON_SYNC_DISABLED"])) { $_ICON_SYNC_DISABLED_ = $context["ICON_SYNC_DISABLED"]; } else { $_ICON_SYNC_DISABLED_ = null; }
                        echo $_ICON_SYNC_DISABLED_;
                        echo "
\t\t\t\t\t";
                    }
                    // line 488
                    echo "\t\t\t\t\t<a href=\"";
                    if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
                    echo $this->getAttribute($_forums_, "U_DELETE", array());
                    echo "\">";
                    if (isset($context["ICON_DELETE"])) { $_ICON_DELETE_ = $context["ICON_DELETE"]; } else { $_ICON_DELETE_ = null; }
                    echo $_ICON_DELETE_;
                    echo "</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forums'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 492
                echo "\t\t</tbody>
\t\t</table>
\t";
            }
            // line 495
            echo "
\t<form id=\"fselect\" method=\"post\" action=\"";
            // line 496
            if (isset($context["U_SEL_ACTION"])) { $_U_SEL_ACTION_ = $context["U_SEL_ACTION"]; } else { $_U_SEL_ACTION_ = null; }
            echo $_U_SEL_ACTION_;
            echo "\">

\t<fieldset class=\"quick\">
\t\t";
            // line 499
            echo $this->env->getExtension('phpbb')->lang("SELECT_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"parent_id\" onchange=\"if(this.options[this.selectedIndex].value != -1){ this.form.submit(); }\">";
            if (isset($context["FORUM_BOX"])) { $_FORUM_BOX_ = $context["FORUM_BOX"]; } else { $_FORUM_BOX_ = null; }
            echo $_FORUM_BOX_;
            echo "</select>

\t\t";
            // line 501
            if (isset($context["acp_forums_quick_select_button_prepend"])) { $_acp_forums_quick_select_button_prepend_ = $context["acp_forums_quick_select_button_prepend"]; } else { $_acp_forums_quick_select_button_prepend_ = null; }
            echo "<input class=\"button2\" type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" />";
            if (isset($context["acp_forums_quick_select_button_append"])) { $_acp_forums_quick_select_button_append_ = $context["acp_forums_quick_select_button_append"]; } else { $_acp_forums_quick_select_button_append_ = null; }
            // line 502
            echo "\t\t";
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

\t<form id=\"forums\" method=\"post\" action=\"";
            // line 506
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset class=\"quick\">
\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />

\t\t<input type=\"text\" name=\"forum_name\" value=\"\" maxlength=\"255\" />
\t\t<input class=\"button2\" name=\"addforum\" type=\"submit\" value=\"";
            // line 512
            echo $this->env->getExtension('phpbb')->lang("CREATE_FORUM");
            echo "\" />
\t\t";
            // line 513
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 518
        echo "
";
        // line 519
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_forums.html", 519)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_forums.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1749 => 519,  1746 => 518,  1737 => 513,  1733 => 512,  1723 => 506,  1714 => 502,  1708 => 501,  1699 => 499,  1692 => 496,  1689 => 495,  1684 => 492,  1669 => 488,  1662 => 486,  1652 => 484,  1649 => 483,  1641 => 482,  1633 => 481,  1628 => 480,  1620 => 479,  1615 => 478,  1611 => 476,  1593 => 475,  1585 => 474,  1568 => 473,  1557 => 472,  1551 => 470,  1548 => 469,  1543 => 468,  1538 => 465,  1535 => 464,  1505 => 462,  1502 => 461,  1496 => 458,  1492 => 457,  1483 => 450,  1480 => 449,  1477 => 448,  1470 => 445,  1466 => 444,  1463 => 443,  1460 => 442,  1455 => 440,  1450 => 438,  1441 => 433,  1429 => 423,  1423 => 420,  1418 => 418,  1413 => 416,  1405 => 412,  1398 => 407,  1389 => 402,  1384 => 400,  1380 => 398,  1376 => 396,  1367 => 394,  1364 => 393,  1360 => 392,  1355 => 391,  1352 => 390,  1348 => 389,  1344 => 387,  1335 => 385,  1332 => 384,  1328 => 383,  1323 => 382,  1320 => 381,  1317 => 380,  1311 => 378,  1306 => 377,  1301 => 375,  1294 => 372,  1291 => 371,  1284 => 368,  1280 => 367,  1277 => 366,  1274 => 365,  1269 => 363,  1264 => 361,  1253 => 359,  1250 => 358,  1241 => 353,  1237 => 352,  1233 => 351,  1229 => 350,  1225 => 348,  1223 => 347,  1218 => 344,  1216 => 343,  1206 => 341,  1197 => 340,  1188 => 339,  1183 => 338,  1176 => 337,  1173 => 336,  1166 => 333,  1161 => 332,  1158 => 331,  1155 => 330,  1149 => 328,  1142 => 327,  1139 => 326,  1137 => 325,  1133 => 324,  1118 => 317,  1109 => 316,  1102 => 315,  1095 => 312,  1088 => 311,  1077 => 308,  1068 => 307,  1061 => 306,  1056 => 304,  1049 => 299,  1047 => 298,  1039 => 296,  1032 => 295,  1023 => 292,  1016 => 291,  1005 => 288,  996 => 287,  989 => 286,  978 => 283,  969 => 282,  964 => 281,  953 => 278,  944 => 277,  939 => 276,  928 => 273,  919 => 272,  912 => 271,  903 => 268,  896 => 267,  887 => 264,  880 => 263,  871 => 260,  864 => 259,  853 => 256,  844 => 255,  837 => 254,  834 => 253,  832 => 252,  828 => 251,  823 => 248,  821 => 247,  815 => 245,  808 => 244,  797 => 241,  788 => 240,  781 => 239,  770 => 236,  761 => 235,  756 => 234,  745 => 231,  736 => 230,  729 => 229,  718 => 226,  709 => 225,  702 => 224,  691 => 221,  682 => 220,  675 => 219,  664 => 216,  655 => 215,  648 => 214,  637 => 211,  628 => 210,  621 => 209,  614 => 206,  609 => 205,  606 => 204,  604 => 203,  600 => 202,  585 => 195,  576 => 194,  569 => 193,  564 => 191,  558 => 187,  556 => 186,  548 => 184,  543 => 183,  540 => 182,  530 => 178,  527 => 177,  524 => 176,  516 => 174,  509 => 173,  500 => 170,  493 => 169,  489 => 167,  480 => 165,  477 => 164,  472 => 163,  465 => 162,  454 => 159,  445 => 158,  436 => 157,  431 => 156,  424 => 155,  417 => 152,  412 => 151,  409 => 150,  400 => 147,  393 => 146,  390 => 145,  387 => 144,  374 => 142,  369 => 141,  366 => 140,  361 => 137,  355 => 135,  346 => 133,  343 => 132,  338 => 131,  334 => 129,  328 => 128,  323 => 125,  313 => 124,  304 => 123,  299 => 122,  295 => 120,  291 => 119,  285 => 117,  280 => 116,  277 => 115,  275 => 114,  271 => 113,  264 => 110,  261 => 109,  254 => 106,  250 => 105,  247 => 104,  244 => 103,  239 => 101,  227 => 99,  216 => 97,  209 => 92,  205 => 90,  202 => 89,  199 => 88,  195 => 86,  192 => 85,  189 => 84,  185 => 82,  182 => 81,  179 => 80,  175 => 78,  172 => 77,  169 => 76,  166 => 75,  162 => 73,  158 => 72,  153 => 71,  150 => 70,  147 => 69,  143 => 67,  139 => 66,  135 => 65,  116 => 50,  105 => 43,  94 => 36,  91 => 35,  77 => 26,  72 => 25,  69 => 24,  55 => 15,  51 => 14,  41 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <!-- IF S_EDIT_FORUM -->*/
/* */
/* 	<script type="text/javascript">*/
/* 	// <![CDATA[*/
/* 		/***/
/* 		* Handle displaying/hiding several options based on the forum type*/
/* 		*//* */
/* 		function display_options(value)*/
/* 		{*/
/* 			<!-- IF not S_ADD_ACTION and S_FORUM_ORIG_POST -->*/
/* 				if (value == {FORUM_POST})*/
/* 				{*/
/* 					phpbb.toggleDisplay('type_actions', -1);*/
/* 				}*/
/* 				else*/
/* 				{*/
/* 					phpbb.toggleDisplay('type_actions', 1);*/
/* 				}*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF not S_ADD_ACTION and S_FORUM_ORIG_CAT and S_HAS_SUBFORUMS -->*/
/* 				if (value == {FORUM_LINK})*/
/* 				{*/
/* 					phpbb.toggleDisplay('cat_to_link_actions', 1);*/
/* 				}*/
/* 				else*/
/* 				{*/
/* 					phpbb.toggleDisplay('cat_to_link_actions', -1);*/
/* 				}*/
/* 			<!-- ENDIF -->*/
/* */
/* 			if (value == {FORUM_POST})*/
/* 			{*/
/* 				phpbb.toggleDisplay('forum_post_options', 1);*/
/* 				phpbb.toggleDisplay('forum_link_options', -1);*/
/* 				phpbb.toggleDisplay('forum_rules_options', 1);*/
/* 				phpbb.toggleDisplay('forum_cat_options', -1);*/
/* 			}*/
/* 			else if (value == {FORUM_LINK})*/
/* 			{*/
/* 				phpbb.toggleDisplay('forum_post_options', -1);*/
/* 				phpbb.toggleDisplay('forum_link_options', 1);*/
/* 				phpbb.toggleDisplay('forum_rules_options', -1);*/
/* 				phpbb.toggleDisplay('forum_cat_options', -1);*/
/* 			}*/
/* 			else if (value == {FORUM_CAT})*/
/* 			{*/
/* 				phpbb.toggleDisplay('forum_post_options', -1);*/
/* 				phpbb.toggleDisplay('forum_link_options', -1);*/
/* 				phpbb.toggleDisplay('forum_rules_options', 1);*/
/* 				phpbb.toggleDisplay('forum_cat_options', 1);*/
/* 			}*/
/* 		}*/
/* */
/* 		/***/
/* 		* Init the wanted display functionality if javascript is enabled.*/
/* 		* If javascript is not available, the user is still able to properly administer.*/
/* 		*//* */
/* 		onload = function()*/
/* 		{*/
/* 			<!-- IF not S_ADD_ACTION and S_FORUM_ORIG_POST -->*/
/* 				<!-- IF S_FORUM_POST -->*/
/* 					phpbb.toggleDisplay('type_actions', -1);*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF not S_ADD_ACTION and S_FORUM_ORIG_CAT and S_HAS_SUBFORUMS -->*/
/* 				<!-- IF S_FORUM_CAT -->*/
/* 					phpbb.toggleDisplay('cat_to_link_actions', -1);*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF not S_FORUM_POST -->*/
/* 				phpbb.toggleDisplay('forum_post_options', -1);*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF not S_FORUM_CAT -->*/
/* 				phpbb.toggleDisplay('forum_cat_options', -1);*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF not S_FORUM_LINK -->*/
/* 				phpbb.toggleDisplay('forum_link_options', -1);*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF S_FORUM_LINK -->*/
/* 			phpbb.toggleDisplay('forum_rules_options', -1);*/
/* 			<!-- ENDIF -->*/
/* 		}*/
/* */
/* 	// ]]>*/
/* 	</script>*/
/* */
/* 	<a href="{U_BACK}" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a>*/
/* */
/* 	<h1>{L_TITLE} <!-- IF FORUM_NAME -->:: {FORUM_NAME}<!-- ENDIF --></h1>*/
/* */
/* 	<p>{L_FORUM_EDIT_EXPLAIN}</p>*/
/* */
/* 	<!-- IF S_ERROR -->*/
/* 		<div class="errorbox">*/
/* 			<h3>{L_WARNING}</h3>*/
/* 			<p>{ERROR_MSG}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<form id="forumedit" method="post" action="{U_EDIT_ACTION}">*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_FORUM_SETTINGS}</legend>*/
/* 	<!-- EVENT acp_forums_main_settings_prepend -->*/
/* 	<dl>*/
/* 		<dt><label for="forum_type">{L_FORUM_TYPE}{L_COLON}</label></dt>*/
/* 		<dd><select id="forum_type" name="forum_type" onchange="display_options(this.options[this.selectedIndex].value);">{S_FORUM_TYPE_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<!-- IF not S_ADD_ACTION and S_FORUM_ORIG_POST -->*/
/* 	<div id="type_actions">*/
/* 		<dl>*/
/* 			<dt><label for="type_action">{L_DECIDE_MOVE_DELETE_CONTENT}{L_COLON}</label></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="type_action" value="delete"<!-- IF not S_MOVE_FORUM_OPTIONS --> checked="checked" id="type_action"<!-- ENDIF --> /> {L_DELETE_ALL_POSTS}</label></dd>*/
/* 			<!-- IF S_MOVE_FORUM_OPTIONS --><dd><label><input type="radio" class="radio" name="type_action" id="type_action" value="move" checked="checked" /> {L_MOVE_POSTS_TO}</label> <select name="to_forum_id">{S_MOVE_FORUM_OPTIONS}</select></dd><!-- ENDIF -->*/
/* 		</dl>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF not S_ADD_ACTION and S_FORUM_ORIG_CAT and S_HAS_SUBFORUMS -->*/
/* 	<div id="cat_to_link_actions">*/
/* 		<dl>*/
/* 			<dt><label for="action_subforums">{L_DECIDE_MOVE_DELETE_SUBFORUMS}{L_COLON}</label></dt>*/
/* 			<!-- IF S_FORUMS_LIST -->*/
/* 				<dd><label><input type="radio" class="radio" id="action_subforums" name="action_subforums" value="move" checked="checked" /> {L_MOVE_SUBFORUMS_TO}</label> <select name="subforums_to_id">{S_FORUMS_LIST}</select></dd>*/
/* 			<!-- ELSE -->*/
/* 				<dd><label><input type="radio" class="radio" id="action_subforums" name="action_subforums" value="delete" checked="checked" /> {L_DELETE_SUBFORUMS}</label></dd>*/
/* 			<!-- ENDIF -->*/
/* 		</dl>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* 	<dl>*/
/* 		<dt><label for="parent">{L_FORUM_PARENT}{L_COLON}</label></dt>*/
/* 		<dd><select id="parent" name="forum_parent_id"><option value="0"<!-- IF not S_FORUM_PARENT_ID --> selected="selected"<!-- ENDIF -->>{L_NO_PARENT}</option>{S_PARENT_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<!-- IF S_CAN_COPY_PERMISSIONS -->*/
/* 		<dl>*/
/* 			<dt><label for="forum_perm_from">{L_COPY_PERMISSIONS}{L_COLON}</label><br /><span>{L_COPY_PERMISSIONS_EXPLAIN}</span></dt>*/
/* 			<dd><select id="forum_perm_from" name="forum_perm_from"><option value="0">{L_NO_PERMISSIONS}</option>{S_FORUM_OPTIONS}</select></dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<dl>*/
/* 		<dt><label for="forum_name">{L_FORUM_NAME}{L_COLON}</label></dt>*/
/* 		<dd><input class="text medium" type="text" id="forum_name" name="forum_name" value="{FORUM_NAME}" maxlength="255" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="forum_desc">{L_FORUM_DESC}{L_COLON}</label><br /><span>{L_FORUM_DESC_EXPLAIN}</span></dt>*/
/* 		<dd><textarea id="forum_desc" name="forum_desc" rows="5" cols="45" data-bbcode="true">{FORUM_DESC}</textarea></dd>*/
/* 		<dd><label><input type="checkbox" class="radio" name="desc_parse_bbcode"<!-- IF S_DESC_BBCODE_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_BBCODE}</label>*/
/* 			<label><input type="checkbox" class="radio" name="desc_parse_smilies"<!-- IF S_DESC_SMILIES_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_SMILIES}</label>*/
/* 			<label><input type="checkbox" class="radio" name="desc_parse_urls"<!-- IF S_DESC_URLS_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_URLS}</label></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="forum_image">{L_FORUM_IMAGE}{L_COLON}</label><br /><span>{L_FORUM_IMAGE_EXPLAIN}</span></dt>*/
/* 		<dd><input class="text medium" type="text" id="forum_image" name="forum_image" value="{FORUM_IMAGE}" maxlength="255" /></dd>*/
/* 		<!-- IF FORUM_IMAGE_SRC -->*/
/* 			<dd><img src="{FORUM_IMAGE_SRC}" alt="{L_FORUM_IMAGE}" /></dd>*/
/* 		<!-- ENDIF -->*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="forum_password">{L_FORUM_PASSWORD}{L_COLON}</label><br /><span>{L_FORUM_PASSWORD_EXPLAIN}</span></dt>*/
/* 		<dd><input type="password" id="forum_password" name="forum_password" value="<!-- IF S_FORUM_PASSWORD_SET -->&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;<!-- ENDIF -->" autocomplete="off" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="forum_password_confirm">{L_FORUM_PASSWORD_CONFIRM}{L_COLON}</label><br /><span>{L_FORUM_PASSWORD_CONFIRM_EXPLAIN}</span></dt>*/
/* 		<dd><input type="password" id="forum_password_confirm" name="forum_password_confirm" value="<!-- IF S_FORUM_PASSWORD_SET -->&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;<!-- ENDIF -->" autocomplete="off" /></dd>*/
/* 	</dl>*/
/* 	<!-- IF S_FORUM_PASSWORD_SET -->*/
/* 	<dl>*/
/* 		<dt><label for="forum_password_unset">{L_FORUM_PASSWORD_UNSET}{L_COLON}</label><br /><span>{L_FORUM_PASSWORD_UNSET_EXPLAIN}</span></dt>*/
/* 		<dd><input id="forum_password_unset" name="forum_password_unset" type="checkbox" /></dd>*/
/* 	</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<dl>*/
/* 		<dt><label for="forum_style">{L_FORUM_STYLE}{L_COLON}</label></dt>*/
/* 		<dd><select id="forum_style" name="forum_style"><option value="0">{L_DEFAULT_STYLE}</option>{S_STYLES_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<!-- EVENT acp_forums_main_settings_append -->*/
/* 	</fieldset>*/
/* */
/* 	<div id="forum_cat_options">*/
/* 		<fieldset>*/
/* 			<legend>{L_GENERAL_FORUM_SETTINGS}</legend>*/
/* 		<dl>*/
/* 			<dt><label for="display_active">{L_DISPLAY_ACTIVE_TOPICS}{L_COLON}</label><br /><span>{L_DISPLAY_ACTIVE_TOPICS_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="display_active" value="1"<!-- IF S_ENABLE_ACTIVE_TOPICS --> id="display_active" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="display_active" value="0"<!-- IF not S_ENABLE_ACTIVE_TOPICS --> id="display_active" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		</fieldset>*/
/* 	</div>*/
/* */
/* 	<div id="forum_post_options">*/
/* 		<fieldset>*/
/* 			<legend>{L_GENERAL_FORUM_SETTINGS}</legend>*/
/* 		<!-- EVENT acp_forums_normal_settings_prepend -->*/
/* 		<dl>*/
/* 			<dt><label for="forum_status">{L_FORUM_STATUS}{L_COLON}</label></dt>*/
/* 			<dd><select id="forum_status" name="forum_status">{S_STATUS_OPTIONS}</select></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="display_subforum_list">{L_LIST_SUBFORUMS}{L_COLON}</label><br /><span>{L_LIST_SUBFORUMS_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="display_subforum_list" value="1"<!-- IF S_DISPLAY_SUBFORUM_LIST --> id="display_subforum_list" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="display_subforum_list" value="0"<!-- IF not S_DISPLAY_SUBFORUM_LIST --> id="display_subforum_list" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="display_on_index">{L_LIST_INDEX}{L_COLON}</label><br /><span>{L_LIST_INDEX_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="display_on_index" value="1"<!-- IF S_DISPLAY_ON_INDEX --> id="display_on_index" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="display_on_index" value="0"<!-- IF not S_DISPLAY_ON_INDEX --> id="display_on_index" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="enable_post_review">{L_ENABLE_POST_REVIEW}{L_COLON}</label><br /><span>{L_ENABLE_POST_REVIEW_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="enable_post_review" value="1"<!-- IF S_ENABLE_POST_REVIEW --> id="enable_post_review" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="enable_post_review" value="0"<!-- IF not S_ENABLE_POST_REVIEW --> id="enable_post_review" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="enable_quick_reply">{L_ENABLE_QUICK_REPLY}{L_COLON}</label><br /><span>{L_ENABLE_QUICK_REPLY_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="enable_quick_reply" value="1"<!-- IF S_ENABLE_QUICK_REPLY --> id="enable_quick_reply" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="enable_quick_reply" value="0"<!-- IF not S_ENABLE_QUICK_REPLY --> id="enable_quick_reply" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="enable_indexing">{L_ENABLE_INDEXING}{L_COLON}</label><br /><span>{L_ENABLE_INDEXING_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="enable_indexing" value="1"<!-- IF S_ENABLE_INDEXING --> id="enable_indexing" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="enable_indexing" value="0"<!-- IF not S_ENABLE_INDEXING --> id="enable_indexing" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="enable_icons">{L_ENABLE_TOPIC_ICONS}{L_COLON}</label></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="enable_icons" value="1"<!-- IF S_TOPIC_ICONS --> id="enable_icons" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="enable_icons" value="0"<!-- IF not S_TOPIC_ICONS --> id="enable_icons" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="display_recent">{L_ENABLE_RECENT}{L_COLON}</label><br /><span>{L_ENABLE_RECENT_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="display_recent" value="1"<!-- IF S_DISPLAY_ACTIVE_TOPICS --> id="display_recent" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="display_recent" value="0"<!-- IF not S_DISPLAY_ACTIVE_TOPICS --> id="display_recent" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="topics_per_page">{L_FORUM_TOPICS_PAGE}{L_COLON}</label><br /><span>{L_FORUM_TOPICS_PAGE_EXPLAIN}</span></dt>*/
/* 			<dd><input type="number" id="topics_per_page" name="topics_per_page" value="{TOPICS_PER_PAGE}" min="0" max="9999" /></dd>*/
/* 		</dl>*/
/* 		<!-- EVENT acp_forums_normal_settings_append -->*/
/* 		</fieldset>*/
/* */
/* 		<fieldset>*/
/* 			<legend>{L_FORUM_PRUNE_SETTINGS}</legend>*/
/* 		<!-- EVENT acp_forums_prune_settings_prepend -->*/
/* 		<dl>*/
/* 			<dt><label for="enable_prune">{L_FORUM_AUTO_PRUNE}{L_COLON}</label><br /><span>{L_FORUM_AUTO_PRUNE_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="enable_prune" value="1"<!-- IF S_PRUNE_ENABLE --> id="enable_prune" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="enable_prune" value="0"<!-- IF not S_PRUNE_ENABLE --> id="enable_prune" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_freq">{L_AUTO_PRUNE_FREQ}{L_COLON}</label><br /><span>{L_AUTO_PRUNE_FREQ_EXPLAIN}</span></dt>*/
/* 			<dd><input type="number" id="prune_freq" name="prune_freq" value="{PRUNE_FREQ}" min="0" max="9999" /> {L_DAYS}</dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_days">{L_AUTO_PRUNE_DAYS}{L_COLON}</label><br /><span>{L_AUTO_PRUNE_DAYS_EXPLAIN}</span></dt>*/
/* 			<dd><input type="number" id="prune_days" name="prune_days" value="{PRUNE_DAYS}" min="0" max="9999" /> {L_DAYS}</dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_viewed">{L_AUTO_PRUNE_VIEWED}{L_COLON}</label><br /><span>{L_AUTO_PRUNE_VIEWED_EXPLAIN}</span></dt>*/
/* 			<dd><input type="number" id="prune_viewed" name="prune_viewed" value="{PRUNE_VIEWED}" min="0" max="9999" /> {L_DAYS}</dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_old_polls">{L_PRUNE_OLD_POLLS}{L_COLON}</label><br /><span>{L_PRUNE_OLD_POLLS_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="prune_old_polls" value="1"<!-- IF S_PRUNE_OLD_POLLS --> id="prune_old_polls" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="prune_old_polls" value="0"<!-- IF not S_PRUNE_OLD_POLLS --> id="prune_old_polls" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_announce">{L_PRUNE_ANNOUNCEMENTS}{L_COLON}</label></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="prune_announce" value="1"<!-- IF S_PRUNE_ANNOUNCE --> id="prune_announce" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="prune_announce" value="0"<!-- IF not S_PRUNE_ANNOUNCE --> id="prune_announce" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_sticky">{L_PRUNE_STICKY}{L_COLON}</label></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="prune_sticky" value="1"<!-- IF S_PRUNE_STICKY --> id="prune_sticky" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="prune_sticky" value="0"<!-- IF not S_PRUNE_STICKY --> id="prune_sticky" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="enable_shadow_prune">{L_FORUM_PRUNE_SHADOW}{L_COLON}</label><br /><span>{L_FORUM_PRUNE_SHADOW_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="enable_shadow_prune" value="1"<!-- IF S_PRUNE_SHADOW_ENABLE --> id="enable_shadow_prune" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="enable_shadow_prune" value="0"<!-- IF not S_PRUNE_SHADOW_ENABLE --> id="enable_shadow_prune" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_shadow_freq">{L_AUTO_PRUNE_SHADOW_FREQ}{L_COLON}</label><br /><span>{L_AUTO_PRUNE_SHADOW_FREQ_EXPLAIN}</span></dt>*/
/* 			<dd><input type="number" id="prune_shadow_freq" name="prune_shadow_freq" value="{PRUNE_SHADOW_FREQ}" min="0" max="9999" /> {L_DAYS}</dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_shadow_days">{L_AUTO_PRUNE_SHADOW_DAYS}{L_COLON}</label><br /><span>{L_AUTO_PRUNE_SHADOW_DAYS_EXPLAIN}</span></dt>*/
/* 			<dd><input type="number" id="prune_shadow_days" name="prune_shadow_days" value="{PRUNE_SHADOW_DAYS}" min="0" max="9999" /> {L_DAYS}</dd>*/
/* 		</dl>*/
/* 		<!-- EVENT acp_forums_prune_settings_append -->*/
/* 		</fieldset>*/
/* 	</div>*/
/* */
/* 	<div id="forum_link_options">*/
/* 		<fieldset>*/
/* 			<legend>{L_GENERAL_FORUM_SETTINGS}</legend>*/
/* 		<dl>*/
/* 			<dt><label for="link_display_on_index">{L_LIST_INDEX}{L_COLON}</label><br /><span>{L_LIST_INDEX_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="link_display_on_index" value="1"<!-- IF S_DISPLAY_ON_INDEX --> id="link_display_on_index" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="link_display_on_index" value="0"<!-- IF not S_DISPLAY_ON_INDEX --> id="link_display_on_index" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="forum_link">{L_FORUM_LINK}{L_COLON}</label><br /><span>{L_FORUM_LINK_EXPLAIN}</span></dt>*/
/* 			<dd><input class="text medium" type="text" id="forum_link" name="forum_link" value="{FORUM_DATA_LINK}" maxlength="255" /></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="forum_link_track">{L_FORUM_LINK_TRACK}{L_COLON}</label><br /><span>{L_FORUM_LINK_TRACK_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="forum_link_track" value="1"<!-- IF S_FORUM_LINK_TRACK --> id="forum_link_track" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="forum_link_track" value="0"<!-- IF not S_FORUM_LINK_TRACK --> id="forum_link_track" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		</fieldset>*/
/* 	</div>*/
/* */
/* 	<div id="forum_rules_options">*/
/* 		<fieldset>*/
/* 			<legend>{L_FORUM_RULES}</legend>*/
/* 		<!-- EVENT acp_forums_rules_settings_prepend -->*/
/* 		<dl>*/
/* 			<dt><label for="forum_rules_link">{L_FORUM_RULES_LINK}{L_COLON}</label><br /><span>{L_FORUM_RULES_LINK_EXPLAIN}</span></dt>*/
/* 			<dd><input class="text medium" type="text" id="forum_rules_link" name="forum_rules_link" value="{FORUM_RULES_LINK}" maxlength="255" /></dd>*/
/* 		</dl>*/
/* 	<!-- IF FORUM_RULES_PREVIEW -->*/
/* 		<dl>*/
/* 			<dt><label>{L_FORUM_RULES_PREVIEW}{L_COLON}</label></dt>*/
/* 			<dd>{FORUM_RULES_PREVIEW}</dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 		<dl>*/
/* 			<dt><label for="forum_rules">{L_FORUM_RULES}{L_COLON}</label><br /><span>{L_FORUM_RULES_EXPLAIN}</span></dt>*/
/* 			<dd><textarea id="forum_rules" name="forum_rules" rows="4" cols="70" data-bbcode="true">{FORUM_RULES_PLAIN}</textarea></dd>*/
/* 			<dd><label><input type="checkbox" class="radio" name="rules_parse_bbcode"<!-- IF S_BBCODE_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_BBCODE}</label>*/
/* 				<label><input type="checkbox" class="radio" name="rules_parse_smilies"<!-- IF S_SMILIES_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_SMILIES}</label>*/
/* 				<label><input type="checkbox" class="radio" name="rules_parse_urls"<!-- IF S_URLS_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_URLS}</label></dd>*/
/* 		</dl>*/
/* 		<!-- EVENT acp_forums_rules_settings_append -->*/
/* 		</fieldset>*/
/* 	</div>*/
/* 	*/
/* 	<!-- EVENT acp_forums_custom_settings -->*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		<legend>{L_SUBMIT}</legend>*/
/* 		<input class="button1" type="submit" id="submit" name="update" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSEIF S_DELETE_FORUM -->*/
/* */
/* 	<a href="{U_BACK}" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a>*/
/* */
/* 	<h1>{L_FORUM_DELETE}</h1>*/
/* */
/* 	<p>{L_FORUM_DELETE_EXPLAIN}</p>*/
/* */
/* 	<!-- IF S_ERROR -->*/
/* 		<div class="errorbox">*/
/* 			<h3>{L_WARNING}</h3>*/
/* 			<p>{ERROR_MSG}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<form id="acp_forum" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_FORUM_DELETE}</legend>*/
/* 	<dl>*/
/* 		<dt><label>{L_FORUM_NAME}{L_COLON}</label></dt>*/
/* 		<dd><strong>{FORUM_NAME}</strong></dd>*/
/* 	</dl>*/
/* 	<!-- IF S_FORUM_POST -->*/
/* 		<dl>*/
/* 			<dt><label for="delete_action">{L_ACTION}{L_COLON}</label></dt>*/
/* 			<dd><label><input type="radio" class="radio" id="delete_action" name="action_posts" value="delete" checked="checked" /> {L_DELETE_ALL_POSTS}</label></dd>*/
/* 			<!-- IF S_MOVE_FORUM_OPTIONS -->*/
/* 				<dd><label><input type="radio" class="radio" name="action_posts" value="move" /> {L_MOVE_POSTS_TO}</label> <select name="posts_to_id">{S_MOVE_FORUM_OPTIONS}</select></dd>*/
/* 			<!-- ENDIF -->*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_HAS_SUBFORUMS -->*/
/* 		<dl>*/
/* 			<dt><label for="sub_delete_action">{L_ACTION}{L_COLON}</label></dt>*/
/* 			<dd><label><input type="radio" class="radio" id="sub_delete_action" name="action_subforums" value="delete" checked="checked" /> {L_DELETE_SUBFORUMS}</label></dd>*/
/* 			<!-- IF S_FORUMS_LIST -->*/
/* 				<dd><label><input type="radio" class="radio" name="action_subforums" value="move" /> {L_MOVE_SUBFORUMS_TO}</label> <select name="subforums_to_id">{S_FORUMS_LIST}</select></dd>*/
/* 			<!-- ENDIF -->*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<p class="quick">*/
/* 		<input class="button1" type="submit" name="update" value="{L_SUBMIT}" />*/
/* 	</p>*/
/* 	{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSEIF S_CONTINUE_SYNC -->*/
/* */
/* 	<script type="text/javascript">*/
/* 	// <![CDATA[*/
/* 		var close_waitscreen = 0;*/
/* 		// no scrollbars...*/
/* 		popup('{UA_PROGRESS_BAR}', 400, 240, '_sync');*/
/* 	// ]]>*/
/* 	</script>*/
/* */
/* 	<h1>{L_FORUM_ADMIN}</h1>*/
/* */
/* 	<p>{L_FORUM_ADMIN_EXPLAIN}</p>*/
/* */
/* 	<p>{L_PROGRESS_EXPLAIN}</p>*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<script type="text/javascript">*/
/* 	// <![CDATA[*/
/* 		/***/
/* 		* Popup search progress bar*/
/* 		*//* */
/* 		function popup_progress_bar()*/
/* 		{*/
/* 			var close_waitscreen = 0;*/
/* 			// no scrollbars...*/
/* 			popup('{UA_PROGRESS_BAR}', 400, 240, '_sync');*/
/* 		}*/
/* 	// ]]>*/
/* 	</script>*/
/* */
/* 	<h1>{L_FORUM_ADMIN}</h1>*/
/* */
/* 	<p>{L_FORUM_ADMIN_EXPLAIN}</p>*/
/* */
/* 	<!-- IF ERROR_MSG -->*/
/* 		<div class="errorbox">*/
/* 			<h3>{L_WARNING}</h3>*/
/* 			<p>{ERROR_MSG}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_RESYNCED -->*/
/* 		<script type="text/javascript">*/
/* 		// <![CDATA[*/
/* 			var close_waitscreen = 1;*/
/* 		// ]]>*/
/* 		</script>*/
/* */
/* 		<div class="successbox">*/
/* 			<h3>{L_NOTIFY}</h3>*/
/* 			<p>{L_FORUM_RESYNCED}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<p><strong>{NAVIGATION}<!-- IF S_NO_FORUMS --> [<a href="{U_EDIT}">{L_EDIT}</a> | <a href="{U_DELETE}">{L_DELETE}</a><!-- IF not S_LINK --> | <a href="{U_SYNC}">{L_RESYNC}</a><!-- ENDIF -->]<!-- ENDIF --></strong></p>*/
/* */
/* 	<!-- IF .forums -->*/
/* 		<table class="table1 forums">*/
/* 			<col class="row1" /><col class="row1" /><col class="row2" />*/
/* 		<tbody>*/
/* 		<!-- BEGIN forums -->*/
/* 			<tr>*/
/* 				<td class="folder">{forums.FOLDER_IMAGE}</td>*/
/* 				<td class="forum-desc">*/
/* 					<!-- IF forums.FORUM_IMAGE --><div style="float: {S_CONTENT_FLOW_BEGIN}; margin-right: 5px;">{forums.FORUM_IMAGE}</div><!-- ENDIF -->*/
/* 					<strong><!-- IF forums.S_FORUM_LINK -->{forums.FORUM_NAME}<!-- ELSE --><a href="{forums.U_FORUM}">{forums.FORUM_NAME}</a><!-- ENDIF --></strong>*/
/* 					<!-- IF forums.FORUM_DESCRIPTION --><br /><span>{forums.FORUM_DESCRIPTION}</span><!-- ENDIF -->*/
/* 					<!-- IF forums.S_FORUM_POST --><br /><br /><span>{L_TOPICS}{L_COLON} <strong>{forums.FORUM_TOPICS}</strong> / {L_POSTS}{L_COLON} <strong>{forums.FORUM_POSTS}</strong></span><!-- ENDIF -->*/
/* 				</td>*/
/* 				<td class="actions">*/
/* 					<span class="up-disabled" style="display:none;">{ICON_MOVE_UP_DISABLED}</span>*/
/* 					<span class="up"><a href="{forums.U_MOVE_UP}" data-ajax="row_up">{ICON_MOVE_UP}</a></span>*/
/* 					<span class="down-disabled" style="display:none;">{ICON_MOVE_DOWN_DISABLED}</span>*/
/* 					<span class="down"><a href="{forums.U_MOVE_DOWN}" data-ajax="row_down">{ICON_MOVE_DOWN}</a></span>*/
/* 					<a href="{forums.U_EDIT}">{ICON_EDIT}</a>*/
/* 					<!-- IF not forums.S_FORUM_LINK -->*/
/* 						<a href="{forums.U_SYNC}" onclick="popup_progress_bar();">{ICON_SYNC}</a>*/
/* 					<!-- ELSE -->*/
/* 						{ICON_SYNC_DISABLED}*/
/* 					<!-- ENDIF -->*/
/* 					<a href="{forums.U_DELETE}">{ICON_DELETE}</a>*/
/* 				</td>*/
/* 			</tr>*/
/* 		<!-- END forums -->*/
/* 		</tbody>*/
/* 		</table>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<form id="fselect" method="post" action="{U_SEL_ACTION}">*/
/* */
/* 	<fieldset class="quick">*/
/* 		{L_SELECT_FORUM}{L_COLON} <select name="parent_id" onchange="if(this.options[this.selectedIndex].value != -1){ this.form.submit(); }">{FORUM_BOX}</select>*/
/* */
/* 		<!-- EVENT acp_forums_quick_select_button_prepend --><input class="button2" type="submit" value="{L_GO}" /><!-- EVENT acp_forums_quick_select_button_append -->*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* 	<form id="forums" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset class="quick">*/
/* 		<input type="hidden" name="action" value="add" />*/
/* */
/* 		<input type="text" name="forum_name" value="" maxlength="255" />*/
/* 		<input class="button2" name="addforum" type="submit" value="{L_CREATE_FORUM}" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
