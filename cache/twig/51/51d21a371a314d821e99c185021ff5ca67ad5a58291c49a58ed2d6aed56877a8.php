<?php

/* permission_mask.html */
class __TwigTemplate_10a46b8a76fed28dd725ec14c70e01a70e8761e06f752f2eedf4f70e2ce9bb6b extends Twig_Template
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
<script type=\"text/javascript\">
// <![CDATA[
\tvar active_pmask = '0';
\tvar active_fmask = '0';
\tvar active_cat = '0';

\tvar id = '000';

\tvar role_options = new Array();

\t";
        // line 12
        if (isset($context["S_ROLE_JS_ARRAY"])) { $_S_ROLE_JS_ARRAY_ = $context["S_ROLE_JS_ARRAY"]; } else { $_S_ROLE_JS_ARRAY_ = null; }
        if ($_S_ROLE_JS_ARRAY_) {
            // line 13
            echo "\t\t";
            if (isset($context["S_ROLE_JS_ARRAY"])) { $_S_ROLE_JS_ARRAY_ = $context["S_ROLE_JS_ARRAY"]; } else { $_S_ROLE_JS_ARRAY_ = null; }
            echo $_S_ROLE_JS_ARRAY_;
            echo "
\t";
        }
        // line 15
        echo "// ]]>
</script>
<script type=\"text/javascript\" src=\"style/permissions.js\"></script>

";
        // line 19
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "p_mask", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p_mask"]) {
            // line 20
            echo "<div class=\"clearfix\"></div>
<h3>";
            // line 21
            if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
            echo $this->getAttribute($_p_mask_, "NAME", array());
            if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
            if ($this->getAttribute($_p_mask_, "S_LOCAL", array())) {
                echo " <span class=\"small\"> [";
                if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                echo $this->getAttribute($_p_mask_, "L_ACL_TYPE", array());
                echo "]</span>";
            }
            echo "</h3>

";
            // line 23
            if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_p_mask_, "f_mask", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f_mask"]) {
                // line 24
                echo "<div class=\"clearfix\"></div>
<fieldset class=\"permissions\" id=\"perm";
                // line 25
                if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                echo "\">
\t<legend id=\"legend";
                // line 26
                if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                echo "\">
\t\t";
                // line 27
                if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                if ( !$this->getAttribute($_p_mask_, "S_VIEW", array())) {
                    // line 28
                    echo "\t\t\t<input type=\"checkbox\" style=\"display: none;\" class=\"permissions-checkbox\" name=\"inherit[";
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "UG_ID", array());
                    echo "][";
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "FORUM_ID", array());
                    echo "]\" id=\"checkbox";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    echo "\" value=\"1\" onclick=\"toggle_opacity('";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    echo "')\" /> 
\t\t";
                } else {
                    // line 30
                    echo "\t\t";
                }
                // line 31
                echo "\t\t";
                if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                if ($this->getAttribute($_f_mask_, "PADDING", array())) {
                    echo "<span class=\"padding\">";
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "PADDING", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "PADDING", array());
                    echo "</span>";
                }
                if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                echo $this->getAttribute($_f_mask_, "NAME", array());
                echo "
