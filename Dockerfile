# 1. PHP Image එක ආරම්භක පදනම ලෙස භාවිතා කරයි
FROM php:8.2-fpm-alpine

# 2. Composer ස්ථාපනය කරයි
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 3. Web Server එකට අවශ්‍ය අමතර Package ස්ථාපනය කරයි
RUN apk add --no-cache nginx

# 4. Web Root Directory එක සකසයි
WORKDIR /var/www/html

# 5. ඔබගේ Project files සියල්ල Docker image එකට Copy කරයි
COPY . /var/www/html/  <-- මෙතන වෙනස් කරන්න!

# 6. Deployment සඳහා අවශ්‍ය Build Command එක ක්‍රියාත්මක කරයි
# 7. composer ගොනුව නැතිවීමේ දෝෂය මඟ හරී
RUN if [ -f composer.json ]; then composer install --no-dev --optimize-autoloader; else echo "No composer.json found, skipping composer install"; fi

# 8. Nginx Default configuration file එක අලුත් එකකින් ආදේශ කරයි
COPY default.conf /etc/nginx/conf.d/default.conf

# 9. Ports විවෘත කරයි
EXPOSE 8080

# 10. PHP-FPM සහ Nginx Server ආරම්භ කිරීමට අවශ්‍ය Entry Point එක සකසයි
CMD sh -c "php-fpm && nginx -g 'daemon off;'"