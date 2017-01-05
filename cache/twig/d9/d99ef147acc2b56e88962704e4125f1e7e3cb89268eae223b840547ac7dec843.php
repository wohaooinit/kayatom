<?php

/* @phpbbmodders_adduser/user_added_welcome.txt */
class __TwigTemplate_a7c2e571b3e075ef5ef11bc9998671967f146559c73876ba38328478c97c72cf extends Twig_Template
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
        echo "Subject: You have been added to \"";
        if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
        echo $_SITENAME_;
        echo "\"

";
        // line 3
        if (isset($context["WELCOME_MSG"])) { $_WELCOME_MSG_ = $context["WELCOME_MSG"]; } else { $_WELCOME_MSG_ = null; }
        echo $_WELCOME_MSG_;
        echo "

Please keep this e-mail for your records. Your account information is as follows:

----------------------------
Username: ";
        // line 8
        if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
        echo $_USERNAME_;
        echo "

Board URL: ";
        // line 10
        if (isset($context["U_BOARD"])) { $_U_BOARD_ = $context["U_BOARD"]; } else { $_U_BOARD_ = null; }
        echo $_U_BOARD_;
        echo "

Password: ";
        // line 12
        if (isset($context["PASSWORD"])) { $_PASSWORD_ = $context["PASSWORD"]; } else { $_PASSWORD_ = null; }
        echo $_PASSWORD_;
        echo "
----------------------------

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

We strongly recommend that you change your password once you log into the forum.

";
        // line 19
        if (isset($context["EMAIL_SIG"])) { $_EMAIL_SIG_ = $context["EMAIL_SIG"]; } else { $_EMAIL_SIG_ = null; }
        echo $_EMAIL_SIG_;
    }

    public function getTemplateName()
    {
        return "@phpbbmodders_adduser/user_added_welcome.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  47 => 12,  41 => 10,  35 => 8,  26 => 3,  19 => 1,);
    }
}
/* Subject: You have been added to "{SITENAME}"*/
/* */
/* {WELCOME_MSG}*/
/* */
/* Please keep this e-mail for your records. Your account information is as follows:*/
/* */
/* ----------------------------*/
/* Username: {USERNAME}*/
/* */
/* Board URL: {U_BOARD}*/
/* */
/* Password: {PASSWORD}*/
/* ----------------------------*/
/* */
/* Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.*/
/* */
/* We strongly recommend that you change your password once you log into the forum.*/
/* */
/* {EMAIL_SIG}*/
