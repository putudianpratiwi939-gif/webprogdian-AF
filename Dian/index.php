<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Js-CSS</title>
<style>
    body{
        transition: background-color 0.4s ease, color 0.4s ease;
        background: #ebcece;
        color: #924e4e;
        font-family:Arial;
        margin: 0;
        padding: 20px;
    }
    body.mode-gelap{
        background-color: #241c1c;
        color: #d68787;

    }


    .pesan-tersembunyi{
        display: none;
    }
    .pesan-tampil{
        display: block;
        background-color: #fac5a1;
        color: #f57328;
        padding: 10px;
    }
    #btn-tampil{
        margin-top: 15px;
        padding: 10px 15px;
        border: none;
        border-radius: 6px;
        font-weight: bold;
        cursor: pointer;
    }
    #btn-tampil:hover{
        background-color: #c4500d;
    }
    .nav-tema{
        text-align:center;
        margin:20px 0;
    }
    #btn-tema{
        padding: 12px 24px;
        font-size: 16px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        background-color: #7e1d1d;
        color: #fff;
        transition: all 0.3s;
    }
    #btn-tema:hover{
        transform:scale(1.05);
    }

</style>
</head>
<body>

<div class="nav-tema">
    <button id="btn-tema">Mode gelap</button>
</div>
<div id="pesan-sistem" class="pesan-tersembunyi">
    <p>
        <strong> Belajar DOM Javascript dan CSS</strong>
    </p>
</div>
<button id="btn-tampil"> Tampilkan Pesan</button>

<script>
    const tmb = document.getElementById("btn-tampil");
    const psn = document.getElementById("pesan-sistem");
    const tmbTema = document.getElementById("btn-tema");

    tmb.addEventListener('click',function(){
        if(psn.classList.contains('pesan-tersembunyi')){
            psn.classList.remove('pesan-tersembunyi');
            psn.classList.add('pesan-tampil');
            tmb.innerText="Sembunyikan Pesan";
        }else{
            psn.classList.remove('pesan-tampil');
            psn.classList.add('pesan-tersembunyi');
            tmb.innerText="Tampilkan Pesan";
        }
    });
    tmbTema.addEventListener('click',function(){
        document.body.classList.toggle('mode-gelap');

        if(document.body.classList.contains('mode-gelap')){
            tmbTema.innerText ="Mode Terang"
        }else{
            tmbTema.innerText = "Mode Gelap"
        }
    });
</script>
    
</body>
</html>