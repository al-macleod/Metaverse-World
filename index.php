<?php
session_start();
include '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metaverse Prototype</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <div class="container mx-auto text-center py-20">
        <h1 class="text-4xl font-bold">Welcome to the Metaverse Prototype</h1>
        <p class="mt-4 text-lg">A text-based virtual world with blockchain integration.</p>
        
        <div class="mt-6">
            <a href="auth.php" class="bg-blue-500 px-6 py-3 rounded-lg text-white hover:bg-blue-600">Login</a>
        </div>

        <div class="mt-6">
            <button onclick="connectWallet()" class="bg-green-500 px-6 py-3 rounded-lg text-white hover:bg-green-600">Connect Wallet</button>
        </div>
    </div>

    <script src="wallet.js"></script>
</body>
</html>
