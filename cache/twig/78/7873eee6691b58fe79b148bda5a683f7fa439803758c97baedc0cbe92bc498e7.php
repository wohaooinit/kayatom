<?php

/* search_results.html */
class __TwigTemplate_b64db5bb747b1d3edfefc472202359049aa408811b07355230340a7553fcece9 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (isset($context["search_results_header_before"])) { $_search_results_header_before_ = $context["search_results_header_before"]; } else { $_search_results_header_before_ = null; }
        // line 4
        echo "
<h2 class=\"searchresults-title\">";
        // line 5
        if (isset($context["SEARCH_TITLE"])) { $_SEARCH_TITLE_ = $context["SEARCH_TITLE"]; } else { $_SEARCH_TITLE_ = null; }
        if ($_SEARCH_TITLE_) {
            if (isset($context["SEARCH_TITLE"])) { $_SEARCH_TITLE_ = $context["SEARCH_TITLE"]; } else { $_SEARCH_TITLE_ = null; }
            echo $_SEARCH_TITLE_;
        } else {
            if (isset($context["SEARCH_MATCHES"])) { $_SEARCH_MATCHES_ = $context["SEARCH_MATCHES"]; } else { $_SEARCH_MATCHES_ = null; }
            echo $_SEARCH_MATCHES_;
        }
        if (isset($context["SEARCH_WORDS"])) { $_SEARCH_WORDS_ = $context["SEARCH_WORDS"]; } else { $_SEARCH_WORDS_ = null; }
        if ($_SEARCH_WORDS_) {
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <a href=\"";
            if (isset($context["U_SEARCH_WORDS"])) { $_U_SEARCH_WORDS_ = $context["U_SEARCH_WORDS"]; } else { $_U_SEARCH_WORDS_ = null; }
            echo $_U_SEARCH_WORDS_;
            echo "\">";
            if (isset($context["SEARCH_WORDS"])) { $_SEARCH_WORDS_ = $context["SEARCH_WORDS"]; } else { $_SEARCH_WORDS_ = null; }
            echo $_SEARCH_WORDS_;
            echo "</a>";
        }
        echo "</h2>
