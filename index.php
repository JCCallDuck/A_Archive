<?php include("header.php"); ?>

<!-- Hero Section -->
<section class="relative bg-cover bg-center bg-[url('arcane-bg.jpg')] h-[65vh] flex items-center justify-center">
  <div class="bg-black bg-opacity-70 w-full h-full absolute top-0 left-0"></div>
  <div class="relative z-10 text-center text-white px-6">
    <h1 class="text-4xl md:text-6xl font-bold text-purple-300">Welcome to the Arcane Archive</h1>
    <p class="mt-4 text-lg max-w-2xl mx-auto">A fan-made archive of the world of Arcane — explore the characters, lore, and power struggles between Piltover and Zaun.</p>
    <a href="characters.php" class="inline-block mt-6 px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white rounded-lg text-lg font-semibold">Explore Characters</a>
  </div>
</section>

<!-- Continuous Sliding Character Carousel -->
<section class="bg-gray-900 pt-0 pb-12 overflow-hidden">
  <div class="w-full">
    <div class="relative w-full overflow-hidden">
      <div id="slider" class="flex animate-slide">
        <!-- Character Images -->
        <img src="jinx.jpg" alt="Jinx" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="vi.jpg" alt="Vi" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="silco.jpg" alt="Silco" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="ekko.jpg" alt="Ekko" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="caitlyn.jpg" alt="Caitlyn" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="jayce.jpg" alt="Jayce" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="heimerdinger.jpg" alt="Heimerdinger" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="mel.jpg" alt="Mel" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="sevika.jpg" alt="Sevika" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="viktor.jpg" alt="Viktor" class="w-64 h-64 object-cover flex-shrink-0">
        <!-- Duplicate for seamless loop -->
        <img src="jinx.jpg" alt="Jinx" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="vi.jpg" alt="Vi" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="silco.jpg" alt="Silco" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="ekko.jpg" alt="Ekko" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="caitlyn.jpg" alt="Caitlyn" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="jayce.jpg" alt="Jayce" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="heimerdinger.jpg" alt="Heimerdinger" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="mel.jpg" alt="Mel" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="sevika.jpg" alt="Sevika" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="viktor.jpg" alt="Viktor" class="w-64 h-64 object-cover flex-shrink-0">
        <!-- Duplicate for seamless loop -->
        <img src="jinx.jpg" alt="Jinx" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="vi.jpg" alt="Vi" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="silco.jpg" alt="Silco" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="ekko.jpg" alt="Ekko" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="caitlyn.jpg" alt="Caitlyn" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="jayce.jpg" alt="Jayce" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="heimerdinger.jpg" alt="Heimerdinger" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="mel.jpg" alt="Mel" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="sevika.jpg" alt="Sevika" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="viktor.jpg" alt="Viktor" class="w-64 h-64 object-cover flex-shrink-0">
        <!-- Duplicate for seamless loop -->
        <img src="jinx.jpg" alt="Jinx" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="vi.jpg" alt="Vi" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="silco.jpg" alt="Silco" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="ekko.jpg" alt="Ekko" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="caitlyn.jpg" alt="Caitlyn" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="jayce.jpg" alt="Jayce" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="heimerdinger.jpg" alt="Heimerdinger" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="mel.jpg" alt="Mel" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="sevika.jpg" alt="Sevika" class="w-64 h-64 object-cover flex-shrink-0">
        <img src="viktor.jpg" alt="Viktor" class="w-64 h-64 object-cover flex-shrink-0">
      </div>
    </div>
  </div>
</section>

<!-- Tailwind custom animation -->
<style>
  @keyframes slide {
    0% { transform: translateX(0); }
    100% { transform: translateX(-100%); }
  }

  .animate-slide {
    animation: slide 100s linear infinite;
  }
</style>

<!-- Introduction -->
<section class="py-12 bg-gray-900 text-gray-200 px-6">
  <div class="max-w-5xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-purple-400 mb-4">About Arcane</h2>
    <p class="text-lg leading-relaxed">
      Arcane is a stunning animated series set in the universe of League of Legends. It follows the origins of iconic champions like Jinx, Vi, Jayce, and more as tensions rise between the utopian city of <strong>Piltover</strong> and the oppressed underground city of <strong>Zaun</strong>. The story dives into themes of class, innovation, rebellion, and the cost of ambition.
    </p>
  </div>
</section>

<!-- Lore Cards: Piltover & Zaun -->
<section class="bg-gray-950 py-16 px-6">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-purple-400 mb-10">The Twin Cities</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <!-- Piltover Card -->
      <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-purple-500/40 transition">
        <h3 class="text-2xl font-semibold text-white mb-2">Piltover</h3>
        <p class="text-gray-300">
          Known as the City of Progress, Piltover stands as a beacon of innovation and wealth. Built high above Zaun, it thrives on Hextech technology, scientific advancement, and a strict societal order. Its leaders, like Jayce and Heimerdinger, strive to push the boundaries of what’s possible — but not without consequence.
        </p>
        <img src="piltover.jpg" alt="Piltover" class="mt-4 rounded shadow-md">
      </div>

      <!-- Zaun Card -->
      <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-purple-500/40 transition">
        <h3 class="text-2xl font-semibold text-white mb-2">Zaun</h3>
        <p class="text-gray-300">
          Beneath Piltover lies Zaun — a city of survival, rebellion, and innovation born of necessity. It's home to tinkerers, rebels, and outcasts. Shimmer, an addictive substance, is both a source of power and destruction. Figures like Silco, Jinx, and Ekko lead very different lives shaped by the chaos and freedom of Zaun.
        </p>
        <img src="zaun.jpg" alt="Zaun" class="mt-4 rounded shadow-md">
      </div>

    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="bg-gradient-to-r from-purple-800 to-purple-600 py-12 text-white text-center">
  <h2 class="text-2xl md:text-3xl font-bold mb-4">Ready to dive into the stories of Piltover & Zaun?</h2>
  <a href="characters.php" class="inline-block mt-4 px-8 py-3 bg-gray-900 hover:bg-gray-800 rounded-full text-lg font-semibold transition">Browse Characters →</a>
</section>

<?php include("footer.php"); ?>
