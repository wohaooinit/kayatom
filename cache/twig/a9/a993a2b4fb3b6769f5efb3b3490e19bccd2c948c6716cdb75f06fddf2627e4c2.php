<?php

/* ucp_avatar_options.html */
class __TwigTemplate_4fad2434895d18af65c9b1aaa03f1313dca97b0ba2e726d34d8a6d66a3051625 extends Twig_Template
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
        echo "<div class=\"panel\">
\t<div class=\"inner\">
\t";
        // line 3
        if (isset($context["S_AVATARS_ENABLED"])) { $_S_AVATARS_ENABLED_ = $context["S_AVATARS_ENABLED"]; } else { $_S_AVATARS_ENABLED_ = null; }
        if ( !$_S_AVATARS_ENABLED_) {
            // line 4
            echo "\t\t<p>";
            echo $this->env->getExtension('phpbb')->lang("AVATAR_FEATURES_DISABLED");
            echo "</p>
\t";
        }
        // line 6
        echo "
\t<fieldset>
\t";
        // line 8
        if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
        if ($_ERROR_) {
            echo "<p class=\"error\">";
            if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
            echo $_ERROR_;
            echo "</p>";
        }
        // line 9
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("CURRENT_IMAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("AVATAR_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>";
        // line 11
        if (isset($context["AVATAR"])) { $_AVATAR_ = $context["AVATAR"]; } else { $_AVATAR_ = null; }
        if ($_AVATAR_) {
            if (isset($context["AVATAR"])) { $_AVATAR_ = $context["AVATAR"]; } else { $_AVATAR_ = null; }
            echo $_AVATAR_;
        } else {
            echo "<img src=\"";
            if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
            echo $_T_THEME_PATH_;
            echo "/images/no_avatar.gif\" alt=\"\" />";
        }
        echo "</dd>
\t\t\t<dd><label for=\"avatar_delete\"><input type=\"checkbox\" name=\"avatar_delete\" id=\"avatar_delete\" /> ";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("DELETE_AVATAR");
        echo "</label></dd>
\t\t</dl>
\t</fieldset>
\t<h3>";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("AVATAR_SELECT");
        echo "</h3>
\t<fieldset>
\t\t<dl>
\t\t\t<dt><label>";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("AVATAR_TYPE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><select name=\"avatar_driver\" id=\"avatar_driver\" data-togglable-settings=\"true\">
\t\t\t\t";
        // line 20
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "avatar_drivers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
            // line 21
            echo "\t\t\t\t<option value=\"";
            if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
            echo $this->getAttribute($_avatar_drivers_, "DRIVER", array());
            echo "\"";
            if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
            if ($this->getAttribute($_avatar_drivers_, "SELECTED", array())) {
                echo " selected=\"selected\"";
            }
            echo " data-toggle-setting=\"#avatar_option_";
            if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
            echo $this->getAttribute($_avatar_drivers_, "DRIVER", array());
            echo "\">";
            if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
            echo $this->getAttribute($_avatar_drivers_, "L_TITLE", array());
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t</select></dd>
\t\t</dl>
\t</fieldset>
\t<div id=\"avatar_options\">
";
        // line 27
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "avatar_drivers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
            // line 28
            echo "\t<div id=\"avatar_option_";
            if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
            echo $this->getAttribute($_avatar_drivers_, "DRIVER", array());
            echo "\">
\t<noscript>
\t<h3 class=\"avatar_section_header\">";
            // line 30
            if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
            echo $this->getAttribute($_avatar_drivers_, "L_TITLE", array());
            echo "</h3>
\t</noscript>
\t<p>";
            // line 32
            if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
            echo $this->getAttribute($_avatar_drivers_, "L_EXPLAIN", array());
            echo "</p>

\t<fieldset>
\t";
            // line 35
            if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
            echo $this->getAttribute($_avatar_drivers_, "OUTPUT", array());
            echo "
\t</fieldset>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t</div>
";
        // line 40
        if (isset($context["S_GROUP_MANAGE"])) { $_S_GROUP_MANAGE_ = $context["S_GROUP_MANAGE"]; } else { $_S_GROUP_MANAGE_ = null; }
        if ( !$_S_GROUP_MANAGE_) {
            // line 41
            echo "\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"reset\" value=\"";
            // line 42
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" name=\"reset\" class=\"button2\" /> &nbsp;
\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t</fieldset>
";
        }
        // line 46
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 46,  166 => 43,  162 => 42,  159 => 41,  156 => 40,  153 => 39,  142 => 35,  135 => 32,  129 => 30,  122 => 28,  117 => 27,  111 => 23,  90 => 21,  85 => 20,  79 => 18,  73 => 15,  67 => 12,  54 => 11,  47 => 10,  44 => 9,  36 => 8,  32 => 6,  26 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="panel">*/
/* 	<div class="inner">*/
/* 	<!-- IF not S_AVATARS_ENABLED -->*/
/* 		<p>{L_AVATAR_FEATURES_DISABLED}</p>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<fieldset>*/
/* 	<!-- IF ERROR --><p class="error">{ERROR}</p><!-- ENDIF -->*/
/* 		<dl>*/
/* 			<dt><label>{L_CURRENT_IMAGE}{L_COLON}</label><br /><span>{L_AVATAR_EXPLAIN}</span></dt>*/
/* 			<dd><!-- IF AVATAR -->{AVATAR}<!-- ELSE --><img src="{T_THEME_PATH}/images/no_avatar.gif" alt="" /><!-- ENDIF --></dd>*/
/* 			<dd><label for="avatar_delete"><input type="checkbox" name="avatar_delete" id="avatar_delete" /> {L_DELETE_AVATAR}</label></dd>*/
/* 		</dl>*/
/* 	</fieldset>*/
/* 	<h3>{L_AVATAR_SELECT}</h3>*/
/* 	<fieldset>*/
/* 		<dl>*/
/* 			<dt><label>{L_AVATAR_TYPE}{L_COLON}</label></dt>*/
/* 			<dd><select name="avatar_driver" id="avatar_driver" data-togglable-settings="true">*/
/* 				<!-- BEGIN avatar_drivers -->*/
/* 				<option value="{avatar_drivers.DRIVER}"<!-- IF avatar_drivers.SELECTED --> selected="selected"<!-- ENDIF --> data-toggle-setting="#avatar_option_{avatar_drivers.DRIVER}">{avatar_drivers.L_TITLE}</option>*/
/* 				<!-- END avatar_drivers -->*/
/* 			</select></dd>*/
/* 		</dl>*/
/* 	</fieldset>*/
/* 	<div id="avatar_options">*/
/* <!-- BEGIN avatar_drivers -->*/
/* 	<div id="avatar_option_{avatar_drivers.DRIVER}">*/
/* 	<noscript>*/
/* 	<h3 class="avatar_section_header">{avatar_drivers.L_TITLE}</h3>*/
/* 	</noscript>*/
/* 	<p>{avatar_drivers.L_EXPLAIN}</p>*/
/* */
/* 	<fieldset>*/
/* 	{avatar_drivers.OUTPUT}*/
/* 	</fieldset>*/
/* 	</div>*/
/* <!-- END avatar_drivers -->*/
/* 	</div>*/
/* <!-- IF not S_GROUP_MANAGE -->*/
/* 	<fieldset class="submit-buttons">*/
/* 		<input type="reset" value="{L_RESET}" name="reset" class="button2" /> &nbsp;*/
/* 		<input type="submit" name="submit" value="{L_SUBMIT}" class="button1" />*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* 	</div>*/
/* </div>*/
/* */
