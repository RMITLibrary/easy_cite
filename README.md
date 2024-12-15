# Easy Cite Referencing Tool

Easy Cite is a referencing tool developed by [RMIT University Library](https://www.rmit.edu.au/library). This tool aids in generating references using styles commonly adopted at RMIT University. It is licensed under [Creative Commons CC BY-NC-SA 3.0](https://creativecommons.org/licenses/by-nc-sa/3.0/).

This resource is derived from a work by [Swinburne University Library](https://www.swinburne.edu.au/library), based on an original work by [Griffith University Library](https://www.griffith.edu.au/library).

## Features

- Live reload and synchronization using `browser-sync`.
- CSS preprocessing with `sass`, and minification with `cssnano`.
- JavaScript minification using `terser`.
- URL parameter management and navigation with JavaScript.
- Integration with PHP to dynamically generate content based on user selections.
- Printing functionality for parts of the style guides.

## Development Setup

Ensure you have Node.js (>=22.12.0) and npm (>=10.9.0) installed. Then, use the following commands to set up the environment:

```bash
npm install
```

### Available Scripts

- **Build CSS and JS:**

  ```bash
  npm run build
  ```

  Compiles and minifies the CSS and JavaScript files.

- **Watch for Changes:**

  ```bash
  npm run start
  ```

  Automatically compiles and reloads during development for both CSS and JS files.

- **Format Code:**

  ```bash
  npm run format
  ```

  Formats the project's JS and CSS using Prettier.

## PHP Integration

The PHP scripts ensure dynamic content rendering and URL parameter management, supporting various style guides for references.

## JavaScript Highlights

- **Dark Mode:** Automatically switches the theme based on user preference.
- **Navigation & Printing:** Enhances user interaction with click event listeners and printing capabilities.
- **URL Management:** Handles URL parameters for smooth navigation across tabs and accordions.

## Browser Testing

This project is tested with BrowserStack.

## Contribution

Contributions are welcome. Please ensure your code follows the project's coding standards, and run `npm run format` before submitting changes.

#### © RMIT University Library

###### Developed by RMIT Library Digital Learning

###### Dr Lisa Cianci (Blackaeonium) & Jack Dunstan