\t</legend>
\t";
                // line 33
                if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                if ( !$this->getAttribute($_p_mask_, "S_VIEW", array())) {
                    // line 34
                    echo "\t\t<div class=\"permissions-switch\">
\t\t\t<div class=\"permissions-reset\">
\t\t\t\t<a href=\"#\" onclick=\"mark_options('perm";
                    // line 36
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    echo "', 'y'); reset_role('role";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    echo "'); init_colours('";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    echo "'); return false;\">";
                    echo $this->env->getExtension('phpbb')->lang("ALL_YES");
                    echo "</a> &middot; <a href=\"#\" onclick=\"mark_options('perm";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    echo "', 'u'); reset_role('role";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    echo "'); init_colours('";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    echo "'); return false;\">";
                    echo $this->env->getExtension('phpbb')->lang("ALL_NO");
                    echo "</a> &middot; <a href=\"#\" onclick=\"mark_options('perm";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    echo "', 'n'); reset_role('role";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    echo "'); init_colours('";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    echo "'); return false;\">";
                    echo $this->env->getExtension('phpbb')->lang("ALL_NEVER");
                    echo "</a>
\t\t\t</div>
\t\t\t<a href=\"#\" onclick=\"swap_options('";
                    // line 38
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    echo "', '";
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    echo "', '0', true); return false;\">";
                    echo $this->env->getExtension('phpbb')->lang("ADVANCED_PERMISSIONS");
                    echo "</a>";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    if (( !$this->getAttribute($_p_mask_, "S_VIEW", array()) && $this->getAttribute($_f_mask_, "S_CUSTOM", array()))) {
                        echo " *";
                    }
                    // line 39
                    echo "\t\t</div>
\t\t<dl class=\"permissions-simple\">
\t\t\t<dt style=\"width: 20%\"><label for=\"role";
                    // line 41
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("ROLE");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t";
                    // line 42
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    if ($this->getAttribute($_f_mask_, "S_ROLE_OPTIONS", array())) {
                        // line 43
                        echo "\t\t\t\t<dd style=\"margin-";
                        if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
                        echo $_S_CONTENT_FLOW_BEGIN_;
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " 20%\"><select id=\"role";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        echo "\" name=\"role[";
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "UG_ID", array());
                        echo "][";
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "FORUM_ID", array());
                        echo "]\" onchange=\"set_role_settings(this.options[selectedIndex].value, 'advanced";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        echo "'); init_colours('";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        echo "')\">";
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROLE_OPTIONS", array());
                        echo "</select></dd>
\t\t\t";
                    } else {
                        // line 45
                        echo "\t\t\t\t<dd>";
                        echo $this->env->getExtension('phpbb')->lang("NO_ROLE_AVAILABLE");
                        echo "</dd>
\t\t\t";
                    }
                    // line 47
                    echo "\t\t</dl>
\t";
                }
                // line 49
                echo "
\t";
                // line 50
                if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_f_mask_, "category", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 51
                    echo "\t\t";
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    if ($this->getAttribute($_category_, "S_FIRST_ROW", array())) {
                        // line 52
                        echo "\t\t\t";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        if ( !$this->getAttribute($_p_mask_, "S_VIEW", array())) {
                            // line 53
                            echo "\t\t\t\t<div class=\"permissions-advanced\" id=\"advanced";
                            if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                            echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                            if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                            echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                            echo "\" style=\"display: none;\">
\t\t\t";
                        } else {
                            // line 55
                            echo "\t\t\t\t<div class=\"permissions-advanced\" id=\"advanced";
                            if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                            echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                            if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                            echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                            echo "\">
\t\t\t";
                        }
                        // line 57
                        echo "
\t\t\t<div class=\"permissions-category\">
\t\t\t\t<ul>
\t\t";
                    }
                    // line 61
                    echo " \t\t
\t\t";
                    // line 62
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    if ($this->getAttribute($_category_, "S_YES", array())) {
                        // line 63
                        echo "\t\t\t<li class=\"permissions-preset-yes";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        if ((($this->getAttribute($_p_mask_, "S_FIRST_ROW", array()) && $this->getAttribute($_f_mask_, "S_FIRST_ROW", array())) && $this->getAttribute($_category_, "S_FIRST_ROW", array()))) {
                            echo " activetab";
                        }
                        echo "\" id=\"tab";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                        echo "\">
\t\t";
                    } elseif ($this->getAttribute($_category_, "S_NEVER", array())) {
                        // line 65
                        echo "\t\t\t<li class=\"permissions-preset-never";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        if ((($this->getAttribute($_p_mask_, "S_FIRST_ROW", array()) && $this->getAttribute($_f_mask_, "S_FIRST_ROW", array())) && $this->getAttribute($_category_, "S_FIRST_ROW", array()))) {
                            echo " activetab";
                        }
                        echo "\" id=\"tab";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                        echo "\">
\t\t";
                    } elseif ($this->getAttribute($_category_, "S_NO", array())) {
                        // line 67
                        echo "\t\t\t<li class=\"permissions-preset-no";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        if ((($this->getAttribute($_p_mask_, "S_FIRST_ROW", array()) && $this->getAttribute($_f_mask_, "S_FIRST_ROW", array())) && $this->getAttribute($_category_, "S_FIRST_ROW", array()))) {
                            echo " activetab";
                        }
                        echo "\" id=\"tab";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                        echo "\">
\t\t";
                    } else {
                        // line 69
                        echo "\t\t\t<li class=\"permissions-preset-custom";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        if ((($this->getAttribute($_p_mask_, "S_FIRST_ROW", array()) && $this->getAttribute($_f_mask_, "S_FIRST_ROW", array())) && $this->getAttribute($_category_, "S_FIRST_ROW", array()))) {
                            echo " activetab";
                        }
                        echo "\" id=\"tab";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                        echo "\">
\t\t";
                    }
                    // line 71
                    echo "\t\t<a href=\"#\" onclick=\"swap_options('";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    echo "', '";
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    echo "', '";
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                    echo "', false";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    if ($this->getAttribute($_p_mask_, "S_VIEW", array())) {
                        echo ", true";
                    }
                    echo "); return false;\"><span class=\"tabbg\"><span class=\"colour\"></span>";
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    echo $this->getAttribute($_category_, "CAT_NAME", array());
                    echo "</span></a></li>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "\t\t\t\t</ul>
