const userCredentials = {
    accinfo: {
        user: "Pernahkah",
        password: "KauMerasa"
    }
};
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const message = document.getElementById('message');

    if (username === userCredentials.accinfo.user && password === userCredentials.accinfo.password) {
        message.innerText = "Login successful!";
    } else {
        message.innerText = "Invalid username or password.";
    }
});
