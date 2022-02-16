dropdown = document.querySelector(".dropdown");
select = document.querySelector(".dropdown .selected");
input = document.querySelector(".dropdown input");
options = document.querySelector(".dropdown .options");
option = document.querySelectorAll(".dropdown .options span");
attaque = document.querySelector(".attaque span");
defense = document.querySelector(".defense span");

dropdown.addEventListener("click", () => {
  dropdown.setAttribute("tabindex", 1);
  dropdown.focus();
  dropdown.classList.toggle("active");
});

dropdown.addEventListener("focusout", () => {
  dropdown.classList.remove("active");
});

option.forEach((element) => {
  element.addEventListener("click", () => {
    let selected = document.querySelector(".dropdown .selected span");
    selected.innerHTML = element.innerHTML;
    selected.setAttribute("value", element.innerHTML);
    option.forEach((e) => {
      e.classList.remove("hidden");
    });
    element.classList.add("hidden");
    input.setAttribute("value", element.innerHTML);
    input.setAttribute("attaque", element.getAttribute("attaque"));
    input.setAttribute("defense", element.getAttribute("defense"));
    attaque.innerHTML = element.getAttribute("attaque");
    defense.innerHTML = element.getAttribute("defense");
  });
});
