docker run --rm -itv $(pwd):/app -w /app -u $(id -u):$(id -g) -p 8123:8123 -eX_LISTEN=0.0.0.0:8123 php bash
