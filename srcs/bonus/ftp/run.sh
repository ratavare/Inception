#!/bin/sh

handle_term() {
    echo "Received SIGTERM signal, stopping vsftpd..."
    kill -TERM "$pid"
    wait "$pid"
    exit 0
}

trap handle_term SIGTERM

exec vsftpd /etc/vsftpd.conf &

pid="$!"

wait "$pid"