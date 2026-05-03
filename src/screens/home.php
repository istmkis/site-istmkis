<?php
// Fonction pour récupérer les articles via l'API WordPress
function get_latest_news($limit = 3) {
    $url = "https://actu.istmkis.ac.cd/wp-json/wp/v2/posts?per_page=" . $limit . "&_embed";

    $ctx = stream_context_create(['http' => ['timeout' => 3]]);
    $response = @file_get_contents($url, false, $ctx);

    if ($response) {
        return json_decode($response, true);
    }
    return [];
}

$articles = get_latest_news(3);
?>

<section class="bg-blue-800 text-white py-20 px-4">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-4">L'excellence en sciences de santé</h1>
        <p class="text-xl opacity-90 max-w-2xl mx-auto uppercase tracking-wider">Institut Supérieur des Techniques Médicales de Kisangani.</p>
    </div>
</section>

<section class="container mx-auto px-4 -mt-10 relative z-10">
    <div class="bg-white rounded-2xl p-4 md:p-6 grid grid-cols-2 md:grid-cols-4 gap-4 border border-gray-100">

        <a href="?page=verification" class="flex flex-col items-center p-4 rounded-xl hover:bg-green-50 transition group">
            <div class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center mb-3 group-hover:bg-green-600 group-hover:text-white transition">
                <i class="fas fa-user-check text-xl"></i>
            </div>
            <span class="text-[10px] md:text-xs font-bold text-gray-700 text-center uppercase">Vérifier Identité</span>
        </a>

        <a href="?page=biblio" class="flex flex-col items-center p-4 rounded-xl hover:bg-purple-50 transition group">
            <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mb-3 group-hover:bg-purple-600 group-hover:text-white transition">
                <i class="fas fa-book-reader text-xl"></i>
            </div>
            <span class="text-[10px] md:text-xs font-bold text-gray-700 text-center uppercase">Bibliothèque</span>
        </a>

        <a href="?page=inscription" class="flex flex-col items-center p-4 rounded-xl hover:bg-orange-50 transition group">
            <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-lg flex items-center justify-center mb-3 group-hover:bg-orange-600 group-hover:text-white transition">
                <i class="fas fa-edit text-xl"></i>
            </div>
            <span class="text-[10px] md:text-xs font-bold text-gray-700 text-center uppercase">Inscription</span>
        </a>
        <a href="https://monespace.istmkis.ac.cd" class="flex flex-col items-center p-4 rounded-xl hover:bg-orange-50 transition group">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-lg flex items-center justify-center mb-3 group-hover:bg-red-600 group-hover:text-white transition">
                <i class="fas fa-graduation-cap text-xl"></i>
            </div>
            <span class="text-[10px] md:text-xs font-bold text-gray-700 text-center uppercase">Espace Étudiant</span>
        </a>

    </div>
</section>

<section class="bg-gray-100 py-20 px-4">
    <div class="container mx-auto">
        <div class="flex justify-between items-end mb-10">
            <div>
                <h2 class="text-3xl font-bold text-blue-900">Dernières Actualités</h2>
                <p class="text-gray-600 mt-2 text-sm md:text-base">Restez informé des activités de l'ISTM Kisangani</p>
            </div>
            <a href="https://actu.istmkis.ac.cd" target="_blank" class="hidden md:flex items-center text-blue-600 font-bold hover:underline">
                Voir tout le blog <i class="fas fa-external-link-alt ml-2 text-sm"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $post): ?>
                    <?php
                    $image = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? 'https://via.placeholder.com/600x400?text=ISTM+Actu';
                    $date = date('d/m/Y', strtotime($post['date']));
                    ?>
                    <article class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 group">
                        <div class="h-48 overflow-hidden">
                            <img src="<?php echo $image; ?>" alt="<?php echo htmlspecialchars($post['title']['rendered']); ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-6">
                            <span class="text-xs text-blue-500 font-bold uppercase tracking-widest"><?php echo $date; ?></span>
                            <h3 class="text-lg font-bold mt-2 mb-4 text-gray-800 line-clamp-2">
                                <?php echo $post['title']['rendered']; ?>
                            </h3>
                            <a href="<?php echo $post['link']; ?>" target="_blank" class="text-blue-600 font-semibold text-sm inline-flex items-center hover:translate-x-1 transition-transform">
                                Lire la suite <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="col-span-3 text-center text-gray-500 italic py-10 bg-white rounded-xl">
                    <i class="fas fa-info-circle mr-2"></i> Découvrez nos dernières actualités sur notre plateforme dédiée.
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>
