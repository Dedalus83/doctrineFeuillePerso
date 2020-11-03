function toggleTheme () {
  const bodyTag = document.getElementsByTagName("body")[0]
  if (bodyTag.hasAttribute("data-theme")) {
      bodyTag.removeAttribute("data-theme")
      window.localStorage.setItem("site-theme", "royal")
      return
  }
  bodyTag.setAttribute("data-theme", "furia")
  $dataTheme = bodyTag.getAttribute("data-theme")
  if($dataTheme == "furia"){
    window.localStorage.setItem("site-theme", $dataTheme)
  }
}

function applyInitialTheme () {
    const theme = window.localStorage.getItem("site-theme")
    if (theme !== "") {
        const bodyTag = document.getElementsByTagName("body")[0]
        bodyTag.setAttribute("data-theme", theme)
    }
}

applyInitialTheme();

document
    .getElementById("theme-toggle")
    .addEventListener("click", toggleTheme);