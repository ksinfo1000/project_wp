<?php

/* acp_attachments.html */
class __TwigTemplate_1926bff83ec441c0b50423236c98d50899e1203a496f64e6a964d6e191455910 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_attachments.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
        if ($_U_BACK_) {
            // line 6
            echo "\t<a href=\"";
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            echo $_U_BACK_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>
";
        }
        // line 8
        echo "
<h1>";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h1>

<p>";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("TITLE_EXPLAIN");
        echo "</p>

";
        // line 13
        if (isset($context["S_WARNING"])) { $_S_WARNING_ = $context["S_WARNING"]; } else { $_S_WARNING_ = null; }
        if ($_S_WARNING_) {
            // line 14
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 16
            if (isset($context["WARNING_MSG"])) { $_WARNING_MSG_ = $context["WARNING_MSG"]; } else { $_WARNING_MSG_ = null; }
            echo $_WARNING_MSG_;
            echo "</p>
\t</div>
";
        }
        // line 19
        echo "
";
        // line 20
        if (isset($context["S_NOTIFY"])) { $_S_NOTIFY_ = $context["S_NOTIFY"]; } else { $_S_NOTIFY_ = null; }
        if ($_S_NOTIFY_) {
            // line 21
            echo "\t<div class=\"successbox\">
\t\t<h3>";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("NOTIFY");
            echo "</h3>
\t\t<p>";
            // line 23
            if (isset($context["NOTIFY_MSG"])) { $_NOTIFY_MSG_ = $context["NOTIFY_MSG"]; } else { $_NOTIFY_MSG_ = null; }
            echo $_NOTIFY_MSG_;
            echo "</p>
\t</div>
";
        }
        // line 26
        echo "
";
        // line 27
        if (isset($context["S_UPLOADING_FILES"])) { $_S_UPLOADING_FILES_ = $context["S_UPLOADING_FILES"]; } else { $_S_UPLOADING_FILES_ = null; }
        if ($_S_UPLOADING_FILES_) {
            // line 28
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb')->lang("UPLOADING_FILES");
            echo "</h2>

\t";
            // line 30
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "upload", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["upload"]) {
                // line 31
                echo "\t\t:: ";
                if (isset($context["upload"])) { $_upload_ = $context["upload"]; } else { $_upload_ = null; }
                echo $this->getAttribute($_upload_, "FILE_INFO", array());
                echo "<br />
\t\t";
                // line 32
                if (isset($context["upload"])) { $_upload_ = $context["upload"]; } else { $_upload_ = null; }
                if ($this->getAttribute($_upload_, "S_DENIED", array())) {
                    echo "<span class=\"error\">";
                    if (isset($context["upload"])) { $_upload_ = $context["upload"]; } else { $_upload_ = null; }
                    echo $this->getAttribute($_upload_, "DENIED", array());
                    echo "</span>";
                } elseif ($this->getAttribute($_upload_, "ERROR_MSG", array())) {
                    echo "<span class=\"error\">";
                    if (isset($context["upload"])) { $_upload_ = $context["upload"]; } else { $_upload_ = null; }
                    echo $this->getAttribute($_upload_, "ERROR_MSG", array());
                    echo "</span>";
                } else {
                    echo "<span class=\"success\">";
                    echo $this->env->getExtension('phpbb')->lang("SUCCESSFULLY_UPLOADED");
                    echo "</span>";
                }
                // line 33
                echo "\t\t<br /><br />
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upload'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
";
        }
        // line 37
        echo "
