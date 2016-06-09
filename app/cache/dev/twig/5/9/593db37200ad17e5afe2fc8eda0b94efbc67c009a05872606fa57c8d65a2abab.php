<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_593db37200ad17e5afe2fc8eda0b94efbc67c009a05872606fa57c8d65a2abab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a29ad880693c67f557f718fef164fb3281599a91e005b46be0c2aab86ad517cc = $this->env->getExtension("native_profiler");
        $__internal_a29ad880693c67f557f718fef164fb3281599a91e005b46be0c2aab86ad517cc->enter($__internal_a29ad880693c67f557f718fef164fb3281599a91e005b46be0c2aab86ad517cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a29ad880693c67f557f718fef164fb3281599a91e005b46be0c2aab86ad517cc->leave($__internal_a29ad880693c67f557f718fef164fb3281599a91e005b46be0c2aab86ad517cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93207840014e3e58e632ef15934fe90091d34699f35b58930d2b7e5638d88229 = $this->env->getExtension("native_profiler");
        $__internal_93207840014e3e58e632ef15934fe90091d34699f35b58930d2b7e5638d88229->enter($__internal_93207840014e3e58e632ef15934fe90091d34699f35b58930d2b7e5638d88229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_93207840014e3e58e632ef15934fe90091d34699f35b58930d2b7e5638d88229->leave($__internal_93207840014e3e58e632ef15934fe90091d34699f35b58930d2b7e5638d88229_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_248a7efa29866adc6dc8b684dd70215c93104cf0a614936a54acfcd434e6bade = $this->env->getExtension("native_profiler");
        $__internal_248a7efa29866adc6dc8b684dd70215c93104cf0a614936a54acfcd434e6bade->enter($__internal_248a7efa29866adc6dc8b684dd70215c93104cf0a614936a54acfcd434e6bade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_248a7efa29866adc6dc8b684dd70215c93104cf0a614936a54acfcd434e6bade->leave($__internal_248a7efa29866adc6dc8b684dd70215c93104cf0a614936a54acfcd434e6bade_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eff391b288debc8b6ff7817fec8ac14359f602c9ee65c04bee9e2d65570ef825 = $this->env->getExtension("native_profiler");
        $__internal_eff391b288debc8b6ff7817fec8ac14359f602c9ee65c04bee9e2d65570ef825->enter($__internal_eff391b288debc8b6ff7817fec8ac14359f602c9ee65c04bee9e2d65570ef825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_eff391b288debc8b6ff7817fec8ac14359f602c9ee65c04bee9e2d65570ef825->leave($__internal_eff391b288debc8b6ff7817fec8ac14359f602c9ee65c04bee9e2d65570ef825_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
