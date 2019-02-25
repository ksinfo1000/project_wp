<?php

/* memberlist_view.html */
class __TwigTemplate_3875744a33a07e1e8d534506c5bfa241fcc91e0a2aa8b386ad9378f2ae829f3f extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "memberlist_view.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"memberlist-title\">";
        // line 3
        if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
        echo $_PAGE_TITLE_;
        echo "</h2>

";
        // line 5
        if (isset($context["memberlist_view_content_prepend"])) { $_memberlist_view_content_prepend_ = $context["memberlist_view_content_prepend"]; } else { $_memberlist_view_content_prepend_ = null; }
        // line 6
        echo "
<form method=\"post\" action=\"";
        // line 7
        if (isset($context["S_PROFILE_ACTION"])) { $_S_PROFILE_ACTION_ = $context["S_PROFILE_ACTION"]; } else { $_S_PROFILE_ACTION_ = null; }
        echo $_S_PROFILE_ACTION_;
        echo "\" id=\"viewprofile\">
<div class=\"panel bg1";
        // line 8
        if (isset($context["S_ONLINE"])) { $_S_ONLINE_ = $context["S_ONLINE"]; } else { $_S_ONLINE_ = null; }
        if ($_S_ONLINE_) {
            echo " online";
        }
        echo "\">
\t<div class=\"inner\">

\t";
        // line 11
        if (isset($context["AVATAR_IMG"])) { $_AVATAR_IMG_ = $context["AVATAR_IMG"]; } else { $_AVATAR_IMG_ = null; }
        if ($_AVATAR_IMG_) {
            // line 12
            echo "\t\t<dl class=\"left-box\">
\t\t\t<dt class=\"profile-avatar\">";
            // line 13
            if (isset($context["AVATAR_IMG"])) { $_AVATAR_IMG_ = $context["AVATAR_IMG"]; } else { $_AVATAR_IMG_ = null; }
            echo $_AVATAR_IMG_;
            echo "</dt>
\t\t\t";
            // line 14
            if (isset($context["memberlist_view_rank_avatar_before"])) { $_memberlist_view_rank_avatar_before_ = $context["memberlist_view_rank_avatar_before"]; } else { $_memberlist_view_rank_avatar_before_ = null; }
            // line 15
            echo "\t\t\t";
            if (isset($context["RANK_TITLE"])) { $_RANK_TITLE_ = $context["RANK_TITLE"]; } else { $_RANK_TITLE_ = null; }
            if ($_RANK_TITLE_) {
                echo "<dd style=\"text-align: center;\">";
                if (isset($context["RANK_TITLE"])) { $_RANK_TITLE_ = $context["RANK_TITLE"]; } else { $_RANK_TITLE_ = null; }
                echo $_RANK_TITLE_;
                echo "</dd>";
            }
            // line 16
            echo "\t\t\t";
            if (isset($context["RANK_IMG"])) { $_RANK_IMG_ = $context["RANK_IMG"]; } else { $_RANK_IMG_ = null; }
            if ($_RANK_IMG_) {
                echo "<dd style=\"text-align: center;\">";
                if (isset($context["RANK_IMG"])) { $_RANK_IMG_ = $context["RANK_IMG"]; } else { $_RANK_IMG_ = null; }
                echo $_RANK_IMG_;
                echo "</dd>";
            }
            // line 17
            echo "\t\t\t";
            if (isset($context["memberlist_view_rank_avatar_after"])) { $_memberlist_view_rank_avatar_after_ = $context["memberlist_view_rank_avatar_after"]; } else { $_memberlist_view_rank_avatar_after_ = null; }
            // line 18
            echo "\t\t</dl>
\t";
        }
        // line 20
        echo "
