<?php

/* attachment.html */
class __TwigTemplate_d22f19611084be0b3020d33a0918e586f17295531cb737b8d712d14df4942e23 extends Twig_Template
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
        if (isset($context["attachment_file_before"])) { $_attachment_file_before_ = $context["attachment_file_before"]; } else { $_attachment_file_before_ = null; }
        // line 2
        echo "
";
        // line 3
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "_file", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["_file"]) {
            // line 4
            echo "\t";
            if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
            if ($this->getAttribute($__file_, "S_DENIED", array())) {
                // line 5
                echo "\t<p>[";
                if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                echo $this->getAttribute($__file_, "DENIED_MESSAGE", array());
                echo "]</p>
\t";
            } else {
                // line 7
                echo "\t\t";
                if (isset($context["attachment_file_prepend"])) { $_attachment_file_prepend_ = $context["attachment_file_prepend"]; } else { $_attachment_file_prepend_ = null; }
                // line 8
                echo "
\t\t";
                // line 9
                if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                if ($this->getAttribute($__file_, "S_THUMBNAIL", array())) {
                    // line 10
                    echo "\t\t<dl class=\"thumbnail\">
\t\t\t<dt><a href=\"";
                    // line 11
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "U_DOWNLOAD_LINK", array());
                    echo "\"><img src=\"";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "THUMB_IMAGE", array());
                    echo "\" class=\"postimage\" alt=\"";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "DOWNLOAD_NAME", array());
                    echo "\" title=\"";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "DOWNLOAD_NAME", array());
                    echo " (";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "FILESIZE", array());
                    echo " ";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "SIZE_LANG", array());
                    echo ") ";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "L_DOWNLOAD_COUNT", array());
                    echo "\" /></a></dt>
\t\t\t";
                    // line 12
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    if ($this->getAttribute($__file_, "COMMENT", array())) {
                        echo "<dd> ";
                        if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                        echo $this->getAttribute($__file_, "COMMENT", array());
                        echo "</dd>";
                    }
                    // line 13
                    echo "\t\t</dl>
\t\t";
                }
                // line 15
                echo "
\t\t";
                // line 16
                if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                if ($this->getAttribute($__file_, "S_IMAGE", array())) {
                    // line 17
                    echo "\t\t<dl class=\"file\">
\t\t\t<dt class=\"attach-image\"><img src=\"";
                    // line 18
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "U_INLINE_LINK", array());
                    echo "\" class=\"postimage\" alt=\"";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "DOWNLOAD_NAME", array());
                    echo "\" onclick=\"viewableArea(this);\" /></dt>
\t\t\t";
                    // line 19
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    if ($this->getAttribute($__file_, "COMMENT", array())) {
                        echo "<dd><em>";
                        if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                        echo $this->getAttribute($__file_, "COMMENT", array());
                        echo "</em></dd>";
                    }
                    // line 20
                    echo "\t\t\t<dd>";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "DOWNLOAD_NAME", array());
                    echo " (";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "FILESIZE", array());
                    echo " ";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "SIZE_LANG", array());
                    echo ") ";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "L_DOWNLOAD_COUNT", array());
                    echo "</dd>
\t\t</dl>
\t\t";
                }
                // line 23
                echo "
\t\t";
                // line 24
                if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                if ($this->getAttribute($__file_, "S_FILE", array())) {
                    // line 25
                    echo "\t\t<dl class=\"file\">
\t\t\t<dt>";
                    // line 26
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    if ($this->getAttribute($__file_, "UPLOAD_ICON", array())) {
                        if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                        echo $this->getAttribute($__file_, "UPLOAD_ICON", array());
                        echo " ";
                    }
                    echo "<a class=\"postlink\" href=\"";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "U_DOWNLOAD_LINK", array());
                    echo "\">";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "DOWNLOAD_NAME", array());
                    echo "</a></dt>
\t\t\t";
                    // line 27
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    if ($this->getAttribute($__file_, "COMMENT", array())) {
                        echo "<dd><em>";
                        if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                        echo $this->getAttribute($__file_, "COMMENT", array());
                        echo "</em></dd>";
                    }
                    // line 28
                    echo "\t\t\t<dd>(";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "FILESIZE", array());
                    echo " ";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "SIZE_LANG", array());
                    echo ") ";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "L_DOWNLOAD_COUNT", array());
                    echo "</dd>
\t\t</dl>
\t\t";
                }
                // line 31
                echo "
