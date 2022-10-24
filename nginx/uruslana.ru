server {
    server_name uruslana.ru;
    listen 80;
    access_log /var/log/nginx/uruslana.ru-access.log;
    error_log /var/log/nginx/uruslana.ru-error.log;
   
    location / {
        proxy_pass http://localhost:1025; 
	proxy_set_header Host $host;
	proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
	proxy_set_header X-Real-IP $remote_addr;
    }
}
