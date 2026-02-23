<nav id="main-nav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent">
  <div class="max-w-6xl mx-auto px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 lg:h-20">
      <!-- Logo -->
      <a href="#home" class="flex items-center">
        <img src="assets/eagle-logo.png" alt="Eagle Perspectives" class="h-20 w-auto" />
      </a>

      <!-- Desktop nav -->
      <div class="hidden lg:flex items-center gap-8">
        <a href="#home" class="text-xs font-medium tracking-widest uppercase text-muted-foreground hover:text-primary transition-colors">Home</a>
        <a href="#about" class="text-xs font-medium tracking-widest uppercase text-muted-foreground hover:text-primary transition-colors">About</a>
        <a href="#philosophy" class="text-xs font-medium tracking-widest uppercase text-muted-foreground hover:text-primary transition-colors">Philosophy</a>
        <a href="#services" class="text-xs font-medium tracking-widest uppercase text-muted-foreground hover:text-primary transition-colors">Services</a>
        <a href="#how-we-work" class="text-xs font-medium tracking-widest uppercase text-muted-foreground hover:text-primary transition-colors">How We Work</a>
        <a href="#leadership" class="text-xs font-medium tracking-widest uppercase text-muted-foreground hover:text-primary transition-colors">Leadership</a>
        <a href="#contact" class="text-xs font-medium tracking-widest uppercase text-muted-foreground hover:text-primary transition-colors">Contact</a>
      </div>

      <!-- Mobile toggle -->
      <button onclick="toggleMobileMenu()" class="lg:hidden flex flex-col gap-1.5 p-2" aria-label="Menu" id="menu-btn">
        <span id="bar1" class="block w-5 h-px bg-foreground transition-transform"></span>
        <span id="bar2" class="block w-5 h-px bg-foreground transition-opacity"></span>
        <span id="bar3" class="block w-5 h-px bg-foreground transition-transform"></span>
      </button>
    </div>
  </div>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="lg:hidden bg-background border-b border-border hidden">
    <div class="px-6 py-4 space-y-3">
      <a href="#home" onclick="closeMobileMenu()" class="block text-xs font-medium tracking-widest uppercase text-muted-foreground hover:text-primary transition-colors py-2">Home</a>
      <a href="#about" onclick="closeMobileMenu()" class="block text-xs font-medium tracking-widest uppercase text-muted-foreground hover:text-primary transition-colors py-2">About</a>
      <a href="#philosophy" onclick="closeMobileMenu()" class="block text-xs font-medium tracking-widest uppercase text-muted-foreground hover:text-primary transition-colors py-2">Philosophy</a>
      <a href="#services" onclick="closeMobileMenu()" class="block text-xs font-medium tracking-widest uppercase text-muted-foreground hover:text-primary transition-colors py-2">Services</a>
      <a href="#how-we-work" onclick="closeMobileMenu()" class="block text-xs font-medium tracking-widest uppercase text-muted-foreground hover:text-primary transition-colors py-2">How We Work</a>
      <a href="#leadership" onclick="closeMobileMenu()" class="block text-xs font-medium tracking-widest uppercase text-muted-foreground hover:text-primary transition-colors py-2">Leadership</a>
      <a href="#contact" onclick="closeMobileMenu()" class="block text-xs font-medium tracking-widest uppercase text-muted-foreground hover:text-primary transition-colors py-2">Contact</a>
    </div>
  </div>
</nav>

<script>
  let mobileOpen = false;

  function toggleMobileMenu() {
    mobileOpen = !mobileOpen;
    const menu = document.getElementById('mobile-menu');
    const bar1 = document.getElementById('bar1');
    const bar2 = document.getElementById('bar2');
    const bar3 = document.getElementById('bar3');

    if (mobileOpen) {
      menu.classList.remove('hidden');
      bar1.style.transform = 'rotate(45deg) translateY(4px)';
      bar2.style.opacity = '0';
      bar3.style.transform = 'rotate(-45deg) translateY(-4px)';
    } else {
      menu.classList.add('hidden');
      bar1.style.transform = '';
      bar2.style.opacity = '';
      bar3.style.transform = '';
    }
  }

  function closeMobileMenu() {
    mobileOpen = false;
    document.getElementById('mobile-menu').classList.add('hidden');
    document.getElementById('bar1').style.transform = '';
    document.getElementById('bar2').style.opacity = '';
    document.getElementById('bar3').style.transform = '';
  }

  window.addEventListener('scroll', function() {
    const nav = document.getElementById('main-nav');
    if (window.scrollY > 40) {
      nav.classList.remove('bg-transparent');
      nav.classList.add('bg-background/95', 'backdrop-blur-md', 'shadow-sm', 'border-b', 'border-border');
    } else {
      nav.classList.add('bg-transparent');
      nav.classList.remove('bg-background/95', 'backdrop-blur-md', 'shadow-sm', 'border-b', 'border-border');
    }
  });
</script>
