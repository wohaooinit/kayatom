<?php

/* memberlist_search.html */
class __TwigTemplate_4c9be9ebdbeadd9e61748dabe834ad72d228e09aac8b5f4aabc778d6da95a18a extends Twig_Template
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
        echo "<h2 class=\"solo\">";
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</h2>

<form method=\"post\" action=\"";
        // line 3
        if (isset($context["S_MODE_ACTION"])) { $_S_MODE_ACTION_ = $context["S_MODE_ACTION"]; } else { $_S_MODE_ACTION_ = null; }
        echo $_S_MODE_ACTION_;
        echo "\" id=\"search_memberlist\">
<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME_EXPLAIN");
        echo "</p>

\t";
        // line 9
        if (isset($context["memberlist_search_fields_before"])) { $_memberlist_search_fields_before_ = $context["memberlist_search_fields_before"]; } else { $_memberlist_search_fields_before_ = null; }
        // line 10
        echo "\t<fieldset class=\"fields1 column1\">
\t<dl style=\"overflow: visible;\">
\t\t<dt><label for=\"username\">";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t";
        // line 14
        if (isset($context["U_LIVE_SEARCH"])) { $_U_LIVE_SEARCH_ = $context["U_LIVE_SEARCH"]; } else { $_U_LIVE_SEARCH_ = null; }
        if ($_U_LIVE_SEARCH_) {
            echo "<div class=\"dropdown-container dropdown-";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo "\">";
        }
        // line 15
        echo "\t\t\t<input type=\"text\" name=\"username\" id=\"username\" value=\"";
        if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
        echo $_USERNAME_;
        echo "\" class=\"inputbox\"";
        if (isset($context["U_LIVE_SEARCH"])) { $_U_LIVE_SEARCH_ = $context["U_LIVE_SEARCH"]; } else { $_U_LIVE_SEARCH_ = null; }
        if ($_U_LIVE_SEARCH_) {
            echo " autocomplete=\"off\" data-filter=\"phpbb.search.filter\" data-ajax=\"member_search\" data-min-length=\"3\" data-url=\"";
            if (isset($context["U_LIVE_SEARCH"])) { $_U_LIVE_SEARCH_ = $context["U_LIVE_SEARCH"]; } else { $_U_LIVE_SEARCH_ = null; }
            echo $_U_LIVE_SEARCH_;
            echo "\" data-results=\"#user-search\" data-overlay=\"false\"";
        }
        echo " />
