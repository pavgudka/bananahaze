<?php

 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Congratulations</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,600" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <style>
    textarea { color: #27AE60; }
</style>
</head>
<body>
    <div id="jquery-script-menu">

</div>
    <div class="container" style="margin:150px auto">
        <header>
            <h1>Congratulations</h1>
        </header>
        <main>
            <div class="row">
                <div class="col-md-6 w-full"><textarea id="live" disabled></textarea></div>
                <div class="col-md-6"><textarea id="code" disabled>var phrases = ['Congratulations Henna, you did it!', 'I\ m so proud of you, clever, clever you', 'It truly fills my heart with bliss to see you end this period of school with work and grin continue moving from progress to progress. ','That was some outstanding result, damn I can’t believe you nerd.','You passed the exam with ease and proved that I’m not a distraction.','Keep the hard work up everywhere ;) your dedication is truly Inspiring.','Congratulations once again.','I want to wish you a pleasant cruise trip with fam bam, I wanna hear all about it. So excited for you','Miss me','Elephant Shoe','See you soon', 'Chrome','Signing off'];

$(element).humanTyping(phrases);</textarea></div>

                        <button onclick="window.location.href = 'home.html';">Go back</button>
                        <button onclick="window.location.href = 'logout.php';">Logout</button>
            </div>

        </main>
    </div>
    <div>
        
    </div>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script src="jquery.humanTyping.min.js"></script>
    <script>var element='#live',codeToRun=$('#code').val();$(document).ready(function(){$('body').append('<script>'+codeToRun),$.get('README.md',function(a){$('.docs').html(marked(a))}),setTimeout(()=>{$('.col-md-6').removeClass('w-full'),$('#code').fadeIn('slow')},9e3)});</script>
</body>
</html>

