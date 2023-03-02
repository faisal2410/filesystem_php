<?php
// File encryption is the process of encoding a file's contents in such a way that only authorized parties can access the file. In PHP, you can use several encryption algorithms to encrypt and decrypt files. The two most common encryption algorithms supported in PHP are AES and RSA.

// Here's an example of how to encrypt a file using PHP's built-in AES encryption:


$plaintext_file = "example.txt";
$ciphertext_file = "example.enc";

// Generate a random encryption key
$encryption_key = openssl_random_pseudo_bytes(32);

// Encrypt the file contents
$plaintext = file_get_contents($plaintext_file);
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
$ciphertext = openssl_encrypt($plaintext, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $iv);

// Write the encrypted data to a file
file_put_contents($ciphertext_file, $iv . $ciphertext);

// Save the encryption key to a file
file_put_contents('encryption_key.txt', $encryption_key);

// In this example, we start by defining the name of the file we want to encrypt ($plaintext_file) and the name of the file we want to save the encrypted data to ($ciphertext_file).

// Next, we generate a random encryption key using the openssl_random_pseudo_bytes() function. This key will be used to encrypt and decrypt the file.

// We then read the contents of the plaintext file into a variable using the file_get_contents() function. We generate a random initialization vector (IV) using the openssl_random_pseudo_bytes() function, and then encrypt the plaintext file contents using the openssl_encrypt() function. The encryption algorithm we're using is AES-256 in CBC mode ('aes-256-cbc').

// After encrypting the file contents, we write the encrypted data to a file using the file_put_contents() function. The encrypted data consists of the IV concatenated with the ciphertext.

// Finally, we save the encryption key to a file using the file_put_contents() function.

// Here's an example of how to decrypt a file using PHP's built-in AES encryption:


$ciphertext_file = "example.enc";
$decrypted_file = "example.dec";

// Load the encryption key from a file
$encryption_key = file_get_contents('encryption_key.txt');

// Read the encrypted data from the file
$ciphertext = file_get_contents($ciphertext_file);
$iv = substr($ciphertext, 0, openssl_cipher_iv_length('aes-256-cbc'));
$ciphertext = substr($ciphertext, openssl_cipher_iv_length('aes-256-cbc'));

// Decrypt the file contents
$plaintext = openssl_decrypt($ciphertext, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $iv);

// Write the decrypted data to a file
file_put_contents($decrypted_file, $plaintext);

// In this example, we start by defining the name of the file we want to decrypt ($ciphertext_file) and the name of the file we want to save the decrypted data to ($decrypted_file).

// Next, we load the encryption key from a file using the file_get_contents() function.

// We then read the encrypted data from the file into a variable using the file_get_contents() function. We extract the IV from the encrypted data using the substr() function, and then extract the ciphertext itself by removing the IV from the beginning of the data.

// After extracting the IV and ciphertext, we decrypt the file contents using the openssl_decrypt() function. We use the same encryption algorithm (AES-256 in CBC mode) and encryption key that were used to encrypt the file.

// Finally, we write the decrypted data to a file using the file_put_contents() function.

// Note that file encryption and decryption is a complex topic, and there are many factors to consider when implementing an encryption solution. It's important to use a strong encryption algorithm, generate a secure encryption key, and follow best practices for storing and managing the encryption key. Additionally, it's important to consider the performance impact of encryption and decryption, as well as the potential for data loss or corruption.