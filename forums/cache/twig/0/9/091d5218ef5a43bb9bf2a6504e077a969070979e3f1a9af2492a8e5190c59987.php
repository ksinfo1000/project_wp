<?php

/* memberlist_body.html */
class __TwigTemplate_091d5218ef5a43bb9bf2a6504e077a969070979e3f1a9af2492a8e5190c59987 extends Twig_Template
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
        if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
        if ($_S_IN_SEARCH_POPUP_) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "memberlist_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t";
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t<form method=\"post\" id=\"results\" action=\"";
            if (isset($context["S_MODE_ACTION"])) { $_S_MODE_ACTION_ = $context["S_MODE_ACTION"]; } else { $_S_MODE_ACTION_ = null; }
            echo $_S_MODE_ACTION_;
            echo "\" onsubmit=\"insert_marked_users('#results', this.user); return false;\" data-form-name=\"";
            if (isset($context["S_FORM_NAME"])) { $_S_FORM_NAME_ = $context["S_FORM_NAME"]; } else { $_S_FORM_NAME_ = null; }
            echo $_S_FORM_NAME_;
            echo "\" data-field-name=\"";
            if (isset($context["S_FIELD_NAME"])) { $_S_FIELD_NAME_ = $context["S_FIELD_NAME"]; } else { $_S_FIELD_NAME_ = null; }
            echo $_S_FIELD_NAME_;
            echo "\">

";
        } else {
            // line 7
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 7)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 8
            echo "\t<div class=\"panel\" id=\"memberlist_search\"";
            if (isset($context["S_SEARCH_USER"])) { $_S_SEARCH_USER_ = $context["S_SEARCH_USER"]; } else { $_S_SEARCH_USER_ = null; }
            if ( !$_S_SEARCH_USER_) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t";
            // line 9
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 9)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 10
            echo "\t</div>
\t<form method=\"post\" action=\"";
            // line 11
            if (isset($context["S_MODE_ACTION"])) { $_S_MODE_ACTION_ = $context["S_MODE_ACTION"]; } else { $_S_MODE_ACTION_ = null; }
            echo $_S_MODE_ACTION_;
            echo "\">

";
        }
        // line 14
        echo "