";
        // line 6
        if (isset($context["SEARCHED_QUERY"])) { $_SEARCHED_QUERY_ = $context["SEARCHED_QUERY"]; } else { $_SEARCHED_QUERY_ = null; }
        if ($_SEARCHED_QUERY_) {
            echo " <p>";
            echo $this->env->getExtension('phpbb')->lang("SEARCHED_QUERY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            if (isset($context["SEARCHED_QUERY"])) { $_SEARCHED_QUERY_ = $context["SEARCHED_QUERY"]; } else { $_SEARCHED_QUERY_ = null; }
            echo $_SEARCHED_QUERY_;
            echo "</strong></p>";
        }
        // line 7
        if (isset($context["IGNORED_WORDS"])) { $_IGNORED_WORDS_ = $context["IGNORED_WORDS"]; } else { $_IGNORED_WORDS_ = null; }
        if ($_IGNORED_WORDS_) {
            echo " <p>";
            echo $this->env->getExtension('phpbb')->lang("IGNORED_TERMS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            if (isset($context["IGNORED_WORDS"])) { $_IGNORED_WORDS_ = $context["IGNORED_WORDS"]; } else { $_IGNORED_WORDS_ = null; }
            echo $_IGNORED_WORDS_;
            echo "</strong></p>";
        }
        // line 8
        if (isset($context["PHRASE_SEARCH_DISABLED"])) { $_PHRASE_SEARCH_DISABLED_ = $context["PHRASE_SEARCH_DISABLED"]; } else { $_PHRASE_SEARCH_DISABLED_ = null; }
        if ($_PHRASE_SEARCH_DISABLED_) {
            echo " <p><strong>";
            echo $this->env->getExtension('phpbb')->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 9
        echo "
";
        // line 10
        if (isset($context["SEARCH_TOPIC"])) { $_SEARCH_TOPIC_ = $context["SEARCH_TOPIC"]; } else { $_SEARCH_TOPIC_ = null; }
        if ($_SEARCH_TOPIC_) {
            // line 11
            echo "\t<p class=\"return-link\"><a class=\"arrow-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo "\" href=\"";
            if (isset($context["U_SEARCH_TOPIC"])) { $_U_SEARCH_TOPIC_ = $context["U_SEARCH_TOPIC"]; } else { $_U_SEARCH_TOPIC_ = null; }
            echo $_U_SEARCH_TOPIC_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        } else {
            // line 13
            echo "\t<p class=\"advanced-search-link\"><a class=\"arrow-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo "\" href=\"";
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 15
        echo "
";
        // line 16
        if (isset($context["search_results_header_after"])) { $_search_results_header_after_ = $context["search_results_header_after"]; } else { $_search_results_header_after_ = null; }
        // line 17
        echo "
";
        // line 18
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["SEARCH_MATCHES"])) { $_SEARCH_MATCHES_ = $context["SEARCH_MATCHES"]; } else { $_SEARCH_MATCHES_ = null; }
        if (isset($context["TOTAL_MATCHES"])) { $_TOTAL_MATCHES_ = $context["TOTAL_MATCHES"]; } else { $_TOTAL_MATCHES_ = null; }
        if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
        if ((((twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array())) || $_SEARCH_MATCHES_) || $_TOTAL_MATCHES_) || $_PAGE_NUMBER_)) {
            // line 19
            echo "\t<div class=\"action-bar top\">

\t";
            // line 21
            if (isset($context["TOTAL_MATCHES"])) { $_TOTAL_MATCHES_ = $context["TOTAL_MATCHES"]; } else { $_TOTAL_MATCHES_ = null; }
            if (($_TOTAL_MATCHES_ > 0)) {
                // line 22
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"post\" action=\"";
                // line 23
                if (isset($context["S_SEARCH_ACTION"])) { $_S_SEARCH_ACTION_ = $context["S_SEARCH_ACTION"]; } else { $_S_SEARCH_ACTION_ = null; }
                echo $_S_SEARCH_ACTION_;
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"add_keywords\" id=\"add_keywords\" value=\"\" placeholder=\"";
                // line 25
                echo $this->env->getExtension('phpbb')->lang("SEARCH_IN_RESULTS");
                echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
                // line 26
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</button>
\t\t\t\t<a href=\"";
                // line 27
                if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
                echo $_U_SEARCH_;
                echo "\" class=\"button icon-button search-adv-icon\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "</a>
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 32
            echo "
\t\t";
            // line 33
            if (isset($context["search_results_searchbox_after"])) { $_search_results_searchbox_after_ = $context["search_results_searchbox_after"]; } else { $_search_results_searchbox_after_ = null; }
            // line 34
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 36
            if (isset($context["U_MARK_ALL_READ"])) { $_U_MARK_ALL_READ_ = $context["U_MARK_ALL_READ"]; } else { $_U_MARK_ALL_READ_ = null; }
            if ($_U_MARK_ALL_READ_) {
                echo "<a href=\"";
                if (isset($context["U_MARK_ALL_READ"])) { $_U_MARK_ALL_READ_ = $context["U_MARK_ALL_READ"]; } else { $_U_MARK_ALL_READ_ = null; }
                echo $_U_MARK_ALL_READ_;
                echo "\" class=\"mark-read\" accesskey=\"m\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL_READ");
                echo "</a> &bull;";
            }
            // line 37
            echo "\t\t\t";
            if (isset($context["SEARCH_MATCHES"])) { $_SEARCH_MATCHES_ = $context["SEARCH_MATCHES"]; } else { $_SEARCH_MATCHES_ = null; }
            echo $_SEARCH_MATCHES_;
            echo "
\t\t\t";
            // line 38
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                // line 39
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 39)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 40
                echo "\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t &bull; ";
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t";
            }
            // line 43
            echo "\t\t</div>
\t</div>
";
        }
        // line 46
        echo "
