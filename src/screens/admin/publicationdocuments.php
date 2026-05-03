<section class="bg-gray-800 text-white py-10">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold">Panel d'Administration</h1>
        <p class="text-gray-400">Gestion des publications et documents officiels</p>
    </div>
</section>

<div class="container mx-auto px-4 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <div class="lg:col-span-1">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200">
                <h3 class="text-xl font-bold mb-6 flex items-center">
                    <i class="fas fa-plus-circle mr-2 text-blue-600"></i> Nouveau Document
                </h3>

                <form action="upload_logic.php" method="POST" enctype="multipart/form-data" class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Titre du document</label>
                        <input type="text" name="title" placeholder="Ex: Communiqué Inscription 2026"
                               class="w-full mt-1 p-2 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Catégorie</label>
                        <select name="category" class="w-full mt-1 p-2 bg-gray-50 border border-gray-300 rounded-lg">
                            <option>Décision du COGE</option>
                            <option>Horaires & Examens</option>
                            <option>Communiqués</option>
                            <option>Appels d'offres</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Fichier (PDF uniquement)</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:bg-gray-50 transition">
                            <div class="space-y-1 text-center">
                                <i class="fas fa-file-upload text-gray-400 text-3xl mb-2"></i>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer font-medium text-blue-600 hover:text-blue-500">
                                        <span>Choisir un fichier</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                </div>
                                <p class="text-xs text-gray-500">PDF, DOC jusqu'à 10MB</p>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-xl font-bold hover:bg-blue-700 transition shadow-lg">
                        Publier le document
                    </button>
                </form>
            </div>
        </div>

        <div class="lg:col-span-2">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                    <h3 class="text-xl font-bold">Documents en ligne</h3>
                    <span class="bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full font-bold">12 Documents</span>
                </div>

                <table class="w-full text-left">
                    <thead class="bg-gray-50 text-gray-600 text-sm">
                    <tr>
                        <th class="p-4 font-semibold">Titre</th>
                        <th class="p-4 font-semibold text-center">Vues</th>
                        <th class="p-4 font-semibold text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-sm">
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-4">
                            <div class="font-bold text-gray-800">Calendrier Académique 2025-2026</div>
                            <div class="text-xs text-gray-500">Publié le 15 Avril 2026 par Admin</div>
                        </td>
                        <td class="p-4 text-center">145</td>
                        <td class="p-4 text-right space-x-2">
                            <button class="text-blue-600 hover:bg-blue-50 p-2 rounded"><i class="fas fa-edit"></i></button>
                            <button class="text-red-600 hover:bg-red-50 p-2 rounded"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-4">
                            <div class="font-bold text-gray-800">Frais d'inscription L1</div>
                            <div class="text-xs text-gray-500">Publié le 10 Avril 2026</div>
                        </td>
                        <td class="p-4 text-center">312</td>
                        <td class="p-4 text-right space-x-2">
                            <button class="text-blue-600 hover:bg-blue-50 p-2 rounded"><i class="fas fa-edit"></i></button>
                            <button class="text-red-600 hover:bg-red-50 p-2 rounded"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>