";
        // line 38
        if (isset($context["S_ATTACHMENT_SETTINGS"])) { $_S_ATTACHMENT_SETTINGS_ = $context["S_ATTACHMENT_SETTINGS"]; } else { $_S_ATTACHMENT_SETTINGS_ = null; }
        if (isset($context["S_EXTENSION_GROUPS"])) { $_S_EXTENSION_GROUPS_ = $context["S_EXTENSION_GROUPS"]; } else { $_S_EXTENSION_GROUPS_ = null; }
        if (isset($context["S_EXTENSIONS"])) { $_S_EXTENSIONS_ = $context["S_EXTENSIONS"]; } else { $_S_EXTENSIONS_ = null; }
        if (isset($context["S_ORPHAN"])) { $_S_ORPHAN_ = $context["S_ORPHAN"]; } else { $_S_ORPHAN_ = null; }
        if (isset($context["S_MANAGE"])) { $_S_MANAGE_ = $context["S_MANAGE"]; } else { $_S_MANAGE_ = null; }
        if ($_S_ATTACHMENT_SETTINGS_) {
            // line 39
            echo "
\t";
            // line 40
            if (isset($context["S_THUMBNAIL_SUPPORT"])) { $_S_THUMBNAIL_SUPPORT_ = $context["S_THUMBNAIL_SUPPORT"]; } else { $_S_THUMBNAIL_SUPPORT_ = null; }
            if ( !$_S_THUMBNAIL_SUPPORT_) {
                // line 41
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 42
                echo $this->env->getExtension('phpbb')->lang("NO_THUMBNAIL_SUPPORT");
                echo "</p>
\t\t</div>
\t";
            }
            // line 45
            echo "
\t<form id=\"attachsettings\" method=\"post\" action=\"";
            // line 46
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">
\t";
            // line 47
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                // line 48
                echo "\t\t";
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                if ($this->getAttribute($_options_, "S_LEGEND", array())) {
                    // line 49
                    echo "\t\t\t";
                    if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                    if ( !$this->getAttribute($_options_, "S_FIRST_ROW", array())) {
                        // line 50
                        echo "\t\t\t\t</fieldset>
\t\t\t";
                    }
                    // line 52
                    echo "\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 53
                    if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                    echo $this->getAttribute($_options_, "LEGEND", array());
                    echo "</legend>
\t\t";
                } else {
                    // line 55
                    echo "
\t\t\t<dl>
\t\t\t\t<dt><label for=\"";
                    // line 57
                    if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                    echo $this->getAttribute($_options_, "KEY", array());
                    echo "\">";
                    if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                    echo $this->getAttribute($_options_, "TITLE", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>";
                    if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                    if ($this->getAttribute($_options_, "S_EXPLAIN", array())) {
                        echo "<br /><span>";
                        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                        echo $this->getAttribute($_options_, "TITLE_EXPLAIN", array());
                        echo "</span>";
                    }
                    echo "</dt>
\t\t\t\t<dd>";
                    // line 58
                    if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                    echo $this->getAttribute($_options_, "CONTENT", array());
                    echo "</dd>
\t\t\t</dl>

\t\t";
                }
                // line 62
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</fieldset>

\t";
            // line 71
            if (isset($context["S_SECURE_DOWNLOADS"])) { $_S_SECURE_DOWNLOADS_ = $context["S_SECURE_DOWNLOADS"]; } else { $_S_SECURE_DOWNLOADS_ = null; }
            if ( !$_S_SECURE_DOWNLOADS_) {
                // line 72
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 73
                echo $this->env->getExtension('phpbb')->lang("SECURE_DOWNLOAD_NOTICE");
                echo "</p>
\t\t</div>
\t";
            }
            // line 76
            echo "
\t<fieldset>
\t\t<legend>";
            // line 78
            echo $this->env->getExtension('phpbb')->lang("SECURE_TITLE");
            echo "</legend>
\t\t<p>";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_ADD_IPS_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt><label for=\"ip_hostname\">";
            // line 81
            echo $this->env->getExtension('phpbb')->lang("IP_HOSTNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><textarea id=\"ip_hostname\" cols=\"40\" rows=\"3\" name=\"ips\"></textarea></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"exclude\">";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("IP_EXCLUDE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("EXCLUDE_ENTERED_IP");
            echo "</span></dt>
\t\t<dd><label><input type=\"radio\" id=\"exclude\" name=\"ipexclude\" value=\"1\" class=\"radio\" /> ";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" name=\"ipexclude\" value=\"0\" checked=\"checked\" class=\"radio\" /> ";
            // line 87
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" id=\"securesubmit\" name=\"securesubmit\" value=\"";
            // line 91
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 96
            echo $this->env->getExtension('phpbb')->lang("REMOVE_IPS");
            echo "</legend>
\t";
            // line 97
            if (isset($context["S_DEFINED_IPS"])) { $_S_DEFINED_IPS_ = $context["S_DEFINED_IPS"]; } else { $_S_DEFINED_IPS_ = null; }
            if ($_S_DEFINED_IPS_) {
                // line 98
                echo "\t\t\t<p>";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_REMOVE_IPS_EXPLAIN");
                echo "</p>
\t\t<dl>
\t\t\t<dt><label for=\"remove_ip_hostname\">";
                // line 100
                echo $this->env->getExtension('phpbb')->lang("IP_HOSTNAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><select name=\"unip[]\" id=\"remove_ip_hostname\" multiple=\"multiple\" size=\"10\">";
                // line 101
                if (isset($context["DEFINED_IPS"])) { $_DEFINED_IPS_ = $context["DEFINED_IPS"]; } else { $_DEFINED_IPS_ = null; }
                echo $_DEFINED_IPS_;
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"unsecuresubmit\" name=\"unsecuresubmit\" value=\"";
                // line 105
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />
\t\t</p>
\t\t</fieldset>

\t";
            } else {
                // line 110
                echo "\t\t<p>";
                echo $this->env->getExtension('phpbb')->lang("NO_IPS_DEFINED");
                echo "</p>
\t";
            }
            // line 112
            echo "\t";
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } elseif ($_S_EXTENSION_GROUPS_) {
            // line 117
            echo "
\t";
            // line 118
            if (isset($context["S_EDIT_GROUP"])) { $_S_EDIT_GROUP_ = $context["S_EDIT_GROUP"]; } else { $_S_EDIT_GROUP_ = null; }
            if ($_S_EDIT_GROUP_) {
                // line 119
                echo "\t\t<script type=\"text/javascript\" defer=\"defer\">
\t\t// <![CDATA[
\t\t\tfunction update_image(newimage)
\t\t\t{
\t\t\t\tif (newimage == 'no_image')
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('image_upload_icon').src = \"";
                // line 125
                if (isset($context["ROOT_PATH"])) { $_ROOT_PATH_ = $context["ROOT_PATH"]; } else { $_ROOT_PATH_ = null; }
                echo $_ROOT_PATH_;
                echo "images/spacer.gif\";
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('image_upload_icon').src = \"";
                // line 129
                if (isset($context["ROOT_PATH"])) { $_ROOT_PATH_ = $context["ROOT_PATH"]; } else { $_ROOT_PATH_ = null; }
                echo $_ROOT_PATH_;
                if (isset($context["IMG_PATH"])) { $_IMG_PATH_ = $context["IMG_PATH"]; } else { $_IMG_PATH_ = null; }
                echo $_IMG_PATH_;
                echo "/\" + newimage;
\t\t\t\t}
\t\t\t}

\t\t\tfunction show_extensions(elem)
\t\t\t{
\t\t\t\tvar str = '';

\t\t\t\tfor (i = 0; i < elem.length; i++)
\t\t\t\t{
\t\t\t\t\tvar element = elem.options[i];
\t\t\t\t\tif (element.selected)
\t\t\t\t\t{
\t\t\t\t\t\tif (str)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tstr = str + ', ';
\t\t\t\t\t\t}

\t\t\t\t\t\tstr = str + element.innerHTML;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (document.all)
\t\t\t\t{
\t\t\t\t\tdocument.all.ext.innerText = str;
\t\t\t\t}
\t\t\t\telse if (document.getElementById('ext').textContent)
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('ext').textContent = str;
\t\t\t\t}
\t\t\t\telse if (document.getElementById('ext').firstChild.nodeValue)
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('ext').firstChild.nodeValue = str;
\t\t\t\t}
\t\t\t}

\t\t// ]]>
\t\t</script>

\t\t<form id=\"extgroups\" method=\"post\" action=\"";
                // line 168
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">
\t\t<fieldset>
\t\t\t<input type=\"hidden\" name=\"action\" value=\"";
                // line 170
                if (isset($context["ACTION"])) { $_ACTION_ = $context["ACTION"]; } else { $_ACTION_ = null; }
                echo $_ACTION_;
                echo "\" />
\t\t\t<input type=\"hidden\" name=\"g\" value=\"";
                // line 171
                if (isset($context["GROUP_ID"])) { $_GROUP_ID_ = $context["GROUP_ID"]; } else { $_GROUP_ID_ = null; }
                echo $_GROUP_ID_;
                echo "\" />

\t\t\t<legend>";
                // line 173
                echo $this->env->getExtension('phpbb')->lang("LEGEND");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"group_name\">";
                // line 175
                echo $this->env->getExtension('phpbb')->lang("GROUP_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"text\" id=\"group_name\" size=\"20\" maxlength=\"100\" name=\"group_name\" value=\"";
                // line 176
                if (isset($context["GROUP_NAME"])) { $_GROUP_NAME_ = $context["GROUP_NAME"]; } else { $_GROUP_NAME_ = null; }
                echo $_GROUP_NAME_;
                echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"category\">";
                // line 179
                echo $this->env->getExtension('phpbb')->lang("SPECIAL_CATEGORY");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("SPECIAL_CATEGORY_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd>";
                // line 180
                if (isset($context["S_CATEGORY_SELECT"])) { $_S_CATEGORY_SELECT_ = $context["S_CATEGORY_SELECT"]; } else { $_S_CATEGORY_SELECT_ = null; }
                echo $_S_CATEGORY_SELECT_;
                echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allowed\">";
                // line 183
                echo $this->env->getExtension('phpbb')->lang("ALLOWED");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"allowed\" name=\"allow_group\" value=\"1\"";
                // line 184
                if (isset($context["ALLOW_GROUP"])) { $_ALLOW_GROUP_ = $context["ALLOW_GROUP"]; } else { $_ALLOW_GROUP_ = null; }
                if ($_ALLOW_GROUP_) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allow_in_pm\">";
                // line 187
                echo $this->env->getExtension('phpbb')->lang("ALLOW_IN_PM");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"allow_in_pm\" name=\"allow_in_pm\" value=\"1\"";
                // line 188
                if (isset($context["ALLOW_IN_PM"])) { $_ALLOW_IN_PM_ = $context["ALLOW_IN_PM"]; } else { $_ALLOW_IN_PM_ = null; }
                if ($_ALLOW_IN_PM_) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"upload_icon\">";
                // line 191
                echo $this->env->getExtension('phpbb')->lang("UPLOAD_ICON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><select name=\"upload_icon\" id=\"upload_icon\" onchange=\"update_image(this.options[selectedIndex].value);\">
\t\t\t\t\t<option value=\"no_image\"";
                // line 193
                if (isset($context["S_NO_IMAGE"])) { $_S_NO_IMAGE_ = $context["S_NO_IMAGE"]; } else { $_S_NO_IMAGE_ = null; }
                if ($_S_NO_IMAGE_) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->env->getExtension('phpbb')->lang("NO_IMAGE");
                echo "</option>";
                if (isset($context["S_FILENAME_LIST"])) { $_S_FILENAME_LIST_ = $context["S_FILENAME_LIST"]; } else { $_S_FILENAME_LIST_ = null; }
                echo $_S_FILENAME_LIST_;
                echo "
\t\t\t</select></dd>
\t\t\t<dd>&nbsp;<img ";
                // line 195
                if (isset($context["S_NO_IMAGE"])) { $_S_NO_IMAGE_ = $context["S_NO_IMAGE"]; } else { $_S_NO_IMAGE_ = null; }
                if ($_S_NO_IMAGE_) {
                    echo "src=\"";
                    if (isset($context["ROOT_PATH"])) { $_ROOT_PATH_ = $context["ROOT_PATH"]; } else { $_ROOT_PATH_ = null; }
                    echo $_ROOT_PATH_;
                    echo "images/spacer.gif\"";
                } else {
                    echo "src=\"";
                    if (isset($context["UPLOAD_ICON_SRC"])) { $_UPLOAD_ICON_SRC_ = $context["UPLOAD_ICON_SRC"]; } else { $_UPLOAD_ICON_SRC_ = null; }
                    echo $_UPLOAD_ICON_SRC_;
                    echo "\"";
                }
                echo " id=\"image_upload_icon\" alt=\"\" title=\"\" />&nbsp;</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"extgroup_filesize\">";
                // line 198
                echo $this->env->getExtension('phpbb')->lang("MAX_EXTGROUP_FILESIZE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"number\" id=\"extgroup_filesize\" size=\"3\" maxlength=\"15\" name=\"max_filesize\" value=\"";
                // line 199
                if (isset($context["EXTGROUP_FILESIZE"])) { $_EXTGROUP_FILESIZE_ = $context["EXTGROUP_FILESIZE"]; } else { $_EXTGROUP_FILESIZE_ = null; }
                echo $_EXTGROUP_FILESIZE_;
                echo "\" /> <select name=\"size_select\">";
                if (isset($context["S_EXT_GROUP_SIZE_OPTIONS"])) { $_S_EXT_GROUP_SIZE_OPTIONS_ = $context["S_EXT_GROUP_SIZE_OPTIONS"]; } else { $_S_EXT_GROUP_SIZE_OPTIONS_ = null; }
                echo $_S_EXT_GROUP_SIZE_OPTIONS_;
                echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"assigned_extensions\">";
                // line 202
                echo $this->env->getExtension('phpbb')->lang("ASSIGNED_EXTENSIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><div id=\"ext\">";
                // line 203
                if (isset($context["ASSIGNED_EXTENSIONS"])) { $_ASSIGNED_EXTENSIONS_ = $context["ASSIGNED_EXTENSIONS"]; } else { $_ASSIGNED_EXTENSIONS_ = null; }
                echo $_ASSIGNED_EXTENSIONS_;
                echo "</div> <span>[<a href=\"";
                if (isset($context["U_EXTENSIONS"])) { $_U_EXTENSIONS_ = $context["U_EXTENSIONS"]; } else { $_U_EXTENSIONS_ = null; }
                echo $_U_EXTENSIONS_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("GO_TO_EXTENSIONS");
                echo "</a> ]</span></dd>
\t\t\t<dd><select name=\"extensions[]\" id=\"assigned_extensions\" class=\"narrow\" onchange=\"show_extensions(this);\" multiple=\"multiple\" size=\"8\">";
                // line 204
                if (isset($context["S_EXTENSION_OPTIONS"])) { $_S_EXTENSION_OPTIONS_ = $context["S_EXTENSION_OPTIONS"]; } else { $_S_EXTENSION_OPTIONS_ = null; }
                echo $_S_EXTENSION_OPTIONS_;
                echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allowed_forums\">";
                // line 207
                echo $this->env->getExtension('phpbb')->lang("ALLOWED_FORUMS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("ALLOWED_FORUMS_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" id=\"allowed_forums\" class=\"radio\" name=\"forum_select\" value=\"0\"";
                // line 208
                if (isset($context["S_FORUM_IDS"])) { $_S_FORUM_IDS_ = $context["S_FORUM_IDS"]; } else { $_S_FORUM_IDS_ = null; }
                if ( !$_S_FORUM_IDS_) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("ALLOW_ALL_FORUMS");
                echo "</label></dd>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"forum_select\" value=\"1\"";
                // line 209
                if (isset($context["S_FORUM_IDS"])) { $_S_FORUM_IDS_ = $context["S_FORUM_IDS"]; } else { $_S_FORUM_IDS_ = null; }
                if ($_S_FORUM_IDS_) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("ALLOW_SELECTED_FORUMS");
                echo "</label></dd>
\t\t\t<dd><select name=\"allowed_forums[]\" multiple=\"multiple\" size=\"8\">";
                // line 210
                if (isset($context["S_FORUM_ID_OPTIONS"])) { $_S_FORUM_ID_OPTIONS_ = $context["S_FORUM_ID_OPTIONS"]; } else { $_S_FORUM_ID_OPTIONS_ = null; }
                echo $_S_FORUM_ID_OPTIONS_;
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 214
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 215
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "\" />
\t\t</p>
\t\t";
                // line 217
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t</fieldset>

\t\t</form>
\t";
            } else {
                // line 222
                echo "
\t\t<form id=\"extgroups\" method=\"post\" action=\"";
                // line 223
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">
\t\t<fieldset class=\"tabulated\">
\t\t<legend>";
                // line 225
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</legend>

\t\t<table class=\"table1\">
\t\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 231
                echo $this->env->getExtension('phpbb')->lang("EXTENSION_GROUP");
                echo "</th>
\t\t\t<th>";
                // line 232
                echo $this->env->getExtension('phpbb')->lang("SPECIAL_CATEGORY");
                echo "</th>
\t\t\t<th>";
                // line 233
                echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 237
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "groups", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
                    // line 238
                    echo "\t\t\t";
                    if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                    if (($this->getAttribute($_groups_, "S_ADD_SPACER", array()) &&  !$this->getAttribute($_groups_, "S_FIRST_ROW", array()))) {
                        // line 239
                        echo "\t\t\t<tr>
\t\t\t\t<td class=\"spacer\" colspan=\"3\">&nbsp;</td>
\t\t\t</tr>
\t\t\t";
                    }
                    // line 243
                    echo "\t\t\t<tr>
\t\t\t\t<td><strong>";
                    // line 244
                    if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                    echo $this->getAttribute($_groups_, "GROUP_NAME", array());
                    echo "</strong>
\t\t\t\t\t";
                    // line 245
                    if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                    if (($this->getAttribute($_groups_, "S_GROUP_ALLOWED", array()) &&  !$this->getAttribute($_groups_, "S_ALLOWED_IN_PM", array()))) {
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb')->lang("NOT_ALLOWED_IN_PM");
                        echo "</span>
\t\t\t\t\t";
                    } elseif (($this->getAttribute($_groups_, "S_ALLOWED_IN_PM", array()) &&  !$this->getAttribute($_groups_, "S_GROUP_ALLOWED", array()))) {
                        // line 246
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb')->lang("ONLY_ALLOWED_IN_PM");
                        echo "</span>
\t\t\t\t\t";
                    } elseif (( !$this->getAttribute($_groups_, "S_GROUP_ALLOWED", array()) &&  !$this->getAttribute($_groups_, "S_ALLOWED_IN_PM", array()))) {
                        // line 247
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb')->lang("NOT_ALLOWED_IN_PM_POST");
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 248
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb')->lang("ALLOWED_IN_PM_POST");
                        echo "</span>";
                    }
                    // line 249
                    echo "\t\t\t\t</td>
\t\t\t\t<td>";
                    // line 250
                    if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                    echo $this->getAttribute($_groups_, "CATEGORY", array());
                    echo "</td>
\t\t\t\t<td align=\"center\" valign=\"middle\" style=\"white-space: nowrap;\">&nbsp;<a href=\"";
                    // line 251
                    if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                    echo $this->getAttribute($_groups_, "U_EDIT", array());
                    echo "\">";
                    if (isset($context["ICON_EDIT"])) { $_ICON_EDIT_ = $context["ICON_EDIT"]; } else { $_ICON_EDIT_ = null; }
                    echo $_ICON_EDIT_;
                    echo "</a>&nbsp;&nbsp;<a href=\"";
                    if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                    echo $this->getAttribute($_groups_, "U_DELETE", array());
                    echo "\" data-ajax=\"row_delete\">";
                    if (isset($context["ICON_DELETE"])) { $_ICON_DELETE_ = $context["ICON_DELETE"]; } else { $_ICON_DELETE_ = null; }
                    echo $_ICON_DELETE_;
                    echo "</a>&nbsp;</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 254
                echo "\t\t</tbody>
\t\t</table>
\t\t<p class=\"quick\">
\t\t\t\t";
                // line 257
                echo $this->env->getExtension('phpbb')->lang("CREATE_GROUP");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <input type=\"text\" name=\"group_name\" maxlength=\"30\" />
\t\t\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
                // line 258
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />
\t\t</p>
\t\t";
                // line 260
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t</fieldset>
\t\t</form>

\t";
            }
            // line 265
            echo "
";
        } elseif ($_S_EXTENSIONS_) {
            // line 267
            echo "
\t<form id=\"add_ext\" method=\"post\" action=\"";
            // line 268
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">
\t<fieldset>
\t\t<legend>";
            // line 270
            echo $this->env->getExtension('phpbb')->lang("ADD_EXTENSION");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"add_extension\">";
            // line 272
            echo $this->env->getExtension('phpbb')->lang("EXTENSION");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"add_extension\" size=\"20\" maxlength=\"100\" name=\"add_extension\" value=\"";
            // line 273
            if (isset($context["ADD_EXTENSION"])) { $_ADD_EXTENSION_ = $context["ADD_EXTENSION"]; } else { $_ADD_EXTENSION_ = null; }
            echo $_ADD_EXTENSION_;
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"extension_group\">";
            // line 276
            echo $this->env->getExtension('phpbb')->lang("EXTENSION_GROUP");
            echo "</label></dt>
\t\t<dd>";
            // line 277
            if (isset($context["GROUP_SELECT_OPTIONS"])) { $_GROUP_SELECT_OPTIONS_ = $context["GROUP_SELECT_OPTIONS"]; } else { $_GROUP_SELECT_OPTIONS_ = null; }
            echo $_GROUP_SELECT_OPTIONS_;
            echo "</dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input type=\"submit\" id=\"add_extension_check\" name=\"add_extension_check\" class=\"button2\" value=\"";
            // line 281
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 283
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

\t<form id=\"change_ext\" method=\"post\" action=\"";
            // line 287
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 290
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1\">
\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t<thead>
\t<tr>
\t\t<th>";
            // line 296
            echo $this->env->getExtension('phpbb')->lang("EXTENSION");
            echo "</th>
\t\t<th>";
            // line 297
            echo $this->env->getExtension('phpbb')->lang("EXTENSION_GROUP");
            echo "</th>
\t\t<th>";
            // line 298
            echo $this->env->getExtension('phpbb')->lang("DELETE");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 302
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "extensions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extensions"]) {
                // line 303
                echo "\t\t";
                if (isset($context["extensions"])) { $_extensions_ = $context["extensions"]; } else { $_extensions_ = null; }
                if ($this->getAttribute($_extensions_, "S_SPACER", array())) {
                    // line 304
                    echo "\t\t<tr>
\t\t\t<td class=\"spacer\" colspan=\"3\">&nbsp;</td>
\t\t</tr>
\t\t";
                }
                // line 308
                echo "\t\t<tr>
\t\t\t<td><strong>";
                // line 309
                if (isset($context["extensions"])) { $_extensions_ = $context["extensions"]; } else { $_extensions_ = null; }
                echo $this->getAttribute($_extensions_, "EXTENSION", array());
                echo "</strong></td>
\t\t\t<td>";
                // line 310
                if (isset($context["extensions"])) { $_extensions_ = $context["extensions"]; } else { $_extensions_ = null; }
                echo $this->getAttribute($_extensions_, "GROUP_OPTIONS", array());
                echo "</td>
\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"extension_id_list[]\" value=\"";
                // line 311
                if (isset($context["extensions"])) { $_extensions_ = $context["extensions"]; } else { $_extensions_ = null; }
                echo $this->getAttribute($_extensions_, "EXTENSION_ID", array());
                echo "\" /><input type=\"hidden\" name=\"extension_change_list[]\" value=\"";
                if (isset($context["extensions"])) { $_extensions_ = $context["extensions"]; } else { $_extensions_ = null; }
                echo $this->getAttribute($_extensions_, "EXTENSION_ID", array());
                echo "\" /></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extensions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 314
            echo "\t</tbody>
\t</table>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 318
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 319
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 321
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } elseif ($_S_ORPHAN_) {
            // line 326
            echo "
\t<form id=\"orphan\" method=\"post\" action=\"";
            // line 327
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 330
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1 zebra-table fixed-width-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 335
            echo $this->env->getExtension('phpbb')->lang("FILENAME");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 336
            echo $this->env->getExtension('phpbb')->lang("FILEDATE");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 337
            echo $this->env->getExtension('phpbb')->lang("FILESIZE");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 338
            echo $this->env->getExtension('phpbb')->lang("ATTACH_POST_ID");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 339
            echo $this->env->getExtension('phpbb')->lang("ATTACH_TO_POST");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 340
            echo $this->env->getExtension('phpbb')->lang("DELETE");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 344
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "orphan", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["orphan"]) {
                // line 345
                echo "\t\t<tr>
\t\t\t<td><a href=\"";
                // line 346
                if (isset($context["orphan"])) { $_orphan_ = $context["orphan"]; } else { $_orphan_ = null; }
                echo $this->getAttribute($_orphan_, "U_FILE", array());
                echo "\">";
                if (isset($context["orphan"])) { $_orphan_ = $context["orphan"]; } else { $_orphan_ = null; }
                echo $this->getAttribute($_orphan_, "REAL_FILENAME", array());
                echo "</a></td>
\t\t\t<td>";
                // line 347
                if (isset($context["orphan"])) { $_orphan_ = $context["orphan"]; } else { $_orphan_ = null; }
                echo $this->getAttribute($_orphan_, "FILETIME", array());
                echo "</td>
\t\t\t<td>";
                // line 348
                if (isset($context["orphan"])) { $_orphan_ = $context["orphan"]; } else { $_orphan_ = null; }
                echo $this->getAttribute($_orphan_, "FILESIZE", array());
                echo "</td>
\t\t\t<td><strong>";
                // line 349
                echo $this->env->getExtension('phpbb')->lang("ATTACH_ID");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " </strong><input type=\"number\" name=\"post_id[";
                if (isset($context["orphan"])) { $_orphan_ = $context["orphan"]; } else { $_orphan_ = null; }
                echo $this->getAttribute($_orphan_, "ATTACH_ID", array());
                echo "]\" maxlength=\"10\" value=\"";
                if (isset($context["orphan"])) { $_orphan_ = $context["orphan"]; } else { $_orphan_ = null; }
                echo $this->getAttribute($_orphan_, "POST_ID", array());
                echo "\" style=\"width: 75%;\" /></td>
\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"add[";
                // line 350
                if (isset($context["orphan"])) { $_orphan_ = $context["orphan"]; } else { $_orphan_ = null; }
                echo $this->getAttribute($_orphan_, "ATTACH_ID", array());
                echo "]\" /></td>
\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"delete[";
                // line 351
                if (isset($context["orphan"])) { $_orphan_ = $context["orphan"]; } else { $_orphan_ = null; }
                echo $this->getAttribute($_orphan_, "ATTACH_ID", array());
                echo "]\" /></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orphan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            echo "\t<tr class=\"row4\">
\t\t<td colspan=\"4\">&nbsp;</td>
\t\t<td class=\"small\"><a href=\"#\" onclick=\"marklist('orphan', 'add', true); return false;\">";
            // line 356
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> :: <a href=\"#\" onclick=\"marklist('orphan', 'add', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></td>
\t\t<td class=\"small\"><a href=\"#\" onclick=\"marklist('orphan', 'delete', true); return false;\">";
            // line 357
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> :: <a href=\"#\" onclick=\"marklist('orphan', 'delete', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></td>
\t</tr>
\t</tbody>
\t</table>

\t<br />

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 365
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 366
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 368
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } elseif ($_S_MANAGE_) {
            // line 373
            echo "
\t<form id=\"attachments\" method=\"post\" action=\"";
            // line 374
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 377
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>

\t<div class=\"pagination top-pagination\">
\t";
            // line 380
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (isset($context["TOTAL_FILES"])) { $_TOTAL_FILES_ = $context["TOTAL_FILES"]; } else { $_TOTAL_FILES_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array())) || $_TOTAL_FILES_)) {
                // line 381
                echo "\t\t";
                echo $this->env->getExtension('phpbb')->lang("NUMBER_FILES");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["TOTAL_FILES"])) { $_TOTAL_FILES_ = $context["TOTAL_FILES"]; } else { $_TOTAL_FILES_ = null; }
                echo $_TOTAL_FILES_;
                echo " &bull; ";
                echo $this->env->getExtension('phpbb')->lang("TOTAL_SIZE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["TOTAL_SIZE"])) { $_TOTAL_SIZE_ = $context["TOTAL_SIZE"]; } else { $_TOTAL_SIZE_ = null; }
                echo $_TOTAL_SIZE_;
                echo "
\t\t";
                // line 382
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                    // line 383
                    echo "\t\t\t&bull; ";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "acp_attachments.html", 383)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 384
                    echo "\t\t";
                } else {
                    // line 385
                    echo "\t\t\t&bull; ";
                    if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                    echo $_PAGE_NUMBER_;
                    echo "
\t\t";
                }
                // line 387
                echo "\t";
            }
            // line 388
            echo "\t</div>

";
            // line 390
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "attachments", array()))) {
                // line 391
                echo "\t<table class=\"table1 zebra-table fixed-width-table\">
\t<thead>
\t<tr>
\t\t<th>";
                // line 394
                echo $this->env->getExtension('phpbb')->lang("FILENAME");
                echo "</th>
\t\t<th style=\"width: 15%;\">";
                // line 395
                echo $this->env->getExtension('phpbb')->lang("POSTED");
                echo "</th>
\t\t<th style=\"width: 15%;\" class=\"centered-text\">";
                // line 396
                echo $this->env->getExtension('phpbb')->lang("FILESIZE");
                echo "</th>
\t\t<th style=\"width: 10%;\" class=\"centered-text\">";
                // line 397
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
                // line 401
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "attachments", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachments"]) {
                    // line 402
                    echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t";
                    // line 404
                    if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                    if ($this->getAttribute($_attachments_, "S_IN_MESSAGE", array())) {
                        echo $this->env->getExtension('phpbb')->lang("EXTENSION_GROUP");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                        if ($this->getAttribute($_attachments_, "EXT_GROUP_NAME", array())) {
                            if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                            echo $this->getAttribute($_attachments_, "EXT_GROUP_NAME", array());
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_EXT_GROUP");
                        }
                        echo "</strong><br />";
                        if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                        echo $this->getAttribute($_attachments_, "L_DOWNLOAD_COUNT", array());
                        echo "<br />";
                        echo $this->env->getExtension('phpbb')->lang("IN");
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGE");
                        echo "
\t\t\t\t";
                    } else {
                        // line 405
                        echo "<a href=\"";
                        if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                        echo $this->getAttribute($_attachments_, "U_FILE", array());
                        echo "\" style=\"font-weight: bold;\">";
                        if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                        echo $this->getAttribute($_attachments_, "REAL_FILENAME", array());
                        echo "</a><br />";
                        if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                        if ($this->getAttribute($_attachments_, "COMMENT", array())) {
                            if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                            echo $this->getAttribute($_attachments_, "COMMENT", array());
                            echo "<br />";
                        }
                        if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                        echo $this->getAttribute($_attachments_, "L_DOWNLOAD_COUNT", array());
                        echo "<br />";
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                        echo $this->getAttribute($_attachments_, "U_VIEW_TOPIC", array());
                        echo "\">";
                        if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                        echo $this->getAttribute($_attachments_, "TOPIC_TITLE", array());
                        echo "</a>";
                    }
                    // line 406
                    echo "\t\t\t</td>
\t\t\t<td>";
                    // line 407
                    if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                    echo $this->getAttribute($_attachments_, "FILETIME", array());
                    echo "<br />";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                    echo $this->getAttribute($_attachments_, "ATTACHMENT_POSTER", array());
                    echo "</td>
\t\t\t<td class=\"centered-text\">";
                    // line 408
                    if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                    echo $this->getAttribute($_attachments_, "FILESIZE", array());
                    echo "</td>
\t\t\t<td class=\"centered-text\"><input type=\"checkbox\" class=\"radio\" name=\"delete[";
                    // line 409
                    if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
                    echo $this->getAttribute($_attachments_, "ATTACH_ID", array());
                    echo "]\" /></td>
\t\t</tr>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachments'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 412
                echo "\t</tbody>
\t</table>
";
            } else {
                // line 415
                echo "\t<div class=\"errorbox\">
\t\t<p>";
                // line 416
                echo $this->env->getExtension('phpbb')->lang("NO_ATTACHMENTS");
                echo "</p>
\t</div>
";
            }
            // line 419
            echo "
