// Mobile menu toggle
const mobileMenuBtn = document.getElementById("mobile-menu-btn")
const mobileMenu = document.getElementById("mobile-menu")
const menuIcon = document.getElementById("menu-icon")
const closeIcon = document.getElementById("close-icon")

mobileMenuBtn.addEventListener("click", () => {
  mobileMenu.classList.toggle("hidden")
  menuIcon.classList.toggle("hidden")
  closeIcon.classList.toggle("hidden")
})

function closeMobileMenu() {
  mobileMenu.classList.add("hidden")
  menuIcon.classList.remove("hidden")
  closeIcon.classList.add("hidden")
}

// Modal functions
function openModal(modalId) {
  document.getElementById(modalId).classList.remove("hidden")
  document.body.style.overflow = "hidden"
}

function closeModal(modalId) {
  document.getElementById(modalId).classList.add("hidden")
  document.body.style.overflow = "auto"
}

// Close modal when clicking outside
document.addEventListener("click", (event) => {
  const modals = ["modal-help", "modal-help-info", "modal-alerts", "modal-profile"]
  modals.forEach((modalId) => {
    const modal = document.getElementById(modalId)
    if (event.target === modal) {
      closeModal(modalId)
    }
  })
})

// Close modal with Escape key
document.addEventListener("keydown", (event) => {
  if (event.key === "Escape") {
    const modals = ["modal-help", "modal-help-info", "modal-alerts", "modal-profile"]
    modals.forEach((modalId) => {
      const modal = document.getElementById(modalId)
      if (!modal.classList.contains("hidden")) {
        closeModal(modalId)
      }
    })
  }
})

// Form submission
function handleFormSubmit(event) {
  event.preventDefault()
  alert("Mensagem enviada! Entraremos em contato em breve.")
  closeModal("modal-help")
  event.target.reset()
}

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault()
    const target = document.querySelector(this.getAttribute("href"))
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      })
    }
  })
})

// Close mobile menu when clicking on navigation links
document.querySelectorAll(".mobile-nav-link").forEach((link) => {
  link.addEventListener("click", closeMobileMenu)
})
