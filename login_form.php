<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
  <title>work</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: linear-gradient(to right bottom, #7bc7e6, #85cbe4, #90cfe2, #9bd3e1, #a6d6e0, #91d1e2, #7acce5, #60c6e9, #00b4f7, #009eff, #0083ff, #435fff);
    }
  </style>
</head>
<body>
  <div class="w-full max-w-md bg-white shadow-md rounded px-8 pt-6 pb-8">
    <div class="flex justify-center items-center flex-col">
      <img class="h-20" src="./รูป/รพสต.png" alt="รพสต">
      <h2 class="text-2xl text-center mb-6">เข้าสู่ระบบ</h2>
      <form method="post" action="login.php">
        <label class="block text-gray-700 text-sm font-bold mb-2 " for="username">Username:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-20 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="username" id="username" placeholder="@ล็อกอิน" required><br><br>

        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-20 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" id="password" placeholder="@ใส่รหัสผ่าน" required><br><br>

        <input type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="ล็อกอิน">
      </form>
    </div>
  </div>
</body>
</html>