";
        // line 47
        if (isset($context["S_SHOW_TOPICS"])) { $_S_SHOW_TOPICS_ = $context["S_SHOW_TOPICS"]; } else { $_S_SHOW_TOPICS_ = null; }
        if ($_S_SHOW_TOPICS_) {
            // line 48
            echo "
\t";
            // line 49
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "searchresults", array()))) {
                // line 50
                echo "\t<div class=\"forumbg\">

\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 56
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 57
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 58
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 59
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">

\t\t";
                // line 65
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "searchresults", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 66
                    echo "\t\t\t";
                    if (isset($context["search_results_topic_before"])) { $_search_results_topic_before_ = $context["search_results_topic_before"]; } else { $_search_results_topic_before_ = null; }
                    // line 67
                    echo "\t\t\t<li class=\"row";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if (($this->getAttribute($_searchresults_, "S_ROW_COUNT", array()) % 2 == 0)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl class=\"icon ";
                    // line 68
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_IMG_STYLE", array());
                    echo "\">
\t\t\t\t\t<dt ";
                    // line 69
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if ($this->getAttribute($_searchresults_, "TOPIC_ICON_IMG", array())) {
                        echo "style=\"background-image: url(";
                        if (isset($context["T_ICONS_PATH"])) { $_T_ICONS_PATH_ = $context["T_ICONS_PATH"]; } else { $_T_ICONS_PATH_ = null; }
                        echo $_T_ICONS_PATH_;
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "TOPIC_ICON_IMG", array());
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo " title=\"";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_FOLDER_IMG_ALT", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 70
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
                    if (($this->getAttribute($_searchresults_, "S_UNREAD_TOPIC", array()) &&  !$_S_IS_BOT_)) {
                        echo "<a href=\"";
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "U_NEWEST_POST", array());
                        echo "\" class=\"icon-link\"></a>";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t\t";
                    // line 73
                    if (isset($context["topiclist_row_prepend"])) { $_topiclist_row_prepend_ = $context["topiclist_row_prepend"]; } else { $_topiclist_row_prepend_ = null; }
                    // line 74
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
                    if (($this->getAttribute($_searchresults_, "S_UNREAD_TOPIC", array()) &&  !$_S_IS_BOT_)) {
                        echo "<a href=\"";
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "U_NEWEST_POST", array());
                        echo "\">";
                        if (isset($context["NEWEST_POST_IMG"])) { $_NEWEST_POST_IMG_ = $context["NEWEST_POST_IMG"]; } else { $_NEWEST_POST_IMG_ = null; }
                        echo $_NEWEST_POST_IMG_;
                        echo "</a> ";
                    }
                    // line 75
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "U_VIEW_TOPIC", array());
                    echo "\" class=\"topictitle\">";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_TITLE", array());
                    echo "</a> ";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "ATTACH_ICON_IMG", array());
                    echo "
\t\t\t\t\t\t\t";
                    // line 76
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if (($this->getAttribute($_searchresults_, "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($_searchresults_, "S_POSTS_UNAPPROVED", array()))) {
                        echo "<a href=\"";
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "U_MCP_QUEUE", array());
                        echo "\">";
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "UNAPPROVED_IMG", array());
                        echo "</a> ";
                    }
                    // line 77
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if ($this->getAttribute($_searchresults_, "S_TOPIC_DELETED", array())) {
                        echo "<a href=\"";
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "U_MCP_QUEUE", array());
                        echo "\">";
                        if (isset($context["DELETED_IMG"])) { $_DELETED_IMG_ = $context["DELETED_IMG"]; } else { $_DELETED_IMG_ = null; }
                        echo $_DELETED_IMG_;
                        echo "</a> ";
                    }
                    // line 78
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if ($this->getAttribute($_searchresults_, "S_TOPIC_REPORTED", array())) {
                        echo "<a href=\"";
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "U_MCP_REPORT", array());
                        echo "\">";
                        if (isset($context["REPORTED_IMG"])) { $_REPORTED_IMG_ = $context["REPORTED_IMG"]; } else { $_REPORTED_IMG_ = null; }
                        echo $_REPORTED_IMG_;
                        echo "</a>";
                    }
                    echo "<br />
\t\t\t\t\t\t\t";
                    // line 79
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if (twig_length_filter($this->env, $this->getAttribute($_searchresults_, "pagination", array()))) {
                        // line 80
                        echo "\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                        // line 82
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_searchresults_, "pagination", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            // line 83
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                            if ($this->getAttribute($_pagination_, "S_IS_PREV", array())) {
                                // line 84
                                echo "\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute($_pagination_, "S_IS_CURRENT", array())) {
                                echo "<li class=\"active\"><span>";
                                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                                echo $this->getAttribute($_pagination_, "PAGE_NUMBER", array());
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute($_pagination_, "S_IS_ELLIPSIS", array())) {
                                // line 85
                                echo "<li class=\"ellipsis\"><span>";
                                echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute($_pagination_, "S_IS_NEXT", array())) {
                                // line 87
                                echo "\t\t\t\t\t\t\t\t\t";
                            } else {
                                echo "<li><a href=\"";
                                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                                echo $this->getAttribute($_pagination_, "PAGE_URL", array());
                                echo "\">";
                                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                                echo $this->getAttribute($_pagination_, "PAGE_NUMBER", array());
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 89
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 90
                        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 93
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if ($this->getAttribute($_searchresults_, "S_HAS_POLL", array())) {
                        if (isset($context["POLL_IMG"])) { $_POLL_IMG_ = $context["POLL_IMG"]; } else { $_POLL_IMG_ = null; }
                        echo $_POLL_IMG_;
                        echo " ";
                    }
                    // line 94
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_AUTHOR_FULL", array());
                    echo " &raquo; ";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "FIRST_POST_TIME", array());
                    echo " &raquo; ";
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " <a href=\"";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "U_VIEW_FORUM", array());
                    echo "\">";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "FORUM_TITLE", array());
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 95
                    if (isset($context["topiclist_row_append"])) { $_topiclist_row_append_ = $context["topiclist_row_append"]; } else { $_topiclist_row_append_ = null; }
                    // line 96
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 99
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_REPLIES", array());
                    echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                    // line 100
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_VIEWS", array());
                    echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t";
                    // line 102
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "LAST_POST_AUTHOR_FULL", array());
                    echo "
