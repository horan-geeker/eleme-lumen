# eleme 后端

## 使用nginx配置来分离前后端，使前后端能独立开发，nginx配置如下

```
server {
        listen       80;
        server_name  localhost;

        index index.php index.html index.htm;
        root D:\\www\\eleme-lumen\\public/;
	
        location ^~ /api {
        	try_files $uri $uri/ /index.php?$query_string;
        }
	
        location / {
	    try_files $uri $uri/ /index.html;
            alias D:\\www\\eleme-vue\\dist/;
        }

        location ~ \.php$ {
            try_files $uri /index.php =404;
	        fastcgi_split_path_info ^(.+\.php)(/.+)$;
	        fastcgi_pass 127.0.0.1:9000;
	        fastcgi_index index.php;
	        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
	        include fastcgi_params;
        }

    }
```
