<!-- En-tête -->
<section class="bg-blue-900 py-20 text-white">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-3xl md:text-5xl font-extrabold mb-4 tracking-tight">Contactez l'ISTM Kisangani</h1>
        <p class="text-blue-100 text-lg max-w-xl mx-auto opacity-90">
            Cliquez sur l'adresse de votre choix pour nous écrire directement ou utilisez le formulaire.
        </p>
    </div>
</section>

<!-- Contenu Principal -->
<div class="container mx-auto px-6 -mt-12 pb-20">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

        <!-- Colonne Gauche : Infos de contact détaillée -->
        <div class="lg:col-span-1">
            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 h-full">
                <h3 class="text-xl font-bold text-gray-900 mb-8 border-b pb-4">Nos Mails</h3>

                <div class="space-y-10">

                    <!-- Administration Centrale -->
                    <div>
                        <h4 class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-4">Administration</h4>
                        <div class="space-y-4">
                            <a href="mailto:dircab@istmkis.ac.cd" class="group flex items-center p-3 rounded-lg hover:bg-blue-50 transition">
                                <div class="bg-gray-100 text-gray-600 p-2 rounded mr-3 group-hover:bg-white transition">
                                    <i class="fas fa-user-tie text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 font-medium">Cabinet du DG</p>
                                    <p class="text-sm font-bold text-gray-800 break-all">dircab@istmkis.ac.cd</p>
                                </div>
                            </a>

                            <a href="mailto:sgac@istmkis.ac.cd" class="group flex items-center p-3 rounded-lg hover:bg-blue-50 transition">
                                <div class="bg-gray-100 text-gray-600 p-2 rounded mr-3 group-hover:bg-white transition">
                                    <i class="fas fa-graduation-cap text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 font-medium">Secrétariat Académique</p>
                                    <p class="text-sm font-bold text-gray-800 break-all">sgac@istmkis.ac.cd</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Services Techniques -->
                    <div>
                        <h4 class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-4">Support Technique</h4>
                        <div class="space-y-4">
                            <a href="mailto:ctic@istmkis.ac.cd" class="group flex items-center p-3 rounded-lg border-l-4 border-blue-600 bg-blue-50 hover:bg-blue-100 transition">
                                <div class="bg-blue-600 text-white p-2 rounded mr-3">
                                    <i class="fas fa-laptop-code text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-blue-700 font-medium text-uppercase">Service Numérique (CTIC)</p>
                                    <p class="text-sm font-bold text-blue-900 break-all">ctic@istmkis.ac.cd</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Les Sections (Facultés) -->
                    <div>
                        <h4 class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-4">Filières</h4>
                        <div class="grid grid-cols-1 gap-2">
                            <a href="mailto:biomed@istmkis.ac.cd" class="text-sm text-gray-600 hover:text-blue-600 flex items-center gap-2 py-1 transition">
                                <i class="fas fa-microscope text-xs opacity-50"></i> Biologie médicales
                            </a>
                            <a href="mailto:sf@istmkis.ac.cd" class="text-sm text-gray-600 hover:text-blue-600 flex items-center gap-2 py-1 transition">
                                <i class="fas fa-baby text-xs opacity-50"></i> Sage-Femme
                            </a>
                            <a href="mailto:si@istmkis.ac.cd" class="text-sm text-gray-600 hover:text-blue-600 flex items-center gap-2 py-1 transition">
                                <i class="fas fa-user-nurse text-xs opacity-50"></i> Sciences Infirmières
                            </a>
                            <a href="mailto:gos@istmkis.ac.cd" class="text-sm text-gray-600 hover:text-blue-600 flex items-center gap-2 py-1 transition">
                                <i class="fas fa-notes-medical text-xs opacity-50"></i> Gestion des organisations de Santé
                            </a>
                            <a href="mailto:motricite@istmkis.ac.cd" class="text-sm text-gray-600 hover:text-blue-600 flex items-center gap-2 py-1 transition">
                                <i class="fas fa-notes-medical text-xs opacity-50"></i> Motricité
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Colonne Droite : Formulaire -->
        <div class="lg:col-span-2">
            <div class="bg-white p-8 md:p-10 rounded-xl shadow-sm border border-gray-100">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center lg:text-left">Envoyez un message rapide</h3>

                <form method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Nom Complet</label>
                        <input type="text" name="name" required class="w-full p-4 bg-gray-50 border border-gray-200 rounded-lg focus:bg-white focus:ring-2 focus:ring-blue-600 outline-none transition">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Votre Email</label>
                        <input type="email" name="email" required class="w-full p-4 bg-gray-50 border border-gray-200 rounded-lg focus:bg-white focus:ring-2 focus:ring-blue-600 outline-none transition">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Message</label>
                        <textarea name="message" rows="6" required class="w-full p-4 bg-gray-50 border border-gray-200 rounded-lg focus:bg-white focus:ring-2 focus:ring-blue-600 outline-none transition"></textarea>
                    </div>

                    <div class="md:col-span-2">
                        <button type="submit" class="w-full bg-blue-600 text-white font-bold py-4 rounded-lg hover:bg-blue-700 transition shadow-lg flex items-center justify-center gap-3">
                            <i class="fas fa-paper-plane"></i>
                            Envoyer le message
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>