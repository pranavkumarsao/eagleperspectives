<?php
$steps = [
  ['num' => '01', 'title' => 'Strategic Framing', 'desc' => 'We align on decision scope, success criteria, time horizons, and key uncertainties. This creates a shared definition of the problem.'],
  ['num' => '02', 'title' => 'Insight Architecture Design', 'desc' => 'We determine which lenses are essential, which data sources are required, and where depth is needed versus breadth.'],
  ['num' => '03', 'title' => 'Integrated Analysis', 'desc' => 'Inputs are analysed both independently and collectively. Contradictions are explored. Patterns are tested across lenses.'],
  ['num' => '04', 'title' => 'Strategy-led Convergence', 'desc' => 'We integrate findings into clear strategic choices, explicit trade-offs, and prioritised pathways. We take responsibility for recommending a way forward.'],
  ['num' => '05', 'title' => 'Implications & Alignment', 'desc' => 'We articulate what this strategy enables, what it deprioritises, and what changes in behaviour or investment are required.'],
];

$engagementTypes = [
  ['title' => 'Rapid Strategic Sprints', 'desc' => 'Time-sensitive decisions, market shocks, leadership alignment under pressure.'],
  ['title' => 'Deep Strategic Programmes', 'desc' => 'Category redefinition, portfolio resets, market entry or transformation initiatives.'],
  ['title' => 'Ongoing Strategic Partnerships', 'desc' => 'Continuous sensing of change, strategic interpretation, trusted external perspective.'],
];
?>

<section id="how-we-work" class="py-24 lg:py-32">
  <div class="max-w-6xl mx-auto px-6 lg:px-8">
    <div class="max-w-3xl mb-16">
      <p class="text-xs tracking-[0.3em] uppercase text-primary font-medium mb-4">How We Work</p>
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        Our <span class="text-primary-gradient">Strategic Synthesis</span> Model
      </h2>
      <p class="text-muted-foreground">
        Every engagement begins with clarifying the decision that needs to be made—not with tools, templates, or methodologies.
      </p>
      <div class="section-divider mt-6"></div>
    </div>

    <!-- Steps -->
    <div class="space-y-0 mb-24">
      <?php foreach ($steps as $step): ?>
      <div class="grid grid-cols-[60px_1fr] md:grid-cols-[80px_1fr] gap-4 py-8 border-b border-border group">
        <span class="text-3xl md:text-4xl font-bold text-primary/15 group-hover:text-primary/40 transition-colors">
          <?php echo $step['num']; ?>
        </span>
        <div>
          <h3 class="text-lg font-semibold mb-2"><?php echo $step['title']; ?></h3>
          <p class="text-sm text-muted-foreground leading-relaxed max-w-2xl"><?php echo $step['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Engagement types -->
    <div class="max-w-3xl">
      <h3 class="text-2xl font-bold mb-8">
        Engagement <span class="text-primary-gradient">Types</span>
      </h3>
      <div class="grid md:grid-cols-3 gap-6">
        <?php foreach ($engagementTypes as $type): ?>
        <div class="border-l-2 border-primary/20 pl-5">
          <h4 class="font-semibold mb-2 text-sm"><?php echo $type['title']; ?></h4>
          <p class="text-xs text-muted-foreground leading-relaxed"><?php echo $type['desc']; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
