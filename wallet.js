async function connectWallet() {
    if (window.ethereum) {
        try {
            const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
            alert("Connected to: " + accounts[0]);
        } catch (error) {
            console.error("User rejected the connection.");
        }
    } else {
        alert("MetaMask is required to use this feature.");
    }
}