<!DOCTYPE html>
<html>
<head>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery-3.6.0.js"></script>
	<meta charset="utf-8">
</head>
<body>

	<div class="flex h-screen">
  	<div class="m-auto">
	<div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="tampildata.php">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="username" id="username" type="text" placeholder="Username" required>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-white-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="******************" required>
      <p id="pesan1" class="text-red-500 text-xs italic">Please choose a password.</p>
      <p id="pesan2" class="text-blue-500 text-xs italic"></p>

    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" id="tombol" name="tombol" value="tombol" onclick="myFunction();">
        Sign&nbspIn
      </button>
      &nbsp
      <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="signup.php">
        Sign&nbspUp
      </a>
      &nbsp
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
        Forgot Password?
      </a>
    </div>

  </form>
</div>
</div>
</div>


</body>
</html>


<script type="text/javascript">
  var nilai = 0;

  $(document).ready(function() {

    $('button').click(function() {
      var uname = $('#username').val();
      var upass = $('#password').val();
        if(upass == 0 || uname == 0) {
          $('#pesan2').text('');
        }
        else {
          $.ajax({
            url: 'check.php',
            type: 'POST',
            data: {'username':uname, 'password':upass},
            success: function(hasil) {
              nilai = hasil;
              if(hasil != 1) {
                $('#pesan1').text('Username atau password tidak tersedia');
              }
              else {
                $('#pesan1').hide();
                $('#pesan2').text('Menuju ke halaman utama');
                window.location = "index.php";
              }
            }
          });
        }
      });

  });
</script>