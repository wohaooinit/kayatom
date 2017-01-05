<?php

/* acp_adduser.html */
class __TwigTemplate_9c3d84bdc9053fbb58e9fde3eea4934c813e0f2020eb912f5a5acf5f1bf9ce6a extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_adduser.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
\t<h1>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("ADD_USER");
        echo " - ";
        echo $this->env->getExtension('phpbb')->lang("MOD_VERSION");
        echo "</h1>
\t<p>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("ADD_USER_EXPLAIN");
        echo "</p>

\t<form id=\"register\" method=\"post\" autocomplete=\"off\" action=\"";
        // line 6
        if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
        echo $_U_ACTION_;
        echo "\">

";
        // line 8
        if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
        if ($_ERROR_) {
            // line 9
            echo "\t<div class=\"errorbox\"><h3>";
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 10
            if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
            echo $_ERROR_;
            echo "</p>
\t</div>
";
        }
        // line 13
        echo "
<fieldset>
\t<legend>";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("REGISTRATION");
        echo "</legend>
\t<p>";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("REG_COND");
        echo "</p>
\t<dl>
\t\t<dt><label for=\"username\">";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t<br /><span>";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("USERNAME_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input class=\"medium\" type=\"text\" id=\"username\" name=\"username\" size=\"25\" maxlength=\"40\" value=\"";
        // line 20
        if (isset($context["NEW_USERNAME"])) { $_NEW_USERNAME_ = $context["NEW_USERNAME"]; } else { $_NEW_USERNAME_ = null; }
        echo $_NEW_USERNAME_;
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"email\">";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><input class=\"medium\" type=\"text\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"255\" value=\"";
        // line 24
        if (isset($context["EMAIL"])) { $_EMAIL_ = $context["EMAIL"]; } else { $_EMAIL_ = null; }
        echo $_EMAIL_;
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"new_password\">";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"password\" name=\"new_password\" id=\"new_password\" size=\"25\" value=\"";
        // line 28
        if (isset($context["PASSWORD"])) { $_PASSWORD_ = $context["PASSWORD"]; } else { $_PASSWORD_ = null; }
        echo $_PASSWORD_;
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("NEW_PASSWORD");
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"password_confirm\">";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" size=\"25\" value=\"";
        // line 32
        if (isset($context["PASSWORD_CONFIRM"])) { $_PASSWORD_CONFIRM_ = $context["PASSWORD_CONFIRM"]; } else { $_PASSWORD_CONFIRM_ = null; }
        echo $_PASSWORD_CONFIRM_;
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"lang\">";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"lang\" id=\"lang\">";
        // line 36
        if (isset($context["S_LANG_OPTIONS"])) { $_S_LANG_OPTIONS_ = $context["S_LANG_OPTIONS"]; } else { $_S_LANG_OPTIONS_ = null; }
        echo $_S_LANG_OPTIONS_;
        echo "</select></dd>
\t</dl>
\t";
        // line 38
        $location = "timezone_option.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("timezone_option.html", "acp_adduser.html", 38)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 39
        echo "\t<dl id=\"groups\">