\t\t\t";
        // line 16
        if (isset($context["U_LIVE_SEARCH"])) { $_U_LIVE_SEARCH_ = $context["U_LIVE_SEARCH"]; } else { $_U_LIVE_SEARCH_ = null; }
        if ($_U_LIVE_SEARCH_) {
            // line 17
            echo "\t\t\t\t<div class=\"dropdown live-search hidden\" id=\"user-search\">
\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t<ul class=\"dropdown-contents search-results\">
\t\t\t\t\t\t<li class=\"search-result-tpl\"><span class=\"search-result\"></span></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 25
        echo "\t\t</dd>
\t</dl>
";
        // line 27
        if (isset($context["S_EMAIL_SEARCH_ALLOWED"])) { $_S_EMAIL_SEARCH_ALLOWED_ = $context["S_EMAIL_SEARCH_ALLOWED"]; } else { $_S_EMAIL_SEARCH_ALLOWED_ = null; }
        if ($_S_EMAIL_SEARCH_ALLOWED_) {
            // line 28
            echo "\t<dl>
\t\t<dt><label for=\"email\">";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("EMAIL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"email\" id=\"email\" value=\"";
            // line 30
            if (isset($context["EMAIL"])) { $_EMAIL_ = $context["EMAIL"]; } else { $_EMAIL_ = null; }
            echo $_EMAIL_;
            echo "\" class=\"inputbox\" /></dd>
\t</dl>
";
        }
        // line 33
        if (isset($context["S_JABBER_ENABLED"])) { $_S_JABBER_ENABLED_ = $context["S_JABBER_ENABLED"]; } else { $_S_JABBER_ENABLED_ = null; }
        if ($_S_JABBER_ENABLED_) {
            // line 34
            echo "\t<dl>
\t\t<dt><label for=\"jabber\">";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"jabber\" id=\"jabber\" value=\"";
            // line 36
            if (isset($context["JABBER"])) { $_JABBER_ = $context["JABBER"]; } else { $_JABBER_ = null; }
            echo $_JABBER_;
            echo "\" class=\"inputbox\" /></dd>
\t</dl>
";
        }
        // line 39
        echo "\t<dl>
\t\t<dt><label for=\"search_group_id\">";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("GROUP");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"search_group_id\" id=\"search_group_id\">";
        // line 41
        if (isset($context["S_GROUP_SELECT"])) { $_S_GROUP_SELECT_ = $context["S_GROUP_SELECT"]; } else { $_S_GROUP_SELECT_ = null; }
        echo $_S_GROUP_SELECT_;
        echo "</select></dd>
\t</dl>
\t";
        // line 43
        if (isset($context["memberlist_search_sorting_options_before"])) { $_memberlist_search_sorting_options_before_ = $context["memberlist_search_sorting_options_before"]; } else { $_memberlist_search_sorting_options_before_ = null; }
        // line 44
        echo "\t<dl>
\t\t<dt><label for=\"sk\" class=\"label3\">";
        // line 45
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"sk\" id=\"sk\">";
        // line 46
        if (isset($context["S_SORT_OPTIONS"])) { $_S_SORT_OPTIONS_ = $context["S_SORT_OPTIONS"]; } else { $_S_SORT_OPTIONS_ = null; }
        echo $_S_SORT_OPTIONS_;
        echo "</select> <select name=\"sd\">";
        if (isset($context["S_ORDER_SELECT"])) { $_S_ORDER_SELECT_ = $context["S_ORDER_SELECT"]; } else { $_S_ORDER_SELECT_ = null; }
        echo $_S_ORDER_SELECT_;
        echo "</select></dd>
\t</dl>
\t</fieldset>

\t<fieldset class=\"fields1 column2\">
\t<dl>
\t\t<dt><label for=\"joined\">";
        // line 52
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"joined_select\">";
        // line 53
        if (isset($context["S_JOINED_TIME_OPTIONS"])) { $_S_JOINED_TIME_OPTIONS_ = $context["S_JOINED_TIME_OPTIONS"]; } else { $_S_JOINED_TIME_OPTIONS_ = null; }
        echo $_S_JOINED_TIME_OPTIONS_;
        echo "</select> <input class=\"inputbox medium\" type=\"text\" name=\"joined\" id=\"joined\" value=\"";
        if (isset($context["JOINED"])) { $_JOINED_ = $context["JOINED"]; } else { $_JOINED_ = null; }
        echo $_JOINED_;
        echo "\" /></dd>
\t</dl>
";
        // line 55
        if (isset($context["S_VIEWONLINE"])) { $_S_VIEWONLINE_ = $context["S_VIEWONLINE"]; } else { $_S_VIEWONLINE_ = null; }
        if ($_S_VIEWONLINE_) {
            // line 56
            echo "\t<dl>
\t\t<dt><label for=\"active\">";
            // line 57
            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"active_select\">";
            // line 58
            if (isset($context["S_ACTIVE_TIME_OPTIONS"])) { $_S_ACTIVE_TIME_OPTIONS_ = $context["S_ACTIVE_TIME_OPTIONS"]; } else { $_S_ACTIVE_TIME_OPTIONS_ = null; }
            echo $_S_ACTIVE_TIME_OPTIONS_;
            echo "</select> <input class=\"inputbox medium\" type=\"text\" name=\"active\" id=\"active\" value=\"";
            if (isset($context["ACTIVE"])) { $_ACTIVE_ = $context["ACTIVE"]; } else { $_ACTIVE_ = null; }
            echo $_ACTIVE_;
            echo "\" /></dd>
\t</dl>
";
        }
        // line 61
        echo "\t<dl>
\t\t<dt><label for=\"count\">";
        // line 62
        echo $this->env->getExtension('phpbb')->lang("POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"count_select\">";
        // line 63
        if (isset($context["S_COUNT_OPTIONS"])) { $_S_COUNT_OPTIONS_ = $context["S_COUNT_OPTIONS"]; } else { $_S_COUNT_OPTIONS_ = null; }
        echo $_S_COUNT_OPTIONS_;
        echo "</select> <input class=\"inputbox medium\" type=\"number\" min=\"0\" name=\"count\" id=\"count\" value=\"";
        if (isset($context["COUNT"])) { $_COUNT_ = $context["COUNT"]; } else { $_COUNT_ = null; }
        echo $_COUNT_;
        echo "\" /></dd>
\t</dl>
";
        // line 65
        if (isset($context["S_IP_SEARCH_ALLOWED"])) { $_S_IP_SEARCH_ALLOWED_ = $context["S_IP_SEARCH_ALLOWED"]; } else { $_S_IP_SEARCH_ALLOWED_ = null; }
        if ($_S_IP_SEARCH_ALLOWED_) {
            // line 66
            echo "\t<dl>
\t\t<dt><label for=\"ip\">";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("POST_IP");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input class=\"inputbox medium\" type=\"text\" name=\"ip\" id=\"ip\" value=\"";
            // line 68
            if (isset($context["IP"])) { $_IP_ = $context["IP"]; } else { $_IP_ = null; }
            echo $_IP_;
            echo "\" /></dd>
\t</dl>
";
        }
        // line 71
        echo "\t";
        if (isset($context["memberlist_search_fields_after"])) { $_memberlist_search_fields_after_ = $context["memberlist_search_fields_after"]; } else { $_memberlist_search_fields_after_ = null; }
        // line 72
        echo "\t</fieldset>

\t<div class=\"clear\"></div>

\t<hr />

\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"reset\" value=\"";
        // line 79
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 80
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" class=\"button1\" />
\t\t";
        // line 81
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
\t</fieldset>

\t</div>
</div>

</form>
";
    }

    public function getTemplateName()
    {
        return "memberlist_search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 81,  248 => 80,  244 => 79,  235 => 72,  232 => 71,  225 => 68,  220 => 67,  217 => 66,  214 => 65,  205 => 63,  200 => 62,  197 => 61,  187 => 58,  182 => 57,  179 => 56,  176 => 55,  167 => 53,  162 => 52,  149 => 46,  144 => 45,  141 => 44,  139 => 43,  133 => 41,  128 => 40,  125 => 39,  118 => 36,  113 => 35,  110 => 34,  107 => 33,  100 => 30,  95 => 29,  92 => 28,  89 => 27,  85 => 25,  75 => 17,  72 => 16,  58 => 15,  50 => 14,  44 => 12,  40 => 10,  38 => 9,  33 => 7,  25 => 3,  19 => 1,);
    }
}
/* <h2 class="solo">{L_FIND_USERNAME}</h2>*/
/* */
/* <form method="post" action="{S_MODE_ACTION}" id="search_memberlist">*/
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<p>{L_FIND_USERNAME_EXPLAIN}</p>*/
/* */
/* 	<!-- EVENT memberlist_search_fields_before -->*/
/* 	<fieldset class="fields1 column1">*/
/* 	<dl style="overflow: visible;">*/
/* 		<dt><label for="username">{L_USERNAME}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<!-- IF U_LIVE_SEARCH --><div class="dropdown-container dropdown-{S_CONTENT_FLOW_END}"><!-- ENDIF -->*/
/* 			<input type="text" name="username" id="username" value="{USERNAME}" class="inputbox"<!-- IF U_LIVE_SEARCH --> autocomplete="off" data-filter="phpbb.search.filter" data-ajax="member_search" data-min-length="3" data-url="{U_LIVE_SEARCH}" data-results="#user-search" data-overlay="false"<!-- ENDIF --> />*/
/* 			<!-- IF U_LIVE_SEARCH -->*/
/* 				<div class="dropdown live-search hidden" id="user-search">*/
/* 					<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 					<ul class="dropdown-contents search-results">*/
/* 						<li class="search-result-tpl"><span class="search-result"></span></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- ENDIF -->*/
/* 		</dd>*/
/* 	</dl>*/
/* <!-- IF S_EMAIL_SEARCH_ALLOWED -->*/
/* 	<dl>*/
/* 		<dt><label for="email">{L_EMAIL}{L_COLON}</label></dt>*/
/* 		<dd><input type="text" name="email" id="email" value="{EMAIL}" class="inputbox" /></dd>*/
/* 	</dl>*/
/* <!-- ENDIF -->*/
/* <!-- IF S_JABBER_ENABLED -->*/
/* 	<dl>*/
/* 		<dt><label for="jabber">{L_JABBER}{L_COLON}</label></dt>*/
/* 		<dd><input type="text" name="jabber" id="jabber" value="{JABBER}" class="inputbox" /></dd>*/
/* 	</dl>*/
/* <!-- ENDIF -->*/
/* 	<dl>*/
/* 		<dt><label for="search_group_id">{L_GROUP}{L_COLON}</label></dt>*/
/* 		<dd><select name="search_group_id" id="search_group_id">{S_GROUP_SELECT}</select></dd>*/
/* 	</dl>*/
/* 	<!-- EVENT memberlist_search_sorting_options_before -->*/
/* 	<dl>*/
/* 		<dt><label for="sk" class="label3">{L_SORT_BY}{L_COLON}</label></dt>*/
/* 		<dd><select name="sk" id="sk">{S_SORT_OPTIONS}</select> <select name="sd">{S_ORDER_SELECT}</select></dd>*/
/* 	</dl>*/
/* 	</fieldset>*/
/* */
/* 	<fieldset class="fields1 column2">*/
/* 	<dl>*/
/* 		<dt><label for="joined">{L_JOINED}{L_COLON}</label></dt>*/
/* 		<dd><select name="joined_select">{S_JOINED_TIME_OPTIONS}</select> <input class="inputbox medium" type="text" name="joined" id="joined" value="{JOINED}" /></dd>*/
/* 	</dl>*/
/* <!-- IF S_VIEWONLINE -->*/
/* 	<dl>*/
/* 		<dt><label for="active">{L_LAST_ACTIVE}{L_COLON}</label></dt>*/
/* 		<dd><select name="active_select">{S_ACTIVE_TIME_OPTIONS}</select> <input class="inputbox medium" type="text" name="active" id="active" value="{ACTIVE}" /></dd>*/
/* 	</dl>*/
/* <!-- ENDIF -->*/
/* 	<dl>*/
/* 		<dt><label for="count">{L_POSTS}{L_COLON}</label></dt>*/
/* 		<dd><select name="count_select">{S_COUNT_OPTIONS}</select> <input class="inputbox medium" type="number" min="0" name="count" id="count" value="{COUNT}" /></dd>*/
/* 	</dl>*/
/* <!-- IF S_IP_SEARCH_ALLOWED -->*/
/* 	<dl>*/
/* 		<dt><label for="ip">{L_POST_IP}{L_COLON}</label></dt>*/
/* 		<dd><input class="inputbox medium" type="text" name="ip" id="ip" value="{IP}" /></dd>*/
/* 	</dl>*/
/* <!-- ENDIF -->*/
/* 	<!-- EVENT memberlist_search_fields_after -->*/
/* 	</fieldset>*/
/* */
/* 	<div class="clear"></div>*/
/* */
/* 	<hr />*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		<input type="reset" value="{L_RESET}" name="reset" class="button2" />&nbsp;*/
/* 		<input type="submit" name="submit" value="{L_SEARCH}" class="button1" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* </form>*/
/* */
