#!/bin/sh

exec redis-server --port 6379 --appendonly yes --protected-mode no