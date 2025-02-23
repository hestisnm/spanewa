// server.js (Backend)
const express = require('express');
const app = express();
const port = 3000;

app.get('/search', (req, res) => {
    const query = req.query.query;  // Ambil query pencarian dari URL
    // Proses pencarian berdasarkan query, misalnya mencari di database
    res.send(`Hasil pencarian untuk: ${query}`);
});

app.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
});
