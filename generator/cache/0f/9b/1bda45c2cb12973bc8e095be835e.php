<?php

/* app.tpl */
class __TwigTemplate_0f9b1bda45c2cb12973bc8e095be835e extends Twig_Template
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
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <title>Hello!</title>
    <script type=\"text/javascript\" charset=\"utf-8\" src=\"cordova-1.8.1.js\"></script>
    <link rel=\"stylesheet\" href=\"http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css\" />
    <link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\" />
    <script src=\"http://code.jquery.com/jquery-1.7.1.min.js\"></script>
    <script src=\"http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js\"></script>
    <script src=\"event_bindings.js\"></script>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.00\" />
  </head>
  <body>
    ";
        // line 15
        echo "      ";
        if (isset($context["pages"])) { $_pages_ = $context["pages"]; } else { $_pages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_pages_);
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $_page_;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "    ";
        // line 17
        echo "  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "app.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  44 => 16,  17 => 1,  63 => 10,  58 => 9,  53 => 6,  48 => 1,  40 => 10,  36 => 9,  32 => 15,  30 => 6,  21 => 1,  47 => 9,  41 => 7,  35 => 5,  29 => 3,);
    }
}
