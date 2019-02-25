<?php

/* user_activate_passwd.txt */
class __TwigTemplate_166c6e9ef1a515c3db891fc04d15019fc59076305a39ccb458a5369b1f1c3a5a extends Twig_Template
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
        echo "Subject: Активация нового пароля

Здравствуйте, ";
        // line 3
        if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
        echo $_USERNAME_;
        echo "!

Вы получили это письмо потому, что Вы (либо кто-то, выдающий себя за вас) попросили выслать новый пароль для вашего аккаунта на Форуме «";
        // line 5
        if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
        echo $_SITENAME_;
        echo "». Если Вы не просили выслать пароль, то не обращайте внимания на это письмо, если же подобные письма будут продолжать приходить, обратитесь к администратору форума.

Прежде чем использовать новый пароль, Вы должны его активировать. Для этого перейдите по ссылке:

";
        // line 9
        if (isset($context["U_ACTIVATE"])) { $_U_ACTIVATE_ = $context["U_ACTIVATE"]; } else { $_U_ACTIVATE_ = null; }
        echo $_U_ACTIVATE_;
        echo "

В случае успешной активации Вы сможете входить на форум, используя следующий пароль:

Пароль: ";
        // line 13
        if (isset($context["PASSWORD"])) { $_PASSWORD_ = $context["PASSWORD"]; } else { $_PASSWORD_ = null; }
        echo $_PASSWORD_;
        echo "

Вы сможете сменить этот пароль на странице редактирования профиля в центре пользователя. Если у Вас возникнут какие-либо трудности, обратитесь к администратору форума.

";
        // line 17
        if (isset($context["EMAIL_SIG"])) { $_EMAIL_SIG_ = $context["EMAIL_SIG"]; } else { $_EMAIL_SIG_ = null; }
        echo $_EMAIL_SIG_;
    }

    public function getTemplateName()
    {
        return "user_activate_passwd.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  45 => 13,  37 => 9,  29 => 5,  23 => 3,  19 => 1,);
    }
}
