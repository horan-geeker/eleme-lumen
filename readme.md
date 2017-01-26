# eleme 后端

## 使用nginx配置来分离前后端，使前后端能独立开发，nginx配置如下

```
server {
        listen       80;
        server_name  localhost;

        index index.php index.html index.htm;
        #charset koi8-r;
		root D:\\www\\eleme-lumen\\public/;

        #access_log  logs/host.access.log  main;

        location ^~ /api {
        	try_files $uri $uri/ /index.php?$query_string;
        } 
     #    location ~ ^/api/.+\.php$ {
     #    	try_files $uri /index.php =404;
	    #     fastcgi_split_path_info ^(.+\.php)(/.+)$;
	    #     fastcgi_pass   127.0.0.1:9000;
	    #     fastcgi_index  index.php;
	    #     fastcgi_param SCRIPT_FILENAME /opt$fastcgi_script_name;
	    #     include        fastcgi_params;
	    #     #include fastcgi.conf;
    	# }
        location / {
            alias D:\\www\\eleme-vue\\dist/;
        }

        #error_page  404              /404.html;

        # redirect server error pages to the static page /50x.html
        #
        error_page   500 502 503 504  /50x.html;
        location = /50x.html {
            root   html;
        }

        # proxy the PHP scripts to Apache listening on 127.0.0.1:80
        #
        #location ~ \.php$ {
        #    proxy_pass   http://127.0.0.1;
        #}

        # pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000
        #
        location ~ \.php$ {
            try_files $uri /index.php =404;
	        fastcgi_split_path_info ^(.+\.php)(/.+)$;
	        fastcgi_pass 127.0.0.1:9000;
	        fastcgi_index index.php;
	        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
	        include fastcgi_params;
        }

        # deny access to .htaccess files, if Apache's document root
        # concurs with nginx's one
        #
        #location ~ /\.ht {
        #    deny  all;
        #}
    }
```