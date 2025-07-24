<?php include("includes/header.php"); ?>

<div class="max-w-7xl mx-auto px-4 py-10">
  <h2 class="text-4xl font-bold text-purple-400 mb-8 text-center">Arcane Characters</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php
    $characters = json_decode(file_get_contents("data/characters.json"), true);

    if (is_array($characters)) {
      // Sort characters alphabetically by name
      usort($characters, function ($a, $b) {
        return strcmp($a['name'], $b['name']);
      });

      foreach ($characters as $char):
        $name = htmlspecialchars($char['name'] ?? 'Unknown');
        $nickname = htmlspecialchars($char['nickname'] ?? '');
        $role = htmlspecialchars($char['role'] ?? 'N/A');
        $faction = htmlspecialchars($char['faction'] ?? 'N/A');
        $image = htmlspecialchars($char['image'] ?? 'images/default.jpg');
        $id = urlencode($char['id'] ?? '');
        $quote = htmlspecialchars($char['quote'] ?? '');
        $description = (isset($char['description']) && is_string($char['description']) && strlen($char['description']) > 0)
                        ? htmlspecialchars(substr($char['description'], 0, 100)) . '...'
                        : 'No description available.';
    ?>
      <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-purple-500/50 transition">
        <img src="<?= $image ?>" alt="<?= $name ?>" class="h-64 w-full object-cover">
        <div class="p-6">
          <h3 class="text-2xl font-bold text-white"><?= $name ?></h3>
          <p class="text-purple-400 italic"><?= $nickname ?></p>
          <div class="mt-2 flex flex-wrap gap-2">
            <span class="bg-purple-600 text-white text-xs px-2 py-1 rounded-full"><?= $role ?></span>
            <span class="bg-blue-600 text-white text-xs px-2 py-1 rounded-full"><?= $faction ?></span>
          </div>
          <p class="text-sm text-gray-300 mt-4"><?= $description ?></p>
          <?php if (!empty($quote)): ?>
            <p class="mt-3 text-sm text-yellow-400 italic">"<?= $quote ?>"</p>
          <?php endif; ?>
          <a href="character.php?id=<?= $id ?>" class="inline-block mt-4 text-purple-300 hover:no-underline focus:no-underline">View Profile →</a>
        </div>
      </div>
    <?php
      endforeach;
    } else {
      echo '<p class="text-red-500">Failed to load character data.</p>';
    }
    ?>
  </div>
</div>

<?php include("includes/footer.php"); ?>
