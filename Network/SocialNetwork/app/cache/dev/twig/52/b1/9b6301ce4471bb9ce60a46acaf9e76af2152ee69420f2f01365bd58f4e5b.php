<?php

/* FriendzHubSocialBundle:News:reg.html.twig */
class __TwigTemplate_52b19b6301ce4471bb9ce60a46acaf9e76af2152ee69420f2f01365bd58f4e5b extends Twig_Template
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
                   \t\t\t  <a href=\"";
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
    <div id=\"reg\"> \t
        <div class=\"row\">
        <div class=\"col-lg-3\"></div>
        <div class=\"col-lg-6\">
            <div class=\"well bs-component\">
                <form class=\"form-horizontal\" name=\"reg\" action=\"reg\" onsubmit=\"return validateRegisterForm();\" method=\"POST\">
                    <fieldset>
                        <legend>Register</legend>
                        <div id=\"fgUsername\" class=\"form-group\">
                            <label for=\"inputUsername\" class=\"col-lg-2 control-label\">Username</label>
                            <div class=\"col-lg-10\">
                                <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Username\">
                            </div>
                        </div>
                        <div id=\"fgPassword\" class=\"form-group\">
                            <label for=\"inputPassword\" class=\"col-lg-2 control-label\">Password</label>
                            <div class=\"col-lg-10\">
                                <input type=\"text\" class=\"form-control\" name=\"password\" placeholder=\"Password\">                           
                            </div>
                        </div>

                        <div id=\"fgRePassword\" class=\"form-group\">
                            <label for=\"inputRePassword\" class=\"col-lg-2 control-label\"></label>
                            <div class=\"col-lg-10\">
                                <input type=\"text\" class=\"form-control\" name=\"repassword\" placeholder=\"Re-enter Password\">                           
                            </div>
                        </div>

                        <div id=\"fgFirstname\" class=\"form-group\">
                            <label for=\"inputFirstname\" class=\"col-lg-2 control-label\">First Name</label>
                            <div class=\"col-lg-10\">
                                <input type=\"text\" class=\"form-control\" name=\"firstname\" placeholder=\"First Name\">
                            </div>
                        </div>

                        <div id=\"fgLastname\" class=\"form-group\">
                            <label for=\"inputLastname\" class=\"col-lg-2 control-label\">Last Name</label>
                            <div class=\"col-lg-10\">
                                <input type=\"text\" class=\"form-control\" name=\"lastname\" placeholder=\"Last Name\">
                            </div>
                        </div>



                        <div class=\"form-group\">
                            <label class=\"col-lg-2 control-label\">Gender</label>
                            <div class=\"col-lg-10\">
                                <div class=\"radio\">
                                    <label>
                                        <input type=\"radio\" name=\"gender\" id=\"optionsRadios1\" value=\"male\" checked>
                                        Male
                                    </label>
                                    <label></label>
                                    <label>
                                        <input type=\"radio\" name=\"gender\" id=\"optionsRadios2\" value=\"female\">
                                        Female
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-lg-10 col-lg-offset-2\">

                                <button type=\"submit\" class=\"btn btn-primary\">Register</button>
                            </div>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
       
        </div > 
       
        </div>\t
  \t 
    <div id=\"pageEnd\"> 
        <a href=\"index.html\"><img  src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ytd.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
        <a href=\"index.html\"><img  src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/twd.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
        <a href=\"index.html\"><img  src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ff.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
        </div> 
  </div>
 </body> 
 </html>";
    }

    public function getTemplateName()
    {
        return "FriendzHubSocialBundle:News:reg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 164,  209 => 163,  205 => 162,  116 => 76,  110 => 75,  101 => 69,  97 => 68,  92 => 66,  85 => 62,  75 => 55,  19 => 1,);
    }
}
