<?php

/* timezone_option.html */
class __TwigTemplate_941c741d6faadbed6ccd3ade2525025883d6c0da3ab78e56613ecfeeec597213 extends Twig_Template
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
                echo "\t\t\t<option value=\"";
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
\t</dd>
\t";
        }
        // line 13
        echo "\t<dd>
\t\t<select name=\"tz\" id=\"timezone\" class=\"autowidth tz_select\">
\t\t\t<option value=\"\">";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("SELECT_TIMEZONE");
        echo "</option>
\t\t\t";
        // line 16
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "timezone_select", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone_select"]) {
            // line 17
            echo "\t\t\t<optgroup label=\"";
            if (isset($context["timezone_select"])) { $_timezone_select_ = $context["timezone_select"]; } else { $_timezone_select_ = null; }
            echo $this->getAttribute($_timezone_select_, "LABEL", array());
            echo "\" data-tz-value=\"";
            if (isset($context["timezone_select"])) { $_timezone_select_ = $context["timezone_select"]; } else { $_timezone_select_ = null; }
            echo $this->getAttribute($_timezone_select_, "VALUE", array());
            echo "\">
\t\t\t\t";
            // line 18
            if (isset($context["timezone_select"])) { $_timezone_select_ = $context["timezone_select"]; } else { $_timezone_select_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_timezone_select_, "timezone_options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone_options"]) {
                // line 19
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
            // line 21
            echo "\t\t\t</optgroup>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_select'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</select>

\t\t";
        // line 25
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
        // line 26
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
        return array (  140 => 26,  125 => 25,  121 => 23,  114 => 21,  93 => 19,  88 => 18,  79 => 17,  74 => 16,  70 => 15,  66 => 13,  61 => 10,  43 => 8,  38 => 7,  34 => 6,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
/* <dl>*/
/* 	<dt><label for="timezone">{L_BOARD_TIMEZONE}{L_COLON}</label></dt>*/
/* 	<!-- IF .timezone_date -->*/
/* 	<dd id="tz_select_date" style="display: none;">*/
/* 		<select name="tz_date" id="tz_date" class="autowidth tz_select">*/
/* 			<option value="">{L_SELECT_CURRENT_TIME}</option>*/
/* 			<!-- BEGIN timezone_date -->*/
/* 			<option value="{timezone_date.VALUE}"<!-- IF timezone_date.SELECTED --> selected="selected"<!-- ENDIF -->>{timezone_date.TITLE}</option>*/
/* 			<!-- END timezone_date -->*/
/* 		</select>*/
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
