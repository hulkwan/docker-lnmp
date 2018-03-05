FROM redis:3.2-alpine

ENV REDIS_PASSWORD developer

CMD ["sh", "-c", "exec redis-server --requirepass \"$REDIS_PASSWORD\""]

