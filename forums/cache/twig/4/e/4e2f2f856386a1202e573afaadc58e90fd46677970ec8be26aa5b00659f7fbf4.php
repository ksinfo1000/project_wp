<?php

/* acp_posting_buttons.html */
class __TwigTemplate_4e2f2f856386a1202e573afaadc58e90fd46677970ec8be26aa5b00659f7fbf4 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
// <![CDATA[

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 6
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
            echo $this->getAttribute($_custom_tags_, "BBCODE_NAME", array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");

\t// Helpline messages
\tvar help_line = {
\t\tb: '";
        // line 10
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_B_HELP"));
        echo "',
\t\ti: '";
        // line 11
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_I_HELP"));
        echo "',
\t\tu: '";
        // line 12
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_U_HELP"));
        echo "',
\t\tq: '";
        // line 13
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP"));
        echo "',
\t\tc: '";
        // line 14
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_C_HELP"));
        echo "',
\t\tl: '";
        // line 15
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_L_HELP"));
        echo "',
\t\to: '";
        // line 16
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_O_HELP"));
        echo "',
\t\tp: '";
        // line 17
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_P_HELP"));
        echo "',
\t\tw: '";
        // line 18
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_W_HELP"));
        echo "',
\t\ta: '";
        // line 19
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_A_HELP"));
        echo "',
\t\ts: '";
        // line 20
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_S_HELP"));
        echo "',
\t\tf: '";
        // line 21
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_F_HELP"));
        echo "',
\t\ty: '";
        // line 22
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_Y_HELP"));
        echo "',
\t\td: '";
        // line 23
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_D_HELP"));
        echo "'
\t\t";
        // line 24
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 25
            echo "\t\t\t,cb_";
            if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
            echo $this->getAttribute($_custom_tags_, "BBCODE_ID", array());
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " '";
            if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
            echo $this->getAttribute($_custom_tags_, "A_BBCODE_HELPLINE", array());
            echo "'
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t}

// ]]>
</script>

";
        // line 32
        if (isset($context["T_ASSETS_PATH"])) { $_T_ASSETS_PATH_ = $context["T_ASSETS_PATH"]; } else { $_T_ASSETS_PATH_ = null; }
        $asset_file = (("" . $_T_ASSETS_PATH_) . "/javascript/editor.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 33
        echo "
";
        // line 34
        if (isset($context["acp_posting_buttons_before"])) { $_acp_posting_buttons_before_ = $context["acp_posting_buttons_before"]; } else { $_acp_posting_buttons_before_ = null; }
        // line 35
        echo "<div id=\"format-buttons\">
\t<input type=\"button\" class=\"button2\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" style=\"font-weight:bold; width: 30px\" onclick=\"bbstyle(0)\" title=\"";
        // line 36
        echo $this->env->getExtension('phpbb')->lang("BBCODE_B_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"i\" name=\"addbbcode2\" value=\" i \" style=\"font-style:italic; width: 30px\" onclick=\"bbstyle(2)\" title=\"";
        // line 37
        echo $this->env->getExtension('phpbb')->lang("BBCODE_I_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"u\" name=\"addbbcode4\" value=\" u \" style=\"text-decoration: underline; width: 30px\" onclick=\"bbstyle(4)\" title=\"";
        // line 38
        echo $this->env->getExtension('phpbb')->lang("BBCODE_U_HELP");
        echo "\" />
\t";
        // line 39
        if (isset($context["S_BBCODE_QUOTE"])) { $_S_BBCODE_QUOTE_ = $context["S_BBCODE_QUOTE"]; } else { $_S_BBCODE_QUOTE_ = null; }
        if ($_S_BBCODE_QUOTE_) {
            // line 40
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" style=\"width: 50px\" onclick=\"bbstyle(6)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP");
            echo "\" />
\t";
        }
        // line 42
        echo "\t<input type=\"button\" class=\"button2\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" style=\"width: 40px\" onclick=\"bbstyle(8)\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("BBCODE_C_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" style=\"width: 40px\" onclick=\"bbstyle(10)\" title=\"";
        // line 43
        echo $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"o\" name=\"addbbcode12\" value=\"List=\" style=\"width: 40px\" onclick=\"bbstyle(12)\" title=\"";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("BBCODE_O_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"y\" name=\"addlistitem\" value=\"[*]\" style=\"width: 40px\" onclick=\"bbstyle(-1)\" title=\"";
        // line 45
        echo $this->env->getExtension('phpbb')->lang("BBCODE_LISTITEM_HELP");
        echo "\" />
\t";
        // line 46
        if (isset($context["S_BBCODE_IMG"])) { $_S_BBCODE_IMG_ = $context["S_BBCODE_IMG"]; } else { $_S_BBCODE_IMG_ = null; }
        if ($_S_BBCODE_IMG_) {
            // line 47
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"p\" name=\"addbbcode14\" value=\"Img\" style=\"width: 40px\" onclick=\"bbstyle(14)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_P_HELP");
            echo "\" />
\t";
        }
        // line 49
        echo "\t";
        if (isset($context["S_LINKS_ALLOWED"])) { $_S_LINKS_ALLOWED_ = $context["S_LINKS_ALLOWED"]; } else { $_S_LINKS_ALLOWED_ = null; }
        if ($_S_LINKS_ALLOWED_) {
            // line 50
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" style=\"text-decoration: underline; width: 40px\" onclick=\"bbstyle(16)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_W_HELP");
            echo "\" />
\t";
        }
        // line 52
        echo "\t";
        if (isset($context["S_BBCODE_FLASH"])) { $_S_BBCODE_FLASH_ = $context["S_BBCODE_FLASH"]; } else { $_S_BBCODE_FLASH_ = null; }
        if ($_S_BBCODE_FLASH_) {
            // line 53
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"d\" name=\"addbbcode18\" value=\"Flash\" onclick=\"bbstyle(18)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_D_HELP");
            echo "\" />
\t";
        }
        // line 55
        echo "\t<select name=\"addbbcode20\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("BBCODE_F_HELP");
        echo "\">
\t\t<option value=\"50\">";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("FONT_TINY");
        echo "</option>
\t\t<option value=\"85\">";
        // line 57
        echo $this->env->getExtension('phpbb')->lang("FONT_SMALL");
        echo "</option>
\t\t<option value=\"100\" selected=\"selected\">";
        // line 58
        echo $this->env->getExtension('phpbb')->lang("FONT_NORMAL");
        echo "</option>
\t\t";
        // line 59
        if (isset($context["MAX_FONT_SIZE"])) { $_MAX_FONT_SIZE_ = $context["MAX_FONT_SIZE"]; } else { $_MAX_FONT_SIZE_ = null; }
        if (( !$_MAX_FONT_SIZE_ || ($_MAX_FONT_SIZE_ >= 150))) {
            // line 60
            echo "\t\t<option value=\"150\">";
            echo $this->env->getExtension('phpbb')->lang("FONT_LARGE");
            echo "</option>
\t\t";
            // line 61
            if (isset($context["MAX_FONT_SIZE"])) { $_MAX_FONT_SIZE_ = $context["MAX_FONT_SIZE"]; } else { $_MAX_FONT_SIZE_ = null; }
            if (( !$_MAX_FONT_SIZE_ || ($_MAX_FONT_SIZE_ >= 200))) {
                // line 62
                echo "\t\t<option value=\"200\">";
                echo $this->env->getExtension('phpbb')->lang("FONT_HUGE");
                echo "</option>
\t\t";
            }
            // line 64
            echo "\t\t";
        }
        // line 65
        echo "\t</select>
\t";
        // line 66
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 67
            echo "\t<input type=\"button\" class=\"button2\" name=\"addbbcode";
            if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
            echo $this->getAttribute($_custom_tags_, "BBCODE_ID", array());
            echo "\" value=\"";
            if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
            echo $this->getAttribute($_custom_tags_, "BBCODE_TAG", array());
            echo "\" onclick=\"bbstyle(";
            if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
            echo $this->getAttribute($_custom_tags_, "BBCODE_ID", array());
            echo ")\" title=\"";
            if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
            echo $this->getAttribute($_custom_tags_, "BBCODE_HELPLINE", array());
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</div>
";
        // line 70
        if (isset($context["acp_posting_buttons_after"])) { $_acp_posting_buttons_after_ = $context["acp_posting_buttons_after"]; } else { $_acp_posting_buttons_after_ = null; }
    }

    public function getTemplateName()
    {
        return "acp_posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 70,  280 => 69,  261 => 67,  256 => 66,  253 => 65,  250 => 64,  244 => 62,  241 => 61,  236 => 60,  233 => 59,  229 => 58,  225 => 57,  221 => 56,  216 => 55,  210 => 53,  206 => 52,  200 => 50,  196 => 49,  190 => 47,  187 => 46,  183 => 45,  179 => 44,  175 => 43,  170 => 42,  164 => 40,  161 => 39,  157 => 38,  153 => 37,  149 => 36,  146 => 35,  144 => 34,  141 => 33,  125 => 32,  118 => 27,  104 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  26 => 6,  19 => 1,);
    }
}
