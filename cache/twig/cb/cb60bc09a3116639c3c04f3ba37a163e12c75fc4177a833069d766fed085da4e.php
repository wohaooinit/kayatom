<?php

/* acp_main.html */
class __TwigTemplate_b70716b0e60da1047107f013a3f4a7604b182116970660befcf4e41b999e4b42 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_main.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (isset($context["S_RESTORE_PERMISSIONS"])) { $_S_RESTORE_PERMISSIONS_ = $context["S_RESTORE_PERMISSIONS"]; } else { $_S_RESTORE_PERMISSIONS_ = null; }
        if ($_S_RESTORE_PERMISSIONS_) {
            // line 6
            echo "
\t<h1>";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("PERMISSIONS_TRANSFERRED");
            echo "</h1>

\t<p>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("PERMISSIONS_TRANSFERRED_EXPLAIN");
            echo "</p>

";
        } else {
            // line 12
            echo "
\t<h1>";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("WELCOME_PHPBB");
            echo "</h1>

\t<p>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("ADMIN_INTRO");
            echo "</p>

\t";
            // line 17
            if (isset($context["S_VERSIONCHECK_FAIL"])) { $_S_VERSIONCHECK_FAIL_ = $context["S_VERSIONCHECK_FAIL"]; } else { $_S_VERSIONCHECK_FAIL_ = null; }
            if (isset($context["S_VERSION_UP_TO_DATE"])) { $_S_VERSION_UP_TO_DATE_ = $context["S_VERSION_UP_TO_DATE"]; } else { $_S_VERSION_UP_TO_DATE_ = null; }
            if ($_S_VERSIONCHECK_FAIL_) {
                // line 18
                echo "\t\t<div class=\"errorbox notice\">
\t\t\t<p>";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FAIL");
                echo "</p>
\t\t\t<p>";
                // line 20
                if (isset($context["VERSIONCHECK_FAIL_REASON"])) { $_VERSIONCHECK_FAIL_REASON_ = $context["VERSIONCHECK_FAIL_REASON"]; } else { $_VERSIONCHECK_FAIL_REASON_ = null; }
                echo $_VERSIONCHECK_FAIL_REASON_;
                echo "</p>
\t\t\t<p><a href=\"";
                // line 21
                if (isset($context["U_VERSIONCHECK_FORCE"])) { $_U_VERSIONCHECK_FORCE_ = $context["U_VERSIONCHECK_FORCE"]; } else { $_U_VERSIONCHECK_FORCE_ = null; }
                echo $_U_VERSIONCHECK_FORCE_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
                echo "</a> &middot; <a href=\"";
                if (isset($context["U_VERSIONCHECK"])) { $_U_VERSIONCHECK_ = $context["U_VERSIONCHECK"]; } else { $_U_VERSIONCHECK_ = null; }
                echo $_U_VERSIONCHECK_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MORE_INFORMATION");
                echo "</a></p>
\t\t</div>
\t";
            } elseif ( !$_S_VERSION_UP_TO_DATE_) {
                // line 24
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 25
                echo $this->env->getExtension('phpbb')->lang("VERSION_NOT_UP_TO_DATE_TITLE");
                echo "</p>
\t\t\t<p><a href=\"";
                // line 26
                if (isset($context["U_VERSIONCHECK_FORCE"])) { $_U_VERSIONCHECK_FORCE_ = $context["U_VERSIONCHECK_FORCE"]; } else { $_U_VERSIONCHECK_FORCE_ = null; }
                echo $_U_VERSIONCHECK_FORCE_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
                echo "</a> &middot; <a href=\"";
                if (isset($context["U_VERSIONCHECK"])) { $_U_VERSIONCHECK_ = $context["U_VERSIONCHECK"]; } else { $_U_VERSIONCHECK_ = null; }
                echo $_U_VERSIONCHECK_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MORE_INFORMATION");
                echo "</a></p>
\t\t</div>
\t";
            }
            // line 29
            echo "
\t";
            // line 30
            if (isset($context["S_SEARCH_INDEX_MISSING"])) { $_S_SEARCH_INDEX_MISSING_ = $context["S_SEARCH_INDEX_MISSING"]; } else { $_S_SEARCH_INDEX_MISSING_ = null; }
            if ($_S_SEARCH_INDEX_MISSING_) {
                // line 31
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 32
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 33
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_INDEX");
                echo "</p>
\t\t</div>
\t";
            }
            // line 36
            echo "
\t";
            // line 37
            if (isset($context["S_REMOVE_INSTALL"])) { $_S_REMOVE_INSTALL_ = $context["S_REMOVE_INSTALL"]; } else { $_S_REMOVE_INSTALL_ = null; }
            if ($_S_REMOVE_INSTALL_) {
                // line 38
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 39
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 40
                echo $this->env->getExtension('phpbb')->lang("REMOVE_INSTALL");
                echo "</p>
\t\t</div>
\t";
            }
            // line 43
            echo "
