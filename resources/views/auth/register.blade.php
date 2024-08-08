
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('asset/css/loginstyle.css')}}" />
    <title>Document</title>
  </head>
  <body class="background">
    <section class="login position-absolute top-50 start-50 translate-middle">
      <div class="card kartu1 register">
        <div class="card-body">
          <h4>Adventure starts here</h4>
          <p>Make your app management easy and fun!</p>
          <form name="validate" id="validate" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
              <label for="nama" class="form-label">Username</label>
              <input type="text" name="name" class="form-control" id="nama" placeholder="name@example.com" required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" name="email" class="form-control" id="email" placeholder="name@example.com" required />
            </div>
            <div class="mb-3">
              <label for="telp" class="form-label">Telephone</label>
              <input type="text" name="telp" class="form-control" id="telp" required />
            </div>
            <div class="mb-3">
              <label for="paswword" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="paswword" required />
            </div>
            <div class="mb-3">
              <label for="paswword" class="form-label"> confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control" id="paswword" required />
            </div>
            <button type="submit" class="btn tombol">Daftar</button>
          </form>
          <div class="d-flex justify-content-center mt-4">
            <p>Already have an account??</p>
            <a href="{{route('login')}}">Login</a>
          </div>
          <div class="d-flex justify-content-center mt-4">
            <p>Daftar Sebagai Teknisi</p>
            <a class="btn tombol" href="{{route('view.daftarteknisi')}}">Daftar</a>
          </div>
        </div>
      </div>
    </section>
    <img class="foto position-absolute bottom-0 end-0" src="public/authv1tree2png1311-r8y-300h.png" alt="" />
    <img class="foto position-absolute bottom-0 start-0" src="public/authv1treepng1310-z2hr-200w.png" alt="" />
    <img class="position-absolute bottom-0 end-0" src="public/authv1masklightpng139-owua-200h.png" alt="" />
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/validasi.js"></script>
    <script type="text/javascript">
      $("#validate").validate({
        rules: {
          nama: {
            required: true,
            minlength: 4,
          },
          nim: {
            required: true,
            maxlength: 12,
            minlength: 12,
            number: true,
          },
          nim: {
            required: true,
            maxlength: 12,
            minlength: 12,
            number: true,
          },
          prodi: {
            required: true,
          },
          password: {
            required: true,
            minlength: 8,
          },
        },
        messages: {
          nama: {
            required: "Nama tidak boleh kosong",
            minlength: "nama harus lebih dari 4 karakter",
          },
          nim: {
            number: " nim harus berupa angka",
            required: "nim  tidak boleh kosong",
            minlength: "nim harus 12 karakter",
            maxlength: "nim tidak boleh lebih dari 12 karakter",
          },
          nohp: {
            number: " Nomor HP harus berupa angka",
            required: "Nomor HP  tidak boleh kosong",
            minlength: "Nomor HP harus 12 karakter",
            maxlength: "Nomor HP tidak boleh lebih dari 12 karakter",
          },
          prodi: {
            required: "prodi tidak boleh kosong",
          },
          password: {
            required: "Paswword  Tidak boleh kosong",
            minlength: "password harus 8 karakter",
          },
        },
      });
    </script>
  </body>
</html>
