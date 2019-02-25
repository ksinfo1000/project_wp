<?php

/* user_welcome.txt */
class __TwigTemplate_620ce72725f3c0604ac95c14549006298ea7308930d1f33066885ee422e3c9a2 extends Twig_Template
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
        echo "Subject: Добро пожаловать на форум «";
        if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
        echo $_SITENAME_;
        echo "» — ";
        if (isset($context["U_BOARD"])) { $_U_BOARD_ = $context["U_BOARD"]; } else { $_U_BOARD_ = null; }
        echo $_U_BOARD_;
        echo "

";
        // line 3
        if (isset($context["WELCOME_MSG"])) { $_WELCOME_MSG_ = $context["WELCOME_MSG"]; } else { $_WELCOME_MSG_ = null; }
        echo $_WELCOME_MSG_;
        echo "

Пожалуйста, сохраните это сообщение. Параметры вашего аккаунта таковы:

----------------------------
URL форума: ";
        // line 8
        if (isset($context["U_BOARD"])) { $_U_BOARD_ = $context["U_BOARD"]; } else { $_U_BOARD_ = null; }
        echo $_U_BOARD_;
        echo "
----------------------------

Ваш пароль надёжно сохранен в нашей базе данных и не может быть извлечён из неё. Если Вы забудете свой пароль, то Вы сможете восстановить его, используя e-mail, указанный при регистрации.

Спасибо за регистрацию!

";
        // line 15
        if (isset($context["EMAIL_SIG"])) { $_EMAIL_SIG_ = $context["EMAIL_SIG"]; } else { $_EMAIL_SIG_ = null; }
        echo $_EMAIL_SIG_;
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_welcome.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  38 => 8,  29 => 3,  19 => 1,);
    }
}
