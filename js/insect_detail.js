const content1 = document.getElementById("content-1");
const content2 = document.getElementById("content-2");
const content3 = document.getElementById("content-3");

const tab1 = document.getElementById("tab-1");
tab1.addEventListener("click", () => {
  content1.style.display = "block";
  content2.style.display = "none";
  content3.style.display = "none";
  tab1.className = "active-tab";
  tab2.className = "";
  tab3.className = "";
});

const tab2 = document.getElementById("tab-2");
tab2.addEventListener("click", () => {
  content1.style.display = "none";
  content2.style.display = "block";
  content3.style.display = "none";
  tab1.className = "";
  tab2.className = "active-tab";
  tab3.className = "";
});

const tab3 = document.getElementById("tab-3");
tab3.addEventListener("click", () => {
  content1.style.display = "none";
  content2.style.display = "none";
  content3.style.display = "block";
  tab1.className = "";
  tab2.className = "";
  tab3.className = "active-tab";
});
