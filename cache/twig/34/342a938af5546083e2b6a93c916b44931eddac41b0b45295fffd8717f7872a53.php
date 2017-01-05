<?php

/* ucp_pm_options.html */
class __TwigTemplate_d3ef7ed8fd9a6396b3f6ff3eca52823d9596a7e70e8d159c852c884ff12e2fa1 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_pm_options.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

<form id=\"ucp\" method=\"post\" action=\"";
        // line 5
        if (isset($context["S_UCP_ACTION"])) { $_S_UCP_ACTION_ = $context["S_UCP_ACTION"]; } else { $_S_UCP_ACTION_ = null; }
        echo $_S_UCP_ACTION_;
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">

\t";
        // line 10
        if (isset($context["ERROR_MESSAGE"])) { $_ERROR_MESSAGE_ = $context["ERROR_MESSAGE"]; } else { $_ERROR_MESSAGE_ = null; }
        if ($_ERROR_MESSAGE_) {
            echo "<p class=\"error\">";
            if (isset($context["ERROR_MESSAGE"])) { $_ERROR_MESSAGE_ = $context["ERROR_MESSAGE"]; } else { $_ERROR_MESSAGE_ = null; }
            echo $_ERROR_MESSAGE_;
            echo "</p>";
        }
        // line 11
        echo "\t";
        if (isset($context["NOTIFICATION_MESSAGE"])) { $_NOTIFICATION_MESSAGE_ = $context["NOTIFICATION_MESSAGE"]; } else { $_NOTIFICATION_MESSAGE_ = null; }
        if ($_NOTIFICATION_MESSAGE_) {
            echo "<p class=\"error\">";
            if (isset($context["NOTIFICATION_MESSAGE"])) { $_NOTIFICATION_MESSAGE_ = $context["NOTIFICATION_MESSAGE"]; } else { $_NOTIFICATION_MESSAGE_ = null; }
            echo $_NOTIFICATION_MESSAGE_;
            echo "</p>";
        }
        // line 12
        echo "
\t<h3>";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("DEFINED_RULES");
        echo "</h3>

\t<ol class=\"def-rules\">
\t";
        // line 16
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "rule", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
            // line 17
            echo "\t\t<li><div class=\"right-box\"><input type=\"submit\" name=\"delete_rule[";
            if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
            echo $this->getAttribute($_rule_, "RULE_ID", array());
            echo "]\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("DELETE_RULE");
            echo "\" class=\"button2\" /></div><strong>";
            echo $this->env->getExtension('phpbb')->lang("IF");
            echo "</strong> ";
            if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
            echo $this->getAttribute($_rule_, "CHECK", array());
            echo " <em>";
            if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
            echo $this->getAttribute($_rule_, "RULE", array());
            echo "</em> ";
            if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
            if ($this->getAttribute($_rule_, "STRING", array())) {
                echo "<strong>";
                if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
                echo $this->getAttribute($_rule_, "STRING", array());
                echo "</strong> | ";
            }
            if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
            echo $this->getAttribute($_rule_, "ACTION", array());
            if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
            if ($this->getAttribute($_rule_, "FOLDER", array())) {
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
                echo $this->getAttribute($_rule_, "FOLDER", array());
            }
            echo "<div style=\"clear: both;\"></div></li>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "\t\t<li><strong>";
            echo $this->env->getExtension('phpbb')->lang("NO_RULES_DEFINED");
            echo "</strong></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</ol>

\t<h3>";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("ADD_NEW_RULE");
        echo "</h3>

\t<fieldset class=\"fields2\">

