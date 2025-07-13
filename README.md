
# CodeIgniter 4 Portfolio

A simple and clean personal portfolio website built using [CodeIgniter 4](https://codeigniter.com/). This project showcases your profile, featured projects, and a contact page — all structured using the MVC pattern.

## 🌐 Live Demo

Visit: [https://renzklo.com](https://renzklo.com)

## ✨ Features

- Landing page with brief intro and resume download
- Project showcase with details
- About section
- Contact form (static layout)
- Responsive design using Bootstrap
- Modular CodeIgniter 4 structure

## 🛠 Tech Stack

- PHP (CodeIgniter 4)
- HTML5, CSS3
- Bootstrap 5
- FontAwesome

## 📁 Directory Structure

```

app/
├── Controllers/
│   ├── About.php
│   ├── Contact.php
│   └── Home.php
├── Views/
│   ├── about.php
│   ├── contact.php
│   ├── home.php
│   └── templates/
│       ├── header.php
│       └── footer.php
public/
├── assets/
│   ├── css/
│   ├── js/
│   └── img/
.env

````

## ⚙️ Local Setup

1. **Clone the repository**
   ```
   git clone https://github.com/RenzKlo/ci4-portfolio.git
   cd ci4-portfolio
   ```
2. **Install dependencies**
   Ensure [Composer](https://getcomposer.org/) is installed:

   ```
   composer install
   ```

3. **Set up environment**

   * Copy `.env.example` to `.env`
   * Update `app.baseURL` in `.env`:

     ```
     app.baseURL = 'http://localhost:8080/'
     ```

4. **Run the development server**

   ```bash
   php spark serve
   ```

5. Visit: [http://localhost:8080](http://localhost:8080)

## Screenshots
Landing Page
<img width="1808" height="815" alt="Landing Page" src="https://github.com/user-attachments/assets/49a3ceff-b01a-4ba3-9996-a6b1815dc6f3" />
Projects Page
<img width="1692" height="758" alt="Projects Page" src="https://github.com/user-attachments/assets/040a8bef-4c05-41c2-b4aa-b6280e5d164b" />
Blog Page
<img width="1755" height="808" alt="Blog Page" src="https://github.com/user-attachments/assets/6957e790-12ef-4cb4-90b3-06d38035c89d" />

## 🙋‍♂️ Author

**Kent Lorenz (RenzKlo)**
📫 [https://renzklo.com](https://renzklo.com)


