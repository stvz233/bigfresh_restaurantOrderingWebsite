# bigfresh_restaurantOrderingWebsite

## BigFresh Restaurant Ordering System 🍜
A fully functional, end-to-end web application designed for BigFresh (温哥华手工凉皮店), a local Vancouver specialty restaurant. This project handles the entire customer journey from menu browsing to personalized order customization and final billing.

🚀 Project Overview
This MVP (Minimum Viable Product) streamlines the digital ordering process. It features a dynamic menu interface, complex form handling for food customization (e.g., "no cilantro"), and a robust calculation logic for order summaries.

🛠 Tech Stack
Frontend: HTML5, CSS3 (Flexbox Layout), JavaScript (DOM Manipulation & Form Validation)

Backend: PHP (Order processing and server-side logic)

Database: MySQL (Relational schema for menu items and order history)

Version Control: Git

Development Tools: VS Code, Chrome DevTools, Local PHP Environment (XAMPP/MAMP)

✨ Core Features
Interactive Navigation: A multi-tiered dropdown menu allowing users to jump directly to categories (Liangpi, Roujiamo, Braised Seafood, etc.).

Dynamic Product Selection: * Quantity increment/decrement logic.

Radio-button options for personalized dietary preferences (e.g., No Cilantro, No Green Pepper).

Order Customization: Real-time text area for special requests (e.g., "Extra Spicy," "Add Green Onion").

Automated Checkout: A summary page that parses selected items, applies unit pricing, and calculates the Grand Total (CA$) automatically.

📂 Project Structure
Plaintext
.
├── homepage.html           # Main landing page
├── homestyle.css           # Global stylesheets (Navigation, Layout, Buttons)
├── menu/
│   ├── allcontent.html     # Core ordering interface (Category-based)
│   └── orderlist.html      # Final order summary & total calculation
├── database.sql            # Database schema for menu & orders
├── submitorder.php         # Server-side logic for order submission
└── logo.png                # Branding assets
🛠 Installation & Setup
Clone the Repository:

Bash
git clone https://github.com/yourusername/BigFresh-Ordering-System.git
Database Configuration:

Import database.sql into your local MySQL server.

Ensure your database credentials match in submitorder.php.

Local Server:

Run via VS Code Live Server (for frontend UI testing).

Run via PHP Local Server (for full-stack functionality):

Bash
php -S localhost:8000
Access: Open http://localhost:8000/homepage.html in your browser.

📈 Future Enhancements
Mobile Responsiveness: Implement Media Queries for a seamless mobile ordering experience.

Payment Gateway Integration: Connect to Stripe or PayPal API for real-time transactions.

Admin Dashboard: Create a backend UI for restaurant staff to manage incoming orders in real-time.