\t\t\t\t\t\t";
                    // line 103
                    if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
                    if ( !$_S_IS_BOT_) {
                        echo "<a href=\"";
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "U_LAST_POST", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                        echo "\">";
                        if (isset($context["LAST_POST_IMG"])) { $_LAST_POST_IMG_ = $context["LAST_POST_IMG"]; } else { $_LAST_POST_IMG_ = null; }
                        echo $_LAST_POST_IMG_;
                        echo "</a> ";
                    }
                    echo "<br />";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "LAST_POST_TIME", array());
                    echo "<br /> </span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                    // line 107
                    if (isset($context["search_results_topic_after"])) { $_search_results_topic_after_ = $context["search_results_topic_after"]; } else { $_search_results_topic_after_ = null; }
                    // line 108
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "\t\t</ul>

\t\t</div>
\t</div>
\t";
            } else {
                // line 114
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 116
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 120
            echo "
";
        } else {
            // line 122
            echo "
\t";
            // line 123
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "searchresults", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 124
                echo "\t\t";
                if (isset($context["search_results_post_before"])) { $_search_results_post_before_ = $context["search_results_post_before"]; } else { $_search_results_post_before_ = null; }
                // line 125
                echo "\t\t<div class=\"search post ";
                if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                if (($this->getAttribute($_searchresults_, "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                if ($this->getAttribute($_searchresults_, "S_POST_REPORTED", array())) {
                    echo " reported";
                }
                echo "\">
\t\t\t<div class=\"inner\">

\t";
                // line 128
                if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                if ($this->getAttribute($_searchresults_, "S_IGNORE_POST", array())) {
                    // line 129
                    echo "\t\t<div class=\"postbody\">
\t\t\t";
                    // line 130
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "L_IGNORE_POST", array());
                    echo "
\t\t</div>
\t";
                } else {
                    // line 133
                    echo "\t\t<dl class=\"postprofile\">
\t\t\t";
                    // line 134
                    if (isset($context["search_results_postprofile_before"])) { $_search_results_postprofile_before_ = $context["search_results_postprofile_before"]; } else { $_search_results_postprofile_before_ = null; }
                    // line 135
                    echo "\t\t\t<dt class=\"author\">";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "POST_AUTHOR_FULL", array());
                    echo "</dt>
\t\t\t<dd class=\"search-result-date\">";
                    // line 136
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "POST_DATE", array());
                    echo "</dd>
\t\t\t<dd>";
                    // line 137
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "U_VIEW_FORUM", array());
                    echo "\">";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "FORUM_TITLE", array());
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 138
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "U_VIEW_TOPIC", array());
                    echo "\">";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_TITLE", array());
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 139
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_REPLIES", array());
                    echo "</strong></dd>
\t\t\t<dd>";
                    // line 140
                    echo $this->env->getExtension('phpbb')->lang("VIEWS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_VIEWS", array());
                    echo "</strong></dd>
\t\t\t";
                    // line 141
                    if (isset($context["search_results_postprofile_after"])) { $_search_results_postprofile_after_ = $context["search_results_postprofile_after"]; } else { $_search_results_postprofile_after_ = null; }
                    // line 142
                    echo "\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t<h3><a href=\"";
                    // line 145
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "U_VIEW_POST", array());
                    echo "\">";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "POST_SUBJECT", array());
                    echo "</a></h3>
\t\t\t<div class=\"content\">";
                    // line 146
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "MESSAGE", array());
                    echo "</div>
\t\t</div>
\t";
                }
                // line 149
                echo "
\t";
                // line 150
                if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                if ( !$this->getAttribute($_searchresults_, "S_IGNORE_POST", array())) {
                    // line 151
                    echo "\t\t<ul class=\"searchresults\">
\t\t\t<li ><a href=\"";
                    // line 152
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "U_VIEW_POST", array());
                    echo "\" class=\"arrow-";
                    if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
                    echo $_S_CONTENT_FLOW_END_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("JUMP_TO_POST");
                    echo "</a></li>
