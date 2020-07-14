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

/* default/user_portal/classic_session.tpl */
class __TwigTemplate_7b2bfb9a6b596711e8d4bace66d17fa9325cde5215e99814c4c254da9e79fc5b extends \Twig\Template
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
        $context["session_image"] = Display::get_image("window_list.png", 32, $this->getAttribute(($context["row"] ?? null), "title", []));
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["session"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 4
            echo "    <div class=\"panel panel-default\">
        ";
            // line 5
            $context["collapsable"] = "";
            // line 6
            echo "        ";
            if ( !$this->getAttribute($context["row"], "show_simple_session_info", [])) {
                // line 7
                echo "            ";
                if ($this->getAttribute($context["row"], "course_list_session_style", [])) {
                    echo " ";
                    // line 8
                    echo "                <div class=\"panel-heading\">
                    ";
                    // line 9
                    if ((($this->getAttribute($context["row"], "course_list_session_style", []) == 1) || ($this->getAttribute($context["row"], "course_list_session_style", []) == 2))) {
                        echo " ";
                        // line 10
                        echo "                        ";
                        if ((($context["remove_session_url"] ?? null) == true)) {
                            // line 11
                            echo "                            ";
                            echo ($context["session_image"] ?? null);
                            echo " ";
                            echo $this->getAttribute($context["row"], "title", []);
                            echo "
                        ";
                        } else {
                            // line 13
                            echo "                            ";
                            // line 14
                            echo "                            ";
                            $context["session_link"] = (($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", []));
                            // line 15
                            echo "
                            ";
                            // line 16
                            if ((($this->getAttribute($context["row"], "course_list_session_style", []) == 2) && (twig_length_filter($this->env, $this->getAttribute($context["row"], "courses", [])) == 1))) {
                                // line 17
                                echo "                                ";
                                // line 18
                                echo "                                ";
                                $context["session_link"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "courses", []), 0, []), "link", []);
                                // line 19
                                echo "                            ";
                            }
                            // line 20
                            echo "
                            <a href=\"";
                            // line 21
                            echo ($context["session_link"] ?? null);
                            echo "\">
                                ";
                            // line 22
                            echo ($context["session_image"] ?? null);
                            echo " ";
                            echo $this->getAttribute($context["row"], "title", []);
                            echo "
                            </a>
                        ";
                        }
                        // line 25
                        echo "                    ";
                    } elseif (($this->getAttribute($context["row"], "course_list_session_style", []) == 3)) {
                        echo " ";
                        // line 26
                        echo "                        ";
                        // line 27
                        echo "                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#page-content\" href=\"#collapse_";
                        echo $this->getAttribute($context["row"], "id", []);
                        echo "\"
                           aria-expanded=\"false\">
                            ";
                        // line 29
                        echo ($context["session_image"] ?? null);
                        echo " ";
                        echo $this->getAttribute($context["row"], "title", []);
                        echo "
                        </a>
                        ";
                        // line 31
                        $context["collapsable"] = "collapse";
                        // line 32
                        echo "                    ";
                    }
                    // line 33
                    echo "                    ";
                    if ($this->getAttribute($context["row"], "show_actions", [])) {
                        // line 34
                        echo "                        <div class=\"pull-right\">
                            <a href=\"";
                        // line 35
                        echo (($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "session/resume_session.php?id_session=") . $this->getAttribute($context["row"], "id", []));
                        echo "\">
                                <img src=\"";
                        // line 36
                        echo Display::get_icon_path("edit.png", 22);
                        echo "\" width=\"22\" height=\"22\" alt=\"";
                        echo get_lang("Edit");
                        echo "\"
                                     title=\"";
                        // line 37
                        echo get_lang("Edit");
                        echo "\">
                            </a>
                        </div>
                    ";
                    }
                    // line 41
                    echo "                    ";
                    if ($this->getAttribute($context["row"], "collapsable_link", [])) {
                        // line 42
                        echo "                        <div class=\"pull-right\">
                            ";
                        // line 43
                        echo $this->getAttribute($context["row"], "collapsable_link", []);
                        echo "
                        </div>
                    ";
                    }
                    // line 46
                    echo "                </div>
            ";
                }
                // line 48
                echo "
            ";
                // line 49
                if ($this->getAttribute($context["row"], "collapsable_link", [])) {
                    // line 50
                    echo "                ";
                    if (($this->getAttribute($context["row"], "collapsed", []) == 1)) {
                        // line 51
                        echo "                    ";
                        $context["collapsable"] = "collapse";
                        // line 52
                        echo "                ";
                    }
                    // line 53
                    echo "            ";
                }
                // line 54
                echo "
            <div class=\"session panel-body ";
                // line 55
                echo ($context["collapsable"] ?? null);
                echo "\" id=\"collapse_";
                echo $this->getAttribute($context["row"], "id", []);
                echo "\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
                // line 58
                if ($this->getAttribute($context["row"], "show_description", [])) {
                    // line 59
                    echo "                            ";
                    echo $this->getAttribute($context["row"], "description", []);
                    echo "
                        ";
                }
                // line 61
                echo "                        <ul class=\"info-session list-inline\">
                            ";
                // line 62
                if ($this->getAttribute($context["row"], "coach_name", [])) {
                    // line 63
                    echo "                                <li>
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    ";
                    // line 65
                    echo $this->getAttribute($context["row"], "coach_name", []);
                    echo "
                                </li>
                            ";
                }
                // line 68
                echo "
                            ";
                // line 69
                if ($this->getAttribute($context["row"], "date", [])) {
                    // line 70
                    echo "                                <li>
                                    <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                                    ";
                    // line 72
                    echo $this->getAttribute($context["row"], "date", []);
                    echo "
                                </li>
                            ";
                } elseif ($this->getAttribute(                // line 74
$context["row"], "duration", [])) {
                    // line 75
                    echo "                                <li>
                                    <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                                    ";
                    // line 77
                    echo $this->getAttribute($context["row"], "duration", []);
                    echo "
                                </li>
                            ";
                }
                // line 80
                echo "                        </ul>
                        <div class=\"sessions-items\">
                        ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "courses", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 83
                    echo "                            <div class=\"courses\">
                                <div class=\"row\">
                                    <div class=\"col-md-2\">
                                        <a href=\"";
                    // line 86
                    echo $this->getAttribute($context["item"], "link", []);
                    echo "\" class=\"thumbnail\">
                                            <img class=\"img-responsive\"
                                                 src=\"";
                    // line 88
                    echo (($this->getAttribute($context["item"], "thumbnails", [])) ? ($this->getAttribute($context["item"], "thumbnails", [])) : ($this->getAttribute($context["item"], "icon", [])));
                    echo "\">
                                        </a>
                                    </div>
                                    <div class=\"col-md-10\">
                                        <h4>";
                    // line 92
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "</h4>
                                        <div class=\"list-teachers\">
                                            ";
                    // line 94
                    if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "coaches", [])) > 0)) {
                        // line 95
                        echo "                                                <img src=\"";
                        echo Display::get_icon_path("teacher.png", 16);
                        echo "\" width=\"16\" height=\"16\">
                                                ";
                        // line 96
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "coaches", []));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
                            // line 97
                            echo "                                                    ";
                            echo ((($this->getAttribute($context["loop"], "index", []) > 1)) ? (" | ") : (""));
                            echo "
                                                    <a href=\"";
                            // line 98
                            echo (($this->getAttribute(($context["_p"] ?? null), "web_ajax", []) . "user_manager.ajax.php?") . twig_urlencode_filter(["a" => "get_user_popup", "user_id" => $this->getAttribute($context["coach"], "user_id", []), "session_id" => $this->getAttribute($context["row"], "id", []), "course_id" => $this->getAttribute($context["item"], "real_id", [])]));
                            echo "\"
                                                       data-title=\"";
                            // line 99
                            echo $this->getAttribute($context["coach"], "full_name", []);
                            echo "\" class=\"ajax\">
                                                        ";
                            // line 100
                            echo $this->getAttribute($context["coach"], "firstname", []);
                            echo ", ";
                            echo $this->getAttribute($context["coach"], "lastname", []);
                            echo "
                                                    </a>
                                                ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 103
                        echo "                                            ";
                    }
                    // line 104
                    echo "                                        </div>
                                    </div>

                                    ";
                    // line 107
                    if ($this->getAttribute($context["item"], "student_info", [])) {
                        // line 108
                        echo "                                        ";
                        if ((( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "progress", [])) ||  !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "score", []))) ||  !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "certificate", [])))) {
                            // line 109
                            echo "                                            <div class=\"course-student-info\">
                                                <div class=\"student-info\">
                                                    ";
                            // line 111
                            if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "progress", []))) {
                                // line 112
                                echo "                                                        ";
                                echo sprintf(get_lang("StudentCourseProgressX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "progress", []));
                                echo "
                                                    ";
                            }
                            // line 114
                            echo "
                                                    ";
                            // line 115
                            if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "score", []))) {
                                // line 116
                                echo "                                                        ";
                                echo sprintf(get_lang("StudentCourseScoreX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "score", []));
                                echo "
                                                    ";
                            }
                            // line 118
                            echo "
                                                    ";
                            // line 119
                            if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "certificate", []))) {
                                // line 120
                                echo "                                                        ";
                                echo sprintf(get_lang("StudentCourseCertificateX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "certificate", []));
                                echo "
                                                    ";
                            }
                            // line 122
                            echo "                                                </div>
                                            </div>
                                        ";
                        }
                        // line 125
                        echo "                                    ";
                    }
                    // line 126
                    echo "                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 134
                echo "            <div class=\"panel-heading\">
                <a href=\"";
                // line 135
                echo (($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", []));
                echo "\">
                    <img id=\"session_img_";
                // line 136
                echo $this->getAttribute($context["row"], "id", []);
                echo "\" src=\"";
                echo Display::get_icon_path("window_list.png", 32);
                echo "\" alt=\"";
                echo $this->getAttribute($context["row"], "title", []);
                echo "\"
                         title=\"";
                // line 137
                echo $this->getAttribute($context["row"], "title", []);
                echo "\">
                    ";
                // line 138
                echo $this->getAttribute($context["row"], "title", []);
                echo "
                </a>
            </div>
            <!-- view simple info -->
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <a class=\"thumbnail\" href=\"";
                // line 145
                echo (($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", []));
                echo "\">
                            <img class=\"img-responsive\"
                                 src=\"";
                // line 147
                echo (($this->getAttribute($context["row"], "image", [])) ? (($this->getAttribute(($context["_p"] ?? null), "web_upload", []) . $this->getAttribute($context["row"], "image", []))) : (Display::get_icon_path("session_default.png")));
                echo "\"
                                 alt=\"";
                // line 148
                echo $this->getAttribute($context["row"], "title", []);
                echo "\" title=\"";
                echo $this->getAttribute($context["row"], "title", []);
                echo "\">
                        </a>
                    </div>
                    <div class=\"col-md-10\">
                        <div class=\"info-session\">
                            <p>";
                // line 153
                echo $this->getAttribute($context["row"], "subtitle", []);
                echo "</p>
                            ";
                // line 154
                if ($this->getAttribute($context["row"], "show_description", [])) {
                    // line 155
                    echo "                                <div class=\"description\">
                                    ";
                    // line 156
                    echo $this->getAttribute($context["row"], "description", []);
                    echo "
                                </div>
                            ";
                }
                // line 159
                echo "                        </div>
                    </div>
                </div>
            </div>
            <!-- end view simple info -->
        ";
            }
            // line 165
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/user_portal/classic_session.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  468 => 165,  460 => 159,  454 => 156,  451 => 155,  449 => 154,  445 => 153,  435 => 148,  431 => 147,  426 => 145,  416 => 138,  412 => 137,  404 => 136,  400 => 135,  397 => 134,  390 => 129,  382 => 126,  379 => 125,  374 => 122,  368 => 120,  366 => 119,  363 => 118,  357 => 116,  355 => 115,  352 => 114,  346 => 112,  344 => 111,  340 => 109,  337 => 108,  335 => 107,  330 => 104,  327 => 103,  308 => 100,  304 => 99,  300 => 98,  295 => 97,  278 => 96,  273 => 95,  271 => 94,  266 => 92,  259 => 88,  254 => 86,  249 => 83,  245 => 82,  241 => 80,  235 => 77,  231 => 75,  229 => 74,  224 => 72,  220 => 70,  218 => 69,  215 => 68,  209 => 65,  205 => 63,  203 => 62,  200 => 61,  194 => 59,  192 => 58,  184 => 55,  181 => 54,  178 => 53,  175 => 52,  172 => 51,  169 => 50,  167 => 49,  164 => 48,  160 => 46,  154 => 43,  151 => 42,  148 => 41,  141 => 37,  135 => 36,  131 => 35,  128 => 34,  125 => 33,  122 => 32,  120 => 31,  113 => 29,  107 => 27,  105 => 26,  101 => 25,  93 => 22,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  78 => 17,  76 => 16,  73 => 15,  70 => 14,  68 => 13,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  47 => 7,  44 => 6,  42 => 5,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/user_portal/classic_session.tpl", "/Applications/XAMPP/xamppfiles/htdocs/ihrislms/main/template/default/user_portal/classic_session.tpl");
    }
}
