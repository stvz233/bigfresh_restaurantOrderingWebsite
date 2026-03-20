# 🍜 BigFresh Restaurant Ordering System
> **An End-to-End Web MVP for a local Vancouver specialty restaurant.**

---

## Project Overview
This project is a fully functional, digital ordering platform designed for **BigFresh (温哥华手工凉皮店)**. It streamlines the customer journey from menu browsing to personalized order customization and automated billing.


## Live Demo
[**Click here to view the live ordering site!**]
(https://stvz233.github.io/bigfresh_restaurantOrderingWebsite/)

---

## Tech Stack
| Layer | Technology |
| :--- | :--- |
| **Frontend** | HTML5, CSS3 (Flexbox), JavaScript (DOM) |
| **Backend** | PHP (Order Processing) |
| **Database** | MySQL (Relational Schema) |
| **Dev Tools** | VS Code, Git, Chrome DevTools |

---

## Core Features
* **Dynamic Navigation:** Multi-tiered dropdown menu for quick category jumps (Liangpi, Roujiamo, etc.).
* **Smart Customization:** * Quantity increment/decrement logic.
    * Dietary preferences via Radio buttons.
* **Special Requests:** Real-time text area for custom notes (e.g. Extra Spicy).
* **Automated Checkout:** Instant calculation of unit prices and **Grand Total (CA$)**.
* **Anchor Navigation:** Integrated smooth-scrolling anchors. Clicking any category (e.g. "Meat Series") automatically scrolls the viewport to the specific menu section, enhancing navigation efficiency on long menus.

---

## Project Structure
```text
.
├── homepage.html           # Landing page
├── homestyle.css           # Global styles
├── menu/
│   ├── allcontent.html     # Core ordering UI
│   └── orderlist.html      # Final billing summary
├── database.sql            # MySQL schema
└── submitorder.php         # Server-side logic