\t\t\t</div>

\t";
                // line 76
                if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_f_mask_, "category", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 77
                    echo "\t\t<div class=\"permissions-panel\" id=\"options";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                    echo "\" ";
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    if ((($this->getAttribute($_p_mask_, "S_FIRST_ROW", array()) && $this->getAttribute($_f_mask_, "S_FIRST_ROW", array())) && $this->getAttribute($_category_, "S_FIRST_ROW", array()))) {
                    } else {
                        echo " style=\"display: none;\"";
                    }
                    echo ">
\t\t\t<div class=\"tablewrap\">
\t\t\t\t<table id=\"table";
                    // line 79
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                    if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                    echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                    echo "\" class=\"table1 not-responsive\">
\t\t\t\t<colgroup>
\t\t\t\t\t<col class=\"permissions-name\" />
\t\t\t\t\t<col class=\"permissions-yes\" />
\t\t\t\t\t<col class=\"permissions-no\" />
\t\t\t\t\t";
                    // line 84
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    if ( !$this->getAttribute($_p_mask_, "S_VIEW", array())) {
                        // line 85
                        echo "\t\t\t\t\t\t<col class=\"permissions-never\" />
\t\t\t\t\t";
                    }
                    // line 87
                    echo "\t\t\t\t</colgroup>
\t\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"name\" scope=\"col\"><strong>";
                    // line 90
                    echo $this->env->getExtension('phpbb')->lang("ACL_SETTING");
                    echo "</strong></th>
