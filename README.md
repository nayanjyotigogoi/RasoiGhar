
<p align="center"><img src="https://your-logo-url.com/rasoighar-logo.png" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/nayanjyotigogoi/rasoighar"><img src="https://travis-ci.org/nayanjyotigogoi/rasoighar.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/nayanjyotigogoi/rasoighar"><img src="https://img.shields.io/packagist/dt/nayanjyotigogoi/rasoighar" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/nayanjyotigogoi/rasoighar"><img src="https://img.shields.io/packagist/v/nayanjyotigogoi/rasoighar" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/nayanjyotigogoi/rasoighar"><img src="https://img.shields.io/packagist/l/nayanjyotigogoi/rasoighar" alt="License"></a>
</p>

## About RasoiGhar

**RasoiGhar** is a dynamic and visually appealing food recipe website. It allows admins to add and manage recipes, while users can browse and view recipes with ease. The site features a responsive design, an intuitive user interface, and engaging animations to enhance the user experience.

## Features

- **Admin Panel:** Admins can log in and manage recipes, including adding, editing, and deleting them.
- **Responsive Design:** The website is fully responsive, providing a seamless experience on mobile, tablet, and desktop devices.
- **Interactive UI:** Users can enjoy an interactive user interface with animations and a smooth browsing experience.
- **Recipe Display:** Recipes are displayed with high-quality images and detailed instructions, organized in an easy-to-follow format.

## Installation

To get started with RasoiGhar, follow these steps:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/nayanjyotigogoi/rasoighar.git
   ```

2. **Navigate to the project directory:**

   ```bash
   cd rasoighar
   ```

3. **Install dependencies:**

   ```bash
   composer install
   npm install
   ```

4. **Set up your environment variables:**

   Copy the `.env.example` file to `.env` and update the necessary configurations.

   ```bash
   cp .env.example .env
   ```

5. **Generate an application key:**

   ```bash
   php artisan key:generate
   ```

6. **Run the database migrations:**

   ```bash
   php artisan migrate
   ```

7. **Serve the application:**

   ```bash
   php artisan serve
   ```

   Your application will be available at `http://localhost:8000`.

## Usage

Admins can log in to the admin panel to manage recipes, while users can browse recipes on the main website. Recipes include detailed ingredients and instructions, displayed in a user-friendly card format.

## Contributing

If you'd like to contribute to **RasoiGhar**, please fork the repository and use a feature branch. Pull requests are welcome.

1. Fork it.
2. Create your feature branch (`git checkout -b feature/new-feature`).
3. Commit your changes (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature/new-feature`).
5. Create a new Pull Request.

## Contact

If you have any questions or feedback, please reach out to **Nayanjyoti Gogoi** at [nayanjyoti2724@gmail.com](mailto:nayanjyoti2724@gmail.com).
