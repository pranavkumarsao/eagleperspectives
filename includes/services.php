<?php
$services = [
  [
    'title' => 'Consumer & Market Intelligence',
    'tagline' => 'Seeing markets as systems, not snapshots',
    'items' => [
      'Market Entry & Expansion Strategy',
      'Market Structure & Opportunity Mapping',
      'Consumer Understanding & Behavioural Insight',
      'Segmentation & Strategic Personas',
      'Shopper, Channel & Path-to-Purchase',
    ],
  ],
  [
    'title' => 'Brand, Communication & Media Strategy',
    'tagline' => 'Building brands that remain relevant under pressure',
    'items' => [
      'Brand Equity & Diagnostic Assessment',
      'Brand Positioning & Architecture',
      'Communication Development & Evaluation',
      'Media & ROI Intelligence',
    ],
  ],
  [
    'title' => 'Product, Innovation & Experience',
    'tagline' => 'Reducing risk while accelerating progress',
    'items' => [
      'Innovation Strategy & Opportunity Identification',
      'Concept, Product & Service Development',
      'Pricing & Revenue Strategy',
      'Experience & Sensory Intelligence',
    ],
  ],
  [
    'title' => 'AI + Human Intelligence',
    'tagline' => 'Scale through technology. Direction through strategy.',
    'items' => [
      'Large-scale data analysis & pattern detection',
      'Structured & unstructured data integration',
      'Early signal detection & emerging trends',
      'Contextual strategic interpretation',
    ],
  ],
  [
    'title' => 'Integrated Solutions',
    'tagline' => 'Designed to converge, not fragment',
    'items' => [
      'Multi-lens convergence frameworks',
      'Cross-functional insight synthesis',
      'One coherent strategic narrative',
      'Leadership alignment & momentum',
    ],
  ],
];
?>

<section id="services" class="py-24 lg:py-32 bg-secondary">
  <div class="max-w-6xl mx-auto px-6 lg:px-8">
    <div class="max-w-3xl mx-auto text-center mb-16">
      <p class="text-xs tracking-[0.3em] uppercase text-primary font-medium mb-4">Services</p>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">
        One partner. Every insight. <span class="text-primary-gradient">One clear way forward.</span>
      </h2>
      <p class="text-muted-foreground">
        An integrated suite of insight and strategy services across the full decision lifecycle.
      </p>
      <div class="section-divider-center mt-6"></div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($services as $i => $service): ?>
      <div class="bg-background p-8 border border-border hover:shadow-lg transition-shadow <?php echo $i === 4 ? 'md:col-span-2 lg:col-span-1' : ''; ?>">
        <h3 class="text-lg font-semibold mb-1"><?php echo htmlspecialchars($service['title']); ?></h3>
        <p class="text-xs text-primary font-medium tracking-wide mb-5"><?php echo htmlspecialchars($service['tagline']); ?></p>
        <ul class="space-y-2.5">
          <?php foreach ($service['items'] as $item): ?>
          <li class="flex items-start gap-2 text-sm text-muted-foreground">
            <span class="w-1 h-1 rounded-full bg-primary mt-2 shrink-0"></span>
            <?php echo htmlspecialchars($item); ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
