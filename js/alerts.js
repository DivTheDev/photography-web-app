if("<?php if(isset($_GET['location'])){ echo $_GET['location'];}?>")
    {
        $("#location").parent().attr("class","active");
        $("#type").parent().removeAttr("class");
        $("#date").parent().removeAttr("class");
        $("#near").parent().removeAttr("class");
    }
    else if("<?php if(isset($_GET['near'])){ echo $_GET['near'];}?>")
    {
        $("#near").parent().attr("class","active");
        $("#type").parent().removeAttr("class");
        $("#date").parent().removeAttr("class");
        $("#location").parent().removeAttr("class");
    }
    else if("<?php if(isset($_GET['type'])){ echo $_GET['type'];}?>")
    {
        $("#type").parent().attr("class","active");
        $("#near").parent().removeAttr("class");
        $("#date").parent().removeAttr("class");
        $("#location").parent().removeAttr("class");
    }
   
 function change_address(e){
     if($(e).attr('id')=="location")
     {
        $response=window.prompt("Please insert Your location")
        window.location.replace("home.php?location="+$response);
       $(e).attr("href","home.php?location="+$response);
     }
     if($(e).attr('id')=="near")
     {
        $response=window.prompt("Please insert Your near by location")
        window.location.replace("home.php?near="+$response);
       $(e).attr("href","home.php?near="+$response);
     }
     if($(e).attr('id')=="type")
     {
        $response=window.prompt("Please insert type")
        window.location.replace("home.php?type="+$response);
       $(e).attr("href","home.php?type="+$response);
     }
 }
