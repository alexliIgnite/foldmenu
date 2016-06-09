<?php

/* appmainBundle:Default:index.html.twig */
class __TwigTemplate_e4803f2ee04b48f2936dade6edfbc7c98267ba9c5b27ece97ca57f9d325c9bb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("appmainBundle::base.html.twig", "appmainBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'tuid' => array($this, 'block_tuid'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "appmainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa3fab7d450e92edfd6c153836b727104a2e1bd7c65530bbc5685c4ee39ee633 = $this->env->getExtension("native_profiler");
        $__internal_aa3fab7d450e92edfd6c153836b727104a2e1bd7c65530bbc5685c4ee39ee633->enter($__internal_aa3fab7d450e92edfd6c153836b727104a2e1bd7c65530bbc5685c4ee39ee633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "appmainBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa3fab7d450e92edfd6c153836b727104a2e1bd7c65530bbc5685c4ee39ee633->leave($__internal_aa3fab7d450e92edfd6c153836b727104a2e1bd7c65530bbc5685c4ee39ee633_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_79662f3ca6cbeddfe76343291c87c1db95af5f3d48becdbc96a78bf808bed099 = $this->env->getExtension("native_profiler");
        $__internal_79662f3ca6cbeddfe76343291c87c1db95af5f3d48becdbc96a78bf808bed099->enter($__internal_79662f3ca6cbeddfe76343291c87c1db95af5f3d48becdbc96a78bf808bed099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FoldMenu -- Home Made For Share ";
        
        $__internal_79662f3ca6cbeddfe76343291c87c1db95af5f3d48becdbc96a78bf808bed099->leave($__internal_79662f3ca6cbeddfe76343291c87c1db95af5f3d48becdbc96a78bf808bed099_prof);

    }

    // line 3
    public function block_tuid($context, array $blocks = array())
    {
        $__internal_fe3e34b05bb9a60a2646f13930593898312cedd28ec1e3d496233a3291f74ab1 = $this->env->getExtension("native_profiler");
        $__internal_fe3e34b05bb9a60a2646f13930593898312cedd28ec1e3d496233a3291f74ab1->enter($__internal_fe3e34b05bb9a60a2646f13930593898312cedd28ec1e3d496233a3291f74ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tuid"));

        
        $__internal_fe3e34b05bb9a60a2646f13930593898312cedd28ec1e3d496233a3291f74ab1->leave($__internal_fe3e34b05bb9a60a2646f13930593898312cedd28ec1e3d496233a3291f74ab1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_489814bd9da65156edbc76cd9428822a06a8efea0eb0a24571bad77fda10fadb = $this->env->getExtension("native_profiler");
        $__internal_489814bd9da65156edbc76cd9428822a06a8efea0eb0a24571bad77fda10fadb->enter($__internal_489814bd9da65156edbc76cd9428822a06a8efea0eb0a24571bad77fda10fadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t\t<div class=\"panel panel-default\" id=\"ingredients\">
\t  \t\t<div class=\"panel-heading\">
\t  \t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr>
\t  \t\t\t\t<td>";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3d83536_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3d83536_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/3d83536_logoWeb_1.png");
            // line 9
            echo "\t  \t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" class=\"logoSmall\"/>";
        } else {
            // asset "3d83536"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3d83536") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/3d83536.png");
            echo "\t  \t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" class=\"logoSmall\"/>";
        }
        unset($context["asset_url"]);
        echo "</td>
\t  \t\t\t\t<td>";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5f355d9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5f355d9_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/5f355d9_igd_1.png");
            // line 11
            echo "\t  \t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" class=\"igd-on\"/>";
        } else {
            // asset "5f355d9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5f355d9") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/5f355d9.png");
            echo "\t  \t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" class=\"igd-on\"/>";
        }
        unset($context["asset_url"]);
        echo "</td>
\t  \t\t\t\t<td style=\"padding: 15px\"><strong>Ingredients</strong></td>
\t  \t\t\t</tr></table>
\t  \t\t</div>
\t  \t\t<div>
\t    \t\t";
        // line 16
        $this->loadTemplate("appmainBundle:Default:addIngredients.html.twig", "appmainBundle:Default:index.html.twig", 16)->display($context);
        // line 17
        echo "\t  \t\t</div>
\t\t</div>
";
        
        $__internal_489814bd9da65156edbc76cd9428822a06a8efea0eb0a24571bad77fda10fadb->leave($__internal_489814bd9da65156edbc76cd9428822a06a8efea0eb0a24571bad77fda10fadb_prof);

    }

    public function getTemplateName()
    {
        return "appmainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 17,  110 => 16,  92 => 11,  88 => 10,  74 => 9,  70 => 8,  65 => 5,  59 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
