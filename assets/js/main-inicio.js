// Sidebar Dropdown
const allDropdown = document.querySelectorAll("#sidebar .side-dropdown");
const sidebar = document.getElementById("sidebar");

allDropdown.forEach((item) => {
  const a = item.parentElement.querySelector("a:first-child");
  a.addEventListener("click", function (e) {
    e.preventDefault();

    if (a.classList.contains("active")) {
      a.classList.remove("active");
      item.classList.remove("show");
      return;
    }

    allDropdown.forEach((item) => {
      const a = item.parentElement.querySelector("a:first-child");
      a.classList.remove("active");
      item.classList.remove("show");
    });

    a.classList.add("active");
    item.classList.add("show");
  });
});

// Sidebar Collapse
const toggleSidebar = document.querySelector("nav .toggle-sidebar");
const allSideDividers = document.querySelectorAll("#sidebar .divider");

if (sidebar.classList.contains("hide")) {
  allSideDividers.forEach((item) => {
    item.textContent = "-";
  });
  allDropdown.forEach((item) => {
    const a = item.parentElement.querySelector("a:first-child");
    a.classList.remove("active");
    item.classList.remove("show");
  });
} else {
  allSideDividers.forEach((item) => {
    item.textContent = item.dataset.text;
  });
}

toggleSidebar.addEventListener("click", function () {
  sidebar.classList.toggle("hide");

  if (sidebar.classList.contains("hide")) {
    allSideDividers.forEach((item) => {
      item.textContent = "-";
    });

    allDropdown.forEach((item) => {
      const a = item.parentElement.querySelector("a:first-child");
      a.classList.remove("active");
      item.classList.remove("show");
    });
  } else {
    allSideDividers.forEach((item) => {
      item.textContent = item.dataset.text;
    });
  }
});

sidebar.addEventListener("mouseleave", () => {
  if (sidebar.classList.contains("hide")) {
    allDropdown.forEach((item) => {
      const a = item.parentElement.querySelector("a:first-child");
      a.classList.remove("active");
      item.classList.remove("show");
    });
    allSideDividers.forEach((item) => {
      item.textContent = "-";
    });
  }
});

sidebar.addEventListener("mouseenter", () => {
  if (sidebar.classList.contains("hide")) {
    allDropdown.forEach((item) => {
      const a = item.parentElement.querySelector("a:first-child");
      a.classList.remove("active");
      item.classList.remove("show");
    });
    allSideDividers.forEach((item) => {
      item.textContent = item.dataset.text;
    });
  }
});

// Profile Dropdown
const profile = document.querySelector("nav .profile");
const imgProfile = profile.querySelector("img");
const dropdownProfile = profile.querySelector(".profile-link");

imgProfile.addEventListener("click", () => {
  dropdownProfile.classList.toggle("show");
});

// Menu
const allMenu = document.querySelectorAll("main .content-data .head .menu");
allMenu.forEach((item) => {
  const icon = item.querySelector(".icon");
  const menuLink = item.querySelector(".menu-link");

  icon.addEventListener("click", function () {
    menuLink.classList.toggle("show");
  });
});

window.addEventListener("click", function (e) {
  if (e.target !== imgProfile) {
    if (e.target !== dropdownProfile) {
      if (dropdownProfile.classList.contains("show")) {
        dropdownProfile.classList.remove("show");
      }
    }
  }

  allMenu.forEach((item) => {
    const icon = item.querySelector(".icon");
    const menuLink = item.querySelector(".menu-link");

    if (e.target !== icon) {
      if (e.target !== menuLink) {
        if (menuLink.classList.contains("show")) {
          menuLink.classList.remove("show");
        }
      }
    }
  });
});