\t\t</ul>
\t";
                }
                // line 155
                echo "
\t\t\t</div>
\t\t</div>
\t\t";
                // line 158
                if (isset($context["search_results_post_after"])) { $_search_results_post_after_ = $context["search_results_post_after"]; } else { $_search_results_post_after_ = null; }
                // line 159
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 160
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 162
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 167
        echo "
";
        // line 168
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
        if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
        if ((((twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array())) || twig_length_filter($this->env, $this->getAttribute($_loops_, "searchresults", array()))) || $_S_SELECT_SORT_KEY_) || $_S_SELECT_SORT_DAYS_)) {
            // line 169
            echo "\t<form method=\"post\" action=\"";
            if (isset($context["S_SEARCH_ACTION"])) { $_S_SEARCH_ACTION_ = $context["S_SEARCH_ACTION"]; } else { $_S_SEARCH_ACTION_ = null; }
            echo $_S_SEARCH_ACTION_;
            echo "\">

\t<fieldset class=\"display-options\">
\t\t";
            // line 172
            if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
            if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
            if (($_S_SELECT_SORT_DAYS_ || $_S_SELECT_SORT_KEY_)) {
                // line 173
                echo "\t\t\t<label>";
                if (isset($context["S_SHOW_TOPICS"])) { $_S_SHOW_TOPICS_ = $context["S_SHOW_TOPICS"]; } else { $_S_SHOW_TOPICS_ = null; }
                if ($_S_SHOW_TOPICS_) {
                    echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                    echo "</label><label>";
                }
                echo " ";
                if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
                echo $_S_SELECT_SORT_DAYS_;
                if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
                if ($_S_SELECT_SORT_KEY_) {
                    echo "</label> <label>";
                    if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
                    echo $_S_SELECT_SORT_KEY_;
                    echo "</label>
\t\t\t<label>";
                    // line 174
                    if (isset($context["S_SELECT_SORT_DIR"])) { $_S_SELECT_SORT_DIR_ = $context["S_SELECT_SORT_DIR"]; } else { $_S_SELECT_SORT_DIR_ = null; }
                    echo $_S_SELECT_SORT_DIR_;
                }
                echo "</label>
\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 175
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t\t";
            }
            // line 177
            echo "\t</fieldset>

\t</form>

\t<hr />
";
        }
        // line 183
        echo "
";
        // line 184
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
        if (((twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array())) || twig_length_filter($this->env, $this->getAttribute($_loops_, "searchresults", array()))) || $_PAGE_NUMBER_)) {
            // line 185
            echo "<div class=\"action-bar bottom\">
\t<div class=\"pagination\">
\t\t";
            // line 187
            if (isset($context["SEARCH_MATCHES"])) { $_SEARCH_MATCHES_ = $context["SEARCH_MATCHES"]; } else { $_SEARCH_MATCHES_ = null; }
            echo $_SEARCH_MATCHES_;
            echo "
\t\t";
            // line 188
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                // line 189
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 189)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 190
                echo "\t\t";
            } else {
                // line 191
                echo "\t\t\t &bull; ";
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t";
            }
            // line 193
            echo "\t</div>
</div>
";
        }
        // line 196
        echo "
";
        // line 197
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "search_results.html", 197)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 198
        echo "
