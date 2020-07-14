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

/* default/mail_editor/email_link.js.tpl */
class __TwigTemplate_bfd060408d985a291c33d1ba62a93ac8106b7fae93fcd0416b951699fef24ee7 extends \Twig\Template
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
        echo "<script>
/* For licensing terms, see /license.txt */
/*
 * JS library to deal with event handlers.
 * This script needs to be included from a script where the global include file has already been loaded.
 * @package chamilo.inc.lib.javascript
 * @author Yannick Warnier
 * @author Julio Montoya - Adding twig support
 */

/*
 * Assigns any event handler to any element
 * @param\tobject\tElement on which the event is added
 * @param\tstring\tName of event
 * @param\tstring\tFunction to trigger on event
 * @param\tboolean\tCapture the event and prevent
 */

function addEvent(elm, evType, fn, useCapture) {
    if (elm.addEventListener){
\t\telm.addEventListener(evType, fn, useCapture);
\t\treturn true;
\t} else if(elm.attachEvent) {
\t\tvar r = elm.attachEvent('on' + evType, fn);
\t\treturn r;
\t} else {
\t\telm['on' + evType] = fn;
\t}
}

/*
 * Adds the event listener
 */
function addListeners(e) {
\tvar my_links = \$('.clickable_email_link');    
\tfor(var i=0;i < my_links.length;i++) {
\t\taddEvent(my_links[i],'click',loadEmailEditor,false);
\t}
}

/*
 * Loads a specific page on event triggering
 */
function loadEmailEditor(e) {
\tvar el;
\tif(window.event && window.event.srcElement) {
\t\tel = window.event.srcElement;
\t}
\tif (e && e.target) {
\t\tel = e.target;
\t}
\tif(!el) {
\t\treturn;
\t}
\t//el is now my link object, so I can get el.href here to load the new window
\tvar link = el.href.replace('mailto:','');
\tdocument.location = \"";
        // line 57
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "inc/email_editor.php?dest=\" + link;
\t//cancel default link action
\tif (window.event && window.event.returnValue){
\t\twindow.event.returnValue = false;
\t}
\tif(e && e.preventDefault){
\t\te.preventDefault();
\t}
}

\$(document).ready(function() {
    addEvent(window,'load',addListeners,false);
});

</script>";
    }

    public function getTemplateName()
    {
        return "default/mail_editor/email_link.js.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 57,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/mail_editor/email_link.js.tpl", "/Applications/XAMPP/xamppfiles/htdocs/ihrislms/main/template/default/mail_editor/email_link.js.tpl");
    }
}
