<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RXLR - Site en construction</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 h-screen w-screen overflow-auto">

    <div class="w-full h-full">
        <!-- Partie haute -->
        <div class="flex flex-row h-2/3">
            <!-- Image principale avec superposition -->
            <div class="relative w-1/2">
                <img class="object-cover w-full h-full" src="./img.png" alt="image principale">
                <img class="absolute w-1/2 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" src="./1.png" alt="image superposée">
            </div>
            <!-- Bloc rouge à droite -->
            <div class="w-1/2 flex flex-col justify-center items-center">
                <div class="p-4 w-3/4">
                    <h2 class="text-3xl text-[#4FB89C] font-bold mb-4">Un projet ? Une question ? <br>
                        Contactez-nous !</h2>
                    <form class="flex flex-col gap-4">
                        <div class="flex gap-4">
                            <input type="text" placeholder="Prénom" class="p-2 border rounded w-full">
                            <input type="text" placeholder="Nom" class="p-2 border rounded w-full">
                        </div>
                        <div class="flex gap-4">
                            <input type="email" placeholder="Email" class="p-2 border rounded w-full">
                            <input type="tel" placeholder="Téléphone" class="p-2 border rounded w-full">
                        </div>
                        <textarea placeholder="Votre message" class="p-2 border rounded w-full h-32 resize-none"></textarea>
                        <div>
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <span>En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de la demande de contact et de la relation commerciale qui peut en découler.
                                * Champs obligatoires</span>
                        </div>
                        <button class="rounded-full bg-[#4FB89C] py-2 px-8 text-white w-min" type="submit">Envoyer</button>
                    </form>

                </div>
            </div>
        </div>

        <!-- Partie basse -->
        <div class="flex flex-row h-1/3">
            <!-- Carte Google Maps -->
            <div class="w-1/2 flex justify-center items-center bg-[#4FB89C]">
                <iframe class="h-full w-full p-16 rounded-lg"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5157.916798375992!2d4.8395045528073775!3d49.73040833585466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea6d15865bb89b%3A0x4c893f94e81c4d61!2sAP%20FERMETURES%20JACQUEMARD!5e0!3m2!1sfr!2sfr!4v1749463795569!5m2!1sfr!2sfr"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Informations de contact -->
            <div class="w-1/2 flex justify-center items-center bg-[#FFF5AB]">
                <div class="grid grid-cols-2 gap-16">
                    <div>
                        <h2 class="text-[#4FB89C] text-3xl font-bold">Nous trouver</h2>
                        <a class="text-[#4FB89C]" href="https://maps.google.com/?q=Z-A 13 RUE DES CUBILOTS 08330 VRIGNE-AUX-BOIS" target="_blank">
                            Z-A 13 RUE DES CUBILOTS 08330 VRIGNE-AUX-BOIS
                        </a>
                    </div>
                    <div>
                        <h2 class="text-[#4FB89C] text-3xl font-bold">Nos horaires</h2>
                        <p class="text-[#4FB89C]">Lundi au vendredi<br>
                            de 9h à 12h et de 14h à 17h
                        </p>
                    </div>
                    <div>
                        <h2 class="text-[#4FB89C] text-3xl font-bold">Nous appeler</h2>
                        <a class="text-[#4FB89C]" href="tel:0324521696">03 24 52 16 96</a>
                    </div>
                    <div>
                        <h2 class="text-[#4FB89C] text-3xl font-bold">Nous suivre</h2>
                        <div class="flex flex-row gap-2">
                            <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
                                <img class="w-10" src="./facebook.png" alt="logo Facebook">
                            </a>
                            <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn">
                                <img class="w-10" src="./linkedin.png" alt="logo LinkedIn">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>