<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.twig */
class __TwigTemplate_e9078d6fed77a878a9e99b49f8bdff51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo " <!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "    </head>
    <body>
        <div id=\"content\">
            ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 16
        $this->displayBlock('footer', $context, $blocks);
        // line 19
        echo "        </div>
    </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            <link rel=\"stylesheet\" href=\"style.css\"/>
            <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>
        ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "            
            ";
    }

    // line 16
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                &copy; Copyright 2011 by <a href=\"http://domain.invalid/\">you</a>.
            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  98 => 17,  94 => 16,  89 => 12,  85 => 11,  74 => 6,  71 => 5,  67 => 4,  61 => 19,  59 => 16,  55 => 14,  53 => 11,  48 => 8,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "C:\\wamp64\\www\\Conversor-de-moedas\\public\\view\\index.twig");
    }
}
