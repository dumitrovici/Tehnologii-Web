<html>
<head>
<meta charset="UTF-8">	
<title>Inregistrare</title>
<link rel="stylesheet" type="text/css" href="chat.css">

</head>
    <?php
        reqiure("login.php");
    ?>
    <body>
        <div class="container">
            
        <article class="recent">
            <p>Contacte Recente</p>
        </article>
           
        <article class="chat">
             <p>CHAT</p>
           <form > 
                <input class="receive" readonly type="text" name="Receive">
                
                <input class="send" type="text" name="Send" >
               
               <button class="button" type=submit>Send
               </button>
               
            </form>
        </article>
        
        <article class="contact">
             <p>Contacte</p>  
        </article>
        
        
        </div>

        
    </body>
</html>
