FROM node:latest

COPY web/. .

RUN npm install

EXPOSE 3000

CMD ["npm", "run", "dev", "--host"]