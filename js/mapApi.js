function initMap() {
  const madrid = { lat: 40.420175, lng: -3.70346 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: madrid,
  });

  //Ubications
  fetch("data/ubications.json")
    .then((res) => res.json())
    .then((data) => {
      data.map(({ name, ...ubi }) => {
        name = new google.maps.Marker({
          position: ubi,
          map: map,
        });
      });
    });

  // HTML5 geolocation.

  infoWindow = new google.maps.InfoWindow();
  const locationButton = document.createElement("button");

  locationButton.textContent = "SEE MY LOCATION";
  locationButton.classList.add("mapButton");
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
  locationButton.addEventListener("click", () => {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };

          infoWindow.setPosition(pos);
          infoWindow.setContent("You are here");
          infoWindow.open(map);
          map.setCenter(pos);
        },
        () => {
          alert("Can't get your location");
        }
      );
    } else {
      alert("Can't get your location");
    }
  });
}

//Neartest Hotel

function calculateDistance(origin, destinations) {
  let service = new google.maps.DistanceMatrixService();

  service
    .getDistanceMatrix({
      origins: [origin],
      destinations: destinations,
      travelMode: "DRIVING",
    })
    .then((response) => {
      const hotels = response.destinationAddresses.map((hotel) => ({
        name: hotel,
      }));
      const distances = response.rows[0].elements.map((dist) => ({
        distance: dist.distance,
      }));

      const sortedHotels = [];
      for (let i = 0; i < hotels.length; i++) {
        sortedHotels.push({ ...hotels[i], ...distances[i] });
      }
      sortedHotels.sort((a, b) => {
        return a.distance.value - b.distance.value;
      });

      for (let hotel of sortedHotels) {
        const direction = document.createElement("li");
        const distance = document.createElement("h6");
        direction.innerText = `${hotel.name} `;
        distance.innerText = `${hotel.distance.text}`;
        document
          .getElementById("locations")
          .appendChild(direction)
          .appendChild(distance);
      }
    });
}

// Communities
const selectCommunity = document.getElementById("select-community");

fetch("data/nombresComunidades.json")
  .then((res) => res.json())
  .then((data) => {
    data
      .map((community) => {
        let option = document.createElement("option");
        option.value = community;
        option.text = community;
        selectCommunity.appendChild(option);
      })
      .join("");
  });

selectCommunity.addEventListener("change", (e) => {
  const indexCommunity = selectCommunity.selectedIndex;

  const spainCommunities = fetch("data/espanaComunidades.json")
    .then((res) => res.json())
    .then((data) => {
      return data;
    });

  console.log(spainCommunities);

  //   let mark = new google.maps.Polygon({
  //     paths: spainCommunities[indexCommunity],
  //     strokeColor: "red",
  //     strokeOpacity: 1,
  //     strokeWeight: 2,
  //     fillColor: "blue",
  //     fillOpacity: 0.8,
  //   });

  //   mark.setMap(map);
  // });
});

window.initMap = initMap;
