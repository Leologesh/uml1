
<html>
   <head>
 
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mobile.js"></script>
       <script type="text/javascript">
       



       $(document).ready(function(){

           $("#reg").validate({
            success: function(label) {
                label.addClass("valid");
            },
        rules: {
            firstname: "required",
            password:"required"
           
        },
        
        // Specify the validation error messages
        messages: {
            firstname: "Please enter your first name",
            password:"password"
         },        
        submitHandler: function() {
            proceed();
        }
        });
        function proceed(){

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
                    };
       });      
       </script>
   </head>
 
   <body>
        <form id="reg" type="post" >
               name : <input type="text" name="firstname" id="firstnameid">
               </br>
               password : <input type="text" name="password" id="passwordid"  >
               </br>
               <input type="submit" id="button" value="submit">
                
               <div id="info" />
        </form>
   </body>
</html>