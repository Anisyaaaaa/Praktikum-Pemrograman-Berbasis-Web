<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

  
        <div class="row">
            <div class="column">
                <img src="boro.png" style="width: 85%; height: 85%">
            </div>
            <div class="column">
                <form action="about.php">
                  <label for="fname"><b>Name</b></label>
                  <input type="text" id="fname" name="firstname" autocomplete="off" placeholder="Your Name">
                  <label for="lname"><b>Email</b></label>
                  <input type="email" id="lname" name="lastname" autocomplete="off" placeholder="Email">
                  <label for="country"><b>City</b></label>
                  <select id="country" name="country">
                    <option value="usa"></option>
                    <option value="australia">Bangkalan</option>
                    <option value="canada">Yogyakarta</option>
                    <option value="usa">Surabaya</option>
                  </select>
                  <label for="subject"><b>Message</b></label>
                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                  <input style="background-color: orange; font-size: 15px; font-weight: bold;" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div><br>

    

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
            </script>
</body>
<style>
    * {
    box-sizing: border-box;
}
  
  /* Style untuk inputs */
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=email], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
  
input[type=submit] {
    background-color: #3a5ed4;
    color: rgb(255, 255, 255);
    padding: 12px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}
  
input[type=submit]:hover {
    background-color: #616aec;
}
  
  /* Style untuk bagian container/contact  */
.container {
    /* margin-top: 20px; */
    padding: 10px;
}
  
  /* Buat dua kolom yang berfloat di samping satu sama lain */
.column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
    color: orange;
    font-size: 20px;
}

.column img{
    display: block;
    margin-left: auto;
    margin-right: auto;
}

/* .row .coloumn img {
    width: 80%;
    height: 100%;
} */
  
  /* Hapus floats setelah columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
  
  /* Responsive layout -ketika layar kurang dari 600px lebarnya, buat dua kolom bertumpuk satu sama lain, bukan di samping satu sama lain */
@media screen and (max-width: 600px) {
    .column, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
}

button {
    width: 80px;
    height: 40px;
    background: linear-gradient(rgba(0, 104, 240, 0.658),rgba(66, 66, 228, 0.568),rgba(29, 135, 255, 0.596));
    border-radius: 10px; 
    border: none;
    color: aliceblue;
}
    </style>
</html>