\t";
            // line 44
            if (isset($context["S_MBSTRING_LOADED"])) { $_S_MBSTRING_LOADED_ = $context["S_MBSTRING_LOADED"]; } else { $_S_MBSTRING_LOADED_ = null; }
            if ($_S_MBSTRING_LOADED_) {
                // line 45
                echo "\t\t";
                if (isset($context["S_MBSTRING_FUNC_OVERLOAD_FAIL"])) { $_S_MBSTRING_FUNC_OVERLOAD_FAIL_ = $context["S_MBSTRING_FUNC_OVERLOAD_FAIL"]; } else { $_S_MBSTRING_FUNC_OVERLOAD_FAIL_ = null; }
                if ($_S_MBSTRING_FUNC_OVERLOAD_FAIL_) {
                    // line 46
                    echo "\t\t\t<div class=\"errorbox\">
\t\t\t\t<h3>";
                    // line 47
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_FUNC_OVERLOAD");
                    echo "</h3>
\t\t\t\t<p>";
                    // line 48
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN");
                    echo "</p>
\t\t\t</div>
\t\t";
                }
                // line 51
                echo "
\t\t";
                // line 52
                if (isset($context["S_MBSTRING_ENCODING_TRANSLATION_FAIL"])) { $_S_MBSTRING_ENCODING_TRANSLATION_FAIL_ = $context["S_MBSTRING_ENCODING_TRANSLATION_FAIL"]; } else { $_S_MBSTRING_ENCODING_TRANSLATION_FAIL_ = null; }
                if ($_S_MBSTRING_ENCODING_TRANSLATION_FAIL_) {
                    // line 53
                    echo "\t\t\t<div class=\"errorbox\">
\t\t\t\t<h3>";
                    // line 54
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_ENCODING_TRANSLATION");
                    echo "</h3>
\t\t\t\t<p>";
                    // line 55
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN");
                    echo "</p>
\t\t\t</div>
\t\t";
                }
                // line 58
                echo "
\t\t";
                // line 59
                if (isset($context["S_MBSTRING_HTTP_INPUT_FAIL"])) { $_S_MBSTRING_HTTP_INPUT_FAIL_ = $context["S_MBSTRING_HTTP_INPUT_FAIL"]; } else { $_S_MBSTRING_HTTP_INPUT_FAIL_ = null; }
                if ($_S_MBSTRING_HTTP_INPUT_FAIL_) {
                    // line 60
                    echo "\t\t\t<div class=\"errorbox\">
\t\t\t\t<h3>";
                    // line 61
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_HTTP_INPUT");
                    echo "</h3>
\t\t\t\t<p>";
                    // line 62
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_HTTP_INPUT_EXPLAIN");
                    echo "</p>
\t\t\t</div>
\t\t";
                }
                // line 65
                echo "
\t\t";
                // line 66
                if (isset($context["S_MBSTRING_HTTP_OUTPUT_FAIL"])) { $_S_MBSTRING_HTTP_OUTPUT_FAIL_ = $context["S_MBSTRING_HTTP_OUTPUT_FAIL"]; } else { $_S_MBSTRING_HTTP_OUTPUT_FAIL_ = null; }
                if ($_S_MBSTRING_HTTP_OUTPUT_FAIL_) {
                    // line 67
                    echo "\t\t\t<div class=\"errorbox\">
\t\t\t\t<h3>";
                    // line 68
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_HTTP_OUTPUT");
                    echo "</h3>
\t\t\t\t<p>";
                    // line 69
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN");
                    echo "</p>
\t\t\t</div>
\t\t";
                }
                // line 72
                echo "\t";
            }
            // line 73
            echo "
\t";
            // line 74
            if (isset($context["S_WRITABLE_CONFIG"])) { $_S_WRITABLE_CONFIG_ = $context["S_WRITABLE_CONFIG"]; } else { $_S_WRITABLE_CONFIG_ = null; }
            if ($_S_WRITABLE_CONFIG_) {
                // line 75
                echo "\t\t<div class=\"errorbox notice\">
\t\t\t<p>";
                // line 76
                echo $this->env->getExtension('phpbb')->lang("WRITABLE_CONFIG");
                echo "</p>
\t\t</div>
\t";
            }
            // line 79
            echo "
\t";
            // line 80
            if (isset($context["S_PHP_VERSION_OLD"])) { $_S_PHP_VERSION_OLD_ = $context["S_PHP_VERSION_OLD"]; } else { $_S_PHP_VERSION_OLD_ = null; }
            if ($_S_PHP_VERSION_OLD_) {
                // line 81
                echo "\t\t<div class=\"errorbox notice\">
\t\t\t<p>";
                // line 82
                echo $this->env->getExtension('phpbb')->lang("PHP_VERSION_OLD");
                echo "</p>
\t\t</div>
\t";
            }
            // line 85
            echo "
\t";
            // line 86
            if (isset($context["acp_main_notice_after"])) { $_acp_main_notice_after_ = $context["acp_main_notice_after"]; } else { $_acp_main_notice_after_ = null; }
            // line 87
            echo "
\t<table class=\"table1 two-columns no-header\" data-no-responsive-header=\"true\">
\t\t<caption>";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("FORUM_STATS");
            echo "</caption>
\t\t<col class=\"col1\" /><col class=\"col2\" /><col class=\"col1\" /><col class=\"col2\" />
\t<thead>
\t<tr>
\t\t<th>";
            // line 93
            echo $this->env->getExtension('phpbb')->lang("STATISTIC");
            echo "</th>
\t\t<th>";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("VALUE");
            echo "</th>
\t\t<th>";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("STATISTIC");
            echo "</th>