\t";
            // line 420
            if (isset($context["TOTAL_FILES"])) { $_TOTAL_FILES_ = $context["TOTAL_FILES"]; } else { $_TOTAL_FILES_ = null; }
            if ($_TOTAL_FILES_) {
                // line 421
                echo "\t<div class=\"pagination\">
\t\t";
                // line 422
                echo $this->env->getExtension('phpbb')->lang("NUMBER_FILES");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["TOTAL_FILES"])) { $_TOTAL_FILES_ = $context["TOTAL_FILES"]; } else { $_TOTAL_FILES_ = null; }
                echo $_TOTAL_FILES_;
                echo " &bull; ";
                echo $this->env->getExtension('phpbb')->lang("TOTAL_SIZE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["TOTAL_SIZE"])) { $_TOTAL_SIZE_ = $context["TOTAL_SIZE"]; } else { $_TOTAL_SIZE_ = null; }
                echo $_TOTAL_SIZE_;
                echo "
\t\t";
                // line 423
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                    // line 424
                    echo "\t\t\t&bull; ";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "acp_attachments.html", 424)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 425
                    echo "\t\t";
                } else {
                    // line 426
                    echo "\t\t\t&bull; ";
                    if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                    echo $_PAGE_NUMBER_;
                    echo "
\t\t";
                }
                // line 428
                echo "\t</div>
