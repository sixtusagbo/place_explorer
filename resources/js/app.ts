import "./bootstrap";

const element = document.getElementById("title") as HTMLDivElement;
const addressInput = document.getElementById("address") as HTMLInputElement;

element.querySelector("span")!.textContent = "PLACE EXPLORER";
addressInput.placeholder = "Enter an address";
