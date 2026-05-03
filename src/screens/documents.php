<div class="container mx-auto py-20 px-4 max-w-4xl min-h-[60vh] flex flex-col justify-center items-center text-center">

    <!-- Icône d'attente stylisée -->
    <div class="relative mb-8">
        <div class="w-24 h-24 bg-blue-50 rounded-full flex items-center justify-center animate-pulse">
            <i class="fas fa-archive text-4xl text-blue-600"></i>
        </div>
        <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-white shadow-lg rounded-full flex items-center justify-center">
            <i class="fas fa-tools text-amber-500 text-sm"></i>
        </div>
    </div>

    <!-- Texte principal -->
    <h2 class="text-3xl font-black text-slate-800 uppercase tracking-tight mb-4">
        Archives et Documents Officiels
    </h2>

    <div class="h-1 w-20 bg-blue-600 rounded-full mb-6 mx-auto"></div>

    <p class="text-slate-600 text-lg max-w-lg mx-auto leading-relaxed">
        Cette page regroupera l'ensemble des décisions de la Direction Générale, les communiqués et les documents officiels de l'ISTM-KIS.
    </p>

    <!-- Badge En construction -->
    <div class="mt-10 inline-flex items-center gap-3 bg-amber-50 border border-amber-100 px-6 py-3 rounded-2xl text-amber-700">
        <span class="relative flex h-3 w-3">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-amber-500"></span>
        </span>
        <span class="font-bold text-sm uppercase tracking-wider">Numérisation en cours...</span>
    </div>

    <!-- Note discrète -->
    <p class="mt-12 text-slate-400 text-xs italic">
        Le service CTIC travaille actuellement sur l'archivage numérique de ces données.
        <br>Merci de votre patience.
    </p>

</div>

<style>
    /* Animation douce à l'apparition */
    .container {
        animation: fadeInSoft 0.8s ease-out;
    }

    @keyframes fadeInSoft {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>