\t\t";
                // line 32
                if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                if ($this->getAttribute($__file_, "S_WM_FILE", array())) {
                    // line 33
                    echo "\t\t\t<!-- method used here from http://alistapart.com/articles/byebyeembed / autosizing seems to not work always, this will not fix -->
\t\t\t<object width=\"320\" height=\"285\" classid=\"CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6\" id=\"wmstream_";
                    // line 34
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo "\">
\t\t\t\t<param name=\"url\" value=\"";
                    // line 35
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "U_DOWNLOAD_LINK", array());
                    echo "\" />
\t\t\t\t<param name=\"showcontrols\" value=\"1\" />
\t\t\t\t<param name=\"showdisplay\" value=\"0\" />
\t\t\t\t<param name=\"showstatusbar\" value=\"0\" />
\t\t\t\t<param name=\"autosize\" value=\"1\" />
\t\t\t\t<param name=\"autostart\" value=\"0\" />
\t\t\t\t<param name=\"visible\" value=\"1\" />
\t\t\t\t<param name=\"animationstart\" value=\"0\" />
\t\t\t\t<param name=\"loop\" value=\"0\" />
\t\t\t\t<param name=\"src\" value=\"";
                    // line 44
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "U_DOWNLOAD_LINK", array());
                    echo "\" />
\t\t\t\t<!--[if !IE]>-->
\t\t\t\t\t<object width=\"320\" height=\"285\" type=\"video/x-ms-wmv\" data=\"";
                    // line 46
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "U_DOWNLOAD_LINK", array());
                    echo "\">
\t\t\t\t\t\t<param name=\"src\" value=\"";
                    // line 47
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "U_DOWNLOAD_LINK", array());
                    echo "\" />
\t\t\t\t\t\t<param name=\"controller\" value=\"1\" />
\t\t\t\t\t\t<param name=\"showcontrols\" value=\"1\" />
\t\t\t\t\t\t<param name=\"showdisplay\" value=\"0\" />
\t\t\t\t\t\t<param name=\"showstatusbar\" value=\"0\" />
\t\t\t\t\t\t<param name=\"autosize\" value=\"1\" />
\t\t\t\t\t\t<param name=\"autostart\" value=\"0\" />
\t\t\t\t\t\t<param name=\"visible\" value=\"1\" />
\t\t\t\t\t\t<param name=\"animationstart\" value=\"0\" />
\t\t\t\t\t\t<param name=\"loop\" value=\"0\" />
\t\t\t\t\t</object>
\t\t\t\t<!--<![endif]-->
\t\t\t</object>

\t\t";
                } elseif ($this->getAttribute($__file_, "S_FLASH_FILE", array())) {
                    // line 62
                    echo "\t\t\t<object classid=\"clsid:D27CDB6E-AE6D-11CF-96B8-444553540000\" codebase=\"http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0\" width=\"";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "WIDTH", array());
                    echo "\" height=\"";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "HEIGHT", array());
                    echo "\">
\t\t\t\t<param name=\"movie\" value=\"";
                    // line 63
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "U_VIEW_LINK", array());
                    echo "\" />
\t\t\t\t<param name=\"play\" value=\"true\" />
\t\t\t\t<param name=\"loop\" value=\"true\" />
\t\t\t\t<param name=\"quality\" value=\"high\" />
\t\t\t\t<param name=\"allowScriptAccess\" value=\"never\" />
\t\t\t\t<param name=\"allowNetworking\" value=\"internal\" />
\t\t\t\t<embed src=\"";
                    // line 69
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "U_VIEW_LINK", array());
                    echo "\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\" width=\"";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "WIDTH", array());
                    echo "\" height=\"";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "HEIGHT", array());
                    echo "\" play=\"true\" loop=\"true\" quality=\"high\" allowscriptaccess=\"never\" allownetworking=\"internal\"></embed>
\t\t\t</object>
\t\t";
                } elseif ($this->getAttribute($__file_, "S_QUICKTIME_FILE", array())) {
                    // line 72
                    echo "\t\t\t<object id=\"qtstream_";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo "\" classid=\"clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B\" codebase=\"http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0\" width=\"320\" height=\"285\">
\t\t\t\t<param name=\"src\" value=\"";
                    // line 73
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "U_DOWNLOAD_LINK", array());
                    echo "\" />
\t\t\t\t<param name=\"controller\" value=\"true\" />
\t\t\t\t<param name=\"autoplay\" value=\"false\" />
\t\t\t\t<param name=\"type\" value=\"video/quicktime\" />
\t\t\t\t<embed name=\"qtstream_";
                    // line 77
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo "\" src=\"";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "U_DOWNLOAD_LINK", array());
                    echo "\" pluginspage=\"http://www.apple.com/quicktime/download/\" enablejavascript=\"true\" controller=\"true\" width=\"320\" height=\"285\" type=\"video/quicktime\" autoplay=\"false\"></embed>
