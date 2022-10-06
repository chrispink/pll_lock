# pll_lock
A lock box for the Polylang Post Meta box whilst in the edit screen.

Due to clients breaking correspondences in Polylang Pro Post Edit and incorrect use of synchronisation, here's a few simple files to add a lock to Polylang Languages Meta Box.

It is applied only in Edit Screen and not the New Post screen

Note this is not a plugin, it's part of a theme and should be embedded as such

  pll.js the Javascript

  admin-style.css  the CSS

  admin-style.scss the SASS

  polylang-functions.php include in your functions.php, references the JS and CSS in directories /js and /css relative to the template directory

Dependencies are dashicons font and jQuery > 1.8

