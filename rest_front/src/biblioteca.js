const axios = require('axios');

const book = {
  getBook() {
    return axios.get('/getData.php');
  }
};

module.exports = book;
