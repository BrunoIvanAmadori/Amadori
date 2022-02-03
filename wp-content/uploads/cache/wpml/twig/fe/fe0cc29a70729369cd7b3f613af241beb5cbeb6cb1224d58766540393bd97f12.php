<?php

/* box.twig */
class __TwigTemplate_ba990e7c9544ba3d88e4b3909a20272be614d1d54349ce5164c5375fcee2e1c4 extends Twig_Template
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
        echo "<div class=\"wpml-box wpml-wc-box js-wpml-wc\">
\t\t<input type=\"hidden\" name=\"wpml_words_count_panel_nonce\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nonces"] ?? null), "wpml_words_count_panel_nonce", array()));
        echo "\">
\t\t<input type=\"hidden\" name=\"wpml_words_count_chunk_size\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["wc_chunk_size"] ?? null));
        echo "\">

\t\t<div class=\"wpml-wc-messages\">
\t\t\t<p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "message", array()), "html", null, true);
        echo "</p>
\t\t</div>
\t\t<div class=\"wpml-wc-buttons\">
\t\t\t<p>
\t\t\t\t<a class=\"button button-secondary js-wc-dialog-init\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "openDialogButtonURL", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "openDialogButton", array()));
        echo "\">
\t\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "openDialogButton", array()), "html", null, true);
        echo "
\t\t\t\t</a>
\t\t\t</p>

\t\t\t<p>
\t\t\t\t<small>
\t\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "callToAction", array()), "Text", array()), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "callToAction", array()), "linkURL", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"wpml-external-link\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "callToAction", array()), "linkText", array()));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "callToAction", array()), "linkText", array()), "html", null, true);
        echo "</a>
\t\t\t\t</small>
\t\t\t</p>
\t\t</div>
\t\t";
        // line 21
        $this->loadTemplate("dialog.twig", "box.twig", 21)->display(array_merge($context, ($context["dialog"] ?? null)));
        // line 22
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  67 => 21,  54 => 17,  45 => 11,  39 => 10,  32 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"wpml-box wpml-wc-box js-wpml-wc\">
\t\t<input type=\"hidden\" name=\"wpml_words_count_panel_nonce\" value=\"{{ nonces.wpml_words_count_panel_nonce|e }}\">
\t\t<input type=\"hidden\" name=\"wpml_words_count_chunk_size\" value=\"{{ wc_chunk_size|e }}\">

\t\t<div class=\"wpml-wc-messages\">
\t\t\t<p>{{ strings.message }}</p>
\t\t</div>
\t\t<div class=\"wpml-wc-buttons\">
\t\t\t<p>
\t\t\t\t<a class=\"button button-secondary js-wc-dialog-init\" href=\"{{ strings.openDialogButtonURL }}\" title=\"{{ strings.openDialogButton|e }}\">
\t\t\t\t\t{{ strings.openDialogButton }}
\t\t\t\t</a>
\t\t\t</p>

\t\t\t<p>
\t\t\t\t<small>
\t\t\t\t\t{{ strings.callToAction.Text }} <a href=\"{{ strings.callToAction.linkURL }}\" target=\"_blank\" class=\"wpml-external-link\" title=\"{{ strings.callToAction.linkText|e }}\">{{ strings.callToAction.linkText }}</a>
\t\t\t\t</small>
\t\t\t</p>
\t\t</div>
\t\t{% include 'dialog.twig' with dialog %}
</div>", "box.twig", "/var/www/html/wp-content/plugins/wpml-translation-management/templates/words-count/box.twig");
    }
}
