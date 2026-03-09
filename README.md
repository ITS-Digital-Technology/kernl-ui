# kernl(ui)
A front-end framework built on Tailwind CSS for Northeastern University projects.

## Getting Started

For documentation and usage examples, visit the [documentation site](https://northeastern.netlify.com).

## Installation

Run `npm install` to install the package.

### Available Commands

- `npm run build` — Compile the CDN build

## Release History

| Version | Release Year | Link |
|---------|--------------|------|
| 1.x | 2019 | [v1.4.1](https://github.com/ITS-Digital-Technology/kernl-ui/releases/tag/v1.4.1) |
| 2.x | 2021 | [v2.0.1](https://github.com/ITS-Digital-Technology/kernl-ui/releases/tag/v2.0.1) |
| 3.x | 2026 | [v3.0.0](https://github.com/ITS-Digital-Technology/kernl-ui/releases/tag/v3.0.0) |

### Dependency Compatibility

| kernl(ui) | AlpineJS | TailwindCSS |
|-----------|----------|-------------|
| 1.x | Not Supported | Not Supported |
| 2.x | [2.x](https://github.com/alpinejs/alpine/releases/tag/v2.0.0) | [2.x](https://v2.tailwindcss.com/) |
| 3.x | Not Supported | [3.x](https://tailwindcss.com/) |

### AlpineJS Support in v3.0

Version 3.0 removed AlpineJS as a direct dependency. The framework now focuses on TailwindCSS styling and Feather Icons support. Since AlpineJS is browser-only, it conflicted with server-side rendering in React frameworks. To use AlpineJS with kernl(ui), install it separately in your project. See [AlpineJS installation](https://alpinejs.dev/essentials/installation).