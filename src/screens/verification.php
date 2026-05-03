<!-- Scripts -->
<script src="https://unpkg.com/react@18/umd/react.production.min.js"></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

<div id="root"></div>

<script type="text/babel">
    const { useState, useRef } = React;

    function VerificationApp() {
        const [matricule, setMatricule] = useState('');
        const [student, setStudent] = useState(null);
        const [loading, setLoading] = useState(false);
        const [error, setError] = useState(false);
        const [showPaiements, setShowPaiements] = useState(false);

        const captureRef = useRef(null);
        const url = "http://192.168.2.102:2001/api/v1";

        const handleSearch = async (e) => {
            e.preventDefault();
            if (!matricule) return;
            setLoading(true);
            setError(false);
            setStudent(null);
            setShowPaiements(false);

            try {
                const response = await fetch(`${url}/public/information/etudiant/${matricule}`);
                if (response.ok) {
                    const data = await response.json();
                    setStudent(data.data);
                } else {
                    setError(true);
                }
            } catch (err) {
                setError(true);
            } finally {
                setLoading(false);
            }
        };


        return (
            <div className="container mx-auto px-4 py-10 max-w-2xl min-h-[70vh]">
                <div className="text-center mb-8">
                    <h1 className="text-2xl font-bold text-slate-800 uppercase tracking-tight">Vérification Numérique</h1>
                    <p className="text-slate-500 text-sm mt-1">CTIC ISTM KISANGANI</p>
                </div>

                {/* Formulaire */}
                <form onSubmit={handleSearch} className="mb-10">
                    <div className="flex flex-col sm:flex-row gap-2">
                        <input
                            type="text"
                            placeholder="E-XXXXXX-XXXXXX"
                            className="flex-1 px-5 py-4 rounded-2xl bg-white border border-slate-200 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all font-mono text-center sm:text-left"
                            value={matricule}
                            onChange={(e) => setMatricule(e.target.value.toUpperCase())}
                            required
                        />
                        <button
                            type="submit"
                            className="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-2xl font-bold transition-all flex items-center justify-center shadow-lg shadow-blue-200 disabled:opacity-50"
                            disabled={loading}
                        >
                            {loading ? <i className="fas fa-spinner fa-spin"></i> : <i className="fas fa-search"></i>}
                        </button>
                    </div>
                </form>

                {student && (
                    <div className="space-y-4">
                        {/* Fiche Capturable */}
                        <div ref={captureRef} className="bg-white rounded-[2.5rem] shadow-sm border border-slate-100 overflow-hidden animate-fade-in p-6 sm:p-8">
                            <div className="flex flex-col sm:flex-row items-center gap-6 mb-8">
                                <div className="w-32 h-32 rounded-3xl overflow-hidden bg-slate-50 border-4 border-white shadow-md flex-shrink-0">
                                    <img
                                        src={`${url}/upload/${student.photo}`}
                                        alt="Profil"
                                        className="w-full h-full object-cover"
                                        crossOrigin="anonymous"
                                    />
                                </div>
                                <div className="text-center sm:text-left">
                                    <span className="bg-green-100 text-green-700 text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-tighter">Étudiant Régulier</span>
                                    <h2 className="text-xl font-black text-slate-800 mt-2 leading-tight uppercase">
                                        {student.nom} {student.postnom} {student.prenom}
                                    </h2>
                                    <p className="text-blue-600 font-mono text-sm font-bold">{student.matricule}</p>
                                </div>
                            </div>

                            <div className="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div className="bg-slate-50 p-4 rounded-2xl border border-slate-100">
                                    <p className="text-[10px] text-slate-400 font-bold uppercase mb-1">Auditoire / Promotion</p>
                                    <p className="text-slate-800 font-bold">{student.auditoire}</p>
                                </div>
                                <div className="bg-slate-50 p-4 rounded-2xl border border-slate-100 text-nowrap overflow-hidden">
                                    <p className="text-[10px] text-slate-400 font-bold uppercase mb-1">Département / Section</p>
                                    <p className="text-slate-800 font-bold truncate">{student.section}</p>
                                </div>
                            </div>

                            {/* Section Paiements (Toggle) */}
                            <div className="mt-6 border-t border-slate-50 pt-6">
                                <button
                                    onClick={() => setShowPaiements(!showPaiements)}
                                    className="w-full flex items-center justify-between text-slate-800 font-bold text-sm bg-slate-50 p-4 rounded-2xl"
                                >
                                    <span>Situation Financière</span>
                                    <i className={`fas fa-chevron-${showPaiements ? 'up' : 'down'} text-blue-600`}></i>
                                </button>

                                {showPaiements && (
                                    <div className="mt-4 space-y-3 animate-fade-in">
                                        {student.paiements && student.paiements.length > 0 ? (
                                            student.paiements.map((p, i) => (
                                                <div key={i} className="flex justify-between items-center p-3 border-b border-slate-50 last:border-0">
                                                    <div className="text-left">
                                                        <p className="text-xs font-black text-slate-800 uppercase">{p.motif}</p>
                                                        <p className="text-[10px] text-slate-400">Reçu N° {p.n_recu} • {p.date_paiement}</p>
                                                    </div>
                                                    <span className="text-sm font-bold text-blue-600">{p.montant} $</span>
                                                </div>
                                            ))
                                        ) : (
                                            <p className="text-center text-xs text-slate-400 py-4">Aucun paiement enregistré.</p>
                                        )}
                                    </div>
                                )}
                            </div>
                        </div>
                    </div>
                )}

                {/* Erreur */}
                {error && (
                    <div className="bg-red-50 rounded-[2.5rem] p-8 text-center border border-red-100 animate-shake">
                        <i className="fas fa-user-slash text-4xl text-red-500 mb-4"></i>
                        <h3 className="text-lg font-black text-red-900 uppercase">Données Inconnues</h3>
                        <p className="text-red-700 text-xs mt-2 leading-relaxed">
                            Le matricule <span className="font-mono font-bold">{matricule}</span> n'est pas reconnu.<br/>
                            Veuillez vous présenter au service <strong>CTIC DE L'ISTM KISANGANI</strong> pour régularisation.
                        </p>
                    </div>
                )}
            </div>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<VerificationApp />);
</script>

<style>
    body { font-family: 'Inter', sans-serif; }
    .animate-fade-in { animation: fadeIn 0.4s ease-out forwards; }
    .animate-shake { animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both; }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes shake { 10%, 90% { transform: translateX(-1px); } 20%, 80% { transform: translateX(2px); } 30%, 50%, 70% { transform: translateX(-4px); } 40%, 60% { transform: translateX(4px); } }
    .text-nowrap { white-space: nowrap; }
</style>