\t\t<th>";
            // line 96
            echo $this->env->getExtension('phpbb')->lang("VALUE");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>";
            // line 101
            echo $this->env->getExtension('phpbb')->lang("NUMBER_POSTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 102
            if (isset($context["TOTAL_POSTS"])) { $_TOTAL_POSTS_ = $context["TOTAL_POSTS"]; } else { $_TOTAL_POSTS_ = null; }
            echo $_TOTAL_POSTS_;
            echo "</strong></td>
\t\t<td>";
            // line 103
            echo $this->env->getExtension('phpbb')->lang("POSTS_PER_DAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 104
            if (isset($context["POSTS_PER_DAY"])) { $_POSTS_PER_DAY_ = $context["POSTS_PER_DAY"]; } else { $_POSTS_PER_DAY_ = null; }
            echo $_POSTS_PER_DAY_;
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 107
            echo $this->env->getExtension('phpbb')->lang("NUMBER_TOPICS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 108
            if (isset($context["TOTAL_TOPICS"])) { $_TOTAL_TOPICS_ = $context["TOTAL_TOPICS"]; } else { $_TOTAL_TOPICS_ = null; }
            echo $_TOTAL_TOPICS_;
            echo "</strong></td>
\t\t<td>";
            // line 109
            echo $this->env->getExtension('phpbb')->lang("TOPICS_PER_DAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 110
            if (isset($context["TOPICS_PER_DAY"])) { $_TOPICS_PER_DAY_ = $context["TOPICS_PER_DAY"]; } else { $_TOPICS_PER_DAY_ = null; }
            echo $_TOPICS_PER_DAY_;
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 113
            echo $this->env->getExtension('phpbb')->lang("NUMBER_USERS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 114
            if (isset($context["TOTAL_USERS"])) { $_TOTAL_USERS_ = $context["TOTAL_USERS"]; } else { $_TOTAL_USERS_ = null; }
            echo $_TOTAL_USERS_;
            echo "</strong></td>
\t\t<td>";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("USERS_PER_DAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 116
            if (isset($context["USERS_PER_DAY"])) { $_USERS_PER_DAY_ = $context["USERS_PER_DAY"]; } else { $_USERS_PER_DAY_ = null; }
            echo $_USERS_PER_DAY_;
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 119
            echo $this->env->getExtension('phpbb')->lang("NUMBER_FILES");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 120
            if (isset($context["TOTAL_FILES"])) { $_TOTAL_FILES_ = $context["TOTAL_FILES"]; } else { $_TOTAL_FILES_ = null; }
            echo $_TOTAL_FILES_;
            echo "</strong></td>
\t\t<td>";
            // line 121
            echo $this->env->getExtension('phpbb')->lang("FILES_PER_DAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 122
            if (isset($context["FILES_PER_DAY"])) { $_FILES_PER_DAY_ = $context["FILES_PER_DAY"]; } else { $_FILES_PER_DAY_ = null; }
            echo $_FILES_PER_DAY_;
            echo "</strong></td>
\t</tr>


\t<tr>
\t\t<td>";
            // line 127
            echo $this->env->getExtension('phpbb')->lang("BOARD_STARTED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 128
            if (isset($context["START_DATE"])) { $_START_DATE_ = $context["START_DATE"]; } else { $_START_DATE_ = null; }
            echo $_START_DATE_;
            echo "</strong></td>
\t\t<td>";
            // line 129
            echo $this->env->getExtension('phpbb')->lang("AVATAR_DIR_SIZE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 130
            if (isset($context["AVATAR_DIR_SIZE"])) { $_AVATAR_DIR_SIZE_ = $context["AVATAR_DIR_SIZE"]; } else { $_AVATAR_DIR_SIZE_ = null; }
            echo $_AVATAR_DIR_SIZE_;
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 133
            echo $this->env->getExtension('phpbb')->lang("DATABASE_SIZE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 134
            if (isset($context["DBSIZE"])) { $_DBSIZE_ = $context["DBSIZE"]; } else { $_DBSIZE_ = null; }
            echo $_DBSIZE_;
            echo "</strong></td>
\t\t<td>";
            // line 135
            echo $this->env->getExtension('phpbb')->lang("UPLOAD_DIR_SIZE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 136
            if (isset($context["UPLOAD_DIR_SIZE"])) { $_UPLOAD_DIR_SIZE_ = $context["UPLOAD_DIR_SIZE"]; } else { $_UPLOAD_DIR_SIZE_ = null; }
            echo $_UPLOAD_DIR_SIZE_;
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 139
            echo $this->env->getExtension('phpbb')->lang("DATABASE_SERVER_INFO");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 140
            if (isset($context["DATABASE_INFO"])) { $_DATABASE_INFO_ = $context["DATABASE_INFO"]; } else { $_DATABASE_INFO_ = null; }
            echo $_DATABASE_INFO_;
            echo "</strong></td>
\t\t<td>";
            // line 141
            echo $this->env->getExtension('phpbb')->lang("GZIP_COMPRESSION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 142
            if (isset($context["GZIP_COMPRESSION"])) { $_GZIP_COMPRESSION_ = $context["GZIP_COMPRESSION"]; } else { $_GZIP_COMPRESSION_ = null; }
            echo $_GZIP_COMPRESSION_;
            echo "</strong></td>
\t</tr>
\t";
            // line 144
            if (isset($context["S_TOTAL_ORPHAN"])) { $_S_TOTAL_ORPHAN_ = $context["S_TOTAL_ORPHAN"]; } else { $_S_TOTAL_ORPHAN_ = null; }
            if (isset($context["S_VERSIONCHECK"])) { $_S_VERSIONCHECK_ = $context["S_VERSIONCHECK"]; } else { $_S_VERSIONCHECK_ = null; }
            if (($_S_TOTAL_ORPHAN_ || $_S_VERSIONCHECK_)) {
                // line 145
                echo "\t<tr>
\t";
                // line 146
                if (isset($context["S_VERSIONCHECK"])) { $_S_VERSIONCHECK_ = $context["S_VERSIONCHECK"]; } else { $_S_VERSIONCHECK_ = null; }
                if ($_S_VERSIONCHECK_) {
                    // line 147
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb')->lang("BOARD_VERSION");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " </td>
\t\t<td>
\t\t\t<strong><a href=\"";
                    // line 149
                    if (isset($context["U_VERSIONCHECK"])) { $_U_VERSIONCHECK_ = $context["U_VERSIONCHECK"]; } else { $_U_VERSIONCHECK_ = null; }
                    echo $_U_VERSIONCHECK_;
                    echo "\" ";
                    if (isset($context["S_VERSION_UP_TO_DATE"])) { $_S_VERSION_UP_TO_DATE_ = $context["S_VERSION_UP_TO_DATE"]; } else { $_S_VERSION_UP_TO_DATE_ = null; }
                    if (isset($context["S_VERSIONCHECK_FAIL"])) { $_S_VERSIONCHECK_FAIL_ = $context["S_VERSIONCHECK_FAIL"]; } else { $_S_VERSIONCHECK_FAIL_ = null; }
                    if ($_S_VERSION_UP_TO_DATE_) {
                        echo "style=\"color: #228822;\" ";
                    } elseif ( !$_S_VERSIONCHECK_FAIL_) {
                        echo "style=\"color: #BC2A4D;\" ";
                    }
                    echo "title=\"";
                    echo $this->env->getExtension('phpbb')->lang("MORE_INFORMATION");
                    echo "\">";
                    if (isset($context["BOARD_VERSION"])) { $_BOARD_VERSION_ = $context["BOARD_VERSION"]; } else { $_BOARD_VERSION_ = null; }
                    echo $_BOARD_VERSION_;
                    echo "</a></strong> [&nbsp;<a href=\"";
                    if (isset($context["U_VERSIONCHECK_FORCE"])) { $_U_VERSIONCHECK_FORCE_ = $context["U_VERSIONCHECK_FORCE"]; } else { $_U_VERSIONCHECK_FORCE_ = null; }
                    echo $_U_VERSIONCHECK_FORCE_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
                    echo "</a>&nbsp;]
\t\t</td>
\t";
                }
                // line 152
                echo "\t";
                if (isset($context["S_TOTAL_ORPHAN"])) { $_S_TOTAL_ORPHAN_ = $context["S_TOTAL_ORPHAN"]; } else { $_S_TOTAL_ORPHAN_ = null; }
                if ($_S_TOTAL_ORPHAN_) {
                    // line 153
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb')->lang("NUMBER_ORPHAN");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " </td>
\t\t<td><strong>";
                    // line 154
                    if (isset($context["TOTAL_ORPHAN"])) { $_TOTAL_ORPHAN_ = $context["TOTAL_ORPHAN"]; } else { $_TOTAL_ORPHAN_ = null; }
                    echo $_TOTAL_ORPHAN_;
                    echo "</strong></td>
\t";
                }
                // line 156
                echo "\t";
                if (isset($context["S_TOTAL_ORPHAN"])) { $_S_TOTAL_ORPHAN_ = $context["S_TOTAL_ORPHAN"]; } else { $_S_TOTAL_ORPHAN_ = null; }
                if (isset($context["S_VERSIONCHECK"])) { $_S_VERSIONCHECK_ = $context["S_VERSIONCHECK"]; } else { $_S_VERSIONCHECK_ = null; }
                if (( !$_S_TOTAL_ORPHAN_ ||  !$_S_VERSIONCHECK_)) {
                    // line 157
                    echo "\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t";
                }
                // line 160
                echo "\t</tr>
\t";
            }
            // line 162
            echo "\t</tbody>
\t</table>

\t";
            // line 165
            if (isset($context["S_ACTION_OPTIONS"])) { $_S_ACTION_OPTIONS_ = $context["S_ACTION_OPTIONS"]; } else { $_S_ACTION_OPTIONS_ = null; }
            if ($_S_ACTION_OPTIONS_) {
                // line 166
                echo "\t\t<fieldset>
\t\t\t<legend>";
                // line 167
                echo $this->env->getExtension('phpbb')->lang("STATISTIC_RESYNC_OPTIONS");
                echo "</legend>

\t\t\t<form id=\"action_online_form\" method=\"post\" action=\"";
                // line 169
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\" data-ajax=\"true\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_online\">";
                // line 171
                echo $this->env->getExtension('phpbb')->lang("RESET_ONLINE");
                echo "</label><br /><span>&nbsp;</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"online\" /><input class=\"button2\" type=\"submit\" id=\"action_online\" name=\"action_online\" value=\"";
                // line 172
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t<form id=\"action_date_form\" method=\"post\" action=\"";
                // line 176
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\" data-ajax=\"true\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_date\">";
                // line 178
                echo $this->env->getExtension('phpbb')->lang("RESET_DATE");
                echo "</label><br /><span>&nbsp;</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"date\" /><input class=\"button2\" type=\"submit\" id=\"action_date\" name=\"action_date\" value=\"";
                // line 179
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t<form id=\"action_stats_form\" method=\"post\" action=\"";
                // line 183
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_stats\">";
                // line 185
                echo $this->env->getExtension('phpbb')->lang("RESYNC_STATS");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("RESYNC_STATS_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"stats\" /><input class=\"button2\" type=\"submit\" id=\"action_stats\" name=\"action_stats\" value=\"";
                // line 186
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t<form id=\"action_user_form\" method=\"post\" action=\"";
                // line 190
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_user\">";
                // line 192
                echo $this->env->getExtension('phpbb')->lang("RESYNC_POSTCOUNTS");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("RESYNC_POSTCOUNTS_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"user\" /><input class=\"button2\" type=\"submit\" id=\"action_user\" name=\"action_user\" value=\"";
                // line 193
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t<form id=\"action_db_track_form\" method=\"post\" action=\"";
                // line 197
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_db_track\">";
                // line 199
                echo $this->env->getExtension('phpbb')->lang("RESYNC_POST_MARKING");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("RESYNC_POST_MARKING_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"db_track\" /><input class=\"button2\" type=\"submit\" id=\"action_db_track\" name=\"action_db_track\" value=\"";
                // line 200
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t";
                // line 204
                if (isset($context["S_FOUNDER"])) { $_S_FOUNDER_ = $context["S_FOUNDER"]; } else { $_S_FOUNDER_ = null; }
                if ($_S_FOUNDER_) {
                    // line 205
                    echo "\t\t\t<form id=\"action_purge_sessions_form\" method=\"post\" action=\"";
                    if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                    echo $_U_ACTION_;
                    echo "\" data-ajax=\"true\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_purge_sessions\">";
                    // line 207
                    echo $this->env->getExtension('phpbb')->lang("PURGE_SESSIONS");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("PURGE_SESSIONS_EXPLAIN");
                    echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"purge_sessions\" /><input class=\"button2\" type=\"submit\" id=\"action_purge_sessions\" name=\"action_purge_sessions\" value=\"";
                    // line 208
                    echo $this->env->getExtension('phpbb')->lang("RUN");
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>
\t\t\t";
                }
                // line 212
                echo "
\t\t\t<form id=\"action_purge_cache_form\" method=\"post\" action=\"";
                // line 213
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\" data-ajax=\"true\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_purge_cache\">";
                // line 215
                echo $this->env->getExtension('phpbb')->lang("PURGE_CACHE");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("PURGE_CACHE_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"purge_cache\" /><input class=\"button2\" type=\"submit\" id=\"action_purge_cache\" name=\"action_purge_cache\" value=\"";
                // line 216
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t";
                // line 220
                if (isset($context["acp_main_actions_append"])) { $_acp_main_actions_append_ = $context["acp_main_actions_append"]; } else { $_acp_main_actions_append_ = null; }
                // line 221
                echo "  \t\t</fieldset>
\t";
            }
            // line 223
            echo "
\t";
            // line 224
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "log", array()))) {
                // line 225
                echo "\t\t<h2>";
                echo $this->env->getExtension('phpbb')->lang("ADMIN_LOG");
                echo "</h2>

\t\t<p>";
                // line 227
                echo $this->env->getExtension('phpbb')->lang("ADMIN_LOG_INDEX_EXPLAIN");
                echo "</p>

\t\t<div style=\"text-align: right;\"><a href=\"";
                // line 229
                if (isset($context["U_ADMIN_LOG"])) { $_U_ADMIN_LOG_ = $context["U_ADMIN_LOG"]; } else { $_U_ADMIN_LOG_ = null; }
                echo $_U_ADMIN_LOG_;
                echo "\">&raquo; ";
                echo $this->env->getExtension('phpbb')->lang("VIEW_ADMIN_LOG");
                echo "</a></div>

\t\t<table class=\"table1 zebra-table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 234
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo "</th>
\t\t\t<th>";
                // line 235
                echo $this->env->getExtension('phpbb')->lang("IP");
                echo "</th>
\t\t\t<th>";
                // line 236
                echo $this->env->getExtension('phpbb')->lang("TIME");
                echo "</th>
\t\t\t<th>";
                // line 237
                echo $this->env->getExtension('phpbb')->lang("ACTION");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 241
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "log", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                    // line 242
                    echo "\t\t\t<tr>
\t\t\t\t<td>";
                    // line 243
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo $this->getAttribute($_log_, "USERNAME", array());
                    echo "</td>
\t\t\t\t<td style=\"text-align: center;\">";
                    // line 244
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo $this->getAttribute($_log_, "IP", array());
                    echo "</td>
\t\t\t\t<td style=\"text-align: center;\">";
                    // line 245
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo $this->getAttribute($_log_, "DATE", array());
                    echo "</td>
\t\t\t\t<td>";
                    // line 246
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo $this->getAttribute($_log_, "ACTION", array());
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 249
                echo "\t\t</tbody>
\t\t</table>
\t";
            }
            // line 252
            echo "
\t";
            // line 253
            if (isset($context["S_INACTIVE_USERS"])) { $_S_INACTIVE_USERS_ = $context["S_INACTIVE_USERS"]; } else { $_S_INACTIVE_USERS_ = null; }
            if ($_S_INACTIVE_USERS_) {
                // line 254
                echo "\t\t<h2>";
                echo $this->env->getExtension('phpbb')->lang("INACTIVE_USERS");
                echo "</h2>

\t\t<p>";
                // line 256
                echo $this->env->getExtension('phpbb')->lang("INACTIVE_USERS_EXPLAIN_INDEX");
                echo "</p>

\t\t<div style=\"text-align: right;\"><a href=\"";
                // line 258
                if (isset($context["U_INACTIVE_USERS"])) { $_U_INACTIVE_USERS_ = $context["U_INACTIVE_USERS"]; } else { $_U_INACTIVE_USERS_ = null; }
                echo $_U_INACTIVE_USERS_;
                echo "\">&raquo; ";
                echo $this->env->getExtension('phpbb')->lang("VIEW_INACTIVE_USERS");
                echo "</a></div>

\t\t<table class=\"table1 zebra-table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 263
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo "</th>
\t\t\t<th>";
                // line 264
                echo $this->env->getExtension('phpbb')->lang("JOINED");
                echo "</th>
\t\t\t<th>";
                // line 265
                echo $this->env->getExtension('phpbb')->lang("INACTIVE_DATE");
                echo "</th>
\t\t\t<th>";
                // line 266
                echo $this->env->getExtension('phpbb')->lang("LAST_VISIT");
                echo "</th>
\t\t\t<th>";
                // line 267
                echo $this->env->getExtension('phpbb')->lang("INACTIVE_REASON");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 271
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "inactive", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["inactive"]) {
                    // line 272
                    echo "\t\t\t<tr>
\t\t\t\t<td style=\"vertical-align: top;\">
\t\t\t\t\t";
                    // line 274
                    if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
                    echo $this->getAttribute($_inactive_, "USERNAME_FULL", array());
                    echo "
\t\t\t\t\t";
                    // line 275
                    if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
                    if ($this->getAttribute($_inactive_, "POSTS", array())) {
                        echo "<br />";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
                        echo $this->getAttribute($_inactive_, "POSTS", array());
                        echo "</strong> [<a href=\"";
                        if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
                        echo $this->getAttribute($_inactive_, "U_SEARCH_USER", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                        echo "</a>]";
                    }
                    // line 276
                    echo "\t\t\t\t</td>
\t\t\t\t<td style=\"vertical-align: top;\">";
                    // line 277
                    if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
                    echo $this->getAttribute($_inactive_, "JOINED", array());
                    echo "</td>
\t\t\t\t<td style=\"vertical-align: top;\">";
                    // line 278
                    if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
                    echo $this->getAttribute($_inactive_, "INACTIVE_DATE", array());
                    echo "</td>
\t\t\t\t<td style=\"vertical-align: top;\">";
                    // line 279
                    if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
                    echo $this->getAttribute($_inactive_, "LAST_VISIT", array());
                    echo "</td>
\t\t\t\t<td style=\"vertical-align: top;\">
\t\t\t\t\t";
                    // line 281
                    if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
                    echo $this->getAttribute($_inactive_, "REASON", array());
                    echo "
\t\t\t\t\t";
                    // line 282
                    if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
                    if ($this->getAttribute($_inactive_, "REMINDED", array())) {
                        echo "<br />";
                        if (isset($context["inactive"])) { $_inactive_ = $context["inactive"]; } else { $_inactive_ = null; }
                        echo $this->getAttribute($_inactive_, "REMINDED_EXPLAIN", array());
                    }
                    // line 283
                    echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 286
                    echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"5\" style=\"text-align: center;\">";
                    // line 287
                    echo $this->env->getExtension('phpbb')->lang("NO_INACTIVE_USERS");
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inactive'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 290
                echo "\t\t</tbody>
\t\t</table>
\t";
            }
            // line 293
            echo "
";
        }
        // line 295
        echo "
";
        // line 296
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_main.html", 296)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  918 => 296,  915 => 295,  911 => 293,  906 => 290,  897 => 287,  894 => 286,  887 => 283,  880 => 282,  875 => 281,  869 => 279,  864 => 278,  859 => 277,  856 => 276,  840 => 275,  835 => 274,  831 => 272,  825 => 271,  818 => 267,  814 => 266,  810 => 265,  806 => 264,  802 => 263,  791 => 258,  786 => 256,  780 => 254,  777 => 253,  774 => 252,  769 => 249,  759 => 246,  754 => 245,  749 => 244,  744 => 243,  741 => 242,  736 => 241,  729 => 237,  725 => 236,  721 => 235,  717 => 234,  706 => 229,  701 => 227,  695 => 225,  692 => 224,  689 => 223,  685 => 221,  683 => 220,  676 => 216,  670 => 215,  664 => 213,  661 => 212,  654 => 208,  648 => 207,  641 => 205,  638 => 204,  631 => 200,  625 => 199,  619 => 197,  612 => 193,  606 => 192,  600 => 190,  593 => 186,  587 => 185,  581 => 183,  574 => 179,  570 => 178,  564 => 176,  557 => 172,  553 => 171,  547 => 169,  542 => 167,  539 => 166,  536 => 165,  531 => 162,  527 => 160,  522 => 157,  517 => 156,  511 => 154,  505 => 153,  501 => 152,  476 => 149,  469 => 147,  466 => 146,  463 => 145,  459 => 144,  453 => 142,  448 => 141,  443 => 140,  438 => 139,  431 => 136,  426 => 135,  421 => 134,  416 => 133,  409 => 130,  404 => 129,  399 => 128,  394 => 127,  385 => 122,  380 => 121,  375 => 120,  370 => 119,  363 => 116,  358 => 115,  353 => 114,  348 => 113,  341 => 110,  336 => 109,  331 => 108,  326 => 107,  319 => 104,  314 => 103,  309 => 102,  304 => 101,  296 => 96,  292 => 95,  288 => 94,  284 => 93,  277 => 89,  273 => 87,  271 => 86,  268 => 85,  262 => 82,  259 => 81,  256 => 80,  253 => 79,  247 => 76,  244 => 75,  241 => 74,  238 => 73,  235 => 72,  229 => 69,  225 => 68,  222 => 67,  219 => 66,  216 => 65,  210 => 62,  206 => 61,  203 => 60,  200 => 59,  197 => 58,  191 => 55,  187 => 54,  184 => 53,  181 => 52,  178 => 51,  172 => 48,  168 => 47,  165 => 46,  161 => 45,  158 => 44,  155 => 43,  149 => 40,  145 => 39,  142 => 38,  139 => 37,  136 => 36,  130 => 33,  126 => 32,  123 => 31,  120 => 30,  117 => 29,  103 => 26,  99 => 25,  96 => 24,  82 => 21,  77 => 20,  73 => 19,  70 => 18,  66 => 17,  61 => 15,  56 => 13,  53 => 12,  47 => 9,  42 => 7,  39 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <!-- IF S_RESTORE_PERMISSIONS -->*/
/* */
/* 	<h1>{L_PERMISSIONS_TRANSFERRED}</h1>*/
/* */
/* 	<p>{L_PERMISSIONS_TRANSFERRED_EXPLAIN}</p>*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<h1>{L_WELCOME_PHPBB}</h1>*/
/* */
/* 	<p>{L_ADMIN_INTRO}</p>*/
/* */
/* 	<!-- IF S_VERSIONCHECK_FAIL -->*/
/* 		<div class="errorbox notice">*/
/* 			<p>{L_VERSIONCHECK_FAIL}</p>*/
/* 			<p>{VERSIONCHECK_FAIL_REASON}</p>*/
/* 			<p><a href="{U_VERSIONCHECK_FORCE}">{L_VERSIONCHECK_FORCE_UPDATE}</a> &middot; <a href="{U_VERSIONCHECK}">{L_MORE_INFORMATION}</a></p>*/
/* 		</div>*/
/* 	<!-- ELSEIF not S_VERSION_UP_TO_DATE -->*/
/* 		<div class="errorbox">*/
/* 			<p>{L_VERSION_NOT_UP_TO_DATE_TITLE}</p>*/
/* 			<p><a href="{U_VERSIONCHECK_FORCE}">{L_VERSIONCHECK_FORCE_UPDATE}</a> &middot; <a href="{U_VERSIONCHECK}">{L_MORE_INFORMATION}</a></p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_SEARCH_INDEX_MISSING -->*/
/* 		<div class="errorbox">*/
/* 			<h3>{L_WARNING}</h3>*/
/* 			<p>{L_NO_SEARCH_INDEX}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_REMOVE_INSTALL -->*/
/* 		<div class="errorbox">*/
/* 			<h3>{L_WARNING}</h3>*/
/* 			<p>{L_REMOVE_INSTALL}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_MBSTRING_LOADED -->*/
/* 		<!-- IF S_MBSTRING_FUNC_OVERLOAD_FAIL -->*/
/* 			<div class="errorbox">*/
/* 				<h3>{L_ERROR_MBSTRING_FUNC_OVERLOAD}</h3>*/
/* 				<p>{L_ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN}</p>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF S_MBSTRING_ENCODING_TRANSLATION_FAIL -->*/
/* 			<div class="errorbox">*/
/* 				<h3>{L_ERROR_MBSTRING_ENCODING_TRANSLATION}</h3>*/
/* 				<p>{L_ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN}</p>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF S_MBSTRING_HTTP_INPUT_FAIL -->*/
/* 			<div class="errorbox">*/
/* 				<h3>{L_ERROR_MBSTRING_HTTP_INPUT}</h3>*/
/* 				<p>{L_ERROR_MBSTRING_HTTP_INPUT_EXPLAIN}</p>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF S_MBSTRING_HTTP_OUTPUT_FAIL -->*/
/* 			<div class="errorbox">*/
/* 				<h3>{L_ERROR_MBSTRING_HTTP_OUTPUT}</h3>*/
/* 				<p>{L_ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN}</p>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_WRITABLE_CONFIG -->*/
/* 		<div class="errorbox notice">*/
/* 			<p>{L_WRITABLE_CONFIG}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_PHP_VERSION_OLD -->*/
/* 		<div class="errorbox notice">*/
/* 			<p>{L_PHP_VERSION_OLD}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT acp_main_notice_after -->*/
/* */
/* 	<table class="table1 two-columns no-header" data-no-responsive-header="true">*/
/* 		<caption>{L_FORUM_STATS}</caption>*/
/* 		<col class="col1" /><col class="col2" /><col class="col1" /><col class="col2" />*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>{L_STATISTIC}</th>*/
/* 		<th>{L_VALUE}</th>*/
/* 		<th>{L_STATISTIC}</th>*/
/* 		<th>{L_VALUE}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 		<td>{L_NUMBER_POSTS}{L_COLON} </td>*/
/* 		<td><strong>{TOTAL_POSTS}</strong></td>*/
/* 		<td>{L_POSTS_PER_DAY}{L_COLON} </td>*/
/* 		<td><strong>{POSTS_PER_DAY}</strong></td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>{L_NUMBER_TOPICS}{L_COLON} </td>*/
/* 		<td><strong>{TOTAL_TOPICS}</strong></td>*/
/* 		<td>{L_TOPICS_PER_DAY}{L_COLON} </td>*/
/* 		<td><strong>{TOPICS_PER_DAY}</strong></td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>{L_NUMBER_USERS}{L_COLON} </td>*/
/* 		<td><strong>{TOTAL_USERS}</strong></td>*/
/* 		<td>{L_USERS_PER_DAY}{L_COLON} </td>*/
/* 		<td><strong>{USERS_PER_DAY}</strong></td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>{L_NUMBER_FILES}{L_COLON} </td>*/
/* 		<td><strong>{TOTAL_FILES}</strong></td>*/
/* 		<td>{L_FILES_PER_DAY}{L_COLON} </td>*/
/* 		<td><strong>{FILES_PER_DAY}</strong></td>*/
/* 	</tr>*/
/* */
/* */
/* 	<tr>*/
/* 		<td>{L_BOARD_STARTED}{L_COLON} </td>*/
/* 		<td><strong>{START_DATE}</strong></td>*/
/* 		<td>{L_AVATAR_DIR_SIZE}{L_COLON} </td>*/
/* 		<td><strong>{AVATAR_DIR_SIZE}</strong></td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>{L_DATABASE_SIZE}{L_COLON} </td>*/
/* 		<td><strong>{DBSIZE}</strong></td>*/
/* 		<td>{L_UPLOAD_DIR_SIZE}{L_COLON} </td>*/
/* 		<td><strong>{UPLOAD_DIR_SIZE}</strong></td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>{L_DATABASE_SERVER_INFO}{L_COLON} </td>*/
/* 		<td><strong>{DATABASE_INFO}</strong></td>*/
/* 		<td>{L_GZIP_COMPRESSION}{L_COLON} </td>*/
/* 		<td><strong>{GZIP_COMPRESSION}</strong></td>*/
/* 	</tr>*/
/* 	<!-- IF S_TOTAL_ORPHAN or S_VERSIONCHECK -->*/
/* 	<tr>*/
/* 	<!-- IF S_VERSIONCHECK -->*/
/* 		<td>{L_BOARD_VERSION}{L_COLON} </td>*/
/* 		<td>*/
/* 			<strong><a href="{U_VERSIONCHECK}" <!-- IF S_VERSION_UP_TO_DATE -->style="color: #228822;" <!-- ELSEIF not S_VERSIONCHECK_FAIL -->style="color: #BC2A4D;" <!-- ENDIF -->title="{L_MORE_INFORMATION}">{BOARD_VERSION}</a></strong> [&nbsp;<a href="{U_VERSIONCHECK_FORCE}">{L_VERSIONCHECK_FORCE_UPDATE}</a>&nbsp;]*/
/* 		</td>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_TOTAL_ORPHAN -->*/
/* 		<td>{L_NUMBER_ORPHAN}{L_COLON} </td>*/
/* 		<td><strong>{TOTAL_ORPHAN}</strong></td>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF not S_TOTAL_ORPHAN or not S_VERSIONCHECK -->*/
/* 		<td>&nbsp;</td>*/
/* 		<td>&nbsp;</td>*/
/* 	<!-- ENDIF -->*/
/* 	</tr>*/
/* 	<!-- ENDIF -->*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* 	<!-- IF S_ACTION_OPTIONS -->*/
/* 		<fieldset>*/
/* 			<legend>{L_STATISTIC_RESYNC_OPTIONS}</legend>*/
/* */
/* 			<form id="action_online_form" method="post" action="{U_ACTION}" data-ajax="true">*/
/* 				<dl>*/
/* 					<dt><label for="action_online">{L_RESET_ONLINE}</label><br /><span>&nbsp;</span></dt>*/
/* 					<dd><input type="hidden" name="action" value="online" /><input class="button2" type="submit" id="action_online" name="action_online" value="{L_RUN}" /></dd>*/
/* 				</dl>*/
/* 			</form>*/
/* */
/* 			<form id="action_date_form" method="post" action="{U_ACTION}" data-ajax="true">*/
/* 				<dl>*/
/* 					<dt><label for="action_date">{L_RESET_DATE}</label><br /><span>&nbsp;</span></dt>*/
/* 					<dd><input type="hidden" name="action" value="date" /><input class="button2" type="submit" id="action_date" name="action_date" value="{L_RUN}" /></dd>*/
/* 				</dl>*/
/* 			</form>*/
/* */
/* 			<form id="action_stats_form" method="post" action="{U_ACTION}">*/
/* 				<dl>*/
/* 					<dt><label for="action_stats">{L_RESYNC_STATS}</label><br /><span>{L_RESYNC_STATS_EXPLAIN}</span></dt>*/
/* 					<dd><input type="hidden" name="action" value="stats" /><input class="button2" type="submit" id="action_stats" name="action_stats" value="{L_RUN}" /></dd>*/
/* 				</dl>*/
/* 			</form>*/
/* */
/* 			<form id="action_user_form" method="post" action="{U_ACTION}">*/
/* 				<dl>*/
/* 					<dt><label for="action_user">{L_RESYNC_POSTCOUNTS}</label><br /><span>{L_RESYNC_POSTCOUNTS_EXPLAIN}</span></dt>*/
/* 					<dd><input type="hidden" name="action" value="user" /><input class="button2" type="submit" id="action_user" name="action_user" value="{L_RUN}" /></dd>*/
/* 				</dl>*/
/* 			</form>*/
/* */
/* 			<form id="action_db_track_form" method="post" action="{U_ACTION}">*/
/* 				<dl>*/
/* 					<dt><label for="action_db_track">{L_RESYNC_POST_MARKING}</label><br /><span>{L_RESYNC_POST_MARKING_EXPLAIN}</span></dt>*/
/* 					<dd><input type="hidden" name="action" value="db_track" /><input class="button2" type="submit" id="action_db_track" name="action_db_track" value="{L_RUN}" /></dd>*/
/* 				</dl>*/
/* 			</form>*/
/* */
/* 			<!-- IF S_FOUNDER -->*/
/* 			<form id="action_purge_sessions_form" method="post" action="{U_ACTION}" data-ajax="true">*/
/* 				<dl>*/
/* 					<dt><label for="action_purge_sessions">{L_PURGE_SESSIONS}</label><br /><span>{L_PURGE_SESSIONS_EXPLAIN}</span></dt>*/
/* 					<dd><input type="hidden" name="action" value="purge_sessions" /><input class="button2" type="submit" id="action_purge_sessions" name="action_purge_sessions" value="{L_RUN}" /></dd>*/
/* 				</dl>*/
/* 			</form>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<form id="action_purge_cache_form" method="post" action="{U_ACTION}" data-ajax="true">*/
/* 				<dl>*/
/* 					<dt><label for="action_purge_cache">{L_PURGE_CACHE}</label><br /><span>{L_PURGE_CACHE_EXPLAIN}</span></dt>*/
/* 					<dd><input type="hidden" name="action" value="purge_cache" /><input class="button2" type="submit" id="action_purge_cache" name="action_purge_cache" value="{L_RUN}" /></dd>*/
/* 				</dl>*/
/* 			</form>*/
/* */
/* 			<!-- EVENT acp_main_actions_append -->*/
/*   		</fieldset>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF .log -->*/
/* 		<h2>{L_ADMIN_LOG}</h2>*/
/* */
/* 		<p>{L_ADMIN_LOG_INDEX_EXPLAIN}</p>*/
/* */
/* 		<div style="text-align: right;"><a href="{U_ADMIN_LOG}">&raquo; {L_VIEW_ADMIN_LOG}</a></div>*/
/* */
/* 		<table class="table1 zebra-table">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th>{L_USERNAME}</th>*/
/* 			<th>{L_IP}</th>*/
/* 			<th>{L_TIME}</th>*/
/* 			<th>{L_ACTION}</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		<!-- BEGIN log -->*/
/* 			<tr>*/
/* 				<td>{log.USERNAME}</td>*/
/* 				<td style="text-align: center;">{log.IP}</td>*/
/* 				<td style="text-align: center;">{log.DATE}</td>*/
/* 				<td>{log.ACTION}</td>*/
/* 			</tr>*/
/* 		<!-- END log -->*/
/* 		</tbody>*/
/* 		</table>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_INACTIVE_USERS -->*/
/* 		<h2>{L_INACTIVE_USERS}</h2>*/
/* */
/* 		<p>{L_INACTIVE_USERS_EXPLAIN_INDEX}</p>*/
/* */
/* 		<div style="text-align: right;"><a href="{U_INACTIVE_USERS}">&raquo; {L_VIEW_INACTIVE_USERS}</a></div>*/
/* */
/* 		<table class="table1 zebra-table">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th>{L_USERNAME}</th>*/
/* 			<th>{L_JOINED}</th>*/
/* 			<th>{L_INACTIVE_DATE}</th>*/
/* 			<th>{L_LAST_VISIT}</th>*/
/* 			<th>{L_INACTIVE_REASON}</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		<!-- BEGIN inactive -->*/
/* 			<tr>*/
/* 				<td style="vertical-align: top;">*/
/* 					{inactive.USERNAME_FULL}*/
/* 					<!-- IF inactive.POSTS --><br />{L_POSTS}{L_COLON} <strong>{inactive.POSTS}</strong> [<a href="{inactive.U_SEARCH_USER}">{L_SEARCH_USER_POSTS}</a>]<!-- ENDIF -->*/
/* 				</td>*/
/* 				<td style="vertical-align: top;">{inactive.JOINED}</td>*/
/* 				<td style="vertical-align: top;">{inactive.INACTIVE_DATE}</td>*/
/* 				<td style="vertical-align: top;">{inactive.LAST_VISIT}</td>*/
/* 				<td style="vertical-align: top;">*/
/* 					{inactive.REASON}*/
/* 					<!-- IF inactive.REMINDED --><br />{inactive.REMINDED_EXPLAIN}<!-- ENDIF -->*/
/* 				</td>*/
/* 			</tr>*/
/* 		<!-- BEGINELSE -->*/
/* 			<tr>*/
/* 				<td colspan="5" style="text-align: center;">{L_NO_INACTIVE_USERS}</td>*/
/* 			</tr>*/
/* 		<!-- END inactive -->*/
/* 		</tbody>*/
/* 		</table>*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
