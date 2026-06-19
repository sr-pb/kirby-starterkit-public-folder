# kirby-starterkit-public-folder

Kirby CMS starterkit for a public folder setup.

## Setup

```bash
composer install
npm install
```

Web server document root must point at `/public`.

## Asset bundling

Built with [Parcel](https://parceljs.org/) from `src/app.js` into
`public/assets/dist`.

| Command           | Description                                  |
| ----------------- | -------------------------------------------- |
| `npm run watch`   | Watch and rebuild on change (no HMR)         |
| `npm run prod`    | Production build (no source maps)            |
| `npm run clean`   | Remove `public/assets/dist`                  |


## Deployment

Optional. rsync over SSH. Copy `.deploy/config.example`
to `.deploy/config` and fill in your server details — each profile needs a
`<NAME>_SERVER` and `<NAME>_TARGET`; add or remove profiles freely. Trigger
deploys via the `deploy:*` scripts in `package.json` (the `:sim` variants are
dry runs). Uses `rsync --delete`; excludes live in `.deploy/rsync_exclude.txt`.

| Command                      | Description                       |
| ---------------------------- | --------------------------------- |
| `npm run deploy:live:sim`    | Dry run against live              |
| `npm run deploy:live`        | Deploy to live                    |
| `npm run deploy:staging:sim` | Dry run against staging           |
| `npm run deploy:staging`     | Deploy to staging                 |

