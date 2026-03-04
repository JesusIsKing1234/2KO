<?php
require_once __DIR__ . '/includes/layout.php';
render_head('Book | Artist Album Hub', 'Booking inquiry for churches, conferences, and worship events.');
render_header('book.php');
?>
<main id="main" class="section">
  <div class="container split-2">
    <article class="card">
      <p class="eyebrow">Book</p>
      <h1>Book for church nights and conferences</h1>
      <p>PLACEHOLDER: what is included, team size, and format.</p>
      <h2>Tech basics</h2>
      <p>PLACEHOLDER: minimum stage, monitor, and input requirements.</p>
    </article>
    <article class="card" id="join-list">
      <h2>Booking inquiry</h2>
      <form action="#" method="post">
        <label for="name">Name</label>
        <input id="name" name="name" required>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" required>
        <label for="event-date">Event date</label>
        <input id="event-date" name="event-date" type="date">
        <label for="message">Event details</label>
        <textarea id="message" name="message" rows="5"></textarea>
        <button class="btn btn-brand" type="submit">Send inquiry</button>
      </form>
      <p>Direct contact: <a href="mailto:<?php echo htmlspecialchars($site['booking_email']); ?>"><?php echo htmlspecialchars($site['booking_email']); ?></a></p>
    </article>
  </div>
</main>
<?php render_mobile_cta(); ?>
<?php render_footer(); ?>
