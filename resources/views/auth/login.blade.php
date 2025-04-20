<<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Naftal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .background {
            background: url('/image/backgroud.jpg') no-repeat center center/cover;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            filter: blur(6px); /* Légèrement réduit pour moins de luminosité */
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="background"></div>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="relative z-10 flex justify-center animate-float">
            <img src="/image/logo.png" alt="Logo Naftal" class="w-24 h-auto">
        </div>

        <div class="relative z-10 bg-white/70 backdrop-blur-lg shadow-2xl rounded-2xl p-8 w-full max-w-md mt-6 transition-all duration-500 transform hover:scale-105">
            <h2 class="text-center text-2xl font-bold text-blue-900 mt-4 animate-fadeIn">Connexion</h2>
            <form method="POST" action="/logins">
                @csrf


                <div>
                    <label class="block font-medium text-sm text-gray-700" for="email">Email</label>
                    <input class="border-gray-300 focus:border-yellow-500 focus:ring-yellow-500 rounded-md shadow-sm block mt-1 w-full px-4 py-2 transition duration-300 transform hover:scale-105" id="email" type="email" name="email" required>
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="password">Mot de passe</label>
                    <input class="border-gray-300 focus:border-yellow-500 focus:ring-yellow-500 rounded-md shadow-sm block mt-1 w-full px-4 py-2 transition duration-300 transform hover:scale-105" id="password" type="password" name="password" required>
                </div>

                <div class="flex items-center mt-4">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-yellow-500 focus:ring-yellow-400" name="remember">
                    <label for="remember_me" class="ml-2 text-gray-700 text-sm">Se souvenir de moi</label>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a class="text-sm text-gray-600 hover:text-yellow-500" href="http://127.0.0.1:8000/forgot-password">Mot de passe oublié ?</a>
                    <button type="submit" class="px-6 py-2 bg-yellow-500 hover:bg-yellow-600 text-white font-bold rounded-lg shadow-lg transition duration-300 transform hover:scale-105">Connexion</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>