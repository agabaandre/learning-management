<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/social/inbox.tpl */
class __TwigTemplate_4b71c1452a88ee5bda3ec408f44888466080382b2125445b485c75d7e135a234 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(api_find_template("layout/layout_1_col.tpl"), "default/social/inbox.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"social-network-menu\">
            ";
        // line 7
        echo ($context["social_avatar_block"] ?? null);
        echo "
            ";
        // line 8
        echo ($context["social_menu_block"] ?? null);
        echo "
        </div>
    </div>
    <div class=\"col-md-9\">
        ";
        // line 12
        echo ($context["social_right_content"] ?? null);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/social/inbox.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  50 => 8,  46 => 7,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/social/inbox.tpl", "/Applications/XAMPP/xamppfiles/htdocs/ihrislms/main/template/default/social/inbox.tpl");
    }
}