\t";
            }
            // line 430
            echo "
\t<fieldset class=\"display-options\">
\t\t";
            // line 432
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_LOG");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " &nbsp;";
            if (isset($context["S_LIMIT_DAYS"])) { $_S_LIMIT_DAYS_ = $context["S_LIMIT_DAYS"]; } else { $_S_LIMIT_DAYS_ = null; }
            echo $_S_LIMIT_DAYS_;
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            if (isset($context["S_SORT_KEY"])) { $_S_SORT_KEY_ = $context["S_SORT_KEY"]; } else { $_S_SORT_KEY_ = null; }
            echo $_S_SORT_KEY_;
            echo " ";
            if (isset($context["S_SORT_DIR"])) { $_S_SORT_DIR_ = $context["S_SORT_DIR"]; } else { $_S_SORT_DIR_ = null; }
            echo $_S_SORT_DIR_;
            echo "
\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 433
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" name=\"sort\" />
\t</fieldset>

\t<hr />

";
            // line 438
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "attachments", array()))) {
                // line 439
                echo "\t<fieldset class=\"quick\">
\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                // line 440
                echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                echo "\" /><br />
\t\t<p class=\"small\">
\t\t\t<a href=\"#\" onclick=\"marklist('attachments', 'delete', true); return false;\">";
                // line 442
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> &bull;
\t\t\t<a href=\"#\" onclick=\"marklist('attachments', 'delete', false); return false;\">";
                // line 443
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a>\t\t
\t\t</p>
\t</fieldset>
";
            }
            // line 447
            echo "\t";
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

