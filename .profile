start() {
    symfony server:start "$@"
}

stop() {
    symfony server:stop
}

pconsole() {
    php bin/console "$@"
}
