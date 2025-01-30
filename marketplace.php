<?php
session_start();
include '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <div class="container mx-auto text-center py-20">
        <h1 class="text-3xl">Marketplace</h1>
        <p>Buy and sell land NFTs</p>
        
        <div id="market-list" class="mt-6"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.getElementById("market-list").innerHTML = "<p>Loading available land parcels...</p>";
            // Fetch market listings from blockchain
        });
    </script>
</body>
</html>
