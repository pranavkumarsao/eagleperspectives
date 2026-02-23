<?php
$leaders = [
  [
    'name' => 'Vivek Gupta',
    'role' => 'Founder & Managing Partner',
    'focus' => 'Strategic framing, synthesis, and leadership alignment',
    'bio' => 'Over two decades of experience across market research, analytics, and strategic advisory. Leads complex, multi-market programmes for organisations navigating growth and transformation.',
    'linkedin' => 'https://www.linkedin.com/in/vivek-gupta-4608065/',
  ],
  [
    'name' => 'Nilakshi Sengupta',
    'role' => 'Partner – Consumer & Cultural Insights',
    'focus' => 'Qualitative research, cultural analysis & behavioural understanding',
    'bio' => 'Deep expertise in ethnographic programmes, cultural and semiotic interpretation, and consumer narrative synthesis. Ensures human context remains central to strategic decisions.',
    'linkedin' => 'https://www.linkedin.com/in/findnilakshi/',
  ],
  [
    'name' => 'Sharmila Das',
    'role' => 'Partner – Brand & Strategic Intelligence',
    'focus' => 'Brand strategy, equity measurement & long-term brand building',
    'bio' => 'Extensive experience across categories and markets with a sharp strategic lens on brand positioning, architecture, and communication effectiveness.',
    'linkedin' => 'https://www.linkedin.com/in/sharmila-das-a642293/',
  ],
  [
    'name' => 'Sanjay Pal',
    'role' => 'Partner – Analytics & Strategic Intelligence',
    'focus' => 'Advanced modelling, analytics & AI-enabled intelligence',
    'bio' => 'Expertise in translating complex data into meaningful insight. Leads integration of structured and unstructured data with AI-enabled pattern detection.',
    'linkedin' => 'https://www.linkedin.com/in/sanjay2609/',
  ],
  [
    'name' => 'Vinay Pant',
    'role' => 'Partner – Growth Strategy & Consumer Leadership',
    'focus' => 'Consumer-led growth, market expansion & commercial prioritisation',
    'bio' => 'Works closely with senior leadership teams to align consumer-led thinking with commercial priorities and long-term growth ambitions.',
    'linkedin' => 'https://www.linkedin.com/in/vinay-pant-5682625/',
  ],
  [
    'name' => 'Vigyan Verma',
    'role' => 'Partner – Brand, Marketing & Strategic Intelligence',
    'focus' => 'Brand strategy, marketing integration & strategic interpretation',
    'bio' => 'More than two decades of leadership in brand strategy and communications across global and Indian contexts, driving brand transformation and growth.',
    'linkedin' => 'https://www.linkedin.com/in/vigyanverma/',
  ],
  [
    'name' => 'Ronita Mitra',
    'role' => 'Partner – Brand & Strategic Growth',
    'focus' => 'Brand strategy, consumer experience & strategic planning',
    'bio' => 'Extensive leadership experience across consumer goods, financial services, and telecommunications, driving brand transformation and communication strategy.',
    'linkedin' => 'https://www.linkedin.com/in/ronita-mitra-4891713/',
  ],
];

function getInitials($name)
{
  $parts = explode(' ', $name);
  $initials = '';
  foreach ($parts as $part) {
    $initials .= mb_substr($part, 0, 1);
  }
  return $initials;
}
?>

<section id="leadership" class="py-24 lg:py-32 bg-secondary">
  <div class="max-w-6xl mx-auto px-6 lg:px-8">
    <div class="max-w-3xl mx-auto text-center mb-16">
      <p class="text-xs tracking-[0.3em] uppercase text-primary font-medium mb-4">Leadership</p>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">
        Built by leaders who have <span class="text-primary-gradient">navigated complexity</span> before
      </h2>
      <div class="section-divider-center mt-6"></div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($leaders as $i => $leader): ?>
        <div
          class="bg-background p-8 border border-border group hover:border-primary/20 transition-colors <?php echo $i === 0 ? 'md:col-span-2 lg:col-span-1 lg:row-span-1' : ''; ?>">
          <!-- Initials avatar -->
          <div class="w-12 h-12 bg-primary/5 border border-primary/10 flex items-center justify-center mb-5">
            <span class="text-sm font-bold text-primary">
                <?php echo getInitials($leader['name']); ?>
            </span>
          </div>
          <h3 class="text-base font-semibold"><?php echo htmlspecialchars($leader['name']); ?></h3>
          <p class="text-xs text-primary font-medium tracking-wide mb-3"><?php echo htmlspecialchars($leader['role']); ?>
          </p>
          <p class="text-xs text-muted-foreground leading-relaxed mb-3"><?php echo htmlspecialchars($leader['bio']); ?>
          </p>
          <p class="text-xs text-foreground/60 italic mb-4"><?php echo htmlspecialchars($leader['focus']); ?></p>
          <?php if (!empty($leader['linkedin'])): ?>
            <a href="<?php echo htmlspecialchars($leader['linkedin']); ?>" target="_blank" rel="noopener noreferrer"
              class="inline-flex items-center gap-1.5 text-xs text-primary/70 hover:text-primary transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
              </svg>
              LinkedIn
            </a>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>