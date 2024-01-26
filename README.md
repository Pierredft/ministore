# MiniStore
Evaluation e-commerce web site

This website is an e-commerce platform dedicated to online sales of products from the brand APPLE.

## Acces to the project

Recovery the project:

    1. To have access to the project, you should clone the project.
        -To do this in your control terminal you should enter the following order:
            *Git clone https://github.com/Pierredft/ministore.git

    2. Afin de pouvoir accéder au site, il faut dans un premier temps configurer WAMP ou MAMP (selon le type d'ordinateur que vous posséder).

    3.Dans un second temps, il faudra par le biais de votre terminal entré la commande suivante : "composer install" afin d'avoir l'entierter du produit.

    4.Dans un troisieme temps, il vous faut importe la base de données ministore.sql dans phpMyAdmin.

    5.Une fois la base de donnée importé vous récupererai tout ce qui à deja etait utilisé pour le site.

    6.Pour vous connecter au role ADMIN vous devrai entrer l'email suivante : 
        [pierredefauquetDWWM@sofip.fr]
        Et le mot de passe : [DWWM24]


## Language and data library

Coding language :

    1. This web site is entirely writing with the following languages :
        - CSS,
        - JAVASCRIPT,
        - TWIG,
        - PHP.

    2. The Symfony framework was used for the development of this site. The Bootstrap library was also utilized [Bootstrap](https://getbootstrap.com/).

    3. In order to add icone, have used a data library "FontAwesome".
    [FontAwesome] (https://fontawesome.com/).

## Caractéristique
This site is designed for online sales of Apple products.

A: Using the site without a customer account
    On the homepage, when you are not logged into your customer account, you will find the following:

    1.Header

        -The site logo,
        -A "Home" tab that takes you to the site's homepage
        -A "Product" tab that leads to the page containing all products available for sale.
        -A dropdown tab called "PAGES" containing 3 tabs
            *An "ABOUT" tab
            *Another "CART" tab that provides access to the cart
            *And a "CONTACT" tab
        -We also have the magnifying glass logo that allows us to search the site.
        -The user logo is also a dropdown menu containing a "CONNECTION" tab that takes us to the login form, and a second tab called "CREATE AN ACCOUNT" that takes us to a registration form.
        -And a last cart logo that takes us to the page containing your future purchases. (ATTENTION: if you are not logged into a user account, you cannot access the cart.)

    2.The main:

        -In this main, you will find various information about our site.

    3.Still without being connected to a customer account, you will have the possibility to access the product page.

        -On this page, you can access filters that allow us to filter products by their types (phones, watches, or headphones) and also by price order.
        -The products are presented in the form of cards that contain:
            *The product photo
            *The name
            *The price
            *The button to view the product
        -If you select the "view product" button, it will take you to a more detailed view of the product where you will find:
            *The product photo
            *Its name
            *A description of the product
            *And a button to add the product to the cart

    4.Cart presentation

        -Once your purchases are added to the cart, they will be visible in the form of a table as follows:
            *You have a photo of the product
            *The name of the product
            *The unit price of the product
            *The quantity
            *The total price of your order based on the quantity
            *You can add or reduce the quantity of your products using the "+" and "-" buttons present on the side
            *You also have the possibility to delete the product from your cart directly with the "Delete" button
            *At the bottom of the table, you have the total price of your order
            *As well as a "Delete cart" button that allows you to delete all products present in the cart.
            *Then you have a button to validate the cart.

    5.Since you are not connected to a customer account, you will not be able to validate the cart, so you will need to log in or register.

B: Presentation of "register" and "login"

    1.To register, you will go to the dropdown menu with the "user" logo to the right of the header and select "Create an account". And you will have access to a registration form.

        -You must enter the following parameters:
            *Last name
            *First name
            *Email address
            *Password
            *Confirmation of the password
            *Phone number
            *House number
            *City name
            *Postal code
            *Check the "Accept terms" box. These terms are the acceptance of the use of your data.
            *And you just have to click on the "Register" button.

    2.Once your account is created, still in the same dropdown menu, you will go to "Connection" which will take you to a login form.

        -To log in, you will need to fill in the following terms:
            *Your email address
            *Your password
            *And click on the "Log in" button.

C: Presentation of site functionalities as a logged-in user

    1.Once logged in, you will have access to the same functionalities as when you were not logged in.

        -Once logged in, you will arrive on the page of current orders:
            *So you have the order number
            *The order date
            *Choice of the delivery method, which can be done in three ways:
                1.1: Delivery to the address you provided during registration
                1.2: Delivery with Mondial Relay, so you will have to enter the name of the city where you want to receive your package to see the available pickup points, and you just have to choose it.
                1.3: Delivery to a different address from the one provided during your registration
                You will need to fill out the form with your name, address, postal code, and city
        -Once you have chosen your delivery method, click the "Confirm" button

    2.Once you have confirmed the delivery, you will arrive on the summary of your order

        -You will find the following information:
            *Order number
            *Order date
            *The ordered products with the name of the product, quantity, unit price of the product, and the total of the product based on the quantity.
            *The total price of the order
            *Delivery information with the name of the recipient and the location of the delivery.
        -If all the data is correct, click the "Confirm" button, which will take you back to the homepage.

    3.In the dropdown menu with the user logo, you have two tabs, one to log out and one to access your profile.

        -The "Profile" tab:
            *You will arrive on a page with 3 cards, each card corresponds to the following:
            *The profile with your name, first name, email address, phone number, and the encrypted password, as well as a button that allows you to modify your profile information.
            *The address book with your house number, street name, city name, and postal code, as well as a button that allows you to modify your address information.
            *Your orders with a button to see all the orders you have placed.

    4.Profile modification

        -If you click on the modify button, you will be redirected to a form where you can modify the following parameters:
            *Last name, First name, email address, phone number.
            *A button to confirm your changes.
            *A button to change your password that will take you to a form designed for this purpose.
            *A return button to the user profile if you have no changes to make.

    5.Modification of your address

        -If you click on the modify button, you will be redirected to a form where you can modify the following parameters:
            *House number, street name, city name, and postal code.
            *A button to confirm your changes.
            *A return button to the user profile if you have no changes to make.

    6.Viewing all your placed orders

        -If you click on the modify button, you will be redirected to a form where you can see the following parameters:
            *Order numbers sorted from the most recent to the oldest.
            *A button "View details"

    7.View details

        -If you click on the "View details" button, a modal containing the following information will appear:
            *Order number
            *Order date
            *Delivery address
            *Order details

D: Presentation of site functionalities as a connected Admin

    1.As an admin, you will have access to the same functionalities as the user. You will just have the possibility to go to the admin panel from the dropdown menu with the user logo, where you will find a third tab called "Admin Dashboard".
        -By going to this tab, you will find the following functionalities:
            *On the left side:
            *A button to return to the site
            *A button for products
            *A button for types of products
            *A button for the site logo
        -On the main part, depending on the chosen tab, you will find the data present in the database, and you will have the possibility to add, modify, or delete it.

## Developer
This website has been developed by DEFAUQUET Pierre, intern of the formation Web development and web mobile of Valenciennes, for the evaluation of the 03 to 26/01/2023.