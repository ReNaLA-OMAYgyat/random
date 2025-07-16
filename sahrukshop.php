<?php
session_start();
if (!isset($_SESSION['saldo'])){
    $_SESSION['saldo'] = 100000;
};
?>
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body class="text-black">
    <a href = ulangi.php>ulang</a>
    <?= "saldo anda:" . $_SESSION['saldo'] ?> 
<div class="container mt-20 mx-8 flex flex-wrap gap-6">
    <div class="w-3xs border-4 rounded-sm shadow-lg shadow-indigo-500/50 overflow-hidden sm:w-60 md::w-83 lg:w-74 grid justify-items-start inset-shadow-sm inset-shadow-indigo-500/50 bg-white">
<div class="w-full h-[200px] ring-4 ring-black-500 bg-white">
    <img class="h-[100%]" src="https://cdn.antaranews.com/cache/1200x800/2025/04/13/IMG_20250413_225433.jpg" alt="">
</div>
<h3 class="text-2xl font-bold py-4 text-shadow-lg/30">digidaw</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt mollitia vitae explicabo odit itaque impedit perferendis debitis eos aliquid et.</p>
<button class="bg-indigo-500 px-2 py-2 mx-2 my-2 text-white rounded-lg shadow-lg shadow-indigo-500/50 ">Acumalaka</button>
</div>
    <div class="w-3xs border-4 rounded-sm shadow-lg shadow-indigo-500/50 overflow-hidden sm:w-60 md::w-83 lg:w-74 grid justify-items-start inset-shadow-sm inset-shadow-indigo-500/50 bg-white">
<div class="w-full h-[200px] ring-4 ring-black-500 bg-white">
    <img class="h-[100%]" src="https://cdn.antaranews.com/cache/1200x800/2025/04/13/IMG_20250413_225433.jpg" alt="">
</div>
<h3 class="text-2xl font-bold py-4 text-shadow-lg/30">digidaw</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt mollitia vitae explicabo odit itaque impedit perferendis debitis eos aliquid et.</p>
<button class="bg-indigo-500 px-2 py-2 mx-2 my-2 text-white rounded-lg shadow-lg shadow-indigo-500/50 ">Acumalaka</button>
</div>
    <div class="w-3xs border-4 rounded-sm shadow-lg shadow-indigo-500/50 overflow-hidden sm:w-60 md::w-83 lg:w-74 grid justify-items-start inset-shadow-sm inset-shadow-indigo-500/50 bg-white">
<div class="w-full h-[200px] ring-4 ring-black-500 bg-white">
    <img class="h-[100%]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTotboyEGTFuL7xZQbqzYhaMjpcWO4MnchRBg&s" alt="">
</div>
<h3 class="text-2xl font-bold py-4 text-shadow-lg/30">digidaw</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt mollitia vitae explicabo odit itaque impedit perferendis debitis eos aliquid et.</p>

<form action="proses.php" method="post" onsubmit="return confirm('serius beli?');">
<input type="text" name="produk" value="digidaw">
<input type="text" name="harga" value="50000">
    <button class="bg-indigo-500 px-2 py-2 mx-2 my-2 text-white rounded-lg shadow-lg shadow-indigo-500/50 ">Acumalaka</button>
</form>
</div>
    <div class="w-3xs border-4 rounded-sm shadow-lg shadow-indigo-500/50 overflow-hidden sm:w-60 md::w-83 lg:w-74 grid justify-items-start inset-shadow-sm inset-shadow-indigo-500/50 bg-white">
<div class="w-full h-[200px] ring-4 ring-black-500 bg-white">
    <img class="h-[100%]" src="https://cdn.antaranews.com/cache/1200x800/2025/04/13/IMG_20250413_225433.jpg" alt="">
</div>
<h3 class="text-2xl font-bold py-4 text-shadow-lg/30">digidaw</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt mollitia vitae explicabo odit itaque impedit perferendis debitis eos aliquid et.</p>
<button class="bg-indigo-500 px-2 py-2 mx-2 my-2 text-white rounded-lg shadow-lg shadow-indigo-500/50 ">Acumalaka</button>
</div>
    <div class="w-3xs border-4 rounded-sm shadow-lg shadow-indigo-500/50 overflow-hidden sm:w-60 md::w-83 lg:w-74 grid justify-items-start inset-shadow-sm inset-shadow-indigo-500/50 bg-white">
<div class="w-full h-[200px] ring-4 ring-black-500 bg-white">
    <img class="h-[100%]" src="https://cdn.antaranews.com/cache/1200x800/2025/04/13/IMG_20250413_225433.jpg" alt="">
</div>
<h3 class="text-2xl font-bold py-4 text-shadow-lg/30">digidaw</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt mollitia vitae explicabo odit itaque impedit perferendis debitis eos aliquid et.</p>
<button class="bg-indigo-500 px-2 py-2 mx-2 my-2 text-white rounded-lg shadow-lg shadow-indigo-500/50 ">Acumalaka</button>
</div>
    <div class="w-3xs border-4 rounded-sm shadow-lg shadow-indigo-500/50 overflow-hidden sm:w-60 md::w-83 lg:w-74 grid justify-items-start inset-shadow-sm inset-shadow-indigo-500/50 bg-white">
<div class="w-full h-[200px] ring-4 ring-black-500 bg-white">
    <img class="h-[100%]" src="https://cdn.antaranews.com/cache/1200x800/2025/04/13/IMG_20250413_225433.jpg" alt="">
</div>
<h3 class="text-2xl font-bold py-4 text-shadow-lg/30">digidaw</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt mollitia vitae explicabo odit itaque impedit perferendis debitis eos aliquid et.</p>
<button class="bg-indigo-500 px-2 py-2 mx-2 my-2 text-white rounded-lg shadow-lg shadow-indigo-500/50 ">Acumalaka</button>
</div>
    <div class="w-3xs border-4 rounded-sm shadow-lg shadow-indigo-500/50 overflow-hidden sm:w-60 md::w-83 lg:w-74 grid justify-items-start inset-shadow-sm inset-shadow-indigo-500/50 bg-white">
<div class="w-full h-[200px] ring-4 ring-black-500 bg-white">
    <img class="h-[100%]" src="https://cdn.antaranews.com/cache/1200x800/2025/04/13/IMG_20250413_225433.jpg" alt="">
</div>
<h3 class="text-2xl font-bold py-4 text-shadow-lg/30">digidaw</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt mollitia vitae explicabo odit itaque impedit perferendis debitis eos aliquid et.</p>
<button class="bg-indigo-500 px-2 py-2 mx-2 my-2 text-white rounded-lg shadow-lg shadow-indigo-500/50 ">Acumalaka</button>
</div>
</div>
  </body>
</html>
