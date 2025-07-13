<?php

$contacts = [];

function addContact(array &$contacts, string $name, string $email, string $phone): void
{
    $contacts[] = [
        "name" => $name,
        "email" => $email,
        "phone" => $phone
    ];
}

function displayContacts(array $contacts): void
{
    if (empty($contacts)) {
        echo "No Contacts Available.\n";
    } else {
        foreach ($contacts as $contact) {
            echo "Name: " . $contact["name"] . "\n";
            echo "Email: " . $contact["email"] . "\n";
            echo "Phone: " . $contact["phone"] . "\n\n";
        }
    }
}

while (true) {
    echo "\nContact Management App:\n";
    echo "1. Add Contact\n2. View Contacts\n3. Exit\n";
    $choice = (int)readline("Choose an option: ");

    if ($choice === 1) {
        $name = readline("Enter Name: ");
        $email = readline("Enter Email: ");
        $phone = readline("Enter Phone: ");

        addContact($contacts, $name, $email, $phone);
        echo "\nContact added successfully!\n";
        echo "Name: $name\n";
        echo "Email: $email\n";
        echo "Phone: $phone\n";
    } elseif ($choice === 2) {
        displayContacts($contacts);
    } elseif ($choice === 3) {
        echo "Exiting...\n";
        break;
    } else {
        echo "Invalid choice. Please try again.\n";
    }
}
