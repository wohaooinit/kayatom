<?php

/* posting_topic_review.html */
class __TwigTemplate_7f0f85253453b1534da70a000cecc0fea8139813dd7955bf1bb91342b5c5caf9 extends Twig_Template
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
        echo "
<h3 id=\"review\">
\t<span class=\"right-box\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '";
        // line 3
        echo addslashes($this->env->getExtension('phpbb')->lang("EXPAND_VIEW"));
        echo "'){rev_text.data = '";
        echo addslashes($this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"));
        echo "'; } else if (rev_text.data == '";
        echo addslashes($this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"));
        echo "'){rev_text.data = '";
        echo addslashes($this->env->getExtension('phpbb')->lang("EXPAND_VIEW"));
        echo "'};\">";
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "</a></span>
\t";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        if (isset($context["TOPIC_TITLE"])) { $_TOPIC_TITLE_ = $context["TOPIC_TITLE"]; } else { $_TOPIC_TITLE_ = null; }
        echo $_TOPIC_TITLE_;
        echo "
</h3>

<div id=\"topicreview\">
<script type=\"text/javascript\">
// <![CDATA[
\tbbcodeEnabled = ";
        // line 10
        if (isset($context["S_BBCODE_ALLOWED"])) { $_S_BBCODE_ALLOWED_ = $context["S_BBCODE_ALLOWED"]; } else { $_S_BBCODE_ALLOWED_ = null; }
        echo $_S_BBCODE_ALLOWED_;
        echo ";
// ]]>
</script>
\t";
        // line 13
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "topic_review_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["topic_review_row"]) {
            // line 14
            echo "
\t";
            // line 15
            if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
            if ($this->getAttribute($_topic_review_row_, "S_IGNORE_POST", array())) {
                // line 16
                echo "\t<div class=\"post bg3 post-ignore\">
\t\t<div class=\"inner\">
\t\t\t";
                // line 18
                if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                echo $this->getAttribute($_topic_review_row_, "L_IGNORE_POST", array());
                echo "
\t";
            } else {
                // line 20
                echo "\t<div class=\"post ";
                if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                if (($this->getAttribute($_topic_review_row_, "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                if (isset($context["REPORTED_POST_ID"])) { $_REPORTED_POST_ID_ = $context["REPORTED_POST_ID"]; } else { $_REPORTED_POST_ID_ = null; }
                if (($this->getAttribute($_topic_review_row_, "POST_ID", array()) == $_REPORTED_POST_ID_)) {
                    echo " reported";
                }
                echo "\">
\t\t<div class=\"inner\">
\t";
            }
            // line 23
            echo "
\t\t<div class=\"postbody\" id=\"pr";
            // line 24
            if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
            echo $this->getAttribute($_topic_review_row_, "POST_ID", array());
            echo "\">
\t\t\t<h3><a href=\"#pr";
            // line 25
            if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
            echo $this->getAttribute($_topic_review_row_, "POST_ID", array());
            echo "\">";
            if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
            echo $this->getAttribute($_topic_review_row_, "POST_SUBJECT", array());
            echo "</a></h3>

\t\t\t";
            // line 27
            if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
            if ((($this->getAttribute($_topic_review_row_, "POSTER_QUOTE", array()) && $this->getAttribute($_topic_review_row_, "DECODED_MESSAGE", array())) || $this->getAttribute($_topic_review_row_, "U_MCP_DETAILS", array()))) {
                // line 28
                echo "\t\t\t<ul class=\"post-buttons\">
\t\t\t";
                // line 29
                if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                if ($this->getAttribute($_topic_review_row_, "U_MCP_DETAILS", array())) {
                    // line 30
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                    // line 31
                    if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                    echo $this->getAttribute($_topic_review_row_, "U_MCP_DETAILS", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
                    echo "\" class=\"button icon-button info-icon\">
\t\t\t\t\t\t<span>";
                    // line 32
                    echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t<li>
\t\t\t";
                }
                // line 36
                echo "\t\t\t";
                if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                if (($this->getAttribute($_topic_review_row_, "POSTER_QUOTE", array()) && $this->getAttribute($_topic_review_row_, "DECODED_MESSAGE", array()))) {
                    // line 37
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#postingbox\" onclick=\"addquote(";
                    // line 38
                    if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                    echo $this->getAttribute($_topic_review_row_, "POST_ID", array());
                    echo ", '";
                    if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                    echo $this->getAttribute($_topic_review_row_, "POSTER_QUOTE", array());
                    echo "', '";
                    echo addslashes($this->env->getExtension('phpbb')->lang("WROTE"));
                    echo "');\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("QUOTE");
                    echo " ";
                    if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                    echo $this->getAttribute($_topic_review_row_, "POST_AUTHOR", array());
                    echo "\" class=\"button icon-button quote-icon\">
\t\t\t\t\t\t<span>";
                    // line 39
                    echo $this->env->getExtension('phpbb')->lang("QUOTE");
                    echo " ";
                    if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                    echo $this->getAttribute($_topic_review_row_, "POST_AUTHOR", array());
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
                }
                // line 43
                echo "\t\t\t</ul>
\t\t\t";
            }
            // line 45
            echo "
\t\t\t<p class=\"author\">";
            // line 46
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if ($_S_IS_BOT_) {
                if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                echo $this->getAttribute($_topic_review_row_, "MINI_POST_IMG", array());
            } else {
                echo "<a href=\"";
                if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                echo $this->getAttribute($_topic_review_row_, "U_MINI_POST", array());
                echo "\">";
                if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                echo $this->getAttribute($_topic_review_row_, "MINI_POST_IMG", array());
                echo "</a>";
            }
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
            echo $this->getAttribute($_topic_review_row_, "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; ";
            if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
            echo $this->getAttribute($_topic_review_row_, "POST_DATE", array());
            echo "  </p>
\t\t\t<div class=\"content\">";
            // line 47
            if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
            echo $this->getAttribute($_topic_review_row_, "MESSAGE", array());
            echo "</div>

\t\t\t";
            // line 49
            if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
            if ($this->getAttribute($_topic_review_row_, "S_HAS_ATTACHMENTS", array())) {
                // line 50
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t\t";
                // line 52
                if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_topic_review_row_, "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 53
                    echo "\t\t\t\t\t\t<dd>";
                    if (isset($context["attachment"])) { $_attachment_ = $context["attachment"]; } else { $_attachment_ = null; }
                    echo $this->getAttribute($_attachment_, "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 57
            echo "
\t\t\t";
            // line 58
            if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
            if (($this->getAttribute($_topic_review_row_, "POSTER_QUOTE", array()) && $this->getAttribute($_topic_review_row_, "DECODED_MESSAGE", array()))) {
                // line 59
                echo "\t\t\t\t<div id=\"message_";
                if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                echo $this->getAttribute($_topic_review_row_, "POST_ID", array());
                echo "\" style=\"display: none;\">";
                if (isset($context["topic_review_row"])) { $_topic_review_row_ = $context["topic_review_row"]; } else { $_topic_review_row_ = null; }
                echo $this->getAttribute($_topic_review_row_, "DECODED_MESSAGE", array());
                echo "</div>
\t\t\t";
            }
            // line 61
            echo "\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</div>

<hr />

";
        // line 69
        if (isset($context["S_MCP_REPORT"])) { $_S_MCP_REPORT_ = $context["S_MCP_REPORT"]; } else { $_S_MCP_REPORT_ = null; }
        if ($_S_MCP_REPORT_) {
            // line 70
            echo "\t<p><a href=\"#report\" class=\"top2\">";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "</a></p>
";
        } else {
            // line 72
            echo "\t<p><a href=\"#postingbox\" class=\"top2\">";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "</a></p>
";
        }
    }

    public function getTemplateName()
    {
        return "posting_topic_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 72,  268 => 70,  265 => 69,  259 => 65,  250 => 61,  240 => 59,  237 => 58,  234 => 57,  230 => 55,  220 => 53,  215 => 52,  211 => 51,  208 => 50,  205 => 49,  199 => 47,  175 => 46,  172 => 45,  168 => 43,  158 => 39,  143 => 38,  140 => 37,  136 => 36,  129 => 32,  122 => 31,  119 => 30,  116 => 29,  113 => 28,  110 => 27,  101 => 25,  96 => 24,  93 => 23,  76 => 20,  70 => 18,  66 => 16,  63 => 15,  60 => 14,  55 => 13,  48 => 10,  35 => 4,  23 => 3,  19 => 1,);
    }
}
/* */
/* <h3 id="review">*/
/* 	<span class="right-box"><a href="#review" onclick="viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '{LA_EXPAND_VIEW}'){rev_text.data = '{LA_COLLAPSE_VIEW}'; } else if (rev_text.data == '{LA_COLLAPSE_VIEW}'){rev_text.data = '{LA_EXPAND_VIEW}'};">{L_EXPAND_VIEW}</a></span>*/
/* 	{L_TOPIC_REVIEW}{L_COLON} {TOPIC_TITLE}*/
/* </h3>*/
/* */
/* <div id="topicreview">*/
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* 	bbcodeEnabled = {S_BBCODE_ALLOWED};*/
/* // ]]>*/
/* </script>*/
/* 	<!-- BEGIN topic_review_row -->*/
/* */
/* 	<!-- IF topic_review_row.S_IGNORE_POST -->*/
/* 	<div class="post bg3 post-ignore">*/
/* 		<div class="inner">*/
/* 			{topic_review_row.L_IGNORE_POST}*/
/* 	<!-- ELSE -->*/
/* 	<div class="post <!-- IF topic_review_row.S_ROW_COUNT is odd -->bg1<!-- ELSE -->bg2<!-- ENDIF --><!-- IF topic_review_row.POST_ID == REPORTED_POST_ID --> reported<!-- ENDIF -->">*/
/* 		<div class="inner">*/
/* 	<!-- ENDIF -->*/
/* */
/* 		<div class="postbody" id="pr{topic_review_row.POST_ID}">*/
/* 			<h3><a href="#pr{topic_review_row.POST_ID}">{topic_review_row.POST_SUBJECT}</a></h3>*/
/* */
/* 			<!-- IF (topic_review_row.POSTER_QUOTE and topic_review_row.DECODED_MESSAGE) or topic_review_row.U_MCP_DETAILS -->*/
/* 			<ul class="post-buttons">*/
/* 			<!-- IF topic_review_row.U_MCP_DETAILS -->*/
/* 				<li>*/
/* 					<a href="{topic_review_row.U_MCP_DETAILS}" title="{L_POST_DETAILS}" class="button icon-button info-icon">*/
/* 						<span>{L_POST_DETAILS}</span>*/
/* 					</a>*/
/* 				<li>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF topic_review_row.POSTER_QUOTE and topic_review_row.DECODED_MESSAGE -->*/
/* 				<li>*/
/* 					<a href="#postingbox" onclick="addquote({topic_review_row.POST_ID}, '{topic_review_row.POSTER_QUOTE}', '{LA_WROTE}');" title="{L_QUOTE} {topic_review_row.POST_AUTHOR}" class="button icon-button quote-icon">*/
/* 						<span>{L_QUOTE} {topic_review_row.POST_AUTHOR}</span>*/
/* 					</a>*/
/* 				</li>*/
/* 			<!-- ENDIF -->*/
/* 			</ul>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<p class="author"><!-- IF S_IS_BOT -->{topic_review_row.MINI_POST_IMG}<!-- ELSE --><a href="{topic_review_row.U_MINI_POST}">{topic_review_row.MINI_POST_IMG}</a><!-- ENDIF --> {L_POST_BY_AUTHOR} <strong>{topic_review_row.POST_AUTHOR_FULL}</strong> &raquo; {topic_review_row.POST_DATE}  </p>*/
/* 			<div class="content">{topic_review_row.MESSAGE}</div>*/
/* */
/* 			<!-- IF topic_review_row.S_HAS_ATTACHMENTS -->*/
/* 				<dl class="attachbox">*/
/* 					<dt>{L_ATTACHMENTS}</dt>*/
/* 					<!-- BEGIN attachment -->*/
/* 						<dd>{topic_review_row.attachment.DISPLAY_ATTACHMENT}</dd>*/
/* 					<!-- END attachment -->*/
/* 				</dl>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF topic_review_row.POSTER_QUOTE and topic_review_row.DECODED_MESSAGE -->*/
/* 				<div id="message_{topic_review_row.POST_ID}" style="display: none;">{topic_review_row.DECODED_MESSAGE}</div>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- END topic_review_row -->*/
/* </div>*/
/* */
/* <hr />*/
/* */
/* <!-- IF S_MCP_REPORT -->*/
/* 	<p><a href="#report" class="top2">{L_BACK_TO_TOP}</a></p>*/
/* <!-- ELSE -->*/
/* 	<p><a href="#postingbox" class="top2">{L_BACK_TO_TOP}</a></p>*/
/* <!-- ENDIF -->*/
/* */
