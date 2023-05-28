const form = document.querySelector('form') as HTMLFormElement;
const addressInput = document.getElementById('address') as HTMLInputElement;

function searchPlaceHandler(event: SubmitEvent) {
  event.preventDefault();
  // get user input
  const enteredAddress = addressInput.value;
  console.log(enteredAddress);

  // look up place with Google Map API

  // render the map to the DOM
}

form.addEventListener('submit', searchPlaceHandler);
