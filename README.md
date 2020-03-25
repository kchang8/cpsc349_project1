# CPSC 349 PROJECT 1

## Anthony Cardenas, Kailie Chang, San Tran, Victoria Tran

## Project Description: Paw Me!

Paw Me is a new way for you and your pets to meet new friends. There's no limit as to what type of animals your pets are to plan playdates. They can be furry animals to even scaly reptiles. 
Paw me keeps track of your scheduled play dates and allows you to discover other people's profiles for you to select who you want to schedule your playdates with.

Whether you are searching for new paw pals to plan pet parties or seeking business companions to grow your network, Paw Me allows you to discover pets and owners who share similar interests. One simple Paw Me can be the start of something new.

# INSTALLATION AND CONFIGURATION

If you want to experience Paw Me will have to perform the following steps:

1. Install Xampp (or any web server solution package) 
2. Clone this repository into the **htdocs** folder in xampp/htdocs
  - This folder is located in the Xampp /web server package of your choice  folder. 
3. Edit the following code in scripts/Database_constants.php with your appropriate information
```
<?php
    $dbHost = "localhost";
    $dbUsername= "yourUsername";
    $dbPass = "yourPassword!";
    $dbName = "petdatabase";
?>

```
4. Save the file.
3. Start your server
4. Type the following into your web browser: localhost/cpsc349_project1/
5. Select and Run the inittables.php file
6. Type the following into your web browser: localhost/cpsc349_project1/landing
 

# How to Use Paw Me

Once you have successfully installed/configured Paw Me!, you will be greeted by the home page and will be prompted to sign up for an account. After signing up, you will then have the options to find Paw Pals, view your current playdates, and view and manage your profile settings. 

### Finding Paw Pals

When searching for Paw Pals, you will be able to view other Paw Me member's information and the desired time for the play date. If you would like to connect with that Paw Pal, you would select the "Paw Me!" button. However, if you would not like to set a play date with the Paw Me member, you would select the "Paws Off!" button. 

### Manage Pending Play Dates 

Once you have selected "Paw Me!" for a specific Paw Me member, you will have the option to view and manage your pending play dates by selecting "My Playdates". You will be able to view your confirmed play dates, play dates that you received with members you matched with, and your pending play dates. You will have the ability to confirm your play dates, cancel your confirmed play dates, and create another play date. 

### Managing your Profile Settings

You will have the option to view and edit yours and your pet's profile information. You may edit your biography or change your profile image. You will also have the option to delete your account. 