\t";
        // line 15
        if (isset($context["S_SHOW_GROUP"])) { $_S_SHOW_GROUP_ = $context["S_SHOW_GROUP"]; } else { $_S_SHOW_GROUP_ = null; }
        if ($_S_SHOW_GROUP_) {
            // line 16
            echo "\t\t<h2 class=\"group-title\"";
            if (isset($context["GROUP_COLOR"])) { $_GROUP_COLOR_ = $context["GROUP_COLOR"]; } else { $_GROUP_COLOR_ = null; }
            if ($_GROUP_COLOR_) {
                echo " style=\"color:#";
                if (isset($context["GROUP_COLOR"])) { $_GROUP_COLOR_ = $context["GROUP_COLOR"]; } else { $_GROUP_COLOR_ = null; }
                echo $_GROUP_COLOR_;
                echo ";\"";
            }
            echo ">";
            if (isset($context["GROUP_NAME"])) { $_GROUP_NAME_ = $context["GROUP_NAME"]; } else { $_GROUP_NAME_ = null; }
            echo $_GROUP_NAME_;
            echo "</h2>
\t\t";
            // line 17
            if (isset($context["U_MANAGE"])) { $_U_MANAGE_ = $context["U_MANAGE"]; } else { $_U_MANAGE_ = null; }
            if ($_U_MANAGE_) {
                // line 18
                echo "\t\t\t<p class=\"right responsive-center manage rightside\"><a href=\"";
                if (isset($context["U_MANAGE"])) { $_U_MANAGE_ = $context["U_MANAGE"]; } else { $_U_MANAGE_ = null; }
                echo $_U_MANAGE_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MANAGE_GROUP");
                echo "</a></p>
\t\t";
            }
            // line 20
            echo "\t\t<p>";
            if (isset($context["GROUP_DESC"])) { $_GROUP_DESC_ = $context["GROUP_DESC"]; } else { $_GROUP_DESC_ = null; }
            echo $_GROUP_DESC_;
            echo " ";
            if (isset($context["GROUP_TYPE"])) { $_GROUP_TYPE_ = $context["GROUP_TYPE"]; } else { $_GROUP_TYPE_ = null; }
            echo $_GROUP_TYPE_;
            echo "</p>

\t\t<p>
\t\t\t";
            // line 23
            if (isset($context["AVATAR_IMG"])) { $_AVATAR_IMG_ = $context["AVATAR_IMG"]; } else { $_AVATAR_IMG_ = null; }
            if ($_AVATAR_IMG_) {
                if (isset($context["AVATAR_IMG"])) { $_AVATAR_IMG_ = $context["AVATAR_IMG"]; } else { $_AVATAR_IMG_ = null; }
                echo $_AVATAR_IMG_;
            }
            // line 24
            echo "\t\t\t";
            if (isset($context["RANK_IMG"])) { $_RANK_IMG_ = $context["RANK_IMG"]; } else { $_RANK_IMG_ = null; }
            if ($_RANK_IMG_) {
                if (isset($context["RANK_IMG"])) { $_RANK_IMG_ = $context["RANK_IMG"]; } else { $_RANK_IMG_ = null; }
                echo $_RANK_IMG_;
            }
            // line 25
            echo "\t\t\t";
            if (isset($context["GROUP_RANK"])) { $_GROUP_RANK_ = $context["GROUP_RANK"]; } else { $_GROUP_RANK_ = null; }
            if ($_GROUP_RANK_) {
                if (isset($context["GROUP_RANK"])) { $_GROUP_RANK_ = $context["GROUP_RANK"]; } else { $_GROUP_RANK_ = null; }
                echo $_GROUP_RANK_;
            }
            // line 26
            echo "\t\t</p>
\t";
        } else {
            // line 28
            echo "\t\t<h2 class=\"solo\">";
            if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
            echo $_PAGE_TITLE_;
            if (isset($context["SEARCH_WORDS"])) { $_SEARCH_WORDS_ = $context["SEARCH_WORDS"]; } else { $_SEARCH_WORDS_ = null; }
            if ($_SEARCH_WORDS_) {
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <a href=\"";
                if (isset($context["U_SEARCH_WORDS"])) { $_U_SEARCH_WORDS_ = $context["U_SEARCH_WORDS"]; } else { $_U_SEARCH_WORDS_ = null; }
                echo $_U_SEARCH_WORDS_;
                echo "\">";
                if (isset($context["SEARCH_WORDS"])) { $_SEARCH_WORDS_ = $context["SEARCH_WORDS"]; } else { $_SEARCH_WORDS_ = null; }
                echo $_SEARCH_WORDS_;
                echo "</a>";
            }
            echo "</h2>

\t\t<div class=\"action-bar top\">
\t\t\t<div class=\"member-search panel\">
\t\t\t\t";
            // line 32
            if (isset($context["U_FIND_MEMBER"])) { $_U_FIND_MEMBER_ = $context["U_FIND_MEMBER"]; } else { $_U_FIND_MEMBER_ = null; }
            if (isset($context["S_SEARCH_USER"])) { $_S_SEARCH_USER_ = $context["S_SEARCH_USER"]; } else { $_S_SEARCH_USER_ = null; }
            if (isset($context["U_HIDE_FIND_MEMBER"])) { $_U_HIDE_FIND_MEMBER_ = $context["U_HIDE_FIND_MEMBER"]; } else { $_U_HIDE_FIND_MEMBER_ = null; }
            if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
            if (($_U_FIND_MEMBER_ &&  !$_S_SEARCH_USER_)) {
                echo "<a href=\"";
                if (isset($context["U_FIND_MEMBER"])) { $_U_FIND_MEMBER_ = $context["U_FIND_MEMBER"]; } else { $_U_FIND_MEMBER_ = null; }
                echo $_U_FIND_MEMBER_;
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo addslashes($this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH"));
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "</a> &bull; ";
            } elseif ((($_S_SEARCH_USER_ && $_U_HIDE_FIND_MEMBER_) &&  !$_S_IN_SEARCH_POPUP_)) {
                echo "<a href=\"";
                if (isset($context["U_HIDE_FIND_MEMBER"])) { $_U_HIDE_FIND_MEMBER_ = $context["U_HIDE_FIND_MEMBER"]; } else { $_U_HIDE_FIND_MEMBER_ = null; }
                echo $_U_HIDE_FIND_MEMBER_;
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo addslashes($this->env->getExtension('phpbb')->lang("FIND_USERNAME"));
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH");
                echo "</a> &bull; ";
            }
            // line 33
            echo "\t\t\t\t<strong>
\t\t\t\t";
            // line 34
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "first_char", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["first_char"]) {
                // line 35
                echo "\t\t\t\t\t<a href=\"";
                if (isset($context["first_char"])) { $_first_char_ = $context["first_char"]; } else { $_first_char_ = null; }
                echo $this->getAttribute($_first_char_, "U_SORT", array());
                echo "\">";
                if (isset($context["first_char"])) { $_first_char_ = $context["first_char"]; } else { $_first_char_ = null; }
                echo $this->getAttribute($_first_char_, "DESC", array());
                echo "</a>&nbsp;
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t\t</strong>
\t\t\t</div>
\t\t
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 41
            if (isset($context["TOTAL_USERS"])) { $_TOTAL_USERS_ = $context["TOTAL_USERS"]; } else { $_TOTAL_USERS_ = null; }
            echo $_TOTAL_USERS_;
            echo "
\t\t\t\t";
            // line 42
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                echo " 
\t\t\t\t\t";
                // line 43
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "memberlist_body.html", 43)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 44
                echo "\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t &bull; ";
                // line 45
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t\t";
            }
            // line 47
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 50
        echo "
