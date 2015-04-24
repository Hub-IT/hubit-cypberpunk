<html>
<head>
    <title>HubIt | CyberPunks</title>

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
        }
    </style>
</head>
<body>
<a id="bgndVideo" class="player"
   data-property="{videoURL:'https://www.youtube.com/watch?v=P99qJGrPNLs',containment:'body',autoPlay:true, startAt:0, opacity:1}">My
    video</a>

<div class="container">
    <div class="content">
        <div class="title">HubIt _> CyberPunks</div>
        <div class="quote">{{ Inspiring::quote() }}</div>
    </div>
</div>

<!-- jQuery -->
<script src="{!! asset('packages/bower/jquery/dist/jquery.min.js') !!}"></script>

<script src="{!! asset('packages/bower/jquery.mb.ytplayer/inc/jquery.mb.YTPlayer.min.js') !!}"></script>

<script>
    $(document).ready(function () {
        $(function () {
            $(".player").YTPlayer();
        });
    });
</script>

</body>
</html>