\t\t\t\t";
                    // line 91
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    if ($this->getAttribute($_p_mask_, "S_VIEW", array())) {
                        // line 92
                        echo "\t\t\t\t\t<th class=\"value\" scope=\"col\">";
                        echo $this->env->getExtension('phpbb')->lang("ACL_YES");
                        echo "</th>
\t\t\t\t\t<th class=\"value\" scope=\"col\">";
                        // line 93
                        echo $this->env->getExtension('phpbb')->lang("ACL_NEVER");
                        echo "</th>
\t\t\t\t";
                    } else {
                        // line 95
                        echo "\t\t\t\t\t<th class=\"value permissions-yes\" scope=\"col\"><a href=\"#\" onclick=\"mark_options('options";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                        echo "', 'y'); reset_role('role";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        echo "'); set_colours('";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                        echo "', false, 'yes'); return false;\">";
                        echo $this->env->getExtension('phpbb')->lang("ACL_YES");
                        echo "</a></th>
\t\t\t\t\t<th class=\"value permissions-no\" scope=\"col\"><a href=\"#\" onclick=\"mark_options('options";
                        // line 96
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                        echo "', 'u'); reset_role('role";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        echo "'); set_colours('";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                        echo "', false, 'no'); return false;\">";
                        echo $this->env->getExtension('phpbb')->lang("ACL_NO");
                        echo "</a></th>
\t\t\t\t\t<th class=\"value permissions-never\" scope=\"col\"><a href=\"#\" onclick=\"mark_options('options";
                        // line 97
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                        echo "', 'n'); reset_role('role";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        echo "'); set_colours('";
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                        echo "', false, 'never'); return false;\">";
                        echo $this->env->getExtension('phpbb')->lang("ACL_NEVER");
                        echo "</a></th>
\t\t\t\t";
                    }
                    // line 99
                    echo "\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
                    // line 102
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_category_, "mask", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["mask"]) {
                        // line 103
                        echo "\t\t\t\t\t";
                        if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                        if (($this->getAttribute($_mask_, "S_ROW_COUNT", array()) % 2 == 0)) {
                            echo "<tr class=\"row4\">";
                        } else {
                            echo "<tr class=\"row3\">";
                        }
                        // line 104
                        echo "\t\t\t\t\t<th class=\"permissions-name";
                        if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                        if (($this->getAttribute($_mask_, "S_ROW_COUNT", array()) % 2 == 0)) {
                            echo " row4";
                        } else {
                            echo " row3";
                        }
                        echo "\">";
                        if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                        if ($this->getAttribute($_mask_, "U_TRACE", array())) {
                            echo "<a href=\"";
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            echo $this->getAttribute($_mask_, "U_TRACE", array());
                            echo "\" class=\"trace\" onclick=\"popup(this.href, 750, 515, '_trace'); return false;\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("TRACE_SETTING");
                            echo "\"><img src=\"images/icon_trace.gif\" alt=\"";
                            echo $this->env->getExtension('phpbb')->lang("TRACE_SETTING");
                            echo "\" /></a> ";
                        }
                        if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                        echo $this->getAttribute($_mask_, "PERMISSION", array());
                        echo "</th>
\t\t\t\t\t";
                        // line 105
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        if ($this->getAttribute($_p_mask_, "S_VIEW", array())) {
                            // line 106
                            echo "\t\t\t\t\t\t<td";
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            if ($this->getAttribute($_mask_, "S_YES", array())) {
                                echo " class=\"yes\"";
                            }
                            echo ">&nbsp;</td>
\t\t\t\t\t\t<td";
                            // line 107
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            if ($this->getAttribute($_mask_, "S_NEVER", array())) {
                                echo " class=\"never\"";
                            }
                            echo "></td>
\t\t\t\t\t";
                        } else {
                            // line 109
                            echo "\t\t\t\t\t\t<td class=\"permissions-yes\"><label for=\"";
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            echo $this->getAttribute($_mask_, "S_FIELD_NAME", array());
                            echo "_y\"><input onclick=\"reset_role('role";
                            if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                            echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                            if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                            echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                            echo "'); set_colours('";
                            if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                            echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                            if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                            echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                            echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                            echo "', false)\" id=\"";
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            echo $this->getAttribute($_mask_, "S_FIELD_NAME", array());
                            echo "_y\" name=\"";
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            echo $this->getAttribute($_mask_, "S_FIELD_NAME", array());
                            echo "\" class=\"radio\" type=\"radio\"";
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            if ($this->getAttribute($_mask_, "S_YES", array())) {
                                echo " checked=\"checked\"";
                            }
                            echo " value=\"1\" /></label></td>
\t\t\t\t\t\t<td class=\"permissions-no\"><label for=\"";
                            // line 110
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            echo $this->getAttribute($_mask_, "S_FIELD_NAME", array());
                            echo "_u\"><input onclick=\"reset_role('role";
                            if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                            echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                            if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                            echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                            echo "'); set_colours('";
                            if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                            echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                            if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                            echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                            echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                            echo "', false)\" id=\"";
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            echo $this->getAttribute($_mask_, "S_FIELD_NAME", array());
                            echo "_u\" name=\"";
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            echo $this->getAttribute($_mask_, "S_FIELD_NAME", array());
                            echo "\" class=\"radio\" type=\"radio\"";
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            if ($this->getAttribute($_mask_, "S_NO", array())) {
                                echo " checked=\"checked\"";
                            }
                            echo " value=\"-1\" /></label></td>
\t\t\t\t\t\t<td class=\"permissions-never\"><label for=\"";
                            // line 111
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            echo $this->getAttribute($_mask_, "S_FIELD_NAME", array());
                            echo "_n\"><input onclick=\"reset_role('role";
                            if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                            echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                            if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                            echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                            echo "'); set_colours('";
                            if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                            echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                            if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                            echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                            echo $this->getAttribute($_category_, "S_ROW_COUNT", array());
                            echo "', false)\" id=\"";
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            echo $this->getAttribute($_mask_, "S_FIELD_NAME", array());
                            echo "_n\" name=\"";
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            echo $this->getAttribute($_mask_, "S_FIELD_NAME", array());
                            echo "\" class=\"radio\" type=\"radio\"";
                            if (isset($context["mask"])) { $_mask_ = $context["mask"]; } else { $_mask_ = null; }
                            if ($this->getAttribute($_mask_, "S_NEVER", array())) {
                                echo " checked=\"checked\"";
                            }
                            echo " value=\"0\" /></label></td>
\t\t\t\t\t";
                        }
                        // line 113
                        echo "\t\t\t\t</tr>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mask'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 115
                    echo "\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t
\t\t\t";
                    // line 119
                    if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                    if ( !$this->getAttribute($_p_mask_, "S_VIEW", array())) {
                        // line 120
                        echo "\t\t\t<fieldset class=\"quick\" style=\"margin-";
                        if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
                        echo $_S_CONTENT_FLOW_END_;
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " 11px;\">
\t\t\t\t<p class=\"small\">";
                        // line 121
                        echo $this->env->getExtension('phpbb')->lang("APPLY_PERMISSIONS_EXPLAIN");
                        echo "</p>
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"psubmit[";
                        // line 122
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "UG_ID", array());
                        echo "][";
                        if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                        echo $this->getAttribute($_f_mask_, "FORUM_ID", array());
                        echo "]\" value=\"";
                        echo $this->env->getExtension('phpbb')->lang("APPLY_PERMISSIONS");
                        echo "\" />
\t\t\t\t";
                        // line 123
                        if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                        if (((twig_length_filter($this->env, $this->getAttribute($_p_mask_, "f_mask", array())) > 1) || (twig_length_filter($this->env, $this->getAttribute($_loops_, "p_mask", array())) > 1))) {
                            // line 124
                            echo "\t\t\t\t\t<p class=\"small\"><a href=\"#\" onclick=\"reset_opacity(0, '";
                            if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                            echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                            if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                            echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                            echo "'); return false;\">";
                            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                            echo "</a> &bull; <a href=\"#\" onclick=\"reset_opacity(1, '";
                            if (isset($context["p_mask"])) { $_p_mask_ = $context["p_mask"]; } else { $_p_mask_ = null; }
                            echo $this->getAttribute($_p_mask_, "S_ROW_COUNT", array());
                            if (isset($context["f_mask"])) { $_f_mask_ = $context["f_mask"]; } else { $_f_mask_ = null; }
                            echo $this->getAttribute($_f_mask_, "S_ROW_COUNT", array());
                            echo "'); return false;\">";
                            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                            echo "</a></p>
\t\t\t\t";
                        }
                        // line 126
                        echo "\t\t\t</fieldset>
\t\t
\t\t\t";
                    }
                    // line 129
                    echo "
