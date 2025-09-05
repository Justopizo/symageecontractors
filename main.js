document.addEventListener("DOMContentLoaded", () => {
  const backToTopBtn = document.getElementById("backToTop")

  window.addEventListener("scroll", () => {
    if (window.pageYOffset > 300) {
      backToTopBtn.style.display = "block"
    } else {
      backToTopBtn.style.display = "none"
    }
  })

  if (backToTopBtn) {
    backToTopBtn.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      })
    })
  }

  const projectFilters = document.querySelectorAll(".project-filter")
  const projectItems = document.querySelectorAll(".project-item")

  projectFilters.forEach((filter) => {
    filter.addEventListener("click", function (e) {
      e.preventDefault()

      projectFilters.forEach((f) => f.classList.remove("active"))
      this.classList.add("active")

      const filterValue = this.getAttribute("data-filter")

      projectItems.forEach((item) => {
        if (filterValue === "all" || item.classList.contains(filterValue)) {
          item.classList.remove("hidden")
        } else {
          item.classList.add("hidden")
        }
      })
    })
  })

  const forms = document.querySelectorAll("form[data-form-type]")
  forms.forEach((form) => {
    const submitTime = document.createElement("input")
    submitTime.type = "hidden"
    submitTime.name = "submit_time"
    submitTime.value = Date.now()
    form.appendChild(submitTime)

    form.addEventListener("submit", (e) => {
      const currentTime = Date.now()
      const formTime = Number.parseInt(submitTime.value)

      if (currentTime - formTime < 3000) {
        e.preventDefault()
        alert("Please wait a moment before submitting the form.")
        return false
      }

      const honeypot = form.querySelector('input[name="website"]')
      if (honeypot && honeypot.value !== "") {
        e.preventDefault()
        return false
      }
    })
  })

  const lazyImages = document.querySelectorAll('img[loading="lazy"]')
  if ("IntersectionObserver" in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const img = entry.target
          img.src = img.dataset.src || img.src
          img.classList.remove("lazy")
          observer.unobserve(img)
        }
      })
    })

    lazyImages.forEach((img) => imageObserver.observe(img))
  }
})
