<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f367c8cee3914a0add14d54a762594cf5d9f46e0085a1be0f162144657e9b306 extends Twig_Template
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
        $__internal_73da75463a2d57f82804323800317585f07397e8cbce0d23c336be5545bfc8c9 = $this->env->getExtension("native_profiler");
        $__internal_73da75463a2d57f82804323800317585f07397e8cbce0d23c336be5545bfc8c9->enter($__internal_73da75463a2d57f82804323800317585f07397e8cbce0d23c336be5545bfc8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73da75463a2d57f82804323800317585f07397e8cbce0d23c336be5545bfc8c9->leave($__internal_73da75463a2d57f82804323800317585f07397e8cbce0d23c336be5545bfc8c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_77ea9f049e1a168e8c7d23d4c6650c49fb102b8bcdb97b8ceb1b883e22597f96 = $this->env->getExtension("native_profiler");
        $__internal_77ea9f049e1a168e8c7d23d4c6650c49fb102b8bcdb97b8ceb1b883e22597f96->enter($__internal_77ea9f049e1a168e8c7d23d4c6650c49fb102b8bcdb97b8ceb1b883e22597f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_77ea9f049e1a168e8c7d23d4c6650c49fb102b8bcdb97b8ceb1b883e22597f96->leave($__internal_77ea9f049e1a168e8c7d23d4c6650c49fb102b8bcdb97b8ceb1b883e22597f96_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_85cca8459dea9121503ee8d085737e1d9007786ca074b2673d8461916d0f1fad = $this->env->getExtension("native_profiler");
        $__internal_85cca8459dea9121503ee8d085737e1d9007786ca074b2673d8461916d0f1fad->enter($__internal_85cca8459dea9121503ee8d085737e1d9007786ca074b2673d8461916d0f1fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_85cca8459dea9121503ee8d085737e1d9007786ca074b2673d8461916d0f1fad->leave($__internal_85cca8459dea9121503ee8d085737e1d9007786ca074b2673d8461916d0f1fad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8c67f95bfb1c1e7171df71a4f25f47c9a3c9cc2b19c6f9955ae323dc0654025 = $this->env->getExtension("native_profiler");
        $__internal_a8c67f95bfb1c1e7171df71a4f25f47c9a3c9cc2b19c6f9955ae323dc0654025->enter($__internal_a8c67f95bfb1c1e7171df71a4f25f47c9a3c9cc2b19c6f9955ae323dc0654025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a8c67f95bfb1c1e7171df71a4f25f47c9a3c9cc2b19c6f9955ae323dc0654025->leave($__internal_a8c67f95bfb1c1e7171df71a4f25f47c9a3c9cc2b19c6f9955ae323dc0654025_prof);

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
