<?php

/* contact_admin.txt */
class __TwigTemplate_9ab4333634b90c42f6beb7435070aa6890b497b7c87a98536a113047a5761326 extends Twig_Template
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
        echo "
Здравствуйте, ";
        // line 2
        if (isset($context["TO_USERNAME"])) { $_TO_USERNAME_ = $context["TO_USERNAME"]; } else { $_TO_USERNAME_ = null; }
        echo $_TO_USERNAME_;
        echo ",

Следующее сообщение отправлено с помощью страницы для связи с администрацией на сайте «";
        // line 4
        if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
        echo $_SITENAME_;
        echo "».

";
        // line 6
        if (isset($context["S_IS_REGISTERED"])) { $_S_IS_REGISTERED_ = $context["S_IS_REGISTERED"]; } else { $_S_IS_REGISTERED_ = null; }
        if ($_S_IS_REGISTERED_) {
            // line 7
            echo "Сообщение отправлено с учётной записи на сайте.
Имя пользователя: ";
            // line 8
            if (isset($context["FROM_USERNAME"])) { $_FROM_USERNAME_ = $context["FROM_USERNAME"]; } else { $_FROM_USERNAME_ = null; }
            echo $_FROM_USERNAME_;
            echo "
E-mail адрес: ";
            // line 9
            if (isset($context["FROM_EMAIL_ADDRESS"])) { $_FROM_EMAIL_ADDRESS_ = $context["FROM_EMAIL_ADDRESS"]; } else { $_FROM_EMAIL_ADDRESS_ = null; }
            echo $_FROM_EMAIL_ADDRESS_;
            echo "
IP адрес: ";
            // line 10
            if (isset($context["FROM_IP_ADDRESS"])) { $_FROM_IP_ADDRESS_ = $context["FROM_IP_ADDRESS"]; } else { $_FROM_IP_ADDRESS_ = null; }
            echo $_FROM_IP_ADDRESS_;
            echo "
Профиль: ";
            // line 11
            if (isset($context["U_FROM_PROFILE"])) { $_U_FROM_PROFILE_ = $context["U_FROM_PROFILE"]; } else { $_U_FROM_PROFILE_ = null; }
            echo $_U_FROM_PROFILE_;
            echo "
";
        } else {
            // line 13
            echo "Сообщение отправлено гостем, который оставил следующую контактную информацию:
Имя: ";
            // line 14
            if (isset($context["FROM_USERNAME"])) { $_FROM_USERNAME_ = $context["FROM_USERNAME"]; } else { $_FROM_USERNAME_ = null; }
            echo $_FROM_USERNAME_;
            echo "
E-mail адрес: ";
            // line 15
            if (isset($context["FROM_EMAIL_ADDRESS"])) { $_FROM_EMAIL_ADDRESS_ = $context["FROM_EMAIL_ADDRESS"]; } else { $_FROM_EMAIL_ADDRESS_ = null; }
            echo $_FROM_EMAIL_ADDRESS_;
            echo "
IP адрес: ";
            // line 16
            if (isset($context["FROM_IP_ADDRESS"])) { $_FROM_IP_ADDRESS_ = $context["FROM_IP_ADDRESS"]; } else { $_FROM_IP_ADDRESS_ = null; }
            echo $_FROM_IP_ADDRESS_;
            echo "
";
        }
        // line 18
        echo "

Отправленное сообщение
~~~~~~~~~~~~~~~~~~~~~~~~~~~

";
        // line 23
        if (isset($context["MESSAGE"])) { $_MESSAGE_ = $context["MESSAGE"]; } else { $_MESSAGE_ = null; }
        echo $_MESSAGE_;
    }

    public function getTemplateName()
    {
        return "contact_admin.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  80 => 18,  74 => 16,  69 => 15,  64 => 14,  61 => 13,  55 => 11,  50 => 10,  45 => 9,  40 => 8,  37 => 7,  34 => 6,  28 => 4,  22 => 2,  19 => 1,);
    }
}
