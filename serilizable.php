
<html>
   <head>
 
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mobile.js"></script>
       <script type="text/javascript">
       $(document).ready(function(){
        
                  $('#button').click(function(){ 
                          var create=$('form').serialize()           
                          $.ajax({
                          type: "POST",
                          url: "process.php",
                          data: create,
                          success: function($query) {
                              alert($query);
                              // window.location.replace("index.php");
                          },
                            error: function(XMLHttpRequest, textStatus, errorThrown) {            
                              $('.result').text(textStatus,errorThrown);
                            }
                          }); 
                          }); 
                    });
         
       </script>
   </head>
 
   <body>
        <form  >
               name : <input type="text" name="firstname" id="firstnameid">
               </br>
               password : <input type="text" name="password" id="passwordid"  >
               </br>
               <input type="button" id="button" value="submit">
                
               <div id="info" />
        </form>
   </body>
</html>