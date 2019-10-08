# Base image on the official NodeJS Docker image
FROM node:latest

# Create & Set the created directory as workdir
WORKDIR /usr/src/backend

# Copy package.json and install app dependencies
COPY package*.json ./

RUN npm install

# Copy source-code
COPY . .

# Start application
CMD [ "node_modules/.bin/babel-node", "app.js" ]