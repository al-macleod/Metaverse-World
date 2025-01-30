<?php
session_start();
include '../includes/config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: auth.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <div class="container mx-auto text-center py-20">
        <h1 class="text-3xl">User Dashboard</h1>
        <p>Welcome, you are logged in!</p>

        <div class="mt-6">
            <h2 class="text-xl">Owned Land</h2>
            <div id="land-list" class="mt-4"></div>
        </div>

        <div class="mt-6">
            <a href="marketplace.php" class="bg-blue-500 px-6 py-3 rounded-lg text-white hover:bg-blue-600">Go to Marketplace</a>
        </div>
    </div>

    <script src="wallet.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", async () => {
            if (typeof window.ethereum !== "undefined") {
                try {
                    const accounts = await ethereum.request({ method: "eth_accounts" });
                    if (accounts.length > 0) {
                        document.getElementById("land-list").innerHTML = "<p>Fetching owned land...</p>";
                        // Call blockchain API to fetch NFTs
                    } else {
                        document.getElementById("land-list").innerHTML = "<p>Please connect your wallet</p>";
                    }
                } catch (error) {
                    console.error("Error fetching account:", error);
                }
            }
        });
    </script>
</body>
</html>