\t";
        // line 51
        if (isset($context["S_LEADERS_SET"])) { $_S_LEADERS_SET_ = $context["S_LEADERS_SET"]; } else { $_S_LEADERS_SET_ = null; }
        if (isset($context["S_SHOW_GROUP"])) { $_S_SHOW_GROUP_ = $context["S_SHOW_GROUP"]; } else { $_S_SHOW_GROUP_ = null; }
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if ((($_S_LEADERS_SET_ ||  !$_S_SHOW_GROUP_) ||  !twig_length_filter($this->env, $this->getAttribute($_loops_, "memberrow", array())))) {
            // line 52
            echo "\t<div class=\"forumbg forumbg-table\">
\t\t<div class=\"inner\">

\t\t<table class=\"table1\" id=\"memberlist\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\" data-dfn=\"";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
            if (isset($context["S_SHOW_GROUP"])) { $_S_SHOW_GROUP_ = $context["S_SHOW_GROUP"]; } else { $_S_SHOW_GROUP_ = null; }
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (($_S_SHOW_GROUP_ && twig_length_filter($this->env, $this->getAttribute($_loops_, "memberrow", array())))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "\"><span class=\"rank-img\"><a href=\"";
            if (isset($context["U_SORT_RANK"])) { $_U_SORT_RANK_ = $context["U_SORT_RANK"]; } else { $_U_SORT_RANK_ = null; }
            echo $_U_SORT_RANK_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo "</a></span><a href=\"";
            if (isset($context["U_SORT_USERNAME"])) { $_U_SORT_USERNAME_ = $context["U_SORT_USERNAME"]; } else { $_U_SORT_USERNAME_ = null; }
            echo $_U_SORT_USERNAME_;
            echo "\">";
            if (isset($context["S_SHOW_GROUP"])) { $_S_SHOW_GROUP_ = $context["S_SHOW_GROUP"]; } else { $_S_SHOW_GROUP_ = null; }
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (($_S_SHOW_GROUP_ && twig_length_filter($this->env, $this->getAttribute($_loops_, "memberrow", array())))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "</a></th>
\t\t\t<th class=\"posts\"><a href=\"";
            // line 59
            if (isset($context["U_SORT_POSTS"])) { $_U_SORT_POSTS_ = $context["U_SORT_POSTS"]; } else { $_U_SORT_POSTS_ = null; }
            echo $_U_SORT_POSTS_;
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS");
            echo "</a></th>
\t\t\t<th class=\"info\">";
            // line 60
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                if ( !$this->getAttribute($_custom_fields_, "S_FIRST_ROW", array())) {
                    echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                    echo " ";
                }
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_NAME", array());
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</th>
\t\t\t<th class=\"joined\"><a href=\"";
            // line 61
            if (isset($context["U_SORT_JOINED"])) { $_U_SORT_JOINED_ = $context["U_SORT_JOINED"]; } else { $_U_SORT_JOINED_ = null; }
            echo $_U_SORT_JOINED_;
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo "</a></th>
\t\t\t";
            // line 62
            if (isset($context["U_SORT_ACTIVE"])) { $_U_SORT_ACTIVE_ = $context["U_SORT_ACTIVE"]; } else { $_U_SORT_ACTIVE_ = null; }
            if ($_U_SORT_ACTIVE_) {
                echo "<th class=\"active\"><a href=\"";
                if (isset($context["U_SORT_ACTIVE"])) { $_U_SORT_ACTIVE_ = $context["U_SORT_ACTIVE"]; } else { $_U_SORT_ACTIVE_ = null; }
                echo $_U_SORT_ACTIVE_;
                echo "#memberlist\">";
                echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                echo "</a></th>";
            }
            // line 63
            echo "\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
        }
        // line 67
        echo "\t\t";
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "memberrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 68
            echo "\t\t\t";
            if (isset($context["S_SHOW_GROUP"])) { $_S_SHOW_GROUP_ = $context["S_SHOW_GROUP"]; } else { $_S_SHOW_GROUP_ = null; }
            if ($_S_SHOW_GROUP_) {
                // line 69
                echo "\t\t\t\t";
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                if (( !$this->getAttribute($_memberrow_, "S_GROUP_LEADER", array()) &&  !$this->getAttribute($_definition_, "S_MEMBER_HEADER", array()))) {
                    // line 70
                    echo "\t\t\t\t";
                    if (isset($context["S_LEADERS_SET"])) { $_S_LEADERS_SET_ = $context["S_LEADERS_SET"]; } else { $_S_LEADERS_SET_ = null; }
                    if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                    if (($_S_LEADERS_SET_ && $this->getAttribute($_memberrow_, "S_FIRST_ROW", array()))) {
                        // line 71
                        echo "\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t<td colspan=\"";
                        // line 72
                        if (isset($context["U_SORT_ACTIVE"])) { $_U_SORT_ACTIVE_ = $context["U_SORT_ACTIVE"]; } else { $_U_SORT_ACTIVE_ = null; }
                        if ($_U_SORT_ACTIVE_) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t\t\t</tr>
\t\t\t\t";
                    }
                    // line 75
                    if (isset($context["S_LEADERS_SET"])) { $_S_LEADERS_SET_ = $context["S_LEADERS_SET"]; } else { $_S_LEADERS_SET_ = null; }
                    if ($_S_LEADERS_SET_) {
                        // line 76
                        echo "\t\t</tbody>
\t\t</table>

\t</div>
</div>
";
                    }
                    // line 82
                    echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t";
                    // line 88
                    if (isset($context["S_LEADERS_SET"])) { $_S_LEADERS_SET_ = $context["S_LEADERS_SET"]; } else { $_S_LEADERS_SET_ = null; }
                    if (isset($context["S_SHOW_GROUP"])) { $_S_SHOW_GROUP_ = $context["S_SHOW_GROUP"]; } else { $_S_SHOW_GROUP_ = null; }
                    if ( !$_S_LEADERS_SET_) {
                        // line 89
                        echo "\t\t<th class=\"name\" data-dfn=\"";
                        echo $this->env->getExtension('phpbb')->lang("RANK");
                        echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        echo "\"><span class=\"rank-img\"><a href=\"";
                        if (isset($context["U_SORT_RANK"])) { $_U_SORT_RANK_ = $context["U_SORT_RANK"]; } else { $_U_SORT_RANK_ = null; }
                        echo $_U_SORT_RANK_;
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("RANK");
                        echo "</a></span><a href=\"";
                        if (isset($context["U_SORT_USERNAME"])) { $_U_SORT_USERNAME_ = $context["U_SORT_USERNAME"]; } else { $_U_SORT_USERNAME_ = null; }
                        echo $_U_SORT_USERNAME_;
                        echo "\">";
                        if (isset($context["S_SHOW_GROUP"])) { $_S_SHOW_GROUP_ = $context["S_SHOW_GROUP"]; } else { $_S_SHOW_GROUP_ = null; }
                        if ($_S_SHOW_GROUP_) {
                            echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        }
                        echo "</a></th>
\t\t\t<th class=\"posts\"><a href=\"";
                        // line 90
                        if (isset($context["U_SORT_POSTS"])) { $_U_SORT_POSTS_ = $context["U_SORT_POSTS"]; } else { $_U_SORT_POSTS_ = null; }
                        echo $_U_SORT_POSTS_;
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo "</a></th>
\t\t\t<th class=\"info\">";
                        // line 91
                        if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_memberrow_, "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                            if ( !$this->getAttribute($_custom_fields_, "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                            echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t<th class=\"joined\"><a href=\"";
                        // line 92
                        if (isset($context["U_SORT_JOINED"])) { $_U_SORT_JOINED_ = $context["U_SORT_JOINED"]; } else { $_U_SORT_JOINED_ = null; }
                        echo $_U_SORT_JOINED_;
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb')->lang("JOINED");
                        echo "</a></th>
\t\t\t";
                        // line 93
                        if (isset($context["U_SORT_ACTIVE"])) { $_U_SORT_ACTIVE_ = $context["U_SORT_ACTIVE"]; } else { $_U_SORT_ACTIVE_ = null; }
                        if ($_U_SORT_ACTIVE_) {
                            echo "<th class=\"active\"><a href=\"";
                            if (isset($context["U_SORT_ACTIVE"])) { $_U_SORT_ACTIVE_ = $context["U_SORT_ACTIVE"]; } else { $_U_SORT_ACTIVE_ = null; }
                            echo $_U_SORT_ACTIVE_;
                            echo "#memberlist\">";
                            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            echo "</a></th>";
                        }
                        // line 94
                        echo "\t";
                    } elseif ($_S_SHOW_GROUP_) {
                        // line 95
                        echo "\t\t<th class=\"name\">";
                        echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t<th class=\"posts\">";
                        // line 96
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo "</th>
\t\t<th class=\"info\">";
                        // line 97
                        if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_memberrow_, "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                            if ( !$this->getAttribute($_custom_fields_, "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                            echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t<th class=\"joined\">";
                        // line 98
                        echo $this->env->getExtension('phpbb')->lang("JOINED");
                        echo "</th>
\t\t";
                        // line 99
                        if (isset($context["U_SORT_ACTIVE"])) { $_U_SORT_ACTIVE_ = $context["U_SORT_ACTIVE"]; } else { $_U_SORT_ACTIVE_ = null; }
                        if ($_U_SORT_ACTIVE_) {
                            echo "<th class=\"active\">";
                            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            echo "</th>";
                        }
                        // line 100
                        echo "\t";
                    }
                    // line 101
                    echo "\t</tr>
\t</thead>
\t<tbody>
\t\t\t\t\t";
                    // line 104
                    if (isset($context["S_MEMBER_HEADER"])) { $_S_MEMBER_HEADER_ = $context["S_MEMBER_HEADER"]; } else { $_S_MEMBER_HEADER_ = null; }
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 105
                    echo "\t\t\t\t";
                }
                // line 106
                echo "\t\t\t";
            }
            // line 107
            echo "
\t<tr class=\"";
            // line 108
            if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
            if (($this->getAttribute($_memberrow_, "S_ROW_COUNT", array()) % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
            if ($this->getAttribute($_memberrow_, "S_INACTIVE", array())) {
                echo " inactive";
            }
            echo "\">
\t\t<td><span class=\"rank-img\">";
            // line 109
            if (isset($context["memberlist_body_rank_prepend"])) { $_memberlist_body_rank_prepend_ = $context["memberlist_body_rank_prepend"]; } else { $_memberlist_body_rank_prepend_ = null; }
            if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
            if ($this->getAttribute($_memberrow_, "RANK_IMG", array())) {
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "RANK_IMG", array());
            } else {
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "RANK_TITLE", array());
            }
            if (isset($context["memberlist_body_rank_append"])) { $_memberlist_body_rank_append_ = $context["memberlist_body_rank_append"]; } else { $_memberlist_body_rank_append_ = null; }
            echo "</span>";
            if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
            if (isset($context["S_SELECT_SINGLE"])) { $_S_SELECT_SINGLE_ = $context["S_SELECT_SINGLE"]; } else { $_S_SELECT_SINGLE_ = null; }
            if (($_S_IN_SEARCH_POPUP_ &&  !$_S_SELECT_SINGLE_)) {
                echo "<input type=\"checkbox\" name=\"user\" value=\"";
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "USERNAME", array());
                echo "\" /> ";
            }
            if (isset($context["memberlist_body_username_prepend"])) { $_memberlist_body_username_prepend_ = $context["memberlist_body_username_prepend"]; } else { $_memberlist_body_username_prepend_ = null; }
            if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
            echo $this->getAttribute($_memberrow_, "USERNAME_FULL", array());
            if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
            if ($this->getAttribute($_memberrow_, "S_INACTIVE", array())) {
                echo " (";
                echo $this->env->getExtension('phpbb')->lang("INACTIVE");
                echo ")";
            }
            if (isset($context["memberlist_body_username_append"])) { $_memberlist_body_username_append_ = $context["memberlist_body_username_append"]; } else { $_memberlist_body_username_append_ = null; }
            if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
            if ($_S_IN_SEARCH_POPUP_) {
                echo "<br />[&nbsp;<a href=\"#\" onclick=\"insert_single_user('#results', '";
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "A_USERNAME", array());
                echo "'); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("SELECT");
                echo "</a>&nbsp;]";
            }
            echo "</td>