\t<dl class=\"left-box details profile-details\">
\t\t<dt>";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt>
\t\t<dd>
\t\t\t";
        // line 24
        if (isset($context["USER_COLOR"])) { $_USER_COLOR_ = $context["USER_COLOR"]; } else { $_USER_COLOR_ = null; }
        if ($_USER_COLOR_) {
            echo "<span style=\"color: ";
            if (isset($context["USER_COLOR"])) { $_USER_COLOR_ = $context["USER_COLOR"]; } else { $_USER_COLOR_ = null; }
            echo $_USER_COLOR_;
            echo "; font-weight: bold;\">";
        } else {
            echo "<span>";
        }
        if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
        echo $_USERNAME_;
        echo "</span>
\t\t\t";
        // line 25
        if (isset($context["U_EDIT_SELF"])) { $_U_EDIT_SELF_ = $context["U_EDIT_SELF"]; } else { $_U_EDIT_SELF_ = null; }
        if ($_U_EDIT_SELF_) {
            echo " [ <a href=\"";
            if (isset($context["U_EDIT_SELF"])) { $_U_EDIT_SELF_ = $context["U_EDIT_SELF"]; } else { $_U_EDIT_SELF_ = null; }
            echo $_U_EDIT_SELF_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("EDIT_PROFILE");
            echo "</a> ]";
        }
        // line 26
        echo "\t\t\t";
        if (isset($context["U_USER_ADMIN"])) { $_U_USER_ADMIN_ = $context["U_USER_ADMIN"]; } else { $_U_USER_ADMIN_ = null; }
        if ($_U_USER_ADMIN_) {
            echo " [ <a href=\"";
            if (isset($context["U_USER_ADMIN"])) { $_U_USER_ADMIN_ = $context["U_USER_ADMIN"]; } else { $_U_USER_ADMIN_ = null; }
            echo $_U_USER_ADMIN_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN");
            echo "</a> ]";
        }
        // line 27
        echo "\t\t\t";
        if (isset($context["U_USER_BAN"])) { $_U_USER_BAN_ = $context["U_USER_BAN"]; } else { $_U_USER_BAN_ = null; }
        if ($_U_USER_BAN_) {
            echo " [ <a href=\"";
            if (isset($context["U_USER_BAN"])) { $_U_USER_BAN_ = $context["U_USER_BAN"]; } else { $_U_USER_BAN_ = null; }
            echo $_U_USER_BAN_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USER_BAN");
            echo "</a> ]";
        }
        // line 28
        echo "\t\t\t";
        if (isset($context["U_SWITCH_PERMISSIONS"])) { $_U_SWITCH_PERMISSIONS_ = $context["U_SWITCH_PERMISSIONS"]; } else { $_U_SWITCH_PERMISSIONS_ = null; }
        if ($_U_SWITCH_PERMISSIONS_) {
            echo " [ <a href=\"";
            if (isset($context["U_SWITCH_PERMISSIONS"])) { $_U_SWITCH_PERMISSIONS_ = $context["U_SWITCH_PERMISSIONS"]; } else { $_U_SWITCH_PERMISSIONS_ = null; }
            echo $_U_SWITCH_PERMISSIONS_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USE_PERMISSIONS");
            echo "</a> ]";
        }
        // line 29
        echo "\t\t</dd>
