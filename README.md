# kirby-starterkit-public-folder

Kirby CMS starterkit for a **public folder setup**, with a Parcel asset pipeline and an rsync deploy script.

## Setup

```bash
composer install
npm install
```

Web server document root must point at `/public`.

## Asset pipeline

Built with [Parcel](https://parceljs.org/) from `src/app.js` into
`public/assets/dist`. Filenames are not hashed.

| Command           | Description                                  |
| ----------------- | -------------------------------------------- |
| `npm run watch`   | Watch and rebuild on change (no HMR)         |
| `npm run build`   | Production build (no source maps, no cache)  |
| `npm run prod`    | `clean` + `build`                            |
| `npm run clean`   | Remove `public/assets/dist`                  |

`console.*` is stripped from production builds.

## Deployment

rsync over SSH — for the public folder / SSH setup only.

### One-time config

```bash
cp .deploy/config.example .deploy/config   # fill in, gitignored
chmod +x .deploy/deploy
```

### Commands (run from project root)

| Command               | Description                          |
| --------------------- | ------------------------------------ |
| `npm run deploy:test` | Dry run — review before pushing      |
| `npm run deploy:push` | Deploy to live server                |

Uses `rsync --delete`; excludes live in `.deploy/rsync_exclude.txt`. Always
run `deploy:test` first and check the `deleting ...` lines. The script only
runs when the current folder name matches `LOCAL` in your config.

## Notes

- Sensitive dirs (`content`, `storage`, `public/media`) are gitignored and
  excluded from deploys.
