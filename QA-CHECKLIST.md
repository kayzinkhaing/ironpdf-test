# QA / QC CHECKLIST — Frontend-Focused (CodeIgniter)

**Project Path:** `https://github.com/kayzinkhaing/ironpdf-test`

This checklist documents the self-review, testing, and validation steps performed to ensure production-quality output aligned with the challenge requirements.

---

## 1. Pixel-Perfect Validation (Figma vs Implementation)

* [ ] Compare layout spacing, padding, margins against Figma using browser dev tools
* [ ] Validate grid alignment and container widths at key breakpoints
* [ ] Confirm consistent vertical rhythm (section spacing, line heights)
* [ ] Check icon and image positioning accuracy
* [ ] Ensure no unintended overflow or layout shift

**Tools:** Chrome DevTools, Figma Inspect Panel

---

## 2. Typography Accuracy

* [ ] Font family matches Figma (custom font loaded correctly)
* [ ] Font sizes and weights match design specs
* [ ] Line-height and letter-spacing verified
* [ ] Heading hierarchy correct (H1 → H6)
* [ ] Text rendering consistent across browsers

---

## 3. Responsive Behaviour & Breakpoints

* [ ] Mobile-first responsiveness implemented
* [ ] Layout adapts correctly at common breakpoints:

  * 320px / 375px (small mobile)
  * 768px (tablet)
  * 1024px (small desktop)
  * 1440px+ (large screens)
* [ ] Navigation switches correctly between desktop and mobile
* [ ] Images scale without distortion
* [ ] No horizontal scrolling on mobile

---

## 4. Cross-Browser Testing

* [ ] Chrome (latest) — fully tested
* [ ] Firefox (latest) — layout & font consistency verified
* [ ] Safari (if available) — basic layout and typography verified
* [ ] No browser-specific CSS or JS errors

---

## 5. Semantic HTML & Accessibility (a11y)

* [ ] Semantic elements used correctly (`<nav>`, `<header>`, `<main>`, `<section>`, `<footer>`)
* [ ] Navigation links use `<a>` (not `<span>`)
* [ ] Images include meaningful `alt` attributes
* [ ] Buttons use `<button>` elements
* [ ] Keyboard navigation works (Tab / Shift+Tab)
* [ ] ARIA attributes applied only where necessary
* [ ] Color contrast meets WCAG AA guidelines

---

## 6. SEO Validation

* [ ] `<title>` and meta description present and relevant
* [ ] Single H1 per page
* [ ] Proper heading hierarchy
* [ ] Alt text for all informative images
* [ ] Clean, readable URLs (CodeIgniter routing)
* [ ] No duplicate meta tags

---

## 7. Performance Optimization (Core Web Vitals)

### 7.1 JavaScript & CSS

* [ ] CSS and JS bundles minified
* [ ] Code splitting applied where applicable
* [ ] Tree-shaking enabled (unused code removed)
* [ ] jQuery used only when necessary

### 7.2 Lazy Loading

* [ ] Images use `loading="lazy"`
* [ ] Non-critical components loaded lazily
* [ ] Routes/components deferred where possible

### 7.3 Images & Assets

* [ ] Images optimized and resized appropriately
* [ ] Modern formats used (WebP)
* [ ] No oversized assets

### 7.4 Caching & Delivery

* [ ] Browser caching headers configured (`Cache-Control`, `Expires`)
* [ ] Gzip / Brotli compression enabled
* [ ] Assets CDN-ready (cacheable, fingerprinted)

---

## 8. Lighthouse & Metrics

* [ ] Lighthouse Performance score ≥ 90
* [ ] Lighthouse Accessibility score ≥ 90
* [ ] Lighthouse Best Practices score ≥ 90
* [ ] Lighthouse SEO score ≥ 90

**Core Web Vitals Targets:**

* LCP ≤ 2.5s
* CLS ≤ 0.1
* FID / INP within acceptable range

**Tools:** Lighthouse, Chrome DevTools, Web Vitals overlay

---

## 9. CodeIgniter Implementation Review

* [ ] MVC structure respected
* [ ] Controllers handle data logic only
* [ ] Views remain clean and presentation-focused
* [ ] Data passed from controller to view
* [ ] JSON file used as simulated data source
* [ ] Assets organized under `/public` or `/assets`
* [ ] Routing configured correctly

---

## 10. Code Quality & Maintainability

* [ ] Clean, readable, well-commented code
* [ ] Modular custom CSS layered over Bootstrap
* [ ] No inline JS except where unavoidable
* [ ] Consistent naming conventions
* [ ] No unused CSS or JS

---

# README

## Project Overview

This project is a pixel-perfect implementation of the provided Figma design using **HTML5, Bootstrap (latest), custom modular CSS, and minimal JavaScript**, integrated into a **CodeIgniter (PHP) MVC architecture**.

## Technologies Used

* HTML5 (Semantic)
* CSS3 + Bootstrap (latest)
* JavaScript (minimal, performance-focused)
* PHP (CodeIgniter)
* JSON (simulated data source)

## Key Features

* Fully responsive layout (mobile-first)
* Semantic HTML & accessibility considerations
* Optimized for Core Web Vitals
* Performance-focused asset loading
* Clean MVC separation (CodeIgniter)

## Setup Instructions

1. Clone or extract the project into:
   `C:\xampp\htdocs\ironpdf-test\`
2. Start Apache via XAMPP
3. Configure base URL in CodeIgniter
4. Access the project via:
   `http://localhost/ironpdf-test/public`

## Notes

* Mobile design was not provided; responsive behavior was implemented based on best practices
* QA checklist included to demonstrate self-review and validation process

---

**Author:** Kay Zin Khaing