\t\t<dt><label for=\"group\">";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("GROUPS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("GROUP_ADD");
        echo "</span></dt>
\t\t<dd>";
        // line 41
        if (isset($context["S_GROUP_OPTIONS"])) { $_S_GROUP_OPTIONS_ = $context["S_GROUP_OPTIONS"]; } else { $_S_GROUP_OPTIONS_ = null; }
        echo $_S_GROUP_OPTIONS_;
        echo "</dd>
\t</dl>
\t<dl class=\"default_group\">
\t\t<dt><label for=\"group_default\">";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("GROUP_DEFAULT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("GROUP_DEFAULT_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input id=\"group_default\" class=\"radio\" type=\"checkbox\" value=\"1\" ";
        // line 45
        if (isset($context["U_GROUP_DEFAULT"])) { $_U_GROUP_DEFAULT_ = $context["U_GROUP_DEFAULT"]; } else { $_U_GROUP_DEFAULT_ = null; }
        echo $_U_GROUP_DEFAULT_;
        echo " name=\"group_default\" /></dd>
\t</dl>
\t";
        // line 47
        if (isset($context["S_NEW_USER_SET"])) { $_S_NEW_USER_SET_ = $context["S_NEW_USER_SET"]; } else { $_S_NEW_USER_SET_ = null; }
        if ($_S_NEW_USER_SET_) {
            // line 48
            echo "\t<dl>
\t\t<dt><label for=\"new_user\">";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("ENABLE_NEWUSER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br><span>";
            echo $this->env->getExtension('phpbb')->lang("ENABLE_NEWUSER_EXPLAIN");
            echo "</span></dt>
\t\t<dd>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"new_user\" value=\"1\"";
            // line 51
            if (isset($context["S_NEW_USER_ENABLE"])) { $_S_NEW_USER_ENABLE_ = $context["S_NEW_USER_ENABLE"]; } else { $_S_NEW_USER_ENABLE_ = null; }
            if ($_S_NEW_USER_ENABLE_) {
                echo " id=\"new_user\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"new_user\" value=\"0\"";
            // line 52
            if (isset($context["S_NEW_USER_ENABLE"])) { $_S_NEW_USER_ENABLE_ = $context["S_NEW_USER_ENABLE"]; } else { $_S_NEW_USER_ENABLE_ = null; }
            if ( !$_S_NEW_USER_ENABLE_) {
                echo " id=\"new_user\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t";
        }
        // line 56
        echo "\t";
        if (isset($context["S_BIRTHDAYS_ENABLED"])) { $_S_BIRTHDAYS_ENABLED_ = $context["S_BIRTHDAYS_ENABLED"]; } else { $_S_BIRTHDAYS_ENABLED_ = null; }
        if ($_S_BIRTHDAYS_ENABLED_) {
            // line 57
            echo "\t<dl>
\t\t<dt><label for=\"birthday\">";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAY_EXPLAIN");
            echo "</span></dt>
\t\t<dd>";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("DAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select id=\"birthday\" name=\"bday_day\">";
            if (isset($context["S_BIRTHDAY_DAY_OPTIONS"])) { $_S_BIRTHDAY_DAY_OPTIONS_ = $context["S_BIRTHDAY_DAY_OPTIONS"]; } else { $_S_BIRTHDAY_DAY_OPTIONS_ = null; }
            echo $_S_BIRTHDAY_DAY_OPTIONS_;
            echo "</select> ";
            echo $this->env->getExtension('phpbb')->lang("MONTH");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"bday_month\">";
            if (isset($context["S_BIRTHDAY_MONTH_OPTIONS"])) { $_S_BIRTHDAY_MONTH_OPTIONS_ = $context["S_BIRTHDAY_MONTH_OPTIONS"]; } else { $_S_BIRTHDAY_MONTH_OPTIONS_ = null; }
            echo $_S_BIRTHDAY_MONTH_OPTIONS_;
            echo "</select> ";
            echo $this->env->getExtension('phpbb')->lang("YEAR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"bday_year\">";
            if (isset($context["S_BIRTHDAY_YEAR_OPTIONS"])) { $_S_BIRTHDAY_YEAR_OPTIONS_ = $context["S_BIRTHDAY_YEAR_OPTIONS"]; } else { $_S_BIRTHDAY_YEAR_OPTIONS_ = null; }
            echo $_S_BIRTHDAY_YEAR_OPTIONS_;
            echo "</select></dd>
\t</dl>
\t";
        }
        // line 62
        echo "\t";
        if (isset($context["S_ADMIN_ACTIVATE"])) { $_S_ADMIN_ACTIVATE_ = $context["S_ADMIN_ACTIVATE"]; } else { $_S_ADMIN_ACTIVATE_ = null; }
        if ($_S_ADMIN_ACTIVATE_) {
            // line 63
            echo "\t<dl>
\t\t<dt><label for=\"admin_activate\">";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("ADMIN_ACTIVATE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input id=\"admin_activate\" class=\"radio\" type=\"checkbox\" value=\"1\" ";
            // line 65
            if (isset($context["U_ADMIN_ACTIVATE"])) { $_U_ADMIN_ACTIVATE_ = $context["U_ADMIN_ACTIVATE"]; } else { $_U_ADMIN_ACTIVATE_ = null; }
            echo $_U_ADMIN_ACTIVATE_;
            echo " name=\"activate\" /></dd>
\t</dl>
\t";
        }
        // line 68
        echo "</fieldset>

\t";
        // line 70
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "profile_fields", array()))) {
            // line 71
            echo "\t<fieldset>
\t\t<dl><dd><strong>";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("ITEMS_REQUIRED");
            echo "</strong></dd></dl>

\t";
            // line 74
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "profile_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 75
                echo "\t\t<dl>
\t\t\t<dt><label";
                // line 76
                if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
                if ($this->getAttribute($_profile_fields_, "FIELD_ID", array())) {
                    echo " for=\"";
                    if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
                    echo $this->getAttribute($_profile_fields_, "FIELD_ID", array());
                    echo "\"";
                }
                echo ">";
                if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
                echo $this->getAttribute($_profile_fields_, "LANG_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
                if ($this->getAttribute($_profile_fields_, "S_REQUIRED", array())) {
                    echo " *";
                }
                echo "</label>
\t\t\t";
                // line 77
                if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
                if ($this->getAttribute($_profile_fields_, "LANG_EXPLAIN", array())) {
                    echo "<br /><span>";
                    if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
                    echo $this->getAttribute($_profile_fields_, "LANG_EXPLAIN", array());
                    echo "</span>";
                }
                // line 78
                echo "\t\t\t";
                if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
                if ($this->getAttribute($_profile_fields_, "ERROR", array())) {
                    echo "<br /><span class=\"error\">";
                    if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
                    echo $this->getAttribute($_profile_fields_, "ERROR", array());
                    echo "</span>";
                }
                echo "</dt>
\t\t\t<dd>";
                // line 79
                if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
                echo $this->getAttribute($_profile_fields_, "FIELD", array());
                echo "</dd>
\t\t</dl>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t</fieldset>
\t";
        }
        // line 84
        echo "
\t<fieldset class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
        // line 86
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;&nbsp;<input class=\"button1\" type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" />
\t\t";
        // line 87
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
\t</fieldset>

</form>
";
        // line 91
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_adduser.html", 91)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_adduser.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 91,  364 => 87,  358 => 86,  354 => 84,  350 => 82,  340 => 79,  329 => 78,  321 => 77,  303 => 76,  300 => 75,  295 => 74,  290 => 72,  287 => 71,  284 => 70,  280 => 68,  273 => 65,  268 => 64,  265 => 63,  261 => 62,  239 => 59,  232 => 58,  229 => 57,  225 => 56,  213 => 52,  204 => 51,  196 => 49,  193 => 48,  190 => 47,  184 => 45,  177 => 44,  170 => 41,  163 => 40,  160 => 39,  148 => 38,  142 => 36,  137 => 35,  128 => 32,  123 => 31,  114 => 28,  107 => 27,  100 => 24,  95 => 23,  88 => 20,  84 => 19,  79 => 18,  74 => 16,  70 => 15,  66 => 13,  59 => 10,  54 => 9,  51 => 8,  45 => 6,  40 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* 	<h1>{L_ADD_USER} - {L_MOD_VERSION}</h1>*/
/* 	<p>{L_ADD_USER_EXPLAIN}</p>*/
/* */
/* 	<form id="register" method="post" autocomplete="off" action="{U_ACTION}">*/
/* */
/* <!-- IF ERROR -->*/
/* 	<div class="errorbox"><h3>{L_WARNING}</h3>*/
/* 		<p>{ERROR}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <fieldset>*/
/* 	<legend>{L_REGISTRATION}</legend>*/
/* 	<p>{L_REG_COND}</p>*/
/* 	<dl>*/
/* 		<dt><label for="username">{L_USERNAME}{L_COLON}</label>*/
/* 			<br /><span>{L_USERNAME_EXPLAIN}</span></dt>*/
/* 		<dd><input class="medium" type="text" id="username" name="username" size="25" maxlength="40" value="{NEW_USERNAME}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="email">{L_EMAIL_ADDRESS}{L_COLON}</label></dt>*/
/* 		<dd><input class="medium" type="text" name="email" id="email" size="25" maxlength="255" value="{EMAIL}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="new_password">{L_PASSWORD}{L_COLON}</label><br /><span>{L_PASSWORD_EXPLAIN}</span></dt>*/
/* 		<dd><input type="password" name="new_password" id="new_password" size="25" value="{PASSWORD}" class="inputbox autowidth" title="{L_NEW_PASSWORD}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="password_confirm">{L_CONFIRM_PASSWORD}{L_COLON}</label></dt>*/
/* 		<dd><input type="password" name="password_confirm" id="password_confirm" size="25" value="{PASSWORD_CONFIRM}" class="inputbox autowidth" title="{L_CONFIRM_PASSWORD}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="lang">{L_LANGUAGE}{L_COLON}</label></dt>*/
/* 		<dd><select name="lang" id="lang">{S_LANG_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<!-- INCLUDE timezone_option.html -->*/
/* 	<dl id="groups">*/
/* 		<dt><label for="group">{L_GROUPS}{L_COLON}</label><br /><span>{L_GROUP_ADD}</span></dt>*/
/* 		<dd>{S_GROUP_OPTIONS}</dd>*/
/* 	</dl>*/
/* 	<dl class="default_group">*/
/* 		<dt><label for="group_default">{L_GROUP_DEFAULT}{L_COLON}</label><br /><span>{L_GROUP_DEFAULT_EXPLAIN}</span></dt>*/
/* 		<dd><input id="group_default" class="radio" type="checkbox" value="1" {U_GROUP_DEFAULT} name="group_default" /></dd>*/
/* 	</dl>*/
/* 	<!-- IF S_NEW_USER_SET -->*/
/* 	<dl>*/
/* 		<dt><label for="new_user">{L_ENABLE_NEWUSER}{L_COLON}</label><br><span>{L_ENABLE_NEWUSER_EXPLAIN}</span></dt>*/
/* 		<dd>*/
/* 			<label><input type="radio" class="radio" name="new_user" value="1"<!-- IF S_NEW_USER_ENABLE --> id="new_user" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 			<label><input type="radio" class="radio" name="new_user" value="0"<!-- IF not S_NEW_USER_ENABLE --> id="new_user" checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_BIRTHDAYS_ENABLED -->*/
/* 	<dl>*/
/* 		<dt><label for="birthday">{L_BIRTHDAY}{L_COLON}</label><br /><span>{L_BIRTHDAY_EXPLAIN}</span></dt>*/
/* 		<dd>{L_DAY}{L_COLON} <select id="birthday" name="bday_day">{S_BIRTHDAY_DAY_OPTIONS}</select> {L_MONTH}{L_COLON} <select name="bday_month">{S_BIRTHDAY_MONTH_OPTIONS}</select> {L_YEAR}{L_COLON} <select name="bday_year">{S_BIRTHDAY_YEAR_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_ADMIN_ACTIVATE -->*/
/* 	<dl>*/
/* 		<dt><label for="admin_activate">{L_ADMIN_ACTIVATE}{L_COLON}</label></dt>*/
/* 		<dd><input id="admin_activate" class="radio" type="checkbox" value="1" {U_ADMIN_ACTIVATE} name="activate" /></dd>*/
/* 	</dl>*/
/* 	<!-- ENDIF -->*/
/* </fieldset>*/
/* */
/* 	<!-- IF .profile_fields -->*/
/* 	<fieldset>*/
/* 		<dl><dd><strong>{L_ITEMS_REQUIRED}</strong></dd></dl>*/
/* */
/* 	<!-- BEGIN profile_fields -->*/
/* 		<dl>*/
/* 			<dt><label<!-- IF profile_fields.FIELD_ID --> for="{profile_fields.FIELD_ID}"<!-- ENDIF -->>{profile_fields.LANG_NAME}{L_COLON}<!-- IF profile_fields.S_REQUIRED --> *<!-- ENDIF --></label>*/
/* 			<!-- IF profile_fields.LANG_EXPLAIN --><br /><span>{profile_fields.LANG_EXPLAIN}</span><!-- ENDIF -->*/
/* 			<!-- IF profile_fields.ERROR --><br /><span class="error">{profile_fields.ERROR}</span><!-- ENDIF --></dt>*/
/* 			<dd>{profile_fields.FIELD}</dd>*/
/* 		</dl>*/
/* 	<!-- END profile_fields -->*/
/* 	</fieldset>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<fieldset class="quick">*/
/* 		<input class="button1" type="submit" name="submit" value="{L_SUBMIT}" />&nbsp;&nbsp;<input class="button1" type="reset" value="{L_RESET}" name="reset" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* */
/* </form>*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
