# IronPDF C++ Beta Program

A responsive, production-ready webpage for the IronPDF C++ Beta Software Program, implemented using **CodeIgniter 4**, **Bootstrap 5**, and **Vite**.

## 🚀 Project Overview

This project is a pixel-perfect implementation of the provided Figma design using **HTML5, Bootstrap 5, custom modular CSS, and minimal JavaScript**, integrated into a **CodeIgniter MVC architecture**. It demonstrates responsive design, performance optimization, accessibility best practices, and modern frontend tooling with Vite.

## 🛠️ Technology Stack

### Frontend

* HTML5 (semantic markup)
* CSS3 + Bootstrap 5.3.2
* JavaScript ES6+ (vanilla, minimal jQuery)
* Vite for bundling, HMR, and optimized builds
* Font Awesome 6 for icons
* Gotham font family with system font fallbacks

### Backend

* CodeIgniter 4 (PHP framework)
* PHP 7.4+ (compatible with 8.x)
* Apache / Nginx web server
* MySQL (optional for future use)

### Development Tools

* Git for version control
* Composer for PHP dependencies
* npm for frontend dependencies
* Lighthouse for performance auditing
* axe DevTools for accessibility testing

## 📦 Setup Instructions

1. Clone or extract the project into:
   `C:\xampp\htdocs\ironpdf-test`
2. Start Apache via XAMPP
3. Install PHP dependencies:

   ```bash
   composer install
   ```
4. Serve the CodeIgniter app:

   ```bash
   php spark serve
   ```
5. Install frontend dependencies:

   ```bash
   npm install
   ```
6. Build frontend assets:

   ```bash
   npm run build
   ```
7. Access the project via:
   `http://localhost:8080` (or the port shown in `php spark serve`)

## ✅ Key Features

* Pixel-perfect responsive layout matching Figma design
* Optimized for Core Web Vitals (LCP, FID, CLS)
* Accessibility (WCAG 2.1 AA) and semantic HTML
* SEO-friendly with meta tags, heading hierarchy, and alt text
* Cross-browser compatibility (Chrome, Firefox, Safari, Edge)
* Performance budget-aware (<770KB total page weight)
* Clean MVC structure with controllers, views, and organized assets
* Vite for modern JS bundling and fast development

## 🗂️ Notes

* Mobile design was not provided; responsive behavior implemented based on best practices
* Vite ensures fast rebuilds, optimized assets, and modern JS features
* Project follows CodeIgniter best practices with separation of concerns

---

**Author:** Kay Zin Khaing
