# kernl(ui)
A front-end framework built on Tailwind CSS for Northeastern University projects.

## Getting Started

For documentation and usage examples, visit the [documentation site](https://northeastern.netlify.com).

## Installation

Run `npm install` to install the package.

### Available Commands

- `npm run build` — Compile the CDN build
- `npm run build:css` — Generate the Tailwind v4 CDN candidate source, then compile the minified CSS
- `npm run build:css:source` — Compile the CDN CSS and regenerate the published class source list

### CDN Source Generation

Tailwind CSS v4 does not support JavaScript `safelist` entries loaded through `@config`. The CDN build uses `@import "tailwindcss" source(none)` in [src/css/index.css](src/css/index.css) and scans only [src/css/cdn-candidates.source.txt](src/css/cdn-candidates.source.txt).

[scripts/generate-cdn-candidates.js](scripts/generate-cdn-candidates.js) builds that candidate file from [src/css/cdn-source.seed.txt](src/css/cdn-source.seed.txt). It expands candidates with v2-style responsive and interaction variants, including `sm`, `md`, `lg`, `xl`, `2xl`, `hover`, `focus`, `focus-within`, `group-hover`, and responsive interaction combinations.

By default the generator removes slash-opacity variants, which are the main source of the v4 size increase. To include slash-opacity variants, pass `CDN_OPACITY_SCALE=all` or a comma-separated subset such as `CDN_OPACITY_SCALE=0,25,50,75,100`.

[scripts/generate-cdn-source.js](scripts/generate-cdn-source.js) parses the freshly built [dist/css/index.css](dist/css/index.css), writes [src/css/cdn-full.source.txt](src/css/cdn-full.source.txt), and fails if malformed class tokens are extracted.

## Release History

| Version | Release Year | Link |
|---------|--------------|------|
| 1.x | 2019 | [v1.4.1](https://github.com/ITS-Digital-Technology/kernl-ui/releases/tag/v1.4.1) |
| 2.x | 2021 | [v2.0.1](https://github.com/ITS-Digital-Technology/kernl-ui/releases/tag/v2.0.1) |
| 3.x | 2026 | [v3.0.0](https://github.com/ITS-Digital-Technology/kernl-ui/releases/tag/v3.0.0) |
| 4.x | 2026 | [v4.0.0](https://github.com/ITS-Digital-Technology/kernl-ui/releases/tag/v4.0.0) |

### Dependency Compatibility

| kernl(ui) | AlpineJS | TailwindCSS |
|-----------|----------|-------------|
| 1.x | Not Supported | Not Supported |
| 2.x | [2.x](https://github.com/alpinejs/alpine/releases/tag/v2.0.0) | [2.x](https://v2.tailwindcss.com/) |
| 3.x | Not Supported | [3.x](https://v3.tailwindcss.com/) |
| 4.x | Not Supported | [4.x](https://v4.tailwindcss.com/) |

### AlpineJS Support in v3.0 and beyond

Version 3.0 removed AlpineJS as a direct dependency. The framework now focuses on TailwindCSS styling and Feather Icons support. Since AlpineJS is browser-only, it conflicted with server-side rendering in React frameworks. To use AlpineJS with kernl(ui), install it separately in your project. See [AlpineJS installation](https://alpinejs.dev/essentials/installation).