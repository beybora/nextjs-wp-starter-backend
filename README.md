# NextJS-WP-Starter-Backend

Minimal WordPress backend setup for headless CMS with Next.js.

Includes:

- Clean WordPress core
- Blocksy-based child theme
- Custom Gutenberg blocks (plugin-based)
- Automated deployment via GitHub Actions (rsync)
- Local development with Lando

---

## Project Setup

### 1. Clone the repository

```bash
git clone https://github.com/your-username/nextjs-wp-starter-backend.git
cd nextjs-wp-starter-backend
```

### 2. Start local development (Lando)

```bash
lando start
```

WordPress will be available at `http://nextjs-wp-starter-backend.lndo.site`.

### 3. Build Gutenberg Blocks

```bash
cd wp-content/plugins/custom-gutenberg-blocks
npm install
npm run build
```

---

## Deployment

Deployment is automated via GitHub Actions and rsync.

Only `wp-content/` is deployed, keeping WordPress core files untouched.

See `.github/workflows/deploy.yml` for details.

---

## Notes

- WordPress must be installed manually on the server.
- Gutenberg blocks must be built before deployment.
- Uploads and cache are excluded from deployments.
- `.deployignore` controls which files are skipped during deployment.

---

Built and maintained by Bora Bey Sarikaya.