\t\t\t</object>
\t\t";
                } elseif ($this->getAttribute($__file_, "S_RM_FILE", array())) {
                    // line 80
                    echo "\t\t\t<object id=\"rmstream_";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo "\" classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" width=\"200\" height=\"50\">
\t\t\t\t<param name=\"src\" value=\"";
                    // line 81
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "U_DOWNLOAD_LINK", array());
                    echo "\" />
\t\t\t\t<param name=\"autostart\" value=\"false\" />
\t\t\t\t<param name=\"controls\" value=\"ImageWindow\" />
\t\t\t\t<param name=\"console\" value=\"ctrls_";
                    // line 84
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo "\" />
\t\t\t\t<param name=\"prefetch\" value=\"false\" />
\t\t\t\t<embed name=\"rmstream_";
                    // line 86
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo "\" type=\"audio/x-pn-realaudio-plugin\" src=\"";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "U_DOWNLOAD_LINK", array());
                    echo "\" width=\"0\" height=\"0\" autostart=\"false\" controls=\"ImageWindow\" console=\"ctrls_";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo "\" prefetch=\"false\"></embed>
\t\t\t</object>
\t\t\t<br />
\t\t\t<object id=\"ctrls_";
                    // line 89
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo "\" classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" width=\"0\" height=\"36\">
\t\t\t\t<param name=\"controls\" value=\"ControlPanel\" />
\t\t\t\t<param name=\"console\" value=\"ctrls_";
                    // line 91
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo "\" />
\t\t\t\t<embed name=\"ctrls_";
                    // line 92
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo "\" type=\"audio/x-pn-realaudio-plugin\" width=\"200\" height=\"36\" controls=\"ControlPanel\" console=\"ctrls_";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo "\"></embed>
\t\t\t</object>

\t\t\t<script type=\"text/javascript\">
\t\t\t// <![CDATA[
\t\t\t\tif (document.rmstream_";
                    // line 97
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo ".GetClipWidth)
\t\t\t\t{
\t\t\t\t\twhile (!document.rmstream_";
                    // line 99
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo ".GetClipWidth())
\t\t\t\t\t{
\t\t\t\t\t}

\t\t\t\t\tvar width = document.rmstream_";
                    // line 103
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo ".GetClipWidth();
\t\t\t\t\tvar height = document.rmstream_";
                    // line 104
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo ".GetClipHeight();

\t\t\t\t\tdocument.rmstream_";
                    // line 106
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo ".width = width;
\t\t\t\t\tdocument.rmstream_";
                    // line 107
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo ".height = height;
\t\t\t\t\tdocument.ctrls_";
                    // line 108
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "ATTACH_ID", array());
                    echo ".width = width;
\t\t\t\t}
\t\t\t// ]]>
\t\t\t</script>
\t\t";
                }
                // line 113
                echo "
\t\t";
                // line 114
                if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                if (((($this->getAttribute($__file_, "S_WM_FILE", array()) || $this->getAttribute($__file_, "S_RM_FILE", array())) || $this->getAttribute($__file_, "S_FLASH_FILE", array())) || $this->getAttribute($__file_, "S_QUICKTIME_FILE", array()))) {
                    // line 115
                    echo "\t\t\t<p>
\t\t\t";
                    // line 116
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    if ($this->getAttribute($__file_, "S_QUICKTIME_FILE", array())) {
                        echo "<a href=\"#\" onclick=\"play_qt_file(document.qtstream_";
                        if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                        echo $this->getAttribute($__file_, "ATTACH_ID", array());
                        echo "); return false;\">[ ";
                        echo $this->env->getExtension('phpbb')->lang("PLAY_QUICKTIME_FILE");
                        echo " ]</a> ";
                    }
                    // line 117
                    echo "\t\t\t<a href=\"";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "U_DOWNLOAD_LINK", array());
                    echo "\">";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "DOWNLOAD_NAME", array());
                    echo "</a> [ ";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "FILESIZE", array());
                    echo " ";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "SIZE_LANG", array());
                    echo " | ";
                    if (isset($context["_file"])) { $__file_ = $context["_file"]; } else { $__file_ = null; }
                    echo $this->getAttribute($__file_, "L_DOWNLOAD_COUNT", array());
                    echo " ]</p>
\t\t";
                }
                // line 119
                echo "
