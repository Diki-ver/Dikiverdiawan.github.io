<!DOCTYPE html>
<html>
<head>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery-3.6.0.js"></script>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <div class="flex h-screen">
    <div class="m-auto">
  <form class="w-full max-w-sm" method="post" action="index.php">
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        username
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Username" name="username">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Password
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="******************" name="password">
    </div>
    <p id="pesan" class="text-red-500 text-xs italic"></p>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button" onclick="myFunction();">
        Sign Up
      </button>
    </div>
  </div>
</form>
</div>
</div>

</body>
</html>

<script type="text/javascript">
  var nilai = 0;

  function myFunction() {
  }

  $(document).ready(function() {

    $('button').click(function() {
      var uname = $('#inline-full-name').val();
      var upass = $('#inline-password').val();
        if(upass == 0 || uname == 0) {
          $('#pesan').text('Tidak boleh kosong');
        }
        else {
          $.ajax({
            url: 'inputdata.php',
            type: 'POST',
            data: {'username':uname, 'password':upass},
            success: function(hasil) {
              nilai = hasil;
              if(hasil != 1) {
                $('#pesan').text('Username tidak tersedia');
              }
              else {
                $('#pesan').text('Menuju ke halaman login');
                window.location = "login.php";
              }
            }
          });
        }
      });

  });
</script>