\t";
            // line 451
            if (isset($context["S_ACTION_OPTIONS"])) { $_S_ACTION_OPTIONS_ = $context["S_ACTION_OPTIONS"]; } else { $_S_ACTION_OPTIONS_ = null; }
            if ($_S_ACTION_OPTIONS_) {
                // line 452
                echo "\t<fieldset>
\t\t<legend>";
                // line 453
                echo $this->env->getExtension('phpbb')->lang("RESYNC_STATS");
                echo "</legend>
\t\t<form id=\"action_stats_form\" method=\"post\" action=\"";
                // line 454
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt><label for=\"action_stats\">";
                // line 456
                echo $this->env->getExtension('phpbb')->lang("RESYNC_FILES_STATS");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("RESYNC_FILES_STATS_EXPLAIN");
                echo "</span></dt>
\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"stats\" /><input class=\"button2\" type=\"submit\" id=\"action_stats\" name=\"action_stats\" value=\"";
                // line 457
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t</dl>
\t\t</form>
\t</fieldset>
\t";
            }
        }
        // line 463
        echo "
";
        // line 464
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_attachments.html", 464)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_attachments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1404 => 464,  1401 => 463,  1392 => 457,  1386 => 456,  1380 => 454,  1376 => 453,  1373 => 452,  1370 => 451,  1361 => 447,  1354 => 443,  1350 => 442,  1345 => 440,  1342 => 439,  1339 => 438,  1331 => 433,  1314 => 432,  1310 => 430,  1306 => 428,  1299 => 426,  1296 => 425,  1283 => 424,  1280 => 423,  1266 => 422,  1263 => 421,  1260 => 420,  1257 => 419,  1251 => 416,  1248 => 415,  1243 => 412,  1233 => 409,  1228 => 408,  1218 => 407,  1215 => 406,  1188 => 405,  1165 => 404,  1161 => 402,  1156 => 401,  1149 => 397,  1145 => 396,  1141 => 395,  1137 => 394,  1132 => 391,  1129 => 390,  1125 => 388,  1122 => 387,  1115 => 385,  1112 => 384,  1099 => 383,  1096 => 382,  1081 => 381,  1077 => 380,  1071 => 377,  1064 => 374,  1061 => 373,  1052 => 368,  1047 => 366,  1043 => 365,  1030 => 357,  1024 => 356,  1020 => 354,  1010 => 351,  1005 => 350,  994 => 349,  989 => 348,  984 => 347,  976 => 346,  973 => 345,  968 => 344,  961 => 340,  957 => 339,  953 => 338,  949 => 337,  945 => 336,  941 => 335,  933 => 330,  926 => 327,  923 => 326,  914 => 321,  909 => 319,  905 => 318,  899 => 314,  886 => 311,  881 => 310,  876 => 309,  873 => 308,  867 => 304,  863 => 303,  858 => 302,  851 => 298,  847 => 297,  843 => 296,  834 => 290,  827 => 287,  819 => 283,  814 => 281,  806 => 277,  802 => 276,  795 => 273,  791 => 272,  786 => 270,  780 => 268,  777 => 267,  773 => 265,  764 => 260,  759 => 258,  754 => 257,  749 => 254,  730 => 251,  725 => 250,  722 => 249,  717 => 248,  711 => 247,  705 => 246,  697 => 245,  692 => 244,  689 => 243,  683 => 239,  679 => 238,  674 => 237,  667 => 233,  663 => 232,  659 => 231,  650 => 225,  644 => 223,  641 => 222,  632 => 217,  627 => 215,  623 => 214,  615 => 210,  606 => 209,  597 => 208,  590 => 207,  583 => 204,  573 => 203,  568 => 202,  558 => 199,  553 => 198,  536 => 195,  523 => 193,  517 => 191,  508 => 188,  503 => 187,  494 => 184,  489 => 183,  482 => 180,  475 => 179,  468 => 176,  463 => 175,  458 => 173,  452 => 171,  447 => 170,  441 => 168,  396 => 129,  388 => 125,  380 => 119,  377 => 118,  374 => 117,  364 => 112,  358 => 110,  350 => 105,  342 => 101,  337 => 100,  331 => 98,  328 => 97,  324 => 96,  316 => 91,  309 => 87,  305 => 86,  298 => 85,  290 => 81,  285 => 79,  281 => 78,  277 => 76,  271 => 73,  268 => 72,  265 => 71,  259 => 68,  255 => 67,  251 => 66,  246 => 63,  240 => 62,  232 => 58,  215 => 57,  211 => 55,  205 => 53,  202 => 52,  198 => 50,  194 => 49,  190 => 48,  185 => 47,  180 => 46,  177 => 45,  171 => 42,  168 => 41,  165 => 40,  162 => 39,  155 => 38,  152 => 37,  148 => 35,  141 => 33,  124 => 32,  118 => 31,  113 => 30,  107 => 28,  104 => 27,  101 => 26,  94 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  74 => 16,  70 => 15,  67 => 14,  64 => 13,  59 => 11,  54 => 9,  51 => 8,  39 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
