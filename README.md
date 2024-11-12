# MiniStore EN

E-commerce evaluation website

This website is an e-commerce platform dedicated to the online sale of APPLE brand products.

## Project Access

Project retrieval:

1. To access the project, you need to clone the project.
    - To do this, in your control terminal, you need to enter the following command:
        * Git clone https://github.com/Pierredft/ministore.git

2. To access the site, you first need to configure WAMP or MAMP (depending on the type of computer you have).

3. Secondly, through your terminal, enter the following command: "composer install" to get the entire product.

4. Thirdly, you need to import the ministore.sql database into phpMyAdmin.

5. Once the database is imported, you will retrieve everything that has already been used for the site.

6. To log in as ADMIN, you need to enter the following email:
    [pierredefauquetDWWM@sofip.fr]
    And the password: [DWWM24]

## Language and Data Library

Coding language:

1. This website is entirely written with the following languages:
    - CSS,
    - JAVASCRIPT,
    - TWIG,
    - PHP.

2. The Symfony framework was used for the development of this site. The Bootstrap library was also used [Bootstrap](https://getbootstrap.com/).

3. To add icons, we used a data library "FontAwesome".
    [FontAwesome](https://fontawesome.com/).

## Features
This site is designed for the online sale of Apple products.

A: Using the site without a customer account
    On the homepage, when you are not logged into your customer account, you will find the following elements:

    1. Header

        - The site logo,
        - A "Home" tab that takes you back to the site's homepage
        - A "Product" tab that leads to the page containing all the products available for sale.
        - A dropdown tab called "PAGES" containing 3 tabs
            * An "ABOUT" tab
            * Another "CART" tab that gives access to the cart
            * And a "CONTACT" tab
        - We also have the magnifying glass logo that allows us to search the site.
        - The user logo is also a dropdown menu containing a "LOGIN" tab that takes us to the login form, and a second tab called "CREATE AN ACCOUNT" that takes us to a registration form.
        - And a final cart logo that takes us to the page containing your future purchases. (NOTE: if you are not logged into a user account, you cannot access the cart.)

    2. Main:

        - In this main section, you will find various information about our site.

    3. Still without being logged into a customer account, you will have the possibility to access the product page.

        - On this page, you can access filters that allow us to filter products by their types (phones, watches, or earphones) and also by price order.
        - The products are presented in the form of cards containing:
            * The product photo
            * The name
            * The price
            * The button to view the product
        - If you select the "view product" button, it will take you to a more detailed view of the product where you will find:
            * The product photo
            * Its name
            * A product description
            * And a button to add the product to the cart

    4. Cart presentation

        - Once your purchases are added to the cart, they will be visible in the form of a table as follows:
            * You have a photo of the product
            * The product name
            * The unit price of the product
            * The quantity
            * The total price of your order based on the quantity
            * You can add or reduce the quantity of your products using the "+" and "-" buttons on the side
            * You also have the possibility to remove the product from your cart directly with the "Delete" button
            * At the bottom of the table, you have the total price of your order
            * As well as a "Delete cart" button that allows you to delete all the products present in the cart.
            * Then you have a button to validate the cart.

    5. Since you are not logged into a customer account, you will not be able to validate the cart, so you will need to log in or register.

B: Presentation of "register" and "login"

    1. To register, go to the dropdown menu with the "user" logo on the right of the header and select "Create an account". And you will have access to a registration form.

        - You need to enter the following parameters:
            * Last name
            * First name
            * Email address
            * Password
            * Password confirmation
            * Phone number
            * House number
            * City name
            * Postal code
            * Check the "Accept terms" box. These terms are the acceptance of the use of your data.
            * And simply click on the "Register" button.

    2. Once your account is created, still in the same dropdown menu, go to "Login" which will take you to a login form.

        - To log in, you need to fill in the following terms:
            * Your email address
            * Your password
            * And click on the "Login" button.

C: Presentation of site features as a logged-in user

    1. Once logged in, you will have access to the same features as when you were not logged in.

        - Once logged in, you will arrive on the current orders page:
            * You have the order number
            * The order date
            * Choice of delivery method, which can be done in three ways:
                1.1: Delivery to the address you provided during registration
                1.2: Delivery with Mondial Relay, you will need to enter the name of the city where you want to receive your package to see the available pickup points, and simply choose it.
                1.3: Delivery to a different address than the one provided during registration
                You will need to fill out the form with your name, address, postal code, and city
        - Once you have chosen your delivery method, click on the "Confirm" button

    2. Once the delivery is confirmed, you will arrive at the order summary

        - You will find the following information:
            * Order number
            * Order date
            * Ordered products with the product name, quantity, unit price of the product, and the total of the product based on the quantity.
            * The total price of the order
            * Delivery information with the recipient's name and delivery location.
        - If all the data is correct, click on the "Confirm" button, which will take you back to the homepage.

    3. In the dropdown menu with the user logo, you have two tabs, one to log out and one to access your profile.

        - The "Profile" tab:
            * You will arrive on a page with 3 cards, each card corresponds to the following elements:
            * The profile with your last name, first name, email address, phone number, and encrypted password, as well as a button that allows you to modify your profile information.
            * The address book with your house number, street name, city name, and postal code, as well as a button that allows you to modify your address information.
            * Your orders with a button to see all the orders you have placed.

    4. Profile modification

        - If you click on the modify button, you will be redirected to a form where you can modify the following parameters:
            * Last name, first name, email address, phone number.
            * A button to confirm your modifications.
            * A button to change your password that will take you to a form designed for this purpose.
            * A button to return to the user profile if you have no modifications to make.

    5. Modification of your address

        - If you click on the modify button, you will be redirected to a form where you can modify the following parameters:
            * House number, street name, city name, and postal code.
            * A button to confirm your modifications.
            * A button to return to the user profile if you have no modifications to make.

    6. Viewing all your past orders

        - If you click on the modify button, you will be redirected to a form where you can see the following parameters:
            * Order numbers sorted from most recent to oldest.
            * A "View details" button

    7. View details

        - If you click on the "View details" button, a modal containing the following information will appear:
            * Order number
            * Order date
            * Delivery address
            * Order details

D: Presentation of site features as a logged-in Admin

    1. As an admin, you will have access to the same features as the user. You will just have the possibility to go to the administration panel from the dropdown menu with the user logo, where you will find a third tab called "Admin Dashboard".
        - By going to this tab, you will find the following features:
            * On the left side:
            * A button to return to the site
            * A button for products
            * A button for product types
            * A button for the site logo
        - On the main part, depending on the chosen tab, you will find the data present in the database, and you will have the possibility to add, modify, or delete.

## Developer
This website was developed by DEFAUQUET Pierre, an intern from the Web and Mobile Web Development training in Valenciennes, for the evaluation from 03 to 26/01/2023.





# MiniStore FR

Site web d'évaluation e-commerce

Ce site web est une plateforme e-commerce dédiée à la vente en ligne de produits de la marque APPLE.

## Accès au projet

Récupération du projet :

1. Pour avoir accès au projet, vous devez cloner le projet.
    - Pour ce faire, dans votre terminal de contrôle, vous devez entrer l'ordre suivant :
        * Git clone https://github.com/Pierredft/ministore.git

2. Afin de pouvoir accéder au site, il faut dans un premier temps configurer WAMP ou MAMP (selon le type d'ordinateur que vous possédez).

3. Dans un second temps, il faudra par le biais de votre terminal entrer la commande suivante : "composer install" afin d'avoir l'intégralité du produit.

4. Dans un troisième temps, il vous faut importer la base de données ministore.sql dans phpMyAdmin.

5. Une fois la base de données importée, vous récupérerez tout ce qui a déjà été utilisé pour le site.

6. Pour vous connecter au rôle ADMIN, vous devrez entrer l'email suivant :
    [pierredefauquetDWWM@sofip.fr]
    Et le mot de passe : [DWWM24]

## Langage et bibliothèque de données

Langage de codage :

1. Ce site web est entièrement écrit avec les langages suivants :
    - CSS,
    - JAVASCRIPT,
    - TWIG,
    - PHP.

2. Le framework Symfony a été utilisé pour le développement de ce site. La bibliothèque Bootstrap a également été utilisée [Bootstrap](https://getbootstrap.com/).

3. Afin d'ajouter des icônes, nous avons utilisé une bibliothèque de données "FontAwesome".
    [FontAwesome](https://fontawesome.com/).

## Caractéristiques
Ce site est conçu pour la vente en ligne de produits Apple.

A : Utilisation du site sans compte client
    Sur la page d'accueil, lorsque vous n'êtes pas connecté à votre compte client, vous trouverez les éléments suivants :

    1. En-tête

        - Le logo du site,
        - Un onglet "Accueil" qui vous ramène à la page d'accueil du site
        - Un onglet "Produit" qui mène à la page contenant tous les produits disponibles à la vente.
        - Un onglet déroulant appelé "PAGES" contenant 3 onglets
            * Un onglet "À PROPOS"
            * Un autre onglet "PANIER" qui donne accès au panier
            * Et un onglet "CONTACT"
        - Nous avons également le logo de la loupe qui nous permet de rechercher sur le site.
        - Le logo utilisateur est également un menu déroulant contenant un onglet "CONNEXION" qui nous amène au formulaire de connexion, et un deuxième onglet appelé "CRÉER UN COMPTE" qui nous amène à un formulaire d'inscription.
        - Et un dernier logo de panier qui nous amène à la page contenant vos futurs achats. (ATTENTION : si vous n'êtes pas connecté à un compte utilisateur, vous ne pouvez pas accéder au panier.)

    2. Le principal :

        - Dans ce principal, vous trouverez diverses informations sur notre site.

    3. Toujours sans être connecté à un compte client, vous aurez la possibilité d'accéder à la page produit.

        - Sur cette page, vous pouvez accéder à des filtres qui nous permettent de filtrer les produits par leurs types (téléphones, montres ou écouteurs) et également par ordre de prix.
        - Les produits sont présentés sous forme de cartes contenant :
            * La photo du produit
            * Le nom
            * Le prix
            * Le bouton pour voir le produit
        - Si vous sélectionnez le bouton "voir le produit", il vous amènera à une vue plus détaillée du produit où vous trouverez :
            * La photo du produit
            * Son nom
            * Une description du produit
            * Et un bouton pour ajouter le produit au panier

    4. Présentation du panier

        - Une fois vos achats ajoutés au panier, ils seront visibles sous forme de tableau comme suit :
            * Vous avez une photo du produit
            * Le nom du produit
            * Le prix unitaire du produit
            * La quantité
            * Le prix total de votre commande en fonction de la quantité
            * Vous pouvez ajouter ou réduire la quantité de vos produits à l'aide des boutons "+" et "-" présents sur le côté
            * Vous avez également la possibilité de supprimer le produit de votre panier directement avec le bouton "Supprimer"
            * En bas du tableau, vous avez le prix total de votre commande
            * Ainsi qu'un bouton "Supprimer le panier" qui vous permet de supprimer tous les produits présents dans le panier.
            * Ensuite, vous avez un bouton pour valider le panier.

    5. Comme vous n'êtes pas connecté à un compte client, vous ne pourrez pas valider le panier, vous devrez donc vous connecter ou vous inscrire.

B : Présentation de "s'inscrire" et "se connecter"

    1. Pour vous inscrire, vous allez dans le menu déroulant avec le logo "utilisateur" à droite de l'en-tête et sélectionnez "Créer un compte". Et vous aurez accès à un formulaire d'inscription.

        - Vous devez entrer les paramètres suivants :
            * Nom de famille
            * Prénom
            * Adresse e-mail
            * Mot de passe
            * Confirmation du mot de passe
            * Numéro de téléphone
            * Numéro de maison
            * Nom de la ville
            * Code postal
            * Cochez la case "Accepter les conditions". Ces conditions sont l'acceptation de l'utilisation de vos données.
            * Et il vous suffit de cliquer sur le bouton "S'inscrire".

    2. Une fois votre compte créé, toujours dans le même menu déroulant, vous allez dans "Connexion" qui vous amènera à un formulaire de connexion.

        - Pour vous connecter, vous devrez remplir les termes suivants :
            * Votre adresse e-mail
            * Votre mot de passe
            * Et cliquez sur le bouton "Se connecter".

C : Présentation des fonctionnalités du site en tant qu'utilisateur connecté

    1. Une fois connecté, vous aurez accès aux mêmes fonctionnalités que lorsque vous n'étiez pas connecté.

        - Une fois connecté, vous arriverez sur la page des commandes en cours :
            * Vous avez donc le numéro de commande
            * La date de la commande
            * Choix du mode de livraison, qui peut se faire de trois manières :
                1.1 : Livraison à l'adresse que vous avez fournie lors de l'inscription
                1.2 : Livraison avec Mondial Relay, vous devrez donc entrer le nom de la ville où vous souhaitez recevoir votre colis pour voir les points de retrait disponibles, et il vous suffit de le choisir.
                1.3 : Livraison à une adresse différente de celle fournie lors de votre inscription
                Vous devrez remplir le formulaire avec votre nom, adresse, code postal et ville
        - Une fois que vous avez choisi votre mode de livraison, cliquez sur le bouton "Confirmer"

    2. Une fois la livraison confirmée, vous arriverez sur le récapitulatif de votre commande

        - Vous trouverez les informations suivantes :
            * Numéro de commande
            * Date de la commande
            * Les produits commandés avec le nom du produit, la quantité, le prix unitaire du produit et le total du produit en fonction de la quantité.
            * Le prix total de la commande
            * Informations de livraison avec le nom du destinataire et le lieu de livraison.
        - Si toutes les données sont correctes, cliquez sur le bouton "Confirmer", qui vous ramènera à la page d'accueil.

    3. Dans le menu déroulant avec le logo utilisateur, vous avez deux onglets, un pour vous déconnecter et un pour accéder à votre profil.

        - L'onglet "Profil" :
            * Vous arriverez sur une page avec 3 cartes, chaque carte correspond aux éléments suivants :
            * Le profil avec votre nom, prénom, adresse e-mail, numéro de téléphone et le mot de passe crypté, ainsi qu'un bouton qui vous permet de modifier les informations de votre profil.
            * Le carnet d'adresses avec votre numéro de maison, nom de rue, nom de ville et code postal, ainsi qu'un bouton qui vous permet de modifier les informations de votre adresse.
            * Vos commandes avec un bouton pour voir toutes les commandes que vous avez passées.

    4. Modification du profil

        - Si vous cliquez sur le bouton modifier, vous serez redirigé vers un formulaire où vous pourrez modifier les paramètres suivants :
            * Nom de famille, prénom, adresse e-mail, numéro de téléphone.
            * Un bouton pour confirmer vos modifications.
            * Un bouton pour changer votre mot de passe qui vous amènera à un formulaire conçu à cet effet.
            * Un bouton de retour au profil utilisateur si vous n'avez aucune modification à apporter.

    5. Modification de votre adresse

        - Si vous cliquez sur le bouton modifier, vous serez redirigé vers un formulaire où vous pourrez modifier les paramètres suivants :
            * Numéro de maison, nom de rue, nom de ville et code postal.
            * Un bouton pour confirmer vos modifications.
            * Un bouton de retour au profil utilisateur si vous n'avez aucune modification à apporter.

    6. Visualisation de toutes vos commandes passées

        - Si vous cliquez sur le bouton modifier, vous serez redirigé vers un formulaire où vous pourrez voir les paramètres suivants :
            * Numéros de commande triés du plus récent au plus ancien.
            * Un bouton "Voir les détails"

    7. Voir les détails

        - Si vous cliquez sur le bouton "Voir les détails", un modal contenant les informations suivantes apparaîtra :
            * Numéro de commande
            * Date de la commande
            * Adresse de livraison
            * Détails de la commande

D : Présentation des fonctionnalités du site en tant qu'Admin connecté

    1. En tant qu'admin, vous aurez accès aux mêmes fonctionnalités que l'utilisateur. Vous aurez juste la possibilité d'aller au panneau d'administration depuis le menu déroulant avec le logo utilisateur, où vous trouverez un troisième onglet appelé "Tableau de bord Admin".
        - En allant dans cet onglet, vous trouverez les fonctionnalités suivantes :
            * Sur le côté gauche :
            * Un bouton pour retourner au site
            * Un bouton pour les produits
            * Un bouton pour les types de produits
            * Un bouton pour le logo du site
        - Sur la partie principale, en fonction de l'onglet choisi, vous trouverez les données présentes dans la base de données, et vous aurez la possibilité d'ajouter, modifier ou supprimer.

## Développeur
Ce site web a été développé par DEFAUQUET Pierre, stagiaire de la formation Développement web et web mobile de Valenciennes, pour l'évaluation du 03 au 26/01/2023.
