function toggleTheme () {
  const bodyTag = document.getElementsByTagName("body")[0]
  if (bodyTag.hasAttribute("data-theme")) {
      bodyTag.removeAttribute("data-theme")
      return
  }
 
  bodyTag.setAttribute("data-theme", "furia")

  window.localStorage.setItem("site-theme", "furia")
}

function applyInitialTheme () {
    const theme = window.localStorage.getItem("site-theme")
    if (theme !== "furia") {
        const bodyTag = document.getElementsByTagName("body")[0]
        bodyTag.setAttribute("data-theme", theme)
    }
}

applyInitialTheme();

document
    .getElementById("theme-toggle")
    .addEventListener("click", toggleTheme);