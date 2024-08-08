// Fetch the file list from the server
fetch('exist.php')
  .then(response => response.json())
  .then(fileList => {
    console.log(fileList);
    })
  .catch(error => console.error(error));
