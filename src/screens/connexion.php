
<div class="min-h-[80-screen] flex items-center justify-center py-20 px-4 bg-gray-50">
    <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-2xl shadow-2xl border border-gray-100">

        <div class="text-center">
            <div class="mx-auto h-20 w-20 bg-blue-900 rounded-full flex items-center justify-center shadow-lg">
                <i class="fas fa-lock text-white text-3xl"></i>
            </div>
            <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Administration</h2>
            <p class="mt-2 text-sm text-gray-600">
                Accès réservé au personnel autorisé de l'ISTM-KIS
            </p>
        </div>

        <form class="mt-8 space-y-6" action="auth_logic.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['token'] ?? ''; ?>">

            <div class="rounded-md shadow-sm space-y-4">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Identifiant</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-user text-gray-400"></i>
                        </div>
                        <input id="username" name="username" type="text" required
                               class="appearance-none relative block w-full pl-10 px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition sm:text-sm"
                               placeholder="Nom d'utilisateur">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-key text-gray-400"></i>
                        </div>
                        <input id="password" name="password" type="password" required
                               class="appearance-none relative block w-full pl-10 px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition sm:text-sm"
                               placeholder="••••••••">
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox"
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-900 font-medium">
                        Se souvenir de moi
                    </label>
                </div>

                <div class="text-sm">
                    <a href="?page=contact" class="font-medium text-blue-600 hover:text-blue-500 transition">
                        Accès perdu ?
                    </a>
                </div>
            </div>

            <div>
                <button type="submit"
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-xl text-white bg-blue-900 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all shadow-lg hover:shadow-blue-200">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <i class="fas fa-sign-in-alt text-blue-400 group-hover:text-blue-300"></i>
                    </span>
                    Se connecter
                </button>
            </div>
        </form>

        <div class="text-center mt-4">
            <a href="?page=home" class="text-sm text-gray-500 hover:text-gray-700 flex items-center justify-center">
                <i class="fas fa-arrow-left mr-2"></i> Retour au site public
            </a>
        </div>
    </div>
</div>