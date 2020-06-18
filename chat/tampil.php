<?
include 'php/var.php';
if(isset($_GET['logout'])){    
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'><i>". $_SESSION['name'] ." telah meninggalkan ruang obrolan.</i><br></div>");
    fclose($fp);
session_destroy();
header('Location: homeadmin.php');
}

if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
            $fp = fopen("log.html", 'a');
        fwrite($fp, "<div class='msgln'><i>". $_SESSION['name'] ." masuk ruang obrolan.</i><br></div>");
        fclose($fp);
    }
    else{
        echo '<span class="error">Silakan tulis nama dulu</span>';
    }
}
?>
<html>
<head>
<title>Chat</title>
<link type="text/css" rel="stylesheet" href="chat/style2.css" />
</head>
<?php
if(!isset($_SESSION['name'])){
    ?>
    <div id="loginform">
    <form action="homeadmin.php" method="post">
        Klik masuk untuk dapat memulai percakapan public
        <br><br>
        <input type="text" value="<?=$nama?>" class="form-control" placeholder="Nama" name="name" id="name" style="width:90%;" readonly/>
        <br>
        <input type="submit" class="btn btn-primary" name="enter" id="enter" value="Masuk" style="width:70%;"/>
    </form>
    </div>
    <?php
}
else{
?>
<div id="wrapper" class="data">
    <div id="menu">
        <p class="welcome">Selamat Datang, <b><?php echo $_SESSION['name']; ?></b></p>
        <p class="logout"><a id="exit" href="#">Keluar Chat</a></p>
        <div style="clear:both"></div>
    </div>    
    <div id="chatbox" style="margin-top: 10px;"><?php
    if(file_exists("log.html") && filesize("log.html") > 0){
        $handle = fopen("log.html", "r");
        $contents = fread($handle, filesize("log.html"));
        fclose($handle);
        echo $contents;
    }
    ?></div>
    
    <form name="message" action="">
        <input name="usermsg" type="text" id="usermsg" class="form-control" />
        <input name="submitmsg" class="btn btn-primary" type="submit" id="submitmsg" value="Kirim" style="width: 70%"/>
    </form>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $("#submitmsg").click(function(){    
        var clientmsg = $("#usermsg").val();
        $.post("chat/post.php", {text: clientmsg});                
        $("#usermsg").attr("value", "kosong");
        var reset = document.getElementById("#usermsg");
        reset.value= "";
        return false;
    });
    
    function loadLog(){        
        var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
        $.ajax({
            url: "log.html",
            cache: false,
            success: function(html){        
                $("#chatbox").html(html); //Insert chat log into the #chatbox div                
                var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
                if(newscrollHeight > oldscrollHeight){
                    $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                }                
              },
        });
    }
    setInterval (loadLog, 1000);
    
    //If user wants to end session
    $("#exit").click(function(){
        var exit = confirm("Apakah anda yakin mengakhiri obrolan ini?");
        if(exit==true){window.location = 'homeadmin.php?logout=true';}        
    });
});
</script>
<?php
}
?>
</body>
</html>