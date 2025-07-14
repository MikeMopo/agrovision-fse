# Use the official WordPress image as a base
FROM wordpress:latest

# Copy the theme files into the WordPress themes directory
COPY . /var/www/html/wp-content/themes/agrovision-fse

# Set permissions for the theme directory
# WordPress runs as www-data user and group in the official image
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/agrovision-fse && \
    find /var/www/html/wp-content/themes/agrovision-fse -type d -exec chmod 755 {} \; && \
    find /var/www/html/wp-content/themes/agrovision-fse -type f -exec chmod 644 {} \;

# Port 80 is already exposed by the base WordPress image,
# so no explicit EXPOSE instruction is needed here unless
# we were using a different port internally.