\t\t<td class=\"posts\">";
            // line 110
            if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
            if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
            if (($this->getAttribute($_memberrow_, "POSTS", array()) && $_S_DISPLAY_SEARCH_)) {
                echo "<a href=\"";
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "U_SEARCH_USER", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                echo "\">";
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "POSTS", array());
                echo "</a>";
            } else {
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "POSTS", array());
            }
            echo "</td>
\t\t<td class=\"info\">";
            // line 111
            if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_memberrow_, "custom_fields", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                echo "<div>";
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_VALUE", array());
                echo "</div>";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
\t\t<td>";
            // line 112
            if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
            echo $this->getAttribute($_memberrow_, "JOINED", array());
            echo "</td>
\t\t";
            // line 113
            if (isset($context["S_VIEWONLINE"])) { $_S_VIEWONLINE_ = $context["S_VIEWONLINE"]; } else { $_S_VIEWONLINE_ = null; }
            if ($_S_VIEWONLINE_) {
                echo "<td>";
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "LAST_ACTIVE", array());
                echo "&nbsp;</td>";
            }
            // line 114
            echo "\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 116
            echo "\t<tr class=\"bg1\">
\t\t<td colspan=\"";
            // line 117
            if (isset($context["S_VIEWONLINE"])) { $_S_VIEWONLINE_ = $context["S_VIEWONLINE"]; } else { $_S_VIEWONLINE_ = null; }
            if ($_S_VIEWONLINE_) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("NO_MEMBERS");
            echo "</td>
