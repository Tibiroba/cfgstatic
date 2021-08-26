require('bootstrap');


const dropdownLink = document.querySelectorAll('.nav-link');
  dropdownLink.forEach(menu => {
    ['touchstart', 'click'].forEach(userEvent => {
      menu.addEventListener(userEvent, handleClick);
    });
  });

  function handleClick(event) {
    event.preventDefault();
    this.classList.add('active');
  };

