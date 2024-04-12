<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>offersoon</title>
</head>
<link ref="stylesheet" type="text/css" href="json.css">
<script>
    function getdetails()
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","http://localhost/php/JSON/jsonfile.json",false);
        xmlhttp.send();
        if(xmlhttp.readystate ==4 & xmlhttp.status==200)
        {
            var result=xmalhttp.responseText;
            //alert(result);
            document.getElementById("show").innerHTML=result;
        } 
    }
</script>
<body onload="getdetails();">
     <center><h3>mobile gallery by json file</h3>
     <div id="show">
     </div>
</body>
</html>