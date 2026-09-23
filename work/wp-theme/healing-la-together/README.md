# Healing Los Angeles Together — WordPress Theme

A Full Site Editing (FSE / block) theme built for **healinglosangelestogether.org**. Every section is a native Gutenberg block pattern, so content stays fully drag-and-drop editable in the Site Editor — no page builder plugin required.

## What's included

- **Typography:** Fraunces (headings) + Inter (body), loaded from Google Fonts.
- **Color system:** Navy (`#0b3768`) + Amber (`#d4a017`), defined once in `theme.json` so it's reusable across every block.
- **Navigation:** Home / About / **Programs ▾** (Eat Manna Food Pantry, Healing Bridges, Mercy Seat Immigration & Advocacy) / Blog / Donate — pre-built into `parts/header.html`.
- **Footer:** Quick Links, real Instagram (@healinglosangelestogether) and Facebook links, newsletter signup, and a Privacy Policy / Terms of Use row.
- **Real 2025 impact data:** 16,248 families served, 778,178 lbs of food distributed, 76 distribution days, 1,440 Narcan trainings.
- **Real photos:** `assets/media/photos/` — Eat Manna Food Pantry, Healing Bridges, and Mercy Seat outreach photography, used throughout the homepage (feature grid, media spotlight, and a 4-photo "Programs in Action" gallery band).
- **Patterns:** hero, impact stats + mission, Humanity Heroes partnership spotlight, founder spotlight, programs (3 program cards + partnerships band), photo gallery, latest blog posts (live query loop), donate CTA.

## Install & set up (10 minutes)

1. **Upload:** In wp-admin, go to *Appearance → Themes → Add New → Upload Theme*, upload this ZIP, and Activate.
   - Activating automatically creates five draft pages: **Eat Manna Food Pantry**, **Healing Bridges**, **Mercy Seat Immigration & Advocacy**, **Privacy Policy**, and **Terms of Use** — these are exactly the URLs the Programs dropdown and footer already link to.
2. **Publish those pages:** Open each draft under *Pages*, add the real copy, and publish. (Slugs already match the live site's URLs: `/eat-manna-food-pantry/`, `/healing-bridges/`, `/mercy-seat-immigration-advocacy/`, `/privacy-policy/`, `/terms-of-use/`.)
3. **Set the site logo:** *Appearance → Editor → Styles* (or *Site Identity*) → upload the real HLAT logo. It appears in the header and footer automatically.
4. **Set the homepage:** *Settings → Reading* → "A static page" → Homepage = a page using the **Front Page** template (or just leave the default — `templates/front-page.html` is used automatically for the site's homepage once one static page is set).
5. **Create a Posts page** for `/blog/` (a blank page titled "Blog," set as the Posts page in *Settings → Reading*) so the Blog nav link and "Latest Stories" pattern work.
6. **Review colors/fonts:** Open *Appearance → Editor → Styles* to confirm the Navy/Amber palette and Fraunces/Inter fonts loaded correctly.
7. **Donate link:** already points to `https://givebutter.com/helpingLAtogether` — update `HLAT_DONATE_URL` in `functions.php` if that ever changes.

## Notes

- The header/footer navigation blocks ship with real links baked in (not an empty menu) so the site works immediately after activation — but you can still fully customize them visually in the Site Editor (*Appearance → Editor → Navigation*).
- Swap any photo by clicking it in the Site Editor and using "Replace" — the files in `assets/media/photos/` are just starting defaults, not locked in.
- No plugins are required. This is a **package only** — nothing has been deployed to a live server.
