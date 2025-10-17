# Use official PHP image
FROM php:8.2-cli

# Install additional PHP extensions if needed
# RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set working directory
WORKDIR /app

# Copy all files into the container
COPY . .

# Expose the port that Render will use
EXPOSE 10000

# Start PHP built-in server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