\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t</tbody>
\t</table>

\t</div>
</div>

";
        // line 126
        if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
        if (isset($context["S_SELECT_SINGLE"])) { $_S_SELECT_SINGLE_ = $context["S_SELECT_SINGLE"]; } else { $_S_SELECT_SINGLE_ = null; }
        if (($_S_IN_SEARCH_POPUP_ &&  !$_S_SELECT_SINGLE_)) {
            // line 127
            echo "<fieldset class=\"display-actions\">
\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 128
            echo $this->env->getExtension('phpbb')->lang("SELECT_MARKED");
            echo "\" class=\"button2\" />
\t<div><a href=\"#\" onclick=\"marklist('results', 'user', true); return false;\">";
            // line 129
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('results', 'user', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
</fieldset>
";
        }
        // line 132
        echo "
";
        // line 133
        if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
        if ($_S_IN_SEARCH_POPUP_) {
            // line 134
            echo "</form>
<form method=\"post\" id=\"sort-results\" action=\"";
            // line 135
            if (isset($context["S_MODE_ACTION"])) { $_S_MODE_ACTION_ = $context["S_MODE_ACTION"]; } else { $_S_MODE_ACTION_ = null; }
            echo $_S_MODE_ACTION_;
            echo "\">
";
        }
        // line 137
        echo "
";
        // line 138
        if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
        if (isset($context["S_SEARCH_USER"])) { $_S_SEARCH_USER_ = $context["S_SEARCH_USER"]; } else { $_S_SEARCH_USER_ = null; }
        if (($_S_IN_SEARCH_POPUP_ &&  !$_S_SEARCH_USER_)) {
            // line 139
            echo "<fieldset class=\"display-options\">
\t<label for=\"sk\">";
            // line 140
            echo $this->env->getExtension('phpbb')->lang("SELECT_SORT_METHOD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"sk\" id=\"sk\">";
            if (isset($context["S_MODE_SELECT"])) { $_S_MODE_SELECT_ = $context["S_MODE_SELECT"]; } else { $_S_MODE_SELECT_ = null; }
            echo $_S_MODE_SELECT_;
            echo "</select></label>
\t<label for=\"sd\">";
            // line 141
            echo $this->env->getExtension('phpbb')->lang("ORDER");
            echo " <select name=\"sd\" id=\"sd\">";
            if (isset($context["S_ORDER_SELECT"])) { $_S_ORDER_SELECT_ = $context["S_ORDER_SELECT"]; } else { $_S_ORDER_SELECT_ = null; }
            echo $_S_ORDER_SELECT_;
            echo "</select></label>
\t<input type=\"submit\" name=\"sort\" value=\"";
            // line 142
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button2\" />
</fieldset>
";
        }
        // line 145
        echo "
</form>

<div class=\"action-bar bottom\">
\t<div class=\"pagination\">
\t\t";
        // line 150
        if (isset($context["TOTAL_USERS"])) { $_TOTAL_USERS_ = $context["TOTAL_USERS"]; } else { $_TOTAL_USERS_ = null; }
        echo $_TOTAL_USERS_;
        echo "
\t\t";
        // line 151
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
            echo " 
\t\t\t";
            // line 152
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "memberlist_body.html", 152)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 153
            echo "\t\t";
        } else {
            echo " 
\t\t\t &bull; ";
            // line 154
            if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
            echo $_PAGE_NUMBER_;
            echo "
\t\t";
        }
        // line 156
        echo "\t</div>