";
        // line 199
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 199)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  834 => 199,  831 => 198,  819 => 197,  816 => 196,  811 => 193,  804 => 191,  801 => 190,  788 => 189,  785 => 188,  780 => 187,  776 => 185,  772 => 184,  769 => 183,  761 => 177,  756 => 175,  750 => 174,  731 => 173,  727 => 172,  719 => 169,  714 => 168,  711 => 167,  700 => 162,  696 => 160,  691 => 159,  689 => 158,  684 => 155,  672 => 152,  669 => 151,  666 => 150,  663 => 149,  656 => 146,  648 => 145,  643 => 142,  641 => 141,  633 => 140,  625 => 139,  614 => 138,  603 => 137,  598 => 136,  590 => 135,  588 => 134,  585 => 133,  578 => 130,  575 => 129,  572 => 128,  556 => 125,  553 => 124,  547 => 123,  544 => 122,  540 => 120,  533 => 116,  529 => 114,  522 => 109,  516 => 108,  514 => 107,  493 => 103,  486 => 102,  480 => 100,  475 => 99,  470 => 96,  468 => 95,  449 => 94,  441 => 93,  436 => 90,  430 => 89,  418 => 87,  412 => 85,  403 => 84,  399 => 83,  394 => 82,  390 => 80,  387 => 79,  373 => 78,  361 => 77,  350 => 76,  338 => 75,  325 => 74,  323 => 73,  319 => 71,  310 => 70,  295 => 69,  290 => 68,  280 => 67,  277 => 66,  272 => 65,  263 => 59,  259 => 58,  255 => 57,  251 => 56,  243 => 50,  240 => 49,  237 => 48,  234 => 47,  231 => 46,  226 => 43,  219 => 41,  216 => 40,  203 => 39,  200 => 38,  194 => 37,  184 => 36,  180 => 34,  178 => 33,  175 => 32,  162 => 27,  156 => 26,  152 => 25,  146 => 23,  143 => 22,  140 => 21,  136 => 19,  130 => 18,  127 => 17,  125 => 16,  122 => 15,  108 => 13,  96 => 11,  93 => 10,  90 => 9,  83 => 8,  72 => 7,  61 => 6,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- EVENT search_results_header_before -->*/
/* */
/* <h2 class="searchresults-title"><!-- IF SEARCH_TITLE -->{SEARCH_TITLE}<!-- ELSE -->{SEARCH_MATCHES}<!-- ENDIF --><!-- IF SEARCH_WORDS -->{L_COLON} <a href="{U_SEARCH_WORDS}">{SEARCH_WORDS}</a><!-- ENDIF --></h2>*/
/* <!-- IF SEARCHED_QUERY --> <p>{L_SEARCHED_QUERY}{L_COLON} <strong>{SEARCHED_QUERY}</strong></p><!-- ENDIF -->*/
/* <!-- IF IGNORED_WORDS --> <p>{L_IGNORED_TERMS}{L_COLON} <strong>{IGNORED_WORDS}</strong></p><!-- ENDIF -->*/
/* <!-- IF PHRASE_SEARCH_DISABLED --> <p><strong>{L_PHRASE_SEARCH_DISABLED}</strong></p><!-- ENDIF -->*/
/* */
/* <!-- IF SEARCH_TOPIC -->*/
/* 	<p class="return-link"><a class="arrow-{S_CONTENT_FLOW_BEGIN}" href="{U_SEARCH_TOPIC}">{L_RETURN_TO_TOPIC}</a></p>*/
/* <!-- ELSE -->*/
/* 	<p class="advanced-search-link"><a class="arrow-{S_CONTENT_FLOW_BEGIN}" href="{U_SEARCH}" title="{L_SEARCH_ADV}">{L_GO_TO_SEARCH_ADV}</a></p>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT search_results_header_after -->*/
/* */
/* <!-- IF .pagination or SEARCH_MATCHES or TOTAL_MATCHES or PAGE_NUMBER -->*/
/* 	<div class="action-bar top">*/
/* */
/* 	<!-- IF TOTAL_MATCHES > 0 -->*/
/* 		<div class="search-box" role="search">*/
/* 			<form method="post" action="{S_SEARCH_ACTION}">*/
/* 			<fieldset>*/
/* 				<input class="inputbox search tiny" type="search" name="add_keywords" id="add_keywords" value="" placeholder="{L_SEARCH_IN_RESULTS}" />*/
/* 				<button class="button icon-button search-icon" type="submit" title="{L_SEARCH}">{L_SEARCH}</button>*/
/* 				<a href="{U_SEARCH}" class="button icon-button search-adv-icon" title="{L_SEARCH_ADV}">{L_SEARCH_ADV}</a>*/
/* 			</fieldset>*/
/* 			</form>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT search_results_searchbox_after -->*/
/* */
/* 		<div class="pagination">*/
/* 			<!-- IF U_MARK_ALL_READ --><a href="{U_MARK_ALL_READ}" class="mark-read" accesskey="m">{L_MARK_ALL_READ}</a> &bull;<!-- ENDIF -->*/
/* 			{SEARCH_MATCHES}*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 				 &bull; {PAGE_NUMBER}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_SHOW_TOPICS -->*/
/* */
/* 	<!-- IF .searchresults -->*/
/* 	<div class="forumbg">*/
/* */
/* 		<div class="inner">*/
/* 		<ul class="topiclist">*/
/* 			<li class="header">*/
/* 				<dl class="icon">*/
/* 					<dt><div class="list-inner">{L_TOPICS}</div></dt>*/
/* 					<dd class="posts">{L_REPLIES}</dd>*/
/* 					<dd class="views">{L_VIEWS}</dd>*/
/* 					<dd class="lastpost"><span>{L_LAST_POST}</span></dd>*/
/* 				</dl>*/
/* 			</li>*/
/* 		</ul>*/
/* 		<ul class="topiclist topics">*/
/* */
/* 		<!-- BEGIN searchresults -->*/
/* 			<!-- EVENT search_results_topic_before -->*/
/* 			<li class="row<!-- IF searchresults.S_ROW_COUNT is even --> bg1<!-- ELSE --> bg2<!-- ENDIF -->">*/
/* 				<dl class="icon {searchresults.TOPIC_IMG_STYLE}">*/
/* 					<dt <!-- IF searchresults.TOPIC_ICON_IMG -->style="background-image: url({T_ICONS_PATH}{searchresults.TOPIC_ICON_IMG}); background-repeat: no-repeat;"<!-- ENDIF --> title="{searchresults.TOPIC_FOLDER_IMG_ALT}">*/
/* 						<!-- IF searchresults.S_UNREAD_TOPIC and not S_IS_BOT --><a href="{searchresults.U_NEWEST_POST}" class="icon-link"></a><!-- ENDIF -->*/
/* 						<div class="list-inner">*/
/* */
/* 							<!-- EVENT topiclist_row_prepend -->*/
/* 							<!-- IF searchresults.S_UNREAD_TOPIC and not S_IS_BOT --><a href="{searchresults.U_NEWEST_POST}">{NEWEST_POST_IMG}</a> <!-- ENDIF -->*/
/* 							<a href="{searchresults.U_VIEW_TOPIC}" class="topictitle">{searchresults.TOPIC_TITLE}</a> {searchresults.ATTACH_ICON_IMG}*/
/* 							<!-- IF searchresults.S_TOPIC_UNAPPROVED or searchresults.S_POSTS_UNAPPROVED --><a href="{searchresults.U_MCP_QUEUE}">{searchresults.UNAPPROVED_IMG}</a> <!-- ENDIF -->*/
/* 							<!-- IF searchresults.S_TOPIC_DELETED --><a href="{searchresults.U_MCP_QUEUE}">{DELETED_IMG}</a> <!-- ENDIF -->*/
/* 							<!-- IF searchresults.S_TOPIC_REPORTED --><a href="{searchresults.U_MCP_REPORT}">{REPORTED_IMG}</a><!-- ENDIF --><br />*/
/* 							<!-- IF .searchresults.pagination -->*/
/* 							<div class="pagination">*/
/* 								<ul>*/
/* 								<!-- BEGIN pagination -->*/
/* 									<!-- IF searchresults.pagination.S_IS_PREV -->*/
/* 									<!-- ELSEIF searchresults.pagination.S_IS_CURRENT --><li class="active"><span>{searchresults.pagination.PAGE_NUMBER}</span></li>*/
/* 									<!-- ELSEIF searchresults.pagination.S_IS_ELLIPSIS --><li class="ellipsis"><span>{L_ELLIPSIS}</span></li>*/
/* 									<!-- ELSEIF searchresults.pagination.S_IS_NEXT -->*/
/* 									<!-- ELSE --><li><a href="{searchresults.pagination.PAGE_URL}">{searchresults.pagination.PAGE_NUMBER}</a></li>*/
/* 									<!-- ENDIF -->*/
/* 								<!-- END pagination -->*/
/* 								</ul>*/
/* 							</div>*/
/* 							<!-- ENDIF -->*/
/* 							<!-- IF searchresults.S_HAS_POLL -->{POLL_IMG} <!-- ENDIF -->*/
/* 							{L_POST_BY_AUTHOR} {searchresults.TOPIC_AUTHOR_FULL} &raquo; {searchresults.FIRST_POST_TIME} &raquo; {L_IN} <a href="{searchresults.U_VIEW_FORUM}">{searchresults.FORUM_TITLE}</a>*/
/* 							<!-- EVENT topiclist_row_append -->*/
/* */
/* 						</div>*/
/* 					</dt>*/
/* 					<dd class="posts">{searchresults.TOPIC_REPLIES}</dd>*/
/* 					<dd class="views">{searchresults.TOPIC_VIEWS}</dd>*/
/* 					<dd class="lastpost"><span>*/
/* 						{L_POST_BY_AUTHOR} {searchresults.LAST_POST_AUTHOR_FULL}*/
/* 						<!-- IF not S_IS_BOT --><a href="{searchresults.U_LAST_POST}" title="{L_GOTO_LAST_POST}">{LAST_POST_IMG}</a> <!-- ENDIF --><br />{searchresults.LAST_POST_TIME}<br /> </span>*/
/* 					</dd>*/
/* 				</dl>*/
/* 			</li>*/
/* 			<!-- EVENT search_results_topic_after -->*/
/* 		<!-- END searchresults -->*/
/* 		</ul>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ELSE -->*/
/* 		<div class="panel">*/
/* 			<div class="inner">*/
/* 			<strong>{L_NO_SEARCH_RESULTS}</strong>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<!-- BEGIN searchresults -->*/
/* 		<!-- EVENT search_results_post_before -->*/
/* 		<div class="search post <!-- IF searchresults.S_ROW_COUNT is odd -->bg1<!-- ELSE -->bg2<!-- ENDIF --><!-- IF searchresults.S_POST_REPORTED --> reported<!-- ENDIF -->">*/
/* 			<div class="inner">*/
/* */
/* 	<!-- IF searchresults.S_IGNORE_POST -->*/
/* 		<div class="postbody">*/
/* 			{searchresults.L_IGNORE_POST}*/
/* 		</div>*/
/* 	<!-- ELSE -->*/
/* 		<dl class="postprofile">*/
/* 			<!-- EVENT search_results_postprofile_before -->*/
/* 			<dt class="author">{L_POST_BY_AUTHOR} {searchresults.POST_AUTHOR_FULL}</dt>*/
/* 			<dd class="search-result-date">{searchresults.POST_DATE}</dd>*/
/* 			<dd>{L_FORUM}{L_COLON} <a href="{searchresults.U_VIEW_FORUM}">{searchresults.FORUM_TITLE}</a></dd>*/
/* 			<dd>{L_TOPIC}{L_COLON} <a href="{searchresults.U_VIEW_TOPIC}">{searchresults.TOPIC_TITLE}</a></dd>*/
/* 			<dd>{L_REPLIES}{L_COLON} <strong>{searchresults.TOPIC_REPLIES}</strong></dd>*/
/* 			<dd>{L_VIEWS}{L_COLON} <strong>{searchresults.TOPIC_VIEWS}</strong></dd>*/
/* 			<!-- EVENT search_results_postprofile_after -->*/
/* 		</dl>*/
/* */
/* 		<div class="postbody">*/
/* 			<h3><a href="{searchresults.U_VIEW_POST}">{searchresults.POST_SUBJECT}</a></h3>*/
/* 			<div class="content">{searchresults.MESSAGE}</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not searchresults.S_IGNORE_POST -->*/
/* 		<ul class="searchresults">*/
/* 			<li ><a href="{searchresults.U_VIEW_POST}" class="arrow-{S_CONTENT_FLOW_END}">{L_JUMP_TO_POST}</a></li>*/
/* 		</ul>*/
/* 	<!-- ENDIF -->*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 		<!-- EVENT search_results_post_after -->*/
/* 	<!-- BEGINELSE -->*/
/* 		<div class="panel">*/
/* 			<div class="inner">*/
/* 			<strong>{L_NO_SEARCH_RESULTS}</strong>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- END searchresults -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF .pagination or .searchresults or S_SELECT_SORT_KEY or S_SELECT_SORT_DAYS -->*/
/* 	<form method="post" action="{S_SEARCH_ACTION}">*/
/* */
/* 	<fieldset class="display-options">*/
/* 		<!-- IF S_SELECT_SORT_DAYS or S_SELECT_SORT_KEY -->*/
/* 			<label><!-- IF S_SHOW_TOPICS -->{L_DISPLAY_POSTS}<!-- ELSE -->{L_SORT_BY}</label><label><!-- ENDIF --> {S_SELECT_SORT_DAYS}<!-- IF S_SELECT_SORT_KEY --></label> <label>{S_SELECT_SORT_KEY}</label>*/
/* 			<label>{S_SELECT_SORT_DIR}<!-- ENDIF --></label>*/
/* 			<input type="submit" name="sort" value="{L_GO}" class="button2" />*/
/* 		<!-- ENDIF -->*/
/* 	</fieldset>*/
/* */
/* 	</form>*/
/* */
/* 	<hr />*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF .pagination or .searchresults or PAGE_NUMBER -->*/
/* <div class="action-bar bottom">*/
/* 	<div class="pagination">*/
/* 		{SEARCH_MATCHES}*/
/* 		<!-- IF .pagination -->*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		<!-- ELSE -->*/
/* 			 &bull; {PAGE_NUMBER}*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
