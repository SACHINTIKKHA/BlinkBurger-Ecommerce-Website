<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <button id="load">Click Here</button>
    <div id="list"> Detail of Your Customer will list here</div>
<script>
$("#load").click(function(){
    $.ajax({
        url:"list",
        type:"GET",
        success: function(data){
            let output="";
            data.forEach(function(product){
                output+=`
                <h3>${product.firstname}</h3>
                <p>${product.lastname}</p>
                <p>${product.email}</p>
                <p>${product.gender}</p>`;
            });
            $("#list").html(output);
        }
    });
});


    </script>
</body>
</html>