<?php

/* pages/personal_greeting_prompt.tpl */
class __TwigTemplate_54d68648c29967f70e62e52c9340cb46 extends Twig_Template
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
        echo "personal_greeting_prompt";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <fieldset>
    <div data-role=\"fieldcontain\">
      <label for=\"name_input\">What is your name?</label>
      <input type=\"text\" name=\"name\" id=\"name_input\" />
    </div>
    <button id=\"personal_greeting_button\" type=\"submit\" data-theme=\"b\" name=\"submit\" value=\"submit-value\">Submit</button>
  </fieldset>
";
    }

    // line 15
    public function block_greeting_tab_class($context, array $blocks = array())
    {
    }

    // line 17
    public function block_personal_greeting_tab_class($context, array $blocks = array())
    {
        echo "ui-btn-active ui-state-persist";
    }

    public function getTemplateName()
    {
        return "pages/personal_greeting_prompt.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  49 => 15,  48 => 11,  43 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
