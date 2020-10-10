<! DOCTYPE html >
<html lang="id">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="PanelKu adalah panel untuk Sosial Media">
    	<meta name="author" content="Mr Mr">
    	<meta name="keyword" content="Panel, PanelKu, Panel Sosmed, Panel SosMed, Panel Sosial Media">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
       
        <script language="JavaScript">
                var brzinakucanja = 200;
                var pauzapor = 2000;
                var vremeid = null;
                var kretanje = false;
                var poruka = new Array();
                var slporuka = 0;
                var bezporuke = 0;
                    poruka[0] = "PanelKu | Login"
                function prikaz() {
                    var text = poruka[slporuka];
                    if (bezporuke < text.length) {
                        if (text.charAt(bezporuke) == " ")
                        bezporuke++
                        var ttporuka = text.substring(0, bezporuke + 1);
                        document.title = ttporuka;
                        bezporuke++
                        vremeid = setTimeout("prikaz()", brzinakucanja);
                            kretanje = true;
                        } else {
                            bezporuke = 0;
                            slporuka++
                            if (slporuka == poruka.length)
                                slporuka = 0;
                            vremeid = setTimeout("prikaz()", pauzapor);
                            kretanje = true;
}
}
                function stop() {
                    if (kretanje)
                        clearTimeout(vremeid);
                    kretanje = false
}
            function start() {
                stop();
                prikaz();
}
            start();
        </script>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta name="keywords" content="Account Creation"
        <meta HTTP-EQUIV="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="description" content="Account Creation">
        <script type="text/javascript">
    //<![CDATA[
            window.__CF=window.__CF||{};window.__CF.AJS={"dnschanger_detector":{"fix_url":null}};
        //]]>
        </script>
       
        <title> PanelKu | Login</title>
        
        <link rel="stylesheet" href="https://estehanget24.xyz/login_files/css/simplecss.css" type="text/css">
        <link rel="stylesheet" href="https://estehanget24.xyz/login_files/css/responsive-css.css" type="text/css">
        <link rel="stylesheet" href="https://estehanget24.xyz/login_files/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="https://estehanget24.xyz/login_files/css/bootstrap-reset.css" type="text/css">

        
    </head>
    <body class="login-body">

    <div class="container">

      <form class="form-signin" method="post">
          <b> <strong> <h2 class="form-signin-heading"> <font face="Times New Roman"> PanelKu </font></h2> </strong> </b>
            <div class="login-wrap"> 
            <input type="text" class="form-control" name="username" placeholder="Username" value="" autofocus=""> <br>
             
             <input type="password" class="form-control" name="pwd" placeholder="Password" value="" id="myInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> <br> 
             <!-- An element to toggle between password visibility -->
<input type="checkbox" onclick="myFunction()">Show Password
<script>
    function myFunction() {
         var x = document.getElementById("myInput");
            if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

           
            <!--<label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label>
            -->
            <center><button class="btn btn-lg btn-login btn-block" type="submit">Log In</button> <br> </center>
               <span style="color: #F00; font-size:12px; line-height:50px;"></span>
                               
        </div>
      </form>

        
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <center> <font size="70" face="Comic Sans Ms"> <b> <strong>THIS PANEL IN A DEVELOPER MODE</strong></b></font></center>


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="https://estehanget24.xyz/login_files/js/jQuery.js"></script>
    <script src="https://estehanget24.xyz/login_files/js/bootstrap-min.js"></script>
    <script src="https://estehanget24.xyz/login_files/js/bootstrap.js"></script>


  

</body>
</html>