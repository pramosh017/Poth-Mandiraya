# 1. PHP Image එක ආරම්භක පදනම ලෙස භාවිතා කරයි
FROM php:8.2-fpm-alpine

# 2. Composer ස්ථාපනය කරයි
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 3. Web Server එකට අවශ්‍ය අමතර Package ස්ථාපනය කරයි
RUN apk add --no-cache nginx

# 4. Web Root Directory එක සකසයි
WORKDIR /var/www/html

# 5. ඔබගේ Project files සියල්ල Docker image එකට Copy කරයි
COPY . .

# 6. Deployment සඳහා අවශ්‍ය Build Command එක ක්‍රියාත්මක කරයි
RUN composer install --no-dev --optimize-autoloader

# 7. Nginx Default configuration file එක අලුත් එකකින් ආදේශ කරයි
# (PHP Project එකේ index.php එක ධාවනය කිරීමට අවශ්‍යය)
COPY default.conf /etc/nginx/conf.d/default.conf

# 8. Ports විවෘත කරයි
EXPOSE 8080

# 9. PHP-FPM සහ Nginx Server ආරම්භ කිරීමට අවශ්‍ය Entry Point එක සකසයි
CMD sh -c "php-fpm && nginx -g 'daemon off;'"

# default.conf (ඔබට මෙය වෙනම ගොනුවක් ලෙස save කළ හැක)
# (මෙය PHP සඳහා නිවැරදි Nginx config එකක් සපයයි)
# location ~ \.php$ {
#     fastcgi_pass 127.0.0.1:9000;
#     fastcgi_index index.php;
#     include fastcgi_params;
# }