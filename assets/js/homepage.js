$(document).ready(function(){
   
    
        $("#sent").on('click',function()    {
            
            if($("#inbox").hasClass("active"))
            {
                $("#inbox").removeClass("active");
                $("#sent").addClass("active");
                document.getElementById('frame').contentWindow.location.replace('sent.php');
            }
        });
   
    
    
        $("#inbox").on('click',function(){
            if($("#sent").hasClass("active"))
            {
                $("#sent").removeClass("active");
                $("#inbox").addClass("active");
                document.getElementById('frame').contentWindow.location.replace('unread.php');
            }
        });
    
    
});