<?php

/* acp_ranks.html */
class __TwigTemplate_8fc32d7cb8bd9b7e427339a9aea3adda2a8ae3da8937bd5414edddcc9f0c6d48 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_ranks.html", 1)->display($context);
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

\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\tfunction update_image(newimage)
\t\t{
\t\t\tdocument.getElementById('image').src = (newimage) ? \"";
            // line 13
            if (isset($context["RANKS_PATH"])) { $_RANKS_PATH_ = $context["RANKS_PATH"]; } else { $_RANKS_PATH_ = null; }
            echo $_RANKS_PATH_;
            echo "/\" + encodeURI(newimage) : \"./images/spacer.gif\";
\t\t}

\t// ]]>
\t</script>

\t<h1>";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("ACP_MANAGE_RANKS");
            echo "</h1>

\t<p>";
            // line 21
            echo $this->env->getExtension('phpbb')->lang("ACP_RANKS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_ranks\" method=\"post\" action=\"";
            // line 23
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">
\t
\t<fieldset>
\t\t<legend>";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("ACP_RANKS");
            echo "</legend>

\t";
            // line 28
            if (isset($context["acp_ranks_edit_before"])) { $_acp_ranks_edit_before_ = $context["acp_ranks_edit_before"]; } else { $_acp_ranks_edit_before_ = null; }
            // line 29
            echo "
\t<dl>
\t\t<dt><label for=\"title\">";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("RANK_TITLE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"title\" type=\"text\" id=\"title\" value=\"";
            // line 32
            if (isset($context["RANK_TITLE"])) { $_RANK_TITLE_ = $context["RANK_TITLE"]; } else { $_RANK_TITLE_ = null; }
            echo $_RANK_TITLE_;
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"rank_image\">";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("RANK_IMAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"rank_image\" id=\"rank_image\" onchange=\"update_image(this.options[selectedIndex].value);\">";
            // line 36
            if (isset($context["S_FILENAME_LIST"])) { $_S_FILENAME_LIST_ = $context["S_FILENAME_LIST"]; } else { $_S_FILENAME_LIST_ = null; }
            echo $_S_FILENAME_LIST_;
            echo "</select></dd>
\t\t<dd><img src=\"";
            // line 37
            if (isset($context["RANK_IMAGE"])) { $_RANK_IMAGE_ = $context["RANK_IMAGE"]; } else { $_RANK_IMAGE_ = null; }
            echo $_RANK_IMAGE_;
            echo "\" id=\"image\" alt=\"\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"special_rank\">";
            // line 40
            echo $this->env->getExtension('phpbb')->lang("RANK_SPECIAL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input onclick=\"phpbb.toggleDisplay('posts', -1)\" type=\"radio\" class=\"radio\" name=\"special_rank\" value=\"1\" id=\"special_rank\"";
            // line 41
            if (isset($context["S_SPECIAL_RANK"])) { $_S_SPECIAL_RANK_ = $context["S_SPECIAL_RANK"]; } else { $_S_SPECIAL_RANK_ = null; }
            if ($_S_SPECIAL_RANK_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input onclick=\"phpbb.toggleDisplay('posts', 1)\" type=\"radio\" class=\"radio\" name=\"special_rank\" value=\"0\"";
            // line 42
            if (isset($context["S_SPECIAL_RANK"])) { $_S_SPECIAL_RANK_ = $context["S_SPECIAL_RANK"]; } else { $_S_SPECIAL_RANK_ = null; }
            if ( !$_S_SPECIAL_RANK_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<div id=\"posts\"";
            // line 44
            if (isset($context["S_SPECIAL_RANK"])) { $_S_SPECIAL_RANK_ = $context["S_SPECIAL_RANK"]; } else { $_S_SPECIAL_RANK_ = null; }
            if ($_S_SPECIAL_RANK_) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t<dl>
\t\t<dt><label for=\"min_posts\">";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("RANK_MINIMUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"min_posts\" type=\"number\" id=\"min_posts\" maxlength=\"10\" value=\"";
            // line 47
            if (isset($context["MIN_POSTS"])) { $_MIN_POSTS_ = $context["MIN_POSTS"]; } else { $_MIN_POSTS_ = null; }
            echo $_MIN_POSTS_;
            echo "\" /></dd>
\t</dl>
\t</div>

\t";
            // line 51
            if (isset($context["acp_ranks_edit_after"])) { $_acp_ranks_edit_after_ = $context["acp_ranks_edit_after"]; } else { $_acp_ranks_edit_after_ = null; }
            // line 52
            echo "
\t<p class=\"submit-buttons\">
\t\t<input type=\"hidden\" name=\"action\" value=\"save\" />

\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 56
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 57
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 58
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</p>
\t</fieldset>
\t</form>

";
        } else {
            // line 64
            echo "
\t<h1>";
            // line 65
            echo $this->env->getExtension('phpbb')->lang("ACP_MANAGE_RANKS");
            echo "</h1>

\t<p>";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("ACP_RANKS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_ranks\" method=\"post\" action=\"";
            // line 69
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">
\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("ACP_MANAGE_RANKS");
            echo "</legend>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t";
            // line 76
            if (isset($context["acp_ranks_list_header_before"])) { $_acp_ranks_list_header_before_ = $context["acp_ranks_list_header_before"]; } else { $_acp_ranks_list_header_before_ = null; }
            // line 77
            echo "\t\t<th>";
            echo $this->env->getExtension('phpbb')->lang("RANK_IMAGE");
            echo "</th>
\t\t<th>";
            // line 78
            echo $this->env->getExtension('phpbb')->lang("RANK_TITLE");
            echo "</th>
\t\t<th>";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("RANK_MINIMUM");
            echo "</th>
\t\t";
            // line 80
            if (isset($context["acp_ranks_list_header_after"])) { $_acp_ranks_list_header_after_ = $context["acp_ranks_list_header_after"]; } else { $_acp_ranks_list_header_after_ = null; }
            // line 81
            echo "\t\t<th>";
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 85
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "ranks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ranks"]) {
                // line 86
                echo "\t<tr>
\t\t";
                // line 87
                if (isset($context["acp_ranks_list_column_before"])) { $_acp_ranks_list_column_before_ = $context["acp_ranks_list_column_before"]; } else { $_acp_ranks_list_column_before_ = null; }
                // line 88
                echo "\t\t<td style=\"text-align: center;\">";
                if (isset($context["ranks"])) { $_ranks_ = $context["ranks"]; } else { $_ranks_ = null; }
                if ($this->getAttribute($_ranks_, "S_RANK_IMAGE", array())) {
                    echo "<img src=\"";
                    if (isset($context["ranks"])) { $_ranks_ = $context["ranks"]; } else { $_ranks_ = null; }
                    echo $this->getAttribute($_ranks_, "RANK_IMAGE", array());
                    echo "\" alt=\"";
                    if (isset($context["ranks"])) { $_ranks_ = $context["ranks"]; } else { $_ranks_ = null; }
                    echo $this->getAttribute($_ranks_, "RANK_TITLE", array());
                    echo "\" title=\"";
                    if (isset($context["ranks"])) { $_ranks_ = $context["ranks"]; } else { $_ranks_ = null; }
                    echo $this->getAttribute($_ranks_, "RANK_TITLE", array());
                    echo "\" />";
                } else {
                    echo "&nbsp; - &nbsp;";
                }
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 89
                if (isset($context["ranks"])) { $_ranks_ = $context["ranks"]; } else { $_ranks_ = null; }
                echo $this->getAttribute($_ranks_, "RANK_TITLE", array());
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 90
                if (isset($context["ranks"])) { $_ranks_ = $context["ranks"]; } else { $_ranks_ = null; }
                if ($this->getAttribute($_ranks_, "S_SPECIAL_RANK", array())) {
                    echo "&nbsp; - &nbsp;";
                } else {
                    if (isset($context["ranks"])) { $_ranks_ = $context["ranks"]; } else { $_ranks_ = null; }
                    echo $this->getAttribute($_ranks_, "MIN_POSTS", array());
                }
                echo "</td>
\t\t";
                // line 91
                if (isset($context["acp_ranks_list_column_after"])) { $_acp_ranks_list_column_after_ = $context["acp_ranks_list_column_after"]; } else { $_acp_ranks_list_column_after_ = null; }
                // line 92
                echo "\t\t<td style=\"text-align: center;\"><a href=\"";
                if (isset($context["ranks"])) { $_ranks_ = $context["ranks"]; } else { $_ranks_ = null; }
                echo $this->getAttribute($_ranks_, "U_EDIT", array());
                echo "\">";
                if (isset($context["ICON_EDIT"])) { $_ICON_EDIT_ = $context["ICON_EDIT"]; } else { $_ICON_EDIT_ = null; }
                echo $_ICON_EDIT_;
                echo "</a> <a href=\"";
                if (isset($context["ranks"])) { $_ranks_ = $context["ranks"]; } else { $_ranks_ = null; }
                echo $this->getAttribute($_ranks_, "U_DELETE", array());
                echo "\" data-ajax=\"row_delete\">";
                if (isset($context["ICON_DELETE"])) { $_ICON_DELETE_ = $context["ICON_DELETE"]; } else { $_ICON_DELETE_ = null; }
                echo $_ICON_DELETE_;
                echo "</a></td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ranks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t</tbody>
\t</table>

\t<p class=\"quick\">
\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
            // line 99
            echo $this->env->getExtension('phpbb')->lang("ADD_RANK");
            echo "\" />
\t\t";
            // line 100
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</p>
\t</fieldset>
\t</form>

";
        }
        // line 106
        echo "
";
        // line 107
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_ranks.html", 107)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ranks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 107,  333 => 106,  323 => 100,  319 => 99,  313 => 95,  293 => 92,  291 => 91,  281 => 90,  276 => 89,  257 => 88,  255 => 87,  252 => 86,  247 => 85,  239 => 81,  237 => 80,  233 => 79,  229 => 78,  224 => 77,  222 => 76,  214 => 71,  208 => 69,  203 => 67,  198 => 65,  195 => 64,  185 => 58,  181 => 57,  177 => 56,  171 => 52,  169 => 51,  161 => 47,  156 => 46,  148 => 44,  138 => 42,  129 => 41,  124 => 40,  117 => 37,  112 => 36,  107 => 35,  100 => 32,  95 => 31,  91 => 29,  89 => 28,  84 => 26,  77 => 23,  72 => 21,  67 => 19,  57 => 13,  42 => 7,  39 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
