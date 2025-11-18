<?php 
    include './service/connection.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    <div class="bg-gray-100 max-w-full h-4/5 flex flex-col justify-center items-center">
        <form action="./service/add.php" method="POST" class="py-6 px-18 flex flex-col gap-8 shadow-lg rounded-xl">
            <h3 class="text-center">RegisterCuy</h3>
            <div class="flex flex-col">
                <label for="name">Name</label>
                <input type="text" name="full_name" class="border-b border-gray-400 p-2 focus:border-blue-800 active:border-blue-500 outline-none transition">
            </div>
            <div class="flex flex-col">
                <label for="age">age</label>
                <input type="text" name="age" class="border-b border-gray-400 p-2 focus:border-blue-800 active:border-blue-500 outline-none transition">
            </div>
            <div class="flex flex-col">
                <label for="nim">nim</label>
                <input type="text" name="nim" class="border-b border-gray-400 p-2 focus:border-blue-800 active:border-blue-500 outline-none transition">
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 active:bg-blue-800 transition">
                Submit Bro!
            </button>
        </form>
    </div>
    <div class="w-1/2 h-1/2 mx-auto overflow-x-auto py-8">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="py-3 px-4 text-left">Nama</th>
                    <th class="py-3 px-4 text-left">NIM</th>
                    <th class="py-3 px-4 text-left">Jurusan</th>
                </tr>
            </thead>

            <tbody class="text-gray-700">
                <tr class="border-b">
                    <td class="py-2 px-4">Raihan</td>
                    <td class="py-2 px-4">12345678</td>
                    <td class="py-2 px-4">Teknik Informatika</td>
                </tr>

                <tr class="border-b bg-gray-50">
                    <td class="py-2 px-4">Budi</td>
                    <td class="py-2 px-4">98765432</td>
                    <td class="py-2 px-4">Sistem Informasi</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
    print_r($_POST);
    ?>
</body>
</html>