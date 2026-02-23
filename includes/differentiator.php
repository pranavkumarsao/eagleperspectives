<?php
$differentiators = [
  [
    'title' => 'Designed to converge, not just inform',
    'description' => 'Most insight organisations optimise for production. Eagle Perspectives is optimised for decision-making. We integrate multiple inputs into one narrative, balance speed with rigour, and take ownership of synthesis.',
  ],
  [
    'title' => 'Senior-led by design',
    'description' => 'Every engagement is shaped and led by senior practitioners with decades of experience across categories and markets. This ensures consistency, relevance, and strategic depth throughout.',
  ],
  [
    'title' => 'Flexible, modular, and responsive',
    'description' => 'Fast, focused solutions when time is critical. Deep, scenario-based strategy when stakes are high. Value-for-money structures without compromising quality. Our model adapts to the question at hand.',
  ],
];
?>

<section class="py-24 lg:py-32">
  <div class="max-w-6xl mx-auto px-6 lg:px-8">
    <div class="max-w-3xl mb-16">
      <p class="text-xs tracking-[0.3em] uppercase text-primary font-medium mb-4">What Makes Us Different</p>
      <h2 class="text-3xl md:text-4xl font-bold mb-6">
        Designed to <span class="text-primary-gradient">converge</span>, not just inform
      </h2>
      <div class="section-divider"></div>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <?php foreach ($differentiators as $i => $item): ?>
      <div class="group relative p-8 border border-border hover:border-primary/30 transition-colors">
        <div class="absolute top-0 left-0 w-full h-px bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
        <span class="text-5xl font-bold text-primary/10 mb-4 block">
          <?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?>
        </span>
        <h3 class="text-lg font-semibold mb-3"><?php echo $item['title']; ?></h3>
        <p class="text-sm text-muted-foreground leading-relaxed"><?php echo $item['description']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
