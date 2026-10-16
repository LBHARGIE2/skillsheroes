fetch('assets/database/destinations.php')

  .then(res => res.json())
  .then(data => {
    const container = document.querySelector('.grid-container');

    data.forEach(dest => {
      const card = document.createElement('div');
      card.classList.add('destination-card');

      card.innerHTML = `
        <img src="assets/destinations/${dest.image}" alt="${dest.city}">
        <div class="destination-info">
          <h3>${dest.city}, ${dest.country}</h3>
          <p>${dest.number_of_bookings} boekingen</p>
        </div>
      `;

      container.appendChild(card);
    });
  });
