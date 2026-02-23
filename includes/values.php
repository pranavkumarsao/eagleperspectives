<?php
$values = [
  ['title' => 'Strategy First', 'desc' => 'Every engagement is anchored in the decision that needs to be made. Insight serves strategy—not the other way around.'],
  ['title' => 'Plurality with Purpose', 'desc' => 'We actively seek diverse perspectives, methodologies, and viewpoints—but always with the intent of convergence and clarity.'],
  ['title' => 'Rigour without Rigidity', 'desc' => 'We uphold high standards of quality and discipline while remaining flexible and responsive to client needs.'],
  ['title' => 'Ownership of Outcomes', 'desc' => 'We take responsibility for synthesis, prioritisation, and recommendation. We do not leave clients to connect the dots alone.'],
  ['title' => 'Learning as a Constant', 'desc' => 'Markets evolve. Tools evolve. We invest continuously in learning, capability building, and staying ahead.'],
];
?>

<section class="py-24 lg:py-32">
  <div class="max-w-6xl mx-auto px-6 lg:px-8">
    <div class="max-w-3xl mb-16">
      <p class="text-xs tracking-[0.3em] uppercase text-primary font-medium mb-4">Culture &amp; Values</p>
      <h2 class="text-3xl md:text-4xl font-bold mb-6">
        What defines <span class="text-primary-gradient">how we work</span>
      </h2>
      <div class="section-divider"></div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-6">
      <?php foreach ($values as $v): ?>
      <div class="border-t-2 border-primary/15 pt-5">
        <h3 class="text-sm font-semibold mb-2"><?php echo htmlspecialchars($v['title']); ?></h3>
        <p class="text-xs text-muted-foreground leading-relaxed"><?php echo $v['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
