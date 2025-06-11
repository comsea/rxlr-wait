<?php
// Toujours déclarer $success même si on n’est pas en POST
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom     = strip_tags($_POST['nom'] ?? '');
    $prenom  = strip_tags($_POST['prenom'] ?? '');
    $tel     = strip_tags($_POST['telephone'] ?? '');
    $email   = strip_tags($_POST['email'] ?? '');
    $sujet   = strip_tags($_POST['sujet'] ?? '');
    $message = strip_tags($_POST['message'] ?? '');

    $to      = 'test@gmail.com';
    $subject = "Formulaire site en construction : $sujet";
    $body    = "Nom: $nom\nPrénom: $prenom\nTéléphone: $tel\nE-mail: $email\n\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Site en construction</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome pour les icônes -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-pzw0+6lZkO0Y5tU6h+1WqXx+N0hXkg4t8l2cOfH+8Jbxxa4K3G+6Gy0ojYZ+ygYJwQLT06S3jFj2FwP7x5KbbA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
</head>

<body class="relative min-h-screen flex flex-col lg:flex-row">
    <!-- Fond rouge en haut à droite -->
    <img class="absolute top-0 right-0 -z-10 w-1/2 lg:w-auto" src="./rectangle-red.png" alt="">

    <!-- Conteneur principal -->
    <div class="flex-1 flex flex-col lg:grid lg:grid-cols-2">
        <!-- Colonne gauche (formulaire) -->
        <div class="p-6 lg:p-8 flex flex-col justify-center items-center gap-6">
            <!-- Logo -->
            <div class="w-3/4 max-w-xs mb-6 lg:mb-0">
                <img src="./logo.png" alt="Logo R XLR" class="w-full">
            </div>

            <!-- Carte grise conteneur formulaire -->
            <div class="w-full bg-[#F5F5F5] p-4 rounded-lg">
                <!-- Titre -->
                <div class="flex mb-8 justify-center items-center">
                    <img class="h-12 lg:h-16" src="./personnage.png" alt="">
                    <h2 class="text-lg lg:text-xl font-semibold ml-2">Site en construction</h2>
                </div>

                <!-- Message de succès -->
                <?php if ($success): ?>
                    <div class="p-3 bg-green-100 text-green-800 rounded mb-4">
                        Merci ! Votre message a bien été envoyé.
                    </div>
                <?php endif; ?>

                <!-- Formulaire -->
                <form action="" method="POST" class="space-y-4">
                    <div class="flex flex-col sm:flex-row sm:space-x-4">
                        <div class="flex-1">
                            <label class="block text-sm font-medium text-gray-700">Nom</label>
                            <input type="text" name="nom" required class="mt-1 block w-full h-10 border-gray-300 rounded shadow-sm focus:ring-red-500 focus:border-red-500">
                        </div>
                        <div class="flex-1 mt-4 sm:mt-0">
                            <label class="block text-sm font-medium text-gray-700">Prénom</label>
                            <input type="text" name="prenom" required class="mt-1 block w-full h-10 border-gray-300 rounded shadow-sm focus:ring-red-500 focus:border-red-500">
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:space-x-4">
                        <div class="flex-1">
                            <label class="block text-sm font-medium text-gray-700">Téléphone</label>
                            <input type="tel" name="telephone" class="mt-1 block w-full h-10 border-gray-300 rounded shadow-sm focus:ring-red-500 focus:border-red-500">
                        </div>
                        <div class="flex-1 mt-4 sm:mt-0">
                            <label class="block text-sm font-medium text-gray-700">E-mail</label>
                            <input type="email" name="email" required class="mt-1 block w-full h-10 border-gray-300 rounded shadow-sm focus:ring-red-500 focus:border-red-500">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Sujet</label>
                        <input type="text" name="sujet" class="mt-1 block w-full h-10 border-gray-300 rounded shadow-sm focus:ring-red-500 focus:border-red-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" rows="4" class="mt-1 block w-full border-gray-300 rounded shadow-sm focus:ring-red-500 focus:border-red-500"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full py-3 bg-red-600 hover:bg-red-700 text-white font-bold rounded transition">
                        Envoyer
                    </button>
                </form>
            </div>

            <!-- Version mobile des coordonnées & plan (visible < lg) -->
            <div class="mt-8 w-full bg-[#F5F5F5] p-4 rounded-lg lg:hidden">
                <h2 class="text-xl font-bold mb-4 text-center">Nos coordonnées</h2>
                <div class="space-y-4">
                    <a href="https://www.google.com/maps/search/?api=1&query=zac+08200+Glaire" target="_blank" class="flex items-center gap-2 hover:underline">
                        <img class="h-6" src="./location.png" alt="location"> <span>zac, 08200 Glaire</span>
                    </a>
                    <div class="flex items-center gap-2">
                        <img class="h-6" src="./clock.png" alt="location">
                        <span>Lun-Ven<br>08h-12h / 14h-17h</span>
                    </div>
                    <a href="tel:+33324265321" class="flex items-center gap-2 hover:underline">
                        <img class="h-6" src="./tel.png" alt="location">
                        <span>03 24 26 53 21</span>
                    </a>
                </div>
                <div class="mt-4 w-full rounded overflow-hidden shadow">
                    <iframe class="w-full h-48" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2580.5515281019348!2d4.9072252!3d49.700417699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea6c2a9f46fb17%3A0x8820812008f23109!2sRXLR!5e0!3m2!1sfr!2sfr!4v1749626048538!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <!-- Colonne droite (PC only) -->
        <div class="hidden lg:flex flex-col justify-center items-center p-8 space-y-6">
            <!-- Image -->
            <div class="rounded-lg overflow-hidden w-full">
                <img src="./magasin.png" alt="Photo du magasin" class="w-full object-cover">
            </div>

            <!-- Coordonnées et plan -->
            <div class="bg-[#F5F5F5] p-4 flex flex-col gap-6 w-full rounded-lg">
                <div class="w-full p-6 flex flex-col items-center">
                    <h2 class="text-2xl font-bold mb-4">Nos coordonnées</h2>
                    <div class="grid grid-cols-2 gap-8">
                        <a
                            href="https://www.google.com/maps/search/?api=1&query=zac+08200+Glaire"
                            target="_blank"
                            class="flex items-center gap-2 hover:underline">
                            <img class="h-6" src="./location.png" alt="location">
                            <span>zac , 08200, Glaire</span>
                        </a>
                        <div class="flex items-center gap-2">
                            <img class="h-6" src="./clock.png" alt="horaire">
                            <span>Lundi à Vendredi<br>08h - 12h 14h - 17h</span>
                        </div>
                        <a href="tel:+33324265321" class="flex items-center gap-2 hover:underline">
                            <img class="h-6" src="./tel.png" alt="téléphone">
                            <span>03 24 26 53 21</span>
                        </a>
                    </div>
                </div>
                <div class="w-full rounded-lg overflow-hidden shadow">
                    <iframe class="w-full h-48" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2580.5515281019348!2d4.9072252!3d49.700417699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea6c2a9f46fb17%3A0x8820812008f23109!2sRXLR!5e0!3m2!1sfr!2sfr!4v1749626048538!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</body>

</html>