\t\t";
                // line 120
                if (isset($context["attachment_file_append"])) { $_attachment_file_append_ = $context["attachment_file_append"]; } else { $_attachment_file_append_ = null; }
                // line 121
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        if (isset($context["attachment_file_after"])) { $_attachment_file_after_ = $context["attachment_file_after"]; } else { $_attachment_file_after_ = null; }
    }

    public function getTemplateName()
    {
        return "attachment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 123,  430 => 121,  428 => 120,  425 => 119,  406 => 117,  396 => 116,  393 => 115,  390 => 114,  387 => 113,  378 => 108,  373 => 107,  368 => 106,  362 => 104,  357 => 103,  349 => 99,  343 => 97,  331 => 92,  326 => 91,  320 => 89,  307 => 86,  301 => 84,  294 => 81,  288 => 80,  278 => 77,  270 => 73,  264 => 72,  251 => 69,  241 => 63,  232 => 62,  213 => 47,  208 => 46,  202 => 44,  189 => 35,  184 => 34,  181 => 33,  178 => 32,  175 => 31,  161 => 28,  153 => 27,  138 => 26,  135 => 25,  132 => 24,  129 => 23,  112 => 20,  104 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  83 => 13,  75 => 12,  52 => 11,  49 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 5,  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- EVENT attachment_file_before -->*/
/* */
/* <!-- BEGIN _file -->*/
/* 	<!-- IF _file.S_DENIED -->*/
/* 	<p>[{_file.DENIED_MESSAGE}]</p>*/
/* 	<!-- ELSE -->*/
/* 		<!-- EVENT attachment_file_prepend -->*/
/* */
/* 		<!-- IF _file.S_THUMBNAIL -->*/
/* 		<dl class="thumbnail">*/
/* 			<dt><a href="{_file.U_DOWNLOAD_LINK}"><img src="{_file.THUMB_IMAGE}" class="postimage" alt="{_file.DOWNLOAD_NAME}" title="{_file.DOWNLOAD_NAME} ({_file.FILESIZE} {_file.SIZE_LANG}) {_file.L_DOWNLOAD_COUNT}" /></a></dt>*/
/* 			<!-- IF _file.COMMENT --><dd> {_file.COMMENT}</dd><!-- ENDIF -->*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF _file.S_IMAGE -->*/
/* 		<dl class="file">*/
/* 			<dt class="attach-image"><img src="{_file.U_INLINE_LINK}" class="postimage" alt="{_file.DOWNLOAD_NAME}" onclick="viewableArea(this);" /></dt>*/
/* 			<!-- IF _file.COMMENT --><dd><em>{_file.COMMENT}</em></dd><!-- ENDIF -->*/
/* 			<dd>{_file.DOWNLOAD_NAME} ({_file.FILESIZE} {_file.SIZE_LANG}) {_file.L_DOWNLOAD_COUNT}</dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF _file.S_FILE -->*/
/* 		<dl class="file">*/
/* 			<dt><!-- IF _file.UPLOAD_ICON -->{_file.UPLOAD_ICON} <!-- ENDIF --><a class="postlink" href="{_file.U_DOWNLOAD_LINK}">{_file.DOWNLOAD_NAME}</a></dt>*/
/* 			<!-- IF _file.COMMENT --><dd><em>{_file.COMMENT}</em></dd><!-- ENDIF -->*/
/* 			<dd>({_file.FILESIZE} {_file.SIZE_LANG}) {_file.L_DOWNLOAD_COUNT}</dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF _file.S_WM_FILE -->*/
/* 			<!-- method used here from http://alistapart.com/articles/byebyeembed / autosizing seems to not work always, this will not fix -->*/
/* 			<object width="320" height="285" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_{_file.ATTACH_ID}">*/
/* 				<param name="url" value="{_file.U_DOWNLOAD_LINK}" />*/
/* 				<param name="showcontrols" value="1" />*/
/* 				<param name="showdisplay" value="0" />*/
/* 				<param name="showstatusbar" value="0" />*/
/* 				<param name="autosize" value="1" />*/
/* 				<param name="autostart" value="0" />*/
/* 				<param name="visible" value="1" />*/
/* 				<param name="animationstart" value="0" />*/
/* 				<param name="loop" value="0" />*/
/* 				<param name="src" value="{_file.U_DOWNLOAD_LINK}" />*/
/* 				<!--[if !IE]>-->*/
/* 					<object width="320" height="285" type="video/x-ms-wmv" data="{_file.U_DOWNLOAD_LINK}">*/
/* 						<param name="src" value="{_file.U_DOWNLOAD_LINK}" />*/
/* 						<param name="controller" value="1" />*/
/* 						<param name="showcontrols" value="1" />*/
/* 						<param name="showdisplay" value="0" />*/
/* 						<param name="showstatusbar" value="0" />*/
/* 						<param name="autosize" value="1" />*/
/* 						<param name="autostart" value="0" />*/
/* 						<param name="visible" value="1" />*/
/* 						<param name="animationstart" value="0" />*/
/* 						<param name="loop" value="0" />*/
/* 					</object>*/
/* 				<!--<![endif]-->*/
/* 			</object>*/
/* */
/* 		<!-- ELSEIF _file.S_FLASH_FILE -->*/
/* 			<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="{_file.WIDTH}" height="{_file.HEIGHT}">*/
/* 				<param name="movie" value="{_file.U_VIEW_LINK}" />*/
/* 				<param name="play" value="true" />*/
/* 				<param name="loop" value="true" />*/
/* 				<param name="quality" value="high" />*/
/* 				<param name="allowScriptAccess" value="never" />*/
/* 				<param name="allowNetworking" value="internal" />*/
/* 				<embed src="{_file.U_VIEW_LINK}" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="{_file.WIDTH}" height="{_file.HEIGHT}" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed>*/
/* 			</object>*/
/* 		<!-- ELSEIF _file.S_QUICKTIME_FILE -->*/
/* 			<object id="qtstream_{_file.ATTACH_ID}" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="320" height="285">*/
/* 				<param name="src" value="{_file.U_DOWNLOAD_LINK}" />*/
/* 				<param name="controller" value="true" />*/
/* 				<param name="autoplay" value="false" />*/
/* 				<param name="type" value="video/quicktime" />*/
/* 				<embed name="qtstream_{_file.ATTACH_ID}" src="{_file.U_DOWNLOAD_LINK}" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="320" height="285" type="video/quicktime" autoplay="false"></embed>*/
/* 			</object>*/
/* 		<!-- ELSEIF _file.S_RM_FILE -->*/
/* 			<object id="rmstream_{_file.ATTACH_ID}" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="50">*/
/* 				<param name="src" value="{_file.U_DOWNLOAD_LINK}" />*/
/* 				<param name="autostart" value="false" />*/
/* 				<param name="controls" value="ImageWindow" />*/
/* 				<param name="console" value="ctrls_{_file.ATTACH_ID}" />*/
/* 				<param name="prefetch" value="false" />*/
/* 				<embed name="rmstream_{_file.ATTACH_ID}" type="audio/x-pn-realaudio-plugin" src="{_file.U_DOWNLOAD_LINK}" width="0" height="0" autostart="false" controls="ImageWindow" console="ctrls_{_file.ATTACH_ID}" prefetch="false"></embed>*/
/* 			</object>*/
/* 			<br />*/
/* 			<object id="ctrls_{_file.ATTACH_ID}" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="0" height="36">*/
/* 				<param name="controls" value="ControlPanel" />*/
/* 				<param name="console" value="ctrls_{_file.ATTACH_ID}" />*/
/* 				<embed name="ctrls_{_file.ATTACH_ID}" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_{_file.ATTACH_ID}"></embed>*/
/* 			</object>*/
/* */
/* 			<script type="text/javascript">*/
/* 			// <![CDATA[*/
/* 				if (document.rmstream_{_file.ATTACH_ID}.GetClipWidth)*/
/* 				{*/
/* 					while (!document.rmstream_{_file.ATTACH_ID}.GetClipWidth())*/
/* 					{*/
/* 					}*/
/* */
/* 					var width = document.rmstream_{_file.ATTACH_ID}.GetClipWidth();*/
/* 					var height = document.rmstream_{_file.ATTACH_ID}.GetClipHeight();*/
/* */
/* 					document.rmstream_{_file.ATTACH_ID}.width = width;*/
/* 					document.rmstream_{_file.ATTACH_ID}.height = height;*/
/* 					document.ctrls_{_file.ATTACH_ID}.width = width;*/
/* 				}*/
/* 			// ]]>*/
/* 			</script>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF _file.S_WM_FILE or _file.S_RM_FILE or _file.S_FLASH_FILE or _file.S_QUICKTIME_FILE -->*/
/* 			<p>*/
/* 			<!-- IF _file.S_QUICKTIME_FILE --><a href="#" onclick="play_qt_file(document.qtstream_{_file.ATTACH_ID}); return false;">[ {L_PLAY_QUICKTIME_FILE} ]</a> <!-- ENDIF -->*/
/* 			<a href="{_file.U_DOWNLOAD_LINK}">{_file.DOWNLOAD_NAME}</a> [ {_file.FILESIZE} {_file.SIZE_LANG} | {_file.L_DOWNLOAD_COUNT} ]</p>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT attachment_file_append -->*/
/* 	<!-- ENDIF -->*/
/* <!-- END _file -->*/
/* <!-- EVENT attachment_file_after -->*/
/* */
