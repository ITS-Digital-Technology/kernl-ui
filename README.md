# kernl(ui)

Northeastern front-end framework built on Tailwind CSS and Alpine.js.

## Usage

For documentation and examples for how to use this package, visit the [documentation site](https://northeastern.netlify.com).

## Installing the package for update

- Run `npm install`.

### Available tasks

- `npm run build` — Compile the CDN build of the package.

## Release Versions
- [1.x](https://github.com/ITS-Digital-Technology/kernl-ui/releases/tag/v1.4.1) - Released in 2019
- [2.x](https://github.com/ITS-Digital-Technology/kernl-ui/releases/tag/v2.0.1) - Released in 2021
- [3.x](https://github.com/ITS-Digital-Technology/kernl-ui/releases/tag/v3.0.0) - Released in 2023

### Dependency Compatability

|kernl(ui)|AlpineJS|TailwindCSS|
|----|----|----|
|[1.x](https://github.com/ITS-Digital-Technology/kernl-ui/releases/tag/v1.4.1)|Not Supported|Not Supported
|[2.x](https://github.com/ITS-Digital-Technology/kernl-ui/releases/tag/v2.0.1)|[2.x](https://github.com/alpinejs/alpine/releases/tag/v2.0.0)|[2.x](https://v2.tailwindcss.com/)|
|[3.x](https://github.com/ITS-Digital-Technology/kernl-ui/releases/tag/v3.0.0)|Not Supported|[3.x](https://tailwindcss.com/)

### Notes on AlpineJS Support in Version 3.0
In version 3.0, AlpineJS was removed as a direct dependency as the kernl(ui) framework has evolved into a bedrock for styling with TailwindCSS and support for Feather Icons. Because AlpineJS is a browser only framework, pairing it with React frameworks became a barrier for those looking to use SSR techniques in React frameworks to build websites or applications. Rather than trying to escape out of using Alpine for each project that needs a different server/client side reactivity framework, we've opted to remove the dependency from the project. If you still wish to use AlpineJS along with kernl(ui), ensure you add AlpineJS to your project's package.json: https://alpinejs.dev/essentials/installation