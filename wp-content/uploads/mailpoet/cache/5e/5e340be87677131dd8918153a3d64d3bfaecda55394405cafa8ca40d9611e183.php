<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* newsletter/templates/blocks/social/settingsIconSelector.hbs */
class __TwigTemplate_521e5b1e081dfd27b95a79e0660c94323e684225a5a0de119f24d4c1946a0889 extends \MailPoetVendor\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"mailpoet_social_icon_selector_contents\"></div>
<input type=\"button\" class=\"button button-secondary mailpoet_button_full mailpoet_add_social_icon\" data-automation-id='social_select_another_network' value=\"";
        // line 2
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Add another social network");
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/social/settingsIconSelector.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/blocks/social/settingsIconSelector.hbs", "/homepages/7/d886399562/htdocs/clickandbuilds/TheShoeRack/wp-content/plugins/mailpoet/views/newsletter/templates/blocks/social/settingsIconSelector.hbs");
    }
}
