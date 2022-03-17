const quest1 = document.getElementById('quest-1');
const quest2 = document.getElementById('quest-2');
const quest3 = document.getElementById('quest-3');

const tab1 = document.getElementById("tab-1");
tab1.addEventListener("click", () => {
  quest1.style.display = "block";
  quest2.style.display = "none";
  quest3.style.display = "none";
  tab1.classList.add("active");
  tab2.classList.remove("active");
  tab3.classList.remove("active");
});

const tab2 = document.getElementById("tab-2");
tab2.addEventListener("click", () => {
  quest1.style.display = "none";
  quest2.style.display = "block";
  quest3.style.display = "none";
  tab1.classList.remove("active");
  tab2.classList.add("active");
  tab3.classList.remove("active");
});

const tab3 = document.getElementById("tab-3");
tab3.addEventListener("click", () => {
  quest1.style.display = "none";
  quest2.style.display = "none";
  quest3.style.display = "block";
  tab1.classList.remove("active");
  tab2.classList.remove("active");
  tab3.classList.add("active");
});