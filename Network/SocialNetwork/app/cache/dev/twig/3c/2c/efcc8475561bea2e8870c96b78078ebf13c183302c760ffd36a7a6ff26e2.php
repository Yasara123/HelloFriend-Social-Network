<?php

/* FriendzHubSocialBundle:News:profil.html.twig */
class __TwigTemplate_3c2cefcc8475561bea2e8870c96b78078ebf13c183302c760ffd36a7a6ff26e2 extends Twig_Template
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
    
    <script>
    function validateLoginForm() {

        var username = document.forms[\"loginForm\"][\"username\"].value;
        var password = document.forms[\"loginForm\"][\"password\"].value;
        var error = 0;
      
        if (password === null || password === \"\") {
            var fgPassword = document.getElementById(\"fgPassword\");
            fgPassword.className += \" has-error\";
            showValidateError('Please enter the Password.');
            error = 1;
        }
        
        if (username === null || username === \"\") {
            var fgUsername = document.getElementById(\"fgUsername\");
            fgUsername.className += \" has-error\";
            showValidateError('Please enter the Username.');
            error = 1;
        }

        if (error === 1)
        {
            return false;
        }

    }

     function showValidateError(message) {

        var errorBox = document.getElementById(\"validateError\");
        var messegeHTML ='<div class=\"alert alert-dismissible alert-danger\"> <p class=\"text-center\"><strong>'+message+'</strong></p> </div>';
        errorBox.innerHTML=messegeHTML;

    }
    
    function hideValidateError(message) {

        var errorBox = document.getElementById(\"validateError\");
        var messegeHTML ='';
        errorBox.innerHTML=messegeHTML;

    }
</script>

      
<meta charset=\"UTF-8\">
 <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\" >
 <link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" >
</head>
   <body> 
   <div id=\"page\">
   <div id=\"pageTop\">
   \t\t<div id=\"TopWrap\">
        \t<div id=\"Logo\">
            \t<a href=\"index.html\"><img  src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
            </div>
            <div id=\"Rest\">
            \t<div id=\"D1\">
                 <a href=\"index.html\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/name.png"), "html", null, true);
        echo "\" alt=\"name\"></a>  
                \t\t<div>
                   \t        <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("friendz_hub_social_reg");
        echo "\">Sign up</a>
                             <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("friendz_hub_social_login");
        echo "\">Log In </a>
                   \t\t </div>
                           
                </div>
                <div id=\"D2\">
                \t<div>
                \t<a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("friendz_hub_social_News");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                    <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("friendz_hub_social_profil");
        echo "\"> My Profile </a> 
                    </div>
                </div>
            </div>
        </div>
    </div> 
   <div id=\"pageMiddle\"> 
    <div id=\"login\"> \t
     
       <h1>Welcome !!!</h1>
        </div > 
       
        </div>\t
  \t 
    <div id=\"pageEnd\"> 
        <a href=\"index.html\"><img  src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ytd.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
        <a href=\"index.html\"><img  src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/twd.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
        <a href=\"index.html\"><img  src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ff.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
        </div> 
  </div>
 </body> 
 </html>";
    }

    public function getTemplateName()
    {
        return "FriendzHubSocialBundle:News:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 93,  138 => 92,  134 => 91,  116 => 76,  110 => 75,  101 => 69,  97 => 68,  92 => 66,  85 => 62,  75 => 55,  19 => 1,);
    }
}
