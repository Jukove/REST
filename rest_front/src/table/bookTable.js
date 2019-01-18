const insertElements = books => {
  const bookList = document.querySelector('#bookList');

  books.forEach(book => {
    bookList.innerHTML += 
      `<tr>
        <td>${book.id}</td>
        <td>${book.name}</td>
        <td>${book.date}</td>
      </tr>`;
  });
};

module.exports = insertElements;
