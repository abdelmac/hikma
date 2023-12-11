<?php
    
    if (isset($_POST['formsend'])) {
        extract($_POST);

        if (!empty($password) && !empty($cpassword) && !empty($email)) {
            if ($password == $cpassword) {
                // Sanitize and validate email
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    // Check if the email already exists in the database
                    global $db;
                    

                    $existingUser = $db->prepare("SELECT * FROM users WHERE email = :email");
                    $existingUser->execute(['email' => $email]);

                    if ($existingUser->rowCount() == 0) {
                        // Email is not in use, proceed with registration
                        $options = [
                            'cost' => 12,
                        ];

                        $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

                        $q = $db->prepare("INSERT INTO users(email, password) VALUES(:email, :password)");
                        $q->execute([
                            'email' => $email,
                            'password' => $hashpass,
                        ]);

                        echo 'User registered successfully.';
                    } else {
                        echo 'Email already in use.';
                    }
                } else {
                    echo 'Invalid email address.';
                }
            } else {
                echo 'Passwords do not match.';
            }
        } else {
            echo 'Incomplete form submission.';
        }
    }
?>