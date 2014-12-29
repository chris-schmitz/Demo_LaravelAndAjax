<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script>
    $(document).ready(function (){
        $('#getbutton').click( function (){
                $.ajax({
                    url: 'tester'
                    }).complete(function (a){
                        alert(a.responseText);
                    }).error(function (a){
                       console.log(a);
                    });
        });
    });
    </script>
</head>
<body>
	<div class="welcome">
        <a href="{{URL::route('tester')}}">checkout the url generated for this link</a>
        <br>
        <button id='getbutton'>Click this to see the ajax call work</button>
	</div>
</body>
</html>
