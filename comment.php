
<html>
   <head>
 
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
       <script type="text/javascript">
               $(document).ready(function(){
                    $("#button").click(function(){
 
                          var temp_name=$("#firstnameid").val();
                          var temp_password=$("#passwordid").val();
 
                          $.ajax({
                              type:"post",
                              url:"process.php",
                              data:"phpget_name="+temp_name+"&phpget_password="+temp_password,
                              success:function(data){
                                 $("#info").html(data);
                              }
 
                          });
 
                    });
               });
       </script>
   </head>
 
   <body>
        <form>
               name : <input type="text" name="firstname" id="firstnameid">
               </br>
               password : <input type="text" name="password" id="passwordid"  >
               </br>
               <input type="button" value="submit" id="button">
                
               <div id="info" />
        </form>
   </body>
</html>