
# My Portfolio Project

Welcome to my portfolio project! This repository contains my personal portfolio website, where I showcase my work, skills, and projects. Feel free to explore, and don’t hesitate to reach out if you’d like to connect!

## Project Overview

This project is built to be lightweight and easy to deploy. Here’s a quick breakdown of the tools and technologies used:

- **Docker**: The portfolio site is hosted using a simple `lighttpd` server, managed within a Docker container for easy deployment and environment consistency.
- **JavaScript**: The site uses JavaScript to create reactive, interactive elements for a more dynamic user experience.
- **Jenkins**: On my VPS, Jenkins is set up to automate the deployment process, ensuring that any updates are deployed seamlessly with github webhooks.

## Features

- **Responsive Design**: The portfolio is designed to be responsive and accessible across different screen sizes and devices.
- **Reactive Elements**: JavaScript adds interactive and reactive components to the site, enhancing user engagement.
- **Automated Deployment**: Jenkins automates the deployment process, making updates to the portfolio quick and hassle-free.

## Getting Started

To run this project locally, you’ll need Docker installed on your machine.

### Steps

1. **Clone the repository**:
   ```bash
   git clone https://github.com/sagastvme/my_website.git
   cd my-portfolio
   ```

2. **Build the Docker Image**:
   ```bash
   docker build -t portfolio-server .
   ```

3. **Run the Docker Container**:
   ```bash
   docker run -p 8080:80 portfolio-server
   ```

4. **Access the Site**: Open a browser and go to `http://localhost:8080` to view the portfolio.

## Deployment

Deployment is managed via Jenkins, set up on my VPS. Jenkins automatically pulls the latest code changes from the repository, builds the Docker image, and redeploys the container. This setup ensures that any updates to the portfolio are reflected online with minimal delay.

## Contact

If you have any questions or would like to get in touch, feel free to reach out through my contact information provided on the website.