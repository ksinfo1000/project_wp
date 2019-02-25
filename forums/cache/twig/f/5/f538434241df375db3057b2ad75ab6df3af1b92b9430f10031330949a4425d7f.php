<?php

/* acp_profile.html */
class __TwigTemplate_f538434241df375db3057b2ad75ab6df3af1b92b9430f10031330949a4425d7f extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_profile.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (isset($context["S_EDIT"])) { $_S_EDIT_ = $context["S_EDIT"]; } else { $_S_EDIT_ = null; }
        if ($_S_EDIT_) {
            // line 6
            echo "
\t<a href=\"";
            // line 7
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            echo $_U_BACK_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
            echo "</p>

\t";
            // line 13
            if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
            if ($_ERROR_MSG_) {
                // line 14
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 15
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 16
                if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
                echo $_ERROR_MSG_;
                echo "</p>
\t\t</div>
\t";
            }
            // line 19
            echo "
\t<form id=\"add_profile_field\" method=\"post\" action=\"";
            // line 20
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\"";
            if (isset($context["S_FORM_ENCTYPE"])) { $_S_FORM_ENCTYPE_ = $context["S_FORM_ENCTYPE"]; } else { $_S_FORM_ENCTYPE_ = null; }
            echo $_S_FORM_ENCTYPE_;
            echo ">

\t";
            // line 22
            if (isset($context["S_STEP_ONE"])) { $_S_STEP_ONE_ = $context["S_STEP_ONE"]; } else { $_S_STEP_ONE_ = null; }
            if (isset($context["S_STEP_TWO"])) { $_S_STEP_TWO_ = $context["S_STEP_TWO"]; } else { $_S_STEP_TWO_ = null; }
            if (isset($context["S_STEP_THREE"])) { $_S_STEP_THREE_ = $context["S_STEP_THREE"]; } else { $_S_STEP_THREE_ = null; }
            if ($_S_STEP_ONE_) {
                // line 23
                echo "
\t\t<fieldset>
\t\t\t<legend>";
                // line 25
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label>";
                // line 27
                echo $this->env->getExtension('phpbb')->lang("FIELD_TYPE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("FIELD_TYPE_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><strong>";
                // line 28
                if (isset($context["FIELD_TYPE"])) { $_FIELD_TYPE_ = $context["FIELD_TYPE"]; } else { $_FIELD_TYPE_ = null; }
                echo $_FIELD_TYPE_;
                echo "</strong></dd>
\t\t</dl>
\t\t";
                // line 30
                if (isset($context["S_EDIT_MODE"])) { $_S_EDIT_MODE_ = $context["S_EDIT_MODE"]; } else { $_S_EDIT_MODE_ = null; }
                if ($_S_EDIT_MODE_) {
                    // line 31
                    echo "\t\t<dl>
\t\t\t<dt><label>";
                    // line 32
                    echo $this->env->getExtension('phpbb')->lang("FIELD_IDENT");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("FIELD_IDENT_EXPLAIN");
                    echo "</span></dt>
\t\t\t<dd><input type=\"hidden\" name=\"field_ident\" value=\"";
                    // line 33
                    if (isset($context["FIELD_IDENT"])) { $_FIELD_IDENT_ = $context["FIELD_IDENT"]; } else { $_FIELD_IDENT_ = null; }
                    echo $_FIELD_IDENT_;
                    echo "\" /><strong>";
                    if (isset($context["FIELD_IDENT"])) { $_FIELD_IDENT_ = $context["FIELD_IDENT"]; } else { $_FIELD_IDENT_ = null; }
                    echo $_FIELD_IDENT_;
                    echo "</strong></dd>
\t\t</dl>
\t\t";
                } else {
                    // line 36
                    echo "\t\t<dl>
\t\t\t<dt><label for=\"field_ident\">";
                    // line 37
                    echo $this->env->getExtension('phpbb')->lang("FIELD_IDENT");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("FIELD_IDENT_EXPLAIN");
                    echo "</span></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"field_ident\" name=\"field_ident\" value=\"";
                    // line 38
                    if (isset($context["FIELD_IDENT"])) { $_FIELD_IDENT_ = $context["FIELD_IDENT"]; } else { $_FIELD_IDENT_ = null; }
                    echo $_FIELD_IDENT_;
                    echo "\" /></dd>
\t\t</dl>
\t\t";
                }
                // line 41
                echo "\t\t<dl>
\t\t\t<dt><label for=\"field_no_view\">";
                // line 42
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_PROFILE_FIELD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_PROFILE_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"field_no_view\" name=\"field_no_view\" value=\"0\"";
                // line 43
                if (isset($context["S_FIELD_NO_VIEW"])) { $_S_FIELD_NO_VIEW_ = $context["S_FIELD_NO_VIEW"]; } else { $_S_FIELD_NO_VIEW_ = null; }
                if ( !$_S_FIELD_NO_VIEW_) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("YES");
                echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"field_no_view\" value=\"1\"";
                // line 44
                if (isset($context["S_FIELD_NO_VIEW"])) { $_S_FIELD_NO_VIEW_ = $context["S_FIELD_NO_VIEW"]; } else { $_S_FIELD_NO_VIEW_ = null; }
                if ($_S_FIELD_NO_VIEW_) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("NO");
                echo "</label></dd>
\t\t</dl>
\t\t</fieldset>

\t\t<fieldset>
\t\t\t<legend>";
                // line 49
                echo $this->env->getExtension('phpbb')->lang("VISIBILITY_OPTION");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_profile\">";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_AT_PROFILE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_AT_PROFILE_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_profile\" name=\"field_show_profile\" value=\"1\"";
                // line 52
                if (isset($context["S_SHOW_PROFILE"])) { $_S_SHOW_PROFILE_ = $context["S_SHOW_PROFILE"]; } else { $_S_SHOW_PROFILE_ = null; }
                if ($_S_SHOW_PROFILE_) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_reg\">";
                // line 55
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_AT_REGISTER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_AT_REGISTER_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_reg\" name=\"field_show_on_reg\" value=\"1\"";
                // line 56
                if (isset($context["S_SHOW_ON_REG"])) { $_S_SHOW_ON_REG_ = $context["S_SHOW_ON_REG"]; } else { $_S_SHOW_ON_REG_ = null; }
                if ($_S_SHOW_ON_REG_) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_pm\">";
                // line 59
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_PM");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_PM_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_pm\" name=\"field_show_on_pm\" value=\"1\"";
                // line 60
                if (isset($context["S_SHOW_ON_PM"])) { $_S_SHOW_ON_PM_ = $context["S_SHOW_ON_PM"]; } else { $_S_SHOW_ON_PM_ = null; }
                if ($_S_SHOW_ON_PM_) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_vt\">";
                // line 63
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_VT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_VT_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_vt\" name=\"field_show_on_vt\" value=\"1\"";
                // line 64
                if (isset($context["S_SHOW_ON_VT"])) { $_S_SHOW_ON_VT_ = $context["S_SHOW_ON_VT"]; } else { $_S_SHOW_ON_VT_ = null; }
                if ($_S_SHOW_ON_VT_) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_ml\">";
                // line 67
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_MEMBERLIST");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_MEMBERLIST_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_ml\" name=\"field_show_on_ml\" value=\"1\"";
                // line 68
                if (isset($context["S_SHOW_ON_MEMBERLIST"])) { $_S_SHOW_ON_MEMBERLIST_ = $context["S_SHOW_ON_MEMBERLIST"]; } else { $_S_SHOW_ON_MEMBERLIST_ = null; }
                if ($_S_SHOW_ON_MEMBERLIST_) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_required\">";
                // line 71
                echo $this->env->getExtension('phpbb')->lang("REQUIRED_FIELD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("REQUIRED_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_required\" name=\"field_required\" value=\"1\"";
                // line 72
                if (isset($context["S_FIELD_REQUIRED"])) { $_S_FIELD_REQUIRED_ = $context["S_FIELD_REQUIRED"]; } else { $_S_FIELD_REQUIRED_ = null; }
                if ($_S_FIELD_REQUIRED_) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_novalue\">";
                // line 75
                echo $this->env->getExtension('phpbb')->lang("SHOW_NOVALUE_FIELD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("SHOW_NOVALUE_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_novalue\" name=\"field_show_novalue\" value=\"1\"";
                // line 76
                if (isset($context["S_FIELD_SHOW_NOVALUE"])) { $_S_FIELD_SHOW_NOVALUE_ = $context["S_FIELD_SHOW_NOVALUE"]; } else { $_S_FIELD_SHOW_NOVALUE_ = null; }
                if ($_S_FIELD_SHOW_NOVALUE_) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_hide\">";
                // line 79
                echo $this->env->getExtension('phpbb')->lang("HIDE_PROFILE_FIELD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("HIDE_PROFILE_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_hide\" name=\"field_hide\" value=\"1\"";
                // line 80
                if (isset($context["S_FIELD_HIDE"])) { $_S_FIELD_HIDE_ = $context["S_FIELD_HIDE"]; } else { $_S_FIELD_HIDE_ = null; }
                if ($_S_FIELD_HIDE_) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t";
                // line 82
                if (isset($context["acp_profile_contact_before"])) { $_acp_profile_contact_before_ = $context["acp_profile_contact_before"]; } else { $_acp_profile_contact_before_ = null; }
                // line 83
                echo "\t\t<dl>
\t\t\t<dt><label for=\"field_is_contact\">";
                // line 84
                echo $this->env->getExtension('phpbb')->lang("FIELD_IS_CONTACT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("FIELD_IS_CONTACT_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_is_contact\" name=\"field_is_contact\" value=\"1\"";
                // line 85
                if (isset($context["S_FIELD_CONTACT"])) { $_S_FIELD_CONTACT_ = $context["S_FIELD_CONTACT"]; } else { $_S_FIELD_CONTACT_ = null; }
                if ($_S_FIELD_CONTACT_) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t\t<dd><input class=\"text medium\" type=\"text\" name=\"field_contact_desc\" id=\"field_contact_desc\" value=\"";
                // line 86
                if (isset($context["FIELD_CONTACT_DESC"])) { $_FIELD_CONTACT_DESC_ = $context["FIELD_CONTACT_DESC"]; } else { $_FIELD_CONTACT_DESC_ = null; }
                echo $_FIELD_CONTACT_DESC_;
                echo "\" /> <label for=\"field_contact_desc\">";
                echo $this->env->getExtension('phpbb')->lang("FIELD_CONTACT_DESC");
                echo "</label></dd>
\t\t\t<dd><input class=\"text medium\" type=\"text\" name=\"field_contact_url\" id=\"field_contact_url\" value=\"";
                // line 87
                if (isset($context["FIELD_CONTACT_URL"])) { $_FIELD_CONTACT_URL_ = $context["FIELD_CONTACT_URL"]; } else { $_FIELD_CONTACT_URL_ = null; }
                echo $_FIELD_CONTACT_URL_;
                echo "\" /> <label for=\"field_contact_url\">";
                echo $this->env->getExtension('phpbb')->lang("FIELD_CONTACT_URL");
                echo "</label></dd>
\t\t</dl>
\t\t</fieldset>

\t\t";
                // line 91
                if (isset($context["S_EDIT_MODE"])) { $_S_EDIT_MODE_ = $context["S_EDIT_MODE"]; } else { $_S_EDIT_MODE_ = null; }
                if ($_S_EDIT_MODE_) {
                    // line 92
                    echo "\t\t\t<fieldset class=\"quick\">
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"save\" value=\"";
                    // line 93
                    echo $this->env->getExtension('phpbb')->lang("SAVE");
                    echo "\" />
\t\t\t</fieldset>
\t\t";
                }
                // line 96
                echo "
\t\t<fieldset>
\t\t\t<legend>";
                // line 98
                echo $this->env->getExtension('phpbb')->lang("LANG_SPECIFIC");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"lang_name\">";
                // line 100
                echo $this->env->getExtension('phpbb')->lang("USER_FIELD_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"lang_name\" name=\"lang_name\" value=\"";
                // line 101
                if (isset($context["LANG_NAME"])) { $_LANG_NAME_ = $context["LANG_NAME"]; } else { $_LANG_NAME_ = null; }
                echo $_LANG_NAME_;
                echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"lang_explain\">";
                // line 104
                echo $this->env->getExtension('phpbb')->lang("FIELD_DESCRIPTION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("FIELD_DESCRIPTION_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><textarea id=\"lang_explain\" name=\"lang_explain\" rows=\"3\" cols=\"80\">";
                // line 105
                if (isset($context["LANG_EXPLAIN"])) { $_LANG_EXPLAIN_ = $context["LANG_EXPLAIN"]; } else { $_LANG_EXPLAIN_ = null; }
                echo $_LANG_EXPLAIN_;
                echo "</textarea></dd>
\t\t</dl>
\t\t";
                // line 107
                if (isset($context["S_TEXT"])) { $_S_TEXT_ = $context["S_TEXT"]; } else { $_S_TEXT_ = null; }
                if (isset($context["S_STRING"])) { $_S_STRING_ = $context["S_STRING"]; } else { $_S_STRING_ = null; }
                if (($_S_TEXT_ || $_S_STRING_)) {
                    // line 108
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"lang_default_value\">";
                    // line 109
                    echo $this->env->getExtension('phpbb')->lang("DEFAULT_VALUE");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("DEFAULT_VALUE_EXPLAIN");
                    echo "</span></dt>
\t\t\t\t<dd>";
                    // line 110
                    if (isset($context["S_STRING"])) { $_S_STRING_ = $context["S_STRING"]; } else { $_S_STRING_ = null; }
                    if ($_S_STRING_) {
                        echo "<input class=\"text medium\" type=\"text\" id=\"lang_default_value\" name=\"lang_default_value\" value=\"";
                        if (isset($context["LANG_DEFAULT_VALUE"])) { $_LANG_DEFAULT_VALUE_ = $context["LANG_DEFAULT_VALUE"]; } else { $_LANG_DEFAULT_VALUE_ = null; }
                        echo $_LANG_DEFAULT_VALUE_;
                        echo "\" />";
                    } else {
                        echo "<textarea id=\"lang_default_value\" name=\"lang_default_value\" rows=\"5\" cols=\"80\">";
                        if (isset($context["LANG_DEFAULT_VALUE"])) { $_LANG_DEFAULT_VALUE_ = $context["LANG_DEFAULT_VALUE"]; } else { $_LANG_DEFAULT_VALUE_ = null; }
                        echo $_LANG_DEFAULT_VALUE_;
                        echo "</textarea>";
                    }
                    echo "</dd>
\t\t\t</dl>
\t\t";
                }
                // line 113
                echo "\t\t";
                if (isset($context["S_BOOL"])) { $_S_BOOL_ = $context["S_BOOL"]; } else { $_S_BOOL_ = null; }
                if (isset($context["S_DROPDOWN"])) { $_S_DROPDOWN_ = $context["S_DROPDOWN"]; } else { $_S_DROPDOWN_ = null; }
                if (($_S_BOOL_ || $_S_DROPDOWN_)) {
                    // line 114
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"lang_options\">";
                    // line 115
                    echo $this->env->getExtension('phpbb')->lang("ENTRIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>
\t\t\t\t\t";
                    // line 116
                    if (isset($context["S_EDIT_MODE"])) { $_S_EDIT_MODE_ = $context["S_EDIT_MODE"]; } else { $_S_EDIT_MODE_ = null; }
                    if (isset($context["S_DROPDOWN"])) { $_S_DROPDOWN_ = $context["S_DROPDOWN"]; } else { $_S_DROPDOWN_ = null; }
                    if (($_S_EDIT_MODE_ && $_S_DROPDOWN_)) {
                        // line 117
                        echo "\t\t\t\t\t\t<br /><span>";
                        echo $this->env->getExtension('phpbb')->lang("EDIT_DROPDOWN_LANG_EXPLAIN");
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 119
                        echo "\t\t\t\t\t\t<br /><span>";
                        echo $this->env->getExtension('phpbb')->lang("LANG_OPTIONS_EXPLAIN");
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 121
                    echo "\t\t\t\t</dt>
\t\t\t";
                    // line 122
                    if (isset($context["S_DROPDOWN"])) { $_S_DROPDOWN_ = $context["S_DROPDOWN"]; } else { $_S_DROPDOWN_ = null; }
                    if ($_S_DROPDOWN_) {
                        // line 123
                        echo "\t\t\t\t<dd><textarea id=\"lang_options\" name=\"lang_options\" rows=\"5\" cols=\"80\">";
                        if (isset($context["LANG_OPTIONS"])) { $_LANG_OPTIONS_ = $context["LANG_OPTIONS"]; } else { $_LANG_OPTIONS_ = null; }
                        echo $_LANG_OPTIONS_;
                        echo "</textarea></dd>
\t\t\t";
                    } else {
                        // line 125
                        echo "\t\t\t\t<dd><input class=\"medium\" id=\"lang_options\" name=\"lang_options[0]\" value=\"";
                        if (isset($context["FIRST_LANG_OPTION"])) { $_FIRST_LANG_OPTION_ = $context["FIRST_LANG_OPTION"]; } else { $_FIRST_LANG_OPTION_ = null; }
                        echo $_FIRST_LANG_OPTION_;
                        echo "\" /> ";
                        echo $this->env->getExtension('phpbb')->lang("FIRST_OPTION");
                        echo "</dd>
\t\t\t\t<dd><input class=\"medium\" name=\"lang_options[1]\" value=\"";
                        // line 126
                        if (isset($context["SECOND_LANG_OPTION"])) { $_SECOND_LANG_OPTION_ = $context["SECOND_LANG_OPTION"]; } else { $_SECOND_LANG_OPTION_ = null; }
                        echo $_SECOND_LANG_OPTION_;
                        echo "\" /> ";
                        echo $this->env->getExtension('phpbb')->lang("SECOND_OPTION");
                        echo "</dd>
\t\t\t";
                    }
                    // line 128
                    echo "\t\t\t</dl>
\t\t";
                }
                // line 130
                echo "\t\t</fieldset>

\t\t<fieldset class=\"quick\">
\t\t\t";
                // line 133
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t\t";
                // line 134
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t<input class=\"button1\" type=\"submit\" name=\"next\" value=\"";
                // line 135
                echo $this->env->getExtension('phpbb')->lang("PROFILE_TYPE_OPTIONS");
                echo "\" />
\t\t</fieldset>

\t";
            } elseif ($_S_STEP_TWO_) {
                // line 139
                echo "
\t\t<fieldset>
\t\t\t<legend>";
                // line 141
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</legend>
\t\t";
                // line 142
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 143
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 144
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    echo $this->getAttribute($_option_, "TITLE", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>";
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    if ($this->getAttribute($_option_, "EXPLAIN", array())) {
                        echo "<br /><span>";
                        if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                        echo $this->getAttribute($_option_, "EXPLAIN", array());
                        echo "</span>";
                    }
                    echo "</dt>
\t\t\t\t<dd>";
                    // line 145
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    echo $this->getAttribute($_option_, "FIELD", array());
                    echo "</dd>
\t\t\t</dl>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "\t\t</fieldset>

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 150
                if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
                echo $_S_CONTENT_FLOW_BEGIN_;
                echo ";\">
\t\t\t<input class=\"button1\" type=\"submit\" name=\"prev\" value=\"";
                // line 151
                echo $this->env->getExtension('phpbb')->lang("PROFILE_BASIC_OPTIONS");
                echo "\" />
\t\t</fieldset>

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 154
                if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
                echo $_S_CONTENT_FLOW_END_;
                echo ";\">
\t\t\t";
                // line 155
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t\t";
                // line 156
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t<input class=\"button1\" type=\"submit\" name=\"next\" value=\"";
                // line 157
                echo $this->env->getExtension('phpbb')->lang("NEXT_STEP");
                echo "\" />
\t\t</fieldset>

\t";
            } elseif ($_S_STEP_THREE_) {
                // line 161
                echo "
\t\t";
                // line 162
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "options", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                    // line 163
                    echo "\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 164
                    if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                    echo $this->getAttribute($_options_, "LANGUAGE", array());
                    echo "</legend>
\t\t\t";
                    // line 165
                    if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_options_, "field", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 166
                        echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label>";
                        // line 167
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo $this->getAttribute($_field_, "L_TITLE", array());
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</label>";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        if ($this->getAttribute($_field_, "L_EXPLAIN", array())) {
                            echo "<br /><span>";
                            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                            echo $this->getAttribute($_field_, "L_EXPLAIN", array());
                            echo "</span>";
                        }
                        echo "</dt>
\t\t\t\t\t";
                        // line 168
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo $this->getAttribute($_field_, "FIELD", array());
                        echo "
\t\t\t\t</dl>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 171
                    echo "\t\t\t</fieldset>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "
\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 174
                if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
                echo $_S_CONTENT_FLOW_BEGIN_;
                echo ";\">
\t\t\t<input class=\"button1\" type=\"submit\" name=\"prev\" value=\"";
                // line 175
                echo $this->env->getExtension('phpbb')->lang("PROFILE_TYPE_OPTIONS");
                echo "\" />
\t\t</fieldset>

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 178
                if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
                echo $_S_CONTENT_FLOW_END_;
                echo ";\">
\t\t\t";
                // line 179
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t\t<input class=\"button1\" type=\"submit\" name=\"save\" value=\"";
                // line 180
                echo $this->env->getExtension('phpbb')->lang("SAVE");
                echo "\" />
\t\t\t";
                // line 181
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t</fieldset>

\t";
            }
            // line 185
            echo "
\t</form>

";
        } else {
            // line 189
            echo "
\t<h1>";
            // line 190
            echo $this->env->getExtension('phpbb')->lang("ACP_CUSTOM_PROFILE_FIELDS");
            echo "</h1>

\t";
            // line 192
            if (isset($context["S_NEED_EDIT"])) { $_S_NEED_EDIT_ = $context["S_NEED_EDIT"]; } else { $_S_NEED_EDIT_ = null; }
            if ($_S_NEED_EDIT_) {
                // line 193
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 194
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 195
                echo $this->env->getExtension('phpbb')->lang("CUSTOM_FIELDS_NOT_TRANSLATED");
                echo "</p>
\t\t</div>
\t";
            }
            // line 198
            echo "
\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 202
            echo $this->env->getExtension('phpbb')->lang("FIELD_IDENT");
            echo "</th>
\t\t<th>";
            // line 203
            echo $this->env->getExtension('phpbb')->lang("FIELD_TYPE");
            echo "</th>
\t\t<th colspan=\"2\">";
            // line 204
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 208
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "fields", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
                // line 209
                echo "\t<tr>
\t\t<td>";
                // line 210
                if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
                echo $this->getAttribute($_fields_, "FIELD_IDENT", array());
                echo "</td>
\t\t<td>";
                // line 211
                if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
                echo $this->getAttribute($_fields_, "FIELD_TYPE", array());
                echo "</td>
\t\t<td style=\"text-align: center;\"><a href=\"";
                // line 212
                if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
                echo $this->getAttribute($_fields_, "U_ACTIVATE_DEACTIVATE", array());
                echo "\" data-ajax=\"activate_deactivate\">";
                if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
                echo $this->getAttribute($_fields_, "L_ACTIVATE_DEACTIVATE", array());
                echo "</a>";
                if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
                if ($this->getAttribute($_fields_, "S_NEED_EDIT", array())) {
                    echo " | <a href=\"";
                    if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
                    echo $this->getAttribute($_fields_, "U_TRANSLATE", array());
                    echo "\" style=\"color: red;\">";
                    echo $this->env->getExtension('phpbb')->lang("TRANSLATE");
                    echo "</a>";
                }
                echo "</td>

\t\t<td class=\"actions\" style=\"width: 80px;\">
\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                // line 215
                if (isset($context["ICON_MOVE_UP_DISABLED"])) { $_ICON_MOVE_UP_DISABLED_ = $context["ICON_MOVE_UP_DISABLED"]; } else { $_ICON_MOVE_UP_DISABLED_ = null; }
                echo $_ICON_MOVE_UP_DISABLED_;
                echo "</span>
\t\t\t<span class=\"up\"><a href=\"";
                // line 216
                if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
                echo $this->getAttribute($_fields_, "U_MOVE_UP", array());
                echo "\" data-ajax=\"row_up\">";
                if (isset($context["ICON_MOVE_UP"])) { $_ICON_MOVE_UP_ = $context["ICON_MOVE_UP"]; } else { $_ICON_MOVE_UP_ = null; }
                echo $_ICON_MOVE_UP_;
                echo "</a></span>
\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                // line 217
                if (isset($context["ICON_MOVE_DOWN_DISABLED"])) { $_ICON_MOVE_DOWN_DISABLED_ = $context["ICON_MOVE_DOWN_DISABLED"]; } else { $_ICON_MOVE_DOWN_DISABLED_ = null; }
                echo $_ICON_MOVE_DOWN_DISABLED_;
                echo "</span>
\t\t\t<span class=\"down\"><a href=\"";
                // line 218
                if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
                echo $this->getAttribute($_fields_, "U_MOVE_DOWN", array());
                echo "\" data-ajax=\"row_down\">";
                if (isset($context["ICON_MOVE_DOWN"])) { $_ICON_MOVE_DOWN_ = $context["ICON_MOVE_DOWN"]; } else { $_ICON_MOVE_DOWN_ = null; }
                echo $_ICON_MOVE_DOWN_;
                echo "</a></span>
\t\t\t";
                // line 219
                if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
                if ( !$this->getAttribute($_fields_, "S_NEED_EDIT", array())) {
                    // line 220
                    echo "\t\t\t\t<a href=\"";
                    if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
                    echo $this->getAttribute($_fields_, "U_EDIT", array());
                    echo "\">";
                    if (isset($context["ICON_EDIT"])) { $_ICON_EDIT_ = $context["ICON_EDIT"]; } else { $_ICON_EDIT_ = null; }
                    echo $_ICON_EDIT_;
                    echo "</a>
\t\t\t";
                } else {
                    // line 222
                    echo "\t\t\t\t";
                    if (isset($context["ICON_EDIT_DISABLED"])) { $_ICON_EDIT_DISABLED_ = $context["ICON_EDIT_DISABLED"]; } else { $_ICON_EDIT_DISABLED_ = null; }
                    echo $_ICON_EDIT_DISABLED_;
                    echo "
\t\t\t";
                }
                // line 224
                echo "\t\t\t<a href=\"";
                if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
                echo $this->getAttribute($_fields_, "U_DELETE", array());
                echo "\" data-ajax=\"row_delete\">";
                if (isset($context["ICON_DELETE"])) { $_ICON_DELETE_ = $context["ICON_DELETE"]; } else { $_ICON_DELETE_ = null; }
                echo $_ICON_DELETE_;
                echo "</a>
\t\t</td>

\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 229
                echo "\t<tr class=\"row3\">
\t\t<td colspan=\"4\">";
                // line 230
                echo $this->env->getExtension('phpbb')->lang("ACP_NO_ITEMS");
                echo "</td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "\t</tbody>
\t</table>

\t<form id=\"profile_fields\" method=\"post\" action=\"";
            // line 236
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset class=\"quick\">
\t\t<input class=\"text small\" type=\"text\" name=\"field_ident\" /> <select name=\"field_type\">";
            // line 239
            if (isset($context["S_TYPE_OPTIONS"])) { $_S_TYPE_OPTIONS_ = $context["S_TYPE_OPTIONS"]; } else { $_S_TYPE_OPTIONS_ = null; }
            echo $_S_TYPE_OPTIONS_;
            echo "</select>
\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
            // line 240
            echo $this->env->getExtension('phpbb')->lang("CREATE_NEW_FIELD");
            echo "\" />
\t\t<input type=\"hidden\" name=\"create\" value=\"1\" />
\t\t";
            // line 242
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 247
        echo "
";
        // line 248
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_profile.html", 248)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  885 => 248,  882 => 247,  873 => 242,  868 => 240,  863 => 239,  856 => 236,  851 => 233,  842 => 230,  839 => 229,  824 => 224,  817 => 222,  807 => 220,  804 => 219,  796 => 218,  791 => 217,  783 => 216,  778 => 215,  758 => 212,  753 => 211,  748 => 210,  745 => 209,  739 => 208,  732 => 204,  728 => 203,  724 => 202,  718 => 198,  712 => 195,  708 => 194,  705 => 193,  702 => 192,  697 => 190,  694 => 189,  688 => 185,  680 => 181,  676 => 180,  671 => 179,  666 => 178,  660 => 175,  655 => 174,  652 => 173,  645 => 171,  635 => 168,  621 => 167,  618 => 166,  613 => 165,  608 => 164,  605 => 163,  600 => 162,  597 => 161,  590 => 157,  585 => 156,  580 => 155,  575 => 154,  569 => 151,  564 => 150,  560 => 148,  550 => 145,  536 => 144,  533 => 143,  528 => 142,  524 => 141,  520 => 139,  513 => 135,  508 => 134,  503 => 133,  498 => 130,  494 => 128,  486 => 126,  478 => 125,  471 => 123,  468 => 122,  465 => 121,  459 => 119,  453 => 117,  449 => 116,  444 => 115,  441 => 114,  436 => 113,  419 => 110,  412 => 109,  409 => 108,  405 => 107,  399 => 105,  392 => 104,  385 => 101,  380 => 100,  375 => 98,  371 => 96,  365 => 93,  362 => 92,  359 => 91,  349 => 87,  342 => 86,  335 => 85,  328 => 84,  325 => 83,  323 => 82,  315 => 80,  308 => 79,  299 => 76,  292 => 75,  283 => 72,  276 => 71,  267 => 68,  260 => 67,  251 => 64,  244 => 63,  235 => 60,  228 => 59,  219 => 56,  212 => 55,  203 => 52,  196 => 51,  191 => 49,  178 => 44,  169 => 43,  162 => 42,  159 => 41,  152 => 38,  145 => 37,  142 => 36,  132 => 33,  125 => 32,  122 => 31,  119 => 30,  113 => 28,  106 => 27,  101 => 25,  97 => 23,  92 => 22,  83 => 20,  80 => 19,  73 => 16,  69 => 15,  66 => 14,  63 => 13,  58 => 11,  53 => 9,  42 => 7,  39 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