\t\t</div>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "\t\t\t<div class=\"clearfix\"></div>
\t</div>
</fieldset>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f_mask'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p_mask'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "permission_mask.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  779 => 136,  770 => 132,  762 => 129,  757 => 126,  739 => 124,  735 => 123,  725 => 122,  721 => 121,  714 => 120,  711 => 119,  705 => 115,  698 => 113,  669 => 111,  641 => 110,  612 => 109,  604 => 107,  596 => 106,  593 => 105,  569 => 104,  561 => 103,  556 => 102,  551 => 99,  527 => 97,  504 => 96,  480 => 95,  475 => 93,  470 => 92,  467 => 91,  463 => 90,  458 => 87,  454 => 85,  451 => 84,  438 => 79,  419 => 77,  414 => 76,  409 => 73,  385 => 71,  367 => 69,  349 => 67,  331 => 65,  313 => 63,  310 => 62,  307 => 61,  301 => 57,  292 => 55,  283 => 53,  279 => 52,  275 => 51,  270 => 50,  267 => 49,  263 => 47,  257 => 45,  225 => 43,  222 => 42,  212 => 41,  208 => 39,  194 => 38,  140 => 36,  136 => 34,  133 => 33,  117 => 31,  114 => 30,  94 => 28,  91 => 27,  84 => 26,  77 => 25,  74 => 24,  69 => 23,  56 => 21,  53 => 20,  48 => 19,  42 => 15,  35 => 13,  32 => 12,  19 => 1,);
    }
}
/* */
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* 	var active_pmask = '0';*/
/* 	var active_fmask = '0';*/
/* 	var active_cat = '0';*/
/* */
/* 	var id = '000';*/
/* */
/* 	var role_options = new Array();*/
/* */
/* 	<!-- IF S_ROLE_JS_ARRAY -->*/
/* 		{S_ROLE_JS_ARRAY}*/
/* 	<!-- ENDIF -->*/
/* // ]]>*/
/* </script>*/
/* <script type="text/javascript" src="style/permissions.js"></script>*/
/* */
/* <!-- BEGIN p_mask -->*/
/* <div class="clearfix"></div>*/
/* <h3>{p_mask.NAME}<!-- IF p_mask.S_LOCAL --> <span class="small"> [{p_mask.L_ACL_TYPE}]</span><!-- ENDIF --></h3>*/
/* */
/* <!-- BEGIN f_mask -->*/
/* <div class="clearfix"></div>*/
/* <fieldset class="permissions" id="perm{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}">*/
/* 	<legend id="legend{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}">*/
/* 		<!-- IF not p_mask.S_VIEW -->*/
/* 			<input type="checkbox" style="display: none;" class="permissions-checkbox" name="inherit[{p_mask.f_mask.UG_ID}][{p_mask.f_mask.FORUM_ID}]" id="checkbox{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}" value="1" onclick="toggle_opacity('{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}')" /> */
/* 		<!-- ELSE -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF p_mask.f_mask.PADDING --><span class="padding">{p_mask.f_mask.PADDING}{p_mask.f_mask.PADDING}</span><!-- ENDIF -->{p_mask.f_mask.NAME}*/
/* 	</legend>*/
/* 	<!-- IF not p_mask.S_VIEW -->*/
/* 		<div class="permissions-switch">*/
/* 			<div class="permissions-reset">*/
/* 				<a href="#" onclick="mark_options('perm{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}', 'y'); reset_role('role{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); init_colours('{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); return false;">{L_ALL_YES}</a> &middot; <a href="#" onclick="mark_options('perm{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}', 'u'); reset_role('role{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); init_colours('{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); return false;">{L_ALL_NO}</a> &middot; <a href="#" onclick="mark_options('perm{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}', 'n'); reset_role('role{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); init_colours('{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); return false;">{L_ALL_NEVER}</a>*/
/* 			</div>*/
/* 			<a href="#" onclick="swap_options('{p_mask.S_ROW_COUNT}', '{p_mask.f_mask.S_ROW_COUNT}', '0', true); return false;">{L_ADVANCED_PERMISSIONS}</a><!-- IF not p_mask.S_VIEW and p_mask.f_mask.S_CUSTOM --> *<!-- ENDIF -->*/
/* 		</div>*/
/* 		<dl class="permissions-simple">*/
/* 			<dt style="width: 20%"><label for="role{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}">{L_ROLE}{L_COLON}</label></dt>*/
/* 			<!-- IF p_mask.f_mask.S_ROLE_OPTIONS -->*/
/* 				<dd style="margin-{S_CONTENT_FLOW_BEGIN}{L_COLON} 20%"><select id="role{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}" name="role[{p_mask.f_mask.UG_ID}][{p_mask.f_mask.FORUM_ID}]" onchange="set_role_settings(this.options[selectedIndex].value, 'advanced{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); init_colours('{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}')">{p_mask.f_mask.S_ROLE_OPTIONS}</select></dd>*/
/* 			<!-- ELSE -->*/
/* 				<dd>{L_NO_ROLE_AVAILABLE}</dd>*/
/* 			<!-- ENDIF -->*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- BEGIN category -->*/
/* 		<!-- IF p_mask.f_mask.category.S_FIRST_ROW -->*/
/* 			<!-- IF not p_mask.S_VIEW -->*/
/* 				<div class="permissions-advanced" id="advanced{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}" style="display: none;">*/
/* 			<!-- ELSE -->*/
/* 				<div class="permissions-advanced" id="advanced{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}">*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<div class="permissions-category">*/
/* 				<ul>*/
/* 		<!-- ENDIF -->*/
/*  		*/
/* 		<!-- IF p_mask.f_mask.category.S_YES -->*/
/* 			<li class="permissions-preset-yes<!-- IF p_mask.S_FIRST_ROW and p_mask.f_mask.S_FIRST_ROW and p_mask.f_mask.category.S_FIRST_ROW --> activetab<!-- ENDIF -->" id="tab{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}">*/
/* 		<!-- ELSEIF p_mask.f_mask.category.S_NEVER -->*/
/* 			<li class="permissions-preset-never<!-- IF p_mask.S_FIRST_ROW and p_mask.f_mask.S_FIRST_ROW and p_mask.f_mask.category.S_FIRST_ROW --> activetab<!-- ENDIF -->" id="tab{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}">*/
/* 		<!-- ELSEIF p_mask.f_mask.category.S_NO -->*/
/* 			<li class="permissions-preset-no<!-- IF p_mask.S_FIRST_ROW and p_mask.f_mask.S_FIRST_ROW and p_mask.f_mask.category.S_FIRST_ROW --> activetab<!-- ENDIF -->" id="tab{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}">*/
/* 		<!-- ELSE -->*/
/* 			<li class="permissions-preset-custom<!-- IF p_mask.S_FIRST_ROW and p_mask.f_mask.S_FIRST_ROW and p_mask.f_mask.category.S_FIRST_ROW --> activetab<!-- ENDIF -->" id="tab{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}">*/
/* 		<!-- ENDIF -->*/
/* 		<a href="#" onclick="swap_options('{p_mask.S_ROW_COUNT}', '{p_mask.f_mask.S_ROW_COUNT}', '{p_mask.f_mask.category.S_ROW_COUNT}', false<!-- IF p_mask.S_VIEW -->, true<!-- ENDIF -->); return false;"><span class="tabbg"><span class="colour"></span>{p_mask.f_mask.category.CAT_NAME}</span></a></li>*/
/* 	<!-- END category -->*/
/* 				</ul>*/
/* 			</div>*/
/* */
/* 	<!-- BEGIN category -->*/
/* 		<div class="permissions-panel" id="options{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}" <!-- IF p_mask.S_FIRST_ROW and p_mask.f_mask.S_FIRST_ROW and p_mask.f_mask.category.S_FIRST_ROW --><!-- ELSE --> style="display: none;"<!-- ENDIF -->>*/
/* 			<div class="tablewrap">*/
/* 				<table id="table{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}" class="table1 not-responsive">*/
/* 				<colgroup>*/
/* 					<col class="permissions-name" />*/
/* 					<col class="permissions-yes" />*/
/* 					<col class="permissions-no" />*/
/* 					<!-- IF not p_mask.S_VIEW -->*/
/* 						<col class="permissions-never" />*/
/* 					<!-- ENDIF -->*/
/* 				</colgroup>*/
/* 				<thead>*/
/* 				<tr>*/
/* 					<th class="name" scope="col"><strong>{L_ACL_SETTING}</strong></th>*/
/* 				<!-- IF p_mask.S_VIEW -->*/
/* 					<th class="value" scope="col">{L_ACL_YES}</th>*/
/* 					<th class="value" scope="col">{L_ACL_NEVER}</th>*/
/* 				<!-- ELSE -->*/
/* 					<th class="value permissions-yes" scope="col"><a href="#" onclick="mark_options('options{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}', 'y'); reset_role('role{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); set_colours('{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}', false, 'yes'); return false;">{L_ACL_YES}</a></th>*/
/* 					<th class="value permissions-no" scope="col"><a href="#" onclick="mark_options('options{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}', 'u'); reset_role('role{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); set_colours('{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}', false, 'no'); return false;">{L_ACL_NO}</a></th>*/
/* 					<th class="value permissions-never" scope="col"><a href="#" onclick="mark_options('options{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}', 'n'); reset_role('role{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); set_colours('{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}', false, 'never'); return false;">{L_ACL_NEVER}</a></th>*/
/* 				<!-- ENDIF -->*/
/* 				</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 				<!-- BEGIN mask -->*/
/* 					<!-- IF p_mask.f_mask.category.mask.S_ROW_COUNT is even --><tr class="row4"><!-- ELSE --><tr class="row3"><!-- ENDIF -->*/
/* 					<th class="permissions-name<!-- IF p_mask.f_mask.category.mask.S_ROW_COUNT is even --> row4<!-- ELSE --> row3<!-- ENDIF -->"><!-- IF p_mask.f_mask.category.mask.U_TRACE --><a href="{p_mask.f_mask.category.mask.U_TRACE}" class="trace" onclick="popup(this.href, 750, 515, '_trace'); return false;" title="{L_TRACE_SETTING}"><img src="images/icon_trace.gif" alt="{L_TRACE_SETTING}" /></a> <!-- ENDIF -->{p_mask.f_mask.category.mask.PERMISSION}</th>*/
/* 					<!-- IF p_mask.S_VIEW -->*/
/* 						<td<!-- IF p_mask.f_mask.category.mask.S_YES --> class="yes"<!-- ENDIF -->>&nbsp;</td>*/
/* 						<td<!-- IF p_mask.f_mask.category.mask.S_NEVER --> class="never"<!-- ENDIF -->></td>*/
/* 					<!-- ELSE -->*/
/* 						<td class="permissions-yes"><label for="{p_mask.f_mask.category.mask.S_FIELD_NAME}_y"><input onclick="reset_role('role{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); set_colours('{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}', false)" id="{p_mask.f_mask.category.mask.S_FIELD_NAME}_y" name="{p_mask.f_mask.category.mask.S_FIELD_NAME}" class="radio" type="radio"<!-- IF p_mask.f_mask.category.mask.S_YES --> checked="checked"<!-- ENDIF --> value="1" /></label></td>*/
/* 						<td class="permissions-no"><label for="{p_mask.f_mask.category.mask.S_FIELD_NAME}_u"><input onclick="reset_role('role{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); set_colours('{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}', false)" id="{p_mask.f_mask.category.mask.S_FIELD_NAME}_u" name="{p_mask.f_mask.category.mask.S_FIELD_NAME}" class="radio" type="radio"<!-- IF p_mask.f_mask.category.mask.S_NO --> checked="checked"<!-- ENDIF --> value="-1" /></label></td>*/
/* 						<td class="permissions-never"><label for="{p_mask.f_mask.category.mask.S_FIELD_NAME}_n"><input onclick="reset_role('role{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); set_colours('{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}{p_mask.f_mask.category.S_ROW_COUNT}', false)" id="{p_mask.f_mask.category.mask.S_FIELD_NAME}_n" name="{p_mask.f_mask.category.mask.S_FIELD_NAME}" class="radio" type="radio"<!-- IF p_mask.f_mask.category.mask.S_NEVER --> checked="checked"<!-- ENDIF --> value="0" /></label></td>*/
/* 					<!-- ENDIF -->*/
/* 				</tr>*/
/* 				<!-- END mask -->*/
/* 				</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 			*/
/* 			<!-- IF not p_mask.S_VIEW -->*/
/* 			<fieldset class="quick" style="margin-{S_CONTENT_FLOW_END}{L_COLON} 11px;">*/
/* 				<p class="small">{L_APPLY_PERMISSIONS_EXPLAIN}</p>*/
/* 				<input class="button1" type="submit" name="psubmit[{p_mask.f_mask.UG_ID}][{p_mask.f_mask.FORUM_ID}]" value="{L_APPLY_PERMISSIONS}" />*/
/* 				<!-- IF .p_mask.f_mask gt 1 or .p_mask gt 1 -->*/
/* 					<p class="small"><a href="#" onclick="reset_opacity(0, '{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); return false;">{L_MARK_ALL}</a> &bull; <a href="#" onclick="reset_opacity(1, '{p_mask.S_ROW_COUNT}{p_mask.f_mask.S_ROW_COUNT}'); return false;">{L_UNMARK_ALL}</a></p>*/
/* 				<!-- ENDIF -->*/
/* 			</fieldset>*/
/* 		*/
/* 			<!-- ENDIF -->*/
/* */
/* 		</div>*/
/* 	<!-- END category -->*/
/* 			<div class="clearfix"></div>*/
/* 	</div>*/
/* </fieldset>*/
/* <!-- END f_mask -->*/
/* */
/* <!-- END p_mask -->*/
/* */
