<?php require_once 'app/views/layouts/header.php'; ?>

<!-- Hero Section -->
<div class="grid md:grid-cols-2 gap-12 items-center mb-16">
    <div>
        <h2 class="text-4xl font-bold text-primary-dark mb-6">
            Professioneel Bandenbeheer voor uw Wagenpark
        </h2>
        <p class="text-xl text-gray-600 mb-8">
            Monitor en beheer de conditie van uw banden met ons geavanceerde volgsysteem. 
            Optimaliseer de levensduur van uw banden en verhoog de veiligheid.
        </p>
        <div class="space-x-4">
            <a href="/login/customer" class="bg-primary-medium text-white px-8 py-3 rounded-lg font-semibold hover:bg-accent transition-colors">
                Klant Login
            </a>
            <a href="/login/company" class="bg-primary-dark text-white px-8 py-3 rounded-lg font-semibold hover:bg-accent transition-colors">
                Bedrijf Login
            </a>
        </div>
    </div>
    <div class="bg-white p-8 rounded-xl shadow-xl border-2 border-primary-light">
        <h3 class="text-2xl font-semibold text-primary-dark mb-6">Direct Inloggen</h3>
        <form action="/login" method="POST" class="space-y-6">
            <div>
                <label for="email" class="block text-gray-700 mb-2">E-mailadres</label>
                <input type="email" id="email" name="email" required 
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-medium">
            </div>
            <div>
                <label for="password" class="block text-gray-700 mb-2">Wachtwoord</label>
                <input type="password" id="password" name="password" required 
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-medium">
            </div>
            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" class="rounded text-primary-medium" name="remember">
                    <span class="ml-2 text-gray-700">Onthoud mij</span>
                </label>
                <a href="/password/reset" class="text-primary-medium hover:text-accent">
                    Wachtwoord vergeten?
                </a>
            </div>
            <button type="submit" 
                class="w-full bg-primary-dark text-white py-3 rounded-lg font-semibold hover:bg-accent transition-colors">
                Inloggen
            </button>
        </form>
    </div>
</div>

<!-- Features -->
<div class="grid md:grid-cols-3 gap-8 mb-16">
    <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-primary-dark hover:border-accent transition-colors">
        <h3 class="text-xl font-semibold text-primary-dark mb-4">Real-time Monitoring</h3>
        <p class="text-gray-600">
            Volg de staat van uw banden in real-time. Ontvang meldingen wanneer onderhoud nodig is.
        </p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-primary-dark hover:border-accent transition-colors">
        <h3 class="text-xl font-semibold text-primary-dark mb-4">Uitgebreide Rapportages</h3>
        <p class="text-gray-600">
            Bekijk gedetailleerde rapportages over profieldiepte, druk en algemene bandconditie.
        </p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-primary-dark hover:border-accent transition-colors">
        <h3 class="text-xl font-semibold text-primary-dark mb-4">Preventief Onderhoud</h3>
        <p class="text-gray-600">
            Voorkom problemen door tijdig inzicht in de staat van uw banden.
        </p>
    </div>
</div>

<?php require_once 'app/views/layouts/footer.php'; ?>