<?php

/* acp_groups_position.html */
class __TwigTemplate_546fb1253299ddf37356be206a5e50fb9f6e0c57c3b913bda6f86190bc1346e1 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_groups_position.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

\t<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("MANAGE_LEGEND");
        echo "</h1>

\t<form id=\"legend_settings\" method=\"post\" action=\"";
        // line 7
        if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
        echo $_U_ACTION_;
        echo "\"";
        if (isset($context["S_CAN_UPLOAD"])) { $_S_CAN_UPLOAD_ = $context["S_CAN_UPLOAD"]; } else { $_S_CAN_UPLOAD_ = null; }
        if ($_S_CAN_UPLOAD_) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">

\t<fieldset>
\t\t<legend>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("LEGEND_SETTINGS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"legend_sort_groupname\">";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("LEGEND_SORT_GROUPNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LEGEND_SORT_GROUPNAME_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" name=\"legend_sort_groupname\" class=\"radio\" value=\"1\"";
        // line 14
        if (isset($context["LEGEND_SORT_GROUPNAME"])) { $_LEGEND_SORT_GROUPNAME_ = $context["LEGEND_SORT_GROUPNAME"]; } else { $_LEGEND_SORT_GROUPNAME_ = null; }
        if ($_LEGEND_SORT_GROUPNAME_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"legend_sort_groupname\" class=\"radio\" value=\"0\"";
        // line 15
        if (isset($context["LEGEND_SORT_GROUPNAME"])) { $_LEGEND_SORT_GROUPNAME_ = $context["LEGEND_SORT_GROUPNAME"]; } else { $_LEGEND_SORT_GROUPNAME_ = null; }
        if ( !$_LEGEND_SORT_GROUPNAME_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" name=\"reset\" value=\"";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t\t<input type=\"hidden\" name=\"action\" value=\"set_config_legend\" />
\t\t";
        // line 23
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
\t</p>
\t</fieldset>
\t</form>

\t<p>";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("LEGEND_EXPLAIN");
        echo "</p>

\t<table class=\"table1\">
\t\t<col class=\"col1\" /><col class=\"col2\" /><col class=\"col2\" />
\t<thead>
\t<tr>
\t\t<th style=\"width: 50%\">";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("GROUP");
        echo "</th>
\t\t<th>";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("GROUP_TYPE");
        echo "</th>
\t\t<th>";
        // line 36
        echo $this->env->getExtension('phpbb')->lang("ACTION");
        echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 40
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "legend", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["legend"]) {
            // line 41
            echo "\t\t<tr>
\t\t\t<td><strong";
            // line 42
            if (isset($context["legend"])) { $_legend_ = $context["legend"]; } else { $_legend_ = null; }
            if ($this->getAttribute($_legend_, "GROUP_COLOUR", array())) {
                echo " style=\"color: ";
                if (isset($context["legend"])) { $_legend_ = $context["legend"]; } else { $_legend_ = null; }
                echo $this->getAttribute($_legend_, "GROUP_COLOUR", array());
                echo "\"";
            }
            echo ">";
            if (isset($context["legend"])) { $_legend_ = $context["legend"]; } else { $_legend_ = null; }
            echo $this->getAttribute($_legend_, "GROUP_NAME", array());
            echo "</strong></td>
\t\t\t<td style=\"text-align: center;\">";
            // line 43
            if (isset($context["legend"])) { $_legend_ = $context["legend"]; } else { $_legend_ = null; }
            echo $this->getAttribute($_legend_, "GROUP_TYPE", array());
            echo "</td>
\t\t\t<td class=\"actions\">
\t\t\t\t<span class=\"up-disabled\" style=\"display: none;\">";
            // line 45
            if (isset($context["ICON_MOVE_UP_DISABLED"])) { $_ICON_MOVE_UP_DISABLED_ = $context["ICON_MOVE_UP_DISABLED"]; } else { $_ICON_MOVE_UP_DISABLED_ = null; }
            echo $_ICON_MOVE_UP_DISABLED_;
            echo "</span>
\t\t\t\t<span class=\"up\"><a href=\"";
            // line 46
            if (isset($context["legend"])) { $_legend_ = $context["legend"]; } else { $_legend_ = null; }
            echo $this->getAttribute($_legend_, "U_MOVE_UP", array());
            echo "\" data-ajax=\"row_up\">";
            if (isset($context["ICON_MOVE_UP"])) { $_ICON_MOVE_UP_ = $context["ICON_MOVE_UP"]; } else { $_ICON_MOVE_UP_ = null; }
            echo $_ICON_MOVE_UP_;
            echo "</a></span>
\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
            // line 47
            if (isset($context["ICON_MOVE_DOWN_DISABLED"])) { $_ICON_MOVE_DOWN_DISABLED_ = $context["ICON_MOVE_DOWN_DISABLED"]; } else { $_ICON_MOVE_DOWN_DISABLED_ = null; }
            echo $_ICON_MOVE_DOWN_DISABLED_;
            echo "</span>
\t\t\t\t<span class=\"down\"><a href=\"";
            // line 48
            if (isset($context["legend"])) { $_legend_ = $context["legend"]; } else { $_legend_ = null; }
            echo $this->getAttribute($_legend_, "U_MOVE_DOWN", array());
            echo "\" data-ajax=\"row_down\">";
            if (isset($context["ICON_MOVE_DOWN"])) { $_ICON_MOVE_DOWN_ = $context["ICON_MOVE_DOWN"]; } else { $_ICON_MOVE_DOWN_ = null; }
            echo $_ICON_MOVE_DOWN_;
            echo "</a></span>
\t\t\t\t<a href=\"";
            // line 49
            if (isset($context["legend"])) { $_legend_ = $context["legend"]; } else { $_legend_ = null; }
            echo $this->getAttribute($_legend_, "U_DELETE", array());
            echo "\">";
            if (isset($context["ICON_DELETE"])) { $_ICON_DELETE_ = $context["ICON_DELETE"]; } else { $_ICON_DELETE_ = null; }
            echo $_ICON_DELETE_;
            echo "</a>
\t\t\t</td>
\t\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "\t\t<tr>
\t\t\t<td colspan=\"3\" class=\"row3\">";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("NO_GROUPS_ADDED");
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['legend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t</tbody>
\t</table>

\t<form id=\"legend_add_group\" method=\"post\" action=\"";
        // line 60
        if (isset($context["U_ACTION_LEGEND"])) { $_U_ACTION_LEGEND_ = $context["U_ACTION_LEGEND"]; } else { $_U_ACTION_LEGEND_ = null; }
        echo $_U_ACTION_LEGEND_;
        echo "\">
\t\t<fieldset class=\"quick\">
\t\t\t<select name=\"g\">
\t\t\t\t<option value=\"0\">";
        // line 63
        echo $this->env->getExtension('phpbb')->lang("SELECT_GROUP");
        echo "</option>
\t\t\t\t";
        // line 64
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "add_legend", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["add_legend"]) {
            // line 65
            echo "\t\t\t\t\t<option";
            if (isset($context["add_legend"])) { $_add_legend_ = $context["add_legend"]; } else { $_add_legend_ = null; }
            if ($this->getAttribute($_add_legend_, "GROUP_SPECIAL", array())) {
                echo " class=\"sep\"";
            }
            echo " value=\"";
            if (isset($context["add_legend"])) { $_add_legend_ = $context["add_legend"]; } else { $_add_legend_ = null; }
            echo $this->getAttribute($_add_legend_, "GROUP_ID", array());
            echo "\">";
            if (isset($context["add_legend"])) { $_add_legend_ = $context["add_legend"]; } else { $_add_legend_ = null; }
            echo $this->getAttribute($_add_legend_, "GROUP_NAME", array());
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_legend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t</select>
\t\t\t";
        // line 68
        if (isset($context["acp_groups_position_legend_add_button_before"])) { $_acp_groups_position_legend_add_button_before_ = $context["acp_groups_position_legend_add_button_before"]; } else { $_acp_groups_position_legend_add_button_before_ = null; }
        // line 69
        echo "\t\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("ADD");
        echo "\" />
\t\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />
\t\t\t";
        // line 71
        if (isset($context["acp_groups_position_legend_add_button_after"])) { $_acp_groups_position_legend_add_button_after_ = $context["acp_groups_position_legend_add_button_after"]; } else { $_acp_groups_position_legend_add_button_after_ = null; }
        // line 72
        echo "\t\t\t";
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
\t\t</fieldset>
\t</form>

\t<h1>";
        // line 76
        echo $this->env->getExtension('phpbb')->lang("MANAGE_TEAMPAGE");
        echo "</h1>

\t<form id=\"teampage_settings\" method=\"post\" action=\"";
        // line 78
        if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
        echo $_U_ACTION_;
        echo "\"";
        if (isset($context["S_CAN_UPLOAD"])) { $_S_CAN_UPLOAD_ = $context["S_CAN_UPLOAD"]; } else { $_S_CAN_UPLOAD_ = null; }
        if ($_S_CAN_UPLOAD_) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">

\t<fieldset>
\t\t<legend>";
        // line 81
        echo $this->env->getExtension('phpbb')->lang("TEAMPAGE_SETTINGS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"teampage_memberships\">";
        // line 83
        echo $this->env->getExtension('phpbb')->lang("TEAMPAGE_MEMBERSHIPS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" name=\"teampage_memberships\" class=\"radio\" value=\"0\"";
        // line 85
        if (isset($context["DISPLAY_MEMBERSHIPS"])) { $_DISPLAY_MEMBERSHIPS_ = $context["DISPLAY_MEMBERSHIPS"]; } else { $_DISPLAY_MEMBERSHIPS_ = null; }
        if (($_DISPLAY_MEMBERSHIPS_ == 0)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("TEAMPAGE_DISP_FIRST");
        echo "</label><br />
\t\t\t\t<label><input type=\"radio\" name=\"teampage_memberships\" class=\"radio\" value=\"1\"";
        // line 86
        if (isset($context["DISPLAY_MEMBERSHIPS"])) { $_DISPLAY_MEMBERSHIPS_ = $context["DISPLAY_MEMBERSHIPS"]; } else { $_DISPLAY_MEMBERSHIPS_ = null; }
        if (($_DISPLAY_MEMBERSHIPS_ == 1)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("TEAMPAGE_DISP_DEFAULT");
        echo "</label><br />
\t\t\t\t<label><input type=\"radio\" name=\"teampage_memberships\" class=\"radio\" value=\"2\"";
        // line 87
        if (isset($context["DISPLAY_MEMBERSHIPS"])) { $_DISPLAY_MEMBERSHIPS_ = $context["DISPLAY_MEMBERSHIPS"]; } else { $_DISPLAY_MEMBERSHIPS_ = null; }
        if (($_DISPLAY_MEMBERSHIPS_ == 2)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("TEAMPAGE_DISP_ALL");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"teampage_forums\">";
        // line 91
        echo $this->env->getExtension('phpbb')->lang("TEAMPAGE_FORUMS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("TEAMPAGE_FORUMS_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" name=\"teampage_forums\" class=\"radio\" value=\"1\"";
        // line 93
        if (isset($context["DISPLAY_FORUMS"])) { $_DISPLAY_FORUMS_ = $context["DISPLAY_FORUMS"]; } else { $_DISPLAY_FORUMS_ = null; }
        if ($_DISPLAY_FORUMS_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"teampage_forums\" class=\"radio\" value=\"0\"";
        // line 94
        if (isset($context["DISPLAY_FORUMS"])) { $_DISPLAY_FORUMS_ = $context["DISPLAY_FORUMS"]; } else { $_DISPLAY_FORUMS_ = null; }
        if ( !$_DISPLAY_FORUMS_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
        // line 99
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" name=\"reset\" value=\"";
        // line 100
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t\t<input type=\"hidden\" name=\"action\" value=\"set_config_teampage\" />
\t\t";
        // line 102
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
\t</p>
\t</fieldset>
\t</form>

\t<p>";
        // line 107
        echo $this->env->getExtension('phpbb')->lang("TEAMPAGE_EXPLAIN");
        echo "</p>

\t";
        // line 109
        if (isset($context["S_TEAMPAGE_CATEGORY"])) { $_S_TEAMPAGE_CATEGORY_ = $context["S_TEAMPAGE_CATEGORY"]; } else { $_S_TEAMPAGE_CATEGORY_ = null; }
        if (isset($context["CURRENT_CATEGORY_NAME"])) { $_CURRENT_CATEGORY_NAME_ = $context["CURRENT_CATEGORY_NAME"]; } else { $_CURRENT_CATEGORY_NAME_ = null; }
        if (($_S_TEAMPAGE_CATEGORY_ && $_CURRENT_CATEGORY_NAME_)) {
            echo "<p><strong><a href=\"";
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("TEAMPAGE");
            echo "</a> &raquo; ";
            if (isset($context["CURRENT_CATEGORY_NAME"])) { $_CURRENT_CATEGORY_NAME_ = $context["CURRENT_CATEGORY_NAME"]; } else { $_CURRENT_CATEGORY_NAME_ = null; }
            echo $_CURRENT_CATEGORY_NAME_;
            echo "</strong></p>";
        }
        // line 110
        echo "
\t<table class=\"table1\">
\t\t<col class=\"col1\" /><col class=\"col2\" /><col class=\"col2\" />
\t<thead>
\t<tr>
\t\t<th style=\"width: 50%\">";
        // line 115
        echo $this->env->getExtension('phpbb')->lang("GROUP");
        echo "</th>
\t\t<th>";
        // line 116
        echo $this->env->getExtension('phpbb')->lang("GROUP_TYPE");
        echo "</th>
\t\t<th>";
        // line 117
        echo $this->env->getExtension('phpbb')->lang("ACTION");
        echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 121
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "teampage", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["teampage"]) {
            // line 122
            echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t";
            // line 124
            if (isset($context["teampage"])) { $_teampage_ = $context["teampage"]; } else { $_teampage_ = null; }
            if ($this->getAttribute($_teampage_, "U_CATEGORY", array())) {
                // line 125
                echo "\t\t\t\t\t<a href=\"";
                if (isset($context["teampage"])) { $_teampage_ = $context["teampage"]; } else { $_teampage_ = null; }
                echo $this->getAttribute($_teampage_, "U_CATEGORY", array());
                echo "\">";
                if (isset($context["teampage"])) { $_teampage_ = $context["teampage"]; } else { $_teampage_ = null; }
                echo $this->getAttribute($_teampage_, "GROUP_NAME", array());
                echo "</a>
\t\t\t\t";
            } else {
                // line 127
                echo "\t\t\t\t\t<strong";
                if (isset($context["teampage"])) { $_teampage_ = $context["teampage"]; } else { $_teampage_ = null; }
                if ($this->getAttribute($_teampage_, "GROUP_COLOUR", array())) {
                    echo " style=\"color: ";
                    if (isset($context["teampage"])) { $_teampage_ = $context["teampage"]; } else { $_teampage_ = null; }
                    echo $this->getAttribute($_teampage_, "GROUP_COLOUR", array());
                    echo "\"";
                }
                echo ">";
                if (isset($context["teampage"])) { $_teampage_ = $context["teampage"]; } else { $_teampage_ = null; }
                echo $this->getAttribute($_teampage_, "GROUP_NAME", array());
                echo "</strong>
\t\t\t\t";
            }
            // line 129
            echo "\t\t\t</td>
\t\t\t<td style=\"text-align: center;\">";
            // line 130
            if (isset($context["teampage"])) { $_teampage_ = $context["teampage"]; } else { $_teampage_ = null; }
            if ($this->getAttribute($_teampage_, "GROUP_TYPE", array())) {
                if (isset($context["teampage"])) { $_teampage_ = $context["teampage"]; } else { $_teampage_ = null; }
                echo $this->getAttribute($_teampage_, "GROUP_TYPE", array());
            } else {
                echo "-";
            }
            // line 131
            echo "\t\t\t</td></td>
\t\t\t<td class=\"actions\">
\t\t\t\t<span class=\"up-disabled\" style=\"display: none;\">";
            // line 133
            if (isset($context["ICON_MOVE_UP_DISABLED"])) { $_ICON_MOVE_UP_DISABLED_ = $context["ICON_MOVE_UP_DISABLED"]; } else { $_ICON_MOVE_UP_DISABLED_ = null; }
            echo $_ICON_MOVE_UP_DISABLED_;
            echo "</span>
\t\t\t\t<span class=\"up\"><a href=\"";
            // line 134
            if (isset($context["teampage"])) { $_teampage_ = $context["teampage"]; } else { $_teampage_ = null; }
            echo $this->getAttribute($_teampage_, "U_MOVE_UP", array());
            echo "\" data-ajax=\"row_up\">";
            if (isset($context["ICON_MOVE_UP"])) { $_ICON_MOVE_UP_ = $context["ICON_MOVE_UP"]; } else { $_ICON_MOVE_UP_ = null; }
            echo $_ICON_MOVE_UP_;
            echo "</a></span>
\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
            // line 135
            if (isset($context["ICON_MOVE_DOWN_DISABLED"])) { $_ICON_MOVE_DOWN_DISABLED_ = $context["ICON_MOVE_DOWN_DISABLED"]; } else { $_ICON_MOVE_DOWN_DISABLED_ = null; }
            echo $_ICON_MOVE_DOWN_DISABLED_;
            echo "</span>
\t\t\t\t<span class=\"down\"><a href=\"";
            // line 136
            if (isset($context["teampage"])) { $_teampage_ = $context["teampage"]; } else { $_teampage_ = null; }
            echo $this->getAttribute($_teampage_, "U_MOVE_DOWN", array());
            echo "\" data-ajax=\"row_down\">";
            if (isset($context["ICON_MOVE_DOWN"])) { $_ICON_MOVE_DOWN_ = $context["ICON_MOVE_DOWN"]; } else { $_ICON_MOVE_DOWN_ = null; }
            echo $_ICON_MOVE_DOWN_;
            echo "</a></span>
\t\t\t\t<a href=\"";
            // line 137
            if (isset($context["teampage"])) { $_teampage_ = $context["teampage"]; } else { $_teampage_ = null; }
            echo $this->getAttribute($_teampage_, "U_DELETE", array());
            echo "\">";
            if (isset($context["ICON_DELETE"])) { $_ICON_DELETE_ = $context["ICON_DELETE"]; } else { $_ICON_DELETE_ = null; }
            echo $_ICON_DELETE_;
            echo "</a>
\t\t\t</td>
\t\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 141
            echo "\t\t<tr>
\t\t\t<td colspan=\"3\" class=\"row3\">";
            // line 142
            echo $this->env->getExtension('phpbb')->lang("NO_GROUPS_ADDED");
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teampage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "\t</tbody>
\t</table>

\t";
        // line 148
        if (isset($context["S_TEAMPAGE_CATEGORY"])) { $_S_TEAMPAGE_CATEGORY_ = $context["S_TEAMPAGE_CATEGORY"]; } else { $_S_TEAMPAGE_CATEGORY_ = null; }
        if ( !$_S_TEAMPAGE_CATEGORY_) {
            // line 149
            echo "\t<form id=\"teampage_add_category\" method=\"post\" action=\"";
            if (isset($context["U_ACTION_TEAMPAGE"])) { $_U_ACTION_TEAMPAGE_ = $context["U_ACTION_TEAMPAGE"]; } else { $_U_ACTION_TEAMPAGE_ = null; }
            echo $_U_ACTION_TEAMPAGE_;
            echo "\">
\t\t<fieldset class=\"quick\">
\t\t\t<input class=\"inputbox autowidth\" type=\"text\" maxlength=\"255\" name=\"category_name\" placeholder=\"";
            // line 151
            echo $this->env->getExtension('phpbb')->lang("GROUP_CATEGORY_NAME");
            echo "\" />
\t\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
            // line 152
            echo $this->env->getExtension('phpbb')->lang("ADD_GROUP_CATEGORY");
            echo "\" />
\t\t\t<input type=\"hidden\" name=\"action\" value=\"add_category\" />
\t\t\t";
            // line 154
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t\t</fieldset>
\t</form>
\t";
        }
        // line 158
        echo "
\t<form id=\"teampage_add_group\" method=\"post\" action=\"";
        // line 159
        if (isset($context["U_ACTION_TEAMPAGE"])) { $_U_ACTION_TEAMPAGE_ = $context["U_ACTION_TEAMPAGE"]; } else { $_U_ACTION_TEAMPAGE_ = null; }
        echo $_U_ACTION_TEAMPAGE_;
        echo "\">
\t\t<fieldset class=\"quick\">
\t\t\t<select name=\"g\">
\t\t\t\t<option value=\"0\">";
        // line 162
        echo $this->env->getExtension('phpbb')->lang("SELECT_GROUP");
        echo "</option>
\t\t\t\t";
        // line 163
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "add_teampage", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["add_teampage"]) {
            // line 164
            echo "\t\t\t\t\t<option";
            if (isset($context["add_teampage"])) { $_add_teampage_ = $context["add_teampage"]; } else { $_add_teampage_ = null; }
            if ($this->getAttribute($_add_teampage_, "GROUP_SPECIAL", array())) {
                echo " class=\"sep\"";
            }
            echo " value=\"";
            if (isset($context["add_teampage"])) { $_add_teampage_ = $context["add_teampage"]; } else { $_add_teampage_ = null; }
            echo $this->getAttribute($_add_teampage_, "GROUP_ID", array());
            echo "\">";
            if (isset($context["add_teampage"])) { $_add_teampage_ = $context["add_teampage"]; } else { $_add_teampage_ = null; }
            echo $this->getAttribute($_add_teampage_, "GROUP_NAME", array());
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_teampage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "\t\t\t</select>
\t\t\t";
        // line 167
        if (isset($context["acp_groups_position_teampage_add_button_before"])) { $_acp_groups_position_teampage_add_button_before_ = $context["acp_groups_position_teampage_add_button_before"]; } else { $_acp_groups_position_teampage_add_button_before_ = null; }
        // line 168
        echo "\t\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("ADD");
        echo "\" />
\t\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />
\t\t\t";
        // line 170
        if (isset($context["acp_groups_position_teampage_add_button_after"])) { $_acp_groups_position_teampage_add_button_after_ = $context["acp_groups_position_teampage_add_button_after"]; } else { $_acp_groups_position_teampage_add_button_after_ = null; }
        // line 171
        echo "\t\t\t";
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
\t\t</fieldset>
\t</form>

";
        // line 175
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_groups_position.html", 175)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_groups_position.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 175,  603 => 171,  601 => 170,  595 => 168,  593 => 167,  590 => 166,  572 => 164,  567 => 163,  563 => 162,  556 => 159,  553 => 158,  545 => 154,  540 => 152,  536 => 151,  529 => 149,  526 => 148,  521 => 145,  512 => 142,  509 => 141,  496 => 137,  488 => 136,  483 => 135,  475 => 134,  470 => 133,  466 => 131,  458 => 130,  455 => 129,  440 => 127,  430 => 125,  427 => 124,  423 => 122,  417 => 121,  410 => 117,  406 => 116,  402 => 115,  395 => 110,  381 => 109,  376 => 107,  367 => 102,  362 => 100,  358 => 99,  345 => 94,  336 => 93,  328 => 91,  316 => 87,  307 => 86,  298 => 85,  292 => 83,  287 => 81,  275 => 78,  270 => 76,  261 => 72,  259 => 71,  253 => 69,  251 => 68,  248 => 67,  230 => 65,  225 => 64,  221 => 63,  214 => 60,  209 => 57,  200 => 54,  197 => 53,  184 => 49,  176 => 48,  171 => 47,  163 => 46,  158 => 45,  152 => 43,  139 => 42,  136 => 41,  130 => 40,  123 => 36,  119 => 35,  115 => 34,  106 => 28,  97 => 23,  92 => 21,  88 => 20,  75 => 15,  66 => 14,  58 => 12,  53 => 10,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
