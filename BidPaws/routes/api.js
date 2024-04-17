const express = require('express');
const router = express.Router();

// Route pour gérer les requêtes vers /api/regions
router.get('/regions', (req, res) => {
  // Vous pouvez mettre ici la logique pour récupérer les régions depuis l'API ou ailleurs
  // Par exemple, renvoyez simplement une réponse de test
  res.json({ message: 'Liste des régions récupérée avec succès' });
});

module.exports = router;
