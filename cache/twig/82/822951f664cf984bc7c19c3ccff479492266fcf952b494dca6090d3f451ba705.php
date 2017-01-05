<?php

/* timezone_option.html */
class __TwigTemplate_66a67fe9e64d3e9edfcc8a756e01e5f3eaaf3d55bc8998d49e2be2c50db4431d extends Twig_Template
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
        echo "<dl>
\t<dt><label for=\"timezone\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("BOARD_TIMEZONE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t";
        // line 3
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "timezone_date", array()))) {
            // line 4
            echo "\t<dd id=\"tz_select_date\" style=\"display: none;\">
\t\t<select name=\"tz_date\" id=\"tz_date\" class=\"autowidth tz_select\">
\t\t\t<option value=\"\">";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("SELECT_CURRENT_TIME");
            echo "</option>
\t\t\t";
            // line 7
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "timezone_date", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone_date"]) {
                // line 8
                echo "\t\t\t\t<option value=\"";
                if (isset($context["timezone_date"])) { $_timezone_date_ = $context["timezone_date"]; } else { $_timezone_date_ = null; }
                echo $this->getAttribute($_timezone_date_, "VALUE", array());
                echo "\"";
                if (isset($context["timezone_date"])) { $_timezone_date_ = $context["timezone_date"]; } else { $_timezone_date_ = null; }
                if ($this->getAttribute($_timezone_date_, "SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (isset($context["timezone_date"])) { $_timezone_date_ = $context["timezone_date"]; } else { $_timezone_date_ = null; }
                echo $this->getAttribute($_timezone_date_, "TITLE", array());
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t</select>
\t\t<input type=\"button\" id=\"tz_select_date_suggest\" class=\"button2\" style=\"display: none;\" timezone-preselect=\"";
            // line 11
            if (isset($context["S_TZ_PRESELECT"])) { $_S_TZ_PRESELECT_ = $context["S_TZ_PRESELECT"]; } else { $_S_TZ_PRESELECT_ = null; }
            if ($_S_TZ_PRESELECT_) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" data-l-suggestion=\"";
            echo $this->env->getExtension('phpbb')->lang("TIMEZONE_DATE_SUGGESTION");
            echo "\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("TIMEZONE_DATE_SUGGESTION");
            echo "\" />
\t</dd>
\t";
        }
        // line 14
        echo "\t<dd>
\t\t<select name=\"tz\" id=\"timezone\" class=\"autowidth tz_select\">
\t\t\t<option value=\"\">";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("SELECT_TIMEZONE");
        echo "</option>
\t\t\t";
        // line 17
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "timezone_select", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone_select"]) {
            // line 18
            echo "\t\t\t<optgroup label=\"";
            if (isset($context["timezone_select"])) { $_timezone_select_ = $context["timezone_select"]; } else { $_timezone_select_ = null; }
            echo $this->getAttribute($_timezone_select_, "LABEL", array());
            echo "\" data-tz-value=\"";
            if (isset($context["timezone_select"])) { $_timezone_select_ = $context["timezone_select"]; } else { $_timezone_select_ = null; }
            echo $this->getAttribute($_timezone_select_, "VALUE", array());
            echo "\">
\t\t\t\t";
            // line 19
            if (isset($context["timezone_select"])) { $_timezone_select_ = $context["timezone_select"]; } else { $_timezone_select_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_timezone_select_, "timezone_options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone_options"]) {
                // line 20
                echo "\t\t\t\t<option title=\"";
                if (isset($context["timezone_options"])) { $_timezone_options_ = $context["timezone_options"]; } else { $_timezone_options_ = null; }
                echo $this->getAttribute($_timezone_options_, "TITLE", array());
                echo "\" value=\"";
                if (isset($context["timezone_options"])) { $_timezone_options_ = $context["timezone_options"]; } else { $_timezone_options_ = null; }
                echo $this->getAttribute($_timezone_options_, "VALUE", array());
                echo "\"";
                if (isset($context["timezone_options"])) { $_timezone_options_ = $context["timezone_options"]; } else { $_timezone_options_ = null; }
                if ($this->getAttribute($_timezone_options_, "SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (isset($context["timezone_options"])) { $_timezone_options_ = $context["timezone_options"]; } else { $_timezone_options_ = null; }
                echo $this->getAttribute($_timezone_options_, "LABEL", array());
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t</optgroup>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_select'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</select>

\t\t";
        // line 26
        $asset_file = "timezone.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('2');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 27
        echo "\t</dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "timezone_option.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 27,  138 => 26,  134 => 24,  127 => 22,  106 => 20,  101 => 19,  92 => 18,  87 => 17,  83 => 16,  79 => 14,  64 => 11,  61 => 10,  43 => 8,  38 => 7,  34 => 6,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
/* <dl>*/
/* 	<dt><label for="timezone">{L_BOARD_TIMEZONE}{L_COLON}</label></dt>*/
/* 	<!-- IF .timezone_date -->*/
/* 	<dd id="tz_select_date" style="display: none;">*/
/* 		<select name="tz_date" id="tz_date" class="autowidth tz_select">*/
/* 			<option value="">{L_SELECT_CURRENT_TIME}</option>*/
/* 			<!-- BEGIN timezone_date -->*/
/* 				<option value="{timezone_date.VALUE}"<!-- IF timezone_date.SELECTED --> selected="selected"<!-- ENDIF -->>{timezone_date.TITLE}</option>*/
/* 			<!-- END timezone_date -->*/
/* 		</select>*/
/* 		<input type="button" id="tz_select_date_suggest" class="button2" style="display: none;" timezone-preselect="<!-- IF S_TZ_PRESELECT -->true<!-- ELSE -->false<!-- ENDIF -->" data-l-suggestion="{L_TIMEZONE_DATE_SUGGESTION}" value="{L_TIMEZONE_DATE_SUGGESTION}" />*/
/* 	</dd>*/
/* 	<!-- ENDIF -->*/
/* 	<dd>*/
/* 		<select name="tz" id="timezone" class="autowidth tz_select">*/
/* 			<option value="">{L_SELECT_TIMEZONE}</option>*/
/* 			<!-- BEGIN timezone_select -->*/
/* 			<optgroup label="{timezone_select.LABEL}" data-tz-value="{timezone_select.VALUE}">*/
/* 				<!-- BEGIN timezone_options -->*/
/* 				<option title="{timezone_select.timezone_options.TITLE}" value="{timezone_select.timezone_options.VALUE}"<!-- IF timezone_select.timezone_options.SELECTED --> selected="selected"<!-- ENDIF -->>{timezone_select.timezone_options.LABEL}</option>*/
/* 				<!-- END timezone_options -->*/
/* 			</optgroup>*/
/* 			<!-- END timezone_select -->*/
/* 		</select>*/
/* */
/* 		<!-- INCLUDEJS timezone.js -->*/
/* 	</dd>*/
/* </dl>*/
/* */
