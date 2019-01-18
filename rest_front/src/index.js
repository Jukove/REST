const axios = require('axios');
axios.defaults.baseURL = 'http://localhost/rest_php/model';

const book = require('./biblioteca');
const insertElements = require('./table/bookTable');

book.getBook()
  .then(require => {
    insertElements(require.data);
  }).catch(error => {
    console.error(`Erro ${error}`);
  });