\t";
        // line 27
        if (isset($context["S_CHECK_DEFINED"])) { $_S_CHECK_DEFINED_ = $context["S_CHECK_DEFINED"]; } else { $_S_CHECK_DEFINED_ = null; }
        if ($_S_CHECK_DEFINED_) {
            // line 28
            echo "\t\t<dl>
\t\t\t<dt><label";
            // line 29
            if (isset($context["S_CHECK_SELECT"])) { $_S_CHECK_SELECT_ = $context["S_CHECK_SELECT"]; } else { $_S_CHECK_SELECT_ = null; }
            if ($_S_CHECK_SELECT_) {
                echo " for=\"check_option\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("IF");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd>
\t\t\t\t";
            // line 31
            if (isset($context["S_CHECK_SELECT"])) { $_S_CHECK_SELECT_ = $context["S_CHECK_SELECT"]; } else { $_S_CHECK_SELECT_ = null; }
            if ($_S_CHECK_SELECT_) {
                echo "<select name=\"check_option\" id=\"check_option\">";
                if (isset($context["S_CHECK_OPTIONS"])) { $_S_CHECK_OPTIONS_ = $context["S_CHECK_OPTIONS"]; } else { $_S_CHECK_OPTIONS_ = null; }
                echo $_S_CHECK_OPTIONS_;
                echo "</select> <input type=\"submit\" name=\"next\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("NEXT_STEP");
                echo "\" class=\"button2\" />";
            } else {
                if (isset($context["CHECK_CURRENT"])) { $_CHECK_CURRENT_ = $context["CHECK_CURRENT"]; } else { $_CHECK_CURRENT_ = null; }
                echo $_CHECK_CURRENT_;
                echo "<input type=\"hidden\" name=\"check_option\" value=\"";
                if (isset($context["CHECK_OPTION"])) { $_CHECK_OPTION_ = $context["CHECK_OPTION"]; } else { $_CHECK_OPTION_ = null; }
                echo $_CHECK_OPTION_;
                echo "\" />";
            }
            // line 32
            echo "\t\t\t</dd>
\t\t</dl>
\t";
        }
        // line 35
        echo "
\t";
        // line 36
        if (isset($context["S_RULE_DEFINED"])) { $_S_RULE_DEFINED_ = $context["S_RULE_DEFINED"]; } else { $_S_RULE_DEFINED_ = null; }
        if ($_S_RULE_DEFINED_) {
            // line 37
            echo "\t\t<dl>
\t\t\t<dt>";
            // line 38
            if (isset($context["S_RULE_SELECT"])) { $_S_RULE_SELECT_ = $context["S_RULE_SELECT"]; } else { $_S_RULE_SELECT_ = null; }
            if ($_S_RULE_SELECT_) {
                echo "<input type=\"submit\" name=\"back[rule]\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("PREVIOUS_STEP");
                echo "\" class=\"button2\" />";
            } else {
                echo "<label>&nbsp;</label>";
            }
            echo "</dt>
\t\t\t<dd>";
            // line 39
            if (isset($context["S_RULE_SELECT"])) { $_S_RULE_SELECT_ = $context["S_RULE_SELECT"]; } else { $_S_RULE_SELECT_ = null; }
            if ($_S_RULE_SELECT_) {
                echo "<select name=\"rule_option\" id=\"rule_option\">";
                if (isset($context["S_RULE_OPTIONS"])) { $_S_RULE_OPTIONS_ = $context["S_RULE_OPTIONS"]; } else { $_S_RULE_OPTIONS_ = null; }
                echo $_S_RULE_OPTIONS_;
                echo "</select> <input type=\"submit\" name=\"next\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("NEXT_STEP");
                echo "\" class=\"button2\" />";
            } else {
                echo "<em>";
                if (isset($context["RULE_CURRENT"])) { $_RULE_CURRENT_ = $context["RULE_CURRENT"]; } else { $_RULE_CURRENT_ = null; }
                echo $_RULE_CURRENT_;
                echo "</em><input type=\"hidden\" name=\"rule_option\" value=\"";
                if (isset($context["RULE_OPTION"])) { $_RULE_OPTION_ = $context["RULE_OPTION"]; } else { $_RULE_OPTION_ = null; }
                echo $_RULE_OPTION_;
                echo "\" />";
            }
            echo "</dd>
\t\t</dl>
\t";
        }
        // line 42
        echo "
\t";
        // line 43
        if (isset($context["S_COND_DEFINED"])) { $_S_COND_DEFINED_ = $context["S_COND_DEFINED"]; } else { $_S_COND_DEFINED_ = null; }
        if ($_S_COND_DEFINED_) {
            // line 44
            echo "\t\t";
            if (isset($context["S_COND_SELECT"])) { $_S_COND_SELECT_ = $context["S_COND_SELECT"]; } else { $_S_COND_SELECT_ = null; }
            if (isset($context["COND_CURRENT"])) { $_COND_CURRENT_ = $context["COND_CURRENT"]; } else { $_COND_CURRENT_ = null; }
            if (($_S_COND_SELECT_ || $_COND_CURRENT_)) {
                // line 45
                echo "\t\t\t<dl>
\t\t\t\t<dt>";
                // line 46
                if (isset($context["S_COND_SELECT"])) { $_S_COND_SELECT_ = $context["S_COND_SELECT"]; } else { $_S_COND_SELECT_ = null; }
                if ($_S_COND_SELECT_) {
                    echo "<input type=\"submit\" name=\"back[cond]\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("PREVIOUS_STEP");
                    echo "\" class=\"button2\" />";
                } else {
                    echo "<label>&nbsp;</label>";
                }
                echo "</dt>
\t\t\t\t<dd>
\t\t\t\t\t";
                // line 48
                if (isset($context["S_COND_SELECT"])) { $_S_COND_SELECT_ = $context["S_COND_SELECT"]; } else { $_S_COND_SELECT_ = null; }
                if ($_S_COND_SELECT_) {
                    // line 49
                    echo "\t\t\t\t\t\t";
                    if (isset($context["S_TEXT_CONDITION"])) { $_S_TEXT_CONDITION_ = $context["S_TEXT_CONDITION"]; } else { $_S_TEXT_CONDITION_ = null; }
                    if (isset($context["S_USER_CONDITION"])) { $_S_USER_CONDITION_ = $context["S_USER_CONDITION"]; } else { $_S_USER_CONDITION_ = null; }
                    if (isset($context["S_GROUP_CONDITION"])) { $_S_GROUP_CONDITION_ = $context["S_GROUP_CONDITION"]; } else { $_S_GROUP_CONDITION_ = null; }
                    if ($_S_TEXT_CONDITION_) {
                        // line 50
                        echo "\t\t\t\t\t\t\t<input type=\"text\" name=\"rule_string\" value=\"";
                        if (isset($context["CURRENT_STRING"])) { $_CURRENT_STRING_ = $context["CURRENT_STRING"]; } else { $_CURRENT_STRING_ = null; }
                        echo $_CURRENT_STRING_;
                        echo "\" class=\"inputbox medium\" maxlength=\"250\" />
\t\t\t\t\t\t";
                    } elseif ($_S_USER_CONDITION_) {
                        // line 52
                        echo "\t\t\t\t\t\t\t<input type=\"text\" name=\"rule_string\" value=\"";
                        if (isset($context["CURRENT_STRING"])) { $_CURRENT_STRING_ = $context["CURRENT_STRING"]; } else { $_CURRENT_STRING_ = null; }
                        echo $_CURRENT_STRING_;
                        echo "\" class=\"inputbox tiny\" />&nbsp;<span>[ <a href=\"";
                        if (isset($context["U_FIND_USERNAME"])) { $_U_FIND_USERNAME_ = $context["U_FIND_USERNAME"]; } else { $_U_FIND_USERNAME_ = null; }
                        echo $_U_FIND_USERNAME_;
                        echo "\" onclick=\"find_username(this.href); return false;\">";
                        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                        echo "</a> ]</span>
\t\t\t\t\t\t";
                    } elseif ($_S_GROUP_CONDITION_) {
                        // line 54
                        echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rule_string\" value=\"";
                        if (isset($context["CURRENT_STRING"])) { $_CURRENT_STRING_ = $context["CURRENT_STRING"]; } else { $_CURRENT_STRING_ = null; }
                        echo $_CURRENT_STRING_;
                        echo "\" />";
                        if (isset($context["S_GROUP_OPTIONS"])) { $_S_GROUP_OPTIONS_ = $context["S_GROUP_OPTIONS"]; } else { $_S_GROUP_OPTIONS_ = null; }
                        if ($_S_GROUP_OPTIONS_) {
                            echo "<select name=\"rule_group_id\">";
                            if (isset($context["S_GROUP_OPTIONS"])) { $_S_GROUP_OPTIONS_ = $context["S_GROUP_OPTIONS"]; } else { $_S_GROUP_OPTIONS_ = null; }
                            echo $_S_GROUP_OPTIONS_;
                            echo "</select>";
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_GROUPS");
                        }
                        // line 55
                        echo "\t\t\t\t\t\t";
                    }
                    // line 56
                    echo "\t\t\t\t\t\t<input type=\"submit\" name=\"next\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("NEXT_STEP");
                    echo "\" class=\"button2\" />
\t\t\t\t\t";
                } else {
                    // line 58
                    echo "\t\t\t\t\t\t<strong>";
                    if (isset($context["COND_CURRENT"])) { $_COND_CURRENT_ = $context["COND_CURRENT"]; } else { $_COND_CURRENT_ = null; }
                    echo $_COND_CURRENT_;
                    echo "</strong><input type=\"hidden\" name=\"rule_string\" value=\"";
                    if (isset($context["CURRENT_STRING"])) { $_CURRENT_STRING_ = $context["CURRENT_STRING"]; } else { $_CURRENT_STRING_ = null; }
                    echo $_CURRENT_STRING_;
                    echo "\" /><input type=\"hidden\" name=\"rule_user_id\" value=\"";
                    if (isset($context["CURRENT_USER_ID"])) { $_CURRENT_USER_ID_ = $context["CURRENT_USER_ID"]; } else { $_CURRENT_USER_ID_ = null; }
                    echo $_CURRENT_USER_ID_;
                    echo "\" /><input type=\"hidden\" name=\"rule_group_id\" value=\"";
                    if (isset($context["CURRENT_GROUP_ID"])) { $_CURRENT_GROUP_ID_ = $context["CURRENT_GROUP_ID"]; } else { $_CURRENT_GROUP_ID_ = null; }
                    echo $_CURRENT_GROUP_ID_;
                    echo "\" />
\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t</dd>
\t\t\t</dl>
\t\t";
            }
            // line 63
            echo "\t\t<input type=\"hidden\" name=\"cond_option\" value=\"";
            if (isset($context["COND_OPTION"])) { $_COND_OPTION_ = $context["COND_OPTION"]; } else { $_COND_OPTION_ = null; }
            echo $_COND_OPTION_;
            echo "\" />
\t";
        }
        // line 65
        echo "

\t";
        // line 67
        if (isset($context["NONE_CONDITION"])) { $_NONE_CONDITION_ = $context["NONE_CONDITION"]; } else { $_NONE_CONDITION_ = null; }
        if ($_NONE_CONDITION_) {
            echo "<input type=\"hidden\" name=\"cond_option\" value=\"none\" />";
        }
        // line 68
        echo "
\t";
        // line 69
        if (isset($context["S_ACTION_DEFINED"])) { $_S_ACTION_DEFINED_ = $context["S_ACTION_DEFINED"]; } else { $_S_ACTION_DEFINED_ = null; }
        if ($_S_ACTION_DEFINED_) {
            // line 70
            echo "\t\t<dl>
\t\t\t<dt>";
            // line 71
            if (isset($context["S_ACTION_SELECT"])) { $_S_ACTION_SELECT_ = $context["S_ACTION_SELECT"]; } else { $_S_ACTION_SELECT_ = null; }
            if ($_S_ACTION_SELECT_) {
                echo "<input type=\"submit\" name=\"back[action]\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("PREVIOUS_STEP");
                echo "\" class=\"button2\" />";
            } else {
                echo "<label>&nbsp;</label>";
            }
            echo "</dt>
\t\t\t<dd>";
            // line 72
            if (isset($context["S_ACTION_SELECT"])) { $_S_ACTION_SELECT_ = $context["S_ACTION_SELECT"]; } else { $_S_ACTION_SELECT_ = null; }
            if ($_S_ACTION_SELECT_) {
                echo " <select name=\"action_option\">";
                if (isset($context["S_ACTION_OPTIONS"])) { $_S_ACTION_OPTIONS_ = $context["S_ACTION_OPTIONS"]; } else { $_S_ACTION_OPTIONS_ = null; }
                echo $_S_ACTION_OPTIONS_;
                echo "</select> <input type=\"submit\" name=\"add_rule\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("ADD_RULE");
                echo "\" class=\"button1\" />";
            } else {
                if (isset($context["ACTION_CURRENT"])) { $_ACTION_CURRENT_ = $context["ACTION_CURRENT"]; } else { $_ACTION_CURRENT_ = null; }
                echo $_ACTION_CURRENT_;
                echo "<input type=\"hidden\" name=\"action_option\" value=\"";
                if (isset($context["ACTION_OPTION"])) { $_ACTION_OPTION_ = $context["ACTION_OPTION"]; } else { $_ACTION_OPTION_ = null; }
                echo $_ACTION_OPTION_;
                echo "\" />";
            }
            echo "</dd>
\t\t</dl>
\t";
        }
        // line 75
        echo "
\t</fieldset>

\t<h3>";
        // line 78
        echo $this->env->getExtension('phpbb')->lang("FOLDER_OPTIONS");
        echo "</h3>

\t<fieldset class=\"fields2\">

\t";
        // line 82
        if (isset($context["S_MAX_FOLDER_ZERO"])) { $_S_MAX_FOLDER_ZERO_ = $context["S_MAX_FOLDER_ZERO"]; } else { $_S_MAX_FOLDER_ZERO_ = null; }
        if ( !$_S_MAX_FOLDER_ZERO_) {
            // line 83
            echo "\t<dl>
\t\t<dt><label for=\"foldername\">";
            // line 84
            echo $this->env->getExtension('phpbb')->lang("ADD_FOLDER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>";
            // line 85
            if (isset($context["S_MAX_FOLDER_REACHED"])) { $_S_MAX_FOLDER_REACHED_ = $context["S_MAX_FOLDER_REACHED"]; } else { $_S_MAX_FOLDER_REACHED_ = null; }
            if ($_S_MAX_FOLDER_REACHED_) {
                echo $this->env->getExtension('phpbb')->lang("MAX_FOLDER_REACHED");
            } else {
                echo "<input type=\"text\" class=\"inputbox medium\" name=\"foldername\" id=\"foldername\" size=\"30\" maxlength=\"30\" /> <input class=\"button2\" type=\"submit\" name=\"addfolder\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("ADD");
                echo "\" />";
            }
            echo "</dd>
\t</dl>
\t";
            // line 87
            if (isset($context["S_FOLDER_OPTIONS"])) { $_S_FOLDER_OPTIONS_ = $context["S_FOLDER_OPTIONS"]; } else { $_S_FOLDER_OPTIONS_ = null; }
            if ($_S_FOLDER_OPTIONS_) {
                echo "<hr class=\"dashed\" />";
            }
            // line 88
            echo "\t";
        }
        // line 89
        echo "


\t";
        // line 92
        if (isset($context["S_FOLDER_OPTIONS"])) { $_S_FOLDER_OPTIONS_ = $context["S_FOLDER_OPTIONS"]; } else { $_S_FOLDER_OPTIONS_ = null; }
        if ($_S_FOLDER_OPTIONS_) {
            // line 93
            echo "\t\t<dl>
\t\t\t<dt><label for=\"rename_folder_id\">";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("RENAME_FOLDER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select name=\"rename_folder_id\" id=\"rename_folder_id\">";
            // line 95
            if (isset($context["S_FOLDER_OPTIONS"])) { $_S_FOLDER_OPTIONS_ = $context["S_FOLDER_OPTIONS"]; } else { $_S_FOLDER_OPTIONS_ = null; }
            echo $_S_FOLDER_OPTIONS_;
            echo "</select></dd>
\t\t\t<dt><label for=\"new_folder_name\">";
            // line 96
            echo $this->env->getExtension('phpbb')->lang("NEW_FOLDER_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"text\" class=\"inputbox tiny\" name=\"new_folder_name\" id=\"new_folder_name\" maxlength=\"30\" /> <input class=\"button2\" type=\"submit\" name=\"rename_folder\" value=\"";
            // line 97
            echo $this->env->getExtension('phpbb')->lang("RENAME");
            echo "\" /></dd>
\t\t</dl>
\t\t<hr class=\"dashed\" />
\t\t<dl>
\t\t\t<dt><label for=\"remove_folder_id\">";
            // line 101
            echo $this->env->getExtension('phpbb')->lang("REMOVE_FOLDER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select name=\"remove_folder_id\" id=\"remove_folder_id\">";
            // line 102
            if (isset($context["S_FOLDER_OPTIONS"])) { $_S_FOLDER_OPTIONS_ = $context["S_FOLDER_OPTIONS"]; } else { $_S_FOLDER_OPTIONS_ = null; }
            echo $_S_FOLDER_OPTIONS_;
            echo "</select></dd>
\t\t\t<dd style=\"margin-top: 3px;\"><label for=\"remove_action1\"><input type=\"radio\" name=\"remove_action\" id=\"remove_action1\" value=\"1\" checked=\"checked\" /> ";
            // line 103
            echo $this->env->getExtension('phpbb')->lang("MOVE_DELETED_MESSAGES_TO");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label> <select name=\"move_to\">";
            if (isset($context["S_TO_FOLDER_OPTIONS"])) { $_S_TO_FOLDER_OPTIONS_ = $context["S_TO_FOLDER_OPTIONS"]; } else { $_S_TO_FOLDER_OPTIONS_ = null; }
            echo $_S_TO_FOLDER_OPTIONS_;
            echo "</select></dd>
\t\t\t<dd style=\"margin-top: 3px;\"><label for=\"remove_action2\"><input type=\"radio\" name=\"remove_action\" id=\"remove_action2\" value=\"2\" /> ";
            // line 104
            echo $this->env->getExtension('phpbb')->lang("DELETE_MESSAGES_IN_FOLDER");
            echo "</label></dd>
\t\t\t<dd style=\"margin-top: 3px;\"><input class=\"button2\" type=\"submit\" name=\"remove_folder\" value=\"";
            // line 105
            echo $this->env->getExtension('phpbb')->lang("REMOVE");
            echo "\" /></dd>
\t\t</dl>
\t";
        }
        // line 108
        echo "
\t<hr class=\"dashed\" />

\t<dl>
\t\t<dt><label for=\"full_action1\">";
        // line 112
        echo $this->env->getExtension('phpbb')->lang("IF_FOLDER_FULL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd style=\"margin-top: 3px;\"><label for=\"full_action1\"><input type=\"radio\" name=\"full_action\" id=\"full_action1\" value=\"1\"";
        // line 113
        if (isset($context["S_DELETE_CHECKED"])) { $_S_DELETE_CHECKED_ = $context["S_DELETE_CHECKED"]; } else { $_S_DELETE_CHECKED_ = null; }
        echo $_S_DELETE_CHECKED_;
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("DELETE_OLDEST_MESSAGES");
        echo "</label></dd>
\t\t<dd style=\"margin-top: 3px;\"><label for=\"full_action2\"><input type=\"radio\" name=\"full_action\" id=\"full_action2\" value=\"2\"";
        // line 114
        if (isset($context["S_MOVE_CHECKED"])) { $_S_MOVE_CHECKED_ = $context["S_MOVE_CHECKED"]; } else { $_S_MOVE_CHECKED_ = null; }
        echo $_S_MOVE_CHECKED_;
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("MOVE_TO_FOLDER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label> <select name=\"full_move_to\">";
        if (isset($context["S_FULL_FOLDER_OPTIONS"])) { $_S_FULL_FOLDER_OPTIONS_ = $context["S_FULL_FOLDER_OPTIONS"]; } else { $_S_FULL_FOLDER_OPTIONS_ = null; }
        echo $_S_FULL_FOLDER_OPTIONS_;
        echo "</select></dd>
\t\t<dd style=\"margin-top: 3px;\"><label for=\"full_action3\" style=\"white-space:normal;\"><input type=\"radio\" name=\"full_action\" id=\"full_action3\" value=\"3\"";
        // line 115
        if (isset($context["S_HOLD_CHECKED"])) { $_S_HOLD_CHECKED_ = $context["S_HOLD_CHECKED"]; } else { $_S_HOLD_CHECKED_ = null; }
        echo $_S_HOLD_CHECKED_;
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("HOLD_NEW_MESSAGES");
        echo "</label></dd>
\t</dl>


\t<dl>
\t\t<dt><label>";
        // line 120
        echo $this->env->getExtension('phpbb')->lang("DEFAULT_ACTION");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("DEFAULT_ACTION_EXPLAIN");
        echo "</span></dt>
\t\t<dd>";
        // line 121
        if (isset($context["DEFAULT_ACTION"])) { $_DEFAULT_ACTION_ = $context["DEFAULT_ACTION"]; } else { $_DEFAULT_ACTION_ = null; }
        echo $_DEFAULT_ACTION_;
        echo "</dd>
\t\t<dd><input class=\"button2\" type=\"submit\" name=\"fullfolder\" value=\"";
        // line 122
        echo $this->env->getExtension('phpbb')->lang("CHANGE");
        echo "\" /></dd>
\t</dl>
\t</fieldset>

\t</div>
\t";
        // line 127
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</div>
</form>

";
        // line 131
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_options.html", 131)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 131,  536 => 127,  528 => 122,  523 => 121,  516 => 120,  505 => 115,  494 => 114,  487 => 113,  482 => 112,  476 => 108,  470 => 105,  466 => 104,  458 => 103,  453 => 102,  448 => 101,  441 => 97,  436 => 96,  431 => 95,  426 => 94,  423 => 93,  420 => 92,  415 => 89,  412 => 88,  407 => 87,  395 => 85,  390 => 84,  387 => 83,  384 => 82,  377 => 78,  372 => 75,  351 => 72,  340 => 71,  337 => 70,  334 => 69,  331 => 68,  326 => 67,  322 => 65,  315 => 63,  310 => 60,  294 => 58,  288 => 56,  285 => 55,  271 => 54,  259 => 52,  252 => 50,  246 => 49,  243 => 48,  231 => 46,  228 => 45,  223 => 44,  220 => 43,  217 => 42,  195 => 39,  184 => 38,  181 => 37,  178 => 36,  175 => 35,  170 => 32,  153 => 31,  142 => 29,  139 => 28,  136 => 27,  129 => 23,  125 => 21,  116 => 19,  80 => 17,  74 => 16,  68 => 13,  65 => 12,  56 => 11,  48 => 10,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <h2>{L_TITLE}</h2>*/
/* */
/* <form id="ucp" method="post" action="{S_UCP_ACTION}">*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<!-- IF ERROR_MESSAGE --><p class="error">{ERROR_MESSAGE}</p><!-- ENDIF -->*/
/* 	<!-- IF NOTIFICATION_MESSAGE --><p class="error">{NOTIFICATION_MESSAGE}</p><!-- ENDIF -->*/
/* */
/* 	<h3>{L_DEFINED_RULES}</h3>*/
/* */
/* 	<ol class="def-rules">*/
/* 	<!-- BEGIN rule -->*/
/* 		<li><div class="right-box"><input type="submit" name="delete_rule[{rule.RULE_ID}]" value="{L_DELETE_RULE}" class="button2" /></div><strong>{L_IF}</strong> {rule.CHECK} <em>{rule.RULE}</em> <!-- IF rule.STRING --><strong>{rule.STRING}</strong> | <!-- ENDIF -->{rule.ACTION}<!-- IF rule.FOLDER -->{L_COLON} {rule.FOLDER}<!-- ENDIF --><div style="clear: both;"></div></li>*/
/* 	<!-- BEGINELSE -->*/
/* 		<li><strong>{L_NO_RULES_DEFINED}</strong></li>*/
/* 	<!-- END rule -->*/
/* 	</ol>*/
/* */
/* 	<h3>{L_ADD_NEW_RULE}</h3>*/
/* */
/* 	<fieldset class="fields2">*/
/* */
/* 	<!-- IF S_CHECK_DEFINED -->*/
/* 		<dl>*/
/* 			<dt><label<!-- IF S_CHECK_SELECT --> for="check_option"<!-- ENDIF -->>{L_IF}{L_COLON}</label></dt>*/
/* 			<dd>*/
/* 				<!-- IF S_CHECK_SELECT --><select name="check_option" id="check_option">{S_CHECK_OPTIONS}</select> <input type="submit" name="next" value="{L_NEXT_STEP}" class="button2" /><!-- ELSE -->{CHECK_CURRENT}<input type="hidden" name="check_option" value="{CHECK_OPTION}" /><!-- ENDIF -->*/
/* 			</dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_RULE_DEFINED -->*/
/* 		<dl>*/
/* 			<dt><!-- IF S_RULE_SELECT --><input type="submit" name="back[rule]" value="{L_PREVIOUS_STEP}" class="button2" /><!-- ELSE --><label>&nbsp;</label><!-- ENDIF --></dt>*/
/* 			<dd><!-- IF S_RULE_SELECT --><select name="rule_option" id="rule_option">{S_RULE_OPTIONS}</select> <input type="submit" name="next" value="{L_NEXT_STEP}" class="button2" /><!-- ELSE --><em>{RULE_CURRENT}</em><input type="hidden" name="rule_option" value="{RULE_OPTION}" /><!-- ENDIF --></dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_COND_DEFINED -->*/
/* 		<!-- IF S_COND_SELECT or COND_CURRENT -->*/
/* 			<dl>*/
/* 				<dt><!-- IF S_COND_SELECT --><input type="submit" name="back[cond]" value="{L_PREVIOUS_STEP}" class="button2" /><!-- ELSE --><label>&nbsp;</label><!-- ENDIF --></dt>*/
/* 				<dd>*/
/* 					<!-- IF S_COND_SELECT -->*/
/* 						<!-- IF S_TEXT_CONDITION -->*/
/* 							<input type="text" name="rule_string" value="{CURRENT_STRING}" class="inputbox medium" maxlength="250" />*/
/* 						<!-- ELSEIF S_USER_CONDITION -->*/
/* 							<input type="text" name="rule_string" value="{CURRENT_STRING}" class="inputbox tiny" />&nbsp;<span>[ <a href="{U_FIND_USERNAME}" onclick="find_username(this.href); return false;">{L_FIND_USERNAME}</a> ]</span>*/
/* 						<!-- ELSEIF S_GROUP_CONDITION -->*/
/* 							<input type="hidden" name="rule_string" value="{CURRENT_STRING}" /><!-- IF S_GROUP_OPTIONS --><select name="rule_group_id">{S_GROUP_OPTIONS}</select><!-- ELSE -->{L_NO_GROUPS}<!-- ENDIF -->*/
/* 						<!-- ENDIF -->*/
/* 						<input type="submit" name="next" value="{L_NEXT_STEP}" class="button2" />*/
/* 					<!-- ELSE -->*/
/* 						<strong>{COND_CURRENT}</strong><input type="hidden" name="rule_string" value="{CURRENT_STRING}" /><input type="hidden" name="rule_user_id" value="{CURRENT_USER_ID}" /><input type="hidden" name="rule_group_id" value="{CURRENT_GROUP_ID}" />*/
/* 					<!-- ENDIF -->*/
/* 				</dd>*/
/* 			</dl>*/
/* 		<!-- ENDIF -->*/
/* 		<input type="hidden" name="cond_option" value="{COND_OPTION}" />*/
/* 	<!-- ENDIF -->*/
/* */
/* */
/* 	<!-- IF NONE_CONDITION --><input type="hidden" name="cond_option" value="none" /><!-- ENDIF -->*/
/* */
/* 	<!-- IF S_ACTION_DEFINED -->*/
/* 		<dl>*/
/* 			<dt><!-- IF S_ACTION_SELECT --><input type="submit" name="back[action]" value="{L_PREVIOUS_STEP}" class="button2" /><!-- ELSE --><label>&nbsp;</label><!-- ENDIF --></dt>*/
/* 			<dd><!-- IF S_ACTION_SELECT --> <select name="action_option">{S_ACTION_OPTIONS}</select> <input type="submit" name="add_rule" value="{L_ADD_RULE}" class="button1" /><!-- ELSE -->{ACTION_CURRENT}<input type="hidden" name="action_option" value="{ACTION_OPTION}" /><!-- ENDIF --></dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	</fieldset>*/
/* */
/* 	<h3>{L_FOLDER_OPTIONS}</h3>*/
/* */
/* 	<fieldset class="fields2">*/
/* */
/* 	<!-- IF not S_MAX_FOLDER_ZERO -->*/
/* 	<dl>*/
/* 		<dt><label for="foldername">{L_ADD_FOLDER}{L_COLON}</label></dt>*/
/* 		<dd><!-- IF S_MAX_FOLDER_REACHED -->{L_MAX_FOLDER_REACHED}<!-- ELSE --><input type="text" class="inputbox medium" name="foldername" id="foldername" size="30" maxlength="30" /> <input class="button2" type="submit" name="addfolder" value="{L_ADD}" /><!-- ENDIF --></dd>*/
/* 	</dl>*/
/* 	<!-- IF S_FOLDER_OPTIONS --><hr class="dashed" /><!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* */
/* */
/* */
/* 	<!-- IF S_FOLDER_OPTIONS -->*/
/* 		<dl>*/
/* 			<dt><label for="rename_folder_id">{L_RENAME_FOLDER}{L_COLON}</label></dt>*/
/* 			<dd><select name="rename_folder_id" id="rename_folder_id">{S_FOLDER_OPTIONS}</select></dd>*/
/* 			<dt><label for="new_folder_name">{L_NEW_FOLDER_NAME}{L_COLON}</label></dt>*/
/* 			<dd><input type="text" class="inputbox tiny" name="new_folder_name" id="new_folder_name" maxlength="30" /> <input class="button2" type="submit" name="rename_folder" value="{L_RENAME}" /></dd>*/
/* 		</dl>*/
/* 		<hr class="dashed" />*/
/* 		<dl>*/
/* 			<dt><label for="remove_folder_id">{L_REMOVE_FOLDER}{L_COLON}</label></dt>*/
/* 			<dd><select name="remove_folder_id" id="remove_folder_id">{S_FOLDER_OPTIONS}</select></dd>*/
/* 			<dd style="margin-top: 3px;"><label for="remove_action1"><input type="radio" name="remove_action" id="remove_action1" value="1" checked="checked" /> {L_MOVE_DELETED_MESSAGES_TO}{L_COLON}</label> <select name="move_to">{S_TO_FOLDER_OPTIONS}</select></dd>*/
/* 			<dd style="margin-top: 3px;"><label for="remove_action2"><input type="radio" name="remove_action" id="remove_action2" value="2" /> {L_DELETE_MESSAGES_IN_FOLDER}</label></dd>*/
/* 			<dd style="margin-top: 3px;"><input class="button2" type="submit" name="remove_folder" value="{L_REMOVE}" /></dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<hr class="dashed" />*/
/* */
/* 	<dl>*/
/* 		<dt><label for="full_action1">{L_IF_FOLDER_FULL}{L_COLON}</label></dt>*/
/* 		<dd style="margin-top: 3px;"><label for="full_action1"><input type="radio" name="full_action" id="full_action1" value="1"{S_DELETE_CHECKED} /> {L_DELETE_OLDEST_MESSAGES}</label></dd>*/
/* 		<dd style="margin-top: 3px;"><label for="full_action2"><input type="radio" name="full_action" id="full_action2" value="2"{S_MOVE_CHECKED} /> {L_MOVE_TO_FOLDER}{L_COLON}</label> <select name="full_move_to">{S_FULL_FOLDER_OPTIONS}</select></dd>*/
/* 		<dd style="margin-top: 3px;"><label for="full_action3" style="white-space:normal;"><input type="radio" name="full_action" id="full_action3" value="3"{S_HOLD_CHECKED} /> {L_HOLD_NEW_MESSAGES}</label></dd>*/
/* 	</dl>*/
/* */
/* */
/* 	<dl>*/
/* 		<dt><label>{L_DEFAULT_ACTION}{L_COLON}</label><br /><span>{L_DEFAULT_ACTION_EXPLAIN}</span></dt>*/
/* 		<dd>{DEFAULT_ACTION}</dd>*/
/* 		<dd><input class="button2" type="submit" name="fullfolder" value="{L_CHANGE}" /></dd>*/
/* 	</dl>*/
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* 	{S_FORM_TOKEN}*/
/* </div>*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
