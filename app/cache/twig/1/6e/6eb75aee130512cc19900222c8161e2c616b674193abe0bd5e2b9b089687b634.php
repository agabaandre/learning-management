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

/* default/social/user_block.tpl */
class __TwigTemplate_8cf777c0d1f349d3a83b97b27d6e0b24db9895d85e831c86d5d1b9171f965538 extends \Twig\Template
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
        echo "<div class=\"sidebar-avatar\">
    <div class=\"panel-group\" id=\"sn-avatar\" role=\"tablist\" aria-multiselectable=\"true\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\" id=\"heading-sn\">
                <h4 class=\"panel-title\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#sn-avatar\"
                       href=\"#sn-avatar-one\" aria-expanded=\"true\" aria-controls=\"sn-avatar-one\">
                    ";
        // line 8
        echo get_lang("Profile");
        echo "
                    </a>
                </h4>
            </div>
            <div id=\"sn-avatar-one\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"heading-sn\">
                <div class=\"panel-body\">
                    <div class=\"area-avatar\">
                    ";
        // line 15
        echo ($context["social_avatar_block"] ?? null);
        echo "
                        <!-- TYPE USER PROFILE -->
                        ";
        // line 17
        if (($this->getAttribute(($context["user"] ?? null), "status", []) == 5)) {
            // line 18
            echo "                            <div class=\"avatar-icon\">
                                ";
            // line 19
            if ($this->getAttribute(($context["user"] ?? null), "has_certificates", [])) {
                // line 20
                echo "                                    <img src=\"";
                echo $this->getAttribute(($context["_p"] ?? null), "web_img", []);
                echo "icons/svg/identifier_graduated.svg\" width=\"32px\" height=\"32px\">
                                ";
            } else {
                // line 22
                echo "                                    <img src=\"";
                echo $this->getAttribute(($context["_p"] ?? null), "web_img", []);
                echo "icons/svg/identifier_student.svg\" width=\"32px\" height=\"32px\">
                                ";
            }
            // line 24
            echo "                            </div>
                        ";
        } elseif ((($this->getAttribute(        // line 25
($context["user"] ?? null), "status", []) == 1) || ($this->getAttribute(($context["user"] ?? null), "status", []) == 17))) {
            // line 26
            echo "                            <div class=\"avatar-icon\">
                                ";
            // line 27
            if ($this->getAttribute(($context["user"] ?? null), "is_admin", [])) {
                // line 28
                echo "                                    <img src=\"";
                echo $this->getAttribute(($context["_p"] ?? null), "web_img", []);
                echo "icons/svg/identifier_admin.svg\" width=\"32px\" height=\"32px\">
                                ";
            } else {
                // line 30
                echo "                                    <img src=\"";
                echo $this->getAttribute(($context["_p"] ?? null), "web_img", []);
                echo "icons/svg/identifier_teacher.svg\" width=\"32px\" height=\"32px\">
                                ";
            }
            // line 32
            echo "                            </div>
                        ";
        }
        // line 34
        echo "                        <!-- END TYPE PROFILE -->

                        ";
        // line 36
        if (($context["show_language_flag"] ?? null)) {
            // line 37
            echo "                        <!-- LM -->
                        <div class=\"avatar-lm\">
                            ";
            // line 39
            if ($this->getAttribute(($context["user"] ?? null), "language", [])) {
                // line 40
                echo "                                ";
                if (($this->getAttribute($this->getAttribute(($context["user"] ?? null), "language", []), "code", []) == "fr")) {
                    // line 41
                    echo "                                    <img src=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "web/assets/flag-icon-css/flags/4x3/fr.svg\" width=\"36px\">
                                ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 42
($context["user"] ?? null), "language", []), "code", []) == "de")) {
                    // line 43
                    echo "                                    <img src=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "web/assets/flag-icon-css/flags/4x3/de.svg\" width=\"36px\">
                                ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 44
($context["user"] ?? null), "language", []), "code", []) == "es")) {
                    // line 45
                    echo "                                    <img src=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "web/assets/flag-icon-css/flags/4x3/es.svg\" width=\"36px\">
                                ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 46
($context["user"] ?? null), "language", []), "code", []) == "it")) {
                    // line 47
                    echo "                                    <img src=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "web/assets/flag-icon-css/flags/4x3/it.svg\" width=\"36px\">
                                ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 48
($context["user"] ?? null), "language", []), "code", []) == "pl")) {
                    // line 49
                    echo "                                    <img src=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "web/assets/flag-icon-css/flags/4x3/pl.svg\" width=\"36px\">
                                ";
                }
                // line 51
                echo "                            ";
            }
            // line 52
            echo "                        </div>
                        <!-- END LM -->
                        <!-- LC -->
                        <div class=\"avatar-lc\">
                            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extra_info"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 57
                echo "                                ";
                if (($this->getAttribute($context["item"], "variable", []) == "langue_cible")) {
                    // line 58
                    echo "                                    ";
                    if (($this->getAttribute($context["item"], "value", []) == "French2")) {
                        // line 59
                        echo "                                        <img src=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                        echo "web/assets/flag-icon-css/flags/4x3/fr.svg\" width=\"36px\">
                                    ";
                    } elseif (($this->getAttribute(                    // line 60
$context["item"], "value", []) == "German2")) {
                        // line 61
                        echo "                                        <img src=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                        echo "web/assets/flag-icon-css/flags/4x3/de.svg\" width=\"36px\">
                                    ";
                    } elseif (($this->getAttribute(                    // line 62
$context["item"], "value", []) == "Spanish")) {
                        // line 63
                        echo "                                        <img src=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                        echo "web/assets/flag-icon-css/flags/4x3/es.svg\" width=\"36px\">
                                    ";
                    } elseif (($this->getAttribute(                    // line 64
$context["item"], "value", []) == "Italian")) {
                        // line 65
                        echo "                                        <img src=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                        echo "web/assets/flag-icon-css/flags/4x3/it.svg\" width=\"36px\">
                                    ";
                    } elseif (($this->getAttribute(                    // line 66
$context["item"], "value", []) == "Polish")) {
                        // line 67
                        echo "                                        <img src=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                        echo "web/assets/flag-icon-css/flags/4x3/pl.svg\" width=\"36px\">
                                    ";
                    } elseif (($this->getAttribute(                    // line 68
$context["item"], "value", []) == "English")) {
                        // line 69
                        echo "                                        <img src=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                        echo "web/assets/flag-icon-css/flags/4x3/gb.svg\" width=\"36px\">
                                    ";
                    }
                    // line 71
                    echo "                                ";
                }
                // line 72
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                        </div>
                        <!-- END LC -->
                        ";
        }
        // line 76
        echo "
                    </div>
                    ";
        // line 79
        echo "                    <ul class=\"list-user-data\">
                        <li class=\"item item-name\">
                            <h5>";
        // line 81
        echo $this->getAttribute(($context["user"] ?? null), "complete_name", []);
        echo " </h5>
                        </li>
                        ";
        // line 83
        if (($this->getAttribute(($context["_u"] ?? null), "is_admin", []) == 1)) {
            // line 84
            echo "                            <li class=\"item\">
                                <a href=\"";
            // line 85
            echo $this->getAttribute(($context["_p"] ?? null), "web", []);
            echo "main/admin/user_edit.php?user_id=";
            echo $this->getAttribute(($context["user"] ?? null), "id", []);
            echo "\">
                                    <img src=\"";
            // line 86
            echo Display::get_icon_path("edit.png");
            echo "\" alt=\"";
            echo get_lang("Edit");
            echo "\">
                                </a>
                            </li>
                        ";
        }
        // line 90
        echo "                        ";
        if (($context["show_full_profile"] ?? null)) {
            // line 91
            echo "                            ";
            if ($this->getAttribute(($context["user"] ?? null), "email", [])) {
                // line 92
                echo "                            <li class=\"item\">
                                <a href=\"";
                // line 93
                echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                echo "main/messages/new_message.php\">
                                <img src=\"";
                // line 94
                echo Display::get_icon_path("instant_message.png");
                echo "\" alt=\"";
                echo get_lang("Email");
                echo "\">
                                    <div class=\"email-overflow\">";
                // line 95
                echo $this->getAttribute(($context["user"] ?? null), "email", []);
                echo "</div>
                                </a>
                            </li>
                            ";
            }
            // line 99
            echo "
                            ";
            // line 100
            if (($context["vcard_user_link"] ?? null)) {
                // line 101
                echo "                                <li class=\"item\">
                                    <a href=\"";
                // line 102
                echo ($context["vcard_user_link"] ?? null);
                echo "\">
                                    <img src=\"";
                // line 103
                echo Display::get_icon_path("vcard.png", 16);
                echo "\" alt=\"";
                echo get_lang("BusinessCard");
                echo "\" width=\"16\" height=\"16\">
                                    ";
                // line 104
                echo get_lang("BusinessCard");
                echo "
                                    </a>
                                </li>
                            ";
            }
            // line 108
            echo "
                            ";
            // line 109
            $context["skype_account"] = "";
            // line 110
            echo "                            ";
            $context["linkedin_url"] = "";
            // line 111
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? null), "extra", []));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 112
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["extra"], "value", []), "getField", [], "method"), "getVariable", [], "method") == "skype")) {
                    // line 113
                    echo "                                    ";
                    $context["skype_account"] = $this->getAttribute($this->getAttribute($context["extra"], "value", []), "getValue", [], "method");
                    // line 114
                    echo "                                ";
                }
                // line 115
                echo "
                                ";
                // line 116
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["extra"], "value", []), "getField", [], "method"), "getVariable", [], "method") == "linkedin_url")) {
                    // line 117
                    echo "                                    ";
                    $context["linkedin_url"] = $this->getAttribute($this->getAttribute($context["extra"], "value", []), "getValue", [], "method");
                    // line 118
                    echo "                                ";
                }
                // line 119
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "
                            ";
            // line 121
            if (((api_get_setting("allow_show_skype_account") == "true") &&  !twig_test_empty(($context["skype_account"] ?? null)))) {
                // line 122
                echo "                                <li class=\"item\">
                                    <a href=\"skype:";
                // line 123
                echo ($context["skype_account"] ?? null);
                echo "?chat\">
                                        <span class=\"fa fa-skype fa-fw\" aria-hidden=\"true\"></span> ";
                // line 124
                echo get_lang("Skype");
                echo "
                                    </a>
                                </li>
                            ";
            }
            // line 128
            echo "
                            ";
            // line 129
            if (((api_get_setting("allow_show_linkedin_url") == "true") &&  !twig_test_empty(($context["linkedin_url"] ?? null)))) {
                // line 130
                echo "                                <li class=\"item\">
                                    <a href=\"";
                // line 131
                echo ($context["linkedin_url"] ?? null);
                echo "\" target=\"_blank\">
                                        <span class=\"fa fa-linkedin fa-fw\" aria-hidden=\"true\"></span> ";
                // line 132
                echo get_lang("LinkedIn");
                echo "
                                    </a>
                                </li>
                            ";
            }
            // line 136
            echo "                        ";
        }
        // line 137
        echo "                        ";
        if ((($context["chat_enabled"] ?? null) == 1)) {
            // line 138
            echo "                            ";
            if (($this->getAttribute(($context["user"] ?? null), "user_is_online_in_chat", []) != 0)) {
                // line 139
                echo "                                ";
                if ((($context["user_relation"] ?? null) == ($context["user_relation_type_friend"] ?? null))) {
                    // line 140
                    echo "                                    <li class=\"item\">
                                        <a onclick=\"javascript:chatWith('";
                    // line 141
                    echo $this->getAttribute(($context["user"] ?? null), "id", []);
                    echo "', '";
                    echo $this->getAttribute(($context["user"] ?? null), "complete_name", []);
                    echo "', '";
                    echo $this->getAttribute(($context["user"] ?? null), "user_is_online", []);
                    echo "','";
                    echo $this->getAttribute(($context["user"] ?? null), "avatar_small", []);
                    echo "')\" href=\"javascript:void(0);\">
                                            <img src=\"";
                    // line 142
                    echo Display::get_icon_path("online.png");
                    echo "\" alt=\"";
                    echo get_lang("Online");
                    echo "\">
                                            ";
                    // line 143
                    echo get_lang("Chat");
                    echo " (";
                    echo get_lang("Online");
                    echo ")
                                        </a>
                                    </li>
                                ";
                }
                // line 147
                echo "                            ";
            }
            // line 148
            echo "                        ";
        }
        // line 149
        echo "                    <dl class=\"list-info\">
                        ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extra_info"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 151
            echo "                            ";
            if (($this->getAttribute($context["item"], "variable", []) != "langue_cible")) {
                // line 152
                echo "                            <dt>";
                echo $this->getAttribute($context["item"], "label", []);
                echo ":</dt>
                            <dd>";
                // line 153
                echo $this->getAttribute($context["item"], "value", []);
                echo "</dd>
                            ";
            }
            // line 155
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                    </dl>

                    ";
        // line 158
        if ( !twig_test_empty(($context["profile_edition_link"] ?? null))) {
            // line 159
            echo "                    <li class=\"item\">
                        <a class=\"btn btn-default btn-sm btn-block\" href=\"";
            // line 160
            echo ($context["profile_edition_link"] ?? null);
            echo "\">
                        <em class=\"fa fa-edit\"></em>";
            // line 161
            echo get_lang("EditProfile");
            echo "
                        </a>
                    </li>
                    ";
        }
        // line 165
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "default/social/user_block.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 165,  468 => 161,  464 => 160,  461 => 159,  459 => 158,  455 => 156,  449 => 155,  444 => 153,  439 => 152,  436 => 151,  432 => 150,  429 => 149,  426 => 148,  423 => 147,  414 => 143,  408 => 142,  398 => 141,  395 => 140,  392 => 139,  389 => 138,  386 => 137,  383 => 136,  376 => 132,  372 => 131,  369 => 130,  367 => 129,  364 => 128,  357 => 124,  353 => 123,  350 => 122,  348 => 121,  345 => 120,  339 => 119,  336 => 118,  333 => 117,  331 => 116,  328 => 115,  325 => 114,  322 => 113,  319 => 112,  314 => 111,  311 => 110,  309 => 109,  306 => 108,  299 => 104,  293 => 103,  289 => 102,  286 => 101,  284 => 100,  281 => 99,  274 => 95,  268 => 94,  264 => 93,  261 => 92,  258 => 91,  255 => 90,  246 => 86,  240 => 85,  237 => 84,  235 => 83,  230 => 81,  226 => 79,  222 => 76,  217 => 73,  211 => 72,  208 => 71,  202 => 69,  200 => 68,  195 => 67,  193 => 66,  188 => 65,  186 => 64,  181 => 63,  179 => 62,  174 => 61,  172 => 60,  167 => 59,  164 => 58,  161 => 57,  157 => 56,  151 => 52,  148 => 51,  142 => 49,  140 => 48,  135 => 47,  133 => 46,  128 => 45,  126 => 44,  121 => 43,  119 => 42,  114 => 41,  111 => 40,  109 => 39,  105 => 37,  103 => 36,  99 => 34,  95 => 32,  89 => 30,  83 => 28,  81 => 27,  78 => 26,  76 => 25,  73 => 24,  67 => 22,  61 => 20,  59 => 19,  56 => 18,  54 => 17,  49 => 15,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/social/user_block.tpl", "/Applications/XAMPP/xamppfiles/htdocs/ihrislms/main/template/default/social/user_block.tpl");
    }
}
