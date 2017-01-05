<?php

/* ucp_avatar_options_upload.html */
class __TwigTemplate_1c6cdd6ad6fdbdfdcec6881504fd1fb1a452bfc5af4c272a8d6f058aeea8b272 extends Twig_Template
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
\t<dt><label for=\"avatar_upload_file\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("UPLOAD_AVATAR_FILE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"";
        // line 3
        if (isset($context["AVATAR_UPLOAD_SIZE"])) { $_AVATAR_UPLOAD_SIZE_ = $context["AVATAR_UPLOAD_SIZE"]; } else { $_AVATAR_UPLOAD_SIZE_ = null; }
        echo $_AVATAR_UPLOAD_SIZE_;
        echo "\" /><input type=\"file\" name=\"avatar_upload_file\" id=\"avatar_upload_file\" class=\"inputbox autowidth\" /></dd>
</dl>

";
        // line 6
        if (isset($context["S_UPLOAD_AVATAR_URL"])) { $_S_UPLOAD_AVATAR_URL_ = $context["S_UPLOAD_AVATAR_URL"]; } else { $_S_UPLOAD_AVATAR_URL_ = null; }
        if ($_S_UPLOAD_AVATAR_URL_) {
            // line 7
            echo "\t<dl>
\t\t<dt><label for=\"avatar_upload_url\">";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("UPLOAD_AVATAR_URL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("UPLOAD_AVATAR_URL_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input type=\"url\" name=\"avatar_upload_url\" id=\"avatar_upload_url\" value=\"\" class=\"inputbox\" /></dd>
\t</dl>
";
        }
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options_upload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  34 => 6,  27 => 3,  22 => 2,  19 => 1,);
    }
}
/* <dl>*/
/* 	<dt><label for="avatar_upload_file">{L_UPLOAD_AVATAR_FILE}{L_COLON}</label></dt>*/
/* 	<dd><input type="hidden" name="MAX_FILE_SIZE" value="{AVATAR_UPLOAD_SIZE}" /><input type="file" name="avatar_upload_file" id="avatar_upload_file" class="inputbox autowidth" /></dd>*/
/* </dl>*/
/* */
/* <!-- IF S_UPLOAD_AVATAR_URL -->*/
/* 	<dl>*/
/* 		<dt><label for="avatar_upload_url">{L_UPLOAD_AVATAR_URL}{L_COLON}</label><br /><span>{L_UPLOAD_AVATAR_URL_EXPLAIN}</span></dt>*/
/* 		<dd><input type="url" name="avatar_upload_url" id="avatar_upload_url" value="" class="inputbox" /></dd>*/
/* 	</dl>*/
/* <!-- ENDIF -->*/
/* */