\t\t";
        // line 30
        if (isset($context["AVATAR_IMG"])) { $_AVATAR_IMG_ = $context["AVATAR_IMG"]; } else { $_AVATAR_IMG_ = null; }
        if ( !$_AVATAR_IMG_) {
            // line 31
            echo "\t\t\t";
            if (isset($context["memberlist_view_rank_no_avatar_before"])) { $_memberlist_view_rank_no_avatar_before_ = $context["memberlist_view_rank_no_avatar_before"]; } else { $_memberlist_view_rank_no_avatar_before_ = null; }
            // line 32
            echo "\t\t\t";
            if (isset($context["RANK_TITLE"])) { $_RANK_TITLE_ = $context["RANK_TITLE"]; } else { $_RANK_TITLE_ = null; }
            if ($_RANK_TITLE_) {
                echo "<dt>";
                echo $this->env->getExtension('phpbb')->lang("RANK");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt> <dd>";
                if (isset($context["RANK_TITLE"])) { $_RANK_TITLE_ = $context["RANK_TITLE"]; } else { $_RANK_TITLE_ = null; }
                echo $_RANK_TITLE_;
                echo "</dd>";
            }
            // line 33
            echo "\t\t\t";
            if (isset($context["RANK_IMG"])) { $_RANK_IMG_ = $context["RANK_IMG"]; } else { $_RANK_IMG_ = null; }
            if ($_RANK_IMG_) {
                echo "<dt>";
                if (isset($context["RANK_TITLE"])) { $_RANK_TITLE_ = $context["RANK_TITLE"]; } else { $_RANK_TITLE_ = null; }
                if ($_RANK_TITLE_) {
                    echo "&nbsp;";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("RANK");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                }
                echo "</dt> <dd>";
                if (isset($context["RANK_IMG"])) { $_RANK_IMG_ = $context["RANK_IMG"]; } else { $_RANK_IMG_ = null; }
                echo $_RANK_IMG_;
                echo "</dd>";
            }
            // line 34
            echo "\t\t\t";
            if (isset($context["memberlist_view_rank_no_avatar_after"])) { $_memberlist_view_rank_no_avatar_after_ = $context["memberlist_view_rank_no_avatar_after"]; } else { $_memberlist_view_rank_no_avatar_after_ = null; }
            // line 35
            echo "\t\t";
        }
        // line 36
        echo "\t\t";
        if (isset($context["S_USER_INACTIVE"])) { $_S_USER_INACTIVE_ = $context["S_USER_INACTIVE"]; } else { $_S_USER_INACTIVE_ = null; }
        if ($_S_USER_INACTIVE_) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("USER_IS_INACTIVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (isset($context["USER_INACTIVE_REASON"])) { $_USER_INACTIVE_REASON_ = $context["USER_INACTIVE_REASON"]; } else { $_USER_INACTIVE_REASON_ = null; }
            echo $_USER_INACTIVE_REASON_;
            echo "</dd>";
        }
        // line 37
        echo "\t\t";
        if (isset($context["AGE"])) { $_AGE_ = $context["AGE"]; } else { $_AGE_ = null; }
        if (($_AGE_ !== "")) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("AGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (isset($context["AGE"])) { $_AGE_ = $context["AGE"]; } else { $_AGE_ = null; }
            echo $_AGE_;
            echo "</dd>";
        }
        // line 38
        echo "\t\t";
        if (isset($context["S_GROUP_OPTIONS"])) { $_S_GROUP_OPTIONS_ = $context["S_GROUP_OPTIONS"]; } else { $_S_GROUP_OPTIONS_ = null; }
        if ($_S_GROUP_OPTIONS_) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("USERGROUPS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><select name=\"g\">";
            if (isset($context["S_GROUP_OPTIONS"])) { $_S_GROUP_OPTIONS_ = $context["S_GROUP_OPTIONS"]; } else { $_S_GROUP_OPTIONS_ = null; }
            echo $_S_GROUP_OPTIONS_;
            echo "</select> <input type=\"submit\" name=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" /></dd>";
        }
        // line 39
        echo "\t\t";
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 40
            echo "\t\t\t";
            if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
            if ( !$this->getAttribute($_custom_fields_, "S_PROFILE_CONTACT", array())) {
                // line 41
                echo "\t\t\t\t<dt>";
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt> <dd>";
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_VALUE", array());
                echo "</dd>
\t\t\t";
            }
            // line 43
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t";
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if (isset($context["S_ZEBRA"])) { $_S_ZEBRA_ = $context["S_ZEBRA"]; } else { $_S_ZEBRA_ = null; }
        if (($_S_USER_LOGGED_IN_ && $_S_ZEBRA_)) {
            // line 45
            echo "\t\t\t";
            if (isset($context["U_REMOVE_FRIEND"])) { $_U_REMOVE_FRIEND_ = $context["U_REMOVE_FRIEND"]; } else { $_U_REMOVE_FRIEND_ = null; }
            if (isset($context["U_REMOVE_FOE"])) { $_U_REMOVE_FOE_ = $context["U_REMOVE_FOE"]; } else { $_U_REMOVE_FOE_ = null; }
            if ($_U_REMOVE_FRIEND_) {
                // line 46
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                if (isset($context["U_REMOVE_FRIEND"])) { $_U_REMOVE_FRIEND_ = $context["U_REMOVE_FRIEND"]; } else { $_U_REMOVE_FRIEND_ = null; }
                echo $_U_REMOVE_FRIEND_;
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FRIEND");
                echo "</strong></a></dd>
\t\t\t";
            } elseif ($_U_REMOVE_FOE_) {
                // line 48
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                if (isset($context["U_REMOVE_FOE"])) { $_U_REMOVE_FOE_ = $context["U_REMOVE_FOE"]; } else { $_U_REMOVE_FOE_ = null; }
                echo $_U_REMOVE_FOE_;
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FOE");
                echo "</strong></a></dd>
\t\t\t";
            } else {
                // line 50
                echo "\t\t\t\t";
                if (isset($context["U_ADD_FRIEND"])) { $_U_ADD_FRIEND_ = $context["U_ADD_FRIEND"]; } else { $_U_ADD_FRIEND_ = null; }
                if ($_U_ADD_FRIEND_) {
                    // line 51
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    if (isset($context["U_ADD_FRIEND"])) { $_U_ADD_FRIEND_ = $context["U_ADD_FRIEND"]; } else { $_U_ADD_FRIEND_ = null; }
                    echo $_U_ADD_FRIEND_;
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FRIEND");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t";
                if (isset($context["U_ADD_FOE"])) { $_U_ADD_FOE_ = $context["U_ADD_FOE"]; } else { $_U_ADD_FOE_ = null; }
                if ($_U_ADD_FOE_) {
                    // line 54
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    if (isset($context["U_ADD_FOE"])) { $_U_ADD_FOE_ = $context["U_ADD_FOE"]; } else { $_U_ADD_FOE_ = null; }
                    echo $_U_ADD_FOE_;
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FOE");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 56
                echo "\t\t\t";
            }
            // line 57
            echo "\t\t";
        }
        // line 58
        echo "\t</dl>

\t</div>
</div>

";
        // line 63
        if (isset($context["memberlist_view_contact_before"])) { $_memberlist_view_contact_before_ = $context["memberlist_view_contact_before"]; } else { $_memberlist_view_contact_before_ = null; }
        // line 64
        echo "<div class=\"panel bg2\">
\t<div class=\"inner\">

\t<div class=\"column1\">
\t\t<h3>";
        // line 68
        echo $this->env->getExtension('phpbb')->lang("CONTACT_USER");
        echo "</h3>

\t\t<dl class=\"details\">
\t\t";
        // line 71
        if (isset($context["U_EMAIL"])) { $_U_EMAIL_ = $context["U_EMAIL"]; } else { $_U_EMAIL_ = null; }
        if ($_U_EMAIL_) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            if (isset($context["U_EMAIL"])) { $_U_EMAIL_ = $context["U_EMAIL"]; } else { $_U_EMAIL_ = null; }
            echo $_U_EMAIL_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL_USER");
            echo "</a></dd>";
        }
        // line 72
        echo "\t\t";
        if (isset($context["U_PM"])) { $_U_PM_ = $context["U_PM"]; } else { $_U_PM_ = null; }
        if ($_U_PM_) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("PM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            if (isset($context["U_PM"])) { $_U_PM_ = $context["U_PM"]; } else { $_U_PM_ = null; }
            echo $_U_PM_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_PRIVATE_MESSAGE");
            echo "</a></dd>";
        }
        // line 73
        echo "\t\t";
        if (isset($context["U_JABBER"])) { $_U_JABBER_ = $context["U_JABBER"]; } else { $_U_JABBER_ = null; }
        if (isset($context["S_JABBER_ENABLED"])) { $_S_JABBER_ENABLED_ = $context["S_JABBER_ENABLED"]; } else { $_S_JABBER_ENABLED_ = null; }
        if (isset($context["USER_JABBER"])) { $_USER_JABBER_ = $context["USER_JABBER"]; } else { $_USER_JABBER_ = null; }
        if (($_U_JABBER_ && $_S_JABBER_ENABLED_)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            if (isset($context["U_JABBER"])) { $_U_JABBER_ = $context["U_JABBER"]; } else { $_U_JABBER_ = null; }
            echo $_U_JABBER_;
            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_JABBER_MESSAGE");
            echo "</a></dd>";
        } elseif ($_USER_JABBER_) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (isset($context["USER_JABBER"])) { $_USER_JABBER_ = $context["USER_JABBER"]; } else { $_USER_JABBER_ = null; }
            echo $_USER_JABBER_;
            echo "</dd>";
        }
        // line 74
        echo "\t\t";
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 75
            echo "\t\t\t";
            if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
            if ($this->getAttribute($_custom_fields_, "S_PROFILE_CONTACT", array())) {
                // line 76
                echo "\t\t\t\t<dt>";
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt>
\t\t\t\t";
                // line 77
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                if ($this->getAttribute($_custom_fields_, "PROFILE_FIELD_CONTACT", array())) {
                    // line 78
                    echo "\t\t\t\t\t<dd><a href=\"";
                    if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                    echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_CONTACT", array());
                    echo "\">";
                    if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                    echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_DESC", array());
                    echo "</a></dd>
\t\t\t\t";
                } else {
                    // line 80
                    echo "\t\t\t\t\t<dd>";
                    if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                    echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_VALUE", array());
                    echo "</dd>
\t\t\t\t";
                }
                // line 82
                echo "\t\t\t";
            }
            // line 83
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t";
        if (isset($context["S_PROFILE_FIELD1"])) { $_S_PROFILE_FIELD1_ = $context["S_PROFILE_FIELD1"]; } else { $_S_PROFILE_FIELD1_ = null; }
        if ($_S_PROFILE_FIELD1_) {
            // line 85
            echo "\t\t\t<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dt>";
            // line 86
            if (isset($context["PROFILE_FIELD1_NAME"])) { $_PROFILE_FIELD1_NAME_ = $context["PROFILE_FIELD1_NAME"]; } else { $_PROFILE_FIELD1_NAME_ = null; }
            echo $_PROFILE_FIELD1_NAME_;
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (isset($context["PROFILE_FIELD1_VALUE"])) { $_PROFILE_FIELD1_VALUE_ = $context["PROFILE_FIELD1_VALUE"]; } else { $_PROFILE_FIELD1_VALUE_ = null; }
            echo $_PROFILE_FIELD1_VALUE_;
            echo "</dd>
\t\t";
        }
        // line 88
        echo "\t\t</dl>
