<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
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
    <ul>
        <li>
            <a href="{{URL::route('tester')}}">checkout the url generated for this link</a>
        </li>
        <li>
            <button id='getbutton'>Click this to see the ajax call work</button>
        </li>
    </ul>
</body>
</html>
