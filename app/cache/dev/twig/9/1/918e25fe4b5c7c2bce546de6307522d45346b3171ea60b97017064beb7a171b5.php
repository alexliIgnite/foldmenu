<?php

/* appmainBundle::base.html.twig */
class __TwigTemplate_918e25fe4b5c7c2bce546de6307522d45346b3171ea60b97017064beb7a171b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c101f26ca2193defa3e8bc2f9f032a8ea87bbe089a12665abe33ffcb8d120cca = $this->env->getExtension("native_profiler");
        $__internal_c101f26ca2193defa3e8bc2f9f032a8ea87bbe089a12665abe33ffcb8d120cca->enter($__internal_c101f26ca2193defa3e8bc2f9f032a8ea87bbe089a12665abe33ffcb8d120cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "appmainBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"/favicon.ico\" type=\"image/x-icon\">
\t<link rel=\"icon\" href=\"/favicon.ico\" type=\"image/x-icon\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href='http://fonts.googleapis.com/css?family=Exo:400,700' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/typeahead_2.3.4/jquery.typeahead.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/textboxlist_0.5/TextboxList.Autocomplete.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/textboxlist_0.5/TextboxList.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b853f74_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b853f74_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/b853f74_part_1_ingredients_1.css");
            // line 16
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
            // asset "b853f74_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b853f74_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/b853f74_part_1_main_2.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "b853f74"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b853f74") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/b853f74.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        // line 18
        echo "    <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
    ";
        // line 19
        $this->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig", "appmainBundle::base.html.twig", 19)->display($context);
        // line 20
        echo "      <!--  load textboxlist js -->
\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/textboxlist_0.5/mootools-1.2.1-core-yc.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/textboxlist_0.5/TextboxList.js"), "html", null, true);
        echo "\"></script> 
\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/textboxlist_0.5/GrowingInput.js"), "html", null, true);
        echo "\"></script> 
\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/textboxlist_0.5/TextboxList.Autocomplete.js"), "html", null, true);
        echo "\"></script>  
\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/textboxlist_0.5/TextboxList.Autocomplete.Binary.js"), "html", null, true);
        echo "\"></script>    
    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script> 
    <!-- Include all JavaScripts, compiled by Assetic -->
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!--  load typehead js -->
\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/typeahead_2.3.4/jquery.typeahead.js"), "html", null, true);
        echo "\"></script>
</head> 
<body>
\t<div class=\"panel panel-default\" id=\"logo\">
\t\t<div class=\"panel-heading\">
\t\t";
        // line 36
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f24fdf6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f24fdf6_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/f24fdf6_logoL_1.png");
            echo "<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />";
        } else {
            // asset "f24fdf6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f24fdf6") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/f24fdf6.png");
            echo "<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />";
        }
        unset($context["asset_url"]);
        // line 37
        echo "\t\t</div>
\t</div>
\t<div id=\"content\">";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "</div>
\t";
        // line 42
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da52006_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da52006_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/da52006_animation_1.js");
            // line 43
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "da52006"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da52006") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/da52006.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 44
        echo " 
</body>
</html>
";
        
        $__internal_c101f26ca2193defa3e8bc2f9f032a8ea87bbe089a12665abe33ffcb8d120cca->leave($__internal_c101f26ca2193defa3e8bc2f9f032a8ea87bbe089a12665abe33ffcb8d120cca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ffb49a2b0898820184a6ada531d68626c83cae7f370ac475661b0f5a890d22c = $this->env->getExtension("native_profiler");
        $__internal_0ffb49a2b0898820184a6ada531d68626c83cae7f370ac475661b0f5a890d22c->enter($__internal_0ffb49a2b0898820184a6ada531d68626c83cae7f370ac475661b0f5a890d22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FoldMenu -- Home Made For Share ";
        
        $__internal_0ffb49a2b0898820184a6ada531d68626c83cae7f370ac475661b0f5a890d22c->leave($__internal_0ffb49a2b0898820184a6ada531d68626c83cae7f370ac475661b0f5a890d22c_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a22d43a87b279827ffe8a3e608d34db404582259ac7d76cd96fec6d72134e96 = $this->env->getExtension("native_profiler");
        $__internal_8a22d43a87b279827ffe8a3e608d34db404582259ac7d76cd96fec6d72134e96->enter($__internal_8a22d43a87b279827ffe8a3e608d34db404582259ac7d76cd96fec6d72134e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
\t
\t";
        
        $__internal_8a22d43a87b279827ffe8a3e608d34db404582259ac7d76cd96fec6d72134e96->leave($__internal_8a22d43a87b279827ffe8a3e608d34db404582259ac7d76cd96fec6d72134e96_prof);

    }

    public function getTemplateName()
    {
        return "appmainBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 39,  181 => 5,  171 => 44,  157 => 43,  153 => 42,  150 => 41,  148 => 39,  144 => 37,  129 => 36,  121 => 31,  116 => 29,  111 => 27,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  87 => 20,  85 => 19,  82 => 18,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  46 => 12,  42 => 11,  37 => 9,  30 => 5,  24 => 1,);
    }
}
