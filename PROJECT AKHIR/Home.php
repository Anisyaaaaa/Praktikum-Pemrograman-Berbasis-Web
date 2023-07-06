<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>
<body>
    <header>
    <div class="navigasi">
            <div class="logo"><a href="#">TempleB</a></div>
            <ul class="link">
                <li><a href="Home.php">Home</a></li>
                <li><a href="Desc.php">Desc</a></li>
                <li><a href="Galleryy.php">Gallery</a></li>
                <li><a href="About.php">Contact Us</a></li>
            </ul>
            <a href="Login Form.php" class="login">Logout</a>
            <div class="toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="menu-dropdown">
            <li><a href="Home.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Desc.php">Desc</a></li>
            <li><a href="Galleryy.php">Gallery</a></li>
            <li><a href="Login Form.php" class="login">Logout</a></li>
        </div>
    </header>
    

<div class="tulisan">
    <div class="kolom1">
        <span class="baris-atas">Hello_</span>
        <h1><span class="multiText"></span></h1>
        <p>This site will introduce about Borobudur Temple in Indonesia</p>
        <div class="tombol">
            <a href="Desc.php"><button>Let's Go</button></a>
        </div>
    </div>
</div>
<div class="gambar">
    <img src="picture.png">
</div>
     

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    const toggle = document.querySelector('.toggle')
                const icon = document.querySelector('.toggle i') 
                const menudropdown = document.querySelector('.menu-dropdown')

    toggle.onclick = function () {
            menudropdown.classList.toggle('buka')
            const open = menudropdown.classList.contains('buka')

            icon.classList = open
            ?'fa-solid fa-xmark'
            :'fa-solid fa-bars'
        }


    var typingEffect = new Typed(".multiText",{
    strings : ["BOROBUDUR","TEMPLE"],
    loop : true,
    typeSpeed : 100,
    backSpeed : 80,
    backDelay : 1500,
    })
</script>

</body>
</html>
