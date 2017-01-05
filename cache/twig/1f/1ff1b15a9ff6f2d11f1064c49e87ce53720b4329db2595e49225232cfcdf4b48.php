<?php

/* ucp_profile_signature.html */
class __TwigTemplate_0522bf6d73d052e0c0803e1a33c0d2a81c7b16268f076a44110617481060014f extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_profile_signature.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"postform\" method=\"post\" action=\"";
        // line 3
        if (isset($context["S_UCP_ACTION"])) { $_S_UCP_ACTION_ = $context["S_UCP_ACTION"]; } else { $_S_UCP_ACTION_ = null; }
        echo $_S_UCP_ACTION_;
        echo "\"";
        if (isset($context["S_FORM_ENCTYPE"])) { $_S_FORM_ENCTYPE_ = $context["S_FORM_ENCTYPE"]; } else { $_S_FORM_ENCTYPE_ = null; }
        echo $_S_FORM_ENCTYPE_;
        echo ">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

";
        // line 7
        if (isset($context["SIGNATURE_PREVIEW"])) { $_SIGNATURE_PREVIEW_ = $context["SIGNATURE_PREVIEW"]; } else { $_SIGNATURE_PREVIEW_ = null; }
        if (($_SIGNATURE_PREVIEW_ != "")) {
            // line 8
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<h3>";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("SIGNATURE_PREVIEW");
            echo "</h3>
\t\t<div class=\"postbody\">
\t\t\t<div class=\"signature standalone\">";
            // line 12
            if (isset($context["SIGNATURE_PREVIEW"])) { $_SIGNATURE_PREVIEW_ = $context["SIGNATURE_PREVIEW"]; } else { $_SIGNATURE_PREVIEW_ = null; }
            echo $_SIGNATURE_PREVIEW_;
            echo "</div>
\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 17
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("SIGNATURE_EXPLAIN");
        echo "</p>

\t";
        // line 23
        if (isset($context["SIG_EDIT"])) { $_SIG_EDIT_ = $context["SIG_EDIT"]; } else { $_SIG_EDIT_ = null; }
        $value = 1;
        $context['definition']->set('SIG_EDIT', $value);
        // line 24
        echo "\t";
        $location = "posting_editor.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_editor.html", "ucp_profile_signature.html", 24)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 25
        echo "\t<h3>";
        echo $this->env->getExtension('phpbb')->lang("OPTIONS");
        echo "</h3>
\t<fieldset>
\t\t";
        // line 27
        if (isset($context["S_BBCODE_ALLOWED"])) { $_S_BBCODE_ALLOWED_ = $context["S_BBCODE_ALLOWED"]; } else { $_S_BBCODE_ALLOWED_ = null; }
        if ($_S_BBCODE_ALLOWED_) {
            // line 28
            echo "\t\t\t<div><label for=\"disable_bbcode\"><input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
            if (isset($context["S_BBCODE_CHECKED"])) { $_S_BBCODE_CHECKED_ = $context["S_BBCODE_CHECKED"]; } else { $_S_BBCODE_CHECKED_ = null; }
            echo $_S_BBCODE_CHECKED_;
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
            echo "</label></div>
\t\t";
        }
        // line 30
        echo "\t\t";
        if (isset($context["S_SMILIES_ALLOWED"])) { $_S_SMILIES_ALLOWED_ = $context["S_SMILIES_ALLOWED"]; } else { $_S_SMILIES_ALLOWED_ = null; }
        if ($_S_SMILIES_ALLOWED_) {
            // line 31
            echo "\t\t\t<div><label for=\"disable_smilies\"><input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
            if (isset($context["S_SMILIES_CHECKED"])) { $_S_SMILIES_CHECKED_ = $context["S_SMILIES_CHECKED"]; } else { $_S_SMILIES_CHECKED_ = null; }
            echo $_S_SMILIES_CHECKED_;
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
            echo "</label></div>
\t\t";
        }
        // line 33
        echo "\t\t";
        if (isset($context["S_LINKS_ALLOWED"])) { $_S_LINKS_ALLOWED_ = $context["S_LINKS_ALLOWED"]; } else { $_S_LINKS_ALLOWED_ = null; }
        if ($_S_LINKS_ALLOWED_) {
            // line 34
            echo "\t\t\t<div><label for=\"disable_magic_url\"><input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
            if (isset($context["S_MAGIC_URL_CHECKED"])) { $_S_MAGIC_URL_CHECKED_ = $context["S_MAGIC_URL_CHECKED"]; } else { $_S_MAGIC_URL_CHECKED_ = null; }
            echo $_S_MAGIC_URL_CHECKED_;
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
            echo "</label></div>
\t\t";
        }
        // line 36
        echo "
\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 43
        if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
        echo $_S_HIDDEN_FIELDS_;
        echo "
\t<input type=\"reset\" name=\"reset\" value=\"";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"preview\" value=\"";
        // line 45
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo "\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 46
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 47
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>
</form>

";
        // line 51
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_signature.html", 51)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_signature.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 51,  167 => 47,  163 => 46,  159 => 45,  155 => 44,  150 => 43,  141 => 36,  132 => 34,  128 => 33,  119 => 31,  115 => 30,  106 => 28,  103 => 27,  97 => 25,  84 => 24,  80 => 23,  75 => 21,  69 => 17,  60 => 12,  55 => 10,  51 => 8,  48 => 7,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="postform" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* */
/* <h2>{L_TITLE}</h2>*/
/* */
/* <!-- IF SIGNATURE_PREVIEW != '' -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 		<h3>{L_SIGNATURE_PREVIEW}</h3>*/
/* 		<div class="postbody">*/
/* 			<div class="signature standalone">{SIGNATURE_PREVIEW}</div>*/
/* 		</div>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<p>{L_SIGNATURE_EXPLAIN}</p>*/
/* */
/* 	<!-- DEFINE $SIG_EDIT = 1 -->*/
/* 	<!-- INCLUDE posting_editor.html -->*/
/* 	<h3>{L_OPTIONS}</h3>*/
/* 	<fieldset>*/
/* 		<!-- IF S_BBCODE_ALLOWED -->*/
/* 			<div><label for="disable_bbcode"><input type="checkbox" name="disable_bbcode" id="disable_bbcode"{S_BBCODE_CHECKED} /> {L_DISABLE_BBCODE}</label></div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_SMILIES_ALLOWED -->*/
/* 			<div><label for="disable_smilies"><input type="checkbox" name="disable_smilies" id="disable_smilies"{S_SMILIES_CHECKED} /> {L_DISABLE_SMILIES}</label></div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_LINKS_ALLOWED -->*/
/* 			<div><label for="disable_magic_url"><input type="checkbox" name="disable_magic_url" id="disable_magic_url"{S_MAGIC_URL_CHECKED} /> {L_DISABLE_MAGIC_URL}</label></div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <fieldset class="submit-buttons">*/
/* 	{S_HIDDEN_FIELDS}*/
/* 	<input type="reset" name="reset" value="{L_RESET}" class="button2" />&nbsp;*/
/* 	<input type="submit" name="preview" value="{L_PREVIEW}" class="button2" />&nbsp;*/
/* 	<input type="submit" name="submit" value="{L_SUBMIT}" class="button1" />*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
