<?php

header('Content-Type: text/html; charset=utf-8');


?>

<!DOCTYPE html>
<html>
<head>
	<title>The LiTe Sight</title>
	<link href="http://fonts.googleapis.com/css?family=Ubuntu|Fugaz+One" rel="stylesheet" type="text/css">
	<link href="960.css" type="text/css" rel="stylesheet" />
	<style type="text/css" media="screen">
        
        body {
            width: 476px;
            margin: 0px auto;
            font-family: 'Ubuntu', sans-serif;
            background-color: #CCC;
        }
        
        .entry {
            border-radius: 4px;
            box-shadow: 2px 2px 24px gray;
            overflow: hidden;
            background-color: white;
        }
        
        h1 {
            font-family: 'Fugaz One', serif;
            text-align: center;
            letter-spacing: 8px;
            text-shadow: 1px 1px 0px #EEE;
            font-size: 32pt;
        }
        
        h2 {
            font-size: 24pt;
            margin: 0px;
            padding: 8px;
            text-shadow: 1px 1px 4px white;
            float: left;
        }
        
        time {
            display: block;
            padding: 16px 12px;
            color: #999;
            float: right;
        }
        
        hr {
            clear: both;
            margin: 12px -6px;
            border: none;
            border-top: 1px solid black;
        }
        
        .listen,
        .watch {
            text-align: center;
            padding-top: 8px;
            padding-bottom: 8px;
        }
        
        #popup {
            
        }
        
        
        
        
        
        button.punch {
            background: #4162A8;
            border-top: 1px solid #38538C;
            border-right: 1px solid #1F2D4D;
            border-bottom: 1px solid #151E33;
            border-left: 1px solid #1F2D4D;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
            -moz-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
            box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
            color: white;
            font: bold 20px "helvetica neue", helvetica, arial, sans-serif;
            line-height: 1;
            margin-bottom: 10px;
            padding: 10px 0 12px 0;
            text-align: center;
            text-shadow: 0px -1px 1px #1E2D4D;
            width: 150px;
            -webkit-background-clip: padding-box;
            margin: 24px 0px;
        }
        
        button.punch:hover {
            -webkit-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
            -moz-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
            box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
            cursor: pointer;
        }
        
        button.punch:active {
            -webkit-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
            -moz-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
            box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
            margin-top: 28px;
            margin-bottom: 20px;
        }
        
    </style>
</head>
<body>
    
    <h1>The LiTe Sight</h1>
    
    <div class="container_12">
        
        <div class="entry grid_8">
    
            <h2>Episode #1: Pilot</h2>
            <time datetime="2012-03-11">2012 March 11</time>
            
            <hr />
            
            <div class="grid_8 alpha omega" style="text-align: center;">
                <button class="punch">Listen!</button>
            </div>
            
            <div class="clear"></div>
            
            <div class="grid_8 alpha omega listen" style="display: none;">
                <audio controls preload="metadata">
                    <source src="episode1.m4a" />
                    <source src="episode1.oga" />
                    <source src="episode1.mp3" />
                </audio>
            </div>
            
        </div>
        
        <div class="grid_4">
            &nbsp;
        </div>
        
    </div>
    
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        
        $('.entry').each(function () {
            var $entry = $(this);
            
            $entry.find('button').eq(0).on('click', function () {
                $entry.find('.listen').show().find('audio')[0].play();
            });
            
        });
        
    </script>
    
</body>
</html>
