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

/* default/social/avatar_block.tpl */
class __TwigTemplate_91e23b2963db36d10ea0e382625ed7eabccaec8975ae9edda36bf86dfdc101dc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"sm-groups\">
    <div class=\"social-profile text-center\">
        ";
        // line 3
        if (($context["show_group"] ?? null)) {
            // line 4
            echo "            <img src=\"";
            echo $this->getAttribute(($context["user_group_image"] ?? null), "file", []);
            echo "\" class=\"img-responsive\">
            <div class=\"caption\">
                <h4 class=\"group-title\">
                    <a href=\"";
            // line 7
            echo (($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "social/group_view.php?id=") . ($context["group_id"] ?? null));
            echo "\">";
            echo $this->getAttribute(($context["user_group"] ?? null), "name", []);
            echo "</a>
                </h4>
                <p class=\"group-description\">";
            // line 9
            echo $this->getAttribute(($context["user_group"] ?? null), "description", []);
            echo "</p>
                ";
            // line 10
            if (($context["user_is_group_admin"] ?? null)) {
                // line 11
                echo "                    <div id=\"edit_image\" class=\"buttom-subscribed\">
                        <a class=\"btn btn-default\" href=\"";
                // line 12
                echo (($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "social/group_edit.php?id=") . ($context["group_id"] ?? null));
                echo "\">
                            ";
                // line 13
                echo get_lang("EditGroup");
                echo "
                        </a>
                    </div>
                    <br />
                ";
            }
            // line 18
            echo "            </div>
        ";
        } elseif (        // line 19
($context["show_user"] ?? null)) {
            // line 20
            echo "            <a href=\"";
            echo $this->getAttribute(($context["user_image"] ?? null), "big", []);
            echo "\" class=\"expand-image\">
                <img class=\"img-responsive img-circle\" src=\"";
            // line 21
            echo $this->getAttribute(($context["user_image"] ?? null), "big", []);
            echo "\" alt=\"";
            echo get_lang("UserPicture");
            echo "\">
            </a>
        ";
        }
        // line 24
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/social/avatar_block.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  81 => 21,  76 => 20,  74 => 19,  71 => 18,  63 => 13,  59 => 12,  56 => 11,  54 => 10,  50 => 9,  43 => 7,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/social/avatar_block.tpl", "/Applications/XAMPP/xamppfiles/htdocs/ihrislms/main/template/default/social/avatar_block.tpl");
    }
}