</div>

";
        // line 159
        if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
        if ($_S_IN_SEARCH_POPUP_) {
            // line 160
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "memberlist_body.html", 160)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 162
            echo "\t";
            $location = "jumpbox.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox.html", "memberlist_body.html", 162)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 163
            echo "\t";
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "memberlist_body.html", 163)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 163,  823 => 162,  809 => 160,  806 => 159,  801 => 156,  795 => 154,  790 => 153,  778 => 152,  773 => 151,  768 => 150,  761 => 145,  755 => 142,  748 => 141,  740 => 140,  737 => 139,  733 => 138,  730 => 137,  724 => 135,  721 => 134,  718 => 133,  715 => 132,  707 => 129,  703 => 128,  700 => 127,  696 => 126,  688 => 120,  672 => 117,  669 => 116,  663 => 114,  655 => 113,  650 => 112,  630 => 111,  611 => 110,  570 => 109,  557 => 108,  554 => 107,  551 => 106,  548 => 105,  544 => 104,  539 => 101,  536 => 100,  529 => 99,  525 => 98,  507 => 97,  503 => 96,  498 => 95,  495 => 94,  485 => 93,  478 => 92,  460 => 91,  453 => 90,  431 => 89,  427 => 88,  419 => 82,  411 => 76,  408 => 75,  397 => 72,  394 => 71,  389 => 70,  384 => 69,  380 => 68,  373 => 67,  367 => 63,  357 => 62,  350 => 61,  332 => 60,  325 => 59,  297 => 58,  289 => 52,  284 => 51,  281 => 50,  276 => 47,  270 => 45,  265 => 44,  253 => 43,  248 => 42,  243 => 41,  237 => 37,  224 => 35,  219 => 34,  216 => 33,  192 => 32,  172 => 28,  168 => 26,  161 => 25,  154 => 24,  148 => 23,  137 => 20,  128 => 18,  125 => 17,  111 => 16,  108 => 15,  105 => 14,  98 => 11,  95 => 10,  83 => 9,  75 => 8,  62 => 7,  48 => 4,  35 => 3,  22 => 2,  19 => 1,);
    }
}
