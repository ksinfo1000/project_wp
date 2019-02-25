<?php

/* acp_permissions.html */
class __TwigTemplate_de5af3d8700e6c671fdbb763a8c527b02e4dc4b70ef611d7ec0b53eea31d826f extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_permissions.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (isset($context["S_INTRO"])) { $_S_INTRO_ = $context["S_INTRO"]; } else { $_S_INTRO_ = null; }
        if ($_S_INTRO_) {
            // line 6
            echo "
\t<h1>";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("ACP_PERMISSIONS");
            echo "</h1>

\t";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("ACP_PERMISSIONS_EXPLAIN");
            echo "

";
        }
        // line 12
        echo "
";
        // line 13
        if (isset($context["S_SELECT_VICTIM"])) { $_S_SELECT_VICTIM_ = $context["S_SELECT_VICTIM"]; } else { $_S_SELECT_VICTIM_ = null; }
        if ($_S_SELECT_VICTIM_) {
            // line 14
            echo "
\t";
            // line 15
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            if ($_U_BACK_) {
                echo "<a href=\"";
                if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
                echo $_U_BACK_;
                echo "\" style=\"float: ";
                if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
                echo $_S_CONTENT_FLOW_END_;
                echo ";\">&laquo; ";
                echo $this->env->getExtension('phpbb')->lang("BACK");
                echo "</a>";
            }
            // line 16
            echo "
\t<h1>";
            // line 17
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
            echo "</p>

\t";
            // line 21
            if (isset($context["S_FORUM_NAMES"])) { $_S_FORUM_NAMES_ = $context["S_FORUM_NAMES"]; } else { $_S_FORUM_NAMES_ = null; }
            if ($_S_FORUM_NAMES_) {
                // line 22
                echo "\t\t<p><strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUMS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (isset($context["FORUM_NAMES"])) { $_FORUM_NAMES_ = $context["FORUM_NAMES"]; } else { $_FORUM_NAMES_ = null; }
                echo $_FORUM_NAMES_;
                echo "</p>
\t";
            }
            // line 24
            echo "
\t";
            // line 25
            if (isset($context["S_SELECT_FORUM"])) { $_S_SELECT_FORUM_ = $context["S_SELECT_FORUM"]; } else { $_S_SELECT_FORUM_ = null; }
            if (isset($context["S_SELECT_USER"])) { $_S_SELECT_USER_ = $context["S_SELECT_USER"]; } else { $_S_SELECT_USER_ = null; }
            if (isset($context["S_CAN_SELECT_USER"])) { $_S_CAN_SELECT_USER_ = $context["S_CAN_SELECT_USER"]; } else { $_S_CAN_SELECT_USER_ = null; }
            if (isset($context["S_SELECT_GROUP"])) { $_S_SELECT_GROUP_ = $context["S_SELECT_GROUP"]; } else { $_S_SELECT_GROUP_ = null; }
            if (isset($context["S_CAN_SELECT_GROUP"])) { $_S_CAN_SELECT_GROUP_ = $context["S_CAN_SELECT_GROUP"]; } else { $_S_CAN_SELECT_GROUP_ = null; }
            if (isset($context["S_SELECT_USERGROUP"])) { $_S_SELECT_USERGROUP_ = $context["S_SELECT_USERGROUP"]; } else { $_S_SELECT_USERGROUP_ = null; }
            if (isset($context["S_SELECT_USERGROUP_VIEW"])) { $_S_SELECT_USERGROUP_VIEW_ = $context["S_SELECT_USERGROUP_VIEW"]; } else { $_S_SELECT_USERGROUP_VIEW_ = null; }
            if ($_S_SELECT_FORUM_) {
                // line 26
                echo "
\t\t<form id=\"select_victim\" method=\"post\" action=\"";
                // line 27
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">

\t\t<fieldset>
\t\t\t<legend>";
                // line 30
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUM");
                echo "</legend>
\t\t\t";
                // line 31
                if (isset($context["S_FORUM_MULTIPLE"])) { $_S_FORUM_MULTIPLE_ = $context["S_FORUM_MULTIPLE"]; } else { $_S_FORUM_MULTIPLE_ = null; }
                if ($_S_FORUM_MULTIPLE_) {
                    echo "<p>";
                    echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUMS_EXPLAIN");
                    echo "</p>";
                }
                // line 32
                echo "\t\t<dl>
\t\t\t<dt>";
                // line 33
                if (isset($context["acp_permissions_select_multiple_forum_prepend"])) { $_acp_permissions_select_multiple_forum_prepend_ = $context["acp_permissions_select_multiple_forum_prepend"]; } else { $_acp_permissions_select_multiple_forum_prepend_ = null; }
                echo "<label for=\"forum\">";
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUM");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>";
                if (isset($context["acp_permissions_select_multiple_forum_append"])) { $_acp_permissions_select_multiple_forum_append_ = $context["acp_permissions_select_multiple_forum_append"]; } else { $_acp_permissions_select_multiple_forum_append_ = null; }
                echo "</dt>
\t\t\t<dd><select id=\"forum\" name=\"forum_id[]\"";
                // line 34
                if (isset($context["S_FORUM_MULTIPLE"])) { $_S_FORUM_MULTIPLE_ = $context["S_FORUM_MULTIPLE"]; } else { $_S_FORUM_MULTIPLE_ = null; }
                if ($_S_FORUM_MULTIPLE_) {
                    echo " multiple=\"multiple\"";
                }
                echo " size=\"10\">";
                if (isset($context["S_FORUM_OPTIONS"])) { $_S_FORUM_OPTIONS_ = $context["S_FORUM_OPTIONS"]; } else { $_S_FORUM_OPTIONS_ = null; }
                echo $_S_FORUM_OPTIONS_;
                echo "</select></dd>
\t\t\t";
                // line 35
                if (isset($context["S_FORUM_ALL"])) { $_S_FORUM_ALL_ = $context["S_FORUM_ALL"]; } else { $_S_FORUM_ALL_ = null; }
                if ($_S_FORUM_ALL_) {
                    echo "<dd><label><input type=\"checkbox\" class=\"radio\" name=\"all_forums\" value=\"1\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                    echo "</label></dd>";
                }
                // line 36
                echo "\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t";
                // line 39
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t\t";
                // line 40
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 41
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" class=\"button1\" />
\t\t</p>

\t\t</fieldset>
\t\t</form>

\t\t";
                // line 47
                if (isset($context["S_FORUM_MULTIPLE"])) { $_S_FORUM_MULTIPLE_ = $context["S_FORUM_MULTIPLE"]; } else { $_S_FORUM_MULTIPLE_ = null; }
                if ($_S_FORUM_MULTIPLE_) {
                    // line 48
                    echo "
\t\t\t<form id=\"select_subforum\" method=\"post\" action=\"";
                    // line 49
                    if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                    echo $_U_ACTION_;
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 52
                    echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUM");
                    echo "</legend>
\t\t\t\t<p>";
                    // line 53
                    echo $this->env->getExtension('phpbb')->lang("SELECT_FORUM_SUBFORUM_EXPLAIN");
                    echo "</p>
\t\t\t<dl>
\t\t\t\t<dt>";
                    // line 55
                    if (isset($context["acp_permissions_select_forum_prepend"])) { $_acp_permissions_select_forum_prepend_ = $context["acp_permissions_select_forum_prepend"]; } else { $_acp_permissions_select_forum_prepend_ = null; }
                    echo "<label for=\"sforum\">";
                    echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>";
                    if (isset($context["acp_permissions_select_forum_append"])) { $_acp_permissions_select_forum_append_ = $context["acp_permissions_select_forum_append"]; } else { $_acp_permissions_select_forum_append_ = null; }
                    echo "</dt>
\t\t\t\t<dd><select id=\"sforum\" name=\"subforum_id\">";
                    // line 56
                    if (isset($context["S_SUBFORUM_OPTIONS"])) { $_S_SUBFORUM_OPTIONS_ = $context["S_SUBFORUM_OPTIONS"]; } else { $_S_SUBFORUM_OPTIONS_ = null; }
                    echo $_S_SUBFORUM_OPTIONS_;
                    echo "</select></dd>
\t\t\t</dl>

\t\t\t<p class=\"quick\">
\t\t\t\t";
                    // line 60
                    if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                    echo $_S_HIDDEN_FIELDS_;
                    echo "
\t\t\t\t";
                    // line 61
                    if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                    echo $_S_FORM_TOKEN_;
                    echo "
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                    // line 62
                    echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                    echo "\" class=\"button1\" />
\t\t\t</p>

\t\t\t</fieldset>
\t\t\t</form>

\t\t";
                }
                // line 69
                echo "
\t";
            } elseif (($_S_SELECT_USER_ && $_S_CAN_SELECT_USER_)) {
                // line 71
                echo "
\t\t<form id=\"select_victim\" method=\"post\" action=\"";
                // line 72
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">

\t\t<fieldset>
\t\t\t<legend>";
                // line 75
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_USER");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"username\">";
                // line 77
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"username\" name=\"username[]\" /></dd>
\t\t\t<dd>[ <a href=\"";
                // line 79
                if (isset($context["U_FIND_USERNAME"])) { $_U_FIND_USERNAME_ = $context["U_FIND_USERNAME"]; } else { $_U_FIND_USERNAME_ = null; }
                echo $_U_FIND_USERNAME_;
                echo "\" onclick=\"find_username(this.href); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "</a> ]</dd>
\t\t\t<dd class=\"full\" style=\"text-align: left;\"><label><input type=\"checkbox\" class=\"radio\" id=\"anonymous\" name=\"user_id[]\" value=\"";
                // line 80
                if (isset($context["ANONYMOUS_USER_ID"])) { $_ANONYMOUS_USER_ID_ = $context["ANONYMOUS_USER_ID"]; } else { $_ANONYMOUS_USER_ID_ = null; }
                echo $_ANONYMOUS_USER_ID_;
                echo "\" /> ";
                echo $this->env->getExtension('phpbb')->lang("SELECT_ANONYMOUS");
                echo "</label></dd>
\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t";
                // line 84
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t\t";
                // line 85
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 86
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" class=\"button1\" />
\t\t</p>
\t\t</fieldset>
\t\t</form>

\t";
            } elseif (($_S_SELECT_GROUP_ && $_S_CAN_SELECT_GROUP_)) {
                // line 92
                echo "
\t\t<form id=\"select_victim\" method=\"post\" action=\"";
                // line 93
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">

\t\t<fieldset>
\t\t\t<legend>";
                // line 96
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_GROUP");
                echo "</legend>
\t\t<dl>
\t\t\t<dt>";
                // line 98
                if (isset($context["acp_permissions_select_group_prepend"])) { $_acp_permissions_select_group_prepend_ = $context["acp_permissions_select_group_prepend"]; } else { $_acp_permissions_select_group_prepend_ = null; }
                echo "<label for=\"group\">";
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_GROUP");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>";
                if (isset($context["acp_permissions_select_group_append"])) { $_acp_permissions_select_group_append_ = $context["acp_permissions_select_group_append"]; } else { $_acp_permissions_select_group_append_ = null; }
                echo "</dt>
\t\t\t<dd><select name=\"group_id[]\" id=\"group\">";
                // line 99
                if (isset($context["S_GROUP_OPTIONS"])) { $_S_GROUP_OPTIONS_ = $context["S_GROUP_OPTIONS"]; } else { $_S_GROUP_OPTIONS_ = null; }
                echo $_S_GROUP_OPTIONS_;
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t";
                // line 103
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t\t";
                // line 104
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 105
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" class=\"button1\" />
\t\t</p>

\t\t</fieldset>
\t\t</form>

\t\t";
            } elseif ($_S_SELECT_USERGROUP_) {
                // line 112
                echo "
\t\t<div class=\"column1\">

\t\t";
                // line 115
                if (isset($context["S_CAN_SELECT_USER"])) { $_S_CAN_SELECT_USER_ = $context["S_CAN_SELECT_USER"]; } else { $_S_CAN_SELECT_USER_ = null; }
                if ($_S_CAN_SELECT_USER_) {
                    // line 116
                    echo "
\t\t\t<h1>";
                    // line 117
                    echo $this->env->getExtension('phpbb')->lang("USERS");
                    echo "</h1>

\t\t\t<form id=\"users\" method=\"post\" action=\"";
                    // line 119
                    if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                    echo $_U_ACTION_;
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 122
                    echo $this->env->getExtension('phpbb')->lang("MANAGE_USERS");
                    echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><select style=\"width: 100%;\" name=\"user_id[]\" multiple=\"multiple\" size=\"5\">";
                    // line 124
                    if (isset($context["S_DEFINED_USER_OPTIONS"])) { $_S_DEFINED_USER_OPTIONS_ = $context["S_DEFINED_USER_OPTIONS"]; } else { $_S_DEFINED_USER_OPTIONS_ = null; }
                    echo $_S_DEFINED_USER_OPTIONS_;
                    echo "</select></dd>
\t\t\t\t";
                    // line 125
                    if (isset($context["S_ALLOW_ALL_SELECT"])) { $_S_ALLOW_ALL_SELECT_ = $context["S_ALLOW_ALL_SELECT"]; } else { $_S_ALLOW_ALL_SELECT_ = null; }
                    if ($_S_ALLOW_ALL_SELECT_) {
                        echo "<dd class=\"full\" style=\"text-align: right;\"><label><input type=\"checkbox\" class=\"radio\" name=\"all_users\" value=\"1\" /> ";
                        echo $this->env->getExtension('phpbb')->lang("ALL_USERS");
                        echo "</label></dd>";
                    }
                    // line 126
                    echo "\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                    // line 130
                    if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                    echo $_S_HIDDEN_FIELDS_;
                    echo "
\t\t\t\t";
                    // line 131
                    if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                    echo $_S_FORM_TOKEN_;
                    echo "
\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"action[delete]\" value=\"";
                    // line 132
                    echo $this->env->getExtension('phpbb')->lang("REMOVE_PERMISSIONS");
                    echo "\" style=\"width: 46% !important;\" /> &nbsp; <input class=\"button1\" type=\"submit\" name=\"submit_edit_options\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("EDIT_PERMISSIONS");
                    echo "\" style=\"width: 46% !important;\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t<form id=\"add_user\" method=\"post\" action=\"";
                    // line 136
                    if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                    echo $_U_ACTION_;
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 139
                    echo $this->env->getExtension('phpbb')->lang("ADD_USERS");
                    echo "</legend>
\t\t\t\t<p>";
                    // line 140
                    echo $this->env->getExtension('phpbb')->lang("USERNAMES_EXPLAIN");
                    echo "</p>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><textarea id=\"username\" name=\"usernames\" rows=\"5\" cols=\"5\" style=\"width: 100%; height: 60px;\"></textarea></dd>
\t\t\t\t<dd class=\"full\" style=\"text-align: left;\">";
                    // line 143
                    if (isset($context["acp_permissions_find_username_prepend"])) { $_acp_permissions_find_username_prepend_ = $context["acp_permissions_find_username_prepend"]; } else { $_acp_permissions_find_username_prepend_ = null; }
                    echo "<div style=\"float: ";
                    if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
                    echo $_S_CONTENT_FLOW_END_;
                    echo ";\">[ <a href=\"";
                    if (isset($context["U_FIND_USERNAME"])) { $_U_FIND_USERNAME_ = $context["U_FIND_USERNAME"]; } else { $_U_FIND_USERNAME_ = null; }
                    echo $_U_FIND_USERNAME_;
                    echo "\" onclick=\"find_username(this.href); return false;\">";
                    echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                    echo "</a> ]</div>";
                    if (isset($context["acp_permissions_find_username_append"])) { $_acp_permissions_find_username_append_ = $context["acp_permissions_find_username_append"]; } else { $_acp_permissions_find_username_append_ = null; }
                    echo "<label><input type=\"checkbox\" class=\"radio\" id=\"anonymous\" name=\"user_id[]\" value=\"";
                    if (isset($context["ANONYMOUS_USER_ID"])) { $_ANONYMOUS_USER_ID_ = $context["ANONYMOUS_USER_ID"]; } else { $_ANONYMOUS_USER_ID_ = null; }
                    echo $_ANONYMOUS_USER_ID_;
                    echo "\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("SELECT_ANONYMOUS");
                    echo "</label></dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                    // line 148
                    if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                    echo $_S_HIDDEN_FIELDS_;
                    echo "
\t\t\t\t";
                    // line 149
                    if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                    echo $_S_FORM_TOKEN_;
                    echo "
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"submit_add_options\" value=\"";
                    // line 150
                    echo $this->env->getExtension('phpbb')->lang("ADD_PERMISSIONS");
                    echo "\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t";
                }
                // line 155
                echo "
\t\t</div>

\t\t<div class=\"column2\">

\t\t";
                // line 160
                if (isset($context["S_CAN_SELECT_GROUP"])) { $_S_CAN_SELECT_GROUP_ = $context["S_CAN_SELECT_GROUP"]; } else { $_S_CAN_SELECT_GROUP_ = null; }
                if ($_S_CAN_SELECT_GROUP_) {
                    // line 161
                    echo "
\t\t\t<h1>";
                    // line 162
                    echo $this->env->getExtension('phpbb')->lang("USERGROUPS");
                    echo "</h1>

\t\t\t<form id=\"groups\" method=\"post\" action=\"";
                    // line 164
                    if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                    echo $_U_ACTION_;
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 167
                    echo $this->env->getExtension('phpbb')->lang("MANAGE_GROUPS");
                    echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><select style=\"width: 100%;\" name=\"group_id[]\" multiple=\"multiple\" size=\"5\">";
                    // line 169
                    if (isset($context["S_DEFINED_GROUP_OPTIONS"])) { $_S_DEFINED_GROUP_OPTIONS_ = $context["S_DEFINED_GROUP_OPTIONS"]; } else { $_S_DEFINED_GROUP_OPTIONS_ = null; }
                    echo $_S_DEFINED_GROUP_OPTIONS_;
                    echo "</select></dd>
\t\t\t\t";
                    // line 170
                    if (isset($context["S_ALLOW_ALL_SELECT"])) { $_S_ALLOW_ALL_SELECT_ = $context["S_ALLOW_ALL_SELECT"]; } else { $_S_ALLOW_ALL_SELECT_ = null; }
                    if ($_S_ALLOW_ALL_SELECT_) {
                        echo "<dd class=\"full\" style=\"text-align: right;\"><label><input type=\"checkbox\" class=\"radio\" name=\"all_groups\" value=\"1\" /> ";
                        echo $this->env->getExtension('phpbb')->lang("ALL_GROUPS");
                        echo "</label></dd>";
                    }
                    // line 171
                    echo "\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                    // line 175
                    if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                    echo $_S_HIDDEN_FIELDS_;
                    echo "
\t\t\t\t";
                    // line 176
                    if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                    echo $_S_FORM_TOKEN_;
                    echo "
\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[delete]\" value=\"";
                    // line 177
                    echo $this->env->getExtension('phpbb')->lang("REMOVE_PERMISSIONS");
                    echo "\" style=\"width: 46% !important;\" /> &nbsp; <input class=\"button1\" type=\"submit\" name=\"submit_edit_options\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("EDIT_PERMISSIONS");
                    echo "\" style=\"width: 46% !important;\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t<form id=\"add_groups\" method=\"post\" action=\"";
                    // line 181
                    if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                    echo $_U_ACTION_;
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 184
                    echo $this->env->getExtension('phpbb')->lang("ADD_GROUPS");
                    echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\">";
                    // line 186
                    if (isset($context["acp_permissions_add_group_options_prepend"])) { $_acp_permissions_add_group_options_prepend_ = $context["acp_permissions_add_group_options_prepend"]; } else { $_acp_permissions_add_group_options_prepend_ = null; }
                    echo "<select name=\"group_id[]\" style=\"width: 100%; height: 107px;\" multiple=\"multiple\">";
                    if (isset($context["S_ADD_GROUP_OPTIONS"])) { $_S_ADD_GROUP_OPTIONS_ = $context["S_ADD_GROUP_OPTIONS"]; } else { $_S_ADD_GROUP_OPTIONS_ = null; }
                    echo $_S_ADD_GROUP_OPTIONS_;
                    echo "</select>";
                    if (isset($context["acp_permissions_add_group_options_append"])) { $_acp_permissions_add_group_options_append_ = $context["acp_permissions_add_group_options_append"]; } else { $_acp_permissions_add_group_options_append_ = null; }
                    echo "</dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                    // line 191
                    if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                    echo $_S_HIDDEN_FIELDS_;
                    echo "
\t\t\t\t";
                    // line 192
                    if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                    echo $_S_FORM_TOKEN_;
                    echo "
\t\t\t\t<input type=\"submit\" class=\"button1\" name=\"submit_add_options\" value=\"";
                    // line 193
                    echo $this->env->getExtension('phpbb')->lang("ADD_PERMISSIONS");
                    echo "\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t";
                }
                // line 198
                echo "
\t\t</div>

\t";
            } elseif ($_S_SELECT_USERGROUP_VIEW_) {
                // line 202
                echo "
\t\t<div class=\"column1\">

\t\t\t<h1>";
                // line 205
                echo $this->env->getExtension('phpbb')->lang("USERS");
                echo "</h1>

\t\t\t<form id=\"users\" method=\"post\" action=\"";
                // line 207
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 210
                echo $this->env->getExtension('phpbb')->lang("MANAGE_USERS");
                echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><select style=\"width: 100%;\" name=\"user_id[]\" multiple=\"multiple\" size=\"5\">";
                // line 212
                if (isset($context["S_DEFINED_USER_OPTIONS"])) { $_S_DEFINED_USER_OPTIONS_ = $context["S_DEFINED_USER_OPTIONS"]; } else { $_S_DEFINED_USER_OPTIONS_ = null; }
                echo $_S_DEFINED_USER_OPTIONS_;
                echo "</select></dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                // line 217
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t\t\t";
                // line 218
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
                // line 219
                echo $this->env->getExtension('phpbb')->lang("VIEW_PERMISSIONS");
                echo "\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t<form id=\"add_user\" method=\"post\" action=\"";
                // line 223
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 226
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_USER");
                echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"username\">";
                // line 228
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" id=\"username\" name=\"username[]\" /></dd>
\t\t\t\t<dd>[ <a href=\"";
                // line 230
                if (isset($context["U_FIND_USERNAME"])) { $_U_FIND_USERNAME_ = $context["U_FIND_USERNAME"]; } else { $_U_FIND_USERNAME_ = null; }
                echo $_U_FIND_USERNAME_;
                echo "\" onclick=\"find_username(this.href); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "</a> ]</dd>
\t\t\t\t<dd class=\"full\" style=\"text-align: left;\"><label><input type=\"checkbox\" class=\"radio\" id=\"anonymous\" name=\"user_id[]\" value=\"";
                // line 231
                if (isset($context["ANONYMOUS_USER_ID"])) { $_ANONYMOUS_USER_ID_ = $context["ANONYMOUS_USER_ID"]; } else { $_ANONYMOUS_USER_ID_ = null; }
                echo $_ANONYMOUS_USER_ID_;
                echo "\" /> ";
                echo $this->env->getExtension('phpbb')->lang("SELECT_ANONYMOUS");
                echo "</label></dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                // line 236
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t\t\t";
                // line 237
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 238
                echo $this->env->getExtension('phpbb')->lang("VIEW_PERMISSIONS");
                echo "\" class=\"button1\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t</div>

\t\t<div class=\"column2\">

\t\t\t<h1>";
                // line 246
                echo $this->env->getExtension('phpbb')->lang("USERGROUPS");
                echo "</h1>

\t\t\t<form id=\"groups\" method=\"post\" action=\"";
                // line 248
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 251
                echo $this->env->getExtension('phpbb')->lang("MANAGE_GROUPS");
                echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><select style=\"width: 100%;\" name=\"group_id[]\" multiple=\"multiple\" size=\"5\">";
                // line 253
                if (isset($context["S_DEFINED_GROUP_OPTIONS"])) { $_S_DEFINED_GROUP_OPTIONS_ = $context["S_DEFINED_GROUP_OPTIONS"]; } else { $_S_DEFINED_GROUP_OPTIONS_ = null; }
                echo $_S_DEFINED_GROUP_OPTIONS_;
                echo "</select></dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                // line 258
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t\t\t";
                // line 259
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
                // line 260
                echo $this->env->getExtension('phpbb')->lang("VIEW_PERMISSIONS");
                echo "\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t<form id=\"group\" method=\"post\" action=\"";
                // line 264
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 267
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_GROUP");
                echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"group_select\">";
                // line 269
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_GROUP");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t";
                // line 270
                if (isset($context["acp_permissions_select_group_before"])) { $_acp_permissions_select_group_before_ = $context["acp_permissions_select_group_before"]; } else { $_acp_permissions_select_group_before_ = null; }
                // line 271
                echo "\t\t\t\t<dd><select name=\"group_id[]\" id=\"group_select\">";
                if (isset($context["S_ADD_GROUP_OPTIONS"])) { $_S_ADD_GROUP_OPTIONS_ = $context["S_ADD_GROUP_OPTIONS"]; } else { $_S_ADD_GROUP_OPTIONS_ = null; }
                echo $_S_ADD_GROUP_OPTIONS_;
                echo "</select></dd>
\t\t\t\t";
                // line 272
                if (isset($context["acp_permissions_select_group_after"])) { $_acp_permissions_select_group_after_ = $context["acp_permissions_select_group_after"]; } else { $_acp_permissions_select_group_after_ = null; }
                // line 273
                echo "\t\t\t\t<dd>&nbsp;</dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                // line 278
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t\t\t";
                // line 279
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 280
                echo $this->env->getExtension('phpbb')->lang("VIEW_PERMISSIONS");
                echo "\" class=\"button1\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t</div>

\t";
            }
            // line 287
            echo "
";
        }
        // line 289
        echo "
