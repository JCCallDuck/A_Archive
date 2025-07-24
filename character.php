<?php include("header.php"); ?>

<?php
$id = $_GET['id'] ?? '';

if (empty($id)) {
  echo '<div class="text-center py-20 text-red-400 text-xl">No character ID provided.</div>';
  include("footer.php");
  exit;
}

$characters = json_decode(file_get_contents("characters.json"), true);
$char = null;
foreach ($characters as $c) {
  if ($c['id'] === $id) {
    $char = $c;
    break;
  }
}
?>

<?php if ($char): ?>
<div class="max-w-5xl mx-auto px-4 py-10">
  <div class="bg-gray-800 rounded-xl shadow-xl flex flex-col md:flex-row overflow-hidden">
    <img src="<?= htmlspecialchars($char['image']) ?>" alt="<?= htmlspecialchars($char['name']) ?>" class="w-full md:w-1/3 h-auto object-cover">
    <div class="p-6 md:w-2/3">
      <h1 class="text-4xl font-bold text-white"><?= htmlspecialchars($char['name']) ?></h1>
      <p class="text-purple-400 italic text-lg"><?= htmlspecialchars($char['nickname']) ?></p>

      <div class="mt-4 space-y-2 text-sm text-gray-300">
        <p><strong>Role:</strong> <?= htmlspecialchars($char['role']) ?></p>
        <p><strong>Faction:</strong> <?= htmlspecialchars($char['faction']) ?></p>
      </div>

      <p class="mt-6 text-gray-200"><?= nl2br(htmlspecialchars($char['description'])) ?></p>

      <?php if (!empty($char['abilities'])): ?>
        <div class="mt-6">
          <h2 class="text-lg font-bold text-purple-300 mb-2">Abilities</h2>
          <ul class="list-disc list-inside text-gray-300">
            <?php foreach ($char['abilities'] as $ability): ?>
              <li><?= htmlspecialchars($ability) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <?php if (!empty($char['quote'])): ?>
        <blockquote class="mt-6 italic text-purple-300 border-l-4 border-purple-600 pl-4">
          “<?= htmlspecialchars($char['quote']) ?>”
        </blockquote>
      <?php endif; ?>

      <a href="characters.php" class="inline-block mt-6 text-purple-400 hover:underline-none focus:underline-none no-underline">← Back to Characters</a>
    </div>
  </div>
</div>
<?php else: ?>
  <div class="text-center py-20 text-red-400 text-xl">Character not found.</div>
<?php endif; ?>

<?php include("footer.php"); ?>
