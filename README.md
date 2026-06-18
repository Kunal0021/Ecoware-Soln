# EcoWare Solutions

EcoWare Solutions is a modern, premium web application showcasing eco-friendly, biodegradable tableware (plates, bowls, cups, and containers). The platform is built using a lightweight PHP architecture, featuring dynamic include components, responsive glassmorphism designs, smooth CSS micro-animations, and custom-generated high-fidelity product assets.

## Directory Structure

```text
EcoWare-Solutions/
├── index.php             # Core entry point and landing page
├── README.md             # Project documentation
│
├── includes/
│   ├── header.php        # Reusable page header and navigation
│   └── footer.php        # Reusable page footer and social links
│
└── assets/
    ├── css/
    │   └── style.css     # Premium custom CSS styling
    ├── js/
    │   └── script.js     # Interactivity, animations, and modal control
    └── images/
        ├── hero.jpg      # High-end hero background banner
        ├── plate.jpg     # Product shot: eco-friendly plate
        ├── bowl.jpg      # Product shot: biodegradable bowl
        ├── cup.jpg       # Product shot: organic paper/bamboo cup
        ├── container.jpg # Product shot: compostable container
        └── about.jpg     # Manufacturing raw materials concept
```

## Features

- **Dynamic Components**: Page architecture uses reusable PHP components (`header.php`, `footer.php`) to ease maintenance and scale cleanly.
- **Modern Aesthetic**: Rich visual language using modern typography (Outfit & Inter), customized HSL palettes (sage green, warm clay, slate gray), soft gradients, and modern layout structures.
- **Premium Interactivity**: Includes a responsive mobile drawer, smooth scrolling, scroll-triggered reveal animations via the Intersection Observer API, dynamic product modals, and a customized feedback form.
- **Glassmorphism**: Elegant card borders and container structures utilizing semi-transparent backdrops and subtle blurs.

## Running Locally

To run the application locally, you can use PHP's built-in development server:

1. Open a terminal in the project directory.
2. Run:
   ```bash
   php -S localhost:8000
   ```
3. Open `http://localhost:8000` in your web browser.

## Customization and Development

- **Styling**: All design parameters are stored as CSS variables inside `assets/css/style.css` for easy maintenance.
- **Interactivity**: Add new visual transitions or event handlers in `assets/js/script.js`.
