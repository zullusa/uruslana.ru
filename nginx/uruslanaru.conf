server {
    listen 80;
    server_name uruslana.ru;
    access_log /var/log/nginx/uruslana.ru-access.log;
    error_log /var/log/nginx/uruslana.ru-error.log;
    return 301 https://$server_name$request_uri; # редирект обычных запросов на https
}

server {
    listen 443 ssl http2;
    ssl on;
    ssl_certificate /etc/letsencrypt/live/uruslana.ru/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/uruslana.ru/privkey.pem;
    ssl_session_timeout 5m;
    ssl_protocols TLSv1 TLSv1.1 TLSv1.2;
    ssl_dhparam /etc/ssl/certs/dhparam.pem;
    ssl_ciphers 'EECDH+AESGCM:EDH+AESGCM:AES256+EECDH:AES256+EDH';
    ssl_prefer_server_ciphers on;
    ssl_session_cache shared:SSL:10m;
    server_name uruslana.ru;
    access_log /var/log/nginx/uruslana.ru-access.log;
    error_log /var/log/nginx/uruslana.ru-error.log;
   
    location / {
        proxy_pass http://localhost:1025; 
	proxy_set_header Host $host;
	proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
	proxy_set_header X-Real-IP $remote_addr;
    }
}

