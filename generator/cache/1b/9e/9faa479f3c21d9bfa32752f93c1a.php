<?php

/* pages/test.tpl */
class __TwigTemplate_1b9e9faa479f3c21d9bfa32752f93c1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("page.tpl");

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'content' => array($this, 'block_content'),
            'greeting_tab_class' => array($this, 'block_greeting_tab_class'),
            'personal_greeting_tab_class' => array($this, 'block_personal_greeting_tab_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "page.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        echo "1";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo "2";
    }

    // line 7
    public function block_greeting_tab_class($context, array $blocks = array())
    {
        echo "3";
    }

    // line 9
    public function block_personal_greeting_tab_class($context, array $blocks = array())
    {
        echo "4";
    }

    public function getTemplateName()
    {
        return "pages/test.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  41 => 7,  35 => 5,  29 => 3,);
    }
}
