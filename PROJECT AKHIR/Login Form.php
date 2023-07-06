<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Login Form</title>
  </head>
  <body style="background-color: rgb(207, 207, 207);">
    <section>
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-5 col-sm-5 col-md-5 m-auto">
            <div class="card border-0 shadow;" style="margin-top: 10%;">
              <div class="card-body" style="text-align: center;">
                <h1 style="color: rgb(243, 149, 73); font-weight: bold ;">LOGIN</h1>
                <p style="font-size: 20px; color: rgb(84, 76, 76);">Masukkan NIM dan Password</p>
                  <form action="konfig_log.php" method="POST" autocomplete="off">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <form action="Home.php">
                  <input type="text" name="username" id="" class="form-control my-4 py-2" placeholder="Username" autocomplete="off" required/>
                  <input type="password" name="pass" id="" class="form-control my-4 py-2" placeholder="Password" autocomplete="off" required/>
                  <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary" style="width: 100%;border-radius: 15px; background-color: rgb(243, 149, 73); color: black;">MASUK</button>
                    <a href="Register.php" class="nav-link" style="color: black; margin-top: 15px">Belum Daftar? Silahkan<span style="font-weight: bold;"> Register</span></a>
                    </form>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>