<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
</head>
<body>
    <form id="employeeForm">
        <label for="employeeName">Employee Name:</label>
        <input type="text" id="employeeName" required>

        <label for="contactNo">Contact No:</label>
        <input type="text" id="contactNo" required>

        <label for="username">Username:</label>
        <input type="text" id="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" required>

        <button type="button" onclick="registerEmployee()">Register</button>
    </form>

    <script>
        function registerEmployee() {
            // Validate inputs
            if (!validateInputs()) {
                alert("Please fill out all fields.");
                return;
            }

            // Get form data
            const employeeName = document.getElementById("employeeName").value;
            const contactNo = document.getElementById("contactNo").value;
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            // Use Ajax to send data to the server for registration
            // Example Ajax using Fetch API
            fetch('your-registration-endpoint', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    employeeName,
                    contactNo,
                    username,
                    password,
                }),
            })
            .then(response => response.json())
            .then(data => {
                alert("Employee registered successfully!");
                // You can perform additional actions after successful registration
            })
            .catch(error => {
                console.error('Error:', error);
                alert("An error occurred during registration.");
            });
        }

        function validateInputs() {
            // Implement your validation logic here (NULL validation using JavaScript)
            // Return true if all inputs are valid, false otherwise
            const employeeName = document.getElementById("employeeName").value;
            const contactNo = document.getElementById("contactNo").value;
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            // Example: Check if any input is empty
            if (!employeeName || !contactNo || !username || !password) {
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
