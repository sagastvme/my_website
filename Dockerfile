FROM alpine:latest

RUN apk update && apk add --no-cache lighttpd

COPY web /var/www/localhost/htdocs

EXPOSE 80

CMD ["lighttpd", "-D", "-f", "/etc/lighttpd/lighttpd.conf"]


# docker build -t my-lighttpd-server .
# docker run -p 8080:80 my-lighttpd-server
# docker run -p 8080:80 -v "$(pwd)/web:/var/www/localhost/htdocs" my-lighttpd-server