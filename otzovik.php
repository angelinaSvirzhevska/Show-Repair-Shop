

<!DOTYPE html>
    <?php  include ('connect.php');?>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="keywords" content="shoes,shoe repair,shoe repair services"/>
<meta name="description" content="Этот сайт является сайтом компании по ремонту обуви"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="image/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
<script src="js/jquery-1.5.1.min.js"></script>



<title>Ремонт обуви</title>
<style>
    .comment{
       border:1px solid #666;
       margin:10px;
       padding:10px;
       font-family:Tahoma;
       font-size:12px;
       border-radius:4px;
       box-shadow:2px 2px 2px #999;
    }
</style>
<script type="text/javascript">
    $(function() {
    $("#send").click(function(){
      var author = $("#author").val();
      var message = $("#message").val();                
    $.ajax({
      type: "POST",
      url: "sendMessage.php",
      data: {"author": author, "message": message},
      cache: false,                        
      success: function(response){
      var messageResp = new Array('Ваше сообщение отправлено','Сообщение не отправлено Ошибка базы данных','Нельзя отправлять пустые сообщения');
      var resultStat = messageResp[Number(response)];
      if(response == 0){
    $("#author").val("");
    $("#message").val("");
    $("#commentBlock").append("<div class='comment'>Автор: <strong>"+author+"</strong><br>"+message+"</div>");
      }
    $("#resp").text(resultStat).show().delay(1500).fadeOut(800);
      }});return false;});});
</script>
</head>

	<body>

     
        <header class="page_header">
           
           <div class="canvas" ><canvas id="canvas"  >Обновите браузер</canvas></div>
              <script src="js/canvas.js" ></script>
              



          <div class="logo">
            <a href="index.html">
                    <img  src="image/logotip.png"  />
            
          </div>

          <nav class="top_menu" id="nav">

            <div class="menu_item">
               <a href="index.html">Главная</a>
              
            </div> 
             <div class="menu_item">
                  <a href="about.html">О нас</a>
                   
             </div> 
             <div class="menu_item">
                  <a href="uslugi.html">Услуги</a>
                    <div class="submenu">
                     <div class="list_menu">Профилактика следа подошв</div>
                     <div class="list_menu">Ремонт каблука</div>
                     <div class="list_menu">Ремонт подошвы</div>
                     <div class="list_menu">Другие ремонтные операции</div>

              </div> 
              <div class="menu_item">
                   <a href="contacts.html">Контакты</a>
              </div> 
             
           </nav>
          
                 <script type="text/javascript" src="js/scriptmenu.js"></script>
               <div class="clear"></div>

           </div>
        </header>		 
		 
         <div class="clear"></div>         
		 		 <div class="clear pT40"></div>
			   <div class="clear pT40"></div>
			   <div class="clear pT10"></div>				
         <div class="clear"></div>
         <section class="content">            
            
            <section class="contentS">
               <div id="EBPN">
           <div id="commentBlock">
<?php
$result = mysql_query("SELECT * FROM messages",$db);
$comment = mysql_fetch_array($result);
do{
echo "<div class='comment'>Àâòîð: <strong>".$comment['author']."</strong><br>".$comment['message']."</div>";
}while($comment = mysql_fetch_array($result));
?>
</div>
                <form action="sendMessage.php" method="post" name="form">
                   
    <p>Автор:<br> <input name="author" type="text" id="author"></p>
    <p>Текст сообщения:<br>
    <textarea name="message" rows="5" cols="50" id="message"></textarea></p>
    <input name="js" type="hidden" value="no" id="js">
    <p><input name="button" type="submit" value="Отправить" id="send"> <span id="resp"></span></p>
</form>
               
               <div class="clear pT20"></div>
          </section>          
             <div class="clear"></div>
         </section>
         <div class="clear"></div>
        <div class="clear"></div>
        <div class="border"></div>

       <footer>

        <div >Все права защищены &copy 2017 </div>
       
         
       </footer>   
    
    </body>  
</html>



            
            
					
      
