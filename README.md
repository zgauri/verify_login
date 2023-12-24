# Verify_login
This repository contains a simple and versatile code snippet for verifying login credentials on any given website. The code is designed to be easily integrated into different projects, providing a reliable mechanism for user authentication.

## Features

- **Site Agnostic:** The code is not tied to any specific website or authentication method, making it adaptable to various scenarios.
  
- **Easy Integration:** The modular design allows for seamless integration into existing projects with minimal effort.

- **Customizable:** You can easily customize the code to match the login form structure and validation requirements of your target site.

- **Secure:** The code includes basic security measures to protect against common vulnerabilities, such as SQL injection and cross-site scripting (XSS).
<br>


## Configuration

- **Session Configuration:** The script uses PHP sessions to store user authentication status and email information. Ensure that the `session_start()` function is called at the beginning of every page where session data is used.

- **Include LoginData File:** Include the `LoginData.php` file, which contains valid username and password pairs for authentication.

- **Verify POST Request:** Ensure that the code runs only in the case of a POST request.

- **Verify Button Click:** Verify that the correct button (logbutton) was clicked.

- **Retrieve User Input:** Retrieve user input for username and password.

- **Retrieve Database Credentials:** Retrieve the corresponding username and password from the database or predefined data.

- **Handle Missing User in Database:** Check if the username exists in the database.

- **Compare User Input with Database:** Compare the user-entered password with the password from the database.

- **Set Session Variables and Redirect:** Set session variables upon successful login and redirect to the dashboard page.

- **Handle Login Failure**: Display an error message if the login fails.

- **Handle Invalid Link:** Display an error message if the script is accessed without the proper button click.

## Usage

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/your-username/php-login-system.git
    ```

2. **Configure Database Credentials:**

    - Update the `LoginData.php` file with valid username and password pairs.

3. **Run the Code:**

    - Host your PHP files on a web server.
    - Access the login page (`index.php`) in your web browser.
