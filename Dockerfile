# # Set master image
# FROM php:7.4-fpm-ap

# LABEL maintainer="Duong Nhat Hao (duongnhathao001@gmail.com)"

# # Set working directory
# WORKDIR /var/www/html


# # Get latest Composer
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# # # Install Additional dependencies
# # RUN apk update && apk add --no-cache \
# #     build-base shadow supervisor \
# #     php7-common \
# #     php7-pdo \
# #     php7-pdo_mysql \
# #     php7-mysqli \
# #     php7-mcrypt \
# #     php7-mbstring \
# #     php7-xml \
# #     php7-openssl \
# #     php7-json \
# #     php7-phar \
# #     php7-zip \
# #     php7-gd \
# #     php7-dom \
# #     php7-session \
# #     php7-zlib


# # # Add and Enable PHP-PDO Extenstions for PHP connect Mysql
# # RUN docker-php-ext-install pdo pdo_mysql
# # RUN docker-php-ext-enable pdo_mysql



# # # This extension required for Laravel Horizon
# # RUN docker-php-ext-install pcntl

# # # Remove Cache
# # RUN rm -rf /var/cache/apk/*


# # Install system dependencies
# RUN apt-get update && apt-get install -y \
#     git \
#     curl \
#     libpng-dev \
#     libonig-dev \
#     libxml2-dev \
#     zip \
#     unzip

# # Clear cache
# RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# # Install PHP extensions
# RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd
# RUN docker-php-ext-enable pdo_mysql



# COPY .docker/supervisord.conf /etc/supervisord.conf
# COPY .docker/supervisor.d /etc/supervisor.d

# # Use the default production configuration for PHP-FPM ($PHP_INI_DIR variable already set by the default image)
# RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# # Add UID '1000' to www-data
# RUN usermod -u 1000 www-data

# # Copy existing application directory
# COPY . .

# # Chang app directory permission
# RUN chown -R www-data:www-data .

# ENV ENABLE_CRONTAB 1
# ENV ENABLE_HORIZON 1

# ENTRYPOINT ["sh", "/var/www/html/.docker/docker-entrypoint.sh"]

# CMD supervisord -n -c /etc/supervisord.conf



FROM php:7.4-fpm
WORKDIR  /var/www/html

# Copy existing application directory
COPY . .


# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set working directory

USER $user
