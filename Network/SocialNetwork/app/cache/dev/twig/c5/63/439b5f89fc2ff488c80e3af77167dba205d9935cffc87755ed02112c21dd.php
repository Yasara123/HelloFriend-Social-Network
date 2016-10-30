<?php

/* FriendzHubSocialBundle:News:news.html.twig */
class __TwigTemplate_c563439b5f89fc2ff488c80e3af77167dba205d9935cffc87755ed02112c21dd extends Twig_Template
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
        echo "<!DOCTYPE html> 

<html> 
   
<head> 
    
<meta charset=\"UTF-8\">
 <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\" >
 <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" >
   <body> 
   <div id=\"page\">
   <div id=\"pageTop\">
   \t\t<div id=\"TopWrap\">
        \t<div id=\"Logo\">
            \t<a href=\"index.html\"><img  src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
            </div>
            <div id=\"Rest\">
            \t<div id=\"D1\">
                 <a href=\"index.html\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/name.png"), "html", null, true);
        echo "\" alt=\"name\"></a>  
                \t\t<div>
                   \t\t\t  <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("friendz_hub_social_reg");
        echo "\">Sign up</a>
                             <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("friendz_hub_social_login");
        echo "\">Log In </a>
                   \t\t </div>
                           
                </div>
                <div id=\"D2\">
                \t<div>
                \t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("friendz_hub_social_News");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                    <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("friendz_hub_social_profil");
        echo "\"> My Profile </a> 
                    </div>
                </div>
            </div>
        </div>
    </div> 
   <div id=\"pageMiddle\"> 
 \t\t<div id=\"profPic\">
        \t<a href=\"index.html\"><img  src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>            
        </div> 
        \t<div id=\"status\">
 \t\t\t    <form action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getUrl("post");
        echo "\" method=\"post\">      
                    <input type=\"text\" name=\"status\"><br>
\t\t\t         <input type=\"submit\" value=\"post\"/>
\t\t\t </form >
               
\t\t\t</div>
        </div>\t
   
    
  \t<div id=\"pageBottom\"> 
    \t\t<form action=\"/html/tags/html_form_tag_action.cfm\" method=\"post\">
\t\t\t<textarea name=\"comments\" id=\"comments\">
        News Feeds
        ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Newsfeedss"]) ? $context["Newsfeedss"] : $this->getContext($context, "Newsfeedss")));
        foreach ($context['_seq'] as $context["_key"] => $context["Newsfeeds"]) {
            // line 54
            echo "     - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Newsfeeds"], "owner", array()), "html", null, true);
            echo " is updated status as: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Newsfeeds"], "newsitem", array()), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Newsfeeds'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                
\t\t\t</textarea> <br />
            <br>
    </div> 
    <div id=\"pageEnd\"> 
        <a href=\"index.html\"><img  src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ytd.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
        <a href=\"index.html\"><img  src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/twd.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
        <a href=\"index.html\"><img  src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ff.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
        </div> 
  </div>
 </body> 
 </html>";
    }

    public function getTemplateName()
    {
        return "FriendzHubSocialBundle:News:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 63,  128 => 62,  124 => 61,  117 => 56,  106 => 54,  102 => 53,  86 => 40,  80 => 37,  69 => 29,  63 => 28,  54 => 22,  50 => 21,  45 => 19,  38 => 15,  29 => 9,  19 => 1,);
    }
}