";
        // line 290
        if (isset($context["S_VIEWING_PERMISSIONS"])) { $_S_VIEWING_PERMISSIONS_ = $context["S_VIEWING_PERMISSIONS"]; } else { $_S_VIEWING_PERMISSIONS_ = null; }
        if ($_S_VIEWING_PERMISSIONS_) {
            // line 291
            echo "
\t<h1>";
            // line 292
            echo $this->env->getExtension('phpbb')->lang("ACL_VIEW");
            echo "</h1>

\t<p>";
            // line 294
            echo $this->env->getExtension('phpbb')->lang("ACL_VIEW_EXPLAIN");
            echo "</p>

\t<fieldset class=\"quick\">
\t\t<strong>&raquo; ";
            // line 297
            echo $this->env->getExtension('phpbb')->lang("PERMISSION_TYPE");
            echo "</strong>
\t</fieldset>

\t";
            // line 300
            $location = "permission_mask.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("permission_mask.html", "acp_permissions.html", 300)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 301
            echo "
";
        }
        // line 303
        echo "
";
        // line 304
        if (isset($context["S_SETTING_PERMISSIONS"])) { $_S_SETTING_PERMISSIONS_ = $context["S_SETTING_PERMISSIONS"]; } else { $_S_SETTING_PERMISSIONS_ = null; }
        if ($_S_SETTING_PERMISSIONS_) {
            // line 305
            echo "
\t<h1>";
            // line 306
            echo $this->env->getExtension('phpbb')->lang("ACL_SET");
            echo "</h1>

\t<p>";
            // line 308
            echo $this->env->getExtension('phpbb')->lang("ACL_SET_EXPLAIN");
            echo "</p>

\t<br />

\t<fieldset class=\"quick\" style=\"float: ";
            // line 312
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">
\t\t<strong>&raquo; ";
            // line 313
            echo $this->env->getExtension('phpbb')->lang("PERMISSION_TYPE");
            echo "</strong>
\t</fieldset>

\t";
            // line 316
            if (isset($context["S_PERMISSION_DROPDOWN"])) { $_S_PERMISSION_DROPDOWN_ = $context["S_PERMISSION_DROPDOWN"]; } else { $_S_PERMISSION_DROPDOWN_ = null; }
            if ($_S_PERMISSION_DROPDOWN_) {
                // line 317
                echo "\t\t<form id=\"pselect\" method=\"post\" action=\"";
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 319
                if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
                echo $_S_CONTENT_FLOW_BEGIN_;
                echo ";\">
\t\t\t";
                // line 320
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t\t";
                // line 321
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t";
                // line 322
                echo $this->env->getExtension('phpbb')->lang("SELECT_TYPE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <select name=\"type\">";
                if (isset($context["S_PERMISSION_DROPDOWN"])) { $_S_PERMISSION_DROPDOWN_ = $context["S_PERMISSION_DROPDOWN"]; } else { $_S_PERMISSION_DROPDOWN_ = null; }
                echo $_S_PERMISSION_DROPDOWN_;
                echo "</select>

\t\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                // line 324
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" />
\t\t</fieldset>
\t\t</form>
\t";
            }
            // line 328
            echo "
\t<br class=\"responsive-hide\" /><br class=\"responsive-hide\" />

\t<!-- include tooltip file -->
\t<script type=\"text/javascript\" src=\"style/tooltip.js\"></script>
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\twindow.onload = function(){enable_tooltips_select('set-permissions', '";
            // line 335
            echo addslashes($this->env->getExtension('phpbb')->lang("ROLE_DESCRIPTION"));
            echo "', 'role')};
\t// ]]>
\t</script>

\t<form id=\"set-permissions\" method=\"post\" action=\"";
            // line 339
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t";
            // line 341
            if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
            echo $_S_HIDDEN_FIELDS_;
            echo "

\t";
            // line 343
            $location = "permission_mask.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("permission_mask.html", "acp_permissions.html", 343)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 344
            echo "
\t<br class=\"responsive-hide\" /><br class=\"responsive-hide\" />

\t<fieldset class=\"quick\" style=\"float: ";
            // line 347
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">
\t\t<input class=\"button1\" type=\"submit\" name=\"action[apply_all_permissions]\" value=\"";
            // line 348
            echo $this->env->getExtension('phpbb')->lang("APPLY_ALL_PERMISSIONS");
            echo "\" />
\t\t<input class=\"button2\" type=\"button\" name=\"cancel\" value=\"";
            // line 349
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" onclick=\"document.forms['set-permissions'].reset(); init_colours(active_pmask + active_fmask);\" />
\t\t";
            // line 350
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>

\t<br class=\"responsive-hide\" /><br class=\"responsive-hide\" />

\t</form>

";
        }
        // line 358
        echo "
";
        // line 359
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_permissions.html", 359)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_permissions.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  992 => 359,  989 => 358,  977 => 350,  973 => 349,  969 => 348,  964 => 347,  959 => 344,  947 => 343,  941 => 341,  935 => 339,  928 => 335,  919 => 328,  912 => 324,  903 => 322,  898 => 321,  893 => 320,  888 => 319,  881 => 317,  878 => 316,  872 => 313,  867 => 312,  860 => 308,  855 => 306,  852 => 305,  849 => 304,  846 => 303,  842 => 301,  830 => 300,  824 => 297,  818 => 294,  813 => 292,  810 => 291,  807 => 290,  804 => 289,  800 => 287,  790 => 280,  785 => 279,  780 => 278,  773 => 273,  771 => 272,  765 => 271,  763 => 270,  758 => 269,  753 => 267,  746 => 264,  739 => 260,  734 => 259,  729 => 258,  720 => 253,  715 => 251,  708 => 248,  703 => 246,  692 => 238,  687 => 237,  682 => 236,  671 => 231,  664 => 230,  658 => 228,  653 => 226,  646 => 223,  639 => 219,  634 => 218,  629 => 217,  620 => 212,  615 => 210,  608 => 207,  603 => 205,  598 => 202,  592 => 198,  584 => 193,  579 => 192,  574 => 191,  561 => 186,  556 => 184,  549 => 181,  540 => 177,  535 => 176,  530 => 175,  524 => 171,  517 => 170,  512 => 169,  507 => 167,  500 => 164,  495 => 162,  492 => 161,  489 => 160,  482 => 155,  474 => 150,  469 => 149,  464 => 148,  441 => 143,  435 => 140,  431 => 139,  424 => 136,  415 => 132,  410 => 131,  405 => 130,  399 => 126,  392 => 125,  387 => 124,  382 => 122,  375 => 119,  370 => 117,  367 => 116,  364 => 115,  359 => 112,  349 => 105,  344 => 104,  339 => 103,  331 => 99,  322 => 98,  317 => 96,  310 => 93,  307 => 92,  298 => 86,  293 => 85,  288 => 84,  278 => 80,  271 => 79,  265 => 77,  260 => 75,  253 => 72,  250 => 71,  246 => 69,  236 => 62,  231 => 61,  226 => 60,  218 => 56,  209 => 55,  204 => 53,  200 => 52,  193 => 49,  190 => 48,  187 => 47,  178 => 41,  173 => 40,  168 => 39,  163 => 36,  156 => 35,  146 => 34,  137 => 33,  134 => 32,  127 => 31,  123 => 30,  116 => 27,  113 => 26,  104 => 25,  101 => 24,  91 => 22,  88 => 21,  83 => 19,  78 => 17,  75 => 16,  62 => 15,  59 => 14,  56 => 13,  53 => 12,  47 => 9,  42 => 7,  39 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
