<?php

/* pages/greeting.tpl */
class __TwigTemplate_ac89c89e4534b9e07332328e857412db extends Twig_Template
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
        echo "greeting";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <h1>Hello</h1>
  <img src=\"http://iccm.org/pub/iccm_small_logo.jpg\"/>
";
    }

    // line 10
    public function block_greeting_tab_class($context, array $blocks = array())
    {
        echo "ui-btn-active ui-state-persist";
    }

    // line 12
    public function block_personal_greeting_tab_class($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "pages/greeting.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  44 => 10,  54 => 17,  49 => 15,  48 => 11,  43 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
