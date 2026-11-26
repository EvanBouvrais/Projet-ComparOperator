const searchBar = document.getElementById('search-bar');
const destinations = document.querySelectorAll('.destination-card');

searchBar.addEventListener('input', () => {

    const searchValue = searchBar.value.toLowerCase().trim();

    destinations.forEach(destination => {

        const destinationName = destination.querySelector('h2').textContent.toLowerCase();

        if (destinationName.includes(searchValue)) {
            destination.classList.remove('hidden');
        } else {
            destination.classList.add('hidden');
        }

    });

});