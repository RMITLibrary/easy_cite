# Easy Cite Referencing Tool

Easy Cite is a referencing tool developed by [RMIT University Library](https://www.rmit.edu.au/library). This tool aids in generating references using styles commonly adopted at RMIT University. It is licensed under [Creative Commons CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/).

This resource is derived from a work by [Swinburne University Library](https://www.swinburne.edu.au/library), based on an original work by [Griffith University Library](https://www.griffith.edu.au/library), with further development by Dr Lisa Cianci (Blackaeonium) and Jack Dunstan from RMIT Library Digital Learning.

## Features

- Live reload and synchronization using `browser-sync`.
- CSS preprocessing with `sass`.
- URL parameter management and navigation with JavaScript.
- Integration with PHP to dynamically generate content based on user selections.
- Printing functionality for parts of the style guides.

## System Requirements

- **Node.js**: >=22.12.0
- **npm**: >=10.9.0
- **PHP**: >=5.6

## Installation

1. Ensure you have Node.js (>=22.12.0) and npm (>=10.9.0) installed.
2. Clone the repository.
3. Navigate into the project directory.
4. Run the following command to install dependencies:

   ```bash
   npm install
   ```

## Configuration

The project uses a `baseUrl` configuration to set the hostname for local development. By default, this is set to `easy_cite.test`. To change this, update the `baseUrl` in the `package.json` file:

```json
"config": {
  "baseUrl": "your_custom_url"
}
```

Ensure your local development environment is configured to recognise this custom URL, such as updating your hosts file.

## Available Scripts

- **Start Development Environment:**

  Begins the development process with live reloading:

  ```bash
  npm start
  ```

  This script will:

  - Watch for changes in CSS and JavaScript files.
  - Build CSS files.
  - Serve the project with live reloading.

- **Build CSS:**

  Compiles the CSS files, useful for deployment.

  ```bash
  npm run build
  ```

- **Format Code:**

  Formats the project's JS and CSS using Prettier.

  ```bash
  npm run format
  ```

## PHP Integration

The PHP scripts ensure dynamic content rendering and URL parameter management, supporting various style guides for references.

## JavaScript Highlights

- **Dark Mode:** Automatically switches the theme based on user preference.
- **Navigation & Printing:** Enhances user interaction with click event listeners and printing capabilities.
- **URL Management:** Handles URL parameters for smooth navigation across tabs and accordions.

## Contribution

Contributions are welcome. Please ensure your code follows the project's coding standards, and run `npm run format` before submitting changes.

#### © RMIT University Library

###### Developed by RMIT Library Digital Learning

## Contact
- Dr Lisa Cianci ([lisa.cianci@rmit.edu.au](mailto:lisa.cianci@rmit.edu.au))
- Jack Dunstan ([jack.dunstan@rmit.edu.au](mailto:jack.dunstan@rmit.edu.au))
- Karl Ervine ([karl.ervine@rmit.edu.au](mailto:karl.ervine@rmit.edu.au))
- Additional Contact: [digital.learning.library@rmit.edu.au](mailto:digital.learning.library@rmit.edu.au)

## Resources
- [Active RMIT Library GitHub](https://github.com/RMITLibrary)
- [Archived RMIT Library GitHub](https://github.com/RMITLibrary-Archived)
