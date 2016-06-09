<?php

/* appmainBundle:Default:addIngredients.html.twig */
class __TwigTemplate_cde6fb429c15740d9028071c49875ac438712de02b1a0bd4117c7a9023bf6b5f extends Twig_Template
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
        $__internal_79ada434fe436ec1792eb7c16c652380306bcd6a4eeb06649b1f777540747bcd = $this->env->getExtension("native_profiler");
        $__internal_79ada434fe436ec1792eb7c16c652380306bcd6a4eeb06649b1f777540747bcd->enter($__internal_79ada434fe436ec1792eb7c16c652380306bcd6a4eeb06649b1f777540747bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "appmainBundle:Default:addIngredients.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/dropzone.js"), "html", null, true);
        echo "\"></script>
<div id=\"addIngredients\">
\t<div class=\"row\">
  \t\t<div class=\"addBox\">
\t\t\t<div class=\"thumbnail\">
\t\t\t\t<div class=\"typeahead-container\">
\t\t\t\t \t<div class=\"typeahead-field\">
\t\t\t\t\t\t<span class=\"typeahead-query\">
\t\t                \t<input id=\"addIngredientsName\" name=\"addIngredientsName\" type=\"search\" placeholder=\"Name of ingredients\" autocomplete=\"off\">
\t\t            \t</span>
\t            \t</div>
\t            </div>
      \t\t\t<form action=\"/upload\" class=\"ingredientThumbnail dropzone needsclick dz-clickable\" id=\"addThumbnail\">
  \t\t\t\t\t<div class=\"dz-message needsclick\">
    \t\t\t\t\tDrop pictures here to add ingredients thumbnail.<br>
  \t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"typeahead-container\">
\t\t\t\t \t<div class=\"typeahead-field\">
\t\t\t\t\t\t<span class=\"typeahead-query\">
\t\t                \t<input id=\"addOriginPlace\" name=\"addOriginPlace\" type=\"search\" placeholder=\"Origin place of ingredients\" autocomplete=\"off\">
\t\t            \t</span>
\t            \t</div>
\t            </div>
\t            <div class=\"inputTitle\">Add tag to categorize ingredients:</div>
\t            <div class=\"typeahead-container\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"ingredientsTags\" value=\"\" id=\"ingredientsTags\">
\t\t\t\t</div>
\t            <div class=\"submitButton\">
        \t\t\t<a class=\"btn btn-default\" role=\"button\">Add ingredients</a>
       \t\t\t</div>
       \t\t</div>
      \t</div>
    </div>
</div>
";
        // line 36
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "66a5242_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66a5242_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/66a5242_ingredients_1.js");
            // line 37
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "66a5242"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66a5242") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/66a5242.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        
        $__internal_79ada434fe436ec1792eb7c16c652380306bcd6a4eeb06649b1f777540747bcd->leave($__internal_79ada434fe436ec1792eb7c16c652380306bcd6a4eeb06649b1f777540747bcd_prof);

    }

    public function getTemplateName()
    {
        return "appmainBundle:Default:addIngredients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 37,  61 => 36,  22 => 1,);
    }
}
