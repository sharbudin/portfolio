<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Host Laravel Application on AWS Web Server (Bitnami LNMP Stack)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
        
        header h1 {
            margin: 0;
        }
        
        main {
            margin-top: 2rem;
        }
        
        section {
            margin-bottom: 2rem;
        }
        
        section h2 {
            margin-bottom: 1rem;
        }
        
        pre {
            background-color: #f8f8f8;
            padding: 1rem;
            font-family: "Courier New", Courier, monospace;
            border-radius: 0.25rem;
            position: relative;
            display: inline-block;
            padding-right: 2rem;
        }
        
        .copy-button {
            margin-top: 0.5rem;
        }
        
        a {
            color: #007bff;
            text-decoration: none;
        }
        
        .copy-icon {
            position: absolute;
            right: 0;
            top: 0.2rem;
            color: #007bff;
            cursor: pointer;
        }
        
        /* Additional styles for Bootstrap */
        .container {
            max-width: 800px;
        }
        
        /* New styles for the tooltip */
        .copy-tooltip {
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #007bff;
            color: #fff;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.8rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        pre:hover .copy-tooltip {
            opacity: 1;
        }
    </style>
</head>
<body>
    <header>
        <h1>Host Laravel Application on AWS Web Server (Bitnami LNMP Stack)</h1>
    </header>

    <main class="container py-4">
        <section>
            <h2>Create AWS Instance</h2>
            <p>
                Open AWS, sign in to the console, and check if the region is set to Ohio. Choose EC2 Option, select the instance ID in AMI (Amazon Machine Image), and proceed with the necessary configurations.
            </p>
            <!-- Add more content for this section -->
        </section>

        <section>
            <h2>Assign Domain Name for Static IP</h2>
            <p>
                Open BigRock, log in with your credentials, click on the domain name, and configure the DNS records to associate the domain with your AWS static IP.
            </p>
            <!-- Add more content for this section -->
        </section>

        <section>
            <h2>How to Connect PhpMyAdmin in Bitnami Server</h2>
            <p>
                Create a new folder (Server) on your desktop and move the AWS key.pem file to this folder.
            </p>
            <p>
                Create a server.bat file with the following content (replace KEYFILE and SERVER-IP with your actual values):
            </p>
            <pre><code class="linux-command">ssh -N -L 8888:127.0.0.1:80 -i KEYFILE bitnami@SERVER-IP</code> <i class="far fa-copy copy-icon"></i></pre>
            <p>
                For example:
            </p>
            <pre><code class="linux-command">ssh -N -L 8888:127.0.0.1:80 -i key.pem bitnami@sharbudin.dream-dev.in</code> <i class="far fa-copy copy-icon"></i></pre>
            <!-- Add more content for this section -->
        </section>

        <section>
            <h2>How to Get SSL Certificate and Configure HTTPS in Bitnami Server</h2>
            <p>
                Use the following command to configure HTTPS for your site:
            </p>
            <pre><code class="linux-command">sudo /opt/bitnami/bncert-tool</code> <i class="far fa-copy copy-icon"></i></pre>
            <p>
                Choose options and enter the required information as prompted. After completing the configuration, your HTTPS site will be accessible at <a href="https://sharbudin.dream-dev.in/">https://sharbudin.dream-dev.in/</a>.
            </p>
            <!-- Add more content for this section -->
        </section>

        <section>
            <h2>Hosting Laravel Application in Bitnami LNMP (Linux, Nginx, MySQL / MariaDB, PHP) Server</h2>
            <p>
                While hosting your application on the server, it's recommended to use a version control tool like SVN or Git (In this example, we used Git).
            </p>
            <p>
                By default, the Nginx hosting directory will be <code>/opt/bitnami/nginx/html/</code> where the Bitnami index.html is available.
            </p>
            <p>
                To clone your Git repository, use the following command:
            </p>
            <pre><code class="linux-command">sudo chmod -R 777 /opt/bitnami/nginx/html/</code> <i class="far fa-copy copy-icon"></i></pre>
            <pre><code class="linux-command">git clone https://github.com/sharbudin/portfolio</code> <i class="far fa-copy copy-icon"></i></pre>
            <p>
                But in this session, we are hosting a Laravel PHP Application, so we need to set the public folder of our Laravel Application to be hosted in Nginx.
            </p>
            <p>
                Note: We already configured HTTPS (SSL certificate installed for secure connection). Configuring the <code>/opt/bitnami/nginx/conf/nginx.conf</code> file will not work for our HTTPS site, but for HTTP configuration, we can use that.
            </p>
            <p>
                To configure the host, we need to modify the following file: <code>/opt/bitnami/nginx/conf/server_blocks/default-https-server-block.conf</code>.
            </p>
            <pre><code class="linux-command">sudo nano /opt/bitnami/nginx/conf/server_blocks/default-https-server-block.conf</code> <i class="far fa-copy copy-icon"></i></pre>
            <p>
                Add the following lines after the include section and above the <code>location /status</code> section:
            </p>
            <pre></p>   root /opt/bitnami/nginx/html/portfolio/public;
    location / {
        try_files $uri $uri/ /index.php;
    }</p></pre>
            <p>
                Note: Change <code>portfolio</code> to your Git Repository Name (In our example, it will be <code>portfolio</code>).
            </p>
            <p>
                Now restart the Nginx server to apply the new changes in the configuration by running the following command:
            </p>
            <pre><code class="linux-command">sudo /opt/bitnami/ctlscript.sh restart nginx</code> <i class="far fa-copy copy-icon"></i></pre>
            <!-- Add more content for this section -->
        </section>

        <section>
            <h2>Configuration of Laravel Application in Linux from Git Version</h2>
            <p>
                While pushing your Laravel project to Git, it will not include the <code>vendor</code> directory and some files in Git (This will not be an issue).
            </p>
            <p>
                After cloning your Laravel application, enter into the repository folder and use the following commands to make your application work on the server:
            </p>
            <pre><code class="linux-command">cd /opt/bitnami/nginx/html/portfolio/</code> <i class="far fa-copy copy-icon"></i></pre>
            <pre><code class="linux-command">php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"</code> <i class="far fa-copy copy-icon"></i></pre>
                        <pre><code class="linux-command">php -r "if (hash_file('sha384', 'composer-setup.php') ===
        'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02')
            { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); }
            echo PHP_EOL;"</code> <i class="far fa-copy copy-icon"></i></pre>
            <pre><code class="linux-command">php composer-setup.php</code> <i class="far fa-copy copy-icon"></i></pre>
            <pre><code class="linux-command">php -r "unlink('composer-setup.php');"</code> <i class="far fa-copy copy-icon"></i></pre>
            <pre><code class="linux-command">sudo /opt/bitnami/ctlscript.sh restart nginx && composer install</code> <i class="far fa-copy copy-icon"></i></pre>
            <p>
                For security reasons, don't upload the .env file to Git. Instead, manually move and configure the .env file on the server with the updated Database, Mail, and other environment values.
            </p>
            <p>
                After moving and completing the configuration, once again use the permission command:
            </p>
            <pre><code class="linux-command">sudo chmod -R 777 /opt/bitnami/nginx/html/</code> <i class="far fa-copy copy-icon"></i></pre>
            <p>
                Now check your HTTPS URL in the browser to test your Laravel application: <a href="https://sharbudin.dream-dev.in/">https://sharbudin.dream-dev.in/</a>.
            </p>
            <!-- Add more content for this section -->
        </section>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const copyIcons = document.querySelectorAll(".copy-icon");
        
            copyIcons.forEach((icon) => {
                icon.addEventListener("click", () => {
                    const codeElement = icon.parentElement.querySelector("code");
                    if (codeElement && codeElement.classList.contains("linux-command")) {
                        const textToCopy = codeElement.textContent.trim();
                        copyToClipboard(textToCopy);
                        showCopiedMessage(icon);
                    }
                });
            });
        });
        
        function copyToClipboard(text) {
            const textarea = document.createElement("textarea");
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand("copy");
            document.body.removeChild(textarea);
        }
        
        function showCopiedMessage(icon) {
            const tooltip = document.createElement("div");
            tooltip.classList.add("copy-tooltip");
            tooltip.textContent = "Copied!";
            icon.parentElement.appendChild(tooltip);
            setTimeout(() => {
                icon.parentElement.removeChild(tooltip);
            }, 2000);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
