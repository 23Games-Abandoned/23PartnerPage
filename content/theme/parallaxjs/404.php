<!Doctype html>
<html>
<head>
    <title>Error 404 | Page not found</title>
    <style>
        video#bgvid {
            position: fixed; right: 0; bottom: 0;
            min-width: 100%; min-height: 100%;
            width: auto; height: auto; z-index: -100;
            background: url(content/theme/parallaxjs/404.jpg) no-repeat;
            background-size: cover;
        }
        #text {
            color: #FF0000;
            font-size: 64px;
            font-weight: bold ;
            text-align: center;
            vertical-align: middle;
            text-shadow: 4px 4px 2px rgba(150, 150, 150, 1);
        }
    </style>
</head>
<body>
    <div id="text">
        Error 404<br />Page not found
    </div>
    <video autoplay loop poster="content/theme/parallaxjs/404.jpg" id="bgvid">
        <source src="content/theme/parallaxjs/404.mp4" type="video/mp4">
    </video>
</body>
</html>