document.addEventListener(
  "wheel",
  function (e) {
    if (e.target.type === "number" && document.activeElement === e.target) {
      e.preventDefault();
    }
  },
  { passive: false },
);

var toggle = document.getElementById("sidebar-toggle");
var overlay = document.getElementById("admin__overlay");

toggle.onclick = function () {
  document.body.classList.toggle("sidebar__open");
};

overlay.onclick = function () {
  document.body.classList.remove("sidebar__open");
};