\t</div>

\t<div class=\"column2\">
\t\t<h3>";
        // line 92
        echo $this->env->getExtension('phpbb')->lang("USER_FORUM");
        echo "</h3>
\t\t<dl class=\"details\">
\t\t\t";
        // line 94
        if (isset($context["memberlist_view_user_statistics_before"])) { $_memberlist_view_user_statistics_before_ = $context["memberlist_view_user_statistics_before"]; } else { $_memberlist_view_user_statistics_before_ = null; }
        // line 95
        echo "\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt> <dd>";
        if (isset($context["JOINED"])) { $_JOINED_ = $context["JOINED"]; } else { $_JOINED_ = null; }
        echo $_JOINED_;
        echo "</dd>
\t\t\t<dt>";
        // line 96
        echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt> <dd>";
        if (isset($context["LAST_ACTIVE"])) { $_LAST_ACTIVE_ = $context["LAST_ACTIVE"]; } else { $_LAST_ACTIVE_ = null; }
        echo $_LAST_ACTIVE_;
        echo "</dd>
\t\t\t";
        // line 97
        if (isset($context["S_WARNINGS"])) { $_S_WARNINGS_ = $context["S_WARNINGS"]; } else { $_S_WARNINGS_ = null; }
        if ($_S_WARNINGS_) {
            // line 98
            echo "\t\t\t<dt>";
            echo $this->env->getExtension('phpbb')->lang("WARNINGS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </dt>
\t\t\t<dd><strong>";
            // line 99
            if (isset($context["WARNINGS"])) { $_WARNINGS_ = $context["WARNINGS"]; } else { $_WARNINGS_ = null; }
            echo $_WARNINGS_;
            echo "</strong>";
            if (isset($context["U_NOTES"])) { $_U_NOTES_ = $context["U_NOTES"]; } else { $_U_NOTES_ = null; }
            if (isset($context["U_WARN"])) { $_U_WARN_ = $context["U_WARN"]; } else { $_U_WARN_ = null; }
            if (($_U_NOTES_ || $_U_WARN_)) {
                echo " [ ";
                if (isset($context["U_NOTES"])) { $_U_NOTES_ = $context["U_NOTES"]; } else { $_U_NOTES_ = null; }
                if ($_U_NOTES_) {
                    echo "<a href=\"";
                    if (isset($context["U_NOTES"])) { $_U_NOTES_ = $context["U_NOTES"]; } else { $_U_NOTES_ = null; }
                    echo $_U_NOTES_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_NOTES");
                    echo "</a>";
                }
                echo " ";
                if (isset($context["U_WARN"])) { $_U_WARN_ = $context["U_WARN"]; } else { $_U_WARN_ = null; }
                if ($_U_WARN_) {
                    if (isset($context["U_NOTES"])) { $_U_NOTES_ = $context["U_NOTES"]; } else { $_U_NOTES_ = null; }
                    if ($_U_NOTES_) {
                        echo " | ";
                    }
                    echo "<a href=\"";
                    if (isset($context["U_WARN"])) { $_U_WARN_ = $context["U_WARN"]; } else { $_U_WARN_ = null; }
                    echo $_U_WARN_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                    echo "</a>";
                }
                echo " ]";
            }
            echo "</dd>
\t\t\t";
        }
        // line 101
        echo "\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt>
\t\t\t\t<dd>";
        // line 102
        if (isset($context["POSTS"])) { $_POSTS_ = $context["POSTS"]; } else { $_POSTS_ = null; }
        echo $_POSTS_;
        echo " ";
        if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
        if ($_S_DISPLAY_SEARCH_) {
            echo "| <strong><a href=\"";
            if (isset($context["U_SEARCH_USER"])) { $_U_SEARCH_USER_ = $context["U_SEARCH_USER"]; } else { $_U_SEARCH_USER_ = null; }
            echo $_U_SEARCH_USER_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
            echo "</a></strong>";
        }
        // line 103
        echo "\t\t\t\t\t";
        if (isset($context["POSTS_PCT"])) { $_POSTS_PCT_ = $context["POSTS_PCT"]; } else { $_POSTS_PCT_ = null; }
        if ($_POSTS_PCT_) {
            echo "<br />(";
            if (isset($context["POSTS_PCT"])) { $_POSTS_PCT_ = $context["POSTS_PCT"]; } else { $_POSTS_PCT_ = null; }
            echo $_POSTS_PCT_;
            echo " / ";
            if (isset($context["POSTS_DAY"])) { $_POSTS_DAY_ = $context["POSTS_DAY"]; } else { $_POSTS_DAY_ = null; }
            echo $_POSTS_DAY_;
            echo ")";
        }
        // line 104
        echo "\t\t\t\t\t";
        if (isset($context["POSTS_IN_QUEUE"])) { $_POSTS_IN_QUEUE_ = $context["POSTS_IN_QUEUE"]; } else { $_POSTS_IN_QUEUE_ = null; }
        if (isset($context["U_MCP_QUEUE"])) { $_U_MCP_QUEUE_ = $context["U_MCP_QUEUE"]; } else { $_U_MCP_QUEUE_ = null; }
        if (($_POSTS_IN_QUEUE_ && $_U_MCP_QUEUE_)) {
            echo "<br />(<a href=\"";
            if (isset($context["U_MCP_QUEUE"])) { $_U_MCP_QUEUE_ = $context["U_MCP_QUEUE"]; } else { $_U_MCP_QUEUE_ = null; }
            echo $_U_MCP_QUEUE_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo "</a>)";
        } elseif ($_POSTS_IN_QUEUE_) {
            echo "<br />(";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo ")";
        }
        // line 105
        echo "\t\t\t\t</dd>
\t\t\t";
        // line 106
        if (isset($context["S_SHOW_ACTIVITY"])) { $_S_SHOW_ACTIVITY_ = $context["S_SHOW_ACTIVITY"]; } else { $_S_SHOW_ACTIVITY_ = null; }
        if (isset($context["POSTS"])) { $_POSTS_ = $context["POSTS"]; } else { $_POSTS_ = null; }
        if (($_S_SHOW_ACTIVITY_ && $_POSTS_)) {
            // line 107
            echo "\t\t\t\t<dt>";
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (isset($context["ACTIVE_FORUM"])) { $_ACTIVE_FORUM_ = $context["ACTIVE_FORUM"]; } else { $_ACTIVE_FORUM_ = null; }
            if (($_ACTIVE_FORUM_ != "")) {
                echo "<strong><a href=\"";
                if (isset($context["U_ACTIVE_FORUM"])) { $_U_ACTIVE_FORUM_ = $context["U_ACTIVE_FORUM"]; } else { $_U_ACTIVE_FORUM_ = null; }
                echo $_U_ACTIVE_FORUM_;
                echo "\">";
                if (isset($context["ACTIVE_FORUM"])) { $_ACTIVE_FORUM_ = $context["ACTIVE_FORUM"]; } else { $_ACTIVE_FORUM_ = null; }
                echo $_ACTIVE_FORUM_;
                echo "</a></strong><br />(";
                if (isset($context["ACTIVE_FORUM_POSTS"])) { $_ACTIVE_FORUM_POSTS_ = $context["ACTIVE_FORUM_POSTS"]; } else { $_ACTIVE_FORUM_POSTS_ = null; }
                echo $_ACTIVE_FORUM_POSTS_;
                echo " / ";
                if (isset($context["ACTIVE_FORUM_PCT"])) { $_ACTIVE_FORUM_PCT_ = $context["ACTIVE_FORUM_PCT"]; } else { $_ACTIVE_FORUM_PCT_ = null; }
                echo $_ACTIVE_FORUM_PCT_;
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t\t<dt>";
            // line 108
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_TOPIC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (isset($context["ACTIVE_TOPIC"])) { $_ACTIVE_TOPIC_ = $context["ACTIVE_TOPIC"]; } else { $_ACTIVE_TOPIC_ = null; }
            if (($_ACTIVE_TOPIC_ != "")) {
                echo "<strong><a href=\"";
                if (isset($context["U_ACTIVE_TOPIC"])) { $_U_ACTIVE_TOPIC_ = $context["U_ACTIVE_TOPIC"]; } else { $_U_ACTIVE_TOPIC_ = null; }
                echo $_U_ACTIVE_TOPIC_;
                echo "\">";
                if (isset($context["ACTIVE_TOPIC"])) { $_ACTIVE_TOPIC_ = $context["ACTIVE_TOPIC"]; } else { $_ACTIVE_TOPIC_ = null; }
                echo $_ACTIVE_TOPIC_;
                echo "</a></strong><br />(";
                if (isset($context["ACTIVE_TOPIC_POSTS"])) { $_ACTIVE_TOPIC_POSTS_ = $context["ACTIVE_TOPIC_POSTS"]; } else { $_ACTIVE_TOPIC_POSTS_ = null; }
                echo $_ACTIVE_TOPIC_POSTS_;
                echo " / ";
                if (isset($context["ACTIVE_TOPIC_PCT"])) { $_ACTIVE_TOPIC_PCT_ = $context["ACTIVE_TOPIC_PCT"]; } else { $_ACTIVE_TOPIC_PCT_ = null; }
                echo $_ACTIVE_TOPIC_PCT_;
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t";
        }
        // line 110
        echo "\t\t\t";
        if (isset($context["memberlist_view_user_statistics_after"])) { $_memberlist_view_user_statistics_after_ = $context["memberlist_view_user_statistics_after"]; } else { $_memberlist_view_user_statistics_after_ = null; }
        // line 111
        echo "\t\t</dl>
\t</div>

\t</div>
</div>
";
        // line 116
        if (isset($context["memberlist_view_contact_after"])) { $_memberlist_view_contact_after_ = $context["memberlist_view_contact_after"]; } else { $_memberlist_view_contact_after_ = null; }
        // line 117
        echo "
";
        // line 118
        if (isset($context["SIGNATURE"])) { $_SIGNATURE_ = $context["SIGNATURE"]; } else { $_SIGNATURE_ = null; }
        if ($_SIGNATURE_) {
            // line 119
            echo "<div class=\"panel bg1\">
\t<div class=\"inner\">

\t\t<h3>";
            // line 122
            echo $this->env->getExtension('phpbb')->lang("SIGNATURE");
            echo "</h3>

\t\t<div class=\"postbody\"><div class=\"signature standalone\">";
            // line 124
            if (isset($context["SIGNATURE"])) { $_SIGNATURE_ = $context["SIGNATURE"]; } else { $_SIGNATURE_ = null; }
            echo $_SIGNATURE_;
            echo "</div></div>

\t</div>
</div>
";
        }
        // line 129
        echo "
</form>

";
        // line 132
        if (isset($context["memberlist_view_content_append"])) { $_memberlist_view_content_append_ = $context["memberlist_view_content_append"]; } else { $_memberlist_view_content_append_ = null; }
        // line 133
        echo "
";
        // line 134
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_view.html", 134)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 135
        echo "
";
        // line 136
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_view.html", 136)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  709 => 136,  706 => 135,  694 => 134,  691 => 133,  689 => 132,  684 => 129,  675 => 124,  670 => 122,  665 => 119,  662 => 118,  659 => 117,  657 => 116,  650 => 111,  647 => 110,  622 => 108,  597 => 107,  593 => 106,  590 => 105,  574 => 104,  562 => 103,  549 => 102,  543 => 101,  507 => 99,  501 => 98,  498 => 97,  490 => 96,  481 => 95,  479 => 94,  474 => 92,  468 => 88,  458 => 86,  455 => 85,  451 => 84,  445 => 83,  442 => 82,  435 => 80,  425 => 78,  422 => 77,  415 => 76,  411 => 75,  405 => 74,  381 => 73,  367 => 72,  354 => 71,  348 => 68,  342 => 64,  340 => 63,  333 => 58,  330 => 57,  327 => 56,  318 => 54,  314 => 53,  305 => 51,  301 => 50,  292 => 48,  283 => 46,  278 => 45,  273 => 44,  267 => 43,  256 => 41,  252 => 40,  246 => 39,  232 => 38,  220 => 37,  208 => 36,  205 => 35,  202 => 34,  185 => 33,  173 => 32,  170 => 31,  167 => 30,  164 => 29,  153 => 28,  142 => 27,  131 => 26,  121 => 25,  107 => 24,  101 => 22,  97 => 20,  93 => 18,  90 => 17,  81 => 16,  72 => 15,  70 => 14,  65 => 13,  62 => 12,  59 => 11,  50 => 8,  45 => 7,  42 => 6,  40 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
