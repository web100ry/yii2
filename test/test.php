<?php


?>
<head>
    <script src="jquery.js"></script>

    <link href="style.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet">
</head>
<div id="my">
    <p class="announce">Announce</p>
</div>

<ul class="tt pm">
    <li>
        <ul><li><a href="#">Навести</a> <span>Подсветить</span></li></ul>
    </li>
</ul>

<button class="btn btn-success">Click me...</button>
<script>
    $(document).ready(function(){
        $('btn').click(function(){
            $.ajax({url: "../web/index.php?r=post/index", success: function(result){
                $("#div1").html(result);
            }});
        });
    });
</script>