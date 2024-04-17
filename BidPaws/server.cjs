const express = require('express');
const { createProxyMiddleware } = require('http-proxy-middleware');

const app = express();
const PORT = process.env.PORT || 8000; // Utiliser le port 8000 par défaut, ou un port spécifié dans la variable d'environnement PORT

// Configurer le proxy inversé pour rediriger les requêtes vers l'API Heroku
app.use('/api', createProxyMiddleware({ target: 'https://calm-fjord-14795.herokuapp.com', changeOrigin: true }));

// Autres configurations et routes

// Démarrer le serveur
app.listen(PORT, () => {
  console.log(`API is starting on port ${PORT}`);
});
