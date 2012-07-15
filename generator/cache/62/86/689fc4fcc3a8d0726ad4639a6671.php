<?php

/* page.tpl */
class __TwigTemplate_6286689fc4fcc3a8d0726ad4639a6671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'content' => array($this, 'block_content'),
            'greeting_tab_class' => array($this, 'block_greeting_tab_class'),
            'personal_greeting_tab_class' => array($this, 'block_personal_greeting_tab_class'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div data-role=\"page\" id=\"";
        $this->displayBlock('id', $context, $blocks);
        echo "\"> 
  <div data-role=\"header\" data-position=\"fixed\">
     This is the Header
  </div> 
  <div data-role=\"content\">
    ";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "  </div>
  <div data-role=\"footer\" data-position=\"fixed\">
    <a href=\"#greeting\" data-role=\"button\" data-icon=\"home\" class=\"";
        // line 9
        $this->displayBlock('greeting_tab_class', $context, $blocks);
        echo "\">Greeting</a>
    <a href=\"#personal_greeting_prompt\" data-role=\"button\" data-icon=\"info\" class=\"";
        // line 10
        $this->displayBlock('personal_greeting_tab_class', $context, $blocks);
        echo "\">Personal Greeting</a>
  </div>  
</div>
";
    }

    // line 1
    public function block_id($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
    }

    // line 9
    public function block_greeting_tab_class($context, array $blocks = array())
    {
    }

    // line 10
    public function block_personal_greeting_tab_class($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "page.tpl";
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  58 => 9,  53 => 6,  48 => 1,  40 => 10,  36 => 9,  32 => 7,  30 => 6,  21 => 1,  47 => 9,  41 => 7,  35 => 5,  29 => 3,);
    }
}
