<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS dan JavaScript</title>
    <link href="style01.css" rel="stylesheet">

    <style>
     
    </style>
</head>
<body>

<div class="rTengah">
<div class="kartu-profile">
    <h1>Ni Putu Dian Pratiwi</h1>
    <p> Web Programing</p>
    <button id="btnDetail" onclick="detail()" class="btn-detail"> info Detail </button>
</div>
</div>
<div class="rTengah">

<div class="info-detail" id="infobox">
    <button onclick= "tutupDetail()" class="btn-close"> &times;</button>
Informasi Detail Dian Pratiwi
</div>

<script>
    function detail(){
        //alert("informasi detail Dian Pratiwi");
        var info = document.getElementById("infobox");
        var btnDetail = document.getElementById("btnDetail");

        if(info.style.display ==="none" || info.style.display === ""){
            info.style.display = "block";
            btnDetail.style.display = "none";
        }else{
         info.style.display = "none";
        }
    }
</script>
    
</body>
</html>
