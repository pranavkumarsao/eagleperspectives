<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eagle Perspectives — Strategic Intelligence &amp; Insight</title>
    <meta name="description" content="Plurality in Perspectives. Singularity in Strategy. Eagle Perspectives helps organisations convert complexity into clarity.">
    <meta name="author" content="Eagle Perspectives" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          fontFamily: {
            sans: ['DM Sans', 'system-ui', '-apple-system', 'sans-serif'],
          },
          extend: {
            colors: {
              border: 'hsl(230 20% 90%)',
              input: 'hsl(230 20% 90%)',
              ring: 'hsl(235 65% 45%)',
              background: 'hsl(0 0% 100%)',
              foreground: 'hsl(230 15% 18%)',
              primary: {
                DEFAULT: 'hsl(235 65% 45%)',
                foreground: 'hsl(0 0% 100%)',
                light: 'hsl(235 65% 55%)',
                lighter: 'hsl(235 50% 95%)',
                dark: 'hsl(235 70% 35%)',
              },
              secondary: {
                DEFAULT: 'hsl(230 20% 96%)',
                foreground: 'hsl(230 15% 18%)',
              },
              muted: {
                DEFAULT: 'hsl(230 15% 95%)',
                foreground: 'hsl(230 10% 50%)',
              },
              accent: {
                DEFAULT: 'hsl(235 50% 93%)',
                foreground: 'hsl(235 65% 35%)',
              },
              card: {
                DEFAULT: 'hsl(0 0% 100%)',
                foreground: 'hsl(230 15% 18%)',
              },
            },
            borderRadius: {
              lg: '0.25rem',
              md: 'calc(0.25rem - 2px)',
              sm: 'calc(0.25rem - 4px)',
            },
          },
        },
      }
    </script>
    <style>
      * { border-color: hsl(230 20% 90%); }
      html { scroll-behavior: smooth; }
      body { font-family: 'DM Sans', system-ui, -apple-system, sans-serif; -webkit-font-smoothing: antialiased; }
      h1, h2, h3, h4, h5, h6 { font-weight: 600; letter-spacing: -0.025em; color: hsl(230 15% 18%); }

      .text-primary-gradient {
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        background-image: linear-gradient(135deg, hsl(235 65% 45%), hsl(250 60% 55%));
      }
      .section-divider {
        width: 4rem;
        height: 2px;
        background-color: hsl(235 65% 45% / 0.3);
      }
      .section-divider-center {
        width: 4rem;
        height: 2px;
        background-color: hsl(235 65% 45% / 0.3);
        margin-left: auto;
        margin-right: auto;
      }
      .photo-filter {
        filter: grayscale(100%) brightness(0.9) contrast(1.1);
      }
    </style>
  </head>
  <body class="bg-background text-foreground font-sans">
    <main>
      <?php include 'includes/navigation.php'; ?>
      <?php include 'includes/hero.php'; ?>
      <?php include 'includes/about.php'; ?>
      <?php include 'includes/philosophy.php'; ?>
      <?php include 'includes/differentiator.php'; ?>
      <?php include 'includes/services.php'; ?>
      <?php include 'includes/how-we-work.php'; ?>
      <?php include 'includes/leadership.php'; ?>
      <?php include 'includes/values.php'; ?>
      <?php include 'includes/contact.php'; ?>
      <?php include 'includes/footer.php'; ?>
    </main>
  